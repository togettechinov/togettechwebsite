<!--=========================-->
<!--=        Navbar         =-->
<!--=========================-->
<header class="site-header header-two header_trans-fixed" data-top="992">
    <div class="container">
        <div class="header-inner">
            <div class="site-mobile-logo">
                <a href="index-2.html" class="logo">
                    <img src="{{asset('frontend/assets/img/logo-two.png')}}" alt="site logo" class="main-logo">
                    <img src="{{asset('frontend/assets/img/logo-two.png')}}" alt="site logo" class="sticky-logo">
                </a>
            </div><!-- /.site-mobile-logo -->

            <div class="toggle-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <!-- /.toggle-menu -->
            <nav class="site-nav nav-two">
                <div class="close-menu">
                    <span>Close</span>
                    <i class="ei ei-icon_close"></i>
                </div>

                <div class="site-logo">
                    <a href="{{route('welcome')}}" class="logo">
                        <img src="{{asset('frontend/assets/img/logo2.svg')}}" alt="site logo" class="main-logo">
                        <img src="{{asset('frontend/assets/img/logo2.svg')}}" alt="site logo" class="sticky-logo">
                    </a>
                </div>

                <div class="menu-wrapper" data-top="992">
                    <ul class="site-main-menu">
                        <li class="menu-item-has-children">
                            <a href="{{route('welcome')}}">Accueil</a>
                        </li>
                        <li><a href="#">A propos</a></li>
                        <li class="menu-item-has-children">
                            <a href="#services">Services</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Projets</a>

                            <ul class="sub-menu">
                                <li><a href="https://ajarke.com" target ="_blank">Ajarke</a></li>
                                <li><a href="https://togethoster.togettechinov" target ="_blank">Toget Hoster</a></li>
                                <li><a href="https://crm.togettechinov.com/" target ="_blank">Toget Suite</a></li>
                                <li><a href="https://tourde.togettechinov.com" target ="_blank">Tourdé OS</a></li>
                                <li><a href="https://polytech.togettechinov.com" target ="_blank">Toget School</a></li>
                            </ul>
                        </li>

                        <li><a href="{{route('contact-home')}}">Contact</a></li>
                    </ul>

                    <div class="nav-right">
                        <a href="signup.html" class="nav-btn">Inscription gratuite</a>
                    </div>
                </div>
                <!-- /.menu-wrapper -->
            </nav><!-- /.site-nav -->

        </div><!-- /.header-inner -->
    </div><!-- /.container -->
</header><!-- /.site-header -->
