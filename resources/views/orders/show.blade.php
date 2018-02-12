{{--@if(\Illuminate\Support\Facades\Auth::guard('admin')->user())--}}
{{--@extends('admin_template')--}}
{{--@else--}}
@extends('template')
    {{--@endif--}}

@section('content')

    <div class="col-md-12">
        <h2>{{ $order['customer_name'] }}</h2>
        <p> {{ $order['email'] }} </p>
        <p> {{ $order['phone'] }} </p>
        <p> {{ $order['feedback'] }} </p>
        <p><a class="btn btn-primary" href="{{url()->previous()}}" role="button">Back to the home page</a></p>
    </div>

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4"> Customer {{ $order['customer_name'] }} info</h1>
        </div>
    </div>

@endsection