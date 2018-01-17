@extends('template')

@section('content')

    {{--@foreach($products as $post)--}}

        {{--<div class="col-md-4">--}}
            {{--<h2>{{ $post['title'] }}</h2>--}}
            {{--<p> {{ $post['alias'] }} </p>--}}
            {{--<p><a class="btn btn-secondary" href="/products/{{ $post['id'] }}" role="button">View details »</a></p>--}}
        {{--</div>--}}

    {{--@endforeach--}}

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Welcome to Shop</h1>
            <p> THis is my test shop </p>
        </div>
    </div>

@endsection