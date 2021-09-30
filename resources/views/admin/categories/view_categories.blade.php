@extends('admin/layouts')
@section('categories_select', 'active')
@section('page_title', 'Admin | View Categories')
@section('view_categories_select', 'active')
@section('styles')
<div class="container px-4 mt-3">
	 @if(session('msg'))
         <div class="alert-success p-2">
         {{session('msg')}}
         </div>
         @endif
	<div class="card">
		<div class="card-header">
			<h3>Categories
            <a href="{{url('admin/posts/create_post')}}" class="float-end btn btn-primary btn-sm">Create Post</a>
			</h3>
		</div>
		<div class="card-body">
			<table class="table table-bordered table-stripped">
				<thead>
					<tr>
						<th width="10%">ID</th>
						<th width="40%">Title</th>
					
						<th width="10%">Status</th>
						<th width="10%">Edit</th>
						<th width="10%">Delete</th>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
					<tr>
						<td>{{$category->id}}</td>
						<td>{{$category->name}}</td>
					    @if($category->status == 1)
						<td>
                         Shown
						</td>
						@elseif($category->status == 0)
						<td>
                         Hidden
						</td>
						@endif
						<td><a href="{{url('admin/categories/edit_category/'.$category->id)}}" class="btn btn-info">Edit</a></td>
						<td><a href="{{url('admin/categories/delete_category/'.$category->id)}}" class="btn btn-danger">Delete</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection