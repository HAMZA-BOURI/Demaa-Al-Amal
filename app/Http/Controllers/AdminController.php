<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\center;
use App\Models\dones;
use App\Models\donor;
use App\Models\publication;
use App\Models\stock;
use App\Models\users;
use App\Models\Workers;
use http\Message;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use SebastianBergmann\Diff\Exception;
use function Laravel\Prompts\error;

class AdminController extends Controller
{
    public function showdata(Request $request)
    {
        if ($request->session()->has('Admin')) {
            $admin = session()->get('Admin');

            if (is_string($admin)) {
                $admin = json_decode($admin);
            }

            if (is_object($admin) && property_exists($admin, 'id')) {
                //dd($admin->id);
            } else {
                dd('Admin not found in session or does not have an id property.');
            }
        } else {
            return redirect()->route('showdata')->with('error', "use your account");
        }

        $years = dones::selectRaw('YEAR(Date_D) as year')
            ->groupBy(dones::raw('YEAR(Date_D)'))
            ->get();
        $donorCount = donor::count();
        $bloodSum = dones::Sum('qte');
        $stockCount = stock::Sum('QTE');
        $pubCount = publication::count();
        $result = [
            'Donor' => $donorCount,
            'Stock' => $stockCount,
            'Blood' => $bloodSum,
            'Pub' => $pubCount
        ];
        $B_Dlist = dones::join('donors', 'dones.ID_Donor', '=', 'donors.id')
            ->join('centers', 'dones.ID_Center', '=', 'centers.id')
            ->select('dones.*', 'donors.*', 'centers.*', 'dones.id as done_id')
            ->orderBy('done_id', 'DESC') // Order by primary key in descending order
            ->get();

        return view('ADMIN.Admin.index', compact('B_Dlist', 'years', 'result'));
    }

    public function Blood_D()
    {
        $B_Dlist = dones::join('donors', 'dones.ID_Donor', '=', 'donors.id')
            ->join('centers', 'dones.ID_Center', '=', 'centers.id')
            ->select('dones.*', 'donors.*', 'centers.*', 'dones.id as done_id')
            ->orderBy('done_id', 'DESC') // Order by primary key in descending order
            ->get();
        return view('ADMIN.Admin.Blood_D', compact('B_Dlist'));
    }

    public function Blood_Show(Request $request)
    {
        $id = $request->id;
        $Dlist = dones::join('donors', 'dones.ID_Donor', '=', 'donors.id')
            ->join('centers', 'dones.ID_Center', '=', 'centers.id')
            ->select('dones.*', 'donors.*', 'centers.*', 'dones.id as done_id')
            ->orderBy('done_id', 'DESC') // Order by primary key in descending order
            ->findOrFail($id);
        if ($Dlist) {
            return view('ADMIN.Admin.Blood_D_d', compact('Dlist'));
        } else {
            return redirect()->route('blood_Ddata')->with('error', "$id The ID is incorrect");
        }

    }


    public function showCenters()
    {
        // Subquery for dones_counts
        $donesCounts = dones::select('dones.ID_Center', dones::raw('COUNT(*) as Donor'))
            ->groupBy('dones.ID_Center');

        // Subquery for stocks_counts
        $stocksCounts = stock::select('stocks.ID_Center', stock::raw('Sum(QTE) as Stock'))
            ->groupBy('stocks.ID_Center');

        // Subquery for admin_counts
        $adminCounts = admin::
        select('admins.ID_Center', admin::raw('COUNT(*) as Admin'), admin::raw('MAX(admins.Username) as Username'))
            ->groupBy('admins.ID_Center');

        // Main query
        $centers = center::leftJoinSub($donesCounts, 'dones_counts', 'centers.id', '=', 'dones_counts.ID_Center')
            ->leftJoinSub($stocksCounts, 'stocks_counts', 'centers.id', '=', 'stocks_counts.ID_Center')
            ->leftJoinSub($adminCounts, 'admin_counts', 'centers.id', '=', 'admin_counts.ID_Center')
            ->select(
                'centers.*',
                center::raw('COALESCE(dones_counts.Donor, 0) as Donor'),
                center::raw('COALESCE(stocks_counts.Stock, 0) as Stock'),
                center::raw("COALESCE(admin_counts.Username, '-') as Admin")
            )
            ->get();
        $request = \App\Models\request::join('centers', 'requests.ID_Center', '=', 'centers.id')
            ->select('centers.Nome as Center', 'centers.Ville as Ville', 'requests.*')
            ->get();

        return view('ADMIN.Admin.Center.Blood_C_L', compact('centers', 'request'));
    }

