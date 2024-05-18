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
                                    <h1 class="title mb--0">Se pré-inscrire en ligne</h1>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Banner Content Top  -->

            </div>
        </div>

        <div class="rbt-section-overlayping-top rbt-section-gapBottom">
            <div class="inner">
                <div class="container">
                    <div class="row g-5 checkout-form">
                        <div class="col-lg-12">
                            <div class="checkout-content-wrapper">
                                <h4 class="checkout-title">Veuillez saisir votre CIN</h4>
                                <form action="{{ route('search.customer') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb--20">
                                            <label for="cin">CIN*</label>
                                            <input type="text" id="cin" name="cin" placeholder="Votre numéro de carte nationale">
                                        </div>
                                        <!-- You can add more input fields or content here if needed -->
                                    </div>
                                    <button type="submit" class="rbt-btn btn-gradient rbt-marquee-btn justify-content-end">
                                        <span data-text="Se pré-inscrire">Suivant <i class="fas fa-arrow-right ms-2"></i></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
