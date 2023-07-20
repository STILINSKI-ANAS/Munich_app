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
                                    <li class="rbt-breadcrumb-item active">Tous les Tests</li>
                                </ul>
                                <!-- End Breadcrumb Area  -->

                                <div class=" title-wrapper">
                                    <h1 class="title mb--0">Les Tests</h1>
                                    <a href="#" class="rbt-badge-2">
                                        <div class="image">🎉</div> 3 Tests
                                    </a>
                                </div>

                                <p class="description">Des tests pour évaluer vos compétences en allemand !</p>
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
                                            <li class="course-switch-item"><button class="rbt-grid-view active" title="Grid Layout"><i class="feather-grid"></i> <span class="text">Grid</span></button></li>
                                            <li class="course-switch-item"><button class="rbt-list-view" title="List Layout"><i class="feather-list"></i> <span class="text">List</span></button></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-7 col-md-12">
                                <div class="rbt-sorting-list d-flex flex-wrap align-items-center justify-content-start justify-content-lg-end">
                                    <div class="rbt-short-item">
                                        <form action="#" class="rbt-search-style me-0">
                                            <input type="text" placeholder="Cherche Votre Test..">
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
                        @foreach ($tests as $test)
                            <div class="course-grid-3">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="{{url('/Language/Test/'.$test->level)}}">
                                            <img src="{{asset('./uploads/Course/'.$test->image)}}" alt="Card image">
                                            <div class="rbt-badge-3 bg-white">
                                                <span>-40%</span>
                                                <span>Off</span>
                                            </div>
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
                                                <span class="rating-count"> (15 Reviews)</span>
                                            </div>
                                            <div class="rbt-bookmark-btn">
                                                <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                        class="feather-bookmark"></i></a>
                                            </div>
                                        </div>

                                        <h4 class="rbt-card-title"><a href="{{url('/Language/Test/'.$test->level)}}">{{$test->level}}</a>
                                        </h4>

                                        <ul class="rbt-meta">
                                            <li><i class="feather-book"></i>12 Lessons</li>
                                            <li><i class="feather-users"></i>50 Students</li>
                                        </ul>

                                        <p class="rbt-card-text">{{ substr($test->overview, 0, 85) }}...</p>
                                        <div class="rbt-author-meta mb--10">
                                            <div class="rbt-avater">
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/client/avatar-02.png') }}" alt="Sophia Jaymes">
                                                </a>
                                            </div>
                                            <div class="rbt-author-info">
                                                By <a href="profile.html">Professor</a> In <a href="#">{{$test->language->name}}</a>
                                            </div>
                                        </div>
                                        <div class="rbt-card-bottom">
                                                <?php
                                                $price = $test->price;
                                                $totalPrice = $price + ($price * 0.4); // Price + 40% of the price
                                                ?>

                                            <div class="rbt-price">
                                                <span class="current-price">{{$price}} MAD</span>
                                                <span class="off-price">{{$totalPrice}} MAD</span>
                                            </div>
                                            <a class="rbt-btn-link" href="{{url('/Language/Test/'.$test->level)}}">Learn
                                                More<i class="feather-arrow-right"></i></a>
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
    @include('layouts.inc.admin.footer')

@endsection
