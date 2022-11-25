<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;
class ShowAllGames extends Component
{
    public $records;
    public function mount(){
        $this->records = DB::table('games')
        ->join('categories', 'categories.id', '=', 'games.category_id')
        ->select("games.*", 'categories.category as category')
        ->get();
    }
    public function fetchgames()
    {
       
        
    }
    public function render()
    {
        return view('livewire.show-all-games');
    }
}
