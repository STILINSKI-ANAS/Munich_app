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
            .background-loading{
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
                transform: translate(-50%,-50%);
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
        <form action="{{ url('admin/Etudiant')}}" method="POST">
            @csrf
            <div class="rbt-course-field-wrapper rbt-default-form card p-2 mb-3 rounded-3">
                <h4 class="card-title" >
                    <i class="feather-message-square"></i>
                    Informations sur la Person :
                </h4>
                <div class="row">
                    <div class="course-field mb--15 col-4">
                        <label for="field-1">Nom :</label>
                        <input id="field-1" type="text" placeholder="Entrez le Nom" name="nom">
                    </div>
                    <div class="course-field mb--15 col-4">
                        <label for="field-1">Prenom :</label>
                        <input id="field-1" type="text" placeholder="Entrez le Prenom" name="prenom">
                    </div>
                    <div class="course-field mb--15 col-4">
                        <label for="field-1">CIN :</label>
                        <input id="field-1" type="text" placeholder="Entrez la CIN" name="cin">
                    </div>
                </div>
                <div class="row">
                    <div class="course-field mb--15 col-6">
                        <label for="field-1">GSM :</label>
                        <input id="field-1" type="text" placeholder="Entrez le numero de telephone" name="tel">
                    </div>
                    <div class="course-field mb--15 col-6">
                        <label for="field-1">Date de Naissance :</label>
                        <input id="field-1" type="date" placeholder="Entrez la date de Naissance" name="dateNaissance">
                    </div>
                </div>

                <div class="course-field mb--15">
                    <label for="aboutCourse">Addresse</label>
                    <textarea id="aboutCourse" rows="5" name="addresse" placeholder="Entrez l'addresse"></textarea>
                </div>

            </div>

            <div class="rbt-course-field-wrapper rbt-default-form card p-2 mb-3 rounded-3">
                <h4 class="card-title" >
                    <i class="feather-message-square"></i>
                    Plus de details sur la Person :
                </h4>
                <div class="row">
                    <div class="course-field mb--15 col-6">
                        <label for="field-1">Statut Professionnel :</label>
                        <input id="field-1" type="text" placeholder="Entrez votre Statut Professionnel" name="status_pro">
                    </div>
                    <div class="course-field mb--15 col-6">
                        <label for="field-1">Cours demande :</label>
                        <select id="Cours_options" name="Cours_options" onchange="handleCoursChange(this.value)">
                            <option value="">-- Select --</option>
                            <option value="Preparation aux examens">Preparation aux examens</option>
                            <option value="Cours de communication">Cours de communication</option>
                            <option value="Cours particuliers">Cours particuliers</option>
                            <option value="autre">autre</option>
                        </select>
                        <div id="otherCours" style="display: none;">
                            <label for="Cours_customOption">Enter your option:</label>
                            <input type="text" name="Cours" id="customCours" placeholder="Autre">
                        </div>
                    </div>
                    <script>
                        function handleCoursChange(value) {
                            var otherCours = document.getElementById('otherCours');
                            var customCours = document.getElementById('customCours');

                            if (value === 'autre') {
                                otherCours.style.display = 'block';
                                customCours.required = true;
                            } else {
                                otherCours.style.display = 'none';
                                customCours.required = false;
                            }
                        }
                    </script>
                </div>
                <div class="row">
                    <div class="course-field mb--15 col-6">
                        <label for="field-1">Langues :</label>
                        <select id="langue_options" name="langue_options" onchange="handlelangueChange(this.value)">
                            <option value="">-- Select --</option>
                            <option value="Allemand">Allemand</option>
                            <option value="Anglais">Anglais</option>
                            <option value="Francais">Francais</option>
                            <option value="Espagnole">Espagnole</option>
                            <option value="autre">Autre</option>
                        </select>
                        <div id="otherlangue" style="display: none;">
                            <label for="customlangue">Enter your option:</label>
                            <input type="text" name="langue" id="customlangue" placeholder="Autre">
                        </div>
                    </div>
                    <script>
                        function handlelangueChange(value) {
                            var otherlangue = document.getElementById('otherlangue');
                            var customlangue = document.getElementById('customlangue');

                            if (value === 'autre') {
                                otherlangue.style.display = 'block';
                                customlangue.required = true;
                            } else {
                                otherlangue.style.display = 'none';
                                customlangue.required = false;
                            }
                        }
                    </script>
                    <div class="course-field mb--15 col-6">
                        <label for="field-1">Comment avez-vous connu Institut Munich?</label>
                        <select id="referral_options" name="referral_options" onchange="handlereferralChange(this.value)">
                            <option value="">-- Select --</option>
                            <option value="Site Internet">Site Internet</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Panneau publicitaire, Poster ou Flayer">Panneau publicitaire, Poster ou Flayer</option>
                            <option value="ouche a Oreille">Bouche a Oreille</option>
                            <option value="autre">Autre</option>
                        </select>
                        <div id="otherreferral" style="display: none;">
                            <label for="customreferral">Enter your option:</label>
                            <input type="text" name="referral" id="customreferral" placeholder="Autre">
                        </div>
                    </div>
                    <script>
                        function handlereferralChange(value) {
                            var otherreferral = document.getElementById('otherreferral');
                            var customreferral = document.getElementById('customreferral');

                            if (value === 'autre') {
                                otherreferral.style.display = 'block';
                                customreferral.required = true;
                            } else {
                                otherreferral.style.display = 'none';
                                customreferral.required = false;
                            }
                        }
                    </script>
                </div>
                <div class="row">
                    <div class="course-field mb--15 col-12">
                        <label for="field-1">Avez-vous deja suivi des cours de cette langue?</label>
                        <select id="options" name="background" onchange="handlebackgroundChange(this.value)">
                            <option value="">-- Select --</option>
                            <option value="oui">Oui</option>
                            <option value="option2">Non</option>
                        </select>
                        <div id="otherbackground" style="display: none;">
                            <label for="custombackground">Si oui, pendant combien de temps?</label>
                            <input id="custombackground" type="text" placeholder="Pendant combien de temps?" name="time_learning">
                            <div class="row">
                                <label for="field-1">Ou? (Veuillez indiquer l'institution et la periode d'etude): </label>
                                <div class="course-field mb--15 col-6">
                                    <label for="where_learning">Institution: </label>
                                    <input id="where_learning" type="text" placeholder="Entrez l'Institution" name="where_learning">
                                </div>
                                <div class="course-field mb--15 col-6">
                                    <label for="period_learning">Periode: </label>
                                    <input id="period_learning" type="text" placeholder="Entrez la Periode" name="period_learning">
                                </div>
                            </div>
                        </div>

                    </div>
                    <script>
                        function handlebackgroundChange(value) {
                            var otherbackground = document.getElementById('otherbackground');
                            var custombackground = document.getElementById('custombackground');
                            var where_learning = document.getElementById('where_learning');
                            var period_learning = document.getElementById('period_learning');

                            if (value === 'oui') {
                                otherbackground.style.display = 'block';
                                custombackground.required = true;
                                where_learning.required = true;
                                period_learning.required = true;
                            } else {
                                otherbackground.style.display = 'none';
                                custombackground.required = false;
                                where_learning.required = false;
                                period_learning.required = false;
                            }
                        }
                    </script>
                </div>

                <div class="course-field mb--15">
                    <label for="commentaire">Commentaire: </label>
                    <textarea id="commentaire" rows="5" name="commentaire" placeholder="commentaire ..."></textarea>
                </div>


            </div>

            <div class="form-group mb--0">
                <button class="rbt-btn rbt-switch-btn btn-gradient radius-round btn-sm" type="submit">
                    <span data-text="Ajouter">Ajouter</span>
                </button>
            </div>
        </form>

        <!-- End Course Field Wrapper  -->
    </div>
</div>
