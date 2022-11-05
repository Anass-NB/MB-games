<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Models\Game;
use Illuminate\Support\Facades\DB;

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
    // $date_create_last_game = Game::where('id', '=',1    )->firstOrFail();
    $date_create_last_game = Game::all()->last();
    $number_of_games = DB::table("games")->count();
    $number_of_users = DB::table("users")->count();
    $number_of_categories = DB::table("categories")->count();
    return view('dashboard',compact(["number_of_games","number_of_users","number_of_categories","date_create_last_game"]));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/categories',[CategoryController::class,'index'])->middleware(['auth', 'verified'])->name('show_cat');
Route::post("storingcategory",[CategoryController::class,'store'])->middleware(['auth', 'verified'])->name('category_store');
Route::get("addgame",[GameController::class,"addnewgame"])->middleware(['auth', 'verified']);
Route::post("/store",[GameController::class,"store"])->middleware(['auth', 'verified'])->name("store_game");
Route::get("/deletingcategory/{id}",[CategoryController::class,'delete'])->middleware(['auth', 'verified'])->name('category_delete');
Route::post("/updatecat",[CategoryController::class,'update'])->middleware(['auth', 'verified'])->name('category_update');
Route::get("/fetchcat/{id}",[CategoryController::class,'fetch'])->middleware(['auth', 'verified'])->name('category_fetch');
Route::get('/webgames',[GameController::class,'index'])->middleware(['auth', 'verified'])->name('show_games');
Route::get('/retrievewebgames',[GameController::class,'retrievegames'])->middleware(['auth', 'verified'])->name('retrieve_games');
Route::get("/editgame/{id}",[GameController::class,'edit'])->middleware(['auth', 'verified'])->name('edit_game');
require __DIR__.'/auth.php';
