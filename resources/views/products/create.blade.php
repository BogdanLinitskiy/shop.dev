@extends('admin_template')

@section('content')
    <div class="col-md-12">
        <form action="/admin/products" method="post" class="form-horizontal">
            @include('embed.errors')

            {{csrf_field()}}

            <div class="form-group">
                <label for="title" >Title: </label>
                <input type ="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="alias" >Alias: </label>
                <input type ="text" class="form-control" id="alias" name="alias">
            </div>

            <div class="form-group">
                <label for="price" >Price: </label>
                <input type ="text" class="form-control" id="price" name="price">
            </div>

            <div class="form-group">
                <label for="description" >Description: </label>
                <textarea  name="description" id="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="category_id">category_id: </label>
                <input type ="text" class="form-control" id="category_id" name="category_id">
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
            <h1 class="display-4">Create new product</h1>
        </div>
    </div>

@endsection