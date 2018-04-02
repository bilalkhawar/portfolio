@extends('layouts.app')
@section('content')
    @include('layouts.nav')
    <div class="container-fluid p-0">
        @include('about')
        @include('experience')
        @include('projects')
        @include('education')
        @include('skills')
        @include('awards')
    </div>
@endsection