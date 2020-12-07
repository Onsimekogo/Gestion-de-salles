<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class classController extends Controller
{
    public function accueil(){
        return view ('index');
    }

    public function salles(){
        return view ('othersPages/classList');
    }

    public function groupes(){
        return view('othersPages/groupesList');
    }

    public function occupation(){
        return view::make('othersPages/classOccupation');
    }
}
