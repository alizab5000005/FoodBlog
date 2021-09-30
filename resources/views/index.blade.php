@extends('layouts')
@section('title', 'Home')
@section('container')
    

 <main>
     <section>
          <img src="{{asset('show_assets/assets/Blog-banner.jpg')}}" style="width: 100%">
                  </section>
  <section class="container">
            <div class="site-content">
                <div class="posts">
                    @foreach($posts as $post)
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="{{('/storage/media/'.$post->image)}}" style="height: 400px; width: 750px" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                              @foreach($admins as $admin)
                                <span>
                                	<img src="{{asset('/show_assets/assets/icons/user.jpg')}} " width="20">&nbsp;&nbsp;{{$admin->full_name}}
                                </span>
                                @endforeach
                                <span>
                                	<img src="{{asset('/show_assets/assets/icons/cal.png')}} " width="20">&nbsp;&nbsp;{{$post->created_at->format('Y-m-d')}}
                                </span>
                                <span>
                                    <img src="{{asset('/show_assets/assets/icons/comment.jpg')}} " width="20">  <?php echo $post->comments->count()?>
                                </span>
                                <span>
                                    <img src="{{asset('/show_assets/assets/icons/like.png')}} " width="20"> {{$post->likes}}
                                </span>
                                  
                                
                                
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="{{url('post_detail/'.$post->id)}}">{{$post->title}}</a>
                            <p>{{Str::limit($post->body, 284)}}
                            </p>
                            <a style="text-decoration: none;" href="{{url('post_detail/'.$post->id)}}"><small>Read More &nbsp; <i class="fas fa-arrow-right"></i></small></a>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                    <div class="view_more">
                         <a id="view_more" href="{{url('/show_more')}}">View More</a>
                    </div>
                  
                </div>
                 

                 <aside class="sidebar">
                    <div class="category" id="c">
                        <h2>Category</h2>

                        <ul class="category-list">
                           @foreach($categories as $category)
                            <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                                <a href="{{url('category/'.$category->id)}}">{{$category->name}}</a>
                             
                            </li>
                          @endforeach
                        </ul>
                    </div>
                    <div class="popular-post">
                        <h2>Popular Post</h2>
                        @foreach($popular_posts as $post)
                        <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                            <div class="post-image">
                                <div>
                                    <img src="{{('/storage/media/'.$post->image)}}" class="img" alt="blog1">
                                </div>
                                <div class="post-ino flex-row" style="background: lightblue;padding: 5px;">
                                    <span style="margin-left: 15px">
                                	<img src="{{asset('/show_assets/assets/icons/cal.png')}} " width="20">&nbsp;&nbsp;{{$post->created_at->format('Y-m-d')}}
                                </span>
                                <span style="margin-left: 15px">
                                    <img src="{{asset('/show_assets/assets/icons/comment.jpg')}} " width="20">  <?php echo $post->comments->count()?>
                                </span>
                                <span style="margin-left: 15px">
                                    <img src="{{asset('/show_assets/assets/icons/like.png')}} " width="20"> {{$post->likes}}
                                </span>
                                  
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="{{url('post_detail/'.$post->id)}}">{{$post->title}}</a>
                            </div>
                            <hr>
                        </div>
                        @endforeach
                    </div>
                      <div class="newsletter" data-aos="fade-up" data-aos-delay="300">
                        <h2>About Us</h2>
                        <div class="form-element">
                            <img src="{{asset('/show_assets/assets/about.jpg')}}" width="250">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                  
                </aside>
            </div>
        </section>

</main>
@endsection

