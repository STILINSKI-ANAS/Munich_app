@extends('layouts.user')

@section('content')
    <main class="rbt-main-wrapper">
        @if($test->level == 'DAF')
            <x-daf :niveau="$test->level" :price="$test->price" :testId="$test->id"/>
        @elseif($test->level == 'WIDAF')
            <x-widaf :niveau="$test->level" :price="$test->price" :testId="$test->id"/>
        @elseif($test->level == 'DSH')
            <x-dsh :niveau="$test->level" :price="$test->price" :testId="$test->id"/>
        @endif
    </main>
@endsection
