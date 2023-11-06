@extends('layouts.user')

@section('content')
    <main class="rbt-main-wrapper">
        <x-comp-test
            :title="$test->level"
            :testId="$test->id"
            :description="$test->overview"
            :content="$test->content"
            :features="$test->features"
            :course="$test->course"
            :maxPlacements="$test->max_placements"
            :totalEtudiantsInscrits="$totalEtudiantsInscrits"
            :image="$test->image"
            langue="allemend"
            price="100"/>
    </main>
@endsection
