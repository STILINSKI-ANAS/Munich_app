@extends('layouts.user')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('registration.postStep2') }}" enctype="multipart/form-data">
            @csrf
            <!-- Hidden input to include exam_id -->
            <input type="hidden" name="exam_id" value="{{ session('exam_id') }}">
            <!-- Form fields for user information -->
            <div class="form-group">
                <label for="first_name">Prénom</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Nom de famille</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="gender">Sexe</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="birth_date">Date de naissance</label>
                <input type="date" class="form-control" id="birth_date" name="birth_date" required>
            </div>
            <div class="form-group">
                <label for="phone">Numéro de téléphone</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="birth_place">Lieu de naissance</label>
                <input type="text" class="form-control" id="birth_place" name="birth_place" required>
            </div>
            <div class="form-group">
                <label for="birth_country">Pays de naissance</label>
                <input type="text" class="form-control" id="birth_country" name="birth_country" required>
            </div>
            <div class="form-group">
                <label for="modules">Modules</label>
                <div>
                    <label><input type="checkbox" name="modules[]" value="Written"> Écrit</label>
                    <label><input type="checkbox" name="modules[]" value="Oral"> Oral</label>
                </div>
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo" required>
            </div>
            <div class="form-group">
                <label for="cin_document">Document CIN</label>
                <input type="file" class="form-control" id="cin_document" name="cin_document" required>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
    </div>
@endsection
