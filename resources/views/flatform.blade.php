<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title','VuongChi')
    </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/PageHome.css') }}">
    @yield('css')
    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
    <!-- Styles -->

</head>

<body>
   <div class="header">
    <div class="top-bar">
        <div class="top-bar-left">
            <span class="mini-cont"><i class="fas fa-envelope"></i>dvhieu.18it4@sict.udn.vn</span>
            <span class="mini-cont"><i class="fas fa-phone"></i> 0917058877</span>
        </div>
        <div></div>
        <div class="top-bar-right">
            <div class="cont-icon">
                <a href="#"><span class="soc-icon"><i class="fab fa-facebook-f"></i></span></a>
                <a href="#"><span class="soc-icon"><i class="fab fa-google-plus-g"></i></span></a>
                <a href="#"><span class="soc-icon"><i class="fab fa-youtube"></i></span></a>
                <a href="#"><span class="soc-icon"><i class="fab fa-instagram"></i></span></a>
            </div>
        </div>
    </div>
    <hr class="light-100">
    <header class="navbar header-bar navbar-collapse">
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="brading">
                <a class="navbar-brand" href="{{ route('trangchu') }}">
                    <img class="logo d-inline-block align-top" src="@yield('link')img/logo.png" alt="logo">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarReponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarReponsive">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ 'trangchu' == request()->path() ? 'active' : ''}}" >
                        <a class="nav-link" href="{{ route('trangchu') }}">
                            <span class="menu-text">Trang ch???</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown-toggle-split" >
                        <a class="nav-link dropdown-menu-right" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                          <span class="menu-text">Gi???i thi???u</span>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="{{ route('aboutus') }}">V??? ch??ng t??i</a>
                          <a class="dropdown-item" href="{{ route('question') }}">C??u h???i th?????ng g???p</a>
                      </div>

                  </li>
                  <li class="nav-item {{ 'service' == request()->path() ? 'active' : ''}} " >
                    <a class="nav-link" href="{{ route('service') }}"><span class="menu-text">D???ch v???</span></a>
                </li>
                <li class="nav-item {{ 'lichtrinh' == request()->path() ? 'active' : ''}}" >
                    <a class="nav-link" href="{{ route('lich-trinh') }}"><span class="menu-text">L???ch tr??nh</span></a>
                </li>
                <li class="nav-item {{ 'lienhe' == request()->path() ? 'active' : ''}}" >
                    <a class="nav-link" href="{{ route('lienhe') }}"><span class="menu-text">Li??n h???</span></a>
                </li>
                @if (Route::has('login'))

                @auth
                {{-- <li class="nav-item " >
                    <a class="nav-link" href="{{ url('/home') }}"><span class="menu-text">Home</span></a>
                </li> --}}
                <li class="nav-item dropdown-toggle-split" >
                    <a class="nav-link dropdown-menu-right" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="menu-text">{{ Auth::user()->name }}</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="{{ route('logout') }}">{{ __('Logout') }}</a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>

            </li>
        @else
        <li class="nav-item ">
            <a class="nav-link" href="{{ route('login') }}"><span class="menu-text">????ng nh???p</span></a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item ">
            <a class="nav-link" href="{{ route('register') }}"><span class="menu-text">????ng k??</span></a>
        </li>
        @endif
        @endauth
        @endif
    </ul>
</div>
</div>
</header>
</div>
<div class="content">
    @yield('content')
</div>
<div class="container">
    <div class="content-box">
        <div class="icon-view">
            <h5>
                <a href="#"><i class="fas fa-phone-square"></i></a>?????n v???i nh?? xe - ????? tho??i m??i ??i xa
            </h5>
            <h5 class="contact">
                <a href="#">?????t v?? ngay</a>
            </h5>
        </div>
    </div>
</div>

<footer>
    <div class="container padding">
        <div class="row text-center">
            <div class="content-row">
                <div class="col-md-4">
                    <img src="@yield('link')img/logofooter.png" alt="">
                </div>
                <div class="col-md-4">
                    <section>
                        <h5>Gi??? l??m vi???c</h5>
                        <hr class="light">
                        <ul class="dv">
                          <li class="underline">Khung ng??y :T??? th??? 2 - Ch??? Nh???t</li>
                          <li class="underline">Khung gi??? :7AM - 9PM</li>
                      </ul>
                  </section>
              </div>
              <div class="col-md-4">
                <section>
                    <h5>?????a ch???</h5>
                    <hr class="light">
                    <ul class="dv">
                      <li class="underline">S??? ??i???n tho???i :0917058877</li>
                      <li class="underline">Gmail:dvhieu.18it4@sict.udn.vn</li>
                      <li class="underline">?????a ch??? : TP Bu??n Ma thu???t - T???nh ????k L??k</li>
                  </ul>
              </section>
          </div>
      </div>
      <div class="col-12 ">
        <hr class="light-100">
        <h5>&copy; V????ngChi.Com 2019-2020</h5>
    </div>
</div>  
</div>  
</footer>
</body>
<script type="text/javascript">

    var header = document.querySelector('.navbar');
    
    function onScroll(e) {
        window.scrollY >= 200 ? header.classList.add('collapsed') :
        header.classList.remove('collapsed');
    }
    
    document.addEventListener('scroll', onScroll);
</script>
@yield('js')
</html>