    public function EditRequst(Request $request)
    {
        $Req = \App\Models\request::findOrFail($request->idRequests);
        $Req->Status = $request->Status;
        $Req->save();
        if ($Req) {
            return redirect()->route('saveEditRequest')->with('success', "Success Save");
        } else {
            return redirect()->route('saveEditRequest')->with('error', "Error Not Save");
        }
    }

    public function showCenter(Request $request)
    {
        // Subquery for dones_counts
        $donesCounts = dones::select('dones.ID_Center', dones::raw('COUNT(*) as Donor'))
            ->groupBy('dones.ID_Center');

        // Subquery for stocks_counts
        $stocksCounts = stock::select('stocks.ID_Center', stock::raw('COUNT(*) as Stock'))
            ->groupBy('stocks.ID_Center');

        // Subquery for admin_counts
        $adminCounts = admin::
        select('admins.ID_Center', admin::raw('COUNT(*) as Admin'), admin::raw('MAX(admins.Username) as Username'))
            ->groupBy('admins.ID_Center');

        // Main query
        $center = center::leftJoinSub($donesCounts, 'dones_counts', 'centers.id', '=', 'dones_counts.ID_Center')
            ->leftJoinSub($stocksCounts, 'stocks_counts', 'centers.id', '=', 'stocks_counts.ID_Center')
            ->leftJoinSub($adminCounts, 'admin_counts', 'centers.id', '=', 'admin_counts.ID_Center')
            ->select(
                'centers.*',
                center::raw('COALESCE(dones_counts.Donor, 0) as Donor'),
                center::raw('COALESCE(stocks_counts.Stock, 0) as Stock'),
                center::raw("COALESCE(admin_counts.Username, '-') as Admin")
            )->find($request->id);
        //dd($center);
        $Emp = Workers::leftJoin('centers', 'workers.ID_Center', '=', 'centers.id')
            ->select('workers.*', 'centers.Nome as Center')->orderBy('id', 'desc')->get();
        return view('ADMIN.Admin.Center.Blood _C_L_D', compact('center', 'Emp'));
    }
    public function DeleteWorke(Request $request)
    {
        $admin = Workers::find($request->id);
        if ($admin) {
            $admin->delete();

            // Redirect with success message
            return redirect()->route('listWorker')->with('success', 'Worker deleted successfully!');
        }
        return redirect()->route('listWorker')->with('error', 'Worker not found.');
    }

    public function AddWorker(Request $request)
    {
        $Role = $request->Role;
        $name = $request->Name;
        $F_name = $request->F_name;
        $Phone = $request->Phone;
        $mail = $request->mail;
        $CIN = $request->CIN;
        $Date_Start = date("Y/m/d");
        $ID_Center = null;
        try {
            $mssg = Workers::create([
                'Role' => $Role,
                'CIN' => $CIN,
                'Nom' => $name,
                'Prenom' => $F_name,
                'Phone' => $Phone,
                'mail' => $mail,
                'Date_Start' => $Date_Start,
                'ID_Center' => $ID_Center
            ]);
            return redirect()->route('listWorker')->with('success', 'Worker saved successfully!');
        } catch (QueryException $e) {
            Log::error('Database query error: ' . $e->getMessage());

            // Return a user-friendly error message
            return redirect()->route('ShowformAdd')->with('error', $e->getMessage());
        }
    }

    public function showlistWorker()
    {
        $Worke = Workers::leftJoin('centers', 'workers.ID_Center', '=', 'centers.id')
            ->select('workers.*', 'centers.Nome as Center')->orderBy('id', 'desc')->get();
        //dd($Worke);
        return view('ADMIN.Admin.Workes.list_Workers', compact('Worke'));
    }

    public function FormAddCenter()
    {
        $Worke = Workers::whereNull('ID_Center')->get();
        //dd($Worke);
        return view('ADMIN.Admin.Center.Blood_ADD_C', compact('Worke'));
    }

