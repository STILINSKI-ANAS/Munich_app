<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
@extends('layouts.admin')

@section('content')
    <h4 class="card-title">
        <i class="feather-book-open"></i>
        Informations sur le Cours :
    </h4>
    <div class="card-body">
        <!-- Start Course Field Wrapper  -->
        <form method="POST" action="{{ url('admin/Test')}}" enctype="multipart/form-data">
            @csrf
            <div class="rbt-course-field-wrapper rbt-default-form">
                <div class="course-field mb--15">
                    <label for="field-1">Nom de Test</label>
                    <input id="field-1" type="text" placeholder="Entrez le nom du Test" name="name" required>
                </div>

                <div class="course-field mb--15">
                    <label for="field-1">Niveau de Test :</label>
                    <input id="field-1" type="text" placeholder="Entrez le Cours/Niveau" name="level" required>
                    <small><i class="feather-info"></i> <b>Par exemple:</b> cours business,cours privé,juniors/A1,B1,B2</small>
                </div>

                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="language">Language</label>
                        <div class="rbt-modern-select bg-transparent height-50 mb--10">
                            <div class="dropdown bootstrap-select show-tick w-100">
                                <select name="language_id" class="w-100" data-live-search="true"
                                        title="Selecter ici" multiple="" data-size="7" data-actions-box="true"
                                        data-selected-text-format="count > 2" id="language_id" tabindex="null">
                                    @foreach($languages as $language)
                                        <option name="language_id"
                                                value="{{ $language->id }}">{{$language->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="course-field mb--15">
                        <label for="regularPrice-1">Prix</label>
                        <input id="regularPrice-1" type="number" placeholder="Entrez le Prix" name="price" required>
                    </div>
                    <div class="col-lg-6">
                        <div class="course-field mb--15">
                            <label for="whatLearn">Time</label>
                            <textarea id="time" name="time" required rows="5"
                                      placeholder="Add your course benefits here."></textarea>
                            <small class="d-block mt_dec--5"><i class="feather-info"></i> Enter for per line.</small>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="course-field mb--15">
                            <label for="whatLearn">Overview</label>
                            <textarea id="overview" name="overview" required rows="5"
                                      placeholder="Add your course benefits here."></textarea>
                            <small class="d-block mt_dec--5"><i class="feather-info"></i> Enter for per line.</small>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="course-field mb--15">
                            <label for="description">Content</label>
                            <textarea id="content" required name="content" rows="5"
                                      placeholder="Add your course benefits here."></textarea>
                            <small class="d-block mt_dec--5"><i class="feather-info"></i> Enter for per line.</small>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="course-field mb--15">
                            <label for="description">Features (separated by commas):</label>
                            <textarea required id="description" rows="5" placeholder="Add The test Features here"
                                      name="features"></textarea>
                            <small class="d-block mt_dec--5"><i class="feather-info"></i> Enter for per line.</small>
                        </div>
                    </div>
                    <div class="course-field mb--20">
                        <h6>Vignette de l'examen</h6>
                        <div class="rbt-create-course-thumbnail upload-area">
                            <div class="upload-area">
                                <div class="brows-file-wrapper" data-black-overlay="9">
                                    <!-- actual upload which is hidden -->
                                    <input id="createinputfile" type="file" class="inputfile" name="Image">
                                    <img id="createfileImage"
                                         src="{{ asset('assets/images/others/thumbnail-placeholder.svg') }}"
                                         alt="file image">
                                    <!-- our custom upload button -->
                                    <label class="d-flex" for="createinputfile" title="">
                                        <i class="feather-upload"></i>
                                        <span class="text-center">Choisissez un fichier</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <small><i class="feather-info"></i> <b>Size:</b> 700x430 pixels, <b>Type de Fichiers
                                Supporté:</b> JPG, JPEG, PNG</small>
                    </div>
                    <div class="col-lg-6">
                        <div class="course-field mb--15">
                            <input id="includeCourse" type="checkbox" name="include_course">
                            <label for="includeCourse">Inclure un cours :</label>
                        </div>

                        <div class="course-field mb--15 toggleable-course-field" style="display: none;">
                            <label for="language">Ajouter Cours inclue</label>
                            <div class="rbt-modern-select bg-transparent height-50 mb--10">
                                <div class="dropdown bootstrap-select show-tick w-100">
                                    <select name="course_id" class="w-100" data-live-search="true"
                                            title="Selecter ici" data-actions-box="false" id="course_id">
                                        @foreach($courses as $course)
                                            <option name="course_id" value="{{ $course->id }}">
                                                {{$course->level}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group mb--0">
                    <button class="rbt-btn rbt-switch-btn btn-gradient radius-round btn-sm" type="submit">
                        <span data-text="Submit Now">Submit Now</span>
                    </button>
                </div>
            </div>
        </form>
        <!-- End Course Field Wrapper  -->
    </div>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const includeCourseCheckbox = document.getElementById("includeCourse");
        const toggleableCourseField = document.querySelector(".toggleable-course-field");

        includeCourseCheckbox.addEventListener("change", function () {
            toggleableCourseField.style.display = this.checked ? "block" : "none";
        });
    });
</script>
</body>
</html>
