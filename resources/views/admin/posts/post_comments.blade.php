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
			<h3> {{$title}} / Comments
            <a href="{{url('admin/posts/view_posts')}}" class="float-end btn btn-primary btn-sm">Back</a>
			</h3>
		</div>
		<div class="card-body">
			<table class="table table-bordered table-stripped">
				<thead>
					<tr>
						<th width="10%">S No.</th>
						<th width="80%">Comments</th>
						<th width="10%">Delete</th>
						s
					</tr>
				</thead>
				<tbody>
					<?php $s_no = 1; ?>
					@foreach($post_comments as $comment)
					<tr>
						<td>{{$s_no++}}</td>
						<td>{{$comment->comment}}</td>
						<td>Delete</td>
						
				
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection