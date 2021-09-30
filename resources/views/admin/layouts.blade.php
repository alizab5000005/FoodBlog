<!DOCTYPE html>
<html>
<head>
	<title>@yield('page_title')</title>
	  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
	 <link href="{{asset('admin_assets/css/styles.css')}}" rel="stylesheet" />
</head>
 <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{url('admin/dashboard')}}">MY ADMIN PANEL</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
               
            </form> 
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{session('ADMIN_USERNAME')}}</i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                   
                        <li><a class="dropdown-item" href="{{url('admin/logout')}}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
            <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"><a style="
                            text-decoration: none; color:#5e6b62" href="{{'/'}}">Go to Website</a></div>
                            <a class="nav-link @yield('dashboard_select')" href="{{url('admin/dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link @yield('posts_select') collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapsePosts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Posts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePosts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link @yield('view_posts_select')" href="{{url('admin/posts/view_posts')}}">View Posts</a>
                                    <a class="nav-link @yield('create_post_select')" href="{{url('admin/posts/create_post')}}">Create Post</a>
                               
                                </nav>
                            </div>

                            <a class="nav-link @yield('categories_select') collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCategories" aria-expanded="false" aria-controls="collapseCategories">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Categories
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseCategories" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link @yield('view_categories_select')" href="{{url('admin/categories/view_categories')}}">View Categories</a>
                                    <a class="nav-link @yield('create_category_select')" href="{{url('admin/categories/create_category')}}">Create Category</a>
                               
                                </nav>
                            </div>
                          
                         
                          
                           
                          
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        Logged in as :
                        <span class="text-danger">{{session('ADMIN_USERNAME')}}</span>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                   @section('styles')
                   @show
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div> -->



         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
     <script src="{{asset('admin_assets/js/scripts.js')}}"></script>
        <script src="{{asset('admin_assets/https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous')}}"></script>
        <script src="{{asset('admin_assets/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('admin_assets/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="{{asset('admin_assets/https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous')}}"></script>
        <script src="{{asset('admin_assets/js/datatables-simple-demo.js')}}"></script>
</body>
</html>