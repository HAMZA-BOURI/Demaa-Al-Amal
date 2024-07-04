<?php

use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Home Start
Route::get('/Form Sing Up',Function (){
    return view('Home.Create_new_A');
})->name('FormNewUser');
Route::post('/Add new User',[UserController::class,"singup"])->name('SingUp');
Route::get('/', [HomeController::class, 'index']) ->name('HomePage');
Route::get('/Health and Eligibility', function () {
    return view('HOME.Health_and_Eligibility');
});
Route::get('/Health assessment', function () {
    return view('HOME.Health_assessement');
});
Route::get('/What Happens to Donated Blood', function () {
    return view('HOME.What_Happens_to_Donated_Blood');
});
Route::get('/Who You Could Help', function () {
    return view('HOME.who_you_could_help');
});

Route::get('/Sign In', [loginController::class, "show"])->name('showdata');//show template
Route::post('/Sign In', [loginController::class, "Singin"])->name('Singin');//test login
Route::get('/The Centers', function () {
    return view('HOME.location_the_C');
});
//Home End
//Admin Start

Route::get('/Admin', [AdminController::class, "showdata"])->name('adimdata');
Route::get('/Admin/Blood Donation', [AdminController::class, "Blood_D"])->name("blood_Ddata");
Route::get('/Admin/Blood Donation/Details/{id}', [AdminController::class, "Blood_Show"])->where('id', '[0-9]+')->name('Donor_Show');


Route::get('/Admin/Centers', [AdminController::class, "showCenters"])->name('showCenters');
Route::post('/Admin/Centers', [AdminController::class, "EditRequst"])->name('saveEditRequest');
Route::get('/Admin/ADD Center', [AdminController::class, "FormAddCenter"])->name('FormAddCenter');
Route::get('/Admin/Center/Update/{id}', [AdminController::class, "FormEditCenter"])->where('id', '[0-9]+')->name('FormEditCenter');
Route::post('/Admin/ADD Center', [AdminController::class, "AddnewCenter"]);
Route::post('/Admin/Update Center/{id}', [AdminController::class, "EditCenter"])->name('EditCenter');
Route::get('/Admin/Centers/Delete/{id}', [AdminController::class, "DeleteCenter"])->where('id', '[0-9]+')->name('Delete_Center');
Route::get('/Admin/Centers/{id}', [AdminController::class, "showCenter"])->where('id', '[0-9]+')->name('Show_Center');
Route::get('/Admin/new Workers', function () {
    return view('ADMIN.Admin.Workes.addWorke');
})->name('ShowformAdd');
Route::post('/Admin/new Workers', [AdminController::class, "AddWorker"]);
Route::get('/Admin/Delete/Worckes/{id}',[AdminController::class,"DeleteWorke"])->name('DeleteW');
Route::get('/Admin/Workers list', [AdminController::class, "showlistWorker"])->name('listWorker');

Route::get('/Admin/List Admins', [AdminController::class, "showlistAdmin"])->name('listAdmin');
Route::get('/Admin/Update Admins/{id}', [AdminController::class, "FormUpdatAdmin"])->name('FormUpdatAdmin');
Route::post('/Admin/Update/Admins/{id}', [AdminController::class, "updatAdmin"])->name('UpdatAdmin');
Route::get('/Admin/ADD Admin', [AdminController::class, "showAddAdmin"])->name('FormAddAdmin');
Route::post('/Admin/ADD Admin', [AdminController::class, "AddAdmin"])->name('AddAdmin');
Route::get('Admin/Delete Admin/{id}', [AdminController::class, "DeleteAdmin"])->name('DeleteAdmin');
Route::get('/Admin/list Donors', [AdminController::class, "Donorlist"])->name('listDonor');
Route::get('/Admin/list Donors/Details/{id}', [AdminController::class, "DonorlistD"])->name('DonorDe');
Route::get('/Admin/list User', [AdminController::class, "Userlist"])->name('listUser');
Route::get('/Admin/list User/Details/{id}', [AdminController::class, "UserD"])->name('UserDe');
Route::get('/Admin/list Publication', [AdminController::class, "listPub"])->name('listPubAdmin');
Route::get('/Admin/Update Publication/{id}', [AdminController::class, "PubD"])->name('PubDe');
Route::post('/Admin/Publication/Update/{id}', [AdminController::class, "UpdatPub"])->name('PubUpdate');
Route::post('/Admin/Delete Publication/{id}', [AdminController::class, "DeletePub"])->name('DeletePub');
//Admin End

//User Start
Route::get('/User/ADD Publication',[UserController::class,"FormADD"])->name("FormADDPub");
Route::post('/User/ADD/Publication',[UserController::class,"ADDPub"])->name("ADDPub");
Route::get('/User/Publication list',[UserController::class,"listPub"])->name("listPub");
Route::get('/User',[UserController::class,'Profile'])->name('Profile');
Route::post('/User/Update/',[UserController::class,"Update_User_Info"])->name('Update');
Route::get('/User/delete/Publication/{id}', [UserController::class, "DeletePub"])->name('DeletePub');
//User End
Route::get('/User/Logout',[UserController::class,"logout"])->name('Logout');
Route::post('/Create', [loginController::class, "Store"])->name('Store');//creae new admin de center



