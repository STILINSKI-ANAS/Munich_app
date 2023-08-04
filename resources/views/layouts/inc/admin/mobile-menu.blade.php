<div class="popup-mobile-menu">
    <div class="inner-wrapper">
        <div class="inner-top">
            <div class="content">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{ asset('assets/images/logo/logo-full-white.png') }}" alt="Institut Munich Logo">
                    </a>
                </div>
                <div class="rbt-btn-close">
                    <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                </div>
            </div>
            <p class="description">Institut Munich : Cours de langues, examens et plus pour une expérience immersive d'apprentissage et de développement personnel.</p>
            <ul class="navbar-top-left rbt-information-list justify-content-start">
                <li>
                    <a href="mailto:info@institut-munich.ma"><i class="feather-mail"></i>info@institut-munich.ma</a>
                </li>
                <li>
                    <a href="#"><i class="feather-phone"></i>+212-615-845-697</a>
                </li>
            </ul>
        </div>
        @if (isset($languages))
        <nav class="mainmenu-nav">
            <ul class="mainmenu">
                <li class="">
                    <a href="{{url('/')}}">Accueil</a>

                </li>

                <li class="with-megamenu has-menu-child-item">
                    <a href="#">Cours de langue <i class="feather-chevron-down"></i></a>
                    <!-- Start Mega Menu  -->
                    <div class="rbt-megamenu grid-item-2">
                         <ul class="submenu">
                            @foreach($languages as $language)
                                <li><a href="{{url('/'.$language->name.'/Courses/')}}">{{$language->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- End Mega Menu  -->
                </li>


                <li class="with-megamenu has-menu-child-item">
                    <a href="#">Examens International <i class="feather-chevron-down"></i></a>
                    <!-- Start Mega Menu  -->
                    <div class="rbt-megamenu grid-item-2">
                        <ul class="submenu">
                            @foreach($languages as $language)
                                <li><a href="{{url('/'.$language->name.'/Tests/')}}">{{$language->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- End Mega Menu  -->
                </li>

                <li class="">
                    <a href="#">Orientation</a>

                </li>

                <li class="with-megamenu position-static">
                    <a href="#">Formation Continue</a>
                </li>
                <li class="with-megamenu has-menu-child-item">
                    <a href="#">l'instut<i class="feather-chevron-down"></i></a>
                    <div class="rbt-megamenu grid-item-2">
                        <ul class="submenu">
                            <li ><a href="{{ url('/aboutUs') }}">A Propos De Nous</a></li>
                            <li ><a href="{{ url('/Instructor/register') }}">Devenir Enseignant</a></li>
                            <li><a href="{{ url('/blog') }}">Articles</a></li>

                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        @endif
        <div class="mobile-menu-bottom">
            <div class="rbt-btn-wrapper mb--20">
                <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center" href="#">
                    <span>s'inscrire</span>
                </a>
            </div>

            <div class="social-share-wrapper">
                <span class="rbt-short-title d-block">Nous Suivre</span>
                <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
                    <li><a href="https://www.facebook.com/">
                            <i class="feather-facebook"></i>
                        </a>
                    </li>
                    <li><a href="https://www.twitter.com">
                            <i class="feather-twitter"></i>
                        </a>
                    </li>
                    <li><a href="https://www.instagram.com/">
                            <i class="feather-instagram"></i>
                        </a>
                    </li>
                    <li><a href="https://www.linkdin.com/">
                            <i class="feather-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
