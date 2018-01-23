@extends('template')

@section('content')

    <div class="col-md-12">
        <form action="/orders/{{$order->id}}" method="post" class="form-horizontal">
            @include('embed.errors')

            {{csrf_field()}}

            {{method_field('PATCH')}}
            <div class="form-group">
                <label for="customer_name" >Customer name: </label>
                <input  type ="text" class="form-control" id="customer_name" name="customer_name" value="{{$order['customer_name']}}">
            </div>

            <div class="form-group">
                <label for="phone" >Title: </label>
                <input  type ="text" class="form-control" id="phone" name="phone" value="{{$order['phone']}}">
            </div>

            <div class="form-group">
                <label for="email" >Intro: </label>
                <textarea  name="email" id="email" class="form-control">{{$order['email']}}</textarea>
            </div>

            <div class="form-group">
                <label for="feedback" >Body: </label>
                <textarea name="feedback" id="feedback" class="form-control">{{$order['feedback']}}</textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-default">Update</button>
            </div>
        </form>
    </div>
@endsection

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Create new blog post</h1>
        </div>
    </div>

@endsection