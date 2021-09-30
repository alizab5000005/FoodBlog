<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use App\Http\Requests\PostRequest;

class POSTCONTROLLER extends Controller
{
    
      /////////////////////////////////
     //  render crate posts page    //
    /////////////////////////////////

    public function create_post()
    {
      $categories = Category::where(['status'=>1])->get();
    	return view('admin/posts/create_post', compact('categories'));
    }


      /////////////////////////////////
     //      store post             //
    /////////////////////////////////

    public function store_post(PostRequest $request)
    {
      
    	$id = Post::create($request->all());

    	if($request->hasFile('image'))
        {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('media',$filename,'public');
            Post::where('id',$id->id)->update(['image'=>$filename]);

        }

        return redirect('admin/posts/view_posts')->with('msg', 'Post created successfully');
    }


      /////////////////////////////////
     //      view posts             //
    /////////////////////////////////

    public function view_posts()
    {

    	$posts = Post::all();

    	return view('admin/posts/view_posts', compact('posts'));
    }


      /////////////////////////////////
     //      view post's comments   //
    /////////////////////////////////

    public function post_comments(Request $request)
    {

      $post_comments = Comment::where(['post_id'=>$request->id])->get();
      $title = $request->title; 
      return view('admin/posts/post_comments', compact('post_comments','title'));
    }

      /////////////////////////////////
     //      edit posts             //
    /////////////////////////////////

    public function edit_post(Request $request , $id)
    {
    	$post = Post::where(['id'=>$request->id])->get();
   
      $categories = Category::where(['status'=>1])->get();
  
    	return view('admin/posts/edit_post', compact('post','categories'));
    }

      /////////////////////////////////
     //      update post            //
    /////////////////////////////////

    public function update_post(Request $request, $id)
    {
    	$status = 0;
    	$popular = 0;
    	if ($request->status == "on")
    	{
    		$status = 1;
    	}
    	if($request->popular == "on")
    	{
    		$popular = 1;
    	}
    
    	Post::find($id)->update(['title'=>$request->title, 
                                 'category_id'=>$request->category_id,
                                 'body'=>$request->body,
                                 'recipes'=>$request->recipes,
                                 'ingredients'=>$request->ingredients,
                                 'popular'=>$popular,
                                 'status'=>$status,  
                                ]);

    	if($request->hasFile('image'))
        {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('media',$filename,'public');
            Post::where('id',$id)->update(['image'=>$filename]);

        }
    	return redirect('admin/posts/view_posts')->with('msg','Post Updated');
    }

      /////////////////////////////////
     //    delete post             //
    /////////////////////////////////

    public function delete_post(Request $request)
    {
       Post::destroy($request->id);
      return redirect('admin/posts/view_posts')->with('msg','Post Deleted');
    }


   public function update_like(Request $request)
   {
    $l = 0;
    $likes = Post::where(['id'=>$request->id])->get();
    foreach ($likes as $like) {
      $l =  $like->likes;
    }
    $l +=1;

    Post::where(['id'=>$request->id])->update(['likes'=> $l]);
    return redirect()->back();
   }

}

