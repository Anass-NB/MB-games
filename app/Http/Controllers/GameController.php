<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Validator;
class GameController extends Controller
{
    

    public function addnewgame(){
        $cat = DB::table('categories')->get();
        return view("addgame",['cat' => $cat]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view("webgames");
    }
    public function retrievegames(){
        $data = DB::table('games')
        ->join('categories','categories.id','=','games.category_id')
        ->select("games.*",'categories.category as category')
        ->get();
      
       
        
        foreach($data as $data){
            $data1[] = [
                'title' => $data->title,
                'category' => $data->category,
                'url' => $data->url,
                'image' => "<img id=".'imggame'." src=".asset('game_image/'.$data->image)."/>",
                'description' => $data->description,
               
            ];
        }
        $json_data = array(
            "data"            => $data1
        );
        return Response()->json($json_data);

        
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $_FILES['image']['type'];
        $validated = Validator::make(
            array('image' => $image),
            array($image => 'required| mimes: jpeg, png, jpg')
            
            
        );
        $filename = $_FILES['image']['name'];
        $path = $request->file('image')->storeAs(
            '/',$filename, 'mouradi_disk'
        );
        
           //Storage::disk('mouradi_disk')->put('/',$_FILES['image']);
            

            
            DB::table('games')->insert(['title' => $_POST['title'],'description' => $_POST['description'],'category_id' => $_POST['category'],'url' 
            => $_POST['url'],'image' => $_FILES['image']['name']]);
        
    
    $data = array('title' => $request->file('image'));
    return Response()->json($data);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
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
        for ($i=0; $i <= Category::count(); $i++) { 
            $categories = Category::find($i);   
            echo $categories;
        }
        
        // return Game::count();
        // return  view("test",compact("categories"));

    }


}
