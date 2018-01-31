@extends('template')

@section('content')
    @foreach($category->products as $product)
        <div class="col-md-12">
            <h2>{{ $product->title }}</h2>
            <p> {{ $product->alias }} </p>
            <p> {{ $product->price }} $</p>
            <p> {{ $product->description }} </p>
        </div>
    @endforeach
    <p><a class="btn btn-primary" href="/" role="button">Back to the home page</a></p>
@endsection

@section('jumbotron')
    @foreach($category->products as $product)
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-4"> {{ $product->title }} </h1>
            </div>
        </div>
    @endforeach
@endsection