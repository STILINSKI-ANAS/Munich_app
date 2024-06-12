@extends('layouts.user')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('registration.postStep1') }}">
            @csrf
            <div class="form-group">
                <label for="cin">CIN</label>
                <input type="text" class="form-control" id="cin" name="cin" required>
            </div>
            <button type="submit" class="btn btn-primary">Suivant</button>
        </form>
    </div>
@endsection
