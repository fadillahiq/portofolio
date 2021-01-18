<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/plyr.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
    @toastr_css
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{ route('index') }}">
                            <h3 style="color: #b7b7b7; font-weight: 1000;">Animol</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="#">Genre <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('genre-action') }}">Action</a></li>
                                        <li><a href="{{ route('genre-romance') }}">Romance</a></li>
                                        <li><a href="{{ route('genre-fantasy') }}">Fantasy</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('contact') }}">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="{{ route('login') }}"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
    @yield('content')
    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <h3 style="color: #b7b7b7; font-weight: 1000;">Animol</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="#">Genre</a></li>
                            <li><a href="{{ route('contact') }}">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form" action="{{ route('search') }}" method="GET">
                <input type="text" id="search-input" name="search" placeholder="Search here....." {{ old('search') }}>
            </form>
        </div>
    </div>
    <!-- Search model end -->
 <!-- Js Plugins -->
 <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
 <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('assets/js/player.js') }}"></script>
 <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
 <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
 <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
 <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
 <script src="{{ asset('assets/js/main.js') }}"></script>
 @jquery
 @toastr_js
 @toastr_render

</body>

</html>
