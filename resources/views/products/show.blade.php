@extends('template')

@section('content')

    @foreach($products as $product)
        <div class="col-md-12">
            <h2>{{ $product['title'] }}</h2>
            <p> {{ $product['alias'] }} </p>
            <p> {{ $product['intro'] }} </p>
            <p> {{ $product['content'] }} </p>
        </div>

    @endforeach
@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4"> Товары </h1>
        </div>
    </div>

@endsection