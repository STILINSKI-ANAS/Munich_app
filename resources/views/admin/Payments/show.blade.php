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
                                    <label>Référence d'inscription :</label>
                                    <p>{{ $payment->registration->cin }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="course-field mb--15">
                                    <label>Référence de paiement :</label>
                                    <p>{{ $payment->payment_reference }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row mb--20">
                            <div class="col-md-6">
                                <div class="course-field mb--15">
                                    <label>Date de paiement :</label>
                                    <p>{{ $payment->payment_date }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="course-field mb--15">
                                    <label>Reçu de paiement :</label>
                                    <a href="{{ route('admin.payments.receipt', $payment->id) }}" target="_blank" class="btn btn-info w-100">Voir le reçu</a>
                                </div>
                            </div>
                        </div>

                        <div class="row mb--20">
                            <div class="col-md-6">
                                <div class="course-field mb--15">
                                    <label>Examen :</label>
                                    <p>{{ $payment->registration->exam->title }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="course-field mb--15">
                                    <label>Date de l'examen :</label>
                                    <p>{{ $payment->registration->exam->exam_date }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row mb--20">
                            <div class="col-md-12">
                                <div class="course-field mb--15">
                                    <label>Modules :</label>
                                    <p>{{ is_array(json_decode($payment->registration->modules, true)) ? implode(', ', json_decode($payment->registration->modules, true)) : $payment->registration->modules }}</p>
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
