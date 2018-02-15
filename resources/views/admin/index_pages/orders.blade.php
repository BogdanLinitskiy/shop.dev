@extends('admin_template')
<link rel="stylesheet" href="/css/admin.css">
@section('content')

    <div class="div-create col-md-12">
        <h1>Orders</h1>
        <a href="/admin/orders/create">
            <button type="button" class="create btn btn-sm btn-outline-secondary">Create order</button>
        </a>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Customer name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Feedback</th>
            <th scope="col">Created_at</th>
            <th scope="col">Show</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <th scope="row">{{$order['id']}}</th>
                <td>{{$order['customer_name']}}</td>
                <td>{{$order['email']}}</td>
                <td>{{$order['phone']}}</td>
                <td>{{$order['feedback']}}</td>
                <td>{{$order['created_at']}}</td>
                <td>
                    <a href="/admin/orders/{{$order['id']}}">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Show</button>
                    </a>
                </td>
                <td>
                    <a href="/admin/orders/{{$order['id']}}/edit">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </a>
                </td>
                <td>
                    <a href="/admin/orders/{{$order['id']}}/delete">
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
            <h1 class="display-4" align="center">Orders page</h1>
        </div>
    </div>

@endsection