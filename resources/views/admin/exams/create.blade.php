@extends('layouts.admin')

@section('content')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <h4 class="card-title">
        <i class="feather-book-open"></i>
        Ajouter un nouvel examen :
    </h4>
    <div class="card-body">
        <!-- Start Exam Field Wrapper  -->
        <form action="{{ route('admin.exams.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="rbt-course-field-wrapper rbt-default-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="course-field mb--15">
                            <label for="title">Titre :</label>
                            <input id="title" type="text" placeholder="Entrez le titre de l'examen" name="title" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="course-field mb--15">
                            <label for="level">Niveau :</label>
                            <input id="level" type="text" placeholder="Entrez le niveau" name="level" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="course-field mb--15">
                            <label for="max_placements">Nombre maximum de places :</label>
                            <input id="max_placements" type="number" placeholder="Entrez le nombre maximum de places disponibles" name="max_placements" required>
                            <small><i class="feather-info"></i> <b>Par exemple :</b> 100</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="course-field mb--15">
                            <label for="start_date">Date de début :</label>
                            <input id="start_date" type="date" name="start_date" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="course-field mb--15">
                            <label for="end_date">Date de fin :</label>
                            <input id="end_date" type="date" name="end_date" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="course-field mb--15">
                            <label for="exam_date">Date de l'examen :</label>
                            <input id="exam_date" type="date" name="exam_date" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="course-field mb--15">
                            <label for="exam_center">Centre d'examen :</label>
                            <input id="exam_center" type="text" placeholder="Entrez le centre d'examen" name="exam_center" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="course-field mb--15">
                            <label for="exam_fee">Frais d'examen :</label>
                            <input id="exam_fee" type="number" placeholder="Entrez les frais d'examen" name="exam_fee" required>
                        </div>
                    </div>




                    <div class="course-field mb--20">
                        <label class="form-check-label d-inline-block" for="flexSwitchCheckDefault">Public
                            Est caché :</label>
                        <div class="form-check form-switch mb--10">
                            <input class="form-check-input" type="checkbox" role="switch"  id="is_hidden" name="is_hidden">
                        </div>
                        <small><i class="feather-info"></i> Vous pouvez cacher les examens jusqu'au moment où vous voulez les lancer.</small>
                    </div>

                    <div class="col-md-6">
                        <div class="course-field mb--15">
                            <label for="language_id">Langue</label>
                            <div class="rbt-modern-select bg-transparent height-50 mb--10">
                                <div class="dropdown bootstrap-select show-tick w-100">
                                    <select required name="language_id" class="w-100" data-live-search="true" title="Sélectionner ici" data-size="7" data-actions-box="true" data-selected-text-format="count > 2" id="language_id">
                                        @foreach($languages as $language)
                                            <option value="{{ $language->id }}">{{ $language->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="course-field mb--15">
                            <label for="course_id">Cours</label>
                            <div class="rbt-modern-select bg-transparent height-50 mb--10">
                                <div class="dropdown bootstrap-select show-tick w-100">
                                    <select required name="course_id" class="w-100" data-live-search="true" title="Sélectionner ici" data-size="7" data-actions-box="true" data-selected-text-format="count > 2" id="course_id">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="course-field mb--20">
                            <h6>Image de l'examen</h6>
                            <div class="rbt-create-course-thumbnail upload-area">
                                <div class="upload-area">
                                    <div class="brows-file-wrapper" data-black-overlay="9">
                                        <!-- actual upload which is hidden -->
                                        <input name="image" id="createinputfile" type="file" class="inputfile" required>
                                        <img id="createfileImage" src="{{ asset('assets/images/others/thumbnail-placeholder.svg') }}" alt="file image">
                                        <!-- our custom upload button -->
                                        <label class="d-flex" for="createinputfile" title="No File Choosen">
                                            <i class="feather-upload"></i>
                                            <span class="text-center">Choisir un fichier</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <small><i class="feather-info"></i> <b>Taille :</b> 700x430 pixels, <b>Formats supportés :</b> JPG, JPEG, PNG</small>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group mb--0">
                            <button class="rbt-btn rbt-switch-btn btn-gradient radius-round btn-sm" type="submit">
                                <span data-text="Créer maintenant">Créer maintenant</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Exam Field Wrapper  -->
    </div>
@endsection
