<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Annee_scolaire;
use App\Http\Controllers\API\BaseController as BaseController;

class AnneeScolaireController extends BaseController
{
    public function listannee(){
        $curent = date('Y');
        $list = Annee_scolaire::all();
        return $this->sendResponse($list, 'Liste année Scolaire');
    }
}
