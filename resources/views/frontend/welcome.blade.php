@extends('layouts.frontend.app')

@section('content')
    <!--==========================-->
    <!--=         Banner         =-->
    <!--==========================-->
    <section class="banner banner-two">
        <div class="vector-bg"><img src="{{asset('frontend/media/banner/top%20shape.png')}}" alt="circle"></div>
        <div class="container">
            <div class="banner-content-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h1 class="banner-title wow pixFadeUp" data-wow-delay="0.3s">
                                Inspiring <span>Africa<br>
										Build & Improve</span><br>
                                the future
                            </h1>

                            <p class="description wow pixFadeUp" data-wow-delay="0.5s">
                                Offrir les meilleurs solutions digitales aux entreprises et particuliers  au Cameroun et en Afrique pour une autonomisation et un développement durable.
                            </p>

                            <a href="#" class="pxs-btn banner-btn color-two wow pixFadeUp" data-wow-delay="0.6s">Get Started</a>
                        </div><!-- /.banner-content -->
                    </div><!-- /.col-md-5 -->

                    <div class="col-lg-6">
                        <div class="animate-promo-mockup">
                            <img src="{{asset('frontend/media/banner/01.png')}}" class="wow pixFadeDown" alt="mpckup" data-wow-duration="1.5s">
                            <img src="{{asset('frontend/media/banner/02.png')}}" class="wow pixFadeRight" data-wow-delay="0.3s" data-wow-duration="1s" alt="mpckup">
                            <img src="{{asset('frontend/media/banner/03.png')}}" class="wow pixFadeUp" alt="mpckup" data-wow-duration="1.7s">
                            <img src="{{asset('frontend/media/banner/04.png')}}" class="wow pixFadeRight" alt="mpckup">
                            <img src="{{asset('frontend/media/banner/05.png')}}" class="wow pixFadeDown" alt="mpckup" data-wow-duration="2s">
                            <img src="{{asset('frontend/media/banner/06.png')}}" alt="mpckup" data-wow-delay="0.3s">
                            <img src="{{asset('frontend/media/banner/07.png')}}" class="wow pixFadeLeft" alt="mpckup" data-wow-delay="0.6s" data-wow-duration="1.5s">
                            <img src="{{asset('frontend/media/banner/cloud_01.png')}}" alt="mpckup">
                            <img src="{{asset('frontend/media/banner/cloud_02.png')}}" alt="mpckup">
                            <img src="{{asset('frontend/media/banner/cloud_03.png')}}" alt="mpckup">
                        </div><!-- /.promo-mockup -->
                    </div><!-- /.col-md-7 -->
                </div><!-- /.row -->
            </div><!-- /.banner-content-wrap -->
        </div><!-- /.container -->
    </section><!-- /.banner banner-two -->

    <!--===========================-->
    <!--=         Feature         =-->
    <!--===========================-->
    <section id="brand-logo">
        <div class="section-small text-center wow pixFadeUp">
            <h2 class="title">A PROPOS DE TOGETTECH</h2>
        </div>
        <div class="container">
            <div class="section-title style-five text-center">
                <h3 class="sub-title wow pixFadeUp">Inspirer l'Afrique, construire et améliorer l'avenir</h3>

            </div><!-- /.section-title -->

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="saaspik-icon-box-wrapper style-ten wow fadeInRight" data-wow-delay="0.3s">
                        <div class="saaspik-icon-box-icon">
                            <img src="{{asset('frontend/media/feature/61.png')}}" alt="">
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title"><a href="#">MISSION</a></h3>
                            <p>
                                Offrir les meilleurs solutions digitales innovantes
                            </p>

                            <a href="#" class="pix-btn btn-grey color-three">Lire la suite</a>
                        </div>
                    </div><!-- /.pixsass-box style-ten wow fadeInRight -->
                </div><!-- /.col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="saaspik-icon-box-wrapper style-ten wow fadeInRight" data-wow-delay="0.5s">
                        <div class="saaspik-icon-box-icon">
                            <img src="{{asset('frontend/media/feature/62.png')}}" alt="">
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title"><a href="#">MOTIVATIONS</a></h3>

                            <p>
                                Relever de nouveaux défis, se développer et être autonome
                            </p>

                            <a href="#" class="pix-btn  color-three btn-grey">Lire la suite</a>
                        </div>
                    </div><!-- /.pixsass-box style-ten wow fadeInRight -->
                </div><!-- /.col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="saaspik-icon-box-wrapper style-ten wow fadeInRight" data-wow-delay="0.7s">
                        <div class="saaspik-icon-box-icon">
                            <img src="{{asset('frontend/media/feature/63.png')}}" alt="">
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title"><a href="#">VISION</a></h3>
                            <p>
                                Inspirer l'Afrique, construire et améliorer l'avenir
                            </p>

                            <a href="#" class="pix-btn btn-grey color-three">Lire la suite</a>
                        </div>
                    </div><!-- /.pixsass-box style-ten wow fadeInRight -->
                </div><!-- /.col-lg-4 col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <!-- /.container -->

    </section>
    <!-- /.brand-logo -->

    <!--===========================-->
    <!--=         Feature         =-->
    <!--===========================-->
    <section class="featured-two-same">
        <div class="container" id="services">
            <div class="section-title color-two text-center">
                <h3 class="sub-title wow pixFadeUp">Services</h3>
                <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">Nos solutions numériques pour vous</h2>
            </div><!-- /.section-title -->

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.5s">
                        <div class="saaspik-icon-box-icon">
                            <img src="{{asset('frontend/media/feature/6.png')}}" alt="">
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title"><a href="#">Développement web</a></h3>
                            <p>
                                Conception de sites internet et application web  sur-mesure pour une gestion améliorée de votre organisation.!
                            </p>
                        </div>
                    </div><!-- /.pixsass-box style-two -->
                </div><!-- /.col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.6s">
                        <div class="saaspik-icon-box-icon">
                            <img src="{{asset('frontend/media/feature/7.png')}}" alt="">
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title"><a href="#">Développement Mobile</a></h3>

                            <p>
                                Renforcer les liens avec les clients ou les consommateurs,  l'application mobile vous permet d'élargir votre cible.!
                            </p>
                        </div>
                    </div><!-- /.pixsass-box style-two -->
                </div><!-- /.col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.7s">
                        <div class="saaspik-icon-box-icon">
                            <img src="{{asset('frontend/media/feature/8.png')}}" alt="">
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title"><a href="#">Analyse de données</a></h3>
                            <p>
                                L'objectif est d'extraire une information statistique qui permet de cerner plus précisément le profil de la donnée.!
                            </p>
                        </div>
                    </div><!-- /.pixsass-box style-two -->
                </div><!-- /.col-md-4 -->

                <div class="col-lg-4 col-md-6">
                    <div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.8s">
                        <div class="saaspik-icon-box-icon">
                            <img src="{{asset('frontend/media/feature/9.png')}}" alt="">
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title"><a href="#">Services Cloud Computing</a></h3>
                            <p>
                                Exploitez de la puissance de calcul et de stockage de serveurs distants par l'intermédiaire de notre réseau.!
                            </p>
                        </div>
                    </div><!-- /.pixsass-box style-two -->
                </div><!-- /.col-md-4 -->

                <div class="col-lg-4 col-md-6">
                    <div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.9s">
                        <div class="saaspik-icon-box-icon">
                            <img src="{{asset('frontend/media/feature/10.png')}}" alt="">
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title"><a href="#">Com. & Maketing Digital</a></h3>
                            <p>
                                Nous vous aidons bâtir votre présence sur le web et améliorer votre communication grâce au marketing digital.!
                            </p>
                        </div>
                    </div><!-- /.pixsass-box style-two -->
                </div><!-- /.col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="1s">
                        <div class="saaspik-icon-box-icon">
                            <img src="{{asset('frontend/media/feature/11.png')}}" alt="">
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title"><a href="#">Etudes et Gestion de projets</a></h3>
                            <p>
                                La gestion de projet est importante car elle apporte un leadership et une direction aux projets.!
                            </p>
                        </div>
                    </div><!-- /.pixsass-box style-two -->
                </div><!-- /.col-lg-4 col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->

        <div class="scroll-circle wow pixFadeRight">
            <img src="{{asset('frontend/media/background/circle.png')}}" data-parallax='{"y" : -230}' alt="circle">
        </div>
    </section><!-- /.featured -->

    <!--=================================-->
    <!--=         Revolutionize         =-->
    <!--=================================-->
    <section class="revolutionize-two">
        <div class="bg-angle"></div>
        <div class="container">
            <div class="section-title dark-title text-center">
                <h3 class="sub-title wow pixFadeUp">Écran mis à jour</h3>
                <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
                    PROJETS TOGETTECH
                </h2>
            </div><!-- /.section-title dark-title -->

            <div id="pix-tabs" class="wow pixFadeUp" data-wow-delay="0.5s">
                <ul id="pix-tabs-nav" class="pix-tab-two">
                    <li><a href="#tab1">Ajarke </a></li>
                    <li><a href="#tab2">Toget Hoster </a></li>
                    <li><a href="#tab3">Tourdé OS </a></li>
                    <li><a href="#tab4">Toget Suite</a></li>
                    <li><a href="#tab5">Toget School</a></li>
                    <li><a href="#tab6">iMedic</a></li>
                </ul> <!-- tabs-nav -->

                <div id="pix-tabs-content">
                    <div id="tab1" class="content color-two">
                        <img src="{{asset('frontend/media/revolutionize/1.jpg')}}" alt="revolutionize">

                        <div class="shape-shadow"></div>
                    </div>
                    <div id="tab2" class="content color-two">
                        <img src="{{asset('frontend/media/revolutionize/2.jpg')}}" alt="revolutionize">
                        <div class="shape-shadow"></div>
                    </div>
                    <div id="tab3" class="content color-two">
                        <img src="{{asset('frontend/media/revolutionize/3.jpg')}}" alt="revolutionize">
                        <div class="shape-shadow"></div>
                    </div>
                    <div id="tab4" class="content color-two">
                        <img src="{{asset('frontend/media/revolutionize/4.jpg')}}" alt="revolutionize">
                        <div class="shape-shadow"></div>
                    </div>
                    <div id="tab5" class="content color-two">
                        <img src="{{asset('frontend/media/revolutionize/5.jpg')}}" alt="revolutionize">
                        <div class="shape-shadow"></div>
                    </div>
                    <div id="tab6" class="content color-two">
                        <img src="{{asset('frontend/media/revolutionize/6.jpg')}}" alt="revolutionize">
                        <div class="shape-shadow"></div>
                    </div>
                </div> <!-- tabs-content -->
            </div> <!-- Tabs -->
        </div><!-- /.container -->
    </section><!-- /.revolutionize -->

    <!--=================================-->
    <!--=         Formations            =-->
    <!--=================================-->
    <section class="review-sliders">
        <div class="container">
            <div class="section-title style-three text-center">
                <h3 class="sub-title wow pixFadeUp">Nos technologies et formations</h3>
                <h2 class="title wow pixFadeUp" data-wow-delay="0.2s">Nos solutions sont construites avec les technologies les plus récentes</h2>
                <p class="wow pixFadeUp" data-wow-delay="0.4s">Suivez nos formations disponibles sur chacune des technologies et restez à niveau</p>
            </div>
            <div id="review-slider-wrapper" class="wow pixFadeUp" data-wow-delay="0.6s">
                <div class="swiper-container" id="review-sliders" data-speed="1000" data-autoplay="5000" data-perpage="4" data-space="30" data-breakpoints='{"1024": {"slidesPerView": 3},"768": {"slidesPerView": 2},"420": {"slidesPerView": 1}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="review-slider">
                                <div class="review-content-inner">
                                    <div class="review-score">
                                        <span class="score">5.0</span>
                                    </div>
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <div class="review-brand-logo">
                                        <a href="#"><img src="{{asset('frontend/media/testimonial/flutter.svg')}}" alt="saaspik"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-slider">
                                <div class="review-content-inner">
                                    <div class="review-score">
                                        <span class="score">5.0</span>
                                    </div><ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <div class="review-brand-logo">
                                        <a href="#"><img src="{{asset('frontend/media/testimonial/react.svg')}}" alt="saaspik"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-slider">
                                <div class="review-content-inner">
                                    <div class="review-score">
                                        <span class="score">5.0</span>
                                    </div>
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <div class="review-brand-logo">
                                        <a href="#"><img src="{{asset('frontend/media/testimonial/vuejs.svg')}}" alt="saaspik"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-slider">
                                <div class="review-content-inner">
                                    <div class="review-score">
                                        <span class="score">5.0</span>
                                    </div>
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i>
                                        </li><li><i class="fa fa-star"></i>
                                        </li><li><i class="fa fa-star"></i>
                                        </li><li><i class="fa fa-star"></i>
                                        </li><li><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <div class="review-brand-logo">
                                        <a href="#"><img src="{{asset('frontend/media/testimonial/androidstudio.svg')}}" alt="saaspik"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-slider">
                                <div class="review-content-inner">
                                    <div class="review-score">
                                        <span class="score">5.0</span>
                                    </div><ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <div class="review-brand-logo">
                                        <a href="#"><img src="{{asset('frontend/media/testimonial/anaconda.svg')}}" alt="saaspik"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-slider">
                                <div class="review-content-inner">
                                    <div class="review-score">
                                        <span class="score">5.0</span>
                                    </div>
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <div class="review-brand-logo">
                                        <a href="#"><img src="{{asset('frontend/media/testimonial/canva.svg')}}" alt="saaspik"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-slider">
                                <div class="review-content-inner">
                                    <div class="review-score">
                                        <span class="score">5.0</span>
                                    </div>
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <div class="review-brand-logo">
                                        <a href="#"><img src="{{asset('frontend/media/testimonial/figma.svg')}}" alt="saaspik"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination style-two"></div>
                </div>
            </div>
        </div>
    </section><!-- /.featured -->


    <!--=================================-->
    <!--=         Editor Design         =-->
    <!--=================================-->
    <section class="editor-design-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="editure-feature-image-two">
                        <div class="animaated-elements">
                            <img src="{{asset('frontend/media/animated/01.png')}}" alt="main-bg" class="main-bg wow pixFade">
                            <img src="{{asset('frontend/media/animated/02.png')}}" alt="main-bg" class="elm-clock wow pixFadeLeft" data-wow-delay="0.5s">
                            <img src="{{asset('frontend/media/animated/03.png')}}" alt="elm-man" class="elm-man wow pixFadeRight" data-wow-delay="0.7s">
                            <img src="{{asset('frontend/media/animated/04.png')}}" alt="elm-table" class="elm-table wow pixFadeUp" data-wow-delay="0.1s">
                            <img src="{{asset('frontend/media/animated/05.png')}}" alt="main-bg" class="elm-sm-vase wow pixFade" data-wow-delay="0.9s">
                            <img src="{{asset('frontend/media/animated/06.png')}}" alt="elm-vase" class="elm-vase wow pixFadeLeft" data-wow-delay="0.9s">
                            <div class="elm-mass wow pixFadeDown" data-wow-delay="1s">
                                <img src="{{asset('frontend/media/animated/07.png')}}" alt="massage" class="mass-img">
                            </div>
                        </div>
                        <!-- /.animaated-elements -->

                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="editor-content color-two">
                        <div class="section-title style-two color-two">
                            <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
                                Des solutions encore<br>
                                plus Innovante.
                            </h2>

                            <p class="wow pixFadeUp" data-wow-delay="0.5s">
                                Avec des technologies de pointe
                            </p>
                        </div>

                        <div class="description wow pixFadeUp" data-wow-delay="0.7s">
                            <p>
                                Proposer des technologies, des produits et des
                                solutions innovantes qui incitent chacun à participer à la création d'une Afrique meilleure,
                                offrant des expériences numériques plus riches .!
                            </p>

                            <a href="#" class="pix-btn color-two wow pixFadeUp" data-wow-delay="0.9s">Découvrir plus</a>
                        </div>
                    </div><!-- /.editor-content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.editor-design -->

    <!--===================================-->
    <!--=         Genera Informes         =-->
    <!--===================================-->
    <section class="genera-informes-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pix-order-two">
                    <div class="genera-informes-content">
                        <div class="section-title style-two">
                            <h2 class="title wow pixFadeUp">
                                Nous vous accompagnons <br>avec des services de qualités
                            </h2>

                            <p class="wow pixFadeUp" data-wow-delay="0.3s">
                                Acteur créatif et responsable, nous mettons
                                nos efforts et nos ressources au service des valeurs que nous voulons partager avec nos clients.!
                            </p>
                        </div><!-- /.section-title style-two -->

                        <ul class="list-items color-two wow pixFadeUp" data-wow-delay="0.4s">
                            <li>Accès rapide</li>
                            <li>Gérer facilement</li>
                            <li>Assistance 7/24h</li>
                        </ul>

                        <a href="#" class="pix-btn btn-outline-two wow pixFadeUp" data-wow-delay="0.5s">Découvrir plus</a>
                    </div>
                    <!-- /.genera-informes -->

                </div><!-- /.col-lg-6 -->

                <div class="col-lg-6">
                    <div class="animaated-elements-two">
                        <img src="{{asset('frontend/media/animated/1.png')}}" class="elm-one wow pixFade" alt="informes">
                        <img src="{{asset('frontend/media/animated/2.png')}}" class="elm-two wow pixFadeDown" alt="informes">
                        <img src="{{asset('frontend/media/animated/3.png')}}" class="elm-three wow pixFadeDown" alt="informes">
                        <img src="{{asset('frontend/media/animated/4.png')}}" class="elm-four wow pixFadeRight" alt="informes">
                    </div>
                </div><!-- /.col-lg-6 -->

            </div><!-- /.row -->
        </div><!-- /.container -->

        <div class="scroll-circle wow pixFadeRight">
            <img src="{{asset('frontend/media/background/circle2.png')}}" data-parallax='{"y" : 180}' alt="circle">
        </div>
    </section><!-- /.genera-informes -->



    <!--===============================-->
    <!--=         Testimonial         =-->
    <!--===============================-->
    <section class="testimonials-two">
        <div class="animate-shape wow pixFadeDown">
            <img src="{{asset('frontend/media/background/ellipse2.png')}}" data-parallax='{"y" : 230}' alt="shape">
        </div>
        <div class="container">
            <div class="section-title color-two text-center">
                <h3 class="sub-title wow pixFadeUp">Présentations</h3>
                <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">Découvrez en vidéo nos solutions et services</h2>
            </div><!-- /.section-title -->

            <div id="testimonial-wrapper" class="wow pixFadeUp" data-wow-delay="0.4s">
                <div class="swiper-container" id="testimonial-two" data-speed="700" data-autoplay="5000" data-perpage="2" data-space="50" data-breakpoints='{"991": {"slidesPerView": 1}}'>
                    <div class="swiper-wrapper">


                        <div class="swiper-slide">
                            <div class="testimonial-two">
                                <div class="testi-content-inner">

                                    <div class="testimonial-content">
                                        <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
											padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
											border-radius: 8px; will-change: transform;">
                                            <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                                                    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAE_o428TEk&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                                            </iframe>
                                        </div>
                                        <a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAE_o428TEk&#x2F;view?utm_content=DAE_o428TEk&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener">AJARKE</a> par LLC TOGETTECH
                                    </div>
                                    <!-- /.testimonial-content -->

                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>

                                    <div class="quote">
                                        <img src="{{asset('frontend/media/testimonial/quote.png')}}" alt="quote">
                                    </div>
                                    <!-- /.quote -->
                                </div>
                                <!-- /.testi-content-inner -->

                                <div class="shape-shadow"></div>
                            </div>
                            <!-- /.testimonial-two -->
                        </div>


                        <div class="swiper-slide">
                            <div class="testimonial-two">
                                <div class="testi-content-inner">

                                    <div class="testimonial-content">
                                        <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
											padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
											border-radius: 8px; will-change: transform;">
                                            <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                                                    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAE_o428TEk&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                                            </iframe>
                                        </div>
                                        <a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAE_o428TEk&#x2F;view?utm_content=DAE_o428TEk&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener">AJARKE</a> par LLC TOGETTECH
                                    </div>
                                    <!-- /.testimonial-content -->

                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>

                                    <div class="quote">
                                        <img src="{{asset('frontend/media/testimonial/quote.png')}}" alt="quote">
                                    </div>
                                    <!-- /.quote -->
                                </div>
                                <!-- /.testi-content-inner -->

                                <div class="shape-shadow"></div>
                            </div>
                            <!-- /.testimonial-two -->
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-two">
                                <div class="testi-content-inner">

                                    <div class="testimonial-content">
                                        <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
											padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
											border-radius: 8px; will-change: transform;">
                                            <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                                                    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAE_o428TEk&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                                            </iframe>
                                        </div>
                                        <a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAE_o428TEk&#x2F;view?utm_content=DAE_o428TEk&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener">AJARKE</a> par LLC TOGETTECH
                                    </div>
                                    <!-- /.testimonial-content -->

                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>

                                    <div class="quote">
                                        <img src="{{asset('frontend/media/testimonial/quote.png')}}" alt="quote">
                                    </div>
                                    <!-- /.quote -->
                                </div>
                                <!-- /.testi-content-inner -->

                                <div class="shape-shadow"></div>
                            </div>
                            <!-- /.testimonial-two -->
                        </div>

                    </div><!-- /.swiper-wrapper -->

                </div><!-- /.swiper-container -->
                <div class="shape-shadow"></div>

                <div class="slider-nav wow pixFadeUp" data-wow-delay="0.3s">
                    <div id="slide-prev" class="swiper-button-prev">
                        <i class="ei ei-arrow_left"></i>
                    </div>
                    <div id="slide-next" class=" swiper-button-next">
                        <i class="ei ei-arrow_right"></i>
                    </div>
                </div>
            </div>
            <!-- /#testimonial-wrapper -->


        </div>
        <!-- /.container -->
    </section><!-- /.testimonial -->

    <!--==========================-->
    <!--=         Countup        =-->
    <!--==========================-->
    <section class="countup">
        <div class="bg-map" data-bg-image="{{asset('frontend/media/background/map.png')}}">

        </div>
        <div class="container">
            <div class="section-title color-two text-center">
                <h3 class="sub-title wow pixFadeUp">ORIENTATIONS STRATÉGIQUES ET ACTIONS DE PROGRÈS À ENTREPRENDRE</h3>
                <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
                    « Personnes de talent », « créativité » et « Partenariats »<br>

                </h2>
            </div>
            <!-- /.section-title -->


            <!-- /.countup-wrapper -->

        </div>
        <!-- /.container -->

        <div class="scroll-circle wow pixFadeRight">
            <img src="{{asset('frontend/media/background/circle3.png')}}" data-parallax='{"y" : -230}' alt="circle">
        </div>
    </section>
    <!-- /.countup -->

    <!--=======================-->
    <!--=         Blog        =-->
    <!--=======================-->
    <section class="newsletter" data-bg-image="{{asset('frontend/media/background/map-bg.jpg')}}">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="newsletter-content">
                        <h4 class="title wow pixFadeUp">
                            Abonnez-vous pour recevoir des nouvelles de l'entreprise.
                        </h4>
                    </div>
                    <!-- /.newsletter-content -->
                </div>
                <!-- /.col-lg-5 -->

                <div class="col-lg-7">
                    <form action="#" method="post" class="newsletter-form wow pixFadeUp" data-pixsaas="newsletter-subscribe">
                        <div class="newsletter-inner">

                            <input type="email" name="email" class="form-control" id="newsletter-form-email" placeholder="Entrer votre Email" required>
                            <button type="submit" name="submit" id="newsletter-submit" class="newsletter-submit">
                                <span class="btn-text">S'abonner</span>
                                <i class="fas fa-spinner fa-spin"></i>
                            </button>
                        </div>
                        <!-- /.newsletter-inner -->
                        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

                        <div class="clearfix"></div>
                        <div class="form-result alert">
                            <div class="content"></div>
                        </div>
                        <!-- /.form-result-->
                    </form>
                </div>
                <!-- /.col-lg-7 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

        <div class="scroll-circle wow fadeInUp">
            <img src="{{asset('frontend/media/background/circle10.png')}}" alt="circle6" data-parallax='{"y" : 50}'>
        </div>
    </section>
    <!-- /.newsletter -->
@endsection
