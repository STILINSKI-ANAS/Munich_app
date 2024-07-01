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
                                    <div class="col-lg-12 text-right">
                                        <div class="btn-group mb-3" role="group">
                                            <div class="rbt-button-group justify-content-start mb-3">
                                                <a href="{{ route('admin.results.export') }}" class="rbt-btn btn-xs bg-primary-opacity radius-round" title="Exporter les résultats">
                                                    <i class="feather-download pl--0"></i> Exporter les résultats
                                                </a>
                                                <a href="{{ route('admin.results.downloadTemplate') }}" class="rbt-btn btn-xs bg-primary-opacity radius-round" title="Télécharger le modèle">
                                                    <i class="feather-download pl--0"></i> Télécharger le modèle
                                                </a>
                                            </div>
                                        </div>
                                        <form method="POST" action="{{ route('admin.results.import') }}" enctype="multipart/form-data" class=" col-12 d-inline-block">
                                            @csrf
                                            <div class="course-field mb-3">
                                                <h6>Importer les résultats</h6>
                                                <div class="rbt-create-course-thumbnail upload-area">
                                                    <div class="upload-area">
                                                        <div class="brows-file-wrapper" data-black-overlay="9">
                                                            <!-- actual upload which is hidden -->
                                                            <input name="file" id="inputGroupFile04" type="file" class="inputfile" accept=".xlsx, .xls" required>
                                                            <!-- our custom upload button -->
                                                            <label class="d-flex" for="inputGroupFile04" title="No File Chosen">
                                                                <i class="feather-upload"></i>
                                                                <span class="text-center">Choisir un fichier</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <small><i class="feather-info"></i> <b>Format supporté:</b> Excel (.xlsx, .xls)</small>
                                            </div>
                                            <div class="input-group-append">
                                                <button type="submit" class="rbt-btn btn-xs bg-primary-opacity radius-round"><i class="feather-upload pl--0"></i> Importer les résultats</button>
                                            </div>
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
                                        <td>
                                            @if($result->ecrit == 'passé')
                                                <span class="rbt-badge-5 bg-color-success-opacity color-success">Passé</span>
                                            @else
                                                <span class="rbt-badge-5 bg-color-danger-opacity color-danger">Échoué</span>
                                            @endif
                                        </td>
                                        <td>{{ $result->note_ecrit }}</td>
                                        <td>
                                            @if($result->orale == 'passé')
                                                <span class="rbt-badge-5 bg-color-success-opacity color-success">Passé</span>
                                            @else
                                                <span class="rbt-badge-5 bg-color-danger-opacity color-danger">Échoué</span>
                                            @endif
                                        </td>
                                        <td>{{ $result->note_orale }}</td>

                                        <td>
                                            @if($result->resultats == 'F')
                                                <span class="rbt-badge-5 bg-color-danger-opacity color-danger">F</span>
                                            @else
                                                <span class="rbt-badge-5 bg-color-success-opacity color-success">{{ $result->resultats }}</span>
                                            @endif
                                            </td>

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
