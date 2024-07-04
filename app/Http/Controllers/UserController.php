<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\admin;
use App\Models\dones;
use App\Models\donor;
use App\Models\publication;
use App\Models\users;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Exception;

class UserController extends Controller
{
    public function FormADD()
    {
        $user = session()->get('User');
        if (is_string($user)) {
            $user = json_decode($user);
        }
        $donorCount = dones::where('dones.ID_Donor',"=",$user->ID_Donor)->count();
        $life=$donorCount*3;

        return view('User.User.Publication.ADD_Publication', compact('user','donorCount','life'));
    }

    public function Profile()
    {
        $user = session()->get('User');

        if (is_string($user)) {
            $user = json_decode($user);
            $donorCount = dones::where('dones.ID_Donor',"=",$user->ID_Donor)->count();
            $life=$donorCount*3;
            //dd($user);
            return view('User.User.index', compact('user','donorCount','life'));
        } else {
            return redirect()->route('showdata')->with('error', "use your account");
        }

    }

    public function ADDPub(Request $request)
    {
        try {
            $userS = $request->session()->get('User');
            $userS = json_decode($userS);
            $title = $request->title;
            $ville = $request->city;
            $Location = $request->Location;
            $blood_type = $request->Blood_type;
            $Description = $request->Description;
            $datrP = $request->DateP;
            publication::create([
                'Titre' => $title,
                'Description' => $Description,
                'Type_blood' => $blood_type,
                'location' => $Location,
                'UserName' => $userS->UserName,
                'Ville' => $ville,
                'Date_Public' => $datrP
            ]);
            return redirect()->route('listPub')->with('success', 'Publication ADD successfully!');
        } catch (Exception $ex) {
            return redirect()->route('listPub')->with('error', "Publication Not ADD Error");
        }

    }

    public function Update_User_Info(Request $request)
    {
        $user = session()->get('User');

        if (is_string($user)) {
            $users = json_decode($user);
            $id = $users->id;
        } else {
            return redirect()->route('showdata')->with('error', "use your account");
        }
        //dd($request);
        $user = users::findOrFail($id);
        $mail = $request->mail;
        $name = $request->name;
        $surname = $request->surname;
        $address = $request->address;
        $username = $request->username;
        $CIN = $request->CIN;
        $password = $request->password;
        $Sex = $request->Sex;
        $Phone = $request->Phone;
        $blood_type = $request->blood_type;
        if ($user) {
            $user->name = $name;
            $user->Prenom = $surname;
            $user->mail = $mail;
            $user->Adresse = $address;
            $user->CIN = $CIN;
            $user->Sex = $Sex;
            $user->Phone = $Phone;
            $user->UserName = $username;
            $user->password = Hash::make($password);
            $user->Type_Blood = $blood_type;
            $user->save();
            return redirect()->route('Profile')->with('success', "successfully Save");
        } else {
            return redirect()->route('Profile')->with('error', "Error Not Save");
        }
    }

    public function singup(Request $request)
    {   $mail = $request->email;
        $name = $request->name;
        $surname = $request->surname;
        $address = $request->address;
        $username = $request->username;
        $CIN = $request->CIN;
        $password = $request->password;
        $Sex = $request->Sex;
        $Phone = $request->Phone;
        $blood_type = $request->blood_type;
        try {
            users::create([
                'name' => $name,
                'Prenom' => $surname,
                'mail' => $mail,
                'Adresse' => $address,
                'CIN' => $CIN,
                'Sex' => $Sex,
                'Phone' => $Phone,
                'UserName' => $username,
                'password' => Hash::make($password),
                'Type_Blood' => $blood_type
            ]);
            return redirect()->route('showdata')->with('success', "use your account");
        }catch (Exception $ex){
            return redirect()->route('SingUp')->with('error', "Verify Personal Information");
        }

    }

    public function listPub()
    {
        $user = session()->get('User');
        if (is_string($user)) {
            $user = json_decode($user);
            $donorCount = dones::where('dones.ID_Donor',"=",$user->ID_Donor)->count();
            $life=$donorCount*3;
        }
        $Pub = publication::where('UserName','=',$user->UserName)->get();
        return view('User.User.Publication.list_publication', compact('Pub', 'user' ,'donorCount','life'));

    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('showdata')->with('success', "Logout Successfully");
    }
    public function UpadtePub(Request $request)
    {
        $data = publication::find($request->id);
        if ($data) {
            return view('ADMIN.Admin.Publication.Update_S_Publication', compact('data'));

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
            return redirect()->route('listPub')->with('success', 'Admin deleted successfully!');
        }
        return redirect()->route('listPub')->with('error', 'Admin not found.');
    }
}
