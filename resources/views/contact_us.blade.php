@extends('layouts')
@section('title','Contact Us')
@section('container')

  @if(session('msg'))

      <p style="border: 2px solid lightgray; text-align: center; padding: 9px; background: #178a49; color: white">
        {{session('msg')}}
      </p>
  @endif
<div class="container">


  <form action="{{url('submit_msg')}}" method="post">
    @csrf
  <div class="row">
    <div class="col-25">
      <label for="fname">Full Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="name" required placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Email Address</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="email" required placeholder="Your email address..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Phone</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="phone" required placeholder="Your phone number..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Message</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="message" required placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

  
@endsection