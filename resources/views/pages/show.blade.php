@extends('template')

@section('content')

        <div class="col-md-12">
            <h2>{{ $page['title'] }}</h2>
            <p> {{ $page['alias'] }} </p>
            <p> {{ $page['intro'] }} </p>
            <p> {{ $page['content'] }} </p>
        </div>

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4"> Page {{$page->title}} </h1>
        </div>
    </div>

@endsection