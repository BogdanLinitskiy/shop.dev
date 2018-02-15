@extends('admin_template')
<link rel="stylesheet" href="/css/admin.css">
@section('content')

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

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4" align="center">Products page</h1>
        </div>
    </div>

@endsection