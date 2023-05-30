<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Http\Controllers\API\BaseController as BaseController;

class ClasseController extends BaseController
{
    public function listeclasse(){
        $classe = Classe::paginate(5);
        return $this->sendResponse($classe, 'liste salle de classe');
    }
}
