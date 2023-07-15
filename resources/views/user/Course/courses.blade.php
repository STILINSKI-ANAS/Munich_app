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
                                <li class="rbt-breadcrumb-item"><a href="index.html">Accueil</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active">Englais</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class=" title-wrapper">
                                <h1 class="title mb--0">Tout les cours</h1>
                                <a href="#" class="rbt-badge-2">
                                    <div class="image">🎉</div> 50 cours
                                </a>
                            </div>

                            <p class="description">
                                L'anglais est devenu la langue la plus utilisée dans le monde du travail et pour la communication internationale.
                                Parlée par plus de 2 milliards de personnes dans plus de 75 pays, elle offre de nombreux avantages.
                                La maîtrise de l'anglais permet de réussir dans sa carrière en accédant à des postes à responsabilité,
                                en développant son entreprise et en utilisant les ressources infinies d'Internet. Elle facilite également
                                les voyages, renforce la confiance et favorise les rencontres interculturelles. Les cours d'anglais à
                                l'Institut Munich offrent une approche pédagogique interactive, permettant aux étudiants de développer des
                                compétences linguistiques précises et de maîtriser l'anglais à long terme.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->
            <!-- Start Course Top  -->
            <div class="rbt-course-top-wrapper mt--40">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5 col-md-12">
                            <div class="rbt-sorting-list d-flex flex-wrap align-items-center">
                                <div class="rbt-short-item switch-layout-container">
                                    <ul class="course-switch-layout">
                                        <li class="course-switch-item"><button class="rbt-grid-view" title="Grid Layout"><i class="feather-grid"></i> <span class="text">Grid</span></button></li>
                                        <li class="course-switch-item"><button class="rbt-list-view active" title="List Layout"><i class="feather-list"></i> <span class="text">List</span></button></li>
                                    </ul>
                                </div>
                                <div class="rbt-short-item">
                                    <span class="course-index">Showing 1-9 of 19 results</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-12">
                            <div class="rbt-sorting-list d-flex flex-wrap align-items-center justify-content-start justify-content-lg-end">
                                <div class="rbt-short-item">
                                    <form action="#" class="rbt-search-style me-0">
                                        <input type="text" placeholder="Search Your Course..">
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


    <!-- Start Card Style -->
    <div class="rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <!-- Start Card Area -->
            <div class="rbt-course-grid-column list-column-half active-list-view">

                <!-- Start Single Card  -->
                @foreach($courses as $course)
                    <div class="col-lg-12 col-md-6">
                        <div class="course-grid-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="rbt-card variation-03 rbt-hover">
                                <div class="rbt-card-img">
                                    <a class="thumbnail-link" href="{{ route('getCourse', $course->id) }}">
                                        <img src="{{ asset('storage/' . $course['image']) }}"  alt="{{ $course->level }}">
                                        <span class="rbt-btn btn-white icon-hover">
                                            <span class="btn-text">En savoir plus</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title">
                                        <a href="{{ route('getCourse', $course->id) }}">{{ $course->level }}</a>
                                    </h5>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="{{ route('getCourse', $course->id) }}">
                                            <i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"></path><path stroke-linecap="square" d="M.663 5.572h14.594"></path></g></svg></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach                <!-- End Single Card  -->

            </div>
            <!-- End Card Area -->

            <div class="row">
                <div class="col-lg-12 mt--60">
                    <nav>
                        <ul class="rbt-pagination">
                            <li ><a href="#" aria-label="Previous"><i class="feather-chevron-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li ><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#" aria-label="Next"><i class="feather-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card Style -->



    @include('layouts.inc.admin.footer')

@endsection
