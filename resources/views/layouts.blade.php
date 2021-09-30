<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>



 
    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="{{asset('/show_assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/show_assets/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('/show_assets/css/aos.css')}}">

     <!-- Custom Style   -->
    <link rel="stylesheet" href="{{asset('/show_assets/css/Style.css')}}">
    <link rel="stylesheet" href="{{asset('/show_assets/css/contact_style.css')}}">
    <link rel="stylesheet" href="{{asset('/show_assets/css/recipes.css')}}">
</head>
<body>
 
    <nav class="nav" style="margin-bottom: 10px">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="{{url('/')}}" class="text-gray">Tasty Foods</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                   <img style="margin-top: -10px" src="{{asset('/show_assets/assets/icons/bars.png')}}" width="25">
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="#c">Category</a>
                    </li>
                    <li class="nav-link">
                        <a href="{{url('/recipes')}}">Recipes</a>
                    </li>
                    
                    <li class="nav-link">
                        <a href="{{url('/contact_us')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="social text-gray ">
                <a href="#">
                	<img src="{{asset('/show_assets/assets/icons/fb.png')}}" width="25">
                </a>
                <a href="#">
                    <img src="{{asset('/show_assets/assets/icons/twet.jpg')}}" width="25">
                </a>
                <a href="#">
                	<img src="{{asset('/show_assets/assets/icons/insta.jpg')}}" width="25">
                </a>
               
            </div>
        </div>
    </nav>

    @section('container')
    @show


        <footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>About us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quia atque nemo ad modi officiis
                    iure, autem nulla tenetur repellendus.</p>
            </div>
            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
                <h2>Newsletter</h2>
                <p>Stay update with our latest</p>
                <div class="form-element">
                    <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
            <div class="instagram" data-aos="fade-left" data-aos-delay="200">
                <h2>Instagram</h2>
                <div class="flex-row">
                    <img src="{{asset('show_assets/assets/instagram/thumb-card3.jpg')}}" alt="insta1">
                    <img src="{{asset('show_assets/assets/instagram/thumb-card4.jpg')}}" alt="insta2">
                    <img src="{{asset('show_assets/assets/instagram/thumb-card5.jpg')}}" alt="insta3">
                </div>
                <div class="flex-row">
                    <img src="{{asset('show_assets/assets/instagram/thumb-card6.jpg')}}" alt="insta4">
                    <img src="{{asset('show_assets/assets/instagram/thumb-card7.jpg')}}" alt="insta5">
                    <img src="{{asset('show_assets/assets/instagram/thumb-card8.jpg')}}" alt="insta6">
                </div>
            </div>
            <div class="follow" data-aos="fade-left" data-aos-delay="200">
                <h2>Follow us</h2>
                <p>Let us be Social</p>
                <div style="color: white">
                    <img src="{{asset('/show_assets/assets/icons/fb.png')}}" width="25">
                    <img src="{{asset('/show_assets/assets/icons/insta.jpg')}}" width="25">
                    <img src="{{asset('/show_assets/assets/icons/twet.jpg')}}" width="25">
                    
                </div>
            </div>
        </div>
        <div class="rights flex-row">
            <h4 class="text-gray">
                Copyright ©2019 All rights reserved | made by ZAK
            </h4>
        </div>
        <div class="move-up">
            <span><img src="{{asset('/show_assets/assets/icons/arrow.png')}}" width="35"></span>
        </div>
    </footer>


    <script src="{{asset('/show_assets/js/Jquery3.4.1.min.js')}}"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="{{asset('/show_assets/js/owl.carousel.min.js')}}"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="{{asset('/show_assets/js/aos.js')}}"></script>

    <!-- Custom Javascript file -->
    <script src="{{asset('/show_assets/js/main.js')}}"></script>
  
</body>
</html>