    public function AddnewCenter(Request $request)
    {
        $mail = $request->mail;
        $Date_S = $request->DateS;
        $Phone = $request->Phone;
        $Name = $request->Center_Name;
        $Ville = $request->ville;
        $Status = $request->Status;
        try {
            $mssg = center::create([
                'Nome' => $Name,
                'mail' => $mail,
                'Phone' => $Phone,
                'Ville' => $Ville,
                'Date_S' => $Date_S,
                'Status' => $Status
            ]);

            if (isset($request->id)) {
                foreach ($request->id as $item) {
                    $Req = Workers::findOrFail($item);
                    $Req->ID_Center = $mssg->id;
                    $Req->save();
                }
            }

            return redirect()->route('showCenters')->with('success', 'Worker saved successfully!');
        } catch (QueryException $e) {
            Log::error('Database query error: ' . $e->getMessage());

            // Return a user-friendly error message
            return redirect()->route('showCenters')->with('error', $e->getMessage());
        }
    }


    public function FormEditCenter(Request $request)
    {

        $Worke = Workers::whereNull('ID_Center')->get();
        $CenterWorke = Workers::where('workers.ID_Center', '=', $request->id)->get();
        $Center = center::findOrFail($request->id);
        return view('ADMIN.Admin.Center.Blood_Update_C', compact('Worke', 'CenterWorke', 'Center'));
    }


    public function EditCenter(Request $request)
    {
        // Get the request data
        $mail = $request->mail;
        $Date_S = $request->DateS;
        $Phone = $request->Phone;
        $Name = $request->Center_Name;
        $Ville = $request->ville;
        $Status = $request->Status;

        try {
            // Find the center by ID
            $Center = center::findOrFail($request->id);

            // Update center details
            $Center->Nome = $Name;
            $Center->mail = $mail;
            $Center->Phone = $Phone;
            $Center->Ville = $Ville;
            $Center->Date_S = $Date_S;
            $Center->Status = $Status;
            $Center->save();

            if (isset($request->idnull)) {
                foreach ($request->idnull as $idNull) {
                    // Find each worker by ID and update their center ID
                    $Worker = Workers::findOrFail($idNull);
                    $Worker->ID_Center = null;
                    $Worker->save();
                }
            }
            // Check if there are any worker IDs in the request
            if (isset($request->idW)) {
                foreach ($request->idW as $worker_id) {
                    // Find each worker by ID and update their center ID
                    $Worker = Workers::findOrFail($worker_id);
                    $Worker->ID_Center = $request->id;
                    $Worker->save();
                }
            }

            // Redirect with success message
            return redirect()->route('showCenters')->with('success', 'Center and workers updated successfully!');
        } catch (QueryException $e) {
            // Log the error
            Log::error('Database query error: ' . $e->getMessage());

            // Return a user-friendly error message
            return redirect()->route('showCenters')->with('error', 'There was an error updating the center. Please try again.');
        }

    }

    function DeleteCenter(Request $request)
    {
        try {
            // Find and delete the center by ID
            $center = Center::find($request->id);
            if ($center) {
                // Find all workers associated with the center
                $centerWorkers = Workers::where('ID_Center', '=', $request->id)->get();

                // Loop through each worker and set their ID_Center to null, then save
                foreach ($centerWorkers as $worker) {
                    $worker->ID_Center = null;
                    $worker->save();
                }
                $center->delete();
                // Redirect with success message
                return redirect()->route('showCenters')->with('success', 'Center and workers deleted successfully!');
            } else {
                // Redirect with error message if center not found
                return redirect()->route('showCenters')->with('error', 'Center not found.');
            }
        } catch (Exception $ex) {
            // Redirect with error message in case of exception
            return redirect()->route('showCenters')->with('error', 'There was an error deleting the center. Please try again.');
        }
    }

    public function showAddAdmin()
    {
        $center = center::whereNotIn('id', function ($query) {
            $query->select('ID_Center')
                ->from('admins');
        })
            ->get();

        return view('ADMIN.Admin.Admin.Add_New_Admin', compact('center'));
    }

    public function showlistAdmin()
    {
        $admin = admin::join('centers', 'centers.id', '=', 'admins.ID_Center')
            ->select('admins.*', 'centers.Nome as Center')
            ->get();
        return view('ADMIN.Admin.Admin.list_Admin', compact('admin'));
    }

