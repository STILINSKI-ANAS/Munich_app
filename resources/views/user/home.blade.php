@extends('layouts.user')

@section('content')
    <!-- Content Section -->

    <main class="rbt-main-wrapper">
        <!-- Start Banner Area -->
        <div class="rbt-banner-area rbt-banner-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 pb--120 pt--70">
                        <div class="content">
                            <div class="inner">
                                <div class="rbt-new-badge rbt-new-badge-one">
                                    <span class="rbt-new-badge-icon">🏆</span>  Votre porte vers le succès !
                                </div>

                                <h1 class="title">
                                    Institut Munich
                                </h1>
                                <p class="description">
                                    Installée à agadir depuis 2015, <strong>l'institut Munich</strong> est une entreprise spécialisée dans la préparation aux examens et concours.
                                </p>
                                <div class="slider-btn">
                                    <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">S'inscrire</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="shape-wrapper" id="scene">
                                <img src="{{ asset('assets/images/banner/banner-01.png') }}" alt="Hero Image">
                                <div class="hero-bg-shape-1 layer" data-depth="0.4">
                                    <img src="{{ asset('assets/images/shape/shape-01.png') }}" alt="Hero Image Background Shape">
                                </div>
                                <div class="hero-bg-shape-2 layer" data-depth="0.4">
                                    <img src="{{ asset('assets/images/shape/shape-02.png') }}" alt="Hero Image Background Shape">
                                </div>
                            </div>

                            <div class="banner-card pb--60 mb--50 swiper rbt-dot-bottom-center banner-swiper-active">
                                <div class="swiper-wrapper">

                                    <!-- Start Single Card  -->
                                    @foreach($tests as $test)

                                        <div class="swiper-slide">
                                            <div class="rbt-card variation-01 rbt-hover">
                                                <div class="rbt-card-img">
                                                    <a href="course-details.html">
                                                        <img src="{{ asset('assets/images/course/' . $test['image']) }}" alt="{{ $test['name'] }} Images">
                                                    </a>
                                                </div>
                                                <div class="rbt-card-body">
                                                    <ul class="rbt-meta">
                                                        <li><i class="feather-users"></i>50 Students</li>|
                                                        <li><i class="feather-calendar"></i>11/02/2023</li>

                                                    </ul>
                                                    <h4 class="rbt-card-title"><a href="course-details.html">{{ $test['name'] }}</a>
                                                    </h4>
                                                    <p class="rbt-card-text">{{ substr($test['overview'], 0, 80) }}</p>

                                                    <div class="rbt-card-bottom">
                                                        <div class="rbt-price">
                                                            <span class="current-price">{{ $test['price'] }} MAD</span>
                                                        </div>
                                                        <a class="rbt-btn-link" href="{{url('/Language/Test/'.$test->level)}}">S'avoir
                                                            Plus<i class="feather-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <!-- End Single Card  -->


                                </div>
                                <div class="rbt-swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area -->

        <div class="rbt-categories-area bg-color-white rbt-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">CATEGORIES</span>
                            <h2 class="title">Explorez nos principales catégories<br>à l'Institut Munich :</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--20">
                    <!-- Start Category Box Layout -->
                    @foreach($categories as $category)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <a class="rbt-cat-box rbt-cat-box-1 text-center" href="course-filter-one-toggle.html">
                                <div class="inner">
                                    <div class="icons">
                                        <img src="{{ asset('storage/' . $category['image']) }}" alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h5 class="title">{{ $category['name'] }}</h5>
                                        <div class="read-more-btn">
                                            <span class="rbt-btn-link">Plus de {{ $category['number'] }} <i class="feather-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <!-- End Category Box Layout -->

                </div>
            </div>
        </div>

        <!-- Start Course Area -->
        <div class="rbt-course-card-area rbt-section-gap bg-color-white">
            <div class="container">
                <div class="row align-items-center mb--60">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-pink-opacity">Notre Cours de langue</span>
                            <h2 class="title">Cours de langues</h2>
                            <p class="description has-medium-font-size mt--20">Les cours de langue que l'Institut Munich offre !</p>
                        </div>
                    </div>
                </div>
                <!-- Start Card Area -->
                <div class="row g-5">

                    <!-- Start Single Card  -->
                    @foreach($languages as $language)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="rbt-card variation-03 rbt-hover">
                                <div class="rbt-card-img">
                                    <a class="thumbnail-link" href="course-details.html">
                                        <img src="{{ asset('uploads/Language/' . $language->image) }}" alt="Card image">
                                        <span class="rbt-btn btn-white icon-hover btn-md">
                                    <span class="btn-text">Voir Plus</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="course-details.html"> {{ $language['name'] }}</a>
                                    </h5>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="course-details.html"><i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                                    </div>
                                </div>
                                <div class="card-information">
                                    <div class="card-flag">
                                        <img src="assets/images/shape/{{ $language['name'] }}.svg" alt="{{ $language['name'] }}">
                                    </div>
                                    <div class="card-count">    {{ $language->name }} - {{ $language->courses->count() }} cours
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->
                    @endforeach
                </div>
                <!-- End Card Area -->
            </div>
        </div>        <!-- End Course Area -->

        <!-- Start About Area  -->
        <div class="rbt-about-area bg-color-white rbt-section-gapTop pb_md--80 pb_sm--80 about-style-1">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="thumbnail-wrapper">
                            <div class="thumbnail image-1">
                                <img data-parallax='{"x": 0, "y": -20}' src="{{ asset('assets/images/about/about-01.png')}}" alt="Education Images">
                            </div>
                            <div class="thumbnail image-2 d-none d-xl-block">
                                <img data-parallax='{"x": 0, "y": 60}' src="{{ asset('assets/images/about/about-02.png')}}" alt="Education Images">
                            </div>
                            <div class="thumbnail image-3 d-none d-md-block">
                                <img data-parallax='{"x": 0, "y": 80}' src="{{ asset('assets/images/about/about-03.png')}}" alt="Education Images">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="inner pl--50 pl_sm--0 pl_md--0">
                            <div class="section-title text-start">
                                <span class="subtitle bg-coral-opacity">Découvrez Qui Nous Sommes</span>
                                <h2 class="title">Découvrez Notre instut <br /> Instut Munich</h2>
                            </div>

                            <p class="description mt--30">Votre destination pour l'apprentissage des langues. Expérience linguistique enrichissante. Programmes adaptés à tous les niveaux et besoins. Découvrez de nouvelles cultures. Créez des liens internationaux. Ouverture de perspectives professionnelles. Rejoignez-nous dès maintenant.</p>

                            <!-- Start Feature List  -->

                            <div class="rbt-feature-wrapper mt--20 ml_dec_20">
                                <div class="rbt-feature feature-style-2 rbt-radius">
                                    <div class="icon bg-pink-opacity">
                                        <i class="feather-heart"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Expertise pédagogique </h6>
                                        <p class="feature-description">Notre expertise pédagogique garantit un enseignement de qualité avec des professeurs passionnés.</p>
                                    </div>
                                </div>

                                <div class="rbt-feature feature-style-2 rbt-radius">
                                    <div class="icon bg-primary-opacity">
                                        <i class="feather-book"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Environnement d'apprentissage stimulant</h6>
                                        <p class="feature-description">Salles de classe modernes, activités culturelles et rencontres internationales.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- End Feature List  -->
                            <div class="about-btn mt--40">
                                <a class="rbt-btn btn-gradient hover-icon-reverse"  href="{{ url('/aboutUs') }}">
                                    <span class="icon-reverse-wrapper">
                            <span class="btn-text">Plus Sur Nous</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area  -->

        <!-- Start Call To Action  -->
        <div class="rbt-callto-action-area mt_dec--half">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="rbt-callto-action callto-action-default bg-color-white rbt-radius shadow-1">
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-xl-5">
                                    <div class="inner">
                                        <div class="rbt-category mb--20">
                                            <a href="#">New Collection</a>
                                        </div>
                                        <h4 class="title mb--15">Online Courses from Histudy</h4>
                                        <p class="mb--15">Top instructors from around the world</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-7">
                                    <div class="video-popup-wrapper mt_lg--10 mt_md--20 mt_sm--20">
                                        <img class="w-100 rbt-radius" src="{{ asset('assets/images/others/video-01.jpg')}}" alt="Video Images">
                                        <a class="rbt-btn rounded-player-2 sm-size popup-video position-to-top with-animation" href="https://www.youtube.com/watch?v=nA1Aqp0sPQo">
                                            <span class="play-icon"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="rbt-callto-action callto-action-default bg-color-white rbt-radius shadow-1">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <div class="inner">
                                        <div class="rbt-category mb--20">
                                            <a href="{{ url('/Instructor/register') }}">Devenir Enseignant</a>
                                        </div>
                                        <p class="mb--15">
                                            Si vous aspirez à devenir enseignant, nous sommes là pour vous aider à réaliser votre ambition.<br>
                                        Ensemble, nous pouvons façonner l'avenir de l'éducation.</p>
                                        <div class="about-btn mt--40">
                                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="{{ url('/Instructor/register') }}">
                                    <span class="icon-reverse-wrapper">
                            <span class="btn-text">Rejoignez maintenant</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Call To Action  -->

        <!-- Start Counterup Area  -->
        <div class="rbt-counterup-area bg-color-extra2 rbt-section-gapBottom default-callto-action-overlap">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">Pourquoi Nous Choisir</span>
                            <h2 class="title">Votre Passerelle Vers <br>Une Carrière Florissante.</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 hanger-line">
                    <!-- Start Single Counter  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                            <div class="top-circle-shape"></div>
                            <div class="inner">
                                <div class="rbt-round-icon">
                                    <img src="{{ asset('assets/images/icons/counter-01.png') }}" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h3 class="counter"><span class="odometer" data-count="30">00</span>
                                    </h3>
                                    <span class="subtitle">Formateurs certifiés</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Counter  -->

                    <!-- Start Single Counter  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--60 mt_md--30 mt_sm--30 mt_mobile--60">
                        <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                            <div class="top-circle-shape"></div>
                            <div class="inner">
                                <div class="rbt-round-icon">
                                    <img src="{{ asset('assets/images/icons/counter-02.png') }}" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h3 class="counter"><span class="odometer" data-count="50">00</span>
                                    </h3>
                                    <span class="subtitle">Formations Disponible</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Counter  -->

                    <!-- Start Single Counter  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_md--60 mt_sm--60">
                        <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                            <div class="top-circle-shape"></div>
                            <div class="inner">
                                <div class="rbt-round-icon">
                                    <img src="{{ asset('assets/images/icons/counter-03.png') }}" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h3 class="counter"><span class="odometer" data-count="50">00</span>
                                    </h3>
                                    <span class="subtitle">Formations Disponible</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Counter  -->

                    <!-- Start Single Counter  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--60 mt_md--30 mt_sm--30 mt_mobile--60">
                        <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                            <div class="top-circle-shape"></div>
                            <div class="inner">
                                <div class="rbt-round-icon">
                                    <img src="{{ asset('assets/images/icons/counter-04.png') }}" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h3 class="counter"><span class="odometer" data-count="120">00</span>
                                    </h3>
                                    <span class="subtitle">Étudiants inscrits</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Counter  -->
                </div>
            </div>
        </div>
        <!-- End Counterup Area  -->
        <!-- Start Brand Area   -->
        <div class="rbt-brand-area bg-color-white rbt-section-gap">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-3">
                        <div class="brand-content-left">
                            <h4 class="mb--0">Nos Partenaires de Confiance</h4>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <ul class="brand-list brand-style-2 justify-content-center justify-content-lg-between">
                            <li><a href="#"><img src="assets/images/brand/brand-01.png" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="assets/images/brand/brand-02.png" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="assets/images/brand/brand-03.png" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="assets/images/brand/brand-04.png" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="assets/images/brand/brand-05.png" alt="Brand Image"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Area   -->
        <!-- Start Testimonial Area   -->
        <div class="rbt-testimonial-area bg-color-white rbt-section-gap overflow-hidden">
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center mb--10">
                                <span class="subtitle bg-primary-opacity">Notre institut rend l'apprentissage des langues facile POUR TOUT LE MONDE.</span>
                                <h2 class="title">
                                    Les gens aiment notre institut.
                                    Pas de plaisanterie - voici la preuve !</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll-animation-wrapper no-overlay mt--50">
                <div class="scroll-animation scroll-right-left">

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="description">
                                    <p class="subtitle-3">Institut Munich is the best language institute I have ever known in Agadir Morocco.
                                        In my opinion they have the highest quality in german language learning around.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="client-info">
                                            <h5 class="title">Sami Adili</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="description">
                                    <p class="subtitle-3">Great institute with a great teachers and skilled management stuff.
                                        this institute takes the language learning in Agadir and Morocco to another level.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="client-info">
                                            <h5 class="title">Mustapha</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="description">
                                    <p class="subtitle-3">Im learning deutsch in it. And i can say that, Its one of the greatest school in agadir..
                                        it makes you love the languge that you learn😍😍 …</p>
                                    <div class="clint-info-wrapper">
                                        <div class="client-info">
                                            <h5 class="title"><span>Morad Benhakou</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="description">
                                    <p class="subtitle-3">Institut Munich is the best language institute I have ever known in Agadir Morocco. In my opinion they have the highest quality in german language learning around.
                                    </p>
                                    <div class="clint-info-wrapper">
                                        <div class="client-info">
                                            <h5 class="title">Sami Adili</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="description">
                                    <p class="subtitle-3">Great institute with a great teachers and skilled management stuff. this institute takes the language learning in Agadir and Morocco to another level.
                                    </p>
                                    <div class="clint-info-wrapper">
                                        <div class="client-info">
                                            <h5 class="title">Mustapha</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->
                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="description">
                                    <p class="subtitle-3">Institut Munich is the best language institute I have ever known in Agadir Morocco.
                                        In my opinion they have the highest quality in german language learning around.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="client-info">
                                            <h5 class="title">Sami Adili</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="description">
                                    <p class="subtitle-3">Great institute with a great teachers and skilled management stuff.
                                        this institute takes the language learning in Agadir and Morocco to another level.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="client-info">
                                            <h5 class="title">Mustapha</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="description">
                                    <p class="subtitle-3">Im learning deutsch in it. And i can say that, Its one of the greatest school in agadir..
                                        it makes you love the languge that you learn😍😍 …</p>
                                    <div class="clint-info-wrapper">
                                        <div class="client-info">
                                            <h5 class="title"><span>Morad Benhakou</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="description">
                                    <p class="subtitle-3">Institut Munich is the best language institute I have ever known in Agadir Morocco. In my opinion they have the highest quality in german language learning around.
                                    </p>
                                    <div class="clint-info-wrapper">
                                        <div class="client-info">
                                            <h5 class="title">Sami Adili</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="description">
                                    <p class="subtitle-3">Great institute with a great teachers and skilled management stuff. this institute takes the language learning in Agadir and Morocco to another level.
                                    </p>
                                    <div class="clint-info-wrapper">
                                        <div class="client-info">
                                            <h5 class="title">Mustapha</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                </div>
            </div>

        </div>
        <!-- End Testimonial Area   -->

        <!-- Start Event Area  -->
        <div class="rbt-event-area rbt-section-gap bg-gradient-3">
            <div class="container">
                <div class="row mb--55">
                    <div class="section-title text-center">
                        <span class="subtitle bg-white-opacity">ANNONCES</span>
                        <h2 class="title color-white">ANNONCES </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper event-activation-1 rbt-arrow-between rbt-dot-bottom-center pb--60 icon-bg-primary">

                            <div class="swiper-wrapper">
                                <!-- Start Single Slide  -->
                                <div class="swiper-slide">
                                    <div class="single-slide">
                                        <div class="rbt-card event-grid-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="event-details.html">
                                                    <img src="assets/images/event/grid-type-02.jpg" alt="Card image">
                                                    <div class="rbt-badge-3 bg-white">
                                                        <span>11 Mar</span>
                                                        <span>2023</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-map-pin"></i>Vancouver</li>
                                                    <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="event-details.html">Painting Art Contest 2020 for histudy Clud</a></h4>

                                                <div class="read-more-btn">
                                                    <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="event-details.html">
                                                        <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Get Ticket</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Slide  -->
                                <!-- Start Single Slide  -->
                                <div class="swiper-slide">
                                    <div class="single-slide">
                                        <div class="rbt-card event-grid-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="event-details.html">
                                                    <img src="assets/images/event/grid-type-04.jpg" alt="Card image">
                                                    <div class="rbt-badge-3 bg-white">
                                                        <span>11 Jan</span>
                                                        <span>2023</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-map-pin"></i>IAC Building</li>
                                                    <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="event-details.html">Elegant Light Box Paper Cut Dioramas in UK</a></h4>

                                                <div class="read-more-btn">
                                                    <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="event-details.html">
                                                        <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Get Ticket</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Slide  -->

                                <!-- Start Single Slide  -->
                                <div class="swiper-slide">
                                    <div class="single-slide">
                                        <div class="rbt-card event-grid-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="event-details.html">
                                                    <img src="assets/images/event/grid-type-05.jpg" alt="Card image">
                                                    <div class="rbt-badge-3 bg-white">
                                                        <span>11 Mar</span>
                                                        <span>2023</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-map-pin"></i>Vancouver</li>
                                                    <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="event-details.html">Most Effective Ways for Education's Problem</a></h4>

                                                <div class="read-more-btn">
                                                    <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="event-details.html">
                                                        <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Get Ticket</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Slide  -->

                                <!-- Start Single Slide  -->
                                <div class="swiper-slide">
                                    <div class="single-slide">
                                        <div class="rbt-card event-grid-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="event-details.html">
                                                    <img src="assets/images/event/grid-type-01.jpg" alt="Card image">
                                                    <div class="rbt-badge-3 bg-white">
                                                        <span>11 Jan</span>
                                                        <span>2023</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-map-pin"></i>IAC Building</li>
                                                    <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="event-details.html">International Education Fair 2023</a></h4>

                                                <div class="read-more-btn">
                                                    <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="event-details.html">
                                                        <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Get Ticket</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Slide  -->
                            </div>

                            <div class="rbt-swiper-arrow rbt-arrow-left">
                                <div class="custom-overfolow">
                                    <i class="rbt-icon feather-arrow-left"></i>
                                    <i class="rbt-icon-top feather-arrow-left"></i>
                                </div>
                            </div>

                            <div class="rbt-swiper-arrow rbt-arrow-right">
                                <div class="custom-overfolow">
                                    <i class="rbt-icon feather-arrow-right"></i>
                                    <i class="rbt-icon-top feather-arrow-right"></i>
                                </div>
                            </div>

                            <div class="rbt-swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Event Area  -->
        <div class="rbt-team-area bg-color-white rbt-section-gap">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">Notre Personnel</span>
                            <h2 class="title">Une Équipe Exceptionnelle</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5">

                    <div class="col-lg-7">
                        <!-- Start Tab Content  -->
                        <div class="rbt-team-tab-content tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="team-tab1" role="tabpanel" aria-labelledby="team-tab1-tab">
                                <div class="inner">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="assets/images/team/team-01.jpg" alt="Testimonial Images">
                                        </div>
                                    </div>
                                    <div class="rbt-team-details">
                                        <div class="author-info">
                                            <h4 class="title">Mames Mary</h4>
                                            <span class="designation theme-gradient">English Teacher</span>
                                            <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                                            </span>
                                        </div>
                                        <p>Histudy The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                        <ul class="social-icon social-default mt--20 justify-content-start">
                                            <li><a href="https://www.facebook.com/">
                                                    <i class="feather-facebook"></i>
                                                </a>
                                            </li>
                                            <li><a href="https://www.twitter.com">
                                                    <i class="feather-twitter"></i>
                                                </a>
                                            </li>
                                            <li><a href="https://www.instagram.com/">
                                                    <i class="feather-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="rbt-information-list mt--25">
                                            <li>
                                                <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                            </li>
                                            <li>
                                                <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="team-tab2" role="tabpanel" aria-labelledby="team-tab2-tab">
                                <div class="inner">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="assets/images/team/team-02.jpg" alt="Testimonial Images">
                                        </div>
                                    </div>
                                    <div class="rbt-team-details">
                                        <div class="author-info">
                                            <h4 class="title">Robert Song</h4>
                                            <span class="designation theme-gradient">Math Teacher</span>
                                            <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                                            </span>
                                        </div>
                                        <p>Education The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                        <ul class="social-icon social-default mt--20 justify-content-start">
                                            <li><a href="https://www.facebook.com/">
                                                    <i class="feather-facebook"></i>
                                                </a>
                                            </li>
                                            <li><a href="https://www.twitter.com">
                                                    <i class="feather-twitter"></i>
                                                </a>
                                            </li>
                                            <li><a href="https://www.instagram.com/">
                                                    <i class="feather-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="rbt-information-list mt--25">
                                            <li>
                                                <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                            </li>
                                            <li>
                                                <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="team-tab3" role="tabpanel" aria-labelledby="team-tab3-tab">
                                <div class="inner">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="assets/images/team/team-03.jpg" alt="Testimonial Images">
                                        </div>
                                    </div>
                                    <div class="rbt-team-details">
                                        <div class="author-info">
                                            <h4 class="title">William Susan</h4>
                                            <span class="designation theme-gradient">React Teacher</span>
                                            <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                                            </span>
                                        </div>
                                        <p>React The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                        <ul class="social-icon social-default mt--20 justify-content-start">
                                            <li><a href="https://www.facebook.com/">
                                                    <i class="feather-facebook"></i>
                                                </a>
                                            </li>
                                            <li><a href="https://www.twitter.com">
                                                    <i class="feather-twitter"></i>
                                                </a>
                                            </li>
                                            <li><a href="https://www.instagram.com/">
                                                    <i class="feather-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="rbt-information-list mt--25">
                                            <li>
                                                <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                            </li>
                                            <li>
                                                <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="team-tab4" role="tabpanel" aria-labelledby="team-tab4-tab">
                                <div class="inner">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="assets/images/team/team-04.jpg" alt="Testimonial Images">
                                        </div>
                                    </div>
                                    <div class="rbt-team-details">
                                        <div class="author-info">
                                            <h4 class="title">Soseph Sara</h4>
                                            <span class="designation theme-gradient">Web Teacher</span>
                                            <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                                            </span>
                                        </div>
                                        <p>Histudy The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                        <ul class="social-icon social-default mt--20 justify-content-start">
                                            <li><a href="https://www.facebook.com/">
                                                    <i class="feather-facebook"></i>
                                                </a>
                                            </li>
                                            <li><a href="https://www.twitter.com">
                                                    <i class="feather-twitter"></i>
                                                </a>
                                            </li>
                                            <li><a href="https://www.instagram.com/">
                                                    <i class="feather-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="rbt-information-list mt--25">
                                            <li>
                                                <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                            </li>
                                            <li>
                                                <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="team-tab5" role="tabpanel" aria-labelledby="team-tab5-tab">
                                <div class="inner">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="assets/images/team/team-05.jpg" alt="Testimonial Images">
                                        </div>
                                    </div>
                                    <div class="rbt-team-details">
                                        <div class="author-info">
                                            <h4 class="title">Thomas Dal</h4>
                                            <span class="designation theme-gradient">Graphic Teacher</span>
                                            <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                                            </span>
                                        </div>
                                        <p>Histudy The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                        <ul class="social-icon social-default mt--20 justify-content-start">
                                            <li><a href="https://www.facebook.com/">
                                                    <i class="feather-facebook"></i>
                                                </a>
                                            </li>
                                            <li><a href="https://www.twitter.com">
                                                    <i class="feather-twitter"></i>
                                                </a>
                                            </li>
                                            <li><a href="https://www.instagram.com/">
                                                    <i class="feather-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="rbt-information-list mt--25">
                                            <li>
                                                <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                            </li>
                                            <li>
                                                <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="team-tab6" role="tabpanel" aria-labelledby="team-tab6-tab">
                                <div class="inner">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="assets/images/team/team-06.jpg" alt="Testimonial Images">
                                        </div>
                                    </div>
                                    <div class="rbt-team-details">
                                        <div class="author-info">
                                            <h4 class="title">Christopher Lisa</h4>
                                            <span class="designation theme-gradient">English Teacher</span>
                                            <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                                            </span>
                                        </div>
                                        <p>Histudy The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                        <ul class="social-icon social-default mt--20 justify-content-start">
                                            <li><a href="https://www.facebook.com/">
                                                    <i class="feather-facebook"></i>
                                                </a>
                                            </li>
                                            <li><a href="https://www.twitter.com">
                                                    <i class="feather-twitter"></i>
                                                </a>
                                            </li>
                                            <li><a href="https://www.instagram.com/">
                                                    <i class="feather-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="rbt-information-list mt--25">
                                            <li>
                                                <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                            </li>
                                            <li>
                                                <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="top-circle-shape"></div>
                        </div>
                        <!-- End Tab Content  -->
                    </div>

                    <div class="col-lg-5">
                        <!-- Start Tab Nav  -->
                        <ul class="rbt-team-tab-thumb nav nav-tabs" id="myTab" role="tablist">
                            <li>
                                <a class="active" id="team-tab1-tab" data-bs-toggle="tab" data-bs-target="#team-tab1" role="tab" aria-controls="team-tab1" aria-selected="true">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="assets/images/team/team-01.jpg" alt="Testimonial Images">
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a id="team-tab2-tab" data-bs-toggle="tab" data-bs-target="#team-tab2" role="tab" aria-controls="team-tab2" aria-selected="false">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="assets/images/team/team-02.jpg" alt="Testimonial Images">
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a id="team-tab3-tab" data-bs-toggle="tab" data-bs-target="#team-tab3" role="tab" aria-controls="team-tab3" aria-selected="false">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="assets/images/team/team-03.jpg" alt="Testimonial Images">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a id="team-tab4-tab" data-bs-toggle="tab" data-bs-target="#team-tab4" role="tab" aria-controls="team-tab4" aria-selected="false">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="assets/images/team/team-04.jpg" alt="Testimonial Images">
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a id="team-tab5-tab" data-bs-toggle="tab" data-bs-target="#team-tab5" role="tab" aria-controls="team-tab5" aria-selected="false">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="assets/images/team/team-05.jpg" alt="Testimonial Images">
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a id="team-tab6-tab" data-bs-toggle="tab" data-bs-target="#team-tab6" role="tab" aria-controls="team-tab6" aria-selected="false">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="assets/images/team/team-06.jpg" alt="Testimonial Images">
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                        <!-- End Tab Content  -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Blog Style -->
        <div class="rbt-rbt-blog-area rbt-section-gap bg-color-extra2">
            <div class="container">
                <div class="row g-5 align-items-center mb--30">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="section-title">
                            <span class="subtitle bg-pink-opacity">Article de blog</span>
                            <h2 class="title">Articles Populaires.</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="read-more-btn text-start text-md-end">
                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="blog.html">
                                <div class="icon-reverse-wrapper">
                                    <span class="btn-text">Voir tous les articles</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Start Card Area -->
                <div class="row row--15">
                    <!-- Start Single Card  -->
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt--30" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="rbt-card variation-02 height-330 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/blog-card-01.jpg" alt="Image de la carte"> </a>
                            </div>
                            <div class="rbt-card-body">
                                <h3 class="rbt-card-title"><a href="{{ url('/blog') }}">Les Tests d'Allemand Importants pour les Marocains souhaitant Visiter l'Allemagne ou Obtenir un Visa</a></h3>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button"href="{{ url('/blog') }}">En savoir plus<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt--30" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">

                        <!-- Start Single Card  -->
                        <div class="rbt-card card-list variation-02 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/blog-card-02.jpg" alt="Image de la carte"> </a>
                            </div>
                            <div class="rbt-card-body">
                                <p class="rbt-card-text">Que ce soit pour des études, des voyages touristiques ou des projets ...</p>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="blog-details.html">Lire l'article<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                            <div class="rbt-card-img">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/blog-card-03.jpg" alt="Image de la carte"> </a>
                            </div>
                            <div class="rbt-card-body">
                                <p class="rbt-card-text">Guide Complet du Visa Schengen pour les Citoyens Marocains se Rendant en Allemagne</p>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="blog-details.html">Lire l'article<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                            <div class="rbt-card-img">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/blog-card-04.jpg" alt="Image de la carte"> </a>
                            </div>
                            <div class="rbt-card-body">
                                <p class="rbt-card-text">L'éducation est si célèbre, mais pourquoi ?</p>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="blog-details.html">Lire l'article<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->
                    </div>
                </div>
                <!-- End Card Area -->
            </div>
        </div>
        <!-- End Blog Style -->

        <div class="rbt-newsletter-area newsletter-style-2 bg-color-primary rbt-section-gap">
            <div class="container">
                <div class="row row--15 align-items-center">
                    <div class="col-lg-12">
                        <div class="inner text-center">
                            <div class="section-title text-center">
                                <span class="subtitle bg-white-opacity">Recevez Les Dernières Mises À Jour De L'Institut Munich</span>
                                <h2 class="title color-white"><strong>Abonnez-Vous</strong> À Notre Newsletter</h2>
                                <p class="description color-white mt--20">Recevoir des informations sur nos cours, nos événements spéciaux et nos offres exclusives.</p>
                            </div>
                            <form action="{{ url('/Subscribe')}}" method="post" class="newsletter-form-1 mt--40">
                                    @csrf
                                <input type="email" name="email" placeholder="Entrez votre adresse e-mail">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse">
                                    <span class="icon-reverse-wrapper">
                            <span class="btn-text">S'abonner</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </form>
                            <span class="note-text color-white mt--20">Pas de publicité, pas d'essai, pas d'engagement</span>

                            <div class="row row--15 mt--50">
                                <!-- Start Single Counter -->
                                <div class="col-lg-6 offset-lg-3 col-md-6 col-sm-6 single-counter">
                                    <div class="rbt-counterup rbt-hover-03 style-2 text-color-white">
                                        <div class="inner">
                                            <div class="content">
                                                <h3 class="counter color-white"><span class="odometer" data-count="1500">00</span>
                                                </h3>
                                                <h5 class="title color-white">Abonnés</h5>
                                                <span class="subtitle color-white">N'attendez plus et rejoignez-nous dès maintenant !</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Counter -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>

    </main>
    <!-- End Content Section -->

@endsection
