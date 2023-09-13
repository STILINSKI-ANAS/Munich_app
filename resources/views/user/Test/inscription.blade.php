<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
<h1>inscriptionstep2</h1>
<p>Today is {{ date('Y-m-d') }}</p>

<form method="POST" action="{{ route('inscriptionstep2') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <labela>cin</labela>
        <input type="text" name="cin" placeholder="question supplémentaire 1" required>
    </div>
    <div>
        <labela>tel</labela>
        <input type="text" name="tel" placeholder="question supplémentaire 1" required>

    </div>
    <input type="text" name="EtudId" required value="{{$EtudId}}" hidden>
    <button class="rbt-btn btn-gradient icon-hover w-100 d-block text-center mt--15" type="submit">
        <span class="btn-text">S'inscrire</span>
    </button>
</form>
</body>
</html>
