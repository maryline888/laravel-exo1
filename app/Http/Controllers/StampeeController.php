<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StampeeController extends Controller
{
    /**
     * affichage de la page index 
     */
    public function index()
    {
        return view('index');
    }
    /**
     * affichage de la page catalogue 
     */
    public function catalogue()
    {
        return view('catalogue');
    }
    /**
     * affichage de la page de formulaire d'ajout d'enchere 
     */
    public function getForm()
    {
        return view('formEnchere');
    }
    /**
     * affichage des infos receuillis concernant l'enchère
     */
    public function validForm(Request $request)
    {
        return view('formEnchere', [
            'data' => $request
        ]);
    }
    /**
     * affichage de la page connexiomn
     */
    public function getConnexion()
    {
        return view('connexion');
    }
    /**
     * affichage de la connexion réussi ou échoué 
     */
    public function validConnexion(Request $request)
    {
        return view('connexion', [
            'data' => $request
        ]);
    }
}
