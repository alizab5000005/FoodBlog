<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Recipes extends Controller
{
    public function recipes()
    {
      $recipe = Post::where(['status'=>1])->get();
      return view('recipes', compact('recipe'));
    }
}
