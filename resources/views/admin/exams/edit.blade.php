@extends('layouts.admin')

@section('content')
    <main class="rbt-main-wrapper">
        <div class="container">
            <div class="section-title mt--40 mb--20">
                <h2 class="rbt-title-style-1">Modifier l'examen</h2>
            </div>

            <div class="col-lg-12">
                <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                    <div class="content">
                        <form method="POST" action="{{ route('admin.exams.update', $exam->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="title" class="form-label">Titre</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $exam->title) }}" required>
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="level" class="form-label">Niveau</label>
                                <input type="text" class="form-control" id="level" name="level" value="{{ old('level', $exam->level) }}" required>
                                @error('level')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="max_placements" class="form-label">Places max</label>
                                <input type="number" class="form-control" id="max_placements" name="max_placements" value="{{ old('max_placements', $exam->max_placements) }}" required>
                                @error('max_placements')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="start_date" class="form-label">Date de début</label>
                                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date', $exam->start_date) }}" required>
                                @error('start_date')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="end_date" class="form-label">Date de fin</label>
                                <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date', $exam->end_date) }}" required>
                                @error('end_date')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="exam_date" class="form-label">Date de l'examen</label>
                                <input type="date" class="form-control" id="exam_date" name="exam_date" value="{{ old('exam_date', $exam->exam_date) }}" required>
                                @error('exam_date')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="exam_center" class="form-label">Centre d'examen</label>
                                <input type="text" class="form-control" id="exam_center" name="exam_center" value="{{ old('exam_center', $exam->exam_center) }}" required>
                                @error('exam_center')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="exam_fee" class="form-label">Frais d'examen</label>
                                <input type="number" step="0.01" class="form-control" id="exam_fee" name="exam_fee" value="{{ old('exam_fee', $exam->exam_fee) }}" required>
                                @error('exam_fee')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="rbt-btn btn-primary">Mettre à jour l'examen</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
