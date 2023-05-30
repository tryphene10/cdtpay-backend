<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Statut_paiement;

class PaiementStatutController extends Controller
{
    public function statutpaiment(){
        $statut = Statut_paiement::all();
        return $this->sendResponse($statut, 'liste statut paiement');
    }
}
