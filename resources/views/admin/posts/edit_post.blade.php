@extends('admin/layouts')
@section('page_title', 'Admin | Edit Post')
@section('posts_select', 'active')

@section('styles')
        <div class="container px-4 mt-4">
          <div class="card">
          	<div class="card-header">
          		  <h3>Edit Post
                  <a href="{{url('admin/posts/view_posts')}}" class="btn btn-primary btn-sm float-end">Back</a>
                  </h3>
          	</div>
          	<div class="card-body">
              @foreach($post as $p)
          		<form action="{{url('admin/posts/edit_post/'.$p->id)}}" method="post" enctype="multipart/form-data">
          			@csrf
          			  <div class="row">
                <div class="form-group col-md-6">
                  <label> Title</label>
                  <input type="text" name="title" value="{{$p->title}}" class="form-control" >
                </div>
                <div class="form-group col-md-6">
                  <label> Category</label>

                  <select name="category_id" class="form-control">
                    <option value="{{$p->categories->id}}">{{$p->categories->name}}</option>

                    @foreach($categories as $c)
                    @if($c->id != $p->categories->id)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                    @endif
                    @endforeach

                  </select>
                </div>
                </div>
          			<div class="form-group">
          				<label> Body</label>
          				<textarea name="body" class="form-control" >{{$p->body}}</textarea> 
          			</div>
          			<div class="form-group">
          				<label>Recipes</label>
                  <textarea name="recipes" class="form-control">{{$p->recipes}}</textarea>
          				
          			</div>
          			<div class="form-group">
          				<label>Ingredients</label>
          				<textarea name="ingredients" class="form-control">{{$p->ingredients}}</textarea>
          			</div>
          			<div class="form-group">
          				<label>Image</label>
          				<input type="file" name="image" class="form-control">
          			</div>
                <div class="row mt-3">
                <div class="form-group col-md-6">
                  <label>Popular (Checked = show to public)</label>
                  @if($p->popular == 1)
                  <input type="checkbox" checked name="popular" class="w-50 h-50">
                  @elseif($p->popular == 0)
                  <input type="checkbox" name="popular" class="w-50 h-50">
                  @endif  
                </div>
                <div class="form-group col-md-6">
                  <label>Status (checked = show to public)</label><br>
                  @if($p->status == 1)
                  <input type="checkbox" checked name="status" class="w-50 h-50">
                  @elseif($p->status == 0)
                  <input type="checkbox" name="status" class="w-50 h-50">
                  @endif
                </div>
                </div>
                @endforeach
          			<div class="form-group">
          				
          				<input type="submit" value="Update Post" class="btn btn-primary mt-3">
          			</div>
          		</form>
          	</div>
          </div>
        </div>
@endsection