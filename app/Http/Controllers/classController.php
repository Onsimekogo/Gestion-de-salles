<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class classController extends Controller
{
    public function accueil(){
        return view ('index');
    }

    public function salles(){
        return view ('classList');
    }

    public function groupes(){
        return view ('groupesList');
    }

    public function occupation(){
        return view ('classOccupation');
    }
}
