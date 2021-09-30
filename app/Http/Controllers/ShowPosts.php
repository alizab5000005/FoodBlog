<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Admin;
class ShowPosts extends Controller
{
    public function show_posts()
    {
        $posts = Post::where(['status'=>1])->limit(5)->get();

        $categories = Category::where(['status'=>1])->get();
        $popular_posts = Post::where(['status'=>1])->where(['popular'=>1])->get();
        $admin_id = 0;
    
        foreach ($posts as $value) {
        	$admin_id = $value->admin_id;
         
           
        }
       

       
        $admins = Admin::where(['id'=>$admin_id])->get(['full_name']);
       
    	return view('index', compact('posts', 'categories','popular_posts','admins'));
    }
     public function show_more_posts()
    {
        $posts = Post::where(['status'=>1])->skip(5)->take(10)->get();
        $categories = Category::where(['status'=>1])->get();
        $popular_posts = Post::where(['status'=>1])->where(['popular'=>1])->get();
        $admin_id = 0;
        foreach ($posts as $value) {
            $admin_id = $value->admin_id;
        }
       
        $admins = Admin::where(['id'=>$admin_id])->get(['full_name']);
       
        return view('index', compact('posts', 'categories','popular_posts','admins'));
    }


    public function post_detail(Request $request)
    {
    	$post = Post::where(['status'=>1])->where(['id'=>$request->id])->get();
        $admins = Admin::where(['id'=>$request->id])->get(['full_name']);
        $categories = Category::where(['status'=>1])->get();
        $popular_posts = Post::where(['status'=>1])->where(['popular'=>1])->get();
        $comments = Comment::where(['post_id'=>$request->id])->get(); 
        $number_of_comments = $comments->count();
        $number_of_likes = $comments->where(['like'=>'1'])->count();

    	return view('post_detail', compact('post','admins', 'categories','popular_posts','comments','number_of_comments','number_of_likes'));
    }

    public function category(Request $request, $id)
    {
        $posts = Post::where(['status'=>1])->where(['category_id'=>$id])->get();
        $categories = Category::where(['status'=>1])->get();
        $popular_posts = Post::where(['status'=>1])->where(['popular'=>1])->limit(4)->get();

        $admin_id = 0;
        foreach ($posts as $value) {
            $admin_id = $value->admin_id;
        }
       
        $admins = Admin::where(['id'=>$admin_id])->get(['full_name']);
       
        return view('index', compact('posts', 'categories','popular_posts','admins'));
    }
}
