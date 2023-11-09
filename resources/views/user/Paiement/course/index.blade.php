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
            <form id="paymentForm2" action="{{ url('/coursePaymentProcess') }}" method="POST" enctype="multipart/form-data">
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

                                    <div class="col-12 mb--20">
                                        <label>Email*</label>
                                        <input type="email" placeholder="Email Address" name="email"
                                               value="{{ $etudiant->user->email }}">
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

                                <h4 class="checkout-title">Cart Total</h4>

                                <div class="checkout-cart-total">
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

                                    <p>Sub Total <span>{{ $sub_total }}DH</span></p>
                                    <p>Tax <span>{{ $tax }}DH</span></p>

                                    <h4 class="mt--30">Total <span>{{ $total }}DH</span></h4>

                                    <button id="placeOrderButton" class="rbt-btn btn-gradient hover-icon-reverse"
                                            type="button">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Place order</span>
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
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" id="confirmOrderButton">
                        Confirm Order
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
    });
</script>
</body>
</html>