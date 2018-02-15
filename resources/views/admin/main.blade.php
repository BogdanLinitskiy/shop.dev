@extends('admin_template')
<link rel="stylesheet" href="/css/admin.css">
@section('content')

    <div class="div-create col-md-12">
        <h1>Last added categories</h1>
        <a href="/admin/categories/create">
            <button type="button" class="create btn btn-sm btn-outline-secondary">Create new product category</button>
        </a>
    </div>

    @foreach($last_added['categories'] as $category)

        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{$category['logo']}}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-text">{{ $category['name'] }}</h2>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/admin/categories/{{ $category['alias'] }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                            <a href="/admin/categories/{{ $category['alias'] }}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                            <a href="/admin/categories/{{ $category['alias'] }}/delete"><button type="button" class="btn btn-sm btn-outline-secondary">Delete</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

    <div class="div-create col-md-12">
        <hr>
        <h1>Last added products</h1>
    </div>

    @foreach($last_added['products'] as $product)

        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                @foreach($product->thumbnails as $thumb)
                <img src="/uploads/products/{{$thumb->name}}" alt="product image" class="img-thumbnail" width="750px" height="500px">
                @endforeach
                <div class="card-body">
                    <h2 class="card-text">{{ $product['title'] }}</h2>
                    <p class="card-text">{{ $product['price'] }}$</p>
                    <p class="card-text">{{ $product['description'] }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/admin/products/{{ $product['alias'] }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                            <a href="/admin/products/{{ $product['alias'] }}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                            <a href="/admin/products/{{ $product['alias'] }}/delete"><button type="button" class="btn btn-sm btn-outline-secondary">Delete</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

    <div class="div-create col-md-12">
        <hr>
        <h1>Latest orders</h1>
        <a href="/admin/orders/create">
            <button type="button" class="create btn btn-sm btn-outline-secondary">Create new Order</button>
        </a>
    </div>

    @foreach($last_added['orders'] as $order)

        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <h2 class="card-text">{{ $order['customer_name'] }}</h2>
                    <p class="card-text">{{ $order['email'] }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/admin/orders/{{ $order['id'] }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                            <a href="/admin/orders/{{ $order['id'] }}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                            <a href="/admin/orders/{{ $order['id'] }}/delete"><button type="button" class="btn btn-sm btn-outline-secondary">Delete</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

    <div class="div-create col-md-12">
        <hr>
        <h1>Latest pages</h1>
        <a href="/admin/pages/create">
            <button type="button" class="create btn btn-sm btn-outline-secondary">Create new Page</button>
        </a>
    </div>
    @foreach($last_added['pages'] as $page)


        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <h2 class="card-text">{{ $page['title'] }}</h2>
                    <p class="card-text">{{ $page['intro'] }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/admin/pages/{{ $page['alias'] }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                            <a href="/admin/pages/{{ $page['alias'] }}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                            <a href="/admin/pages/{{ $page['alias'] }}/delete"><button type="button" class="btn btn-sm btn-outline-secondary">Delete</button></a>
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
            <h1 class="display-4" align="center">Admin page</h1>
        </div>
    </div>

@endsection
