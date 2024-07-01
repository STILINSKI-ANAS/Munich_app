@extends('layouts.admin')

@section('content')
    <main class="rbt-main-wrapper">
        <div class="container">
            <div class="section-title mt--40 mb--20">
                <h2 class="rbt-title-style-1">Convocations</h2>
            </div>

            <div class="col-lg-12">
                <!-- Start Convocations Management -->
                <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                    <div class="content">
                        <div class="section-title">
                            <h4 class="rbt-title-style-3">Gérer les convocations</h4>
                        </div>

                        <hr class="mt--30">

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
                                            <a href="{{ route('admin.convocations.download', $convocation->id) }}" class="btn btn-primary">Télécharger</a>
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
