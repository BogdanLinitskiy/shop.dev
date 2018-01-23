@extends('template')

@section('content')

    @foreach($products as $product)

        <div class="col-md-4">
            <h2>{{ $product['title'] }}</h2>
            <p> {{ $product['alias'] }} </p>
            <p><a class="btn btn-primary" href="/products/{{ $product['alias'] }}" role="button">View details »</a></p>
            <p><a class="btn btn-success" href="/products/{{ $product['alias'] }}/edit" role="button">Edit »</a></p>
            <p><a class="btn btn-danger" href="/products/{{ $product['alias'] }}/delete" role="button">Delete »</a></p>
        </div>

    @endforeach
    @foreach($orders as $order)

        <div class="col-md-4">
            <h2>{{ $order['customer_name'] }}</h2>
            <p> {{ $order['email'] }} </p>
            <p><a class="btn btn-primary" href="/orders/{{ $order['id'] }}" role="button">View details »</a></p>
            <p><a class="btn btn-success" href="/orders/{{ $order['id'] }}/edit" role="button">Edit »</a></p>
            <p><a class="btn btn-danger" href="/orders/{{ $order['id'] }}/delete" role="button">Delete »</a></p>
        </div>

    @endforeach
    @foreach($pages as $page)

        <div class="col-md-4">
            <h2>{{ $page['title'] }}</h2>
            <p> {{ $page['alias'] }} </p>
            <p><a class="btn btn-primary" href="/pages/{{ $page['alias'] }}" role="button">View details »</a></p>
            <p><a class="btn btn-success" href="/pages/{{ $page['alias'] }}/edit" role="button">Edit »</a></p>
            <p><a class="btn btn-danger" href="/pages/{{ $page['alias'] }}/delete" role="button">Delete »</a></p>
        </div>

    @endforeach

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Welcome to Shop</h1>
            <p> THis is my test shop </p>
        </div>
    </div>

@endsection