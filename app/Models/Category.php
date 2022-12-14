<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    public function game()
    {
        return $this->hasMany(Game::class, "category_id");
    }


    public function getRouteKeyName()
    {
        return 'category';
    }
}
