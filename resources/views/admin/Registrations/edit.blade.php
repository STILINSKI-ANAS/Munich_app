@extends('layouts.admin')

@section('content')
    <main class="rbt-main-wrapper">
        <div class="container">
            <div class="section-title mt--40 mb--20">
                <h2 class="rbt-title-style-1">Modifier l'inscription</h2>
            </div>
            <div class="col-lg-12">
                <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                    <div class="content">
                        <form action="{{ route('admin.registrations.update', $registration->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="course-field mb--15">
                                        <label for="first_name">Prénom :</label>
                                        <input id="first_name" type="text" name="first_name" value="{{ $registration->first_name }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="course-field mb--15">
                                        <label for="last_name">Nom :</label>
                                        <input id="last_name" type="text" name="last_name" value="{{ $registration->last_name }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="course-field mb--15">
                                        <label for="gender">Sexe :</label>
                                        <input id="gender" type="text" name="gender" value="{{ $registration->gender }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="course-field mb--15">
                                        <label for="birth_date">Date de naissance :</label>
                                        <input id="birth_date" type="date" name="birth_date" value="{{ $registration->birth_date }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="course-field mb--15">
                                        <label for="phone">Téléphone :</label>
                                        <input id="phone" type="text" name="phone" value="{{ $registration->phone }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="course-field mb--15">
                                        <label for="email">Email :</label>
                                        <input id="email" type="email" name="email" value="{{ $registration->email }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="course-field mb--15">
                                        <label for="birth_place">Lieu de naissance :</label>
                                        <input id="birth_place" type="text" name="birth_place" value="{{ $registration->birth_place }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="course-field mb--15">
                                        <label for="birth_country">Pays de naissance :</label>
                                        <input id="birth_country" type="text" name="birth_country" value="{{ $registration->birth_country }}" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="course-field mb--15">
                                        <label for="modules">Modules :</label>
                                        @php
                                            $modules = json_decode($registration->modules, true);
                                        @endphp
                                        <input id="modules" type="text" name="modules" value="{{ is_array($modules) ? implode(', ', $modules) : '' }}" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group mb--0">
                                        <button class="rbt-btn rbt-switch-btn btn-gradient radius-round btn-sm" type="submit">
                                            <span data-text="Modifier maintenant">Modifier maintenant</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Enrole Course  -->
            </div>
        </div>
    </main>
@endsection
