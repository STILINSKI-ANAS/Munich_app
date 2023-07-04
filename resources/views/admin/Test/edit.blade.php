@extends('layouts.admin')

@section('content')

    <h4 class="accordion-header card-header" >
        Course Info

    </h4>
    <div class="card-body">
        <!-- Start Course Field Wrapper  -->
        <form action="{{ url('admin/Test/'. $test->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="rbt-course-field-wrapper rbt-default-form   row">
                <div class="col-lg-6">

                    <div class="course-field mb--15">
                        <label for="field-1">Nom de Test</label>
                        <input id="field-1" type="text" value="{{$test->name }}" placeholder="Entrez le nom du Test" name="name" required>
                    </div>

                <div class="course-field mb--15">
                    <label for="field-1">Level :</label>
                    <input id="field-1" type="text" name="level" value="{{$test->level }}" required>
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="course-field mb--15">
                        <label for="language">Language</label>
                        <div class="rbt-modern-select bg-transparent height-50 mb--10">
                            <select required name="language_id" class="w-100" data-live-search="true" title="{{$test->name}}" multiple data-size="7" data-actions-box="true" data-selected-text-format="count > 2" id="language_id" tabindex="null">
                                @foreach($languages as $language)
                                    <option name="language_id" value="{{ $language->id }}" {{ $test->language_id == $language->id ? 'selected' : '' }}>
                                        {{ $language->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="course-field mb--15">
                    <label for="regularPrice-1">Price (DH)</label>
                    <input required id="regularPrice-1" type="number" placeholder="$ Regular Price" name="price" value="{{$test->price }}">
                    <small class="d-block mt_dec--5"><i class="feather-info"></i> The test Price Includes Your Author Fee.</small>
                </div>
                <div class="col-lg-12">
                    <div class="course-field mb--15">
                        <label for="whatLearn">Time</label>
                        <textarea required id="whatLearn" rows="5" placeholder="Add your test benefits here." name="time"> {{$test->time }}</textarea>
                        <small class="d-block mt_dec--5"><i class="feather-info"></i> Enter for per line.</small>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="course-field mb--15">
                        <label for="whatLearn">Overview</label>
                        <textarea required id="whatLearn" rows="5" placeholder="Add your course benefits here." name="overview">{{$test->overview }}</textarea>
                        <small class="d-block mt_dec--5"><i class="feather-info"></i> Enter for per line.</small>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="course-field mb--15">
                        <label for="description">Content</label>
                        <textarea required id="description" rows="5" placeholder="Add your course benefits here." name="content">{{$test->content }}</textarea>
                        <small class="d-block mt_dec--5"><i class="feather-info"></i> Enter for per line.</small>
                    </div>
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