<?php

use App\Http\Controllers\StampeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [StampeeController::class, 'index']);
Route::get('/index', [StampeeController::class, 'index']);
Route::get('/catalogue', [StampeeController::class, 'catalogue']);

//formulaire pour afficher une enchère
Route::get('/formEnchere', [StampeeController::class, 'getForm']);
Route::post('/formEnchere', [StampeeController::class, 'validForm']);
//formulaire de connexion et d'inscription 
Route::get('/connexion', [StampeeController::class, 'getConnexion']);
Route::post('/connexion', [StampeeController::class, 'validConnexion']);
