@extends('admin/layouts')
@section('posts_select', 'active')
@section('page_title', 'Admin | Create Post')
@section('create_post_select', 'active')
@section('styles')
        <div class="container px-4 mt-4">
        	@if($errors->any())
        	@foreach($errors->all() as $error)
        	<div class="alert alert-danger p-3">
        		{{$error}}
        	</div>
        	@endforeach
        	@endif
          <div class="card">
          	<div class="card-header">
          		  <h3>Create Post
                  <a href="{{url('admin/posts/view_posts')}}" class="btn btn-primary btn-sm float-end">Back</a>
                  </h3>
          	</div>
          	<div class="card-body">
          		<form action="{{url('admin/posts/submit_post')}}" method="post" enctype="multipart/form-data">
          			@csrf
                <div class="row">
          			<div class="form-group col-md-6">
          				<label> Title</label>
          				<input type="text" name="title" class="form-control" >
          			</div>
                <div class="form-group col-md-6">
                  <label> Category</label>
                 
                  <select name="category_id" class="form-control">
                    <option>--select category--</option>
                    @foreach($categories as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                  </select>
                </div>
                </div>
          			<div class="form-group">
          				<label> Body</label>
          				<textarea name="body" class="form-control" ></textarea> 
          			</div>
          			<div class="form-group">
          				<label>Recipes</label>
                  <textarea  name="recipes" class="form-control"></textarea>
          				
          			</div>
          			<div class="form-group">
          				<label>Ingredients</label>
                  <textarea  name="ingredients" class="form-control"></textarea>
          				
          			</div>
          			<div class="form-group">
          				<label> Image</label>
          				<input type="file" name="image" class="form-control">
          			</div>
          			<input type="hidden" name="admin_id" value="{{session('ADMIN_ID')}}">
          			<div class="form-group">
          				
          				<input type="submit" value="Create Post" class="btn btn-primary mt-3">
          			</div>
          		</form>
          	</div>
          </div>
        </div>
@endsection