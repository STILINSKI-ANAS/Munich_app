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
                                    <li class="rbt-breadcrumb-item active">Convocation</li>
                                </ul>
                                <div class="title-wrapper">
                                    <h1 class="title mb--0">Télécharger la convocation</h1>
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
                    <div class="row justify-content-left">
                        <div class="col-lg-12">
                            <div class="rbt-card shadow-sm">
                                <div class="rbt-card-header text-white">
                                    <h3 class="title mb--30">Convocation</h3>
                                </div>
                                <div class="rbt-card-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif

                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('convocation.submit') }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="registration_id" value="{{ session('registration_id') }}">

                                        <div class="mb-3">
                                            <label for="registration_reference" class="form-label">Référence d'inscription</label>
                                            <input type="text" class="form-control @error('registration_reference') is-invalid @enderror" id="registration_reference" name="registration_reference" required>
                                            @error('registration_reference')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="payment_reference" class="form-label">Référence de paiement</label>
                                            <input type="text" class="form-control @error('payment_reference') is-invalid @enderror" id="payment_reference" name="payment_reference" required>
                                            @error('payment_reference')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="d-grid">
                                            <button type="submit" class="rbt-btn btn-gradient">Télécharger</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
