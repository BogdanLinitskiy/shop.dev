@extends('template')

@section('content')

    @foreach($pages as $page)
        <div class="col-md-12">
            <h2>{{ $page['title'] }}</h2>
            <p> {{ $page['alias'] }} </p>
            <p> {{ $page['intro'] }} </p>
            <p> {{ $page['content'] }} </p>
        </div>

    @endforeach
@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4"> Страницы </h1>
        </div>
    </div>

@endsection