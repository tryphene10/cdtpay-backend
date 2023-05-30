<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Statut_eleve;

class StatutEleveController extends Controller
{
    public function statutpaiment(){
        $statut = Statut_eleve::all();
        return $this->sendResponse($statut, 'liste statut paiement');
    }
}
