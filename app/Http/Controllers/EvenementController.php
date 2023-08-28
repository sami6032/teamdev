<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class EvenementController extends Controller
{


    public function traiterEven(){
        $evenement = Evenement::all();
    return view(('evenement'), compact('evenement'));
    }

    // public function store(Request $request)
    // {
    //     Evenement::create($request->all());
    //     return redirect()->route('evenement');
    // }

    public function AjouterEven()
    {
        return view('AjouterEven');
    }
    public function traitEven(Request $request)
    {
       $request->validate([

       'photos'=> 'required|file',
        'titre'=> 'required',
        'description'=> 'required',
        'lieu'=>'required',
        'date'=> 'required',
        
       ]);

       if ($request->hasFile('photos') && $request->file('photos')->isValid()) {
        $file = $request->file('photos');

        // Vérifier si le type de fichier est autorisé (PNG, JPEG ou JPG)
        if ($file->getClientOriginalExtension() === 'png' ||
            in_array($file->getClientOriginalExtension(), ['jpeg', 'jpg'])) {

            // Générer un nom de fichier aléatoire pour éviter les conflits
            $randomFileName = Str::random(40) . '.' . $file->getClientOriginalExtension();

            // Déplacer le fichier vers le dossier "public/images"
            $file->move(public_path('images'), $randomFileName);
            $FileName= 'images/'. $randomFileName;
            
        }
     }

            Evenement::create([
                'photos'=> $FileName,
                'titre'=> $request->titre,
                'description'=> $request->description,
                'lieu'=> $request->lieu,
                'date'=> $request->date,
                'user_id'=> 1,
       ]);

        return redirect()->back()->with('success', 'Evènement publié avec succès');

    }
}
