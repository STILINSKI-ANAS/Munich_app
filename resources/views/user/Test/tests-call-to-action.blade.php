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
                                    <li class="rbt-breadcrumb-item active">Preinscription</li>
                                </ul>
                                <!-- End Breadcrumb Area  -->

                                <div class=" title-wrapper">
                                    <h1 class="title mb--0">Veuillez bien choisir un examen</h1>
                                </div>


                                <a href="#" class="rbt-badge-2">
                                    L'inscription peut être  <strong>arrêtée avant la date limite dès qu'il n'y a plus de places disponibles.</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Banner Content Top  -->
                <!-- Start Course Top  -->
                <div class="rbt-course-top-wrapper mt--40">
                    <div class="container">
                        <div class="row g-5 align-items-center">



                            <div class="col-lg-12 mt--60">
                                <ul class="rbt-portfolio-filter filter-tab-button justify-content-start nav nav-tabs" id="rbt-myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true"><span class="filter-text">All
                                            Course</span> <span class="course-number">04</span></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured" type="button" role="tab" aria-controls="featured" aria-selected="false"><span class="filter-text">PRÜFUNG A1</span> <span class="course-number">02</span></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button id="popular-tab" data-bs-toggle="tab" data-bs-target="#popular" type="button" role="tab" aria-controls="popular" aria-selected="false"><span class="filter-text">PRÜFUNG A2</span> <span class="course-number">03</span></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button id="trending-tab" data-bs-toggle="tab" data-bs-target="#trending" type="button" role="tab" aria-controls="trending" aria-selected="false"><span class="filter-text">PRÜFUNG A2</span> <span class="course-number">03</span></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button id="latest-tab" data-bs-toggle="tab" data-bs-target="#latest" type="button" role="tab" aria-controls="latest" aria-selected="false"><span class="filter-text">PRÜFUNG B1</span> <span class="course-number">04</span></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button id="latest-tab" data-bs-toggle="tab" data-bs-target="#latest" type="button" role="tab" aria-controls="latest" aria-selected="false"><span class="filter-text">PRÜFUNG B2</span> <span class="course-number">04</span></button>
                                    </li>
                                </ul>
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
                        @foreach ($tests as $test)
                            <div class="course-grid-3">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="course-details.html">
                                            <img src="{{asset('/uploads/Test/'.$test->image)}}" alt="Card image">

                                        </a>
                                    </div>
                                    <div class="rbt-card-body">


                                        <h4 class="rbt-card-title pb--10"><a>{{$test->level}}</a>
                                        </h4>

                                        <ul class="rbt-meta">
                                            <li><p><i class="feather-calendar"></i>Début d'inscription :
                                                    <!-- Start Date -->
                                            @if($test['start_date'] == null)
                                                {{ $test['start_date'] = '01/01/2024' }}
                                            @else
                                                {{ $test['start_date'] }}
                                            @endif
                                        </ul>

                                        <ul class="rbt-meta">
                                            <li><p><i class="feather-calendar"></i>Date Limite :
                                                    <!-- End Date -->

                                                    @if($test['end_date'] == null)
                                                        {{ $test['end_date'] = '01/01/2024' }}
                                                    @else
                                                        {{ $test['end_date'] }}
                                                    @endif
                                                </p></li></p></li>
                                        </ul>

                                        <div class="rbt-card-bottom">
                                            <div class="rbt-price">
                                                <div class="button-group mt--30">
                                                    <a class="rbt-btn btn-gradient rbt-marquee-btn" href="{{ route('test.admission', ['testId' => $test->id]) }}">
                                                        <span data-text="Se pré-inscrire">Se pré-inscrire</span>
                                                    </a>



                                                </div>
                                            </div>
                                            <span class="rbt-badge variation-02 bg-primary-opacity">Samedi 25 mai 2024</span>
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
