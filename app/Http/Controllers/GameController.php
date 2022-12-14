<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use App\Models\User;
use App\Notifications\CreateGame;
use App\Notifications\GameCreated;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Validator;

class GameController extends Controller
{
  public function allgames()
  {
    $games = DB::table('categories')
      ->join('games', 'categories.id', '=', 'games.category_id')
      ->select('categories.category', 'games.*')
      ->get();
    $categories = DB::table('categories')
      ->join('games', 'categories.id', '=', 'games.category_id')

      ->get();
    $cat = array();
    $i = 0;
    foreach ($categories as $category) {
      if (!in_array($category->category, $cat)) {
        // array_push($cat,$category->category);
        $cat[$i] = $category->category;
        $i++;
      }
    }

    return view('allgames', ['cat' => $cat, 'i' => $i, 'games' => $games]);
  }
  public function addnewgame()
  {
    $cat = DB::table('categories')->get();
    return view("addgame", ['cat' => $cat]);
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $cat = DB::table('categories')->get();
    return view("webgames", ['cat' => $cat]);
  }
  public function retrievegames()
  {
    $data = DB::table('games')
      ->join('categories', 'categories.id', '=', 'games.category_id')
      ->select("games.*", 'categories.category as category')
      ->get();



    foreach ($data as $data) {
      $data1[] = [
        'title' => $data->title,
        'category' => $data->category,
        'url' => $data->url,
        'image' => "<img id=" . 'imggame' . " src='game_image/$data->image'/>",
        'description' => $data->description,
        'option' => "<button type=" . 'button' . " data-id='$data->id'  class='btn btn-primary update' ><i class='fa fa-refresh' aria-hidden='true'></i>update</button>&nbsp;&nbsp;
                <button type=" . 'button' . "  class='btn btn-danger delete'><i class='fa fa-trash' aria-hidden='true'></i>delete</button>",
      ];
      //data-bs-toggle='modal' data-bs-toggle='modal' data-bs-target='#game_modal'
    }
    $json_data = array(
      "data"            => $data1
    );
    return Response()->json($json_data);
  }
  public function fetchgame()
  {
    $data = DB::table('games')->where('games.id', $_GET['id'])
      ->rightjoin('categories', 'categories.id', '=', 'games.category_id')
      ->select('games.*', 'categories.category')->first();
    $data1 = array(
      "id" => $data->id, "title" => $data->title, "description" => $data->description,
      "category_id" => $data->category_id, "category" => $data->category, "url" => $data->url, "image" => $data->image
    );
    return Response()->json($data1);
  }
  public function updategame(Request $request)
  {
    $image = $_FILES['image']['type'];
    $validated = Validator::make(
      array('image' => $image),
      array($image => 'required| mimes: jpeg, png, jpg')


    );
    $filename = $_FILES['image']['name'];
    $path = $request->file('image')->storeAs(
      '/',
      $filename,
      'mouradi_disk'
    );

    //Storage::disk('mouradi_disk')->put('/',$_FILES['image']);


    $data1 = DB::table('games')->where('id', $_POST['hiddenid'])->first();
    $data = DB::table('games')->where('id', $_POST['hiddenid'])->update(['title' => $_POST['title'], 'description' => $_POST['description'], 'category_id' => $_POST['category'], 'url'
    => $_POST['url'], 'image' => $_FILES['image']['name']]);


    $data = array('title' => $data1->title);
    return Response()->json($data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }


  public function store(Request $request)
  {

    $image = $_FILES['image']['type'];
    $validated = Validator::make(
      array('image' => $image),
      array($image => 'required| mimes: jpeg, png, jpg')


    );
    $filename = $_FILES['image']['name'];
    $path = $request->file('image')->storeAs(
      '/',
      $filename,
      'mouradi_disk'
    );

    //Storage::disk('mouradi_disk')->put('/',$_FILES['image']);



    $id = DB::table('games')->insertGetId([
      'title' => $_POST['title'],
      'description' => $_POST['description'],
      'category_id' => $_POST['category'],
      'url' => $_POST['url'],
      'image' => $_FILES['image']['name']
    ]);
    $id = DB::table('games')->where('id', $id)->first();






    //ANass

    //notifications
    //store image in folder


    $data = array('title' => $request->title);
    $users = User::where("id", "!=", Auth()->user()->id)->get();
    Notification::send($users, new GameCreated($id->id, $id->title, Auth()->user()->name));

    return Response()->json($data);
  }




  public function gamepage($id)
  {
    $game =  Game::findorFail($id);
    return view("game")->with([
      "game" => $game,
    ]);
  }
  public function gamepage_notif($id)
  {
    $game =  Game::findorFail($id);
    $get_id_notif = DB::table("notifications")->where("data->game_id", $id)->pluck("id");
    DB::table("notifications")->where("id", $get_id_notif)->update(['read_at' => now()]);
    return view("game")->with([
      "game" => $game,
    ]);
  }
  public function readnotif()
  {

    foreach (auth()->user()->unreadNotifications as $notification) {
      $notification->markAsRead();
    }
    return redirect()->back();
  }
  public function show(Game $game)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Game  $game
   * @return \Illuminate\Http\Response
   */
  public function edit(Game $game)
  {
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Game  $game
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Game $game)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Game  $game
   * @return \Illuminate\Http\Response
   */
  public function destroy(Game $game)
  {
    //
  }
  public function recupgames()
  {
    // for ($i=0; $i <= Category::count(); $i++) { 
    //     $categories = Category::find($i);   
    //     echo $categories;
    // }

    // return Game::count();
    // return  view("test",compact("categories"));

  }
  //all btn 
  public function recupCategory($category)
  {
    $category = Category::where("category", "=", $category)->firstorFail();

    return view("category")->with([
      "category" => $category,
    ]);
  }
}
