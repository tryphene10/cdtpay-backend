<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Classe extends Model
{
    use HasFactory;

    /*
        * Children relationship
        */
    public function users(){
        return $this->hasMany('App\Models\User');
    }

    /*
        * Children relationship
        */
    public function cycle(){
        return $this->belongsTo('App\Models\Cycle');
    }
    public function pension(){
        return $this->belongsTo('App\Models\Pension');
    }
    public function type_dossier(){
        return $this->belongsTo('App\Models\Type_dossier');
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
