<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tickets MPM - @yield('title')</title>
    <link rel="icon" href="{{ url("assets/frontend/img/favicon.png") }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url("assets/frontend/css/bootstrap.min.css") }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ url("assets/frontend/css/animate.css") }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ url("assets/frontend/css/owl.carousel.min.css") }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ url("assets/frontend/css/all.css") }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ url("assets/frontend/css/flaticon.css") }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ url("assets/frontend/css/magnific-popup.css") }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ url("assets/frontend/css/slick.css") }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ url("assets/frontend/css/style.css") }}">
    <!-- custom CSS -->
    <link rel="stylesheet" href="{{ url("assets/frontend/css/custom.css") }}">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ route('index') }}"> <img src="{{ url("assets/frontend/img/logo.png") }}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('ticket.index') }}">Ticket List</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    @yield('content')

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="copyright_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="copyright_text">
                            <P>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());

                                </script> All rights reserved | This template is made with <i class="ti-heart"
                                    aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </P>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_icon social_icon">
                            <ul class="list-unstyled">
                                <li><a href="{{ route('backend.main') }}">Admin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="{{ url("assets/frontend/js/jquery-1.12.1.min.js") }}"></script>
    <!-- popper js -->
    <script src="{{ url("assets/frontend/js/popper.min.js") }}"></script>
    <!-- bootstrap js -->
    <script src="{{ url("assets/frontend/js/bootstrap.min.js") }}"></script>
    <!-- easing js -->
    <script src="{{ url("assets/frontend/js/jquery.magnific-popup.js") }}"></script>
    <!-- swiper js -->
    <script src="{{ url("assets/frontend/js/swiper.min.js") }}"></script>
    <!-- swiper js -->
    <script src="{{ url("assets/frontend/js/masonry.pkgd.js") }}"></script>
    <!-- particles js -->
    <script src="{{ url("assets/frontend/js/owl.carousel.min.js") }}"></script>
    <script src="{{ url("assets/frontend/js/jquery.nice-select.min.js") }}"></script>
    <!-- slick js -->
    <script src="{{ url("assets/frontend/js/slick.min.js") }}"></script>
    <script src="{{ url("assets/frontend/js/jquery.counterup.min.js") }}"></script>
    <script src="{{ url("assets/frontend/js/waypoints.min.js") }}"></script>
    <script src="{{ url("assets/frontend/js/jquery.ajaxchimp.min.js") }}"></script>
    <script src="{{ url("assets/frontend/js/jquery.form.js") }}"></script>
    <!-- custom js -->
    <script src="{{ url("assets/frontend/js/custom.js") }}"></script>
</body>

</html>
