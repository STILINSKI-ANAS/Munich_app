@extends('layouts.admin')

@section('content')
    <main class="rbt-main-wrapper">
        <div class="container">





            <div class="col-lg-12">
                <!-- Start Convocations Management -->
                <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                    <div class="content">
                        <div class="section-title">
                            <h4 class="rbt-title-style-3">Gérer les convocations</h4>
                        </div>

                        <!-- Start Call To Action  -->
                        <div class="rbt-callto-action rbt-cta-default style-2">
                            <div class="content-wrapper overflow-hidden pt--30 pb--30 bg-color-primary-opacity">
                                <div class="row gy-5 align-items-end">
                                    <div class="col-lg-8">
                                        <div class="inner">
                                            <div class="content text-left">
                                                <h5 class="mb--5">Gérez les convocations des étudiants.</h5>
                                                <p class="b3">Voir et vérifier les convocations existants.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Call To Action  -->

                        <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                            <table class="rbt-table table table-borderless">
                                <thead>
                                <tr>
                                    <th>Nom complet</th>
                                    <th>Examen</th>
                                    <th>Date de l'examen</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($convocations as $convocation)
                                    <tr>
                                        <td>{{ $convocation->registration->first_name }} {{ $convocation->registration->last_name }}</td>
                                        <td>{{ $convocation->exam->title }} {{ $convocation->exam->level }}</td>
                                        <td>{{ \Carbon\Carbon::parse($convocation->exam->exam_date)->format('d/m/Y') }}</td>
                                        <td>
                                            <div class="rbt-button-group justify-content-start">
                                                <a href="{{ route('admin.convocations.download', $convocation->id) }}" class="rbt-btn btn-xs bg-primary-opacity radius-round" title="Télécharger"><i class="feather-download pl--0"></i>
                                                    Télécharger</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            {{ $convocations->links() }}
                        </div>
                    </div>
                </div>
                <!-- End Convocations Management -->
            </div>
        </div>
    </main>
@endsection
