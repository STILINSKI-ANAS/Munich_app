@extends('layouts.admin')

@section('content')
    <main class="rbt-main-wrapper">
        <div class="container">
            <div class="section-title mt--40 mb--20">
                <h2 class="rbt-title-style-1">Inscriptions</h2>
            </div>

            <div class="col-lg-12">
                <!-- Start Enrole Course  -->
                <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                    <div class="content">
                        <div class="section-title">
                            <h4 class="rbt-title-style-3">Gérer les inscriptions</h4>
                        </div>

                        <!-- Start Call To Action  -->
                        <div class="rbt-callto-action rbt-cta-default style-2">
                            <div class="content-wrapper overflow-hidden pt--30 pb--30 bg-color-primary-opacity">
                                <div class="row gy-5 align-items-end">
                                    <div class="col-lg-8">
                                        <div class="inner">
                                            <div class="content text-left">
                                                <h5 class="mb--5">Gérez les inscriptions des étudiants.</h5>
                                                <p class="b3">Voir et modifier les inscriptions existantes.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Call To Action  -->

                        <!-- Start Filter -->
                        <form method="GET" action="{{ route('admin.registrations.index') }}">
                            <div class="rbt-dashboard-filter-wrapper mt--60">
                                <div class="row g-5">
                                    <div class="col-lg-3">
                                        <div class="filter-select rbt-modern-select">
                                            <span class="select-label d-block">Nom</span>
                                            <input type="text" name="name" class="form-control" value="{{ request()->input('name') }}" placeholder="Nom">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="filter-select rbt-modern-select">
                                            <span class="select-label d-block">Titre de l'examen</span>
                                            <input type="text" name="exam_title" class="form-control" value="{{ request()->input('exam_title') }}" placeholder="Titre de l'examen">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="filter-select rbt-modern-select">
                                            <span class="select-label d-block">Date de l'examen</span>
                                            <input type="date" name="exam_date" class="form-control" value="{{ request()->input('exam_date') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="filter-select rbt-modern-select">
                                            <span class="select-label d-block">Vérification de l'email</span>
                                            <select name="email_verified" class="form-control">
                                                <option value="">Tous</option>
                                                <option value="1" {{ request()->input('email_verified') === '1' ? 'selected' : '' }}>Vérifié</option>
                                                <option value="0" {{ request()->input('email_verified') === '0' ? 'selected' : '' }}>Non vérifié</option>
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
                                    <th>Nom complet</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Examen</th>
                                    <th>Date de l'examen</th>
                                    <th>Modules</th>
                                    <th>Statut de vérification</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($registrations as $registration)
                                    <tr>
                                        <td>{{ $registration->first_name }} {{ $registration->last_name }}</td>
                                        <td>{{ $registration->email }}</td>
                                        <td>{{ $registration->phone }}</td>
                                        <td>{{ $registration->exam->title }} {{ $registration->exam->level }}</td>
                                        <td>{{ $registration->exam->exam_date }}</td>
                                        <td>{{ is_array(json_decode($registration->modules, true)) ? implode(', ', json_decode($registration->modules, true)) : $registration->modules }}</td>
                                        <td>
                                            @if($registration->email_verified)
                                                <span class="badge bg-success text-white">Vérifié</span>
                                            @else
                                                <span class="badge bg-danger text-white">Non vérifié</span>
                                            @endif
                                        </td>                                        <td>
                                            <div class="rbt-button-group justify-content-end">
                                                <a class="rbt-btn-link left-icon" href="{{ route('admin.registrations.edit', $registration->id) }}">
                                                    <i class="feather-edit"></i> Modifier
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            {{ $registrations->appends(request()->query())->links() }}
                        </div>
                    </div>
                </div>
                <!-- End Enrole Course  -->
            </div>
        </div>
    </main>
@endsection
