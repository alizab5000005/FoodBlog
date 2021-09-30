<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ADMIN\ADMINUSERCONTROLLER;
use App\Http\Controllers\ADMIN\POSTCONTROLLER;
use App\Http\Controllers\ADMIN\CATEGORYCONTROLLER;
use App\Http\Controllers\ShowPosts;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Recipes;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin/admin_login');
});

Route::get('/admin/admin_login', [ADMINUSERCONTROLLER::class, 'admin_login']);
Route::post('/admin/admin_auth', [ADMINUSERCONTROLLER::class, 'admin_auth']);


Route::group(['middleware'=>'admin_auth'], function(){

	Route::get('/admin/dashboard', [ADMINUSERCONTROLLER::class, 'admin_dashboard']);
	Route::get('/admin/logout', [ADMINUSERCONTROLLER::class, 'admin_logout']);

      /////////////////////////////////
     //      posts  Routes          //
    /////////////////////////////////

	  Route::get('/admin/posts/create_post',[POSTCONTROLLER::class, 'create_post']);
    Route::post('admin/posts/submit_post',[POSTCONTROLLER::class, 'store_post']);
    Route::get('admin/posts/view_posts',[POSTCONTROLLER::class, 'view_posts']);
    Route::get('admin/posts/post_comments/{id}/{title}',[POSTCONTROLLER::class, 'post_comments']);
    Route::get('admin/posts/edit_post/{id}',[POSTCONTROLLER::class, 'edit_post']);
    Route::post('admin/posts/edit_post/{id}',[POSTCONTROLLER::class, 'update_post']);
    Route::get('admin/posts/delete_post/{id}',[POSTCONTROLLER::class, 'delete_post']);


      /////////////////////////////////
     //    categories  Routes       //
    /////////////////////////////////

    Route::get('/admin/categories/create_category',[CATEGORYCONTROLLER::class, 'create_category']);
    Route::post('/admin/categories/submit_category',[CATEGORYCONTROLLER::class, 'store_category']);
    Route::get('/admin/categories/view_categories',[CATEGORYCONTROLLER::class, 'view_categories']);
    Route::get('/admin/categories/edit_category/{id}',[CATEGORYCONTROLLER::class, 'edit_category']);
    Route::post('/admin/categories/update_category/{id}',[CATEGORYCONTROLLER::class, 'update_category']);
    Route::get('/admin/categories/delete_category/{id}',[CATEGORYCONTROLLER::class, 'delete_category']);









});

Route::get('/',[ShowPosts::class, 'show_posts']);
Route::get('/show_more',[ShowPosts::class, 'show_more_posts']);
Route::get('/post_detail/{id}',[ShowPosts::class, 'post_detail']);
Route::get('/category/{id}',[ShowPosts::class, 'category']);
Route::post('/save_comment',[CommentController::class, 'store_comment']);
Route::get('/update_like/{id}',[POSTCONTROLLER::class, 'update_like']);
Route::get('/contact_us', [MessageController::class, 'view_contact_page']);
Route::post('/submit_msg', [MessageController::class, 'store_msg']);
Route::get('/recipes', [Recipes::class, 'recipes']);
