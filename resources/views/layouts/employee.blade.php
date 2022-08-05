<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets_emp/images/favicon.png') }}">
    <title>@yield('title')</title>
    <!-- Bootstrap Core CSS -->
    <!-- Latest compiled and minified CSS & JS -->
   

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{ asset('/assets_emp/js/custom.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
    
    
    <!-- Latest compiled and minified CSS -->
    <link href="{{ asset('/assets_emp/node_modules/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('/assets_emp/css/style.css') }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('/assets_emp/css/colors/default.css') }}" id="theme" rel="stylesheet">
 
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->


</head>

<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">

                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('/assets_emp/images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{ asset('/assets_emp/images/logo-light-icon.png') }}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                           <!-- dark Logo text -->
                           <img src="{{ asset('/img/logoemploypng.png') }}" alt="homepage" class="dark-logo" />
                           <!-- Light Logo text -->    
                           <img src=".{{ asset('/img/logoemploypng.png') }}" class="light-logo" alt="homepage" />
                       </span>
                   </a>
               </div>

               <!-- End Logo -->

               <div class="navbar-collapse">

                <!-- toggle and nav items -->

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"> 
                       <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)">
                        <i class="fa fa-bars"></i>
                       </a>
                    </li>

                    <!-- Search -->

                    <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                        <form class="app-search">
                            <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="fa fa-times"></i></a> 
                        </form>
                    </li>
                </ul>

                <!-- User profile and search -->

                <ul class="navbar-nav my-lg-0">

                    <!-- Profile -->

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          </ul>
      </div>
  </nav>
</header>

<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="{{ '/dashemployee/idxe='.session()->get('xeid').'' == request()->path() ? 'active' : ''}}" > 
                  {{session()->reflash()}}
                  <a class="waves-effect waves-dark" href="{{ route('dashemployee',session()->get('xeid')) }}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Danh sách chuyến đi</span>
                  </a>
                </li>
                <li class="{{ '/danhsachvenhap/xeid='.session()->get('xeid').'' == request()->path() ? 'active' : ''}}"> 
                  <a class="waves-effect waves-dark" href="{{ route('danhsachvenhap',session()->get('xeid')) }}" aria-expanded="false"><i class="fa fa-user-circle-o"></i><span class="hide-menu">Danh sách vé</span></a>
                  {{session()->reflash()}}
                </li>
                <li class="{{ '/danhsachhangnhap/xeid='.session()->get('xeid').'' == request()->path() ? 'active' : ''}}"> 
                  <a class="waves-effect waves-dark" href="{{ route('danhsachhangnhap',session()->get('xeid')) }}" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Danh sách hàng hóa</span>
                  </a>
                </li>
                <li> <a class="waves-effect waves-dark" href="icon-fontawesome.html" aria-expanded="false"><i class="fa fa-smile-o"></i><span class="hide-menu">Chọn lịch trình</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="map-google.html" aria-expanded="false"><i class="fa fa-globe"></i><span class="hide-menu">Map</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="pages-error-404.html" aria-expanded="false"><i class="fa fa-question-circle"></i><span class="hide-menu">404</span></a>
                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        @yield('content')
        



    </div>

</div>


<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('/assets_emp/js/perfect-scrollbar.jquery.min.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('/assets_emp/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('/assets_emp/js/sidebarmenu.js') }}"></script>

<!--Custom JavaScript -->


@yield('script')
</body>

</html>