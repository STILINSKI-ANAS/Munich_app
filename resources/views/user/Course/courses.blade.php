@extends('layouts.user')

@section('content')
    <main class="rbt-main-wrapper">
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
                                    <li class="rbt-breadcrumb-item"><a href="index.html">Accueil</a></li>
                                    <li>
                                        <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                    </li>
                                    <li class="rbt-breadcrumb-item active">Tous les cours</li>
                                </ul>
                                <!-- End Breadcrumb Area  -->

                                <div class=" title-wrapper">
                                    <h1 class="title mb--0">Tous les cours</h1>
                                    <a href="#" class="rbt-badge-2">
                                        <div class="image">🎉</div>
                                        4 cours
                                    </a>
                                </div>

                                <p class="description">Nos cours sont spécialement conçus pour accompagner les débutants
                                    en langues sur leur chemin vers l'expertise linguistique. Nous fournissons un
                                    environnement d'apprentissage stimulant et interactif, où vous pourrez acquérir les
                                    bases essentielles et progresser de manière efficace. Nos instructeurs chevronnés
                                    vous guideront à chaque étape, en vous offrant des outils pratiques, des exercices
                                    pertinents et des ressources complémentaires pour renforcer vos compétences. Qu'il
                                    s'agisse d'apprendre une nouvelle langue pour voyager, étudier ou communiquer avec
                                    des locuteurs natifs, notre programme vous aidera à atteindre votre objectif et à
                                    devenir un expert linguistique. Rejoignez-nous dès aujourd'hui et découvrez une
                                    expérience d'apprentissage enrichissante et gratifiante.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Banner Content Top  -->
                <!-- Start Course Top  -->
                <div class="rbt-course-top-wrapper mt--40 mt_sm--20">
                    <div class="container">
                        <div class="row g-5 align-items-center">

                            <div class="col-lg-5 col-md-12">
                                <div class="rbt-sorting-list d-flex flex-wrap align-items-center">
                                    <div class="rbt-short-item switch-layout-container">
                                        <ul class="course-switch-layout">
                                            <li class="course-switch-item">
                                                <button class="rbt-grid-view active" title="Grid Layout"><i
                                                            class="feather-grid"></i> <span class="text">Grid</span>
                                                </button>
                                            </li>
                                            <li class="course-switch-item">
                                                <button class="rbt-list-view" title="List Layout"><i
                                                            class="feather-list"></i> <span class="text">List</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-12">
                                <div class="rbt-sorting-list d-flex flex-wrap align-items-center justify-content-start justify-content-lg-end">
                                    <div class="rbt-short-item">
                                        <form action="#" class="rbt-search-style me-0">
                                            <input type="text" placeholder="Chercher votre cours..">
                                            <button type="submit" class="rbt-search-btn rbt-round-btn">
                                                <i class="feather-search"></i>
                                            </button>
                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Course Top  -->
            </div>
        </div>


        <div class="rbt-section-overlayping-top rbt-section-gapBottom">
            <div class="inner">
                <div class="container">
                    <div class="rbt-course-grid-column">
                        @foreach ($courses as $course)
                            <div class="course-grid-3">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="{{url('/Language/Course/'.$course->level)}}">
                                            <img src="{{asset('./uploads/course/'.$course->image)}}" alt="Card image">
<!--                                            <div class="rbt-badge-3 bg-white">-->
<!--                                                <span>-20%</span>-->
<!--                                                <span>Off</span>-->
<!--                                            </div>-->
                                        </a>
                                    </div>
                                    <div class="rbt-card-body">
                                        <div class="rbt-card-top">
                                            <div class="rbt-review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>

                                        </div>

                                        <h4 class="rbt-card-title"><a
                                                    href="{{url('/Language/Course/'.$course->level)}}">{{$course->level}}</a>
                                        </h4>


                                        <p class="rbt-card-text">{{ substr($course->overview, 0, 85) }}...</p>
                                        <div class="rbt-author-meta mb--10">
                                            <div class="rbt-avater">
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/client/avatar-02.png') }}"
                                                         alt="Sophia Jaymes">
                                                </a>
                                            </div>
                                            <div class="rbt-author-info">
                                                Par <a href="profile.html">INSTITUT MUNICH</a> <a
                                                        href="#">{{$course->language->overview}}</a>
                                            </div>
                                        </div>
                                        <div class="rbt-card-bottom">
                                            <?php
                                            $price = $course->price;
                                            $totalPrice = $price + ($price * 0.2); // Price + 20% of the price
                                            ?>

                                            <div class="rbt-price">
                                                <span class="current-price">{{$price}} MAD</span>
                                                <span class="off-price">{{$totalPrice}} MAD</span>
                                            </div>
                                            <a class="rbt-btn-link" href="{{url('/Language/Course/'.$course->level)}}">S'avoir
                                                Plus<i class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
