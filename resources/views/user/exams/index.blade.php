

@extends('layouts.user')

@section('content')

    @php
        \Carbon\Carbon::setLocale('fr');
    @endphp
    <main class="rbt-main-wrapper">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="rbt-page-banner-wrapper">
            <div class="rbt-banner-image"></div>
            <div class="rbt-banner-content">
                <!-- Start Banner Content Top  -->
                <div class="rbt-banner-content-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Start Breadcrumb Area  -->
                                <ul class="page-list">
                                    <li class="rbt-breadcrumb-item"><a href="index.html">Accueil</a></li>
                                    <li>
                                        <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                    </li>
                                    <li class="rbt-breadcrumb-item active">Preinscription</li>
                                </ul>
                                <!-- End Breadcrumb Area  -->

                                <div class=" title-wrapper">
                                    <h1 class="title mb--0">Veuillez bien choisir un examen</h1>
                                </div>


                                <a href="#" class="rbt-badge-2">
                                    L'inscription peut être  <strong>arrêtée avant la date limite dès qu'il n'y a plus de places disponibles.</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Banner Content Top  -->
                <div class="rbt-course-top-wrapper mt--40">
                    <div class="container">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-12 mt--60">
                                <ul class="rbt-portfolio-filter filter-tab-button justify-content-start nav nav-tabs" id="rbt-myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">
                                            <span class="filter-text">Tous les cours</span>
                                            <span class="course-number">{{ $exams->count() }}</span>
                                        </button>
                                    </li>
                                    @foreach($levels as $level)
                                        <li class="nav-item" role="presentation">
                                            <button id="level-{{ $loop->index }}-tab" data-bs-toggle="tab" data-bs-target="#level-{{ $loop->index }}" type="button" role="tab" aria-controls="level-{{ $loop->index }}" aria-selected="false">
                                                <span class="filter-text">TELC {{ $level->level }}</span>
                                                <span class="course-number">{{ $level->total }}</span>
                                            </button>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rbt-section-overlayping-top rbt-section-gapBottom">
            <div class="inner">
                <div class="container">
                    <div class="tab-content" id="rbt-myTabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                            <div class="rbt-course-grid-column">
                                @foreach($exams as $exam)
                                    <div class="course-grid-3">
                                        <div class="rbt-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('/uploads/Test/' . $exam->image) }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h4 class="rbt-card-title pb--10">{{ $exam->title }} | <span>{{ $exam->level }}</span></h4>
                                                <ul class="rbt-meta">
                                                    <li><p><i class="feather-calendar"></i>Début d'inscription : {{ $exam->start_date ?? '01/01/2024' }}</p></li>
                                                </ul>
                                                <ul class="rbt-meta">
                                                    <li><p><i class="feather-calendar"></i>Date Limite : {{ $exam->end_date ?? '01/01/2024' }}</p></li>
                                                </ul>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <div class="button-group mt--30">
                                                            <form method="GET" action="{{ route('registration.step1') }}">
                                                                @csrf
                                                                <input type="hidden" name="exam_id" value="{{ $exam->id }}">
                                                                <button type="submit" class="rbt-btn btn-gradient rbt-marquee-btn">S'inscrire</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <span class="rbt-badge variation-02 bg-primary-opacity">{{ \Carbon\Carbon::parse($exam->exam_date)->format('l d F Y') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        @foreach($levels as $level)
                            <div class="tab-pane fade" id="level-{{ $loop->index }}" role="tabpanel" aria-labelledby="level-{{ $loop->index }}-tab">
                                <div class="rbt-course-grid-column">
                                    @foreach($exams->where('level', $level->level) as $exam)
                                        <div class="course-grid-3">
                                            <div class="rbt-card variation-01 rbt-hover">
                                                <div class="rbt-card-img">
                                                    <a href="course-details.html">
                                                        <img src="{{ asset('/uploads/Test/' . $exam->image) }}" alt="Card image">
                                                    </a>
                                                </div>
                                                <div class="rbt-card-body">
                                                    <h4 class="rbt-card-title pb--10">{{ $exam->title }} | <span>{{ $exam->level }}</span></h4>
                                                    <ul class="rbt-meta">
                                                        <li><p><i class="feather-calendar"></i>Début d'inscription : {{ $exam->start_date ?? '01/01/2024' }}</p></li>
                                                    </ul>
                                                    <ul class="rbt-meta">
                                                        <li><p><i class="feather-calendar"></i>Date Limite : {{ $exam->end_date ?? '01/01/2024' }}</p></li>
                                                    </ul>
                                                    <div class="rbt-card-bottom">
                                                        <div class="rbt-price">
                                                            <div class="button-group mt--30">
                                                                <form method="GET" action="{{ route('registration.step1') }}">
                                                                    @csrf
                                                                    <input type="hidden" name="exam_id" value="{{ $exam->id }}">
                                                                    <button type="submit" class="rbt-btn btn-gradient rbt-marquee-btn">S'inscrire</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <span class="rbt-badge variation-02 bg-primary-opacity">{{ \Carbon\Carbon::parse($exam->exam_date)->format('l d F Y') }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
@endsection
