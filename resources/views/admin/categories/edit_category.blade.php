@extends('admin/layouts')
@section('categories_select', 'active')
@section('page_title', 'Admin | Edit Category')

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
          		  <h3>Edit Category
                  <a href="{{url('admin/categories/view_categories')}}" class="btn btn-primary btn-sm float-end">Back</a>
                  </h3>
          	</div>
          	<div class="card-body">
              @foreach($category as $cat)
          		<form action="{{url('admin/categories/update_category/'.$cat->id)}}" method="post" enctype="multipart/form-data">
          			@csrf
          			<div class="form-group">
          				<label> Name</label>
          				<input type="text" name="name" value="{{$cat->name}}" class="form-control" >
          			</div>
          			<div class="form-group">
          				<label> Description</label>
          				<textarea name="desc" class="form-control" >{{$cat->desc}}</textarea> 
          			</div>
          			@endforeach
          			
          			<div class="form-group">
          				
          				<input type="submit" value="Update Category" class="btn btn-primary mt-3">
          			</div>
          		</form>
          	</div>
          </div>
        </div>
@endsection