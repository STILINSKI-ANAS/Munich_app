<div class="daf">
    <!-- Start breadcrumb Area -->
    <!--    <div class="rbt-breadcrumb-default rbt-breadcrumb-style-3">-->
    <!--        <div class="breadcrumb-inner">-->
    <!--            <img src="{{ asset('assets/images/bg/bg-image-10.jpg') }}" alt="Education Images">-->
    <!--        </div>-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="col-lg-8">-->
    <!--                    <div class="content">-->
    <!--                        <div class="content text-start">-->
    <!--                            <ul class="page-list">-->
    <!--                                <li class="rbt-breadcrumb-item"><a href="index.html">Langue {{ $langue }}-->
    <!--                                    </a></li>-->
    <!--                                <li>-->
    <!--                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>-->
    <!--                                </li>-->
    <!--                                <li class="rbt-breadcrumb-item active">{{ $title }}-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                            <h2 class="title">{{ $title }}-->
    <!--                            </h2>-->
    <!--                            <p class="description">{{ $description }}-->
    <!--                            </p>-->
    <!---->
    <!--                            <div class="d-flex align-items-center mb--20 flex-wrap rbt-course-details-feature">-->
    <!---->
    <!--                                <div class="feature-sin best-seller-badge">-->
    <!--                                    <span class="rbt-badge-2">-->
    <!--                                            <span class="image"><img src="{{ asset('assets/images/logo/logo-c.png') }}"-->
    <!--                                                                     alt="Best Seller Icon"></span>meilleur choix</span>-->
    <!--                                </div>-->
    <!---->
    <!--                                <div class="feature-sin rating">-->
    <!--                                    <a href="#">4.8</a>-->
    <!--                                    <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                                    <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                                    <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                                    <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                                    <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                                </div>-->
    <!---->
    <!--                                <div class="feature-sin total-rating">-->
    <!--                                    <a class="rbt-badge-4" href="#">3,475 Avis</a>-->
    <!--                                </div>-->
    <!---->
    <!--                                <div class="feature-sin total-student">-->
    <!--                                    <span>8,029 Etudiant</span>-->
    <!--                                </div>-->
    <!---->
    <!--                            </div>-->
    <!---->
    <!---->
    <!--                            <ul class="rbt-meta">-->
    <!--                                <li><i class="feather-calendar"></i>Dernière mise à jour</li>-->
    <!--                                <li><i class="feather-globe"></i>{{ $langue }}</li>-->
    <!--                                <li><i class="feather-award"></i>Examen certifié</li>-->
    <!--                            </ul>-->
    <!---->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!-- End Breadcrumb Area -->

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
                                                <img src="{{ asset('assets/images/logo/logo-c.png') }}"
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
    <div class="rbt-advance-tab-area bg-gradient-2 pt--20">
        <div class="row g-5">
            <div class="col-lg-10 offset-lg-1">
                <div class="advance-tab-button">
                    <ul class="nav nav-tabs tab-button-style-2" id="myTab-4" role="tablist">
                        <li role="presentation">
                            <a href="#niveau-a1" class="tab-button active" data-bs-toggle="tab" role="tab"
                               aria-selected="true">
                                <span class="title">Niveau A1</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#niveau-a2" class="tab-button" data-bs-toggle="tab" role="tab"
                               aria-selected="true">
                                <span class="title">A2 (En Anglais)</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#niveau-b1" class="tab-button" data-bs-toggle="tab" role="tab"
                               aria-selected="true">
                                <span class="title">Catégorie B1</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#niveau-b2" class="tab-button" data-bs-toggle="tab" role="tab"
                               aria-selected="true">
                                <span class="title">Réf B2</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#niveau-c1" class="tab-button" data-bs-toggle="tab" role="tab"
                               aria-selected="true">
                                <span class="title">C1 Haute école spécialisée</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10 offset-lg-1">
                <div class="tab-content advance-tab-content-style-3">
                    <div class="tab-pane fade active show w-100" id="niveau-a1" role="tabpanel"
                         aria-labelledby="niveau-a1">
                        <div class="content w-100">
                            <!-- Aperçu contenu ici -->
                            @include('components.tabs.niveau-a1-tab')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="niveau-a2" role="tabpanel"
                         aria-labelledby="niveau-a2">
                        <div class="content w-100">
                            <!-- Détails contenu ici -->
                            @include('components.tabs.niveau-a2-tab')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="niveau-b1" role="tabpanel"
                         aria-labelledby="niveau-b1">
                        <div class="content w-100">
                            <!-- Détails contenu ici -->
                            @include('components.tabs.niveau-b1-tab')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="niveau-b2" role="tabpanel"
                         aria-labelledby="niveau-b2">
                        <div class="content w-100">
                            <!-- Détails contenu ici -->
                            @include('components.tabs.niveau-b2-tab')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="niveau-c1" role="tabpanel"
                         aria-labelledby="niveau-c1">
                        <div class="content w-100">
                            <!-- Détails contenu ici -->
                            @include('components.tabs.niveau-c1-tab')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End CallTo Action Area  -->
    <div class="rbt-course-details-area ptb--60">
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
                                <div class="tab-pane fade active show" id="test-content" role="tabpanel"
                                     aria-labelledby="apercu-tab">
                                    <div class="content w-100">
                                        <!-- Start DAF Feature Box  -->
                                        <div
                                            class="rbt-course-feature-box overview-wrapper rbt-border-with-box mt--30 has-show-more"
                                            id="Objectifs">
                                            <div class="rbt-course-feature-inner has-show-more-inner-content">
                                                <div class="section-title">
                                                    <h4 class="rbt-title-style-3">Qu'est-ce que le test {{ $title }} ?
                                                    </h4>
                                                </div>
                                                <p>{{ $content }}
                                                <p>

                                                <div class="row g-5 mb--30">

                                                    @php
                                                        $featuresArray = json_decode($features, true);
                                                        $totalItems = count($featuresArray);
                                                       // $totalItems = 6; // Total number of items
                                                        $i = 0;
                                                    @endphp

                                                    @foreach ($featuresArray as $feature)
                                                        @if ($i % 3 === 0)
                                                            <div class="col-lg-6">
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
                                            <div class="rbt-show-more-btn">Afficher plus</div>
                                        </div>
                                        <!-- End DAF Feature Box  -->
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

                        <div class="about-author-list rbt-border-with-box featured-wrapper mt--30 has-show-more">
                            <div class="section-title">
                                <h4 class="rbt-title-style-3">Featured review</h4>
                            </div>
                            <div class="has-show-more-inner-content rbt-featured-review-list-wrapper">
                                <div class="rbt-course-review about-author">
                                    <div class="media">
                                        <div class="thumbnail">
                                            <a href="#">
                                                <img src="assets/images/testimonial/testimonial-3.jpg"
                                                     alt="Author Images">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="author-info">
                                                <h5 class="title">
                                                    <a class="hover-flip-item-wrapper" href="#">
                                                        Farjana Bawnia
                                                    </a>
                                                </h5>
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p class="description">At 29 years old, my favorite compliment is being
                                                    told that I look like my mom. Seeing myself in her image, like this
                                                    daughter up top.</p>
                                                <ul class="social-icon social-default transparent-with-border justify-content-start">
                                                    <li>
                                                        <a href="#">
                                                            <i class="feather-thumbs-up"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="feather-thumbs-down"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rbt-course-review about-author">
                                    <div class="media">
                                        <div class="thumbnail">
                                            <a href="#">
                                                <img src="assets/images/testimonial/testimonial-4.jpg"
                                                     alt="Author Images">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="author-info">
                                                <h5 class="title">
                                                    <a class="hover-flip-item-wrapper" href="#">Razwan Islam</a>
                                                </h5>
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p class="description">My favorite compliment is being told that I look
                                                    like my mom. Seeing myself in her image, like this daughter up
                                                    top.</p>
                                                <ul class="social-icon social-default transparent-with-border justify-content-start">
                                                    <li>
                                                        <a href="#">
                                                            <i class="feather-thumbs-up"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="feather-thumbs-down"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rbt-course-review about-author">
                                    <div class="media">
                                        <div class="thumbnail">
                                            <a href="#">
                                                <img src="assets/images/testimonial/testimonial-1.jpg"
                                                     alt="Author Images">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="author-info">
                                                <h5 class="title">
                                                    <a class="hover-flip-item-wrapper" href="#">Babor Azom</a>
                                                </h5>
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p class="description">My favorite compliment is being told that I look
                                                    like my mom. Seeing myself in her image, like this daughter up
                                                    top.</p>
                                                <ul class="social-icon social-default transparent-with-border justify-content-start">
                                                    <li>
                                                        <a href="#">
                                                            <i class="feather-thumbs-up"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="feather-thumbs-down"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rbt-course-review about-author">
                                    <div class="media">
                                        <div class="thumbnail">
                                            <a href="#">
                                                <img src="assets/images/testimonial/testimonial-6.jpg"
                                                     alt="Author Images">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="author-info">
                                                <h5 class="title">
                                                    <a class="hover-flip-item-wrapper" href="#">Mohammad Ali</a>
                                                </h5>
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p class="description">My favorite compliment is being told that I look
                                                    like my mom. Seeing myself in her image, like this daughter up
                                                    top.</p>
                                                <ul class="social-icon social-default transparent-with-border justify-content-start">
                                                    <li>
                                                        <a href="#">
                                                            <i class="feather-thumbs-up"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="feather-thumbs-down"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rbt-course-review about-author">
                                    <div class="media">
                                        <div class="thumbnail">
                                            <a href="#">
                                                <img src="assets/images/testimonial/testimonial-8.jpg"
                                                     alt="Author Images">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="author-info">
                                                <h5 class="title">
                                                    <a class="hover-flip-item-wrapper" href="#">Sakib Al Hasan</a>
                                                </h5>
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p class="description">My favorite compliment is being told that I look
                                                    like my mom. Seeing myself in her image, like this daughter up
                                                    top.</p>
                                                <ul class="social-icon social-default transparent-with-border justify-content-start">
                                                    <li>
                                                        <a href="#">
                                                            <i class="feather-thumbs-up"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="feather-thumbs-down"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rbt-show-more-btn">voir plus</div>
                        </div>


                    </div>
                    <!-- start tEST Box  -->
                    <div class="related-course mt--60">
                        <div class="row g-5 align-items-end mb--40">
                            <div class="col-lg-8 col-md-8 col-12">
                                <div class="section-title">
                                    <span class="subtitle bg-primary-opacity">Test</span>
                                </div>
                            </div>

                        </div>
                        <div class="row g-5">
                            <!-- Start Single Card  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                 data-sal-duration="800">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="course-details.html">
                                            <img src="{{ asset('assets/images/course/'. $image) }}" alt="Card image">
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
                                                <span class="rating-count"> (15 Avis)</span>
                                            </div>

                                        </div>

                                        <h4 class="rbt-card-title"><a href="course-details.html">Test DSH
                                            </a>
                                        </h4>


                                        <p class="rbt-card-text">Le test DSH (Deutsche Sprachprüfung für den
                                            Hochschulzugang) est un examen de...</p>

                                        <div class="rbt-card-bottom">
                                            <div class="rbt-price">
                                                <span class="current-price">{{ $price }} MAD</span>
                                                <span class="off-price">{{ $price * 1.4 }} MAD</span>
                                            </div>
                                            <a class="rbt-btn-link" href="course-details.html">En Savoir plus <i
                                                    class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Card  -->

                            <!-- Start Single Card  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                 data-sal-duration="800">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="course-details.html">
                                            <img src="assets/images/course/DSH.jpg" alt="Card image">

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
                                                <span class="rating-count"> (15 Avis)</span>
                                            </div>

                                        </div>

                                        <h4 class="rbt-card-title"><a href="course-details.html">Test WiDaF
                                            </a>
                                        </h4>


                                        <p class="rbt-card-text">Le WiDaF (Deutsch als Fremdsprache in der Wirtschaft)
                                            est un diplôme d’allemand qui...</p>

                                        <div class="rbt-card-bottom">
                                            <div class="rbt-price">
                                                <span class="current-price">$60</span>
                                                <span class="off-price">$120</span>
                                            </div>
                                            <a class="rbt-btn-link" href="course-details.html">En Savoir plus <i
                                                    class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end tEST Box  -->
                </div>

                <!--                <div class="col-lg-4">-->
                <!--                    <div class="course-sidebar sticky-top rbt-border-with-box course-sidebar-top rbt-gradient-border"-->
                <!--                         style="top: 80px">-->
                <!--                        <div class="inner">-->
                <!---->
                <!--                             Start Formulaire Wrapper  -->-->
                <!--                            <div class="content-item-content">-->
                <!--                                {{--                                    <div class="rbt-price-wrapper d-flex flex-wrap align-items-center justify-content-between">--}}-->
                <!--                                {{--                                        <div class="rbt-price">--}}-->
                <!--                                {{--                                            <span class="current-price">{{ $price }} MAD</span>--}}-->
                <!--                                {{--                                            <span class="off-price">{{ $price * 1.4 }} MAD</span>--}}-->
                <!--                                {{--                                        </div>--}}-->
                <!--                                {{--                                    </div>--}}-->
                <!---->
                <!--                                {{--                                    <div class="rbt-widget-details ">--}}-->
                <!--                                {{--                                        <ul class=" rbt-course-details-list-wrapper">--}}-->
                <!--                                {{--                                            <div class="row">--}}-->
                <!--                                {{--                                                <div class="col-6">--}}-->
                <!--                                {{--                                                    <li><input type="text" name="nom" placeholder="Nom" required></li>--}}-->
                <!--                                {{--                                                    <li><input type="text" name="prenom" placeholder="Prénom" required></li>--}}-->
                <!--                                {{--                                                    <li><input type="text" name="sexe" placeholder="Sexe" required></li>--}}-->
                <!--                                {{--                                                    <li><input type="date" name="dateNaissance" placeholder="Date de naissance" required></li>--}}-->
                <!--                                {{--                                                </div>--}}-->
                <!--                                {{--                                                <div class="col-6">--}}-->
                <!--                                {{--                                                    <li><input type="tel" name="tel" placeholder="Numéro de téléphone" required></li>--}}-->
                <!--                                {{--                                                    <li><input type="text" name="email" placeholder="Adresse e-mail" required></li>--}}-->
                <!--                                {{--                                                    <li><input type="text" name="placeOfBirth" placeholder="Lieu de naissance" required></li>--}}-->
                <!--                                {{--                                                    <li><input type="text" name="countryOfBirth" placeholder="Pays de naissance" required></li>--}}-->
                <!--                                {{--                                                </div>--}}-->
                <!--                                {{--                                            </div>--}}-->
                <!--                                {{--                                            <li><input type="text" name="cin" placeholder="Numéro de passeport ou CIN" required></li>--}}-->
                <!--                                {{--                                            <li><input type="text" name="addresse" placeholder="Adresse actuelle" required></li>--}}-->
                <!--                                {{--                                        </ul>--}}-->
                <!--                                {{--                                        <input type="hidden" id="testId" name="testId" value="{{$testId}}">--}}-->
                <!--                                {{--                                        <div class="add-to-card-button">--}}-->
                <!--                                {{--                                            <button class="rbt-btn btn-gradient icon-hover w-100 d-block text-center" type="submit">--}}-->
                <!--                                {{--                                                <span class="btn-text">S'inscrire</span>--}}-->
                <!--                                {{--                                            </button>--}}-->
                <!--                                {{--                                        </div>--}}-->
                <!---->
                <!--                                {{--                                    </div>--}}-->
                <!--                                @if(auth()->check())-->
                <!--                                    <form method="POST" action="{{ url('/EtudiantTest')}}"-->
                <!--                                          enctype="multipart/form-data">-->
                <!--                                        @csrf-->
                <!---->
                <!--                                        @if(($totalEtudiantsInscrits < $maxPlacements) || ($maxPlacements == null))-->
                <!--                                            <div-->
                <!--                                                class="rbt-price-wrapper d-flex flex-wrap align-items-center justify-content-between">-->
                <!--                                                <div class="rbt-price">-->
                <!--                                                    <span class="current-price">{{ $price }} MAD</span>-->
                <!--                                                    <span class="off-price">{{ $price * 1.4 }} MAD</span>-->
                <!--                                                </div>-->
                <!--                                            </div>-->
                <!--                                            <div>-->
                <!--                                                <labela>nom</labela>-->
                <!--                                                <input type="text" name="nom" placeholder="question supplémentaire 1"-->
                <!--                                                       required>-->
                <!--                                            </div>-->
                <!---->
                <!--                                            <div>-->
                <!--                                                <labela>prenom</labela>-->
                <!--                                                <input type="text" name="prenom" placeholder="question supplémentaire 1"-->
                <!--                                                       required>-->
                <!--                                            </div>-->
                <!---->
                <!--                                            <div>-->
                <!--                                                <labela>supp1</labela>-->
                <!--                                                <input type="text" name="supp1" placeholder="question supplémentaire 1"-->
                <!--                                                       required>-->
                <!--                                            </div>-->
                <!---->
                <!--                                            <input type="text" name="testId" required value="{{$testId}}" hidden>-->
                <!--                                            <button-->
                <!--                                                class="rbt-btn btn-gradient icon-hover w-100 d-block text-center mt--15"-->
                <!--                                                type="submit">-->
                <!--                                                <span class="btn-text">S'inscrire</span>-->
                <!--                                            </button>-->
                <!--                                        @else-->
                <!--                                            <div class="alert alert-danger" role="alert">-->
                <!--                                                L'examen a atteint le maximum de places disponibles !-->
                <!--                                            </div>-->
                <!--                                        @endif-->
                <!--                                    </form>-->
                <!--                                @else-->
                <!--                                    {{--<div>logged out</div>--}}-->
                <!--                                    <div class="rbt-price">-->
                <!--                                        <span class="current-price">Crer un compte pour s'inscrire</span>-->
                <!--                                    </div>-->
                <!--                                    <a class="rbt-btn btn-gradient icon-hover w-100 d-block text-center"-->
                <!--                                       href="{{ url('/register') }}">-->
                <!--                                        Cree compte-->
                <!--                                    </a>-->
                <!--                                    <a class="icon-hover" href="{{ url('/login') }}">-->
                <!--                                        s'authentifier-->
                <!--                                    </a>-->
                <!--                                @endif-->
                <!--                            </div>-->
                <!---->
                <!---->
                <!--                             End Formulaire Wrapper  -->-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>
        </div>


        <!-- srart Test Area -->

        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>

        <div class="rbt-related-course-area bg-color-white pt--60 rbt-section-gapBottom">
            <div class="container">
                <div class="section-title mb--30">
                    <h4 class="title">Niveau</h4>
                </div>
                <div class="row g-5">

                    <!-- Start Single Card  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                         data-sal-duration="800">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="assets/images/course/A1.jpg" alt="Card image">

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
                                        <span class="rating-count"> (15 Avis)</span>
                                    </div>

                                </div>

                                <h4 class="rbt-card-title"><a href="course-details.html">Allemand A1
                                    </a>
                                </h4>


                                <p class="rbt-card-text">Au niveau A1 en allemand, je peux comprendre et utiliser des
                                    expressions simples de la vie quotidienne, comme saluer, me présenter et poser des
                                    questions basiques sur des sujets familiers..
                                </p>

                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price">$60</span>
                                        <span class="off-price">$120</span>
                                    </div>
                                    <a class="rbt-btn-link" href="course-details.html">En Savoir plus <i
                                            class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->


                    <!-- Start Single Card  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                         data-sal-duration="800">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="assets/images/course/B1.jpg" alt="Card image">

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
                                        <span class="rating-count"> (15 Avis)</span>
                                    </div>

                                </div>

                                <h4 class="rbt-card-title"><a href="course-details.html">Allemand B1
                                    </a>
                                </h4>


                                <p class="rbt-card-text">Au niveau B1 en allemand, je peux interagir dans des situations
                                    courantes, exprimer mes opinions et idées sur des sujets familiers.. </p>

                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price">$60</span>
                                        <span class="off-price">$120</span>
                                    </div>
                                    <a class="rbt-btn-link" href="course-details.html">En Savoir plus <i
                                            class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                    <!-- Start Single Card  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                         data-sal-duration="800">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="assets/images/course/B2.jpg" alt="Card image">

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
                                        <span class="rating-count"> (15 Avis)</span>
                                    </div>

                                </div>

                                <h4 class="rbt-card-title"><a href="course-details.html">Allemand B2
                                    </a>
                                </h4>


                                <p class="rbt-card-text">Au niveau B2 en allemand, je suis capable de communiquer de
                                    manière plus avancée et précise. Je peux exprimer mes idées clairement et argumenter
                                    sur des sujets variés...
                                </p>

                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price">$60</span>
                                        <span class="off-price">$120</span>
                                    </div>
                                    <a class="rbt-btn-link" href="course-details.html">En Savoir plus <i
                                            class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                    <!-- Start Single Card  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                         data-sal-duration="800">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="assets/images/course/C1.jpg" alt="Card image">

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
                                        <span class="rating-count"> (15 Avis)</span>
                                    </div>

                                </div>

                                <h4 class="rbt-card-title"><a href="course-details.html">Allemand C1
                                    </a>
                                </h4>


                                <p class="rbt-card-text">Au niveau C1 en allemand, je maîtrise la langue de manière
                                    avancée et je peux communiquer avec aisance et spontanéité dans des situations
                                    variées. ... </p>

                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price">$60</span>
                                        <span class="off-price">$120</span>
                                    </div>
                                    <a class="rbt-btn-link" href="course-details.html">En Savoir plus <i
                                            class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                </div>
            </div>
        </div>
        <!-- end niveau Area -->

        <!-- Start inscrir Action Bottom  -->
        <div class="rbt-course-action-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="section-title text-center text-md-start">
                            <h5 class="title mb--0">Saisissez votre chance et inscrivez-vous à l'Institut Munich!</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt_sm--15">
                        <div class="course-action-bottom-right rbt-single-group">
                            <div class="rbt-single-list rbt-price large-size justify-content-center">
                                <span class="current-price color-primary">$750.00</span>
                                <span class="off-price">$1500.00</span>
                            </div>
                            <div class="rbt-single-list action-btn">
                                <a class="rbt-btn btn-gradient hover-icon-reverse btn-md" href="#">
                                    <span class="icon-reverse-wrapper">
                                <span class="btn-text">Inscrivez-vous</span>
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
        <!-- End inscrir Action Bottom  -->
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- Start Footer aera -->
        <footer class="rbt-footer footer-style-1 bg-color-white overflow-hidden">
            <div class="footer-top">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="assets/images/logo/logo.png" alt="Edu-cause">
                                    </a>
                                </div>

                                <p class="description mt--20">We’re always in search for talented and motivated people.
                                    Don’t be shy introduce yourself!
                                </p>

                                <ul class="social-icon social-default justify-content-start">
                                    <li>
                                        <a href="https://www.facebook.com/">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkdin.com/">
                                            <i class="feather-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="contact-btn mt--30">
                                    <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round" href="#">
                                        <div class="icon-reverse-wrapper">
                                            <span class="btn-text">Contact With Us</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                                <h5 class="ft-title">Useful Links</h5>
                                <ul class="ft-link">
                                    <li>
                                        <a href="12-marketplace.html">Marketplace</a>
                                    </li>
                                    <li>
                                        <a href="04-kindergarten.html">kindergarten</a>
                                    </li>
                                    <li>
                                        <a href="13-university-classic.html">University</a>
                                    </li>
                                    <li>
                                        <a href="09-gym-coaching.html">GYM Coaching</a>
                                    </li>
                                    <li>
                                        <a href="faqs.html">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="about-us-01.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="privacy-policy.html">Privacy policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                                <h5 class="ft-title">Our Company</h5>
                                <ul class="ft-link">
                                    <li>
                                        <a href="contact.html">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="become-a-teacher.html">Become Teacher</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="instructor.html">Instructor</a>
                                    </li>
                                    <li>
                                        <a href="event-list.html">Events</a>
                                    </li>
                                    <li>
                                        <a href="course-filter-one-toggle.html">Course</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                                <h5 class="ft-title">Get Contact</h5>
                                <ul class="ft-link">
                                    <li><span>Phone:</span> <a href="#">(406) 555-0120</a></li>
                                    <li><span>E-mail:</span> <a href="mailto:hr@example.com">admin@example.com</a></li>
                                </ul>

                                <form class="newsletter-form mt--20" action="#">
                                    <h6 class="w-600">Newsletter</h6>
                                    <p class="description">2000+ Our students are subscribe Around the World.<br> Don’t
                                        be shy introduce yourself!</p>

                                    <div class="form-group right-icon icon-email mb--20">
                                        <label for="email">Enter Your Email Here</label>
                                        <input id="email" type="email">
                                    </div>

                                    <div class="form-group mb--0">
                                        <button class="rbt-btn rbt-switch-btn btn-gradient radius-round btn-sm"
                                                type="submit">
                                            <span data-text="Submit Now">Submit Now</span>
                                        </button>
                                    </div>
                                </form>
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
            <!-- Start Copyright Area  -->
            <div class="copyright-area copyright-style-1 ptb--20">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                            <p class="rbt-link-hover text-center text-lg-start">Copyright © 2023 <a
                                    href="https://themeforest.net/user/rbt-themes">Rainbow-Themes.</a> All Rights
                                Reserved</p>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                            <ul class="copyright-link rbt-link-hover justify-content-center justify-content-lg-end mt_sm--10 mt_md--10">
                                <li><a href="#">Terms of service</a></li>
                                <li><a href="privacy-policy.html">Privacy policy</a></li>
                                <li><a href="subscription.html">Subscription</a></li>
                                <li><a href="login.html">Login & Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area  -->
        </footer>
        <!-- End Footer aera -->
        <div class="rbt-progress-parent">
            <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            </svg>
        </div>
    </div>

</div>
