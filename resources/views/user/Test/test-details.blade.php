@extends('layouts.user')

@section('content')
    <main class="rbt-main-wrapper">
        <x-comp-test :title="$test->level" :description="$test->overview" :content="$test->content" :features="$test->features" :course="$test->course" langue="allemend" :image="$test->image" price="100" testId="2"/>
{{--    @if($test->level == 'DAF')--}}
{{--            <x-daf :niveau="$test->level" :price="$test->price" :testId="$test->id"/>--}}
{{--            <x-comp-test :title="$test->level" :description="$test->overview" :content="$test->content" :features="$test->features" :course="$test->course" langue="allemend" :image="$test->image" price="100" testId="2"/>--}}
{{--        @elseif($test->level == 'WIDAF')--}}

{{--            <x-widaf :niveau="$test->level" :price="$test->price" :testId="$test->id"/>--}}
{{--        @elseif($test->level == 'DSH')--}}
{{--            <x-comp-test :niveau="$test->level" :price="$test->price" :testId="$test->id"/>--}}
{{--            <x-comp-test :title="$test->level" :description="$test->overview" :content="$test->content" :features="$test->features" :course="$test->course" langue="allemend" :image="$test->image" price="100" testId="2"/>--}}
{{--        @endif--}}
    </main>
@endsection
