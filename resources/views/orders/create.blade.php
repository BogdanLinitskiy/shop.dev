@extends('admin_template')

@section('content')
    <div class="col-md-12">
        <form action="/admin/orders" method="post" class="form-horizontal">
            @include('embed.errors')

            {{csrf_field()}}

            <div class="form-group">
                <label for="customer_name" >Customer name: </label>
                <input type ="text" class="form-control" id="customer_name" name="customer_name">
            </div>

            <div class="form-group">
                <label for="phone" >Phone: </label>
                <input type ="text" class="form-control" id="phone" name="phone">
            </div>

            <div class="form-group">
                <label for="email" >Email: </label>
                <textarea  name="email" id="email" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="feedback" >Feedback: </label>
                <textarea  name="feedback" id="feedback" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-default">Save</button>
                <p><a class="btn btn-primary" href="/admin" role="button">Back to the home page</a></p>
            </div>

        </form>
    </div>
@endsection

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Create new order</h1>
        </div>
    </div>

@endsection