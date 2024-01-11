<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Institut Munich - Paiement</title>
    <style>
        .terms-label-paiment:hover {
            color: #e22626;
        }
    </style>
</head>
<body>
@extends('layouts.user')

@section('content')
    <div class="checkout_area bg-color-white rbt-section-gap">
        <div class="container">
            <h2>Inscription {{ $test->name }}</h2>
            <form method="post" id="paymentForm" action="{{ route('testPaymentProcess') }}"
                  enctype="multipart/form-data">
                @csrf
                <div class="row g-5 checkout-form">
                    <div class="col-lg-7">
                        <div class="checkout-content-wrapper">
                            <div class="alert alert-warning" role="alert">
                                S'il vous assurez-vous que votre Prénom, Nom et Email sont corrects.
                            </div>
                            <!-- Billing Address -->
                            <div id="billing-form">
                                <h4 class="checkout-title mt--5">Vos Information</h4>
                                <div class="row">
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Prénom*</label>
                                        <input type="text" placeholder="Prénom" name="prenom">
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Nom*</label>
                                        <input type="text" placeholder="Nom" name="nom">
                                    </div>
                                    <div class="col-6 mb--20">
                                        <label>CIN*</label>
                                        <input type="text" placeholder="CIN" name="cin">
                                    </div>
                                    <div class="col-6 mb--20">
                                        <label>Email*</label>
                                        <input type="emaile" placeholder="Email Address" name="email" required>
                                    </div>
                                    <!-- Email error -->
                                    <div class="alert alert-danger"
                                         id="emailError" role="alert"
                                         style="display: none; margin-bottom: 8px;">

                                    </div>
                                    <div class="col-6 mb--20">
                                        <label>Date de naissance*</label>
                                        <input type="date" placeholder="Date de naissance" name="date_naissance"/>
                                    </div>
                                    <div class="col-6 mb--20">
                                        <label>Lieu de naissance*</label>
                                        <input type="text" placeholder="Lieu de naissance" name="lieu_naissance"/>
                                    </div>

                                    <div class="col-6 mb--20">
                                        <label>Langue maternelle*</label>
                                        <input type="text" placeholder="Langue maternelle" name="langue_maternelle"/>
                                    </div>

                                    <div class="col-6 mb--20">
                                        <label>Pays de naissance*</label>
                                        <input type="text" placeholder="Pays de naissance" name="pays_naissance"/>
                                    </div>
                                    <div class="col-6 mb--20">
                                        <label>Ville de résidence*</label>
                                        <input type="text" placeholder="Ville de résidence" name="ville_residence"/>
                                    </div>

                                    <div class="col-6 mb--20">
                                        <label>Pays de résidence*</label>
                                        <input type="text" placeholder="Pays de résidence" name="pays_residence"/>
                                    </div>
                                    <div class="col-6 mb--20">
                                        <label>Sexe*</label>
                                        <select name="sexe" id="sexe">
                                            <option value="Homme">Homme</option>
                                            <option value="Femme">Femme</option>
                                        </select>
                                    </div>
                                    <!-- Ecrit Ou Oral -->
                                    <div class="col-6 mb--20">
                                        <label>Ecrit ou Oral*</label>
                                        <select name="ecrit_or_oral" id="ecrit_or_oral">
                                            <option value="Ecrit">Ecrit</option>
                                            <option value="Oral">Oral</option>
                                            <option value="Ecrit et Oral">Ecrit et Oral</option>
                                        </select>
                                    </div>
                                    <!-- B1 or B2 -->
                                    <div class="col-6 mb--20">
                                        <label>Niveau* (B1 ou B2)</label>
                                        <select name="niveau" id="niveau">
                                            <option value="B1">B1</option>
                                            <option value="B2">B2</option>
                                        </select>
                                    </div>

                                    <!-- Hidden inputs for: EtudId, EtudTestId, amount -->
                                    <input type="text" name="EtudId" required value="{{ $etudiant->id }}" hidden>
                                    <input type="text" name="EtudTestId" required value="{{ $etudTestId }}" hidden>
                                    <input type="text" name="test_id" required value="{{ $test->id }}" hidden>
                                    <input type="text" name="amount" required value="{{ $total }}" hidden>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="row pl--50 pl_md--0 pl_sm--0">
                            <!-- Cart Total -->
                            <div class="col-12 mb--60">

