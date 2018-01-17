@extends('template')

@section('content')

    @foreach($orders as $order)
    <div class="col-md-12">
        <h2>{{ $order['customer_name'] }}</h2>
        <p> {{ $order['email'] }} </p>
        <p><a href="show/{{$order['id']}}"> View full info</a></p>
    </div>

    @endforeach
@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4"> Заказы </h1>
        </div>
    </div>

@endsection