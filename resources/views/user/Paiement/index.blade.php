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

@extends('layouts.user')

@section('content')
    <div class="checkout_area bg-color-white rbt-section-gap">
        <div class="container">
            <h1>Paiement</h1>
            <form method="POST" action="{{ route('payementProcess') }}" enctype="multipart/form-data">
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
                                        <input type="text" placeholder="Prénom" value="{{ $etudiant->prenom }}">
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Last Name*</label>
                                        <input type="text" placeholder="Nom" value="{{ $etudiant->nom }}">
                                    </div>

                                    <div class="col-12 mb--20">
                                        <label>Email Address*</label>
                                        <input type="email" placeholder="Email Address"
                                               value="{{ $etudiant->user->email }}">
                                    </div>
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

                                    <div class="plceholder-button mt--50">
                                        <button class="rbt-btn btn-gradient hover-icon-reverse" type="submit">
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
                </div>
            </form>
        </div>
    </div>
@endsection
