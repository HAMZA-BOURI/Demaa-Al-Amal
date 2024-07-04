<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function UpdateAnnonce(Request $request)
    {
        $announcement = annonce::find($request->id)->get();
        $announcement->Titre = $request->Title;
        $announcement->Date_Start = $request->DateS;
        $announcement->Date_Stop = $request->DateE;
        $announcement->Description = $request->Description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('uploads', 'public');
            $announcement->image = $imagePath;
        }

        $announcement->save();

        return redirect()->back()->with('success', 'Announcement created successfully!');
    }

    public function FormUpdateAnnonce(Request $request)
    { $id=$request->id;
        $annonce = Annonce::where('id','=',$id)->get();
        return view('ADMIN.Admin.Annonce.Update_Annonce', compact('annonce'));
    }

    public function FormAddAnnonce(Request $request)
    {

    }

    public function AddAnnonce(Request $request)
    {

    }

    public function showlistAnnonce()
    {

    }

    public function DeleteAnnonce(Request $request)
    {

    }
}
