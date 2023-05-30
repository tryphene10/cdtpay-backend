<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Paiement_method;
use Illuminate\Support\Facades\Request;

class PaiementMethodController extends Controller
{
    //
        public function paimentmethod(){
            $payMethod = Paiement_method::all();
            return $this->sendResponse($payMethod, 'liste statut paiement');
        }

}
