@extends('layouts.admin')

@section('content')
    <div class="section-title">
        <h4 class="rbt-title-style-3">Informations sur l'etudiant :</h4>
    </div>

    <div class="advance-tab-button mb--30">
        <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="settinsTab-4" role="tablist">
            <li role="presentation">
                <a href="#" class="tab-button active" id="personnel-tab" data-bs-toggle="tab" data-bs-target="#personnel" role="tab" aria-controls="personnel" aria-selected="true">
                    <span class="title">Personnel</span>
                </a>
            </li>
            <li role="presentation">
                <a href="#" class="tab-button" id="motifsNiveau-tab" data-bs-toggle="tab" data-bs-target="#motifsNiveau" role="tab" aria-controls="motifsNiveau" aria-selected="false">
                    <span class="title">Motifs et Niveau</span>
                </a>
            </li>
            <li role="presentation">
                <a href="#" class="tab-button" id="inscription-tab" data-bs-toggle="tab" data-bs-target="#inscription" role="tab" aria-controls="inscription" aria-selected="false">
                    <span class="title">Inscription</span>
                </a>
            </li>
            <li role="presentation">
                <a href="#" class="tab-button" id="paiement-tab" data-bs-toggle="tab" data-bs-target="#paiement" role="tab" aria-controls="paiement" aria-selected="false">
                    <span class="title">Paiement</span>
                </a>
            </li>
        </ul>
    </div>


    <div class="tab-content">
        <div class="tab-pane fade active show" id="personnel" role="tabpanel" aria-labelledby="personnel-tab">
            <div class="rbt-dashboard-content-wrapper">
                <!-- Start Photo  -->
                <div class="rbt-tutor-information-left">
                    <div class="thumbnail rbt-avatars size-lg position-relative">
                        <img src="{{asset('assets/images/team/avatar.jpg')}}" alt="Instructor">
                        <div class="rbt-edit-photo-inner">
                            <button class="rbt-edit-photo" title="Upload Photo">
                                <i class="feather-camera"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Photo    -->
            </div>
            <!-- Start Personnel info   -->
            <form action="#" class="rbt-profile-row rbt-default-form row row--15">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-form-group">
                        <label for="nom">Nom :</label>
                        <input id="nom" type="text" placeholder="Entrez le Nom" name="nom">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-form-group">
                        <label for="prenom">Prénom :</label>
                        <input id="prenom" type="text" placeholder="Entrez le Prénom" name="prenom">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-form-group">
                        <label for="cin">CIN :</label>
                        <input id="cin" type="text" placeholder="Entrez la CIN" name="cin">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-form-group">
                        <label for="phonenumber">Numéro de Téléphone :</label>
                        <input id="phonenumber" type="tel" placeholder="Entrez le numéro de téléphone" name="tel">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-form-group">
                        <label for="dateNaissance">Date de Naissance :</label>
                        <input id="dateNaissance" type="date" placeholder="Entrez la date de naissance" name="dateNaissance">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-form-group">
                        <label for="email">Email :</label>
                        <input id="email" type="text" placeholder="Entrez l'adresse email" name="email">
                    </div>
                </div>
                <div class="col-12">
                    <div class="rbt-form-group">
                        <label for="adresse">Adresse :</label>
                        <textarea id="adresse" rows="5" name="adresse" placeholder="Entrez l'adresse"></textarea>
                    </div>
                </div>
                <div class="col-12 mt--20">
                    <div class="rbt-form-group">
                        <a class="rbt-btn btn-gradient" href="#">Ajouter</a>
                    </div>
                </div>
            </form>
            <!-- End Personnel info  -->
        </div>



        <!-- Motifs et niveua info  -->
        <div class="tab-pane fade" id="motifsNiveau" role="tabpanel" aria-labelledby="motifsNiveau-tab">
            <form action="#" class="rbt-profile-row rbt-default-form row row--15">
                <div class="col-12">
                    <div class="rbt-form-group">
                        <label for="statutProfessionnel">Statut Professionnel :</label>
                        <input id="statutProfessionnel" type="text" placeholder="Entrez le Statut Professionnel" name="status_pro">
                    </div>
                </div>
                <div class="col-6 mb--10">
                    <div class="filter-select rbt-modern-select">
                        <label for="commentConnexion">Comment il/elle a connu Institut Munich?</label>
                        <select id="commentConnexion" class="w-100">
                            <option value="">-- Sélectionner --</option>
                            <option value="Site Internet">Site Internet</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Panneau publicitaire, Poster ou Flayer">Panneau publicitaire, Poster ou Flayer</option>
                            <option value="Bouche à Oreille">Bouche à Oreille</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="rbt-form-group">
                        <label for="autreCommentaire">Comment :</label>
                        <input id="autreCommentaire" type="text" placeholder="Si autre :" name="status_pro">
                    </div>
                </div>
                <div class="col-12">
                    <div class="rbt-form-group">
                        <label for="coursLangue">Avez-vous suivi un cours de langue :</label>
                        <div class="single-method">
                            <input type="radio" id="suiviCours" name="suiviCours-method" value="suiviCours">
                            <label for="suiviCours">Oui</label>
                            <p data-method="suiviCours">
                                <label for="tempsCours">Combien de Temps :</label>
                                <input id="tempsCours" type="text" placeholder="Entrez la durée du cours" name="temps_cours">

                                <label for="institution">Institution :</label>
                                <input id="institution" type="text" placeholder="Entrez le nom de l'institut" name="institution">

                                <label for="periode">Période :</label>
                                <input id="periode" type="text" placeholder="Exemple : 2 mois" name="periode">
                            </p>
                        </div>

                        <div class="single-method">
                            <input type="radio" id="nonCoursLangue" name="cours-langue" value="nonCoursLangue">
                            <label for="nonCoursLangue">Non</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Motifs et niveua info end  -->

        <!-- Inscription  -->
        <div class="tab-pane fade" id="inscription" role="tabpanel" aria-labelledby="inscription-tab">
            <form action="#" class="rbt-profile-row rbt-default-form row row--15">
                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="language">Language</label>
                        <div class="rbt-modern-select bg-transparent height-50 mb--10">
                            <select class="w-100" id="language" name="language_id">
                                <option value="" selected>Sélectionnez une langue</option>
                                @foreach($languages as $language)
                                    <option value="{{ $language->id }}">{{ $language->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="course">Cours</label>
                        <div class="rbt-modern-select bg-transparent height-45 mb--10">
                            <select class="w-100" id="course" name="course_id">
                                <option value="" selected>Sélectionnez un cours</option>
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="test">Test</label>
                        <div class="rbt-modern-select bg-transparent height-45 mb--10">
                            <select class="w-100" id="test" name="test_id">
                                <option value="" selected>Sélectionnez un test</option>
                                @foreach($tests as $test)
                                    <option value="{{ $test->id }}">{{ $test->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="startDate">Start Date</label>
                        <input type="date" id="startDate" name="startDate">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="calenderie">Calendrier</label>
                        <div class="rbt-modern-select bg-transparent height-50 mb--10">
                            <select required name="calenderie" class="w-100" data-live-search="true" title="Sélectionnez ici" multiple="" data-size="7" data-actions-box="true" data-selected-text-format="count > 2" id="calenderie" tabindex="null">
                                @foreach($tests as $test)
                                    <option value="{{ $test->id }}">{{ $test->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Inscription  end -->


        <!-- paiement  -->

        <div class="tab-pane fade" id="paiement" role="tabpanel" aria-labelledby="paiement-tab">
            <form action="#" class="rbt-profile-row rbt-default-form row row--15">
                <!-- Total du panier -->
                <div class="col-12 mb--60">
                    <h4 class="checkout-title">Total du panier</h4>
                    <div class="checkout-cart-total">
                        <h4>Cours de langue <span>Total</span></h4>
                        <ul>
                            <li>Cours de français X 01 <span>295,00 $</span></li>
                        </ul>
                        <p>Sous-total <span>295,00 $</span></p>
                        <p>Frais de livraison <span>0,00 $</span></p>
                        <h4 class="mt--30">Total final <span>295,00 $</span></h4>
                    </div>
                </div>
                <!-- Méthode de paiement -->
                <div class="col-12 mb--60">
                    <h4 class="checkout-title">Méthode de paiement</h4>
                    <div class="checkout-payment-method">
                        <div class="single-method">
                            <input type="radio" id="payment_cash" name="payment-method" value="cash">
                            <label for="payment_cash">Paiement à la livraison</label>
                        </div>
                        <div class="single-method">
                            <input type="radio" id="payment_bank" name="payment-method" value="bank">
                            <label for="payment_bank">Virement bancaire direct</label>
                            <p data-method="bank">
                                <label for="field-1">Entrez la référence :</label>
                                <input id="field-1" type="text" placeholder="Entrez la référence de versement" name="reference_versement">
                            </p>
                        </div>
                    </div>
                    <div class="plceholder-button mt--50">
                        <button class="rbt-btn btn-gradient hover-icon-reverse">
                    <span class="icon-reverse-wrapper">
                        <span class="btn-text">Passer la commande</span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                    </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- paiement  end-->


    </div>

@endsection
