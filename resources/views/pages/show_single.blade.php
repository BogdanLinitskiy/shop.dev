@extends('template')

@section('content')

    <div class="col-md-12">
        <h2>{{ $pages['title'] }}</h2>
        <p> {{ $pages['alias'] }} </p>
        <p> {{ $pages['intro'] }} </p>
        <p> {{ $pages['content'] }} </p>
    </div>

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4"> {{ $pages['title'] }} </h1>
        </div>
    </div>

@endsection