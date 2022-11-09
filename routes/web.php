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
})->name("home_front");
Route::get('/home', function () {
    return view('home');
});
Route::get('/allgames', function () {
    return view('allgames');
});


Route::get('/dashboard', function () {
    // $date_create_last_game = Game::where('id', '=',1    )->firstOrFail();

    //hado mn be3d andirouhom f chi controller
    $date_create_last_game = Game::all()->last();
    $number_of_games = DB::table("games")->count();
    $number_of_users = DB::table("users")->count();
    $number_of_categories = DB::table("categories")->count();
    return view('dashboard',compact(["number_of_games","number_of_users","number_of_categories","date_create_last_game"]));
})->middleware(['auth', 'verified'])->name('dashboard');



//Route Group Of Category Controller
Route::controller(CategoryController::class)->group(function (){
    Route::get('/categories','index')->middleware(['auth', 'verified'])->name('show_cat');
    Route::post("storingcategory",'store')->middleware(['auth', 'verified'])->name('category_store');
    Route::get("/deletingcategory/{id}",'delete')->middleware(['auth', 'verified'])->name('category_delete');
    Route::post("/updatecat",'update')->middleware(['auth', 'verified'])->name('category_update');
    Route::get("/fetchcat/{id}",'fetch')->middleware(['auth', 'verified'])->name('category_fetch');
    
});

//Route Group Of Game Controller
Route::controller(GameController::class)->group(function (){
    Route::get('/webgames','index')->middleware(['auth', 'verified'])->name('show_games');
    Route::get('/retrievewebgames','retrievegames')->middleware(['auth', 'verified'])->name('retrieve_games');
    Route::get("/editgame/{id}",'edit')->middleware(['auth', 'verified'])->name('edit_game');
    Route::get("addgame","addnewgame")->middleware(['auth', 'verified']);
    Route::post("/store","store")->middleware(['auth', 'verified'])->name("store_game");

});
require __DIR__.'/auth.php';
