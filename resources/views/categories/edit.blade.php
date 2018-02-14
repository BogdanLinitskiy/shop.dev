@extends('admin_template')

@section('content')

    <div class="col-md-12">
        <form action="/admin/categories/{{$category->alias}}" method="post" class="form-horizontal">
            @include('embed.errors')

            {{csrf_field()}}

            {{method_field('PATCH')}}
            <div class="form-group">
                <label for="name" >Name: </label>
                <input type ="text" class="form-control" id="name" name="name" value="{{$category['name']}}">
            </div>

            <div class="form-group">
                <label for="alias" >Alias: </label>
                <input type ="text" class="form-control" id="alias" name="alias" value="{{$category['alias']}}">
            </div>

            <div class="form-group">
                <label for="logo" >Logo: </label>
                <input type ="text" class="form-control" id="logo" name="logo" value="{{$category['logo']}}">
            </div>

            <div class="form-group">
                <button class="btn btn-default">Update</button>
                <p><a class="btn btn-primary" href="/admin" role="button">Back to the home page</a></p>
            </div>
        </form>
    </div>
@endsection

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Editing {{$category->name}} category</h1>
        </div>
    </div>

@endsection