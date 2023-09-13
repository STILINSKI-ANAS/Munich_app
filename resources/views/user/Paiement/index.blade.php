<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
<h1>payementProcess</h1>
<h1>order number: {{ $etudTestId }}</h1>
<h1>amount: {{ $amount }}</h1>
<labela>nom: </labela>
<input type="text" name="nom" placeholder="question supplémentaire 1" value="{{ $nom }}">
<labela>prenom: </labela>
<input type="text" name="prenom" placeholder="question supplémentaire 1" value="{{ $prenom }}">
<p>Today is {{ date('Y-m-d') }}</p>

<form method="POST" action="{{ route('payementProcess') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <labela>methode</labela>
        <input type="text" name="methode" placeholder="question supplémentaire 1" required>
    </div>
    <div>
        <labela>tel</labela>
        <input type="text" name="tel" placeholder="question supplémentaire 1" required>

    </div>
{{--    <input type="text" name="EtudId" required value="{{$EtudId}}" hidden>--}}
    <button class="rbt-btn btn-gradient icon-hover w-100 d-block text-center mt--15" type="submit">
        <span class="btn-text">S'inscrire</span>
    </button>
</form>
</body>
</html>
