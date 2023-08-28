<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Offre;
use App\Models\User;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function acceuil(){
        return view('index');
    }
    public function cvtheque(){
        $users = User::all();
        return view('user.cvtheque', compact('users'));
    }
    public function offre(){
        $offre= Offre::all();
        $entreprise = Entreprise::all();
        return view('user.offre', compact('offre', 'entreprise'));
    }
}
