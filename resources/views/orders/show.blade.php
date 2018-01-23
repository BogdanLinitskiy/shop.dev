@extends('template')

@section('content')

    <div class="col-md-12">
        <h2>{{ $order['customer_name'] }}</h2>
        <p> {{ $order['email'] }} </p>
        <p> {{ $order['phone'] }} </p>
        <p> {{ $order['feedback'] }} </p>
    </div>

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4"> {{ $order['customer_name'] }} </h1>
        </div>
    </div>

@endsection