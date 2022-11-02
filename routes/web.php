<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_controll;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/categories',[user_controll::class,'show_categories'])->middleware(['auth', 'verified'])->name('show_cat');

Route::get("addgame",[GameController::class,"addnewgame"]);
Route::post("store",[GameController::class,"store"])->name("store_game");

require __DIR__.'/auth.php';
