@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt--10 mb--20">
                    <div class="card-header">Votre paiement a échoué</div>

                    <div class="card-body">
                        <div class="alert alert-danger" role="alert">
                            Votre paiement a échoué. Veuillez réessayer plus tard.
                            Merci de votre compréhension.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
