<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre; // Assurez-vous d'importer le modèle approprié


class OffreController extends Controller
{
public function create()
{
    return view('users.offres');
}

public function liste()
{
    $offres = Offre::all();
    $entreprise = Offre::all();
    return view('users.offrelist',compact('offres','entreprise'));
}

public function Offrestore(Request $request)
    {
     Offre::create($request->all());
        return redirect()->route('users.offrelist');
    }

// public function Offrestore(Request $request)
// {
//     $validatedData = $request->validate([
//         'title' => 'required|string|max:255',
//         'description' => 'required|string',
//         'lien_inscription' => 'required|string',
//         'date_publication' => 'required|date',
//         'date_expiration' => 'required|date',
//         // Ajoutez ici d'autres règles de validation pour les champs de l'offre d'emploi
//     ]);

//     $offre = new Offre();
//     $offre->title = $validatedData['title'];
//     $offre->description = $validatedData['description'];
//     $offre->lien_inscription = $validatedData['lien_inscription'];
//     $offre->date_publication = $validatedData['date_publication'];
//     $offre->date_expiration = $validatedData['date_expiration'];
//     // Assignez d'autres valeurs aux propriétés de l'offre d'emploi
//     $offre->save();

//     return redirect()->route('users.offrelist')->with('success', 'Offre d\'emploi publiée avec succès !');
// }
}