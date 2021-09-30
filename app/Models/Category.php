<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','desc','status'];

    public function posts()
    {
    	return $this->belongsTo(Post::class);
    }
}
