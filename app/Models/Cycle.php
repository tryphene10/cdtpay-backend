<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Cycle extends Model
{
    use HasFactory;

    /*
        * Children relationship
        */
    public function classes(){
        return $this->hasMany('App\Models\Classe');
    }

    public function tranches(){
        return $this->hasMany('App\Models\Tranche');
    }
    public function type_enseignement(){
        return $this->belongsTo('App\Models\Type_enseignement');
    }

    //To generate a 15 character reference
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
