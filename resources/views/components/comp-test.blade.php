<div class="daf">

    <div class="slider-area rbt-banner-5 height-550 bg_image"
         style="background-image: url({{ asset('/uploads/Test/'.$image) }});" data-gradient-overlay="7">
        <!--        <div class="container">-->
        <!--            <div class="row">-->
        <!--                <div class="col-lg-12">-->
        <!--                    <div class="inner text-center">-->
        <!--                        <h1 class="title display-one">Start Your-->
        <!--                            <span>Career &amp; </span>-->
        <!--                            <span>Pursue</span> Your Passion.-->
        <!--                        </h1>-->
        <!--                        <p class="description">We help our clients succeed by creating brand identities, digital-->
        <!--                            experiences, and print materials.</p>-->
        <!--                        <div class="rbt-button-group">-->
        <!--                            <a class="rbt-btn btn-white hover-icon-reverse" href="#">-->
        <!--                                <div class="icon-reverse-wrapper">-->
        <!--                                    <span class="btn-text">View Our Program</span>-->
        <!--                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>-->
        <!--                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                            <a class="rbt-btn btn-border hover-icon-reverse color-white" href="contact.html">-->
        <!--                                <div class="icon-reverse-wrapper">-->
        <!--                                    <span class="btn-text">Contact Us</span>-->
        <!--                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>-->
        <!--                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="content">
                        <div class="content text-start d-flex flex-column">
                            <ul class="page-list">
                                <li class="rbt-breadcrumb-item">
                                    <a href="index.html" class="color-white">Langue {{ $langue }}</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active color-white">
                                    {{ $title }}
                                </li>
                            </ul>
                            <h2 class="title color-white">
                                {{ $title }}
                            </h2>
                            <p class="description color-white">
                                {{ $description }}
                            </p>

                            <div class="d-flex align-items-center mb--20 flex-wrap rbt-course-details-feature">

                                <div class="feature-sin best-seller-badge">
                                    <span class="rbt-badge-2">
                                            <span class="image">
                                                <img src="{{ asset('assets/images/icons/card-icon-1.png') }}"
                                                     alt="Best Seller Icon">
                                            </span>meilleur choix</span>
                                </div>
                            </div>


                            <ul class="rbt-meta">
                                <li class="color-white"><i class="feather-calendar color-white"></i>Dernière mise à jour
                                </li>
                                <li class="color-white"><i class="feather-globe color-white"></i>{{ $langue }}</li>
                                <li class="color-white"><i class="feather-award color-white"></i>Examen certifié</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- srart tag Area -->

    <!-- Start CallTo Action Area  -->
    <div class="rbt-call-to-action-area p-5 bg-gradient-8">
        <div class="rbt-callto-action rbt-cta-default style-6">
            <div class="container">
                <div class="row g-5 align-items-center content-wrapper">
                    @if(auth()->check())
                        <form method="POST" action="{{ url('/EtudiantTest')}}"
                              enctype="multipart/form-data">
                            @csrf

                            @if((($totalEtudiantsInscrits < $maxPlacements) || ($maxPlacements == null)))
                                <div class="col-xxl-12 col-xl-12 col-lg-12 text-center">
                                    <div
                                        class="rbt-price-wrapper d-flex flex-wrap align-items-center justify-content-around">
                                        <div class="rbt-price">
                                            <span class="current-price text-white" style="font-size: 32px">{{ $price }} MAD</span>
                                            <span class="off-price text-white">{{ $price * 1.4 }} MAD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="text-white" name="nom" id="nom" type="text" required>
                                    <label class="text-white">Nom de famille</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-group">
                                    <input class="text-white" name="prenom" id="prenom" type="text" required>
                                    <label class="text-white">Prénom</label>
                                    <span class="focus-border"></span>
                                </div>
                                <!--                        <div>-->
                                <!--                            <labela>supp1</labela>-->
                                <!--                            <input type="text" name="supp1" placeholder="question supplémentaire 1">-->
                                <!--                        </div>-->
                                <input type="text" name="testId" required value="{{$testId}}" hidden>
                                <button
                                    class="rbt-btn btn-white hover-icon-reverse w-100 d-block text-center mt--15"
                                    type="submit">
                            <span class="icon-reverse-wrapper">
                            <span class="btn-text">S'inscrire</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </span>
                                </button>
                            @else
                                <div class="col-xxl-12 col-xl-12 col-lg-12">
                                    <div class="inner">
                                        <div class="content text-start">
                                            <h2 class="title color-white mb--0">L'examen a atteint le maximum de places
                                                disponibles !</h2>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </form>
                    @else
                        {{--<div>logged out</div>--}}
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="inner">
                                <div class="content text-start">
                                    <h2 class="title color-white mb--0">S'inscrire maintenant</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 text-center">
                            <div class="call-to-btn text-start text-center mb--10">
                                <a class="rbt-btn btn-white hover-icon-reverse" href="{{ url('/register') }}">
                                <span class="icon-reverse-wrapper">
                            <span class="btn-text">Créer un Compte</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                                </a>
                            </div>
                            <a class="text-white">Vous avez deja un Compte:</a> <a class="hover-reverse text-white"
                                                                                   href="{{ url('/login') }}">
                                <b>S'Authentifier</b>
                            </a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <div class="rbt-advance-tab-area bg-gradient-2 pt--20">
        <div class="row g-5">
            <div class="col-lg-10 offset-lg-1">
                <div class="advance-tab-button">
                    <ul class="nav nav-tabs tab-button-style-2" id="myTab-4" role="tablist">
                        <li role="presentation">
                            <a href="#" class="tab-button active" id="home-tab-4" data-bs-toggle="tab"
                               data-bs-target="#home-4" role="tab" aria-controls="home-4" aria-selected="false">
                                <span class="title">APERÇU</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="tab-button" id="profile-tab-4" data-bs-toggle="tab"
                               data-bs-target="#profile-4" role="tab" aria-controls="profile-4"
                               aria-selected="true">
                                <span class="title">DÉTAILS</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10 offset-lg-1">
                <div class="tab-content advance-tab-content-style-3">
                    <div class="tab-pane fade active show w-100" id="home-4" role="tabpanel"
                         aria-labelledby="home-tab-4">
                        <div class="content w-100">
                            <!-- Aperçu contenu ici -->
                            @include('components.apercu')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-4" role="tabpanel"
                         aria-labelledby="profile-tab-4">
                        <div class="content w-100">
                            <!-- Détails contenu ici -->
                            @include('components.details')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs -->


    <!-- End CallTo Action Area  -->
    <div class="rbt-course-details-area ptb--20">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="course-details-content">
                        <!--                        <div class="rbt-course-feature-box rbt-border-with-box thuumbnail">-->
                        <!--                            <img class="w-100" src="{{ asset('/uploads/Test/'.$image) }}" alt="Card image">-->
                        <!--                        </div>-->
                        <div class="col-lg-10 offset-lg-1">
                            <div class="advance-tab-button">
                                <ul class="nav nav-tabs tab-button-style-2" id="myTab-4" role="tablist">
                                    <li role="presentation">
                                        <a href="#" class="tab-button active" id="apercu-tab" data-bs-toggle="tab"
                                           data-bs-target="#test-content" role="tab" aria-controls="test-content"
                                           aria-selected="true">
                                            <span class="title">{{$title}}</span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#" class="tab-button" id="details-tab" data-bs-toggle="tab"
                                           data-bs-target="#horaire" role="tab" aria-controls="horaire"
                                           aria-selected="false">
                                            <span class="title">Horaire</span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#" class="tab-button" id="cours-inclue-tab" data-bs-toggle="tab"
                                           data-bs-target="#cours-inclue" role="tab" aria-controls="cours-inclue"
                                           aria-selected="false">
                                            <span class="title">Cours inclue</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- srart tag Area -->

                        <div class="col-lg-10 offset-lg-1">

                            <div class="tab-content advance-tab-content-style-3">
                                <div class="tab-pane fade active show align-items-center" id="test-content" role="tabpanel"
                                     aria-labelledby="apercu-tab">

                                    <div class="py-2">
                                        <div class="card h-100 text-white">
                                            <div class="card-body rbt-course-feature-inner p-3">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="icon-container d-flex justify-content-center align-items-center" style="width: 40px; height: 40px; border-radius: 50%; background-color: #f64d4d;">
                                                        <img src="http://127.0.0.1:8000/assets/images/icons/book-alt.png" style="width: 24px; height: 24px; object-fit: cover;" alt="elite" class="icon">
                                                    </div>
                                                    <h6 class="card-title">Detail sur {{ $title }} ?</h6>
                                                </div>

                                                <div class="row g-5 mb--30 my-1">

                                                    @php
                                                    $featuresArray = json_decode($features, true);
                                                    $totalItems = count($featuresArray);
                                                    // $totalItems = 6; // Total number of items
                                                    $i = 0;
                                                    @endphp

                                                    @foreach ($featuresArray as $feature)
                                                    @if ($i % 3 === 0)
                                                    <div class="">
                                                        <ul class="rbt-list-style-1">
                                                            @endif

                                                            <li><i class="feather-check"></i>{{ $feature }}</li>

                                                            @php $i++; @endphp

                                                            @if ($i % 3 === 0 || $loop->last)
                                                        </ul>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="tab-pane fade" id="horaire" role="tabpanel" aria-labelledby="details-tab">
                                    <div class="content w-100">
                                        <!-- Start Horaire Box  -->
                                        <div class="rbt-course-feature-box rbt-shadow-box details-wrapper mt--30"
                                             id="Horaire">
                                            <div class="row g-5">
                                                <!-- Start Feture Box  -->
                                                <div class="col-lg-6">
                                                    <div class="section-title">
                                                        <h4 class="rbt-title-style-3 mb--20">Ces cours sont disponibles
                                                            :</h4>
                                                    </div>
                                                    <ul class="rbt-list-style-1">
                                                        <li><i class="feather-calendar"></i><span>Le matin de</span>
                                                            <strong
                                                                class="text-primary"> &nbsp; 9h00 </strong> &nbsp; à
                                                            <strong
                                                                class="text-primary"> &nbsp; 12h00</strong></li>
                                                        <li><i class="feather-calendar"></i><span>L’après-midi de</span>
                                                            &nbsp;<strong
                                                                class="text-primary"> </strong> à <strong
                                                                class="text-primary"> &nbsp;18h00</strong>
                                                        </li>
                                                        <li><i class="feather-calendar"></i><span>Le soir de</span>
                                                            <strong
                                                                class="text-primary"> &nbsp;19h00 </strong> &nbsp; à
                                                            <strong
                                                                class="text-primary"> &nbsp; 22h00</strong></li>
                                                    </ul>
                                                </div>
                                                <!-- End Feture Box  -->
                                            </div>
                                        </div>
                                        <!-- END Horaire Box  -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="cours-inclue" role="tabpanel"
                                     aria-labelledby="cours-inclue-tab">
                                    <div class="content w-100">
                                        <!-- Start Edu Review List  -->
                                        <div class="rbt-review-wrapper rbt-border-with-box review-wrapper mt--30"
                                             id="Avis">
                                            <div class="course-content">
                                                <div class="section-title">
                                                    <h4 class="rbt-title-style-3">Cours Inclue</h4>
                                                </div>
                                                @if($course)
                                                    <div class="row g-5 align-items-center">
                                                        <div class="col-6">
                                                            <div class="rbt-card variation-01 rbt-hover">
                                                                <div class="rbt-card-img">
                                                                    <a href="{{url('/Language/Course/'.$course->level)}}">
                                                                        <img
                                                                            src="{{ asset('assets/images/course/'. $course->image) }}"
                                                                            alt="Card image">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="rbt-card variation-01 rbt-hover">
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
                                                                            <span class="rating-count">4.9</span>
                                                                        </div>

                                                                    </div>

                                                                    <h4 class="rbt-card-title"><a
                                                                            href="{{url('/Language/Course/'.$course->level)}}">{{ $course->level }}
                                                                        </a>
                                                                    </h4>


                                                                    <p class="rbt-card-text">{{ $course->overview }}</p>

                                                                    <div class="rbt-card-bottom">
                                                                        <div class="rbt-price">
                                                                            <span class="current-price">{{ $course->price }} MAD</span>
                                                                            <span
                                                                                class="off-price">{{ $course->price * 1.4 }} MAD</span>
                                                                        </div>
                                                                        <a class="rbt-btn-link"
                                                                           href="{{url('/Language/Course/'.$course->level)}}">En
                                                                            Savoir
                                                                            plus
                                                                            <i class="feather-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <p>Aucun cours inclue pour le moment</p>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- End Edu Review List  -->
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>



        <!-- End inscrir Action Bottom  -->
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- Start Footer aera -->
        <!-- End Footer aera -->
        <div class="rbt-progress-parent">
            <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            </svg>
        </div>
    </div>

</div>
