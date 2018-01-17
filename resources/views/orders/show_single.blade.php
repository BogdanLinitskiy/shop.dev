@extends('template')

@section('content')

    <div class="col-md-12">
        <h2>{{ $orders['customer_name'] }}</h2>
        <p> {{ $orders['email'] }} </p>
        <p> {{ $orders['phone'] }} </p>
        <p> {{ $orders['feedback'] }} </p>
    </div>

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4"> {{ $orders['customer_name'] }} </h1>
        </div>
    </div>

@endsection