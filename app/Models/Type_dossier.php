<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Type_dossier extends Model
{
    use HasFactory;

    public function Classes(){
        return $this->hasMany('App\Models\Classe');
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
