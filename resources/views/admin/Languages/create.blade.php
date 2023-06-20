@extends('layouts.admin')

@section('content')

            <h4 class="card-title" >
                <i class="feather-message-square"></i>
                Informations sur la Langue :
            </h4>
                <div class="card-body">
                    <!-- Start Course Field Wrapper  -->
                    <form action="{{ url('admin/Languages')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="rbt-course-field-wrapper rbt-default-form">
                            <div class="course-field mb--15">
                                <label for="field-1">Langue :</label>
                                <input id="field-1" type="text" placeholder="Entrez la langue" name="name">
                                <small><i class="feather-info"></i> <b>Par exemple:</b> Allemand, Anglais, Français</small>
                            </div>

                            <div class="course-field mb--15">
                                <label for="aboutCourse">Description</label>
                                <textarea id="aboutCourse" rows="10" name="description" placeholder="Ecrire une description de la langue"></textarea>
                                <small><i class="feather-info"></i> <b>Par exemple:</b>
                                        La langue allemande, également connue sous le nom d'allemand (Deutsch), est une langue germanique parlée par plus de 100 millions de personnes à
                                        travers le monde. C'est la langue officielle de l'Allemagne, de l'Autriche, du Liechtenstein, de la Suisse et du Luxembourg, ainsi que
                                        l'une des langues officielles de la Belgique et du Tyrol du Sud en Italie. De plus, elle est largement utilisée comme langue seconde
                                        dans de nombreux pays européens.</b>.
                                </small>
                            </div>
                            <div class="course-field mb--20">
                                <h6>Vignette de la langue</h6>
                                <input type="file" class="inputfile" name="Image" id="image">
                                <div class="rbt-create-course-thumbnail upload-area">
                                    <div class="upload-area">
                                        <div class="brows-file-wrapper" data-black-overlay="9">
                                            <!-- actual upload which is hidden -->
                                            <input id="createinputfile" type="file" class="inputfile" name="image">
                                            <img id="createfileImage" src="{{ asset('assets/images/others/thumbnail-placeholder.svg') }}" alt="file image">
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
                                <span data-text="Ajouter">Ajouter</span>
                            </button>
                        </div>
                    </form>

                    <!-- End Course Field Wrapper  -->
                </div>

@endsection
