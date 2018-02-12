@extends('admin_template')

<style>
    img{
        width:348px;
        height:225px;
    }
    .create{
        margin-bottom: 10px;
    }
    .div-create{
        text-align:center;
    }
</style>
@section('content')


    <div class="div-create col-md-12">
        <h1>Products</h1>
        <a href="/admin/products/create">
            <button type="button" class="create btn btn-sm btn-outline-secondary">Create new Product</button>
        </a>
    </div>
    @foreach($categories as $category)

        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{$category['logo']}}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-text">{{ $category['name'] }}</h2>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/categories/{{ $category['alias'] }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
    <div class="div-create col-md-12">
        <hr>
        <h1>Orders</h1>
        <a href="/admin/orders/create">
            <button type="button" class="create btn btn-sm btn-outline-secondary">Create new Order</button>
        </a>
    </div>

    @foreach($orders as $order)

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
        <h1>Pages</h1>
        <a href="/admin/pages/create">
            <button type="button" class="create btn btn-sm btn-outline-secondary">Create new Page</button>
        </a>
    </div>
    @foreach($pages as $page)


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
