@extends('layouts')
@section('title','Recipes')
@section('container')


@foreach($recipe as $res)
<div class="top">
	

<div class="card" style="width: 18rem;">
	
  <img src="{{('/storage/media/'.$res->image)}}" class="img" alt="...">
  <div class="card-body">
    <h3 class="title">{{$res->title}}</h3>

    <p class="text"><b>Recipes : </b>{{$res->recipes}}</p>
    <a href="{{url('post_detail/'.$res->id)}}" class="btn">Read More</a>
  </div>
</div>

</div>
	

@endforeach
@endsection