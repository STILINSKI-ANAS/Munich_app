@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt--10 mb--20">
                    <div class="card-header">Votre paiement a réussi</div>

                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            Vérifiez votre boîte e-mail pour les informations de paiement. Merci pour votre confiance.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
