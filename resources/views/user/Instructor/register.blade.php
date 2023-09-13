@extends('layouts.user')
@section('content')
    <!-- Début de la zone des miettes de pain (breadcrumb) -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="index.html">Accueil</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Devenir enseignant</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la zone des miettes de pain (breadcrumb) -->

    <div class="rbt-become-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-pink-opacity">devenir un enseignant</span>
                    </div>
                </div>
            </div>


            <div class="row pt--60 g-5">
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img class="radius-10 w-100" src="/assets/images/tab/tabs-10.jpg" alt="Corporate Template">
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">

                        <h3 class="title">Inscription de l'enseignant</h3>
                        <hr class="mb--30">

                        <form action="{{ url('/Instructor/Register') }}" method="post" enctype="multipart/form-data"
                              class="row row--15">
                            @csrf
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="first_name" type="text">
                                    <label>Prénom</label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="last_name" type="text">
                                    <label>Nom de famille</label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="national_id" type="text">
                                    <label>CIN || Passeport</label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="nationality" type="text">
                                    <label>Nationalité</label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="email" type="email">
                                    <label>Email</label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="phone" type="tel">
                                    <label>Numéro de téléphone</label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input name="adresse" type="text">
                                    <label>Adresse</label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input name="specialisation" type="text">
                                    <label>Votre Spécialité</label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="description"></textarea>
                                    <label>Description</label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="course-field mb--20">
                                    <h6>Votre CV</h6>
                                    <div class="rbt-create-course-thumbnail"
                                         style="border: 1px solid #ccc; padding: 10px; border-radius: 5px;">
                                        <label for="cv_file"
                                               style="display: flex; align-items: center; cursor: pointer;">
                                            <i class="feather-upload" style="margin-right: 5px;"></i> <!-- Icon -->
                                            <span style="font-size: 16px;">Choisir un fichier De Votre CV</span>
                                        </label>
                                        <input type="file" name="cv_file" id="cv_file" accept=".pdf"
                                               style="display: none;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="course-field mb--20">
                                    <h6>Votre Photo</h6>
                                    <div class="rbt-create-course-thumbnail"
                                         style="border: 1px solid #ccc; padding: 10px; border-radius: 5px;">
                                        <label for="image" style="display: flex; align-items: center; cursor: pointer;">
                                            <i class="feather-upload" style="margin-right: 5px;"></i> <!-- Icon -->
                                            <span style="font-size: 16px;">Choisir une Photo</span>
                                        </label>
                                        <input type="file" name="image" id="image" accept="image/*"
                                               style="display: none;">
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="form-submit-group">
                                    <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Devenir un instructeur</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="thumb-wrapper bg-color-white rbt-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper rbt-gif-banner-area rbt-arrow-between">
                        <div class="swiper-wrapper">
                            <!-- Début de la bannière individuelle -->
                            <div class="swiper-slide">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img class="rbt-radius w-100" src="/assets/images/banner/gallery-banner-01.jpg"
                                             alt="Images de bannière">
                                    </a>
                                </div>
                            </div>
                            <!-- Fin de la bannière individuelle -->
                            <!-- Début de la bannière individuelle -->
                            <div class="swiper-slide">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img class="rbt-radius w-100" src="/assets/images/banner/gallery-banner-02.jpg"
                                             alt="Images de bannière">
                                    </a>
                                </div>
                            </div>
                            <!-- Fin de la bannière individuelle -->
                            <!-- Début de la bannière individuelle -->

                            <!-- Fin de la bannière individuelle -->
                        </div>

                        <div class="rbt-swiper-arrow rbt-arrow-left">
                            <div class="custom-overfolow">
                                <i class="rbt-icon feather-arrow-left"></i>
                                <i class="rbt-icon-top feather-arrow-left"></i>
                            </div>
                        </div>

                        <div class="rbt-swiper-arrow rbt-arrow-right">
                            <div class="custom-overfolow">
                                <i class="rbt-icon feather-arrow-right"></i>
                                <i class="rbt-icon-top feather-arrow-right"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <script>
        // Get the file input elements
        const cvFileInput = document.getElementById('cv_file');
        const imageFileInput = document.getElementById('image');

        // Get the label elements that display the selected file names
        const cvFileLabel = document.querySelector('label[for="cv_file"]');
        const imageFileLabel = document.querySelector('label[for="image"]');

        // Function to update file name display
        const updateFileName = (fileInput, fileLabel) => {
            fileInput.addEventListener('change', (event) => {
                const fileName = event.target.files[0]?.name || 'Choisir un fichier';
                fileLabel.innerHTML = `<i class="feather-upload" style="margin-right: 5px;"></i>${fileName}`;
            });
        };

        // Call the function for both file inputs
        updateFileName(cvFileInput, cvFileLabel);
        updateFileName(imageFileInput, imageFileLabel);
    </script>
@endsection
