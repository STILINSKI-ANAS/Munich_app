
@extends('layouts.user')

@section('content')

    @php
        \Carbon\Carbon::setLocale('fr');
    @endphp
    <main class="rbt-main-wrapper">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            <div class="rbt-page-banner-wrapper">
                <div class="rbt-banner-image"></div>
                <div class="rbt-banner-content">
                    <!-- Start Banner Content Top  -->
                    <div class="rbt-banner-content-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class=" title-wrapper">
                                        <h1 class="title mb--0">Email validated successfully! </h1>
                                    </div>


                                    <a href="{{route("payment.form")}}" class="rbt-badge-2">
                                        <strong>Proceed aux paiement</strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Banner Content Top  -->
                </div>
            </div>
        @endif
        @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                <div class="rbt-page-banner-wrapper">
                    <div class="rbt-banner-image"></div>
                    <div class="rbt-banner-content">
                        <!-- Start Banner Content Top  -->
                        <div class="rbt-banner-content-top">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class=" title-wrapper">
                                            <h1 class="title mb--0">Email already validated </h1>
                                        </div>


                                        <a href="{{route("payment.form")}}" class="rbt-badge-2">
                                            Check your Email pour Détails de votre inscription<strong>Proceed aux paiement</strong>
                                        </a>
                                        vos venez de recevoir un reference de paiement dans votre email, veuillez effectuez le paiement en mettant le reference de paiement comme motif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Banner Content Top  -->
                    </div>
                </div>
            @endif

    </main>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
@endsection
