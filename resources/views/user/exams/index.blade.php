@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($exams as $exam)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $exam->title }}</h5>
                            <p class="card-text">{{ $exam->description }}</p>
                            <form method="GET" action="{{ route('registration.step1') }}">
                                @csrf
                                <input type="hidden" name="exam_id" value="{{ $exam->id }}">
                                <button type="submit" class="btn btn-primary">S'inscrire</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
