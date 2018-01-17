@extends('template')

@section('content')

        <div class="col-md-12">
            <h2>{{ $products['title'] }}</h2>
            <p> {{ $products['alias'] }} </p>
            <p> {{ $products['price'] }} $</p>
            <p> {{ $products['description'] }} </p>
        </div>

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4"> {{ $products['title'] }} </h1>
        </div>
    </div>

@endsection