{{--                                <h4 class="checkout-title">Votre Inscription</h4>--}}

                                <div class="checkout-cart-total">
                                    <div style="margin-bottom: 18px;">
                                        <h4>Examen</h4>
                                    </div>
                                    <!-- Test card: image, name and price -->
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="gap-2 d-flex align-items-start justify-content-start">
                                            <!-- Image -->
                                            <div class="product-image w-25">
                                                <img src="{{ asset('uploads/Test/'. $test->image) }}" alt="Card image">
                                            </div>

                                            <!-- Name -->
                                            <div class="product-content">
                                                <h4 class="product-title">{{ $test->name }}</h4>
                                            </div>
                                        </div>

                                        <!-- Price -->
                                        <div class="product-price">
                                            <span class="price">{{ $test->price }}DH</span>
                                        </div>
                                    </div>

                                    @if($test->course_id)
                                        <p>Cours Inclue:</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="gap-2 d-flex align-items-start justify-content-start">
                                                <!-- Image -->
                                                <div class="product-image w-25">
                                                    <img src="{{ asset('uploads/Course/'. $test->course->image) }}"
                                                         alt="Card image">
                                                </div>

                                                <!-- Name -->
                                                <div class="product-content">
                                                    <h5 class="product-title">{{ $test->course->level }}</h5>
                                                </div>
                                            </div>
                                            <!-- Price -->
                                            <div class="product-price">
                                                <span class="price">{{ $course_inclue_price }}DH</span>
                                            </div>
                                        </div>
                                    @endif

                                    <h4 class="mt--30">Totale <span>{{ $total }}DH</span></h4>

                                    <button id="placeOrderButton" class="rbt-btn btn-gradient hover-icon-reverse"
                                            type="button">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">S'inscrire</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmationModal" aria-hidden="true" aria-labelledby="confirmationModalLabel"
         tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="p-1">
                    Est que le <b>Nom</b>, <b>Prénom</b> et <b>Email</b> sont corrects? Si non, veuillez les corriger
                    avant de confirmer
                    votre Inscription.
                </div>
                <a href="{{ route('privacyPolicy') }}" target="_blank" class="p-2">Voir Les conditions et la politique
                    de confidentialité</a>
                <!-- Conditions and privacy policy -->

                <!-- Acceptance of Terms and Pricing Policy -->
                <div class="mt-1 ms-3">
                    <input type="checkbox" id="terms" name="terms" value="terms">
                    <label for="terms" class="terms-label-paiment">J'accepte les conditions et la politique de
                        confidentialité</label>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button class="btn btn-primary" id="confirmOrderButton">
                        Valider
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- jQuery JS -->
<script src="{{ asset('assets/js/vendor/jquery.js')}}"></script>
<script>
    $(document).ready(function () {
        // Function to validate email
        function validateEmail(email) {
            var re = /^(([^<>()\]\\.,;:\s@"]+(\.[^<>()\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }

        // Show the confirmation modal when the "Place order" button is clicked
        $('#placeOrderButton').click(function () {
            $('#confirmationModal').modal('show');
        });

        // Handle the "Confirm Order" button in the confirmation modal
        $('#confirmOrderButton').click(function (event) {
            var email = $('input[name="email"]').val();
            if (!validateEmail(email)) {
                event.preventDefault(); // Prevent form submission

                // close the modal
                $('#confirmationModal').modal('hide');

                $('#emailError')
                    .show()
                    .text('Veuillez saisir une adresse email valide.');

                // wait 3 seconds and hide
                setTimeout(function () {
                    $('#emailError').hide();
                }, 3000);

                return false; // Stop the function
            }
            $('#paymentForm').submit(); // Submit the form if email is valid
        });

        // Disable the Confirm Order button initially
        $("#confirmOrderButton").prop("disabled", true);

        // Listen for changes in the checkbox state
        $("#terms").change(function () {
            // Enable the Confirm Order button if the checkbox is checked, disable it otherwise
            $("#confirmOrderButton").prop("disabled", !this.checked);
        });
    });
</script>
</body>
</html>
