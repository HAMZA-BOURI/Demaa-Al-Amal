<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\adminCenter;
use App\Models\dones;
use App\Models\donor;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\session;
use PHPUnit\Exception;


class loginController extends Controller
{
    public function show()
    {
        return view('HOME.Sing-In_up');
    }


    public function Singin(Request $request)
    {
        if ($request->has('CIN')) {
            $donor = Donor::where('CIN', $request->CIN)->first();
            if ($donor) {
                $Id = $donor->id;
                $mail = $donor->mail;
                $name = $donor->name;
                $surname = $donor->Prenom;
                $address = $donor->Adresse;
                $username = $request->Username;
                $CIN = $donor->CIN;
                $password = $request->PasswordS;
                $Sex = $donor->sex;
                $Phone = $donor->Phone;
                $blood_type = $donor->Type_Blood;
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
                        'ID_Donor'=>$Id,
                        'password' => Hash::make($password),
                        'Type_Blood' => $blood_type
                    ]);
                    return redirect()->route('showdata')->with('success', "use your account");
                }catch (Exception $ex){
                    return redirect()->route('SingUp')->with('error', "Verify Personal Information");
                }
            } else {
                return redirect()->route('FormNewUser');
            }
        } else {
            $adminUser = AdminCenter::where('mail', $request->email)->first();
            $user = users::where('UserName', $request->email)->first();
            if ($adminUser) {
                if (Hash::check($request->password, $adminUser->Password)) {
                    $request->session()->put('Admin', "$adminUser");
                    $Admin=$request->session()->get('Admin');
                    if (is_string($Admin)) {
                        $Admin = json_decode($Admin);
                    }
                    return redirect()->route('adimdata')->with('success', "Welcome to: $Admin->mail");
                } else {
                    return redirect()->route('showdata')->with('error', "$request->email: The password is incorrect");
                }
            } elseif ($user) {
                if (Hash::check($request->password, $user->password)) {
                    $request->session()->put('User', "$user");
                    $userS=$request->session()->get('User');
                    $userS = json_decode($userS);
                    return redirect()->route('Profile')->with('success', "Welcome to: $userS->UserName");
                } else {
                    return redirect()->route('showdata')->with('error', "$request->email: The password is incorrect");
                }
            } else {
                return redirect()->route('showdata')->with('error', "$request->email: This user is not found");
            }
        }
    }

    public function Store(Request $request)
    {
        $mail = $request->email;
        $password = $request->password;
        adminCenter::create([
            'mail' => $mail,
            'Password' => Hash::make($password)
        ]);
        return redirect()->route('showdata');
    }
}
