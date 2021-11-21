<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listeMediasController extends Controller
{
    public function getListeMedias() {
        return view('listeMedias');
    }

    public function getListeMedias2($type, $annee) {
        return view('listeMedias', ['type' => $type, 'annee' => $annee]);
    }
  
  
//
}

