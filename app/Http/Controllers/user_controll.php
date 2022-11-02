<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user_controll extends Controller
{
    public function show_categories(){
        return view('categories');
    }
}
