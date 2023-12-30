@extends('layouts.admin')

@section('content')
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb--60">
        <div class="content">
            <div class="section-title">
                <h3 class="rbt-title-style-3">Dashboard</h3>
            </div>
            <div class="row g-5">

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-primary-opacity">
                        <div class="inner">
                            <div class="rbt-round-icon bg-primary-opacity">
                                <i class="feather-book-open"></i>
                            </div>
                            <div class="content">
                                <h3 class="counter without-icon color-primary"><span class="odometer"
                                                                                     data-count="{{$totalCourses}}">00</span>
                                    <span class="rbt-title-style-2 d-block">TOTAL COURSES</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-secondary-opacity">
                        <div class="inner">
                            <div class="rbt-round-icon bg-primary-opacity">
                                <i class="feather-clipboard"></i>
                            </div>
                            <div class="content">
                                <h3 class="counter without-icon color-primary"><span class="odometer"
                                                                                     data-count="{{$totalExams}}">00</span>
                                    <span class="rbt-title-style-2 d-block">TOTAL EXAMS</span>
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-violet-opacity">
                        <div class="inner">
                            <div class="rbt-round-icon bg-violet-opacity">
                                <i class="feather-dollar-sign"></i>
                            </div>
                            <div class="content">
                                <h3 class="counter without-icon color-violet"><span class="odometer"
                                                                                    data-count="{{$pendingEarnings}}">00</span>
                                </h3>
                                <span class="rbt-title-style-2 d-block">pending Earnings</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-pink-opacity">
                        <div class="inner">
                            <div class="rbt-round-icon bg-pink-opacity">
                                <i class="feather-users"></i>
                            </div>
                            <div class="content">
                                <h3 class="counter without-icon color-pink"><span class="odometer"
                                                                                  data-count="{{$totalStudents}}">00</span>
                                </h3>
                                <span class="rbt-title-style-2 d-block">Total Students</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-coral-opacity">
                        <div class="inner">
                            <div class="rbt-round-icon bg-coral-opacity">
                                <i class="feather-user"></i>
                            </div>
                            <div class="content">
                                <h3 class="counter without-icon color-coral"><span class="odometer"
                                                                                   data-count="{{$totalUsers}}">00</span>
                                </h3>
                                <span class="rbt-title-style-2 d-block">Total users</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-warning-opacity">
                        <div class="inner">
                            <div class="rbt-round-icon bg-warning-opacity">
                                <i class="feather-dollar-sign"></i>
                            </div>
                            <div class="content">
                                <h3 class="counter color-warning"><span class="odometer"
                                                                        data-count="{{$totalEarnings}}">00</span></h3>
                                <span class="rbt-title-style-2 d-block">Total Earnings</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

            </div>
        </div>
    </div>
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb--60">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4 class="rbt-title-style-3">My Courses</h4>
                    </div>
                </div>
            </div>
            <div class="row gy-5">
                <div class="col-lg-12">
                    <!-- Courses Table -->
                    <div class="rbt-dashboard-table table-responsive">
                        <table class="rbt-table table table-borderless">
                            <thead>
                            <tr>
                                <th>Course Name</th>
                                <th>Enrolled</th>
                                <th>Earnings</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <th><a href="#">{{ $course->level }}</a></th>
                                    <td>{{ $course->enrolled_students_count }}</td>
                                    <td>{{ $course->earnings }} Dh</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="load-more-btn text-center">
                        <a class="rbt-btn-link" href="{{ url('/admin/Course') }}">Browse All Courses<i
                                class="feather-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb--60">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4 class="rbt-title-style-3">My Exams</h4>
                    </div>
                </div>
            </div>
            <div class="row gy-5">
                <div class="col-lg-12">
                    <!-- Exams Table -->
                    <div class="rbt-dashboard-table table-responsive">
                        <table class="rbt-table table table-borderless">
                            <thead>
                            <tr>
                                <th>Exam Name</th>
                                <th>Enrolled</th>
                                <th>Earnings</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($exams as $exam)
                                <tr>
                                    <th><a href="#">{{ $exam->name }}</a></th>
                                    <td>{{ $exam->enrolled_students_count }}</td>
                                    <td>{{ $exam->earnings }} Dh</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="load-more-btn text-center">
                        <a class="rbt-btn-link" href="{{ url('/admin/Test') }}">Browse All Tests<i
                                class="feather-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
