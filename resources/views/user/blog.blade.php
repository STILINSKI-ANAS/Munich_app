@extends('layouts.user')
@section('content')

    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
        <div class="rbt-banner-content">

            <!-- Start Banner Content Top  -->
            <div class="rbt-banner-content-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Breadcrumb Area  -->
                            <ul class="page-list">
                                <li class="rbt-breadcrumb-item"><a href="index.html">L'institut</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active">Articles</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class="title-wrapper">
                                <h1 class="title mb--0">Articles</h1>
                                <a href="#" class="rbt-badge-2">
                                    <div class="image">🎉</div>
                                    Articles
                                </a>
                            </div>

                            <p class="description">Bienvenue sur notre page de blogs dédiée à l'apprentissage des
                                langues et à la préparation aux tests de notre institut! À l'Institut Munich, nous
                                sommes déterminés à vous aider à atteindre vos objectifs d'apprentissage des langues et
                                à exceller aux tests de compétence linguistique. Nos blogs couvrent un large éventail de
                                sujets pour soutenir votre parcours d'apprentissage des langues, des astuces utiles et
                                des stratégies aux articles instructifs sur la langue et la culture.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->

        </div>
    </div>

    <div class="rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row row--30 gy-5">

                <div class="col-lg-12">

                    <!-- Start Card Area -->
                    <div class="row g-5">

                        <!-- Start Single Card  -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="rbt-blog-grid rbt-card variation-02 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/blog-card-01.jpg" alt="Card image"> </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="{{ url('/blog1') }}">Apprendre l’allemand</a>
                                    </h5>

                                    <ul class="blog-meta">
                                        <li><i class="feather-user"></i>INSTITUT MUNICH</li>
                                        <li><i class="feather-clock"></i> August 3, 2023</li>
                                    </ul>
                                    <p class="rbt-card-text">L'allemand, une langue aux multiples facettes, vous invite
                                        à une aventure passionnante à travers les dédales de ses mots et de ses formes
                                        linguistiques...</p>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="{{ url('/blog1') }}">En Savoir Plus<i>
                                                <svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                                    <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                        <path d="M10.614 0l5.629 5.629-5.63 5.629"/>
                                                        <path stroke-linecap="square" d="M.663 5.572h14.594"/>
                                                    </g>
                                                </svg>
                                            </i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="rbt-blog-grid rbt-card variation-02 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/blog-card-02.jpg" alt="Card image"> </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="{{ url('/blog2') }}">Les Tests d'Allemand
                                            Importants</a></h5>
                                    <ul class="blog-meta">
                                        <li><i class="feather-user"></i>INSTITUT MUNICH</li>
                                        <li><i class="feather-clock"></i> juin 5, 2023</li>
                                    </ul>
                                    <p class="rbt-card-text">Que ce soit pour des études, des voyages touristiques ou
                                        des projets professionnels...</p>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="{{ url('/blog2') }}">En Savoir Plus<i>
                                                <svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                                    <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                        <path d="M10.614 0l5.629 5.629-5.63 5.629"/>
                                                        <path stroke-linecap="square" d="M.663 5.572h14.594"/>
                                                    </g>
                                                </svg>
                                            </i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="rbt-blog-grid rbt-card variation-02 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/blog-card-03.jpg" alt="Card image"> </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="{{ url('/blog3') }}">Étudier en Allemagne </a>
                                    </h5>
                                    <ul class="blog-meta">
                                        <li><i class="feather-user"></i>INSTITUT MUNICH</li>
                                        <li><i class="feather-clock"></i> juin 13, 2023</li>
                                    </ul>
                                    <p class="rbt-card-text">Le choix d'étudier en Allemagne est devenu une option
                                        privilégiée pour de nombreux étudiants marocains à travers le monde...</p>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="{{ url('/blog3') }}">En Savoir Plus<i>
                                                <svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                                    <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                        <path d="M10.614 0l5.629 5.629-5.63 5.629"/>
                                                        <path stroke-linecap="square" d="M.663 5.572h14.594"/>
                                                    </g>
                                                </svg>
                                            </i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="rbt-blog-grid rbt-card variation-02 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/blog-card-04.png" alt="Card image"> </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="{{ url('/blog4') }}">Guide Complet du Visa
                                            Schengen</a></h5>
                                    <ul class="blog-meta">
                                        <li><i class="feather-user"></i>INSTITUT MUNICH</li>
                                        <li><i class="feather-clock"></i> Mars 3, 2023</li>
                                    </ul>
                                    <p class="rbt-card-text">Pour les citoyens marocains désireux de découvrir
                                        l'Allemagne, l'obtention d'un visa Schengen...</p>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="{{ url('/blog4') }}">En Savoir Plus<i>
                                                <svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                                    <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                        <path d="M10.614 0l5.629 5.629-5.63 5.629"/>
                                                        <path stroke-linecap="square" d="M.663 5.572h14.594"/>
                                                    </g>
                                                </svg>
                                            </i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->
                        <!-- Start Single Card  -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="rbt-blog-grid rbt-card variation-02 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/blogwork.jpg" alt="Card image"> </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="{{ url('/blog5') }}">Étudier et Travailler en
                                            Allemagne</a></h5>
                                    <ul class="blog-meta">
                                        <li><i class="feather-user"></i>INSTITUT MUNICH</li>
                                        <li><i class="feather-clock"></i> August 3, 2023</li>
                                    </ul>
                                    <p class="rbt-card-text">Être étudiant, c'est souvent être à court d'argent. Les
                                        sorties nocturnes au Späti de Berlin ou l'entrée au...</p>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="{{ url('/blog5') }}">En Savoir Plus<i>
                                                <svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                                    <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                        <path d="M10.614 0l5.629 5.629-5.63 5.629"/>
                                                        <path stroke-linecap="square" d="M.663 5.572h14.594"/>
                                                    </g>
                                                </svg>
                                            </i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->
                    </div>
                    <!-- End Card Area -->


                </div>


            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
@endsection
