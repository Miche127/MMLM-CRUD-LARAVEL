<?php

use Illuminate\Support\Facades\Route;

use App\http\controllers\GamesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return "Bienvenidos";
});
Route::get('/games', [GamesController::class,'index']);
Route::get('/games/create',[GamesController::class,'create']);
Route::get('/games/{name_game}/{categoria?}',[GamesController::class,'help']);
