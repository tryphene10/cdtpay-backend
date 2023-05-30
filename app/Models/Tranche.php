<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tranche extends Model
{
    use HasFactory;

    public function paiements(){
        return $this->hasMany('App\Models\Paiement');
    }

    public function pension(){
        return $this->belongsTo('App\Models\pension');
    }

    public function intitule_tranche(){
        return $this->belongsTo('App\Models\Intitule_tranche');
    }

    public function cycle(){
        return $this->belongsTo('App\Models\Cycle');
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
