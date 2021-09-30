@extends('admin/layouts')
@section('categories_select', 'active')
@section('create_category_select', 'active')
@section('page_title', 'Admin | Create Category')
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
          		  <h3>Create Category
                  <a href="{{url('admin/categories/view_categories')}}" class="btn btn-primary btn-sm float-end">Back</a>
                  </h3>
          	</div>
          	<div class="card-body">
          		<form action="{{url('admin/categories/submit_category')}}" method="post" enctype="multipart/form-data">
          			@csrf
          			<div class="form-group">
          				<label> Name</label>
          				<input type="text" name="name" class="form-control" >
          			</div>
          			<div class="form-group">
          				<label> Description</label>
          				<textarea name="desc" class="form-control" ></textarea> 
          			</div>
          			
          			
          			<div class="form-group">
          				
          				<input type="submit" value="Create Category" class="btn btn-primary mt-3">
          			</div>
          		</form>
          	</div>
          </div>
        </div>
@endsection