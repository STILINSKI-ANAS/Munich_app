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

                                <div class="col-lg-12 mt--30">
                                    <div class="profile-content rbt-shadow-box">
                                        <h4 class="rbt-title-style-3">Examen: PREFUNG A1</h4>
                                        <div class="row g-5">
                                            <div class="col-lg-8">
                                                <p class="mt--10 mb--20">Votre CIN: J530644</p>
                                                <p class="mt--10 mb--20">Date d'examen: Le Samedi 1 juin 2024 à 9:00</p>

                                            </div>
                                        </div>
                                    </div>
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
                                <form >

                                    <!-- Module selection -->
                                    <div class="mb-3">
                                        <h5 class="rbt-title-style-3"><i class="fas fa-clipboard-list"></i> Veuillez choisir le(s) module(s)</h5>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="ecrit" id="module_ecrit" name="modules[]">
                                            <label class="form-check-label" for="module_ecrit">L'écrit</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="orale" id="module_orale" name="modules[]">
                                            <label class="form-check-label" for="module_orale">L'orale</label>
                                        </div>
                                    </div>

                                    <!-- Personal information -->
                                    <div class="mb-3">
                                        <h5 class="rbt-title-style-3"><i class="fas fa-user"></i> Veuillez saisir vos informations personnelles</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="prenom" class="form-label">Prénom *</label>
                                                <input type="text" class="form-control" id="prenom" name="prenom" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="nom" class="form-label">Nom de famille *</label>
                                                <input type="text" class="form-control" id="nom" name="nom" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb--20">
                                                <label for="sexe" class="form-label">Sexe *</label>
                                                <select class="form-select" id="sexe" name="sexe" required>
                                                    <option value="">Choisir...</option>
                                                    <option value="homme">Homme</option>
                                                    <option value="femme">Femme</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 pb--5">
                                                <label for="dob" class="form-label">Date de Naissance *</label>
                                                <input type="date" class="form-control" id="dob" name="dob" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="telephone" class="form-label">Numéro de téléphone *</label>
                                                <input type="tel" class="form-control" id="telephone" name="telephone" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="email" class="form-label">Email *</label>
                                                <input type="email" class="form-control" id="email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="lieu_naissance" class="form-label">Lieu de naissance *</label>
                                                <input type="text" class="form-control" id="lieu_naissance" name="lieu_naissance" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="pays_naissance" class="form-label">Pays de naissance *</label>
                                                <input type="text" class="form-control" id="pays_naissance" name="pays_naissance" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- File upload -->
                                    <div class="mb-3">
                                        <h5 class="rbt-title-style-3"><i class="fas fa-file-upload"></i> Téléchargez vos documents</h5>

                                        <div class="course-field mb--20">
                                            <h6>CIN</h6>
                                            <div class="rbt-create-course-thumbnail upload-area">
                                                <div class="upload-area">
                                                    <div class="brows-file-wrapper" data-black-overlay="9">
                                                        <!-- actual upload which is hidden -->
                                                        <input name="createinputfile" id="createinputfile" type="file" class="inputfile">
                                                        <img id="createfileImage" src="assets/images/others/thumbnail-placeholder.svg" alt="file image">
                                                        <!-- our custom upload button -->
                                                        <label class="d-flex" for="createinputfile" title="No File Choosen">
                                                            <i class="feather-upload"></i>
                                                            <span class="text-center">Choose a File</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <small><i class="feather-info"></i> <b>Scanne de votre carte nationalle:</b> <b>File
                                                    Support:</b> JPG, JPEG, PNG, WEBP</small>
                                        </div>
                                    </div>


                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary rbt-btn btn-gradient rbt-marquee-btn">Validez Votre Préinscription <i class="fas fa-arrow-right ms-2"></i></button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

