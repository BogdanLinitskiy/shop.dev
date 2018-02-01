@extends('template')

@section('content')

        <div class="col-md-12">
            <h2>{{ $product['title'] }}</h2>
            <p> {{ $product['alias'] }} </p>
            <p> {{ $product['price'] }} $</p>
            <p> {{ $product['description'] }} </p>
            <p><a class="btn btn-primary" href="/admin_panel/main" role="button">Back to the home page</a></p>
        </div>

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4"> {{ $product['title'] }} </h1>
        </div>
    </div>

@endsection