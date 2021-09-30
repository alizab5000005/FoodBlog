<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
   public function store_comment(Request $request)
   {
     Comment::create($request->all());
     return redirect()->back();
   }


}
