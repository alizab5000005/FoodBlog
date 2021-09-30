@extends('admin/layouts')
@section('posts_select', 'active')
@section('page_title', 'Admin | View Posts')
@section('view_posts_select', 'active')
@section('styles')
<div class="container px-4 mt-3">
	 @if(session('msg'))
         <div class="alert-success p-2">
         {{session('msg')}}
         </div>
         @endif
	<div class="card">
		<div class="card-header">
			<h3>Posts
            <a href="{{url('admin/posts/create_post')}}" class="float-end btn btn-primary btn-sm">Create Post</a>
			</h3>
		</div>
		<div class="card-body">
			<table class="table table-bordered table-stripped">
				<thead>
					<tr>
						<th>ID</th>
						<th width="40%">Title</th>
						<th>Image</th>
						<th width="8%">Status</th>
						<th width="6%">Edit</th>
						<th width="10%">Delete</th>
						<th width="6%">Likes</th>
						<th width="15%">Check Comments</th>
					</tr>
				</thead>
				<tbody>
					@foreach($posts as $post)
					<tr>
						<td>{{$post->id}}</td>
						<td>{{$post->title}}</td>
						<td><img src="{{asset('storage/media/'.$post->image)}}" width="50"></td>
						@if($post->status == 1)
						<td>
                         Shown
						</td>
						@elseif($post->status == 0)
						<td>
                         Hidden
						</td>
						@endif
						<td><a href="{{url('admin/posts/edit_post/'.$post->id)}}" class="btn btn-info">Edit</a></td>
						<td><a href="{{url('admin/posts/delete_post/'.$post->id)}}" class="btn btn-danger">Delete</a></td>
						<td>{{$post->likes}}</td>
						<td><a href="{{url('admin/posts/post_comments/'.$post->id.'/'.$post->title)}}">check comments</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection