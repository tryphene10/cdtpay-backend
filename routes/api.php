<?php

use App\Http\Controllers\API\AnneeScolaireController;
use App\Http\Controllers\API\ClasseController;
use App\Http\Controllers\API\CycleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');

});

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::controller(ClasseController::class)->group(function() {
    Route::get('list-classe', 'listeclasse');
    Route::get('');
});
Route::controller(CycleController::class)->group(function() {
    Route::get('list-cycle', 'listecycle');
    Route::get('');
});

Route::controller(AnneeScolaireController::class)->group(function() {
    Route::get('list-annee-scolaire', 'listannee');
    Route::get('');
});
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('student-list', [RegisterController::class,'listusers']);
    Route::controller(RegisterController::class)->group(function(){
        Route::get('student-list', 'listusers');
        Route::get('detail', 'detailEleve');
        Route::post('list-student-by-classe', 'listelevebyclasse');
        Route::post('/logout',  'logout');
    });




});
