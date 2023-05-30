<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Paiement;
use App\Models\Paiement_method;
use App\Models\Statut_paiement;
use App\Models\Tranche;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class PaiementController extends Controller
{
    //

    public function initierpayement(Request $request){

        $validator = Validator::make($request->all(), [
            'ref_tranche' => 'String',
            'ref_paymethod' => 'string|nullable',
            'montant' => 'required',
            'pay_phone' => 'required',
            'apiKey' => 'string|required',
            'secretKey' => 'string|required',
        ]);

        if($validator->fails()){
            if (!empty($validator->errors()->all()))
            {
                foreach ($validator->errors()->all() as $error)
                {
                    return $this->sendError('verifier vos informations', $error);
                }
            }

        }
        $user = Auth::user();
        if ($user->role_id->name == 'eleve') {
            $classe = Classe::where('id', '=', $user->classe_id)->first();
            $paymethod = Paiement_method::where('ref', '=', $request->get('ref_paymethod'))->first();
            $tranche = Tranche::where('ref', '=', $request->get('ref_tranche'))->first();
            $phone = $request->get('pay_phone');
            $paystatus = Statut_paiement::where('designation', '=', 'initie')->first();

            if(strlen($phone) == 12) {

                if(preg_match('/^(237)(\d{3})(\d{3})(\d{3})$/', $phone, $matches)) {

                    if($paymethod->designation == 'mtn') {

                        $phone = $matches[1].$matches[2].$matches[3].$matches[4];

                    }

                    if($paymethod->designation == 'orange') {

                        $phone = $matches[2].$matches[3].$matches[4];

                    }
                }

            }elseif(strlen($phone) == 9) {

                if(preg_match('/^(6)(\d{2})(\d{3})(\d{3})$/', $phone, $matches)) {

                    if($paymethod->designation == 'mtn'){

                        $phone = "237".$matches[1].$matches[2].$matches[3].$matches[4];

                    }

                    if($paymethod->designation == 'orange'){

                        $phone = $matches[1].$matches[2].$matches[3].$matches[4];

                    }
                }

            }else{
                DB::rollback();
                return $this->sendError('02',['error'=>'Veuillez saisir un numéro correct.']);
            }
            $paiement = Paiement::where('tranche_id','=',$tranche->id)->sum('montant');
            $payrest = $tranche->montant - $paiement;
            if ($tranche->intitutle_id->designation === 'Inscription & Avance écolage') {
                /*$paiement = DB::table('paiements')->select('paiments.montant as montant')->where('tranche_id','=',$tranche->id)->get();*/

                if (!empty($paiement)){
                    if ($payrest == $request->get('montant')){
                        try {
                            $pay = new Paiement();
                            $pay->eleve()->associate($user);
                            $pay->tranche()->associate($tranche);
                            $pay->paiement_method()->associate($paymethod);
                            $pay->statut_paiement()->associate($paystatus);
                            $pay->montant = $request->get('montant');
                            $pay->pay_phone = $phone;
                            $pay->generateReference();
                            $pay->save();

                            //initier le payement a mtn


                            //apres avoir recu le statut du payement de mtn, modifier la table payement et crée une instance de second paiement
                        }catch (\Exception $exception){
                            DB::rollback();
                            return $this->sendError('une exception a été levé', $exception);
                        }
                    }else{
                        try {
                            $pay = new Paiement();
                            $pay->eleve()->associate($user);
                            $pay->tranche()->associate($tranche);
                            $pay->paiement_method()->associate($paymethod);
                            $pay->statut_paiement()->associate($paystatus);
                            $pay->montant = $request->get('montant');
                            $pay->pay_phone = $phone;
                            $pay->generateReference();
                            $pay->save();

                            //initier le payement a mtn


                            //apres avoir recu le statut du payement de mtn, modifier la table payement et crée une instance de second paiement
                        }catch (\Exception $exception){
                            DB::rollback();
                            return $this->sendError('une exception a été levé', $exception);
                        }
                    }
                }else{
                    try {
                        $pay = new Paiement();
                        $pay->eleve()->associate($user);
                        $pay->tranche()->associate($tranche);
                        $pay->paiement_method()->associate($paymethod);
                        $pay->statut_paiement()->associate($paystatus);
                        $pay->montant = $request->get('montant');
                        $pay->pay_phone = $phone;
                        $pay->generateReference();
                        $pay->save();

                        //initier le payement a mtn


                        //apres avoir recu le statut du payement de mtn, modifier la table payement et crée une instance de second paiement
                    }catch (\Exception $exception){
                        DB::rollback();
                        return $this->sendError('une exception a été levé', $exception);
                    }
                }
            }
            elseif ($tranche->intitutle_id->designation === 'Premiere Tranche'){
                // payement de la premier tranche
                if (!empty($paiement)){
                    if ($payrest == $request->get('montant')){
                        try {
                            $pay = new Paiement();
                            $pay->eleve()->associate($user);
                            $pay->tranche()->associate($tranche);
                            $pay->paiement_method()->associate($paymethod);
                            $pay->statut_paiement()->associate($paystatus);
                            $pay->montant = $request->get('montant');
                            $pay->pay_phone = $phone;
                            $pay->generateReference();
                            $pay->save();

                            //initier le payement a mtn


                            //apres avoir recu le statut du payement de mtn, modifier la table payement et crée une instance de second paiement
                        }catch (\Exception $exception){
                            DB::rollback();
                            return $this->sendError('une exception a été levé', $exception);
                        }
                    }else{
                        try {
                            $pay = new Paiement();
                            $pay->eleve()->associate($user);
                            $pay->tranche()->associate($tranche);
                            $pay->paiement_method()->associate($paymethod);
                            $pay->statut_paiement()->associate($paystatus);
                            $pay->montant = $request->get('montant');
                            $pay->pay_phone = $phone;
                            $pay->generateReference();
                            $pay->save();

                            //initier le payement a mtn


                            //apres avoir recu le statut du payement de mtn, modifier la table payement et crée une instance de second paiement
                        }catch (\Exception $exception){
                            DB::rollback();
                            return $this->sendError('une exception a été levé', $exception);
                        }
                    }
                }else{
                    try {
                        $pay = new Paiement();
                        $pay->eleve()->associate($user);
                        $pay->tranche()->associate($tranche);
                        $pay->paiement_method()->associate($paymethod);
                        $pay->statut_paiement()->associate($paystatus);
                        $pay->montant = $request->get('montant');
                        $pay->pay_phone = $phone;
                        $pay->generateReference();
                        $pay->save();

                        //initier le payement a mtn


                        //apres avoir recu le statut du payement de mtn, modifier la table payement et crée une instance de second paiement
                    }catch (\Exception $exception){
                        DB::rollback();
                        return $this->sendError('une exception a été levé', $exception);
                    }
                }
            }
            elseif ($tranche->intitutle_id->designation === 'Deuxieme Tranche'){
                //deuxieme tranche
                if (!empty($paiement)){
                    if ($payrest == $request->get('montant')){
                        try {
                            $pay = new Paiement();
                            $pay->eleve()->associate($user);
                            $pay->tranche()->associate($tranche);
                            $pay->paiement_method()->associate($paymethod);
                            $pay->statut_paiement()->associate($paystatus);
                            $pay->montant = $request->get('montant');
                            $pay->pay_phone = $phone;
                            $pay->generateReference();
                            $pay->save();

                            //initier le payement a mtn


                            //apres avoir recu le statut du payement de mtn, modifier la table payement et crée une instance de second paiement
                        }catch (\Exception $exception){
                            DB::rollback();
                            return $this->sendError('une exception a été levé', $exception);
                        }
                    }else{
                        try {
                            $pay = new Paiement();
                            $pay->eleve()->associate($user);
                            $pay->tranche()->associate($tranche);
                            $pay->paiement_method()->associate($paymethod);
                            $pay->statut_paiement()->associate($paystatus);
                            $pay->montant = $request->get('montant');
                            $pay->pay_phone = $phone;
                            $pay->generateReference();
                            $pay->save();

                            //initier le payement a mtn


                            //apres avoir recu le statut du payement de mtn, modifier la table payement et crée une instance de second paiement
                        }catch (\Exception $exception){
                            DB::rollback();
                            return $this->sendError('une exception a été levé', $exception);
                        }
                    }
                }else{
                    try {
                        $pay = new Paiement();
                        $pay->eleve()->associate($user);
                        $pay->tranche()->associate($tranche);
                        $pay->paiement_method()->associate($paymethod);
                        $pay->statut_paiement()->associate($paystatus);
                        $pay->montant = $request->get('montant');
                        $pay->pay_phone = $phone;
                        $pay->generateReference();
                        $pay->save();

                        //initier le payement a mtn


                        //apres avoir recu le statut du payement de mtn, modifier la table payement et crée une instance de second paiement
                    }catch (\Exception $exception){
                        DB::rollback();
                        return $this->sendError('une exception a été levé', $exception);
                    }
                }
            }
            else{
                return $this->sendError('02',['error'=>'quel tranche souhaiter vous payer ?']);
            }
        }else{
            return $this->sendError('02',['error'=>'Cette action nécéssite une autorisation.']);
        }
    }

    public function payementtotalite(Request $request){

    }
}
