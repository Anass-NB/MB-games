<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Validator;
use DB;
class ShowAllGames extends Component
{ 
    use WithFileUploads;
    public $cat=null;
    public $records;
    private $one_rec=null;
    public $game_id;
    public $updateMode = false;
    public $newimage;
    public $title,$url,$image,$description,$category_id,$category;
    public $update_success = false;
    public function edit($id)
    {
        $this->game_id = $id;
        $this->updateMode = true;
        $this->update_success = false;
        $this->one_rec = DB::table('games')->where('games.id', $this->game_id)
        ->rightjoin('categories', 'categories.id', '=', 'games.category_id')
        ->select('games.*', 'categories.category')->first();
        $this->title = $this->one_rec->title;
        $this->url = $this->one_rec->url;
        $this->description = $this->one_rec->description;
        $this->category = $this->one_rec->category;
        $this->category_id = $this->one_rec->category_id;
        $this->image = $this->one_rec->image;
      

    }
    public function update()
    {
    
        
        if(!empty($this->newimage))
        {

        
        $name = $this->newimage->getClientOriginalName();
        $this->newimage->storeAs('/', $name, 'mouradi_disk');
        DB::table('games')->where('id', $this->game_id)
            ->update(['title' => $this->title, 'description' => $this->description,
             'category_id' => $this->category_id, 'url'
            => $this->url, 'image' => $name]);
        }else
        {
            DB::table('games')->where('id', $this->game_id)
            ->update(['title' => $this->title, 'description' => $this->description,
             'category_id' => $this->category_id, 'url'
            => $this->url]);
        }
            
         $this->update_success = true;
         $this->updateMode =false;
    }


    public function render()
    {
        $this->cat = DB::table('categories')->get();


        $this->records = DB::table('games')
        ->join('categories', 'categories.id', '=', 'games.category_id')
        ->select("games.*", 'categories.category as category')
        ->get();
        return view('livewire.show-all-games');
    }
}
