<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Institut Munich - Paiement</title>
</head>
<body>
@extends('layouts.user')

@section('content')
    <div class="checkout_area bg-color-white rbt-section-gap">
        <div class="container">
            <h1>Paiement</h1>
            <form id="paymentForm2" action="{{ route('coursePaymentProcess') }}" method="POST"
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
                                <h4 class="checkout-title mt--5">Votre Information</h4>
                                <div class="row">
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Prénom*</label>
                                        <input type="text" placeholder="Prénom" name="prenom"
                                               value="{{ $etudiant->prenom }}">
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Nom*</label>
                                        <input type="text" placeholder="Nom" name="nom" value="{{ $etudiant->nom }}">
                                    </div>
                                    <div class="col-6 mb--20">
                                        <label>CIN*</label>
                                        <input type="text" placeholder="CIN" name="cin"
                                               value="{{ $etudiant->cin}}">
                                    </div>
                                    <div class="col-6 mb--20">
                                        <label>Email*</label>
                                        <input type="email" placeholder="Email Address" name="email"
                                               value="{{ $etudiant->user->email }}">
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

                                    <!-- Hidden inputs for: EtudId, EtudTestId, amount -->
                                    <input type="text" name="EtudId" required value="{{ $etudiant->id }}" hidden>
                                    <input type="text" name="EtudCourseId" required value="{{ $etudCourseId }}" hidden>
                                    <input type="text" name="course_id" required value="{{ $course->id }}" hidden>
                                    <input type="text" name="amount" required value="{{ $total }}" hidden>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="row pl--50 pl_md--0 pl_sm--0">
                            <!-- Cart Total -->
                            <div class="col-12 mb--60">

                                <h4 class="checkout-title">Votre Commande</h4>

                                <div class="checkout-cart-total">
                                    <div style="margin-bottom: 18px;">
                                        <h4>Cours</h4>
                                    </div>
                                    <!-- Test card: image, name and price -->
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="gap-2 d-flex align-items-start justify-content-start">
                                            <!-- Image -->
                                            <div class="product-image w-25">
                                                <img src="{{ asset('uploads/Course/'. $course->image) }}"
                                                     alt="Card image">
                                            </div>

                                            <!-- Name -->
                                            <div class="product-content">
                                                <h4 class="product-title">{{ $course->level }}</h4>
                                            </div>
                                        </div>

                                        <!-- Price -->
                                        <div class="product-price">
                                            <span class="price">{{ $course->price }}DH</span>
                                        </div>
                                    </div>

                                    <h4 class="mt--30">Totale <span>{{ $total }}DH</span></h4>

                                    <button id="placeOrderButton" class="rbt-btn btn-gradient hover-icon-reverse"
                                            type="button">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Lancer la commande</span>
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
                <div class="modal-body">
                    Est que le <b>Nom</b>, <b>Prénom</b> et <b>Email</b> sont corrects? Si non, veuillez les corriger
                    avant de confirmer
                    votre commande.
                </div>
                <h5 class="ms-3">
                    Les conditions et la politique de confidentialité
                </h5>
                <!-- Conditions and privacy policy -->
                <div class="modal-body" style="max-height: 200px; overflow-y: auto;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi blanditiis culpa, debitis
                    dolor dolore ea eos exercitationem iure laboriosam mollitia officiis porro reprehenderit,
                    repudiandae sit, velit voluptas! Adipisci, provident?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, blanditiis corporis deleniti eum minus
                    modi molestiae, nam repellendus tempora ut vel voluptatum? Incidunt mollitia nostrum odio
                    repellendus vero vitae voluptatum?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad deserunt dignissimos dolore, doloribus
                    incidunt ipsa minus molestias! Aut autem consectetur exercitationem inventore maxime, provident quia
                    recusandae rerum sed sit tempore.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident quos sit temporibus velit?
                    Architecto eaque ipsum maxime molestiae. Consequuntur eveniet ipsa labore repellat saepe soluta
                    voluptates. At ea eos illum!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eos facere iusto minima nisi odio, qui
                    quo, recusandae veniam voluptas voluptatem voluptatibus? Adipisci doloremque ea facere, inventore
                    nam nostrum repellat!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias aspernatur ducimus exercitationem
                    maiores pariatur quaerat, recusandae temporibus totam! Accusantium alias dolores error illo ipsam
                    perspiciatis quibusdam quos repellendus sit!
                </div>

                <!-- Acceptance of Terms and Pricing Policy -->
                <div class="mt-3 ms-3">
                    <input type="checkbox" id="terms" name="terms" value="terms">
                    <label for="terms">J'accepte les conditions et la politique de confidentialité</label>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button class="btn btn-primary" id="confirmOrderButton">
                        Confirmer la commande
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
        // Show the confirmation modal when the "Place order" button is clicked
        $('#placeOrderButton').click(function () {
            $('#confirmationModal').modal('show');
        });

        // Handle the "Confirm Order" button in the confirmation modal
        $('#confirmOrderButton').click(function () {
            // Submit the form when the confirmation is confirmed
            $('#paymentForm2').submit();
        });

        // Disable the Confirm Order button initially
        $("#confirmOrderButton").prop("disabled", true);

        // Listen for changes in the checkbox state
        $("#terms").change(function () {
            // Enable the Confirm Order button if the checkbox is checked, disable it otherwise
            $("#confirmOrderButton").prop("disabled", !this.checked);
        });

        // Add an event listener for the Confirm Order button click (you can replace this with your actual logic)
        $("#confirmOrderButton").click(function () {
            // Your logic to handle the confirmation goes here
            // For example, you can close the modal or submit the form
            // For now, let's just log a message to the console
            console.log("Order confirmed!");
        });
    });
</script>
</body>
</html>
