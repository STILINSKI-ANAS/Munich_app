@extends('layouts.user')

@section('content')
    <main class="rbt-main-wrapper">
        <x-comp-course
            :courseId="$course->id"
            :level="$course->level"
            :overview="$course->overview"
            :content="$course->content"
            :time="$course->time"
            :image="$course->image"
            :price="$course->price"
            :language="$course->language"
            :maxPlacements="$course->max_placements"
            :totalEtudiantsInscrits="$totalEtudiantsInscrits"
            :updatedAt="$course->updated_at"/>
    </main>
@endsection

