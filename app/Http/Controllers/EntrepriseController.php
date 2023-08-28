<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;

class EntrepriseController extends Controller
{
    public function index()
    {
        $entreprises = Entreprise::all();
        return view('users.index2', compact('entreprises'));
    }

    public function show()
    {
        $entreprises = Entreprise::all();
        return view('users.index2', compact('entreprises'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        Entreprise::create($request->all());
        return redirect()->route('users.index');
    }

    public function edit(Request $request, $id)
    {
        $entreprise = Entreprise::find($id);
        return view('users.edit', compact('entreprise'));
    }

    public function update(Request $request, $id)
   {
       // Logique pour mettre à jour les données du produit
       $entreprise = Entreprise::findOrFail($id);
       if($entreprise){
        $entreprise->name = $request->input('name');
        $entreprise->domaine = $request->input('domaine');
        $entreprise->anne = $request->input('anne');
        $entreprise->mission = $request->input('mission');
        $entreprise->vision = $request->input('vision');
        $entreprise->photo = $request->input('photo');
        $entreprise->description = $request->input('description');
        $entreprise->save();
    }
    //   $entreprise->update($request->all());
          return redirect()->route('index2')->with('success', 'Produit modifié avec succès');
    
}
// public function destroy()
//     {
//         Entreprise::destroy();
//         return redirect()->route('users.index');
//     }
}