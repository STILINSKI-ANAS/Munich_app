@extends('layouts.admin')

@section('content')
    <main class="rbt-main-wrapper">
        <div class="container">
            <div class="section-title mt--40 mb--20">
                <h2 class="rbt-title-style-1">Résultats des Examens</h2>
            </div>

            <div class="col-lg-12">
                <!-- Start Results Management -->
                <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                    <div class="content">
                        <div class="section-title">
                            <h4 class="rbt-title-style-3">Gérer les résultats</h4>
                        </div>

                        <!-- Start Call To Action  -->
                        <div class="rbt-callto-action rbt-cta-default style-2">
                            <div class="content-wrapper overflow-hidden pt--30 pb--30 bg-color-primary-opacity">
                                <div class="row gy-5 align-items-end">
                                    <div class="col-lg-8">
                                        <div class="inner">
                                            <div class="content text-left">
                                                <h5 class="mb--5">Gérez les résultats des étudiants.</h5>
                                                <p class="b3">Voir, modifier et importer les résultats.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <a href="{{ route('admin.results.export') }}" class="btn btn-success">Exporter les résultats</a>
                                        <a href="{{ route('admin.results.downloadTemplate') }}" class="btn btn-secondary">Télécharger le modèle</a>
                                        <form method="POST" action="{{ route('admin.results.import') }}" enctype="multipart/form-data" class="d-inline-block">
                                            @csrf
                                            <input type="file" name="file" required>
                                            <button type="submit" class="btn btn-primary">Importer les résultats</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Call To Action  -->

                        <hr class="mt--30">

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
                        <div class="mt-3">
                            {{ $results->appends(request()->query())->links() }}
                        </div>
                    </div>
                </div>
                <!-- End Results Management -->
            </div>
        </div>
    </main>
@endsection
