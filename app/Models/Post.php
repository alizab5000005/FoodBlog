<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	 'title',
         'admin_id',
         
    	 'category_id',
    	 'body', 
    	 'recipes', 
    	 'ingredients',
    	 'image',
    	 'popular',
    	 'status'
    ];


    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id','id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

 
}
