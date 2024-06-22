@extends('layouts.user')

@section('content')
    <main class="rbt-main-wrapper">
        <div class="rbt-page-banner-wrapper">
            <div class="rbt-banner-image"></div>
            <div class="rbt-banner-content">
                <div class="rbt-banner-content-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="page-list">
                                    <li class="rbt-breadcrumb-item"><a href="{{ route('exams') }}">Calendrier des examens</a></li>
                                    <li>
                                        <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                    </li>
                                    <li class="rbt-breadcrumb-item active">Paiement</li>
                                </ul>
                                <div class="title-wrapper">
                                    <h1 class="title mb--0">Paiement Soumis</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rbt-section-overlayping-top rbt-section-gapBottom">
            <div class="inner">
                <div class="container">
                    <div class="alert alert-success" role="alert">
                        Votre paiement a été soumis avec succès!
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                            <div class="pricing-table style-2">
                                <div class="pricing-header">
                                    <h3 class="title color-primary">Détails de l'examen</h3>
                                    <span class="rbt-badge mb--35">Important</span>
                                    <div class="price-wrap">
                                        <div class="monthly-pricing" style="display: block;">
                                            <span class="amount color-primary">{{ $registration->exam->exam_fee }} MAD</span>
                                            <span class="duration color-primary">Frais d'inscription</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="pricing-body">
                                    <ul class="list-item">
                                        <li><i class="feather-calendar"></i> Date de l'examen: {{ $registration->exam->exam_date }}</li>
                                        <li><i class="feather-map-pin"></i> Centre de l'examen: {{ $registration->exam->exam_center }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                            <div class="pricing-table style-2">
                                <div class="pricing-header">
                                    <h3 class="title color-primary">Informations du Soumetteur</h3>
                                    <span class="rbt-badge mb--35">Détails</span>
                                </div>

                                <div class="pricing-body">
                                    <ul class="list-item">
                                        <li><i class="feather-user"></i> Nom: {{ $registration->first_name }} {{ $registration->last_name }}</li>
                                        <li><i class="feather-mail"></i> Email: {{ $registration->email }}</li>
                                        <li><i class="feather-phone"></i> Téléphone: {{ $registration->phone }}</li>
                                        <li><i class="feather-credit-card"></i> CIN: {{ $registration->cin }}</li>
                                    </ul>
                                </div>


                            </div>
                        </div>

                        <div class="pricing-btn pt--25">
                            <a class="rbt-btn bg-primary-opacity hover-icon-reverse w-100" href="{{ route('privacyPolicy') }}">
                                <div class="icon-reverse-wrapper">
                                    <span class="btn-text">Vérifiez les termes et conditions acceptés</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
