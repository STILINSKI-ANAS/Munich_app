<div>
    <div class="section-title">
        <h4 class="rbt-title-style-3">Informations sur l'etudiant :</h4>
    </div>

    @if ($successMessage)
        <div class="alert-success p-2 rbt-radius">
            {{ $successMessage }}
        </div>
    @endif

    <div class="advance-tab-button mb--30">
        <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="settinsTab-4" role="tablist">
            <li role="presentation">
                <a href="#" wire:click.prevent="tabchange('personnel')" class="tab-button {{$personnelBtn}}">
                    <span class="title">Personnel</span>
                </a>
            </li>
            <li role="presentation">
                <a href="#" wire:click.prevent="tabchange('motifsNiveau')" class="tab-button {{$motifsNiveauBtn}}">
                    <span class="title">Motifs et Niveau</span>
                </a>
            </li>
            <li role="presentation">
                <a href="#" wire:click.prevent="tabchange('inscription')" class="tab-button {{$inscriptionBtn}}">
                    <span class="title">Inscription</span>
                </a>
            </li>
            <li role="presentation">
                <a href="#" wire:click.prevent="tabchange('paiement')" class="tab-button {{$paiementBtn}}">
                    <span class="title">Paiement</span>
                </a>
            </li>
        </ul>
    </div>


    <div class="tab-content">
        <div class="tab-pane fade {{$personnel}}" id="personnel" role="tabpanel" aria-labelledby="personnel-tab">
            <!-- Start Personnel info   -->
            <form class="rbt-profile-row rbt-default-form row row--15" wire:submit.prevent="save">
                <!-- Start Photo  -->
                <div class="rbt-tutor-information-left">
                    <div class="mb-3">
                        <label for="image" class="form-label">Upload Image</label>
                        <input type="file" id="image" wire:model="image" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    @if ($image)
                        <div class="thumbnail rbt-avatars size-lg position-relative">
                            <img src="{{ $image->temporaryUrl() }}" alt="etudiant" height="300" width="300">
                            <div class="rbt-edit-photo-inner">
                                <button class="rbt-edit-photo" title="Upload Photo">
                                    <i class="feather-camera"></i>
                                </button>
                            </div>
                        </div>
                    @else
                        <div class="thumbnail rbt-avatars size-lg position-relative">
                            <img src="{{asset('assets/images/team/avatar.jpg')}}" alt="Instructor">
                            <div class="rbt-edit-photo-inner">
                                <button class="rbt-edit-photo" title="Upload Photo">
                                    <i class="feather-camera"></i>
                                </button>
                            </div>
                        </div>
                    @endif
                </div>
                <!-- Photo    -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-form-group">
                        <label for="nom">Nom :</label>
                        <input wire:model="nom" type="text" id="nom" placeholder="Entrez le Nom" class="@error('nom') border-danger @enderror">
                        @error('nom') <span class="alert-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-form-group">
                        <label for="prenom">Prénom :</label>
                        <input wire:model="prenom" type="text" id="prenom" placeholder="Entrez le Prénom" class="@error('prenom') border-danger @enderror">
                        @error('prenom') <span class="alert-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-form-group">
                        <label for="cin">CIN :</label>
                        <input wire:model="cin" type="text" id="cin" placeholder="Entrez la CIN" class="@error('cin') border-danger @enderror">
                        @error('cin') <span class="alert-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-form-group">
                        <label for="phonenumber">Numéro de Téléphone :</label>
                        <input wire:model="tel" type="tel" id="phonenumber" placeholder="Entrez le numéro de téléphone" class="@error('tel') border-danger @enderror">
                        @error('tel') <span class="alert-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-form-group">
                        <label for="dateNaissance">Date de Naissance :</label>
                        <input wire:model="dateNaissance" type="date" id="dateNaissance" placeholder="Entrez la date de naissance" class="@error('dateNaissance') border-danger @enderror">
                        @error('dateNaissance') <span class="alert-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-form-group">
                        <label for="email">Email :</label>
                        <input wire:model="email" type="text" id="email" placeholder="Entrez l'adresse email" class="@error('email') border-danger @enderror">
                        @error('email') <span class="alert-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="col-12">
                    <div class="rbt-form-group">
                        <label for="adresse">Adresse :</label>
                        <textarea class="@error('addresse') border-danger @enderror" wire:model="addresse" rows="5" id="addresse" placeholder="Entrez l'adresse"></textarea>
                        @error('addresse') <span class="alert-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </form>
            <!-- End Personnel info  -->
        </div>



        <!-- Motifs et niveua info  -->
        <div class="tab-pane fade {{$motifsNiveau}}" id="motifsNiveau" role="tabpanel" aria-labelledby="motifsNiveau-tab">
            <form action="#" class="rbt-profile-row rbt-default-form row row--15">
                <div class="col-12">
                    <div class="rbt-form-group">
                        <label for="statutProfessionnel">Statut Professionnel :</label>
                        <input wire:model="status_pro" id="statutProfessionnel" type="text" placeholder="Entrez le Statut Professionnel" name="status_pro">
                    </div>
                </div>
                <div class="course-field mb--15 col-6">
                    <label for="field-1">Comment avez-vous connu Institut Munich?</label>
                    <select id="referral_options" name="referral_options" wire:model="referral_options"
                            wire:change.prevent="handlereferralChange">
                        <option value="Site Internet">Site Internet</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Panneau publicitaire, Poster ou Flayer">Panneau publicitaire, Poster ou
                            Flayer
                        </option>
                        <option value="ouche a Oreille">Bouche a Oreille</option>
                        <option value="autre">Autre</option>
                    </select>
                    <div id="otherreferral" style="display: {{ $otherreferral }};">
                        <label for="customreferral">Enter your option:</label>
                        <input {{ $customreferral }} wire:model="cusreferral" type="text" name="referral" id="customreferral"
                               placeholder="Autre" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="course-field mb--15 col-12">
                        <label for="field-1">Avez-vous deja suivi des cours de cette langue?</label>
                        <select id="options" name="background" wire:model="background"
                                wire:change.prevent="handlebackgroundChange">
                            <option value="non">Non</option>
                            <option value="oui">Oui</option>
                        </select>
                        <div id="otherbackground" style="display: {{ $otherbackground }};">
                            <label for="custombackground">Si oui, pendant combien de temps?</label>
                            <input id="custombackground" wire:model="time_learning" type="text" placeholder="Pendant combien de temps?"
                                   name="time_learning" value="">
                            <div class="row">
                                <label for="field-1">Ou? (Veuillez indiquer l'institution et la periode
                                    d'etude): </label>
                                <div class="course-field mb--15 col-6">
                                    <label for="where_learning">Institution: </label>
                                    <input id="where_learning" wire:model="where_learning" type="text" placeholder="Entrez l'Institution"
                                           name="where_learning" value="">
                                </div>
                                <div class="course-field mb--15 col-6">
                                    <label for="period_learning">Periode: </label>
                                    <input id="period_learning" wire:model="period_learning" type="text" placeholder="Entrez la Periode"
                                           name="period_learning" value="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>

        <!-- Motifs et niveua info end  -->

        <!-- Inscription  -->
        <div class="tab-pane fade {{$inscription}}" id="inscription" role="tabpanel" aria-labelledby="inscription-tab">
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

        <div class="tab-pane fade {{$paiement}}" id="paiement" role="tabpanel" aria-labelledby="paiement-tab">
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

        <div class="col-12 mt--20">
            <div class="rbt-form-group">
                <button wire:click.prevent="save" class="rbt-btn btn-gradient" type="submit">Ajouter</button>
            </div>
        </div>


    </div>
</div>
