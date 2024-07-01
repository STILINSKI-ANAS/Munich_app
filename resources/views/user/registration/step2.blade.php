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
                                    <li class="rbt-breadcrumb-item active">Preinscription</li>
                                </ul>
                                <div class="title-wrapper">
                                    <h1 class="title mb--0">Se pré-inscrire en ligne</h1>
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
                    <div class="row g-5 checkout-form">
                        <div class="col-lg-12">
                            <div class="checkout-content-wrapper">
                                @if ($errors->any())
                                    <div class="rbt-default-badge">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('registration.postStep2') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="exam_id" value="{{ session('exam_id') }}">

                                    <div class="mb-3">
                                        <h5 class="rbt-title-style-3"><i class="fas fa-clipboard-list"></i> Veuillez choisir le(s) module(s)</h5>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="ecrit" id="module_ecrit" name="modules[]" {{ isset($registration) && in_array('ecrit', json_decode($registration->modules)) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="module_ecrit">L'écrit</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="orale" id="module_orale" name="modules[]" {{ isset($registration) && in_array('orale', json_decode($registration->modules)) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="module_orale">L'orale</label>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="rbt-title-style-3"><i class="fas fa-user"></i> Veuillez saisir vos informations personnelles</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="first_name" class="form-label">Prénom *</label>
                                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $registration->first_name ?? '') }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="last_name" class="form-label">Nom de famille *</label>
                                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', $registration->last_name ?? '') }}" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="cin" class="form-label">N° CIN *</label>
                                                <input type="text" class="form-control" id="cin" name="cin" value="{{ old('cin', session('cin')) }}" required>
                                            </div>
                                            <div class="col-md-4 col-12 mb--20">
                                                <label for="gender">Sexe *</label>
                                                <div class="rbt-modern-select bg-transparent height-50 mb--10">
                                                    <select class="w-100" id="gender" name="gender">
                                                        <option value="">Choisir...</option>
                                                        <option value="homme" {{ old('gender', $registration->gender ?? '') == 'homme' ? 'selected' : '' }}>Homme</option>
                                                        <option value="femme" {{ old('gender', $registration->gender ?? '') == 'femme' ? 'selected' : '' }}>Femme</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="birth_date" class="form-label">Date de naissance *</label>
                                                <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ old('birth_date', $registration->birth_date ?? '') }}" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="phone" class="form-label">Numéro de téléphone *</label>
                                                <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone', $registration->phone ?? '') }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="email" class="form-label">Email *</label>
                                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $registration->email ?? '') }}" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="birth_place" class="form-label">Lieu de naissance *</label>
                                                <input type="text" class="form-control" id="birth_place" name="birth_place" value="{{ old('birth_place', $registration->birth_place ?? '') }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="birth_country" class="form-label">Pays de naissance *</label>
                                                <input type="text" class="form-control" id="birth_country"
                                                       name="birth_country" value="{{ old('birth_country', $registration->birth_country ?? '') }}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="rbt-title-style-3"><i class="fas fa-file-upload"></i> Téléchargez vos documents</h5>

                                        <div class="course-field mb--20">
                                            <h6>CIN Document</h6>
                                            <div class="rbt-create-course-thumbnail upload-area">
                                                <div class="upload-area">
                                                    <div class="brows-file-wrapper" data-black-overlay="9">
                                                        <input name="cin_document" id="cin_document" type="file" class="inputfile" />
                                                        <img id="cinDocumentImage" src="{{ asset('assets/images/others/thumbnail-placeholder.svg') }}" alt="CIN Document">
                                                        <label class="d-flex" for="cin_document" title="No File Chosen">
                                                            <i class="feather-upload"></i>
                                                            <span class="text-center">Choose a File</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <small><i class="feather-info"></i> <b>Size:</b> As per requirement, <b>File Support:</b> JPG, JPEG, PNG, GIF, WEBP</small>
                                        </div>

                                        <div class="course-field mb--20">
                                            <h6>Photo</h6>
                                            <div class="rbt-create-course-thumbnail upload-area">
                                                <div class="upload-area">
                                                    <div class="brows-file-wrapper" data-black-overlay="9">
                                                        <input name="photo" id="photo" type="file" class="inputfile" />
                                                        <img id="photoImage" src="{{ asset('assets/images/others/thumbnail-placeholder.svg') }}" alt="Photo">
                                                        <label class="d-flex" for="photo" title="No File Chosen">
                                                            <i class="feather-upload"></i>
                                                            <span class="text-center">Choose a File</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <small><i class="feather-info"></i> <b>Size:</b> As per requirement, <b>File Support:</b> JPG, JPEG, PNG, GIF, WEBP</small>
                                        </div>

                                        <script>
                                            function previewImage(inputId, imgId) {
                                                const input = document.getElementById(inputId);
                                                const img = document.getElementById(imgId);
                                                input.addEventListener('change', function() {
                                                    const [file] = this.files;
                                                    if (file) {
                                                        img.src = URL.createObjectURL(file);
                                                    }
                                                });
                                            }

                                            previewImage('cin_document', 'cinDocumentImage');
                                            previewImage('photo', 'photoImage');
                                        </script>
                                    </div>

                                    <button type="submit" class="btn btn-primary rbt-btn btn-gradient rbt-marquee-btn">Validez Votre Préinscription <i class="fas fa-arrow-right ms-2"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
