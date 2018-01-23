@extends('template')

@section('content')

    <div class="col-md-12">
        <form action="/orders/{{$order['id']}}" method="post" class="form-horizontal">
            @include('embed.errors')

            {{csrf_field()}}

            <input type="hidden" name="_method" value="DELETE">

            <div class="form-group">
                <h3>Are you sure you want to delete {{$order->email}} ?</h3>
            </div>

            <div class="form-group">
                <button class="btn btn-danger">Delete</button>
            </div>

        </form>
    </div>

@endsection

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Deleting {{$order->customer_name}} ({{$order->email}}) user </h1>
        </div>
    </div>

@endsection