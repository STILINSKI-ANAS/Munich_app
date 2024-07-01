@extends('layouts.user')

@section('content')
    <main class="rbt-main-wrapper">
        <div class="rbt-page-banner-wrapper">
            <div class="rbt-banner-image"></div>
            <div class="rbt-banner-content">
                <div class="rbt-banner-content-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="page-list">
                                    <li class="rbt-breadcrumb-item"><a href="{{ route('root') }}">Accueil</a></li>
                                    <li>
                                        <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                    </li>
                                    <li class="rbt-breadcrumb-item active">Résultats</li>
                                </ul>
                                <div class="title-wrapper">
                                    <h1 class="title mb--0">Vos Résultats</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rbt-section-overlayping-top rbt-section-gapBottom">
            <div class="inner">
                <div class="container">
                    <div class="row justify-content-left">
                        <div class="col-lg-12">
                            <div class="rbt-card shadow-sm">
                                <div class="rbt-card-header text-white">
                                    <h3 class="title mb--30">Résultats</h3>
                                </div>
                                <div class="rbt-card-body">
                                    @if ($results->isEmpty())
                                        <p>Aucun résultat trouvé pour ce CIN.</p>
                                    @else
                                        <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                                            <table class="rbt-table table table-borderless">
                                                <thead>
                                                <tr>
                                                    <th>Nom complet</th>
                                                    <th>Examen</th>
                                                    <th>Écrit</th>
                                                    <th>Note Écrit</th>
                                                    <th>Orale</th>
                                                    <th>Note Orale</th>
                                                    <th>Résultats</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($results as $result)
                                                    <tr>
                                                        <td>{{ $result->convocation->registration->first_name }} {{ $result->convocation->registration->last_name }}</td>
                                                        <td>{{ $result->convocation->exam->title }} {{ $result->convocation->exam->level }}</td>
                                                        <td>{{ $result->ecrit }}</td>
                                                        <td>{{ $result->note_ecrit }}</td>
                                                        <td>{{ $result->orale }}</td>
                                                        <td>{{ $result->note_orale }}</td>
                                                        <td>{{ $result->resultats }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
