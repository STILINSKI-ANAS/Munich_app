@extends('layouts.admin')

@section('content')
    <main class="rbt-main-wrapper">
        <div class="container">
            <div class="section-title mt--40 mb--20">
                <h2 class="rbt-title-style-1">Examens</h2>
            </div>

            <div class="col-lg-12">
                <!-- Start Enrole Course  -->
                <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                    <div class="content">
                        <div class="section-title">
                            <h4 class="rbt-title-style-3">Gérer les examens</h4>
                        </div>

                        <!-- Start Call To Action  -->
                        <div class="rbt-callto-action rbt-cta-default style-2">
                            <div class="content-wrapper overflow-hidden pt--30 pb--30 bg-color-primary-opacity">
                                <div class="row gy-5 align-items-end">
                                    <div class="col-lg-8">
                                        <div class="inner">
                                            <div class="content text-left">
                                                <h5 class="mb--5">Créez un nouveau calendrier d'examen.</h5>
                                                <p class="b3">Ajoutez un nouvel examen à la liste.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="call-to-btn text-start text-lg-end position-relative">
                                            <a class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y" href="{{ url('admin/exams/create') }}">
                                                <span data-text="Ajouter un nouvel examen">Ajouter un nouvel examen</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Call To Action  -->

                        <!-- Start Filter -->
                        <form method="GET" action="{{ url('admin/exams') }}">
                            <div class="rbt-dashboard-filter-wrapper mt--60">
                                <div class="row g-5">
                                    <div class="col-lg-4">
                                        <div class="filter-select rbt-modern-select">
                                            <span class="select-label d-block">Niveaux</span>
                                            <div class="dropdown bootstrap-select show-tick w-100">
                                                <select class="w-100" name="levels[]" data-live-search="true" title="Tous les niveaux" multiple="" data-size="7" data-actions-box="true" data-selected-text-format="count > 2">
                                                    @foreach($levels as $level)
                                                        <option value="{{ $level->level }}" {{ in_array($level->level, request()->input('levels', [])) ? 'selected' : '' }}>{{ $level->level }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="filter-select rbt-modern-select">
                                            <span class="select-label d-block">Date de début</span>
                                            <input type="date" name="start_date" class="form-control" value="{{ request()->input('start_date') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="filter-select rbt-modern-select">
                                            <span class="select-label d-block">Date de fin</span>
                                            <input type="date" name="end_date" class="form-control" value="{{ request()->input('end_date') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="filter-select rbt-modern-select">
                                            <span class="select-label d-block">Places minimum</span>
                                            <input type="number" name="max_placements" class="form-control" value="{{ request()->input('max_placements') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 d-flex align-items-end">
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
                                    <th>Titre</th>
                                    <th>Niveau</th>
                                    <th>Places max</th>
                                    <th>Date de début</th>
                                    <th>Date de fin</th>
                                    <th>Date de l'examen</th>
                                    <th>Centre d'examen</th>
                                    <th>Frais d'examen</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($exams as $exam)
                                    <tr>
                                        <td>{{ $exam->title }}</td>
                                        <td>{{ $exam->level }}</td>
                                        <td>{{ $exam->max_placements }}</td>
                                        <td>{{ $exam->start_date }}</td>
                                        <td>{{ $exam->end_date }}</td>
                                        <td>{{ $exam->exam_date }}</td>
                                        <td>{{ $exam->exam_center }}</td>
                                        <td>{{ $exam->exam_fee }}</td>
                                        <td>
                                            <div class="rbt-button-group justify-content-end">
                                                <a class="rbt-btn-link left-icon" href="{{ url('admin/exams/' . $exam->id . '/edit') }}">
                                                    <i class="feather-edit"></i> Modifier
                                                </a>
                                                <form action="{{ url('admin/exams/' . $exam->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="rbt-btn-link left-icon" style="border: none; background: none; color: #dc3545;">
                                                        <i class="feather-trash-2"></i> Supprimer
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            {{ $exams->appends(request()->query())->links() }}
                        </div>
                    </div>
                </div>
                <!-- End Enrole Course  -->
            </div>
        </div>
    </main>
@endsection
