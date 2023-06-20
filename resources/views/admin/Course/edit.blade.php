@extends('layouts.admin')

@section('content')

    <h4 class="accordion-header card-header" >
        Course Info

    </h4>
    <div class="card-body">
        <!-- Start Course Field Wrapper  -->
        <form action="{{ url('admin/Course/'. $course->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="rbt-course-field-wrapper rbt-default-form   row">
                <div class="col-lg-6">

                <div class="course-field mb--15">
                    <label for="field-1">Level :</label>
                    <input id="field-1" type="text" name="level" value="{{$course->level }}">
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="language">Language</label>
                        <div class="rbt-modern-select bg-transparent height-50 mb--10">
                            <select class="w-100" data-live-search="true" title="English" multiple data-size="7" data-actions-box="true" data-selected-text-format="count > 2" id="language">
                                <option>English</option>
                                <option>Bangla</option>
                                <option>Japan</option>
                                <option>Hindi</option>
                                <option>Frence</option>
                                <option>Garmani</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="course-field mb--15">
                    <label for="regularPrice-1">Price (DH)</label>
                    <input id="regularPrice-1" type="number" placeholder="$ Regular Price" name="price" value="{{$course->price }}">
                    <small class="d-block mt_dec--5"><i class="feather-info"></i> The Course Price Includes Your Author Fee.</small>
                </div>
                <div class="col-lg-12">
                    <div class="course-field mb--15">
                        <label for="whatLearn">Time</label>
                        <textarea id="whatLearn" rows="5" placeholder="Add your course benefits here." name="time"> {{$course->time }}</textarea>
                        <small class="d-block mt_dec--5"><i class="feather-info"></i> Enter for per line.</small>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="course-field mb--15">
                        <label for="whatLearn">Overview</label>
                        <textarea id="whatLearn" rows="5" placeholder="Add your course benefits here." name="overview">{{$course->overview }}</textarea>
                        <small class="d-block mt_dec--5"><i class="feather-info"></i> Enter for per line.</small>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="course-field mb--15">
                        <label for="description">Content</label>
                        <textarea id="description" rows="5" placeholder="Add your course benefits here." name="content">{{$course->content }}</textarea>
                        <small class="d-block mt_dec--5"><i class="feather-info"></i> Enter for per line.</small>
                    </div>
                </div>
                <div class="course-field mb--20">
                    <h6>Course Thumbnail</h6>
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
