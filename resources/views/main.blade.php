@extends('template')

@section('content')
    <div class="col-md-12">
        <h1 align="center">Products</h1>
    </div>
    @foreach($products as $product)

        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <h2 class="card-text">{{ $product['title'] }}</h2>
                    <p class="card-text">{{ $product['price'] }}$</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/products/{{ $product['alias'] }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                            <a href="/products/{{ $product['alias'] }}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                            <a href="/products/{{ $product['alias'] }}/delete"><button type="button" class="btn btn-sm btn-outline-secondary">Delete</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
    <div class="col-md-12">
        <hr>
        <h1 align="center">Orders</h1>
    </div>
    @foreach($orders as $order)

        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <h2 class="card-text">{{ $order['customer_name'] }}</h2>
                    <p class="card-text">{{ $order['email'] }}$</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/orders/{{ $order['id'] }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                            <a href="/orders/{{ $order['id'] }}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                            <a href="/orders/{{ $order['id'] }}/delete"><button type="button" class="btn btn-sm btn-outline-secondary">Delete</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
    <div class="col-md-12">
        <hr>
        <h1 align="center">Pages</h1>
    </div>
    @foreach($pages as $page)

        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <h2 class="card-text">{{ $page['title'] }}</h2>
                    <p class="card-text">{{ $page['intro'] }}$</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/pages/{{ $page['alias'] }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                            <a href="/pages/{{ $page['alias'] }}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                            <a href="/pages/{{ $page['alias'] }}/delete"><button type="button" class="btn btn-sm btn-outline-secondary">Delete</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4" align="center">Welcome to the Shop</h1>
        </div>
    </div>

@endsection