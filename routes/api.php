<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
    'prefix'=>"v1"
],function(){
    Route::get('listCita',[CitaController::class,'listCita']);
    Route::post('regitrarCita',[CitaController::class,'registrar']);
    Route::put('actualizarCita/{id}',[CitaController::class,'update']);
    Route::delete('eliminarCita/{id}',[CitaController::class,'eliminar']);
});
