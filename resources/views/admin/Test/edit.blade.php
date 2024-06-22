@extends('layouts.admin')

@section('content')

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <h4 class="accordion-header card-header">Information sur le test</h4>
    <div class="card-body">
        <!-- Start Course Field Wrapper  -->
        <form action="{{ url('admin/Test/' . $test->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="rbt-course-field-wrapper rbt-default-form row">

                <!-- Nom du test -->
                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="test-name">Nom du Test</label>
                        <input id="test-name" type="text" name="name" value="{{ $test->name }}" placeholder="Entrez le nom du Test" required>
                    </div>
                </div>

                <!-- Niveau -->
                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="test-level">Niveau :</label>
                        <input id="test-level" type="text" name="level" value="{{ $test->level }}" required>
                    </div>
                </div>

                <!-- Nombre maximum de places -->
                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="max-placements">Nombre maximum de places :</label>
                        <input id="max-placements" type="number" name="max_placements" value="{{ $test->max_placements }}" placeholder="Entrez le nombre maximum de places disponibles" required>
                        <small><i class="feather-info"></i> <b>Par exemple :</b> 100</small>
                    </div>
                </div>

                <!-- Date de début -->
                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="start-date">Date de début :</label>
                        <input id="start-date" type="date" name="start_date" value="{{ $test->start_date }}" placeholder="Entrez la date de début">
                        <small><i class="feather-info"></i> <b>Par exemple :</b> 2021-01-01</small>
                    </div>
                </div>

                <!-- Date de fin -->
                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="end-date">Date de fin :</label>
                        <input id="end-date" type="date" name="end_date" value="{{ $test->end_date }}" placeholder="Entrez la date de fin">
                        <small><i class="feather-info"></i> <b>Par exemple :</b> 2021-01-01</small>
                    </div>
                </div>

                <!-- Langue -->
                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="language">Langue :</label>
                        <div class="rbt-modern-select bg-transparent height-50 mb--10">
                            <select id="language" name="language_id" class="w-100" data-live-search="true" multiple data-size="7" data-actions-box="true" data-selected-text-format="count > 2" required>
                                @foreach($languages as $language)
                                    <option value="{{ $language->id }}" {{ $test->language_id == $language->id ? 'selected' : '' }}>
                                        {{ $language->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Prix -->
                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="price">Prix (DH) :</label>
                        <input id="price" type="number" name="price" value="{{ $test->price }}" placeholder="Prix régulier" required>
                    </div>
                </div>

                <!-- Date et heure de l'examen -->
                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="exam-date-time">Date et heure de l'examen :</label>
                        <input id="exam-date-time" type="datetime-local" name="time" value="{{ $test->time }}" placeholder="Entrez la date et l'heure de l'examen" required>
                        <small class="d-block mt_dec--5"><i class="feather-info"></i> Exemple : Le Samedi 25 mai 2024 à 09:00H</small>
                    </div>
                </div>

                <!-- Vignette de la langue -->
                <div class="col-lg-12">
                    <div class="course-field mb--20">
                        <h6>Vignette de la langue</h6>
                        <div class="rbt-create-course-thumbnail upload-area">
                            <div class="upload-area">
                                <div class="brows-file-wrapper" data-black-overlay="9">
                                    <input id="createinputfile" type="file" class="inputfile" name="Image">
                                    <img id="createfileImage" src="{{ asset("uploads/Test/$test->Image") }}" alt="Image du fichier">
                                    <label class="d-flex" for="createinputfile" title="Aucun fichier choisi">
                                        <i class="feather-upload"></i>
                                        <span class="text-center">Choisissez un fichier</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <small><i class="feather-info"></i> <b>Taille :</b> 700x430 pixels, <b>Types de fichiers supportés :</b> JPG, JPEG, PNG</small>
                    </div>
                </div>

                <!-- Masquer le cours -->
                <div class="col-lg-12">
                    <div class="course-field mb--15">
                        <label for="hide-course">Masquer le cours :</label>
                        <input id="hide-course" type="checkbox" name="is_hidden" {{ $test->is_hidden ? 'checked' : '' }}>
                        <label for="hide-course" style="margin-bottom: 10px;">Masquer</label>
                        <small style="margin-bottom: 10px;"><i class="feather-info"></i> Cochez pour masquer ce cours aux utilisateurs.</small>
                    </div>
                </div>

                <!-- Cours inclus -->
                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="included-courses">Cours inclus :</label>
                        <div class="rbt-modern-select bg-transparent height-50 mb--10">
                            <select id="included-courses" name="course_id" class="w-100" data-live-search="true" multiple data-size="7" data-actions-box="true" data-selected-text-format="count > 2" required>
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}" {{ $test->course_id == $course->id ? 'selected' : '' }}>
                                        {{ $course->level }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="form-group mb--0">
                <button class="rbt-btn rbt-switch-btn btn-gradient radius-round btn-sm" type="submit">
                    <span data-text="Modifier">Modifier</span>
                </button>
            </div>
        </form>
        <!-- End Course Field Wrapper  -->
    </div>

    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
        // Content Quill editor
        var contentQuill = new Quill('#content', {
            theme: 'snow'
        });

        // Features Quill editor
        var featuresQuill = new Quill('#features', {
            theme: 'snow'
        });

        contentQuill.on('text-change', function () {
            var hiddenContentInput = document.getElementById('hiddenContentInput');
            hiddenContentInput.value = contentQuill.root.innerHTML;
        });

        featuresQuill.on('text-change', function () {
            var hiddenFeaturesInput = document.getElementById('hiddenFeaturesInput');
            hiddenFeaturesInput.value = featuresQuill.root.innerHTML;
        });
    </script>
@endsection
