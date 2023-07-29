@extends('layouts.user')

@section('content')
    <main class="rbt-main-wrapper">
        @if($course->level == 'Niveau A1')
            <x-niveau-a1 :niveau="$course->level" :price="$course->price" :courseId="$course->id"/>
        @elseif($course->level == 'Niveau B1')
            <x-niveau-b1 :niveau="$course->level" :price="$course->price" :courseId="$course->id"/>
        @elseif($course->level == 'Niveau B2')
            <x-niveau-b2 :niveau="$course->level" :price="$course->price" :courseId="$course->id"/>
        @elseif($course->level == 'Niveau C1')
            <x-niveau-c1 :niveau="$course->level" :price="$course->price" :courseId="$course->id"/>
        @endif
    </main>
@endsection
