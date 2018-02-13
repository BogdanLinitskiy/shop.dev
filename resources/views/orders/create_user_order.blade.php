@extends('template')

@section('content')

    <div class="col-md-12">

        <form action="/order" method="post" class="form-horizontal">

            {{csrf_field()}}

            <div class="form-group">
                <h2>Selected products:</h2>
                <ul>
                    @foreach($products as $product)
                        <li>
                            <strong>{{$product->title}}</strong>
                            x {{$cart[$product->id]['amount']}}
                            : {{$cart[$product->id]['totalPrice']}}$
                        </li>
                    @endforeach
                </ul>
            </div>

            @include('embed.errors')

            <div class="form-group">
                <label for="customer_name" class="for">Full name: </label>
                <input type="text" name="customer_name" id="customer_name" class="form-control">
            </div>

            <div class="form-group">
                <label for="email" class="for">Email: </label>
                <input type="text" name="email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="phone" class="for">Phone: </label>
                <input type="text" name="phone" id="phone" class="form-control">
            </div>

            <div class="form-group">
                <label for="feedback" class="for">Phone: </label>
                <input type="text" name="feedback" id="feedback" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Create order</button>
        </form>

    </div>

@endsection

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Orders</h1>
        </div>
    </div>

@endsection