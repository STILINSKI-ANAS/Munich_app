<header class="rbt-header rbt-header-10">
    <div class="rbt-sticky-placeholder"></div>
    <!-- Start Header Top -->
    <div
        class="rbt-header-top rbt-header-top-1 header-space-betwween bg-not-transparent bg-color-darker top-expended-activation">
        <div class="container-fluid">
            <div class="top-expended-wrapper">
                <div class="top-expended-inner rbt-header-sec align-items-center ">
                    <div class="rbt-header-sec-col rbt-header-left d-none d-xl-block">
                        <div class="rbt-header-content">
                            <div class="header-info">
                                <ul class="rbt-information-list">
                                    <li>
                                        <a href="#"><i class="feather-help-circle"></i>Vous Avez Des Question?</a>
                                    </li>
                                    <li>
                                        <a href="mailto:info@institut-munich.ma"><i class="feather-mail"></i>info@institut-munich.ma</a>
                                    </li>
                                    <li>
                                        <!--                                        <a href="#"><i class="feather-phone"></i>+212-6</a>-->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="rbt-header-sec-col rbt-header-right mt_md--10 mt_sm--10">
                        <div class="rbt-header-content justify-content-start justify-content-lg-end">
                            <div class="header-info d-none d-xl-block">
                                <ul class="social-share-transparent">
                                    <li>
                                        <a href="https://www.facebook.com/InstitutMunich" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/institut_munich_agadir/" target="_blank"><i
                                                class="fab fa-instagram"></i></a>
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

    <div class="rbt-header-wrapper header-space-betwween header-sticky">
        <div class="container-fluid">
            <div class="mainbar-row rbt-navigation-start align-items-center">

                <div class="header-left rbt-header-content">
                    <div class="header-info">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/images/logo/logo-white.png') }}" alt="Institut Munich Logo">
                            </a>
                        </div>
                    </div>
                </div>

                @if (isset($header_languages))

                    <div class="rbt-main-navigation d-none d-xl-block">
                        <nav class="mainmenu-nav">
                            <ul class="mainmenu">
                                <li class="with-megamenu has-menu-child-item position-static">
                                    <a href="{{ url('/') }}">Accueil</a>
                                </li>

                                <li class="has-dropdown has-menu-child-item">
                                    <a href="#">Calendrier des Examens
                                        <i class="feather-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        @foreach($header_languages as $language)
                                            <li class="has-dropdown"><a
                                                    href="{{ url('/'.$language->name.'/Tests/') }}">{{ $language->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="has-dropdown has-menu-child-item">
                                    <a href="#">Inscription
                                        <i class="feather-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li class="has-dropdown">
                                            <a href="{{ url('/exams') }}">Preinscription</a>

                                        </li>
                                        <li class="has-dropdown"><a
                                                href="{{ url('payment/form') }}">Paiement</a>
                                        </li>
                                        <li class="has-dropdown"><a
                                                href="{{ url('convocation/form') }}">Convocation</a>
                                        </li>
                                    </ul>

                                </li>
                                <li class="with-megamenu has-menu-child-item position-static">
                                    <a href="{{ url('/results') }}">Resultat</a>
                                </li>
                                <li class="has-dropdown has-menu-child-item">
                                    <a href="#">l'instut
                                        <i class="feather-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li class="has-dropdown"><a href="{{ url('/aboutUs') }}">A Propos De Nous</a>
                                        </li>
                                        <li class="has-dropdown"><a href="{{ url('/Instructor/register') }}">Devenir
                                                Enseignant</a></li>
                                        <li class="has-dropdown"><a href="{{ url('/blog') }}">Articles</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                @endif

                <div class="header-right">
                    <!-- Navbar Icons -->
                    @guest
                        @if (Route::has('login'))
                            <div class="rbt-btn-wrapper d-none d-xl-block">
                                <a class="rbt-btn rbt-marquee-btn marquee-auto btn-border-gradient radius-round btn-sm hover-transform-none"
                                   href="{{ route('login') }}">
                                    <span data-text="Login">Login</span>
                                </a>
                            </div>
                        @endif
                    @else
                        <ul class="quick-access">

                            <li class="account-access rbt-user-wrapper d-none d-xl-block">
                                <a href="#"><i class="feather-user"></i>{{ Auth::user()->name }}</a>
                                <div class="rbt-user-menu-list-wrapper">
                                    <div class="inner">
                                        <div class="rbt-admin-profile">

                                            <div class="admin-info">
                                                <span class="name">{{ Auth::user()->name }}</span>
                                            </div>
                                        </div>
                                        <ul class="user-list-wrapper">
                                            <li>
                                                <a href="{{ url('/admin/Dashboard') }}">
                                                    <i class="feather-home"></i>
                                                    <span>My Dashboard</span>
                                                </a>
                                            </li>

                                        </ul>
                                        <hr class="mt--10 mb--10">
                                        <ul class="user-list-wrapper">
                                            <li>
                                                <a href="{{ url('/') }}">
                                                    <i class="feather-settings"></i>
                                                    <span>Settings</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="feather-log-out"></i>
                                                    <span>Logout</span>
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      class="d-none">
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
            <!-- Start Search Dropdown  -->
            <!-- End Search Dropdown  -->
        </div>
        </div>
</header>
