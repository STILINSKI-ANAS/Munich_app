{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title>Welcome</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h1>payementProcess</h1>--}}
{{--<h1>order number: {{ $etudTestId }}</h1>--}}
{{--<h1>amount: {{ $amount }}</h1>--}}
{{--<labela>nom: </labela>--}}
{{--<input type="text" name="nom" placeholder="question supplémentaire 1" value="{{ $nom }}">--}}
{{--<labela>prenom: </labela>--}}
{{--<input type="text" name="prenom" placeholder="question supplémentaire 1" value="{{ $prenom }}">--}}
{{--<p>Today is {{ date('Y-m-d') }}</p>--}}

{{--<form method="POST" action="{{ route('payementProcess') }}" enctype="multipart/form-data">--}}
{{--    @csrf--}}
{{--    <div>--}}
{{--        <labela>methode</labela>--}}
{{--        <input type="text" name="methode" placeholder="question supplémentaire 1" required>--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        <labela>tel</labela>--}}
{{--        <input type="text" name="tel" placeholder="question supplémentaire 1" required>--}}

{{--    </div>--}}
{{--    <input type="text" name="EtudId" required value="{{$EtudId}}" hidden>--}}
{{--    <button class="rbt-btn btn-gradient icon-hover w-100 d-block text-center mt--15" type="submit">--}}
{{--        <span class="btn-text">S'inscrire</span>--}}
{{--    </button>--}}
{{--</form>--}}
{{--</body>--}}
{{--</html>--}}
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
            <form id="paymentForm" method="POST" action="{{ route('payementProcess') }}" enctype="multipart/form-data">
                @csrf
                <div class="row g-5 checkout-form">
                    <div class="col-lg-7">
                        <div class="checkout-content-wrapper">
                            <div class="alert alert-warning" role="alert">
                                S'il vous assurez-vous que votre Prénom, Nom et Email sont corrects.
                            </div>
                            <!-- Billing Address -->
                            <div id="billing-form">
                                <h4 class="checkout-title mt--5">Billing Address</h4>
                                <div class="row">
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>First Name*</label>
                                        <input type="text" placeholder="Prénom" name="prenom"
                                               value="{{ $etudiant->prenom }}">
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Last Name*</label>
                                        <input type="text" placeholder="Nom" name="nom" value="{{ $etudiant->nom }}">
                                    </div>

                                    <div class="col-12 mb--20">
                                        <label>Email Address*</label>
                                        <input type="email" placeholder="Email Address" name="email"
                                               value="{{ $etudiant->user->email }}">
                                    </div>

                                    <!-- Hidden inputs for: EtudId, EtudTestId, amount -->
                                    <input type="text" name="EtudId" required value="{{ $etudiant->id }}" hidden>
                                    <input type="text" name="EtudTestId" required value="{{ $etudTestId }}" hidden>
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
                                    <h4>Test <span>Total</span></h4>
                                    <ul>
                                        <li>{{ $test->name }} <span>{{ $test->price }}DH</span></li>
                                    </ul>

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
                    Êtes-vous sûr de vouloir passer cette commande ?
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
            $('#paymentForm').submit();
        });
    });
</script>
</body>
</html>
