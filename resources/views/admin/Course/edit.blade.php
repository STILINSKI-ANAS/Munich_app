@extends('layouts.admin')

@section('content')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <h4 class="accordion-header card-header">
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
                        <input id="field-1" type="text" name="level" value="{{$course->level }}" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="language">Language</label>
                        <div class="rbt-modern-select bg-transparent height-50 mb--10">
                            <select required name="language_id" class="w-100" data-live-search="true"
                                    title="{{$course->name}}" multiple data-size="7" data-actions-box="true"
                                    data-selected-text-format="count > 2" id="language_id" tabindex="null">
                                @foreach($languages as $language)
                                    <option name="language_id"
                                            value="{{ $language->id }}" {{ $course->language_id == $language->id ? 'selected' : '' }}>
                                        {{ $language->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="course-field mb--15">
                    <label for="regularPrice-1">Price (DH)</label>
                    <input required id="regularPrice-1" type="number" placeholder="$ Regular Price" name="price"
                           value="{{$course->price }}">
                    <small class="d-block mt_dec--5"><i class="feather-info"></i> The Course Price Includes Your Author
                        Fee.</small>
                </div>
                <!-- Max Placements -->
                <div class="course-field mb--15">
                    <label for="field-1">Nombre maximum de places: </label>
                    <input id="field-1" type="number" placeholder="Entrez le nombre maximum de places disponibles"
                           name="max_placements" required
                           value="{{$course->max_placements }}">
                    <small><i class="feather-info"></i> <b>Par exemple:</b> 100</small>
                </div>
                <div class="col-lg-12">
                    <div class="course-field mb--15">
                        <label for="whatLearn">Time</label>
                        <textarea required id="whatLearn" rows="5" placeholder="Add your course benefits here."
                                  name="time"> {{$course->time }}</textarea>
                        <small class="d-block mt_dec--5"><i class="feather-info"></i> Enter for per line.</small>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="course-field mb--15">
                        <label for="whatLearn">Overview</label>
                        <textarea required id="whatLearn" rows="5" placeholder="Add your course benefits here."
                                  name="overview">{{$course->overview }}</textarea>
                        <small class="d-block mt_dec--5"><i class="feather-info"></i> Enter for per line.</small>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="course-field mb--15">
                        <label for="description">Content</label>
                        <div id="content" name="content" class="quill-editor">{!! $course->content !!}</div>
                        <input type="hidden" name="content" id="hiddenContentInput" value="{{$course->content}}">
                    </div>
                </div>

                <!-- is hidden -->
                <div class="course-field mb--15">
                    <label>Hide Course:</label>
                    <input id="includeCourse" type="checkbox" name="is_hidden" {{ $course->is_hidden ? 'checked' : '' }}>
                    <label for="includeCourse" style="margin-bottom: 10px;">Hide</label>
                    <small style="margin-bottom: 10px;"><i class="feather-info"></i> Check to hide this course from users.</small>
                </div>

                <div class="course-field mb--20">
                    <h6>Course Thumbnail</h6>
                    <div class="rbt-create-course-thumbnail upload-area">
                        <div class="upload-area">
                            <div class="brows-file-wrapper" data-black-overlay="9">
                                <!-- actual upload which is hidden -->
                                <input id="createinputfile" type="file" class="inputfile" name="Image">
                                <img id="createfileImage" src="{{asset('./uploads/course/'.$course->image)}}"
                                     alt="file image">
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
    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
        // Content Quill editor
        var contentQuill = new Quill('#content', {
            theme: 'snow'
        });

        contentQuill.on('text-change', function () {
            var hiddenContentInput = document.getElementById('hiddenContentInput');
            hiddenContentInput.value = contentQuill.root.innerHTML;
        });
    </script>
@endsection
