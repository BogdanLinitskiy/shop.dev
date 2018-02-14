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
        <h1>Categories</h1>
        <a href="/admin/categories/create">
            <button type="button" class="create btn btn-sm btn-outline-secondary">Create new product category</button>
        </a>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Alias</th>
            <th scope="col">Logo src</th>
            <th scope="col">Created_at</th>
            <th scope="col">Show</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{$category['id']}}</th>
                <td>{{$category['name']}}</td>
                <td>{{$category['alias']}}</td>
                <td>{{$category['logo']}}</td>
                <td>{{$category['created_at']}}</td>
                <td>
                    <a href="/admin/categories/{{$category['alias']}}">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Show</button>
                    </a>
                </td>
                <td>
                    <a href="/admin/categories/{{$category['alias']}}/edit">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </a>
                </td>
                <td>
                    <a href="/admin/categories/{{$category['alias']}}/delete">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="div-create col-md-12">
        <hr>
        <h1>Products</h1>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Alias</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Category_id</th>
            <th scope="col">Created_at</th>
            <th scope="col">Show</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
    @foreach($products as $product)
        <tr>
            <th scope="row">{{$product['id']}}</th>
            <td>{{$product['title']}}</td>
            <td>{{$product['alias']}}</td>
            <td>{{$product['price']}}</td>
            <td>{{$product['description']}}</td>
            <td>{{$product['category_id']}}</td>
            <td>{{$product['created_at']}}</td>
            <td>
                <a href="/admin/products/{{$product['alias']}}">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Show</button>
                </a>
            </td>
            <td>
                <a href="/admin/products/{{$product['alias']}}/edit">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </a>
            </td>
            <td>
                <a href="/admin/products/{{$product['alias']}}/delete">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                </a>
            </td>
        </tr>
    @endforeach
        </tbody>
    </table>

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
