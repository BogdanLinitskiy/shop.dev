@extends('template')

@section('content')
    @foreach($category->products as $product)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <h2>{{ $product->title }}</h2>
                    <p> {{ $product->price }}$</p>
                    <p> {{ $product->description }} </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/products/{{ $product['alias'] }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                            <a href="/cart/{{$product['alias'] }}"><button type="button" class="btn btn-sm btn-outline-secondary">Buy</button></a>
                            @if(Auth::guard('admin')->user())
                                <a href="/admin/products/{{ $product['alias'] }}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                                <a href="/admin/products/{{ $product['alias'] }}/delete"><button type="button" class="btn btn-sm btn-outline-secondary">Delete</button></a>
                            @endif
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
                <h1 class="display-4"> {{$category->name}} </h1>

            </div>
        </div>
@endsection

@section('redirect')
    @if(Auth::guard('admin')->user())
        <p>
            <a href="/admin/products/{{ $category['alias'] }}/create">
                <button type="button" class="btn btn-success">Add new product</button>
            </a>
        </p>
        <p><a class="btn btn-primary" href="/admin" role="button">Back</a></p>
    @else
        <p><a class="btn btn-primary" href="/" role="button">Back</a></p>
    @endif
@endsection