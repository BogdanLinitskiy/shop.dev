@extends('template')

@section('content')

        <div class="col-md-12">
            <h2>{{ $product['title'] }}</h2>
            @foreach($product->thumbnails as $thumb)
                <img src="/uploads/products/{{$thumb->name}}" alt="product image" class="img-thumbnail" width="400px" height="400px">
            @endforeach
            <p> {{ $product['price'] }} $</p>
            <p> {{ $product['description'] }} </p>
            <p><a class="btn btn-success" href="/cart/{{$product['alias']}}">Buy</a></p>
            <p><a class="btn btn-primary" href="{{url()->previous()}}" role="button">Back</a></p>
        </div>

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4"> {{ $product['title'] }} </h1>
        </div>
    </div>

@endsection