@extends('layouts.admin')

@section('content')
    <main class="rbt-main-wrapper">
        <div class="container">
            <div class="section-title mt--40 mb--20">
                <h2 class="rbt-title-style-1">Détails du paiement</h2>
            </div>

            <div class="col-lg-12">
                <!-- Start Enrole Course  -->
                <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                    <div class="content">
                        <div class="section-title">
                            <h4 class="rbt-title-style-3">Détails du paiement</h4>
                        </div>

                        <div class="row mb--20">
                            <div class="col-md-6">
                                <div class="course-field mb--15">
                                    <label for="registration_reference">Référence d'inscription :</label>
                                    <input id="registration_reference" type="text" class="form-control" value="{{ $payment->registration->registration_reference }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="course-field mb--15">
                                    <label for="payment_reference">Référence de paiement :</label>
                                    <input id="payment_reference" type="text" class="form-control" value="{{ $payment->payment_reference }}" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row mb--20">
                            <div class="col-md-6">
                                <div class="course-field mb--15">
                                    <label for="payment_date">Date de paiement :</label>
                                    <input id="payment_date" type="date" class="form-control" value="{{ $payment->payment_date }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="course-field mb--15">
                                    <label for="payment_receipt">Reçu de paiement :</label>
                                    <a href="{{ asset('storage/' . $payment->payment_receipt) }}" target="_blank" class="btn btn-info w-100">Voir le reçu</a>
                                </div>
                            </div>
                        </div>

                        <div class="row mb--20">
                            <div class="col-md-6">
                                <div class="course-field mb--15">
                                    <label for="exam_title">Examen :</label>
                                    <input id="exam_title" type="text" class="form-control" value="{{ $payment->registration->exam->title }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="course-field mb--15">
                                    <label for="exam_date">Date de l'examen :</label>
                                    <input id="exam_date" type="text" class="form-control" value="{{ $payment->registration->exam->exam_date }}" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row mb--20">
                            <div class="col-md-12">
                                <div class="course-field mb--15">
                                    <label for="modules">Modules :</label>
                                    <input id="modules" type="text" class="form-control" value="{{ is_array(json_decode($payment->registration->modules, true)) ? implode(', ', json_decode($payment->registration->modules, true)) : $payment->registration->modules }}" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row mb--20">
                            <div class="col-md-12">
                                <div class="form-group mb--0">
                                    @if(!$payment->verified)
                                        <form action="{{ route('admin.payments.verify', $payment->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="rbt-btn btn-primary">Vérifier le paiement</button>
                                        </form>
                                    @else
                                        <span class="badge bg-success text-white">Paiement vérifié</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Enrole Course  -->
            </div>
        </div>
    </main>
@endsection
