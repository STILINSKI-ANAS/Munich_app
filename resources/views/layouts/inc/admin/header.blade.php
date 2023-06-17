<header class="rbt-header rbt-header-1">
    <div class="rbt-sticky-placeholder"></div>
    <!-- Start Header Top -->
    <div class="rbt-header-top rbt-header-top-1 header-space-betwween bg-color-darker rbt-border-bottom top-expended-activation">
        <div class="container-fluid">
            <div class="top-expended-wrapper">
                <div class="top-expended-inner rbt-header-sec align-items-center ">
                    <div class="rbt-header-sec-col rbt-header-left">
                        <div class="rbt-header-content">
                            <div class="header-info">
                                <ul class="rbt-information-list">
                                    <li>
                                        <a href="#"><i class="feather-help-circle"></i>Have any Question?</a>
                                    </li>
                                    <li>
                                        <a href="mailto:hello@example.com"><i class="feather-mail"></i>info@institut-munich.ma</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="feather-phone"></i>+212-615-845-697</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="rbt-header-sec-col rbt-header-right d-none d-lg-block">
                        <div class="rbt-header-content justify-content-start justify-content-lg-end">
                            <div class="header-info">
                                <ul class="social-share-transparent">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="rbt-separator"></div>
                            <div class="header-info">
                                <ul class="rbt-information-list">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-square"></i>500k Followers</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-info">
                    <div class="top-bar-expended d-block d-lg-none">
                        <button class="topbar-expend-button rbt-round-btn"><i class="feather-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->
    <div class="rbt-header-wrapper header-space-betwween bg-color-white header-not-transparent header-sticky">
        <div class="container-fluid">
            <div class="mainbar-row rbt-navigation-start align-items-center">
                <div class="header-left">
                    <div class="rbt-header-content">
                        <div class="header-info">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('assets/images/logo/logo-full-white.png') }}" alt="Institut Munich Logo">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rbt-main-navigation d-none d-xl-block">
                    <nav class="mainmenu-nav">
                        <ul class="mainmenu">
                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="#">Accueil</a>
                            </li>
                            <li class="has-dropdown has-menu-child-item">
                                <a href="#">Cours de langue
                                    <i class="feather-chevron-down"></i>
                                </a>
                                <ul class="submenu">
                                    <li class="has-dropdown"><a href="#">Allemand</a>
                                    </li>
                                    <li class="has-dropdown"><a href="#">Anglais</a>
                                    </li>
                                    <li class="has-dropdown"><a href="#">Espagnol</a>
                                    </li>
                                    <li class="has-dropdown"><a href="#">Français</a>
                                    </li>
                                    <li class="has-dropdown"><a href="#">Arabe</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-dropdown has-menu-child-item">
                                <a href="#">Examens International
                                    <i class="feather-chevron-down"></i>
                                </a>
                                <ul class="submenu">
                                    <li class="has-dropdown"><a href="#">Allemand</a>
                                    </li>
                                    <li class="has-dropdown"><a href="#">Espagnol</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="#">Orientation</a>
                            </li>
                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="#">Formation continue</a>
                            </li>
                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="#">l'instut</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="header-right">
                    <!-- Navbar Icons -->
                    @guest
                        @if (Route::has('login'))
                            <div class="rbt-btn-wrapper d-none d-xl-block">
                                <a class="rbt-btn rbt-marquee-btn marquee-auto btn-border-gradient radius-round btn-sm hover-transform-none" href="{{ route('login') }}">
                                    <span data-text="S'inscrire">Login</span>
                                </a>
                            </div>
                        @endif
                    @else
                        <ul class="quick-access pr--200">

                            <li class="account-access rbt-user-wrapper d-none d-xl-block">
                                <a href="#"><i class="feather-user"></i>{{ Auth::user()->name }}</a>
                                <div class="rbt-user-menu-list-wrapper">
                                    <div class="inner">
                                        <div class="rbt-admin-profile">
                                            <div class="admin-thumbnail">
                                                <img src="assets/images/team/avatar.jpg" alt="User Images">
                                            </div>
                                            <div class="admin-info">
                                                <span class="name">{{ Auth::user()->name }}</span>
                                                <a class="rbt-btn-link color-primary" href="profile.html">View Profile</a>
                                            </div>
                                        </div>
                                        <ul class="user-list-wrapper">
                                            <li>
                                                <a href="instructor-dashboard.html">
                                                    <i class="feather-home"></i>
                                                    <span>My Dashboard</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="feather-bookmark"></i>
                                                    <span>Bookmark</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="instructor-enrolled-courses.html">
                                                    <i class="feather-shopping-bag"></i>
                                                    <span>Enrolled Courses</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="instructor-wishlist.html">
                                                    <i class="feather-heart"></i>
                                                    <span>Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="instructor-reviews.html">
                                                    <i class="feather-star"></i>
                                                    <span>Reviews</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="instructor-my-quiz-attempts.html">
                                                    <i class="feather-list"></i>
                                                    <span>My Quiz Attempts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="instructor-order-history.html">
                                                    <i class="feather-clock"></i>
                                                    <span>Order History</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="instructor-quiz-attempts.html">
                                                    <i class="feather-message-square"></i>
                                                    <span>Question &amp; Answer</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <hr class="mt--10 mb--10">
                                        <ul class="user-list-wrapper">
                                            <li>
                                                <a href="#">
                                                    <i class="feather-book-open"></i>
                                                    <span>Getting Started</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <hr class="mt--10 mb--10">
                                        <ul class="user-list-wrapper">
                                            <li>
                                                <a href="instructor-settings.html">
                                                    <i class="feather-settings"></i>
                                                    <span>Settings</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="feather-log-out"></i>
                                                    <span>Logout</span>
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    @endguest



                    <!-- Start Mobile-Menu-Bar -->
                    <div class="mobile-menu-bar d-block d-xl-none">
                        <div class="hamberger">
                            <button class="hamberger-button rbt-round-btn">
                                <i class="feather-menu"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Start Mobile-Menu-Bar -->

                </div>
            </div>
        </div>
        <!-- Start Search Dropdown  -->
        <div class="rbt-search-dropdown">
            <div class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#">
                            <input type="text" placeholder="What are you looking for?">
                            <div class="submit-btn">
                                <a class="rbt-btn btn-gradient btn-md" href="#">Search</a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="rbt-separator-mid">
                    <hr class="rbt-separator m-0">
                </div>

                <div class="row g-4 pt--30 pb--60">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h5 class="rbt-title-style-2">Our Top Course</h5>
                        </div>
                    </div>

                    <!-- Start Single Card  -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="assets/images/course/course-online-01.jpg" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="course-details.html">React Js</a>
                                </h5>
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
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price">$15</span>
                                        <span class="off-price">$25</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="assets/images/course/course-online-02.jpg" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="course-details.html">Java Program</a>
                                </h5>
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
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price">$10</span>
                                        <span class="off-price">$40</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="assets/images/course/course-online-03.jpg" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="course-details.html">Web Design</a>
                                </h5>
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
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price">$10</span>
                                        <span class="off-price">$20</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="assets/images/course/course-online-04.jpg" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="course-details.html">Web Design</a>
                                </h5>
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
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price">$20</span>
                                        <span class="off-price">$40</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                </div>

            </div>
        </div>
        <!-- End Search Dropdown  -->
    </div>
</header>
