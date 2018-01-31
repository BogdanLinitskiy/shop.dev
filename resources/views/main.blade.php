@extends('template')
<style>
    img{
        width:348px;
        height:225px;
    }
</style>
@section('content')
    <div class="col-md-12">
        <h1 align="center">Products</h1>
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