<div class="niveau-b2">
    <!-- Start breadcrumb Area -->
    <div class="slider-area rbt-banner-5 height-550 bg_image"
         style="background-image: url({{ asset('/uploads/course/'.$image) }});" data-gradient-overlay="7">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="content">
                        <div class="content text-start">
                            <ul class="page-list">
                                <li class="rbt-breadcrumb-item color-white"><a class="color-white" href="index.html">
                                        {{ $language }}
                                    </a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right color-white"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active color-white">
                                    {{ $level }}
                                </li>
                            </ul>
                            <h2 class="title color-white"> {{ $level }}</h2>
                            <p class="description color-white">
                                {{ $overview }}
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
                                <li class="color-white"><i class="feather-globe color-white"></i>{{ $language }}</li>
                                <li class="color-white"><i class="feather-award color-white"></i>Cour certifié</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- New register form ui -->
    <div class="rbt-call-to-action-area p-5 bg-gradient-8">
        <div class="rbt-callto-action rbt-cta-default style-6">
            <div class="container">
                <div class="row g-5 align-items-center content-wrapper">
                    @if(auth()->check())
                        <form method="POST" action="{{ url('/EtudiantCourse')}}" enctype="multipart/form-data">
                            @csrf

                            @if(($totalEtudiantsInscrits < $maxPlacements) || ($maxPlacements == null))
                                <div class="col-xxl-12 col-xl-12 col-lg-12 text-center">
                                    <div
                                        class="rbt-price-wrapper d-flex flex-wrap align-items-center justify-content-around">
                                        <div class="rbt-price">
                                            <span class="current-price text-white" style="font-size: 32px">{{ $price }} MAD</span>
                                            <span class="off-price text-white">{{ $price * 1.4 }} MAD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="form-group">
                                                <input class="text-white" name="nom" id="nom" type="text" required>
                                                <label class="text-white">Nom de famille</label>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="form-group">
                                                <input class="text-white" name="prenom" id="prenom" type="text"
                                                       required>
                                                <label class="text-white">Prénom</label>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="form-group">
                                                <input class="text-white" name="sexe" id="sexe" type="text" required>
                                                <label class="text-white">Sexe</label>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="form-group">
                                                <input class="text-white" name="dateNaissance" id="dateNaissance"
                                                       type="date" required>
                                                <label class="text-white">Date de naissance</label>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="form-group">
                                                <input class="text-white" name="tel" id="tel" type="tel" required>
                                                <label class="text-white">Téléphone</label>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="form-group">
                                                <input class="text-white" name="email" id="email" type="email" required>
                                                <label class="text-white">Email</label>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="form-group">
                                                <input class="text-white" name="placeOfBirth" id="placeOfBirth"
                                                       type="text" required>
                                                <label class="text-white">Lieu de naissance</label>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="form-group">
                                                <input class="text-white" name="countryOfBirth" id="countryOfBirth"
                                                       type="text" required>
                                                <label class="text-white">Pays de naissance</label>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="form-group">
                                                <input class="text-white" name="cin" id="cin" type="text" required>
                                                <label class="text-white">CIN ou Passport</label>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="form-group">
                                                <input class="text-white" name="addresse" id="addresse" type="text"
                                                       required>
                                                <label class="text-white">Adresse</label>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <input type="text" name="courseId" required value="{{$courseId}}" hidden>
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

    <div class="rbt-course-details-area ptb--60">
        <div class="container">
            <div class="row g-5">
                <div class="col-12">
                    <div class="course-details-content">
                        {{--                        <div class="rbt-course-feature-box rbt-border-with-box thuumbnail">--}}
                        {{--                            <img class="w-100" src="{{ asset('assets/images/course/'.$image) }}" alt="Course Images">--}}
                        {{--                        </div>--}}
                        <!-- start tag Area -->

                        <div class="col-lg-10 offset-lg-1">
                            <div class="advance-tab-button">
                                <ul class="nav nav-tabs tab-button-style-2" id="myTab" role="tablist">
                                    <li role="presentation" class="current">
                                        <a href="#Objectifs" class="tab-button active" data-bs-toggle="tab" role="tab"
                                           aria-selected="true">
                                            Objectifs
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#Cours" class="tab-button" data-bs-toggle="tab" role="tab"
                                           aria-selected="false">
                                            Contenu
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#Horaire" class="tab-button" data-bs-toggle="tab" role="tab"
                                           aria-selected="false">
                                            Horaire
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#professeur" class="tab-button" data-bs-toggle="tab" role="tab"
                                           aria-selected="false">
                                            Professeur
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#why-learning" class="tab-button" data-bs-toggle="tab" role="tab"
                                           aria-selected="false">
                                            Pourquoi apprendre {{ $language }} ?
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-content advance-tab-content-style-3">
                            <!-- Start Objectifs Feature Box -->
                            <div class="tab-pane fade active show" id="Objectifs" role="tabpanel">
                                <!-- Objectifs Content Goes Here -->
                                <div
                                    class="rbt-course-feature-box overview-wrapper rbt-border-with-box mt--30 has-show-more"
                                    id="Objectifs">
                                    <div class="rbt-course-feature-inner has-show-more-inner-content">
                                        <div class="section-title">
                                            <h4 class="rbt-title-style-3">Quels que soient vos projets d’avenir ?
                                            </h4>
                                        </div>
                                        <p>Comprendre les textes longs et complexes, ainsi que les significations
                                            implicites.
                                            Pouvoir s’exprimer de façon courante, efficace et souple dans la vie de
                                            tous les
                                            jours comme dans la vie professionnelle. Reconnaître les
                                            expressions idiomatiques et les nuances de sens dans un texte ou une
                                            conversation.


                                        </p>

                                        <div class="row g-5 mb--30">
                                            <!-- Start Feture Box  -->
                                            <div class="col-lg-6">
                                                <ul class="rbt-list-style-1">
                                                    <li><i class="feather-check"></i>Compléments grammaticaux.</li>
                                                    <li><i class="feather-check"></i>Champs lexicaux inhérents à une
                                                        thématique.
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End Feture Box  -->

                                            <!-- Start Feture Box  -->
                                            <div class="col-lg-6">

                                                <ul class="rbt-list-style-1">
                                                    <li><i class="feather-check"></i>Expression orale adaptée à
                                                        toute situation.
                                                    </li>
                                                    <li><i class="feather-check"></i>Synthèse de documents</li>

                                                </ul>

                                            </div>
                                            <!-- End Feture Box  -->
                                            <p>Stagiaires ayant suivi le module 2 ou personnes ayant déjà une bonne
                                                maîtrise de
                                                la langue. Une évaluation initiale vous est proposée afin d’adapter
                                                le contenu
                                                du stage à vos besoins réels

                                            </p>
                                        </div>

                                    </div>
                                    <div class="rbt-show-more-btn">Afficher plus</div>
                                </div>
                            </div>
                            <!-- End Objectifs Feature Box -->

                            <!-- Start Course Content -->
                            <div class="tab-pane fade" id="Cours" role="tabpanel">
                                <!-- Course Content Goes Here -->
                                <div class="rbt-course-feature-box overview-wrapper rbt-border-with-box mt--30 has-show-more active"
                                     id="Cours">
                                    <div class="rbt-course-feature-inner has-show-more-inner-content">
                                        <div class="section-title">
                                                <h4 class="rbt-title-style-3">Nos Cours d'Allemand</h4>
                                        </div>
                                            {!! $content !!}
                                    </div>
                                </div>
                            </div>
                            <!-- End Course Content -->

                            <!-- Start Course Horaire -->
                            <div class="tab-pane fade" id="Horaire" role="tabpanel">
                                <!-- Course Horaire Goes Here -->
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
                                                <li><i class="feather-calendar"></i><span>Le matin de &nbsp; </span>
                                                    <strong
                                                        class="text-primary"> 9h00 </strong>&nbsp; à <strong
                                                        class="text-primary">&nbsp; 12h00</strong></li>
                                                <li>
                                                    <i class="feather-calendar"></i><span>L’après-midi de &nbsp;</span>
                                                    <strong
                                                        class="text-primary"> 15h00 </strong>&nbsp; à <strong
                                                        class="text-primary">&nbsp; 18h00</strong></li>
                                                <li><i class="feather-calendar"></i><span>Le soir de</span> <strong
                                                        class="text-primary">&nbsp; 19h00 </strong>&nbsp; à <strong
                                                        class="text-primary">&nbsp; 22h00</strong></li>
                                            </ul>
                                        </div>
                                        <!-- End Feture Box  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Course Horaire -->

                            <!-- Start professeur Area -->
                            <div class="tab-pane fade" id="professeur" role="tabpanel">
                                <!-- Professeur Content Goes Here -->
                                <div class="rbt-instructor rbt-border-with-box intructor-wrapper mt--30"
                                     id="professeur">
                                    <div class="about-author border-0 pb--0 pt--0">
                                        <div class="section-title mb--30">
                                            <h4 class="rbt-title-style-3">professeur</h4>
                                        </div>
                                        <div class="media align-items-center">
                                            <div class="thumbnail">
                                                <a href="#">
                                                    <img
                                                        src="{{ asset('assets/images/testimonial/testimonial-7.jpg') }}"
                                                        alt="Author Images">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="author-info">
                                                    <h5 class="title">
                                                        <a class="hover-flip-item-wrapper" href="author.html">B.M.
                                                            Rafekul
                                                            Islam</a>
                                                    </h5>
                                                    <span class="b3 subtitle">Professeur allemand</span>
                                                    <ul class="rbt-meta mb--20 mt--10">
                                                        <li><i class="fa fa-star color-warning"></i>75,237 Reviews
                                                            <span
                                                                class="rbt-badge-5 ml--5">4.9 Avis</span></li>
                                                        <li><i class="feather-users"></i>501 Students</li>
                                                    </ul>
                                                </div>
                                                <div class="content">
                                                    <p class="description">Les enseignants de langue inspirent les
                                                        étudiants à
                                                        trouver leur voix dans une nouvelle langue et à découvrir la
                                                        beauté de
                                                        l'échange culturel.</p>

                                                    <ul class="social-icon social-default icon-naked justify-content-start">
                                                        <li>
                                                            <a href="https://www.facebook.com/">
                                                                <i class="feather-facebook"></i>
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

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End professeur Area -->

                            <!-- Start Why Learning Area -->
                            <div class="tab-pane fade" id="why-learning" role="tabpanel">
                                <!-- Course Content Goes Here -->
                                <div class="course-content rbt-border-with-box coursecontent-wrapper mt--30"
                                     id="why-learning">
                                    <div class="rbt-course-feature-inner">
                                        <div class="section-title">
                                            <h4 class="rbt-title-style-3">Pourquoi devriez-vous
                                                apprendre {{ $language }} ? </h4>
                                        </div>
                                        <p>
                                            Avec plus de 30 ans d'expérience et d'excellence dans l'enseignement des
                                            langues, Go Academy! International House Düsseldorf est l'une des
                                            principales écoles de langues d'Europe depuis 1990. Nous sommes un centre de
                                            test et d'examen agréé pour les certificats de langue internationalement
                                            reconnus et les examens d'allemand tels que telc, TestDaF, TestAS, DMat et
                                            WiDaF.
                                        </p>
                                        <p>
                                            Munich! offre un large éventail de cours {{$language}}, tels que des
                                            cours intensifs d'allemand avec 4 ou 6 leçons par semaine, des cours
                                            d'allemand le soir, de l'allemand pour les professionnels de la santé, de
                                            l'allemand pour les soins infirmiers, des cours de préparation à l'admission
                                            à l'université en Allemagne, ainsi que des cours privés d'allemand, qui
                                            peuvent être adaptés individuellement aux besoins de l'étudiant.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Why Learning Area -->
                        </div>

                        <!-- Start Edu Review List  -->
                        {{--                        <div class="rbt-review-wrapper rbt-border-with-box review-wrapper mt--30" id="Avis">--}}
                        {{--                            <div class="course-content">--}}
                        {{--                                <div class="section-title">--}}
                        {{--                                    <h4 class="rbt-title-style-3">Avis</h4>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="row g-5 align-items-center">--}}
                        {{--                                    <div class="col-lg-3">--}}
                        {{--                                        <div class="rating-box">--}}
                        {{--                                            <div class="rating-number">5.0</div>--}}
                        {{--                                            <div class="rating">--}}
                        {{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                     fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                        {{--                                                    <path--}}
                        {{--                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                </svg>--}}
                        {{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                     fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                        {{--                                                    <path--}}
                        {{--                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                </svg>--}}
                        {{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                     fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                        {{--                                                    <path--}}
                        {{--                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                </svg>--}}
                        {{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                     fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                        {{--                                                    <path--}}
                        {{--                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                </svg>--}}
                        {{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                     fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                        {{--                                                    <path--}}
                        {{--                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                </svg>--}}
                        {{--                                            </div>--}}
                        {{--                                            <span class="sub-title">Cours Reviews</span>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="col-lg-9">--}}
                        {{--                                        <div class="review-wrapper">--}}
                        {{--                                            <div class="single-progress-bar">--}}
                        {{--                                                <div class="rating-text">--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star-fill"--}}
                        {{--                                                         viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star-fill"--}}
                        {{--                                                         viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star-fill"--}}
                        {{--                                                         viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star-fill"--}}
                        {{--                                                         viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star-fill"--}}
                        {{--                                                         viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                </div>--}}
                        {{--                                                <div class="progress">--}}
                        {{--                                                    <div class="progress-bar" role="progressbar" style="width: 63%"--}}
                        {{--                                                         aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--                                                </div>--}}
                        {{--                                                <span class="value-text">63%</span>--}}
                        {{--                                            </div>--}}

                        {{--                                            <div class="single-progress-bar">--}}
                        {{--                                                <div class="rating-text">--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star-fill"--}}
                        {{--                                                         viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star-fill"--}}
                        {{--                                                         viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star-fill"--}}
                        {{--                                                         viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star-fill"--}}
                        {{--                                                         viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                </div>--}}
                        {{--                                                <div class="progress">--}}
                        {{--                                                    <div class="progress-bar" role="progressbar" style="width: 29%"--}}
                        {{--                                                         aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--                                                </div>--}}
                        {{--                                                <span class="value-text">29%</span>--}}
                        {{--                                            </div>--}}

                        {{--                                            <div class="single-progress-bar">--}}
                        {{--                                                <div class="rating-text">--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star-fill"--}}
                        {{--                                                         viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star-fill"--}}
                        {{--                                                         viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star-fill"--}}
                        {{--                                                         viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                </div>--}}
                        {{--                                                <div class="progress">--}}
                        {{--                                                    <div class="progress-bar" role="progressbar" style="width: 6%"--}}
                        {{--                                                         aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--                                                </div>--}}
                        {{--                                                <span class="value-text">6%</span>--}}
                        {{--                                            </div>--}}

                        {{--                                            <div class="single-progress-bar">--}}
                        {{--                                                <div class="rating-text">--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star-fill"--}}
                        {{--                                                         viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star-fill"--}}
                        {{--                                                         viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                </div>--}}
                        {{--                                                <div class="progress">--}}
                        {{--                                                    <div class="progress-bar" role="progressbar" style="width: 1%"--}}
                        {{--                                                         aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--                                                </div>--}}
                        {{--                                                <span class="value-text">1%</span>--}}
                        {{--                                            </div>--}}

                        {{--                                            <div class="single-progress-bar">--}}
                        {{--                                                <div class="rating-text">--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star-fill"--}}
                        {{--                                                         viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                        {{--                                                         fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                        {{--                                                        <path--}}
                        {{--                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>--}}
                        {{--                                                    </svg>--}}
                        {{--                                                </div>--}}
                        {{--                                                <div class="progress">--}}
                        {{--                                                    <div class="progress-bar" role="progressbar" style="width: 1%"--}}
                        {{--                                                         aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--                                                </div>--}}
                        {{--                                                <span class="value-text">1%</span>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <!-- End Edu Review List  -->


                        {{--                        <div class="about-author-list rbt-border-with-box featured-wrapper mt--30 has-show-more">--}}
                        {{--                            <div class="section-title">--}}
                        {{--                                <h4 class="rbt-title-style-3">Featured review</h4>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="has-show-more-inner-content rbt-featured-review-list-wrapper">--}}
                        {{--                                <div class="rbt-course-review about-author">--}}
                        {{--                                    <div class="media">--}}
                        {{--                                        <div class="thumbnail">--}}
                        {{--                                            <a href="#">--}}
                        {{--                                                <img src="{{ asset('assets/images/testimonial/testimonial-3.jpg') }}"--}}
                        {{--                                                     alt="Author Images">--}}
                        {{--                                            </a>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="media-body">--}}
                        {{--                                            <div class="author-info">--}}
                        {{--                                                <h5 class="title">--}}
                        {{--                                                    <a class="hover-flip-item-wrapper" href="#">--}}
                        {{--                                                        Farjana Bawnia--}}
                        {{--                                                    </a>--}}
                        {{--                                                </h5>--}}
                        {{--                                                <div class="rating">--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="content">--}}
                        {{--                                                <p class="description">At 29 years old, my favorite compliment is being--}}
                        {{--                                                    told that I look like my mom. Seeing myself in her image, like this--}}
                        {{--                                                    daughter up top.</p>--}}
                        {{--                                                <ul class="social-icon social-default transparent-with-border justify-content-start">--}}
                        {{--                                                    <li>--}}
                        {{--                                                        <a href="#">--}}
                        {{--                                                            <i class="feather-thumbs-up"></i>--}}
                        {{--                                                        </a>--}}
                        {{--                                                    </li>--}}
                        {{--                                                    <li>--}}
                        {{--                                                        <a href="#">--}}
                        {{--                                                            <i class="feather-thumbs-down"></i>--}}
                        {{--                                                        </a>--}}
                        {{--                                                    </li>--}}
                        {{--                                                </ul>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="rbt-course-review about-author">--}}
                        {{--                                    <div class="media">--}}
                        {{--                                        <div class="thumbnail">--}}
                        {{--                                            <a href="#">--}}
                        {{--                                                <img src="{{ asset('assets/images/testimonial/testimonial-4.jpg') }}"--}}
                        {{--                                                     alt="Author Images">--}}
                        {{--                                            </a>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="media-body">--}}
                        {{--                                            <div class="author-info">--}}
                        {{--                                                <h5 class="title">--}}
                        {{--                                                    <a class="hover-flip-item-wrapper" href="#">Razwan Islam</a>--}}
                        {{--                                                </h5>--}}
                        {{--                                                <div class="rating">--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="content">--}}
                        {{--                                                <p class="description">My favorite compliment is being told that I look--}}
                        {{--                                                    like my mom. Seeing myself in her image, like this daughter up--}}
                        {{--                                                    top.</p>--}}
                        {{--                                                <ul class="social-icon social-default transparent-with-border justify-content-start">--}}
                        {{--                                                    <li>--}}
                        {{--                                                        <a href="#">--}}
                        {{--                                                            <i class="feather-thumbs-up"></i>--}}
                        {{--                                                        </a>--}}
                        {{--                                                    </li>--}}
                        {{--                                                    <li>--}}
                        {{--                                                        <a href="#">--}}
                        {{--                                                            <i class="feather-thumbs-down"></i>--}}
                        {{--                                                        </a>--}}
                        {{--                                                    </li>--}}
                        {{--                                                </ul>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="rbt-course-review about-author">--}}
                        {{--                                    <div class="media">--}}
                        {{--                                        <div class="thumbnail">--}}
                        {{--                                            <a href="#">--}}
                        {{--                                                <img src="{{ asset('assets/images/testimonial/testimonial-1.jpg') }}"--}}
                        {{--                                                     alt="Author Images">--}}
                        {{--                                            </a>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="media-body">--}}
                        {{--                                            <div class="author-info">--}}
                        {{--                                                <h5 class="title">--}}
                        {{--                                                    <a class="hover-flip-item-wrapper" href="#">Babor Azom</a>--}}
                        {{--                                                </h5>--}}
                        {{--                                                <div class="rating">--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="content">--}}
                        {{--                                                <p class="description">My favorite compliment is being told that I look--}}
                        {{--                                                    like my mom. Seeing myself in her image, like this daughter up--}}
                        {{--                                                    top.</p>--}}
                        {{--                                                <ul class="social-icon social-default transparent-with-border justify-content-start">--}}
                        {{--                                                    <li>--}}
                        {{--                                                        <a href="#">--}}
                        {{--                                                            <i class="feather-thumbs-up"></i>--}}
                        {{--                                                        </a>--}}
                        {{--                                                    </li>--}}
                        {{--                                                    <li>--}}
                        {{--                                                        <a href="#">--}}
                        {{--                                                            <i class="feather-thumbs-down"></i>--}}
                        {{--                                                        </a>--}}
                        {{--                                                    </li>--}}
                        {{--                                                </ul>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="rbt-course-review about-author">--}}
                        {{--                                    <div class="media">--}}
                        {{--                                        <div class="thumbnail">--}}
                        {{--                                            <a href="#">--}}
                        {{--                                                <img src="{{ asset('assets/images/testimonial/testimonial-6.jpg') }}"--}}
                        {{--                                                     alt="Author Images">--}}
                        {{--                                            </a>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="media-body">--}}
                        {{--                                            <div class="author-info">--}}
                        {{--                                                <h5 class="title">--}}
                        {{--                                                    <a class="hover-flip-item-wrapper" href="#">Mohammad Ali</a>--}}
                        {{--                                                </h5>--}}
                        {{--                                                <div class="rating">--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="content">--}}
                        {{--                                                <p class="description">My favorite compliment is being told that I look--}}
                        {{--                                                    like my mom. Seeing myself in her image, like this daughter up--}}
                        {{--                                                    top.</p>--}}
                        {{--                                                <ul class="social-icon social-default transparent-with-border justify-content-start">--}}
                        {{--                                                    <li>--}}
                        {{--                                                        <a href="#">--}}
                        {{--                                                            <i class="feather-thumbs-up"></i>--}}
                        {{--                                                        </a>--}}
                        {{--                                                    </li>--}}
                        {{--                                                    <li>--}}
                        {{--                                                        <a href="#">--}}
                        {{--                                                            <i class="feather-thumbs-down"></i>--}}
                        {{--                                                        </a>--}}
                        {{--                                                    </li>--}}
                        {{--                                                </ul>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="rbt-course-review about-author">--}}
                        {{--                                    <div class="media">--}}
                        {{--                                        <div class="thumbnail">--}}
                        {{--                                            <a href="#">--}}
                        {{--                                                <img src="{{ asset('assets/images/testimonial/testimonial-8.jpg') }}"--}}
                        {{--                                                     alt="Author Images">--}}
                        {{--                                            </a>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="media-body">--}}
                        {{--                                            <div class="author-info">--}}
                        {{--                                                <h5 class="title">--}}
                        {{--                                                    <a class="hover-flip-item-wrapper" href="#">Sakib Al Hasan</a>--}}
                        {{--                                                </h5>--}}
                        {{--                                                <div class="rating">--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                    <a href="#"><i class="fa fa-star"></i></a>--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="content">--}}
                        {{--                                                <p class="description">My favorite compliment is being told that I look--}}
                        {{--                                                    like my mom. Seeing myself in her image, like this daughter up--}}
                        {{--                                                    top.</p>--}}
                        {{--                                                <ul class="social-icon social-default transparent-with-border justify-content-start">--}}
                        {{--                                                    <li>--}}
                        {{--                                                        <a href="#">--}}
                        {{--                                                            <i class="feather-thumbs-up"></i>--}}
                        {{--                                                        </a>--}}
                        {{--                                                    </li>--}}
                        {{--                                                    <li>--}}
                        {{--                                                        <a href="#">--}}
                        {{--                                                            <i class="feather-thumbs-down"></i>--}}
                        {{--                                                        </a>--}}
                        {{--                                                    </li>--}}
                        {{--                                                </ul>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="rbt-show-more-btn">Show More</div>--}}
                        {{--                        </div>--}}


                    </div>
                    <!-- Start Niveau  -->

                    {{--                    <div class="related-course mt--60">--}}
                    {{--                        <div class="row g-5 align-items-end mb--40">--}}
                    {{--                            <div class="col-lg-8 col-md-8 col-12">--}}
                    {{--                                <div class="section-title">--}}
                    {{--                                    <span class="subtitle bg-primary-opacity">Niveau</span>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}

                    {{--                        </div>--}}
                    {{--                        <div class="row g-5">--}}
                    {{--                            <!-- Start Single Card  -->--}}
                    {{--                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"--}}
                    {{--                                 data-sal-duration="800">--}}
                    {{--                                <div class="rbt-card variation-01 rbt-hover">--}}
                    {{--                                    <div class="rbt-card-img">--}}
                    {{--                                        <a href="course-details.html">--}}
                    {{--                                            <img src="{{ asset('assets/images/course/A1.jpg') }}" alt="Card image">--}}

                    {{--                                        </a>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="rbt-card-body">--}}
                    {{--                                        <div class="rbt-card-top">--}}
                    {{--                                            <div class="rbt-review">--}}
                    {{--                                                <div class="rating">--}}
                    {{--                                                    <i class="fas fa-star"></i>--}}
                    {{--                                                    <i class="fas fa-star"></i>--}}
                    {{--                                                    <i class="fas fa-star"></i>--}}
                    {{--                                                    <i class="fas fa-star"></i>--}}
                    {{--                                                    <i class="fas fa-star"></i>--}}
                    {{--                                                </div>--}}
                    {{--                                                <span class="rating-count"> (15 Avis)</span>--}}
                    {{--                                            </div>--}}
                    {{--                                            <div class="rbt-bookmark-btn">--}}
                    {{--                                                <a class="rbt-round-btn" title="Bookmark" href="#"><i--}}
                    {{--                                                        class="feather-bookmark"></i></a>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}

                    {{--                                        <h4 class="rbt-card-title"><a href="course-details.html">Allemand A1--}}
                    {{--                                            </a>--}}
                    {{--                                        </h4>--}}


                    {{--                                        <p class="rbt-card-text">"Une personne de niveau A1 en allemand peut comprendre--}}
                    {{--                                            et utiliser des expressions simples de la vie quotidienne…--}}
                    {{--                                        </p>--}}

                    {{--                                        <div class="rbt-card-bottom">--}}
                    {{--                                            <div class="rbt-price">--}}
                    {{--                                                <span class="current-price">{{ $price }} MAD</span>--}}
                    {{--                                                <span class="off-price">{{ $price * 1.4 }} MAD</span>--}}
                    {{--                                            </div>--}}
                    {{--                                            <a class="rbt-btn-link" href="course-details.html">En Savoir plus <i--}}
                    {{--                                                    class="feather-arrow-right"></i></a>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <!-- End Single Card  -->--}}

                    {{--                            <!-- Start Single Card  -->--}}
                    {{--                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"--}}
                    {{--                                 data-sal-duration="800">--}}
                    {{--                                <div class="rbt-card variation-01 rbt-hover">--}}
                    {{--                                    <div class="rbt-card-img">--}}
                    {{--                                        <a href="course-details.html">--}}
                    {{--                                            <img src="{{ asset('assets/images/course/B1.jpg') }}" alt="Card image">--}}

                    {{--                                        </a>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="rbt-card-body">--}}
                    {{--                                        <div class="rbt-card-top">--}}
                    {{--                                            <div class="rbt-review">--}}
                    {{--                                                <div class="rating">--}}
                    {{--                                                    <i class="fas fa-star"></i>--}}
                    {{--                                                    <i class="fas fa-star"></i>--}}
                    {{--                                                    <i class="fas fa-star"></i>--}}
                    {{--                                                    <i class="fas fa-star"></i>--}}
                    {{--                                                    <i class="fas fa-star"></i>--}}
                    {{--                                                </div>--}}
                    {{--                                                <span class="rating-count"> (15 Avis)</span>--}}
                    {{--                                            </div>--}}
                    {{--                                            <div class="rbt-bookmark-btn">--}}
                    {{--                                                <a class="rbt-round-btn" title="Bookmark" href="#"><i--}}
                    {{--                                                        class="feather-bookmark"></i></a>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}

                    {{--                                        <h4 class="rbt-card-title"><a href="course-details.html">Allemand B1--}}
                    {{--                                            </a>--}}
                    {{--                                        </h4>--}}


                    {{--                                        <p class="rbt-card-text">Une personne de niveau B1 en allemand est capable--}}
                    {{--                                            d'interagir dans des situations courantes..</p>--}}

                    {{--                                        <div class="rbt-card-bottom">--}}
                    {{--                                            <div class="rbt-price">--}}
                    {{--                                                <span class="current-price">$60</span>--}}
                    {{--                                                <span class="off-price">$120</span>--}}
                    {{--                                            </div>--}}
                    {{--                                            <a class="rbt-btn-link" href="course-details.html">En Savoir plus <i--}}
                    {{--                                                    class="feather-arrow-right"></i></a>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="row g-5">--}}
                    {{--                                <!-- Start Single Card  -->--}}
                    {{--                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt--50" data-sal-delay="150"--}}
                    {{--                                     data-sal="slide-up" data-sal-duration="800">--}}
                    {{--                                    <div class="rbt-card variation-01 rbt-hover">--}}
                    {{--                                        <div class="rbt-card-img">--}}
                    {{--                                            <a href="course-details.html">--}}
                    {{--                                                <img src="{{ asset('assets/images/course/B2.jpg') }}" alt="Card image">--}}

                    {{--                                            </a>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="rbt-card-body">--}}
                    {{--                                            <div class="rbt-card-top">--}}
                    {{--                                                <div class="rbt-review">--}}
                    {{--                                                    <div class="rating">--}}
                    {{--                                                        <i class="fas fa-star"></i>--}}
                    {{--                                                        <i class="fas fa-star"></i>--}}
                    {{--                                                        <i class="fas fa-star"></i>--}}
                    {{--                                                        <i class="fas fa-star"></i>--}}
                    {{--                                                        <i class="fas fa-star"></i>--}}
                    {{--                                                    </div>--}}
                    {{--                                                    <span class="rating-count"> (15 Avis)</span>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="rbt-bookmark-btn">--}}
                    {{--                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i--}}
                    {{--                                                            class="feather-bookmark"></i></a>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}

                    {{--                                            <h4 class="rbt-card-title"><a href="course-details.html">Allemand B2--}}
                    {{--                                                </a>--}}
                    {{--                                            </h4>--}}


                    {{--                                            <p class="rbt-card-text">Au niveau B2 en allemand, la personne est capable--}}
                    {{--                                                de communiquer de manière avancée et précise....--}}
                    {{--                                            </p>--}}

                    {{--                                            <div class="rbt-card-bottom">--}}
                    {{--                                                <div class="rbt-price">--}}
                    {{--                                                    <span class="current-price">$60</span>--}}
                    {{--                                                    <span class="off-price">$120</span>--}}
                    {{--                                                </div>--}}
                    {{--                                                <a class="rbt-btn-link" href="course-details.html">En Savoir plus <i--}}
                    {{--                                                        class="feather-arrow-right"></i></a>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <!-- End Single Card  -->--}}

                    {{--                                <!-- Start Single Card  -->--}}
                    {{--                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt--50" data-sal-delay="150"--}}
                    {{--                                     data-sal="slide-up" data-sal-duration="800">--}}
                    {{--                                    <div class="rbt-card variation-01 rbt-hover">--}}
                    {{--                                        <div class="rbt-card-img">--}}
                    {{--                                            <a href="course-details.html">--}}
                    {{--                                                <img src="{{ asset('assets/images/course/C1.jpg') }}" alt="Card image">--}}

                    {{--                                            </a>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="rbt-card-body">--}}
                    {{--                                            <div class="rbt-card-top">--}}
                    {{--                                                <div class="rbt-review">--}}
                    {{--                                                    <div class="rating">--}}
                    {{--                                                        <i class="fas fa-star"></i>--}}
                    {{--                                                        <i class="fas fa-star"></i>--}}
                    {{--                                                        <i class="fas fa-star"></i>--}}
                    {{--                                                        <i class="fas fa-star"></i>--}}
                    {{--                                                        <i class="fas fa-star"></i>--}}
                    {{--                                                    </div>--}}
                    {{--                                                    <span class="rating-count"> (15 Avis)</span>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="rbt-bookmark-btn">--}}
                    {{--                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i--}}
                    {{--                                                            class="feather-bookmark"></i></a>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}

                    {{--                                            <h4 class="rbt-card-title"><a href="course-details.html">Allemand C1--}}
                    {{--                                                </a>--}}
                    {{--                                            </h4>--}}


                    {{--                                            <p class="rbt-card-text">Une personne de niveau C1 en allemand maîtrise la--}}
                    {{--                                                langue de manière avancée et peut communiquer avec aisance et--}}
                    {{--                                                spontanéité.. </p>--}}

                    {{--                                            <div class="rbt-card-bottom">--}}
                    {{--                                                <div class="rbt-price">--}}
                    {{--                                                    <span class="current-price">$60</span>--}}
                    {{--                                                    <span class="off-price">$120</span>--}}
                    {{--                                                </div>--}}
                    {{--                                                <a class="rbt-btn-link" href="course-details.html">En Savoir plus <i--}}
                    {{--                                                        class="feather-arrow-right"></i></a>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <!-- End Single Card  -->--}}
                    {{--                            </div>--}}
                    {{--                            <!-- End Single Card  -->--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <!-- end Niveau  -->
                </div>

                <!-- Old Register form ui -->
                {{--                <div class="col-lg-4">--}}
                {{--                    <div class="course-sidebar sticky-top rbt-border-with-box course-sidebar-top rbt-gradient-border">--}}
                {{--                        <div class="inner">--}}

                {{--                            <!-- Start formulaire  -->--}}
                {{--                            @if(auth()->check())--}}
                {{--                                <form method="POST" action="{{ url('/EtudiantCourse')}}" enctype="multipart/form-data">--}}
                {{--                                    @csrf--}}

                {{--                                    @if(($totalEtudiantsInscrits < $maxPlacements) || ($maxPlacements == null))--}}
                {{--                                        <div class="content-item-content">--}}
                {{--                                            <div--}}
                {{--                                                class="rbt-price-wrapper d-flex flex-wrap align-items-center justify-content-between">--}}
                {{--                                                <div class="rbt-price">--}}
                {{--                                                    <span class="current-price">{{ $price }} MAD</span>--}}
                {{--                                                    <span class="off-price">{{ $price * 1.4 }} MAD</span>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}

                {{--                                            <div class="rbt-widget-details ">--}}
                {{--                                                <ul class=" rbt-course-details-list-wrapper">--}}
                {{--                                                    <div class="row">--}}
                {{--                                                        <div class="col-6">--}}
                {{--                                                            <li><input type="text" name="nom" placeholder="Nom"--}}
                {{--                                                                       required>--}}
                {{--                                                            </li>--}}
                {{--                                                            <li><input type="text" name="prenom" placeholder="Prénom"--}}
                {{--                                                                       required>--}}
                {{--                                                            </li>--}}
                {{--                                                            <li><input type="text" name="sexe" placeholder="Sexe"--}}
                {{--                                                                       required>--}}
                {{--                                                            </li>--}}
                {{--                                                            <li><input type="date" name="dateNaissance"--}}
                {{--                                                                       placeholder="Date de naissance" required></li>--}}
                {{--                                                        </div>--}}
                {{--                                                        <div class="col-6">--}}
                {{--                                                            <li><input type="tel" name="tel"--}}
                {{--                                                                       placeholder="Numéro de téléphone"--}}
                {{--                                                                       required></li>--}}
                {{--                                                            <li><input type="text" name="email"--}}
                {{--                                                                       placeholder="Adresse e-mail"--}}
                {{--                                                                       required></li>--}}
                {{--                                                            <li><input type="text" name="placeOfBirth"--}}
                {{--                                                                       placeholder="Lieu de naissance" required></li>--}}
                {{--                                                            <li><input type="text" name="countryOfBirth"--}}
                {{--                                                                       placeholder="Pays de naissance" required></li>--}}
                {{--                                                        </div>--}}
                {{--                                                    </div>--}}
                {{--                                                    <li><input type="text" name="cin"--}}
                {{--                                                               placeholder="Numéro de passeport ou CIN"--}}
                {{--                                                               required></li>--}}
                {{--                                                    <li><input type="text" name="addresse"--}}
                {{--                                                               placeholder="Adresse actuelle"--}}
                {{--                                                               required></li>--}}
                {{--                                                </ul>--}}
                {{--                                                <input type="hidden" id="courseId" name="courseId"--}}
                {{--                                                       value="{{$courseId}}">--}}
                {{--                                                <div class="add-to-card-button">--}}
                {{--                                                    <button--}}
                {{--                                                        class="rbt-btn btn-gradient icon-hover w-100 d-block text-center"--}}
                {{--                                                        type="submit">--}}
                {{--                                                        <span class="btn-text">S'inscrire</span>--}}
                {{--                                                    </button>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    @else--}}
                {{--                                        <div class="alert alert-danger" role="alert">--}}
                {{--                                            Le cours a atteint le maximum de places disponibles !--}}
                {{--                                        </div>--}}
                {{--                                    @endif--}}
                {{--                                </form>--}}
                {{--                            @else--}}
                {{--                                <div class="alert alert-danger" role="alert">--}}
                {{--                                    Vous devez vous connecter pour pouvoir s'inscrire !--}}
                {{--                                </div>--}}
                {{--                                <div class="add-to-card-button">--}}
                {{--                                    <a href="{{ url('/login') }}"--}}
                {{--                                       class="rbt-btn btn-gradient icon-hover w-100 d-block text-center">--}}
                {{--                                        <span class="btn-text">Se connecter</span>--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                            @endif--}}
                {{--                            <!-- end formulaire  -->--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
            </div>

            <div class="rbt-separator-mid">
                <div class="container">
                    <hr class="rbt-separator m-0">
                </div>
            </div>
            <!-- Start test  -->
            <div class="rbt-related-course-area bg-color-white pt--60 rbt-section-gapBottom">
                <div class="container">
                    <div class="section-title mb--30">
                        <h4 class="title">Test</h4>
                    </div>
                    <div class="row g-5">

                        <!-- Start Single Card  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                             data-sal-duration="800">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="course-details.html">
                                        <img src="{{ asset('assets/images/course/DSH.jpg') }}" alt="Card image">

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
                                        <div class="rbt-bookmark-btn">
                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                    class="feather-bookmark"></i></a>
                                        </div>
                                    </div>

                                    <h4 class="rbt-card-title"><a href="course-details.html">Test DSH
                                        </a>
                                    </h4>


                                    <p class="rbt-card-text">Le DSH est un examen de compétences en langue allemande qui
                                        vous permet d’étudier dans une université allemande. L’examen écrit comprend 3
                                        parties: compréhension orale, compréhension écrite et rédaction (durée totale: 4
                                        heures). L’examen oral dure environ 20 minutes.</p>

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
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                             data-sal-duration="800">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="course-details.html">
                                        <img src="{{ asset('assets/images/course/DAF.jpg') }}" alt="Card image">

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
                                        <div class="rbt-bookmark-btn">
                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                    class="feather-bookmark"></i></a>
                                        </div>
                                    </div>

                                    <h4 class="rbt-card-title"><a href="course-details.html">Test DAF
                                        </a>
                                    </h4>


                                    <p class="rbt-card-text">Le Test DAF est un examen destiné aux personnes étrangères
                                        qui
                                        apprennent l’allemand et qui souhaitent étudier en Allemagne, ou qui ont besoin
                                        d’un
                                        certificat qui atteste de leurs compétences linguistiques. Le résultat
                                        attribué correspond à l’un des 3 niveaux mentionnés dans le « Cadre Européen
                                        Commun
                                        de Référence pour les Langues » (de B2 à C2). </p>

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
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                             data-sal-duration="800">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="course-details.html">
                                        <img src="{{ asset('assets/images/course/WIDAF.jpg') }}" alt="Card image">

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
                                        <div class="rbt-bookmark-btn">
                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                    class="feather-bookmark"></i></a>
                                        </div>
                                    </div>

                                    <h4 class="rbt-card-title"><a href="course-details.html">Test WiDaF
                                        </a>
                                    </h4>


                                    <p class="rbt-card-text">Le WiDaF (Deutsch als Fremdsprache in der Wirtschaft) est
                                        un
                                        diplôme d’allemand qui sert à attester des compétences d’une personne
                                        non-germanophone dans cette langue en milieu professionnel </p>

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
            <!-- end test  -->

            <!-- Start inscris action Bottom  -->

            <div class="rbt-course-action-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="section-title text-center text-md-start">
                                <h5 class="title mb--0">Saisissez votre chance et inscrivez-vous à l'Institut
                                    Munich!</h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt_sm--15">
                            <div class="course-action-bottom-right rbt-single-group">
                                <div class="rbt-single-list rbt-price large-size justify-content-center">
                                    <span class="current-price color-primary">MAD {{$price}}</span>
                                    <span class="off-price">MAD {{$price+125}}</span>
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
            <!-- End inscris Action Bottom  -->
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
</div>
