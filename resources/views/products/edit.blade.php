@extends('template')

@section('content')

    <div class="col-md-12">
        <form action="/products/{{$product->alias}}" method="post" class="form-horizontal">
            @include('embed.errors')

            {{csrf_field()}}

            {{method_field('PATCH')}}
            <div class="form-group">
                <label for="title" >Title: </label>
                <input type ="text" class="form-control" id="title" name="title" value="{{$product['title']}}">
            </div>

            <div class="form-group">
                <label for="alias" >Alias: </label>
                <input type ="text" class="form-control" id="alias" name="alias" value="{{$product['alias']}}">
            </div>

            <div class="form-group">
                <label for="price" >Intro: </label>
                <input type ="text" class="form-control" id="price" name="price" value="{{$product['price']}}">
            </div>

            <div class="form-group">
                <label for="description" >Price: </label>
                <textarea  name="description" id="description" class="form-control">{{$product['description']}}</textarea>
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
            <h1 class="display-4">Editing {{$product->title}} page</h1>
        </div>
    </div>

@endsection