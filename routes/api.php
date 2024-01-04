<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AngkatanController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});'

Route::post('/addClient',[ClientController::class,'addClient']);
Route::put('/updateClient/{id}',[ClientController::class,'updateClient']);
Route::delete('/deleteClient/{id}',[ClientController::class,'deleteClient']);
Route::get('/getClient',[ClientController::class,'getClient']);

