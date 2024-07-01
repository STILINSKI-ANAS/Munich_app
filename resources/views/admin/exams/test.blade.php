<!-- resources/views/admin/exams/test.blade.php -->

@foreach ($exams as $exam)
    <p>{{ $exam->name }}</p>
@endforeach

{{ $exams->links() }}
