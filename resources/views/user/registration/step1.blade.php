@extends('layouts.user')

@section('content')
    <main class="rbt-main-wrapper">
        <div class="rbt-page-banner-wrapper">
            <!-- Start Banner BG Image -->
            <div class="rbt-banner-image"></div>
            <!-- End Banner BG Image -->
            <div class="rbt-banner-content">
                <!-- Start Banner Content Top -->
                <div class="rbt-banner-content-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Start Breadcrumb Area -->
                                <ul class="page-list">
                                    <li class="rbt-breadcrumb-item"><a href="{{ route('exams') }}">Calendrier des examens</a></li>
                                    <li>
                                        <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                    </li>
                                    <li class="rbt-breadcrumb-item active">Préinscription</li>
                                </ul>
                                <!-- End Breadcrumb Area -->

                                <div class="title-wrapper">
                                    <h1 class="title mb--0">Se pré-inscrire en ligne</h1>
                                </div>

                                <div class="col-lg-12 mt--30">
                                    <div class="profile-content rbt-shadow-box">

                                        <h4 class="rbt-title-style-3">Examen: {{ $exam->title }} {{ $exam->level }}</h4>
                                        <div class="row g-5">
                                            <div class="col-lg-8">
                                                <p class="mt--10 mb--20"><i class="feather-map-pin"></i> Lieu de l'examen : <span class="text-danger">{{ $exam->exam_center }}</span></p>
                                                <p class="mt--10 mb--20"><i class="feather-calendar"></i> Date d'examen : <span class="text-danger">{{ \Carbon\Carbon::parse($exam->exam_date)->format('l d F Y') }} à 8:30</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Banner Content Top -->
            </div>
        </div>

        <div class="rbt-section-overlayping-top rbt-section-gapBottom">
            <div class="inner">
                <div class="container">
                    <div class="row g-5 checkout-form">
                        <div class="col-lg-12">
                            <div class="checkout-content-wrapper">
                                <form method="POST" action="{{ route('registration.postStep1') }}">
                                    @csrf

                                    <!-- Personal information -->
                                    <div class="mb-3">
                                        <h5 class="rbt-title-style-3"><i class="fas fa-user"></i> Veuillez saisir votre N° de carte nationale </h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="cin" class="form-label">N° CIN *</label>
                                                <input type="text" class="form-control" id="cin" name="cin" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary rbt-btn btn-gradient rbt-marquee-btn">Suivant <i class="fas fa-arrow-right ms-2"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
