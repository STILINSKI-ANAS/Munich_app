@extends('layouts.admin')

@section('content')

                <h4 class="card-title" >
                    <i class="feather-message-square"></i>
                    Informations sur la Langue :
                </h4>
                <div class="card-body">
                    <!-- Start Course Field Wrapper  -->
                    <form  enctype="multipart/form-data" action="{{ url('admin/Languages/'. $language->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="rbt-course-field-wrapper rbt-default-form">
                            <div class="course-field mb--15">
                                <label for="field-1">Langue :</label>
                                <input id="field-1" type="text" name="name" value="{{$language->name }}">
                            </div>

                            <div class="course-field mb--15">
                                <label for="aboutCourse">Description</label>
                                <textarea id="aboutCourse" rows="10" name="description" >{{ $language->description }}</textarea>
                            </div>

                            <div class="course-field mb--20">
                                <h6>Vignette de L'examen</h6>

                                <div class="rbt-create-course-thumbnail upload-area">
                                    <div class="upload-area">
                                        <div class="brows-file-wrapper" data-black-overlay="9">
                                            <!-- actual upload which is hidden -->
                                            <input id="createinputfile" type="file" class="inputfile" name="Image">
                                            <img id="createfileImage" src="{{ asset("uploads/Language/$language->image") }}" alt="file image">
                                            <!-- our custom upload button -->
                                            <label class="d-flex" for="createinputfile" title="No File Choosen">
                                                <i class="feather-upload"></i>
                                                <span class="text-center">Choisissez un fichier</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <small><i class="feather-info"></i> <b>Size:</b> 700x430 pixels, <b>Type de Fichiers Supporté:</b> JPG, JPEG, PNG</small>
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

@endsection
