<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cycle;

class CycleController extends BaseController
{
    public function listecycle(){
        $cycle = Cycle::all();
        return $this->sendResponse($cycle, 'liste salle de classe');
    }
}