    public function AddAdmin(Request $request)
    {
        $nom = $request->F_nameF;
        $Prenom = $request->L_name;
        $Username = $request->UserName;
        $Password = $request->C_password;
        $CIN = $request->CIN;
        $mail = $request->mail;
        $Phone = $request->Phone;
        $ID_Center = $request->Center;
        $Status = $request->Status;
        try {
            admin::create([
                'nom' => $nom,
                'Prenom' => $Prenom,
                'Username' => $Username,
                'Password' => $Password,
                'mail' => $mail,
                'CIN' => $CIN,
                'Phone' => $Phone,
                'ID_Center' => $ID_Center,
                'Status' => $Status
            ]);
            return redirect()->route('listAdmin')->with('success', 'Admin saved successfully!');
        } catch (Exception $ex) {
            // Return a user-friendly error message
            return redirect()->route('FormAddAdmin')->with('error', $ex->getMessage());
        }
    }

    public function FormUpdatAdmin(Request $request)
    {
        $center = center::whereNotIn('id', function ($query) {
            $query->select('ID_Center')
                ->from('admins');
        })
            ->get();
        $admin = admin::join('centers', 'centers.id', '=', 'admins.ID_Center')
            ->select('admins.*', 'centers.Nome as Center')
            ->where('admins.id', '=', $request->id)
            ->get();
        return view('ADMIN.Admin.Admin.Updat_Admin', compact('admin', 'center'));
    }

    public function updatAdmin(Request $request)
    {

        $prenom = $request->L_name;
        $username = $request->UserName;
        $password = $request->C_password; // Ideally, hash the password here
        $cin = $request->CIN;
        $nom = $request->F_nameF;
        $mail = $request->mail;
        $phone = $request->Phone;
        $idCenter = $request->Center;
        $status = $request->Status;

        try {
            $center = admin::findOrFail($request->id);

            $center->nom = $nom;
            $center->Prenom = $prenom;
            $center->Username = $username;
            $center->Password = $password; // Hashing the password
            $center->mail = $mail;
            $center->CIN = $cin;
            $center->Phone = $phone;
            $center->ID_Center = $idCenter;
            $center->Status = $status;
            $center->save();

            return redirect()->route('listAdmin')->with('success', 'Admin updated successfully!');
        } catch (Exception $ex) {
            return redirect()->route('FormAddAdmin')->with('error', $ex->getMessage());
        }

    }

    public function DeleteAdmin(Request $request)
    {
        $admin = Admin::find($request->id);
        if ($admin) {
            $admin->delete();

            // Redirect with success message
            return redirect()->route('listAdmin')->with('success', 'Admin deleted successfully!');
        }
        return redirect()->route('showAdmins')->with('error', 'Admin not found.');
    }

    public function Donorlist()
    {
        $Donor = donor::all();
        return view('ADMIN.Admin.Donor.list_Donor', compact('Donor'));
    }

    public function DonorlistD(Request $request)
    {
        $Donor = donor::find($request->id)
            ->get();
        return view('ADMIN.Admin.Donor.Donor_d', compact('Donor'));
    }

    public function Userlist()
    {
        $User = users::all();
        return view('ADMIN.Admin.User.list_User', compact('User'));
    }

    public function UserD(Request $request)
    {
        $User = users::find($request->id)
            ->get();
        return view('ADMIN.Admin.User.User_d', compact('User'));
    }

    public function listPub()
    {
        $publication = publication::all();
        return view('ADMIN.Admin.Publication.list_Publication', compact('publication'));

    }

    public function PubD(Request $request)
    {
        $data = publication::find($request->id);
        if ($data) {
            return view('ADMIN.Admin.Publication.Update_S_Publication', compact('data'));

        } else {
            return redirect()->route('listPubAdmin')->with('error', 'Publication not found.');
        }


    }

    public
    function UpdatPub(Request $request)
    {
        $data = publication::find($request->id);
        if ($data) {
            $data->Status = $request->Status;
            $data->save();
            return redirect()->route('listPubAdmin')->with('success', 'Publication updated successfully!');
        } else {
            return redirect()->route('listPubAdmin')->with('error', 'Publication not found.');
        }
    }
    public function DeletePub(Request $request)
    {
        $Pub = publication::find($request->id);
        if ($Pub) {
            $Pub->delete();

            // Redirect with success message
            return redirect()->route('listPubAdmin')->with('success', 'Admin deleted successfully!');
        }
        return redirect()->route('listPubAdmin')->with('error', 'Admin not found.');
    }

}









