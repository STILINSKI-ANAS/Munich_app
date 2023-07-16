<div>
    <div>
        <h1>Ajouter Etudiant</h1>
    </div>
    <div class="card-body" wire:init="firstrender">
        <div class="background-loading" style="display: {{$loading}};">
            <div class="loading-box">
                <div class="inter-load">
                    <div class="rect rect1"></div>
                    <div class="rect rect2"></div>
                    <div class="rect rect3"></div>
                    <div class="rect rect4"></div>
                    <div class="rect rect5"></div>
                </div>
            </div>
        </div>
        <style>
            .background-loading {
                background: #FFFFFF;
                position: absolute;
                width: 80%;
                height: 75%;
                z-index: 6999;
                border-radius: 8px;
                border: 2px solid #E6E3F1;
            }

            .loading-box {
                width: 200px;
                height: 200px;
                border: 5px solid #000000;
                margin: 200px auto;
                position: relative;
                z-index: 7000;
            }

            .inter-load {
                width: 100px;
                height: 50px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }

            .rect {
                background: #000000;
                display: inline-block;
                height: 60px;
                width: 7px;
                margin: 0 1px;
                animation: load 1.3s infinite ease-in-out;
            }

            @keyframes load {
                0% {
                    transform: scaleY(0.4);
                }
                20% {
                    transform: scaleY(1);
                }
                40% {
                    transform: scaleY(0.4);
                }
                100% {
                    transform: scaleY(0.4);
                }
            }

            .rect2 {
                animation-delay: -1.2s;
            }

            .rect3 {
                animation-delay: -1.1s;
            }

            .rect4 {
                animation-delay: -1s;
            }

            .rect5 {
                animation-delay: -0.9s;
            }
        </style>
        <!-- Start Course Field Wrapper  -->
        <form action="{{ url('admin/Etudiant/' . $Etudiant->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="rbt-course-field-wrapper rbt-default-form card p-2 mb-3 rounded-3">
                <h4 class="card-title">
                    <i class="feather-message-square"></i>
                    Informations sur la Person :
                </h4>
                <div class="row">
                    <div class="course-field mb--15 col-4">
                        <label for="field-1">Nom :</label>
                        <input id="field-1" type="text" placeholder="Entrez le Nom" name="nom"
                               value="{{ $Etudiant->nom }}">
                    </div>
                    <div class="course-field mb--15 col-4">
                        <label for="field-1">Prenom :</label>
                        <input id="field-1" type="text" placeholder="Entrez le Prenom" name="prenom"
                               value="{{ $Etudiant->prenom }}">
                    </div>
                    <div class="course-field mb--15 col-4">
                        <label for="field-1">CIN :</label>
                        <input id="field-1" type="text" placeholder="Entrez la CIN" name="cin"
                               value="{{ $Etudiant->cin }}">
                    </div>
                </div>
                <div class="row">
                    <div class="course-field mb--15 col-6">
                        <label for="field-1">GSM :</label>
                        <input id="field-1" type="text" placeholder="Entrez le numero de telephone" name="tel"
                               value="{{ $Etudiant->tel }}">
                    </div>
                    <div class="course-field mb--15 col-6">
                        <label for="field-1">Date de Naissance :</label>
                        <input id="field-1" type="date" placeholder="Entrez la date de Naissance" name="dateNaissance"
                               value="{{ $Etudiant->dateNaissance }}">
                    </div>
                </div>

                <div class="course-field mb--15">
                    <label for="aboutCourse">Addresse</label>
                    <textarea id="aboutCourse" rows="5" name="addresse"
                              placeholder="Entrez l'addresse">{{ $Etudiant->addresse }}</textarea>
                </div>

            </div>

            <div class="rbt-course-field-wrapper rbt-default-form card p-2 mb-3 rounded-3">
                <h4 class="card-title">
                    <i class="feather-message-square"></i>
                    Plus de details sur la Person :
                </h4>
                <div class="row">
                    <div class="course-field mb--15 col-6">
                        <label for="field-1">Statut Professionnel :</label>
                        <input id="field-1" type="text" placeholder="Entrez votre Statut Professionnel"
                               name="status_pro" value="{{ $Etudiant->status_pro }}">
                    </div>
                    <div class="course-field mb--15 col-6">
                        <label for="field-1">Cours demande :</label>
                        <select id="Cours_options" name="Cours_options" wire:model="Cours_options"
                                wire:change.prevent="handleCoursChange">
                            <option value="Preparation aux examens">Preparation aux examens</option>
                            <option value="Cours de communication">Cours de communication</option>
                            <option value="Cours particuliers">Cours particuliers</option>
                            <option value="autre">autre</option>
                        </select>
                        <div id="otherCours" style="display: {{ $otherCours }};">
                            <label for="Cours_customOption">Enter your option:</label>
                            <input {{ $customCours }} type="text" name="Cours" id="customCours" placeholder="Autre"
                                   value="{{ $Etudiant->Cours }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="course-field mb--15 col-6">
                        <label for="field-1">Langues :</label>
                        <select id="langue_options" wire:model="langue_options" name="langue_options"
                                wire:change.prevent="handlelangueChange">
                            <option value="Allemand">Allemand</option>
                            <option value="Anglais">Anglais</option>
                            <option value="Francais">Francais</option>
                            <option value="Espagnole">Espagnole</option>
                            <option value="autre">Autre</option>
                        </select>
                        <div id="otherlangue" style="display: {{ $otherlangue }};">
                            <label for="customlangue">Enter your option:</label>
                            <input type="text" {{ $customlangue }} name="langue" id="customlangue" placeholder="Autre"
                                   value="{{ $Etudiant->langue }}">
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
                            <input {{ $customreferral }} type="text" name="referral" id="customreferral"
                                   placeholder="Autre" value="{{ $Etudiant->referral }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="course-field mb--15 col-12">
                        <label for="field-1">Avez-vous deja suivi des cours de cette langue?</label>
                        <select id="options" name="background" wire:model="background"
                                wire:change.prevent="handlebackgroundChange">
                            {{--                            <option value="{{ $Etudiant->background }}">{{ $Etudiant->background }}</option>--}}
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                        <div id="otherbackground" style="display: {{ $otherbackground }};">
                            <label for="custombackground">Si oui, pendant combien de temps?</label>
                            <input id="custombackground" type="text" placeholder="Pendant combien de temps?"
                                   name="time_learning" value="{{ $Etudiant->time_learning }}">
                            <div class="row">
                                <label for="field-1">Ou? (Veuillez indiquer l'institution et la periode
                                    d'etude): </label>
                                <div class="course-field mb--15 col-6">
                                    <label for="where_learning">Institution: </label>
                                    <input id="where_learning" type="text" placeholder="Entrez l'Institution"
                                           name="where_learning" value="{{ $Etudiant->where_learning }}">
                                </div>
                                <div class="course-field mb--15 col-6">
                                    <label for="period_learning">Periode: </label>
                                    <input id="period_learning" type="text" placeholder="Entrez la Periode"
                                           name="period_learning" value="{{ $Etudiant->period_learning }}">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="course-field mb--15">
                    <label for="commentaire">Commentaire: </label>
                    <textarea id="commentaire" rows="5" name="commentaire"
                              placeholder="commentaire ...">{{ $Etudiant->commentaire}}</textarea>
                </div>


            </div>

            <div class="form-group mb--0">
                <button class="rbt-btn rbt-switch-btn btn-gradient radius-round btn-sm" type="submit">
                    <span data-text="Ajouter">Modifier</span>
                </button>
            </div>
        </form>

        <!-- End Course Field Wrapper  -->
    </div>
</div>
