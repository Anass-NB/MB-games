<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    const CREATED_AT = 'creation_date';
    
    
    public function category(){
        return $this->belongsTo(Category::class);
    }


}
