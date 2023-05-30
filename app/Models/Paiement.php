<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Paiement extends Model
{
    use HasFactory;

    public function eleve(){
        return $this->belongsTo('App\Models\User');
    }
    public function tranche(){
        return $this->belongsTo('App\Models\Tranche');
    }

    public function paiement_method(){
        return $this->belongsTo('App\Models\Paiement_method');
    }

    public function statut_paiement(){
        return $this->belongsTo('App\Models\Statut_paiement');
    }
    public function generateReference(){

        if(empty($this->attributes['ref'])){
            do{
                $token = "CPLAN". Str::random(10);
                $upcase = strtoupper($token);
            }
            while ( Role::where('ref',$upcase)->first() instanceof Role);
            $this->attributes['ref'] = $upcase;

            return true;
        }
        return false;
    }
}
