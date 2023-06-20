@extends('layouts.admin')

@section('content')

    <h4 class="card-title" >
        <i class="feather-book-open"></i>
        Informations sur le Cours :
    </h4>
    <div class="card-body">
        <!-- Start Course Field Wrapper  -->
        <form action="{{ url('admin/Course')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="rbt-course-field-wrapper rbt-default-form">
                <div class="course-field mb--15">
                    <label for="field-1">Cours :</label>
                    <input id="field-1" type="text" placeholder="Entrez le Cours/Niveau" name="name">
                    <small><i class="feather-info"></i> <b>Par exemple:</b>  cours business,cours privé,juniors/A1,B1,B2</small>
                </div>

                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="language">Language</label>
                        <div class="rbt-modern-select bg-transparent height-50 mb--10">
                            <div class="dropdown bootstrap-select show-tick w-100"><select class="w-100" data-live-search="true" title="English" multiple="" data-size="7" data-actions-box="true" data-selected-text-format="count > 2" id="language" tabindex="null">
                                    <option>English</option>
                                    <option>Bangla</option>
                                    <option>Japan</option>
                                    <option>Hindi</option>
                                    <option>Frence</option>
                                    <option>Garmani</option>
                                </select><button type="button" tabindex="-1" class="btn dropdown-toggle bs-placeholder btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-4" aria-haspopup="listbox" aria-expanded="false" title="English" data-id="language"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">English</div></div> </div></button><div class="dropdown-menu" style="overflow: hidden;"><div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-4" aria-autocomplete="list"></div><div class="bs-actionsbox"><div class="btn-group btn-group-sm"><button type="button" class="actions-btn bs-select-all btn btn-light">Select All</button><button type="button" class="actions-btn bs-deselect-all btn btn-light">Deselect All</button></div></div><div class="inner show" role="listbox" id="bs-select-4" tabindex="-1" aria-multiselectable="true" style="overflow-y: auto;"><ul class="dropdown-menu inner show" role="presentation" style="margin-top: 0px; margin-bottom: 0px;"><li><a role="option" class="dropdown-item" id="bs-select-4-0" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">English</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-4-1" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Bangla</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-4-2" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Japan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-4-3" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Hindi</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-4-4" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Frence</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-4-5" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Garmani</span></a></li></ul></div></div></div>
                        </div>
                    </div>
                </div>
                <div class="course-field mb--15">
                    <label for="regularPrice-1">Prix</label>
                    <input id="regularPrice-1" type="number" placeholder="Entrez le Prix">
                </div>
                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="whatLearn">Requirements</label>
                        <textarea id="whatLearn" rows="5" placeholder="Add your course benefits here."></textarea>
                        <small class="d-block mt_dec--5"><i class="feather-info"></i> Enter for per line.</small>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="description">Description</label>
                        <textarea id="description" rows="5" placeholder="Add your course benefits here."></textarea>
                        <small class="d-block mt_dec--5"><i class="feather-info"></i> Enter for per line.</small>
                    </div>
                </div>
                <div class="course-field mb--20">
                    <h6>Language Thumbnail</h6>
                    <div class="rbt-create-course-thumbnail upload-area">
                        <div class="upload-area">
                            <div class="brows-file-wrapper" data-black-overlay="9">
                                <!-- actual upload which is hidden -->
                                <input name="createinputfile" id="createinputfile" type="file" class="inputfile" name="image">
                                <img id="createfileImage" src="assets/images/others/thumbnail-placeholder.svg" alt="file image">
                                <!-- our custom upload button -->
                                <label class="d-flex" for="createinputfile" title="No File Choosen">
                                    <i class="feather-upload"></i>
                                    <span class="text-center">Choose a File</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <small><i class="feather-info"></i> <b>Size:</b> 700x430 pixels, <b>File
                            Support:</b> JPG, JPEG, PNG</small>
                </div>


            </div>
            <div class="form-group mb--0">
                <button class="rbt-btn rbt-switch-btn btn-gradient radius-round btn-sm" type="submit">
                    <span data-text="Submit Now">Submit Now</span>
                </button>
            </div>
        </form>

        <!-- End Course Field Wrapper  -->
    </div>

@endsection
