@extends('layouts.admin')

@section('content')
    <main class="rbt-main-wrapper">
        <div class="container">
            <div class="section-title mt--40 mb--20">
                <h2 class="rbt-title-style-1">Paiements</h2>
            </div>

            <div class="col-lg-12">
                <!-- Start Enrole Course  -->
                <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                    <div class="content">
                        <div class="section-title">
                            <h4 class="rbt-title-style-3">Gérer les paiements</h4>
                        </div>

                        <!-- Start Call To Action  -->
                        <div class="rbt-callto-action rbt-cta-default style-2">
                            <div class="content-wrapper overflow-hidden pt--30 pb--30 bg-color-primary-opacity">
                                <div class="row gy-5 align-items-end">
                                    <div class="col-lg-8">
                                        <div class="inner">
                                            <div class="content text-left">
                                                <h5 class="mb--5">Gérez les paiements des étudiants.</h5>
                                                <p class="b3">Voir et vérifier les paiements existants.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Call To Action  -->

                        <!-- Start Filter -->
                        <form method="GET" action="{{ route('admin.payments.index') }}">
                            <div class="rbt-dashboard-filter-wrapper mt--60">
                                <div class="row g-5">
                                    <div class="col-lg-3">
                                        <div class="filter-select rbt-modern-select">
                                            <span class="select-label d-block">Statut de vérification</span>
                                            <select name="verified" class="form-control">
                                                <option value="">Tous</option>
                                                <option class="bg-success text-white" value="1" {{ request()->input('verified') === '1' ? 'selected' : '' }}>Vérifié</option>
                                                <option class="bg-danger text-white" value="0" {{ request()->input('verified') === '0' ? 'selected' : '' }}>Non vérifié</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 d-flex align-items-end">
                                        <button type="submit" class="rbt-btn btn btn-primary w-100">Filtrer</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- End Filter -->

                        <hr class="mt--30">

                        <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                            <table class="rbt-table table table-borderless">
                                <thead>
                                <tr>
                                    <th>Référence d'inscription</th>
                                    <th>Référence de paiement</th>
                                    <th>Date de paiement</th>
                                    <th>Statut de vérification</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($payments as $payment)
                                    <tr>
                                        <td>{{ $payment->registration->registration_reference }}</td>
                                        <td>{{ $payment->payment_reference }}</td>
                                        <td>{{ $payment->payment_date }}</td>
                                        <td>
                                            @if($payment->verified)
                                                <span class="badge bg-success text-white">Vérifié</span>
                                            @else
                                                <span class="badge bg-danger text-white">Non vérifié</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="rbt-button-group justify-content-end">
                                                <a class="rbt-btn-link left-icon" href="{{ route('admin.payments.show', $payment->id) }}">
                                                    <i class="feather-eye"></i> Voir
                                                </a>
                                                @if(!$payment->verified)
                                                    <form action="{{ route('admin.payments.verify', $payment->id) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        <button type="submit" class="rbt-btn-link left-icon" style="border: none; background: none; color: #28a745;">
                                                            <i class="feather-check"></i> Vérifier
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            {{ $payments->appends(request()->query())->links() }}
                        </div>
                    </div>
                </div>
                <!-- End Enrole Course  -->
            </div>
        </div>
    </main>
@endsection
