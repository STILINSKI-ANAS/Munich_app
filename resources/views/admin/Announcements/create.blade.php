@extends('layouts.admin')

@section('content')

    <h4 class="card-title">
        <i class="feather-book-open"></i>
        Informations sur l'Annonce :
    </h4>
    <div class="card-body">
        <!-- Start Course Field Wrapper  -->
        <form action="{{ url('admin/Announcements') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="rbt-course-field-wrapper rbt-default-form row">
                <div class="course-field mb--15 col-lg-6">
                    <label for="field-1">Titre de l'Annonce :</label>
                    <input id="field-1" type="text" placeholder="Entrez le titre de l'annonce" name="titre">
                    <small><i class="feather-info"></i> <b>Par exemple:</b> AVIS ...</small>
                </div>
                <div class="course-field mb--20 col-lg-6">
                    <label for="field-4">Departement/Section :</label>
                    <div class="rbt-modern-select bg-transparent height-45 mb--10">
                        <select class="w-100" id="field-4" name="language_id">
                            @foreach($languages as $language)
                                <option value="{{ $language->id }}">{{ $language->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="course-field mb--15">
                        <label for="description">Description de l'Annonce :</label>
                        <textarea id="description" rows="10" placeholder="Ajouter les détails sur l'annonce ici" name="description"></textarea>
                    </div>
                </div>

                <div class="course-field mb--20">
                    <h6>Photo de L'Annonce</h6>
                    <div class="rbt-create-course-thumbnail upload-area">
                        <div class="upload-area">
                            <div class="brows-file-wrapper" data-black-overlay="9">
                                <!-- actual upload which is hidden -->
                                <input  id="createinputfile" type="file" class="inputfile" name="Image">
                                <img id="createfileImage" src="assets/images/others/thumbnail-placeholder.svg" alt="file image">
                                <!-- our custom upload button -->
                                <label class="d-flex" for="createinputfile" title="No File Chosen">
                                    <i class="feather-upload"></i>
                                    <small><i class="feather-info"></i> <b>Size:</b> 700x430 pixels, <b>Type de Fichiers Supporté:</b> JPG, JPEG, PNG</small>
                                </label>
                            </div>
                        </div>
                    </div>

                    <small><i class="feather-info"></i> <b>Size:</b> 700x430 pixels, <b>Type de Fichiers Supporté:</b> JPG, JPEG, PNG</small>
                </div>
            </div>
            <div class="form-group mb--0">
                <button class="rbt-btn rbt-switch-btn btn-gradient radius-round btn-sm" type="submit">
                    <span data-text="Ajouter">Ajouter</span>
                </button>
            </div>
        </form>

        <!-- End Course Field Wrapper  -->
    </div>

@endsection
