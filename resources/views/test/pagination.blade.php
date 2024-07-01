<!-- resources/views/test/pagination.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Pagination Test</title>
</head>
<body>
<h1>Pagination Test</h1>

@foreach ($exams as $exam)
    <p>{{ $exam->name }}</p>
@endforeach

{{ $exams->links() }}
</body>
</html>
