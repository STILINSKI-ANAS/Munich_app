@extends('layouts.user')

@section('content')
    <main class="rbt-main-wrapper">
        <x-comp-test :title="$test->level" :testId="$test->id" :description="$test->overview" :content="$test->content" :features="$test->features" :course="$test->course" langue="allemend" :image="$test->image" price="100"/>
    </main>
@endsection
