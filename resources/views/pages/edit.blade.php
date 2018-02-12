@extends('admin_template')

@section('content')

    <div class="col-md-12">
        <form action="/admin/pages/{{$page->alias}}" method="post" class="form-horizontal">
            @include('embed.errors')

            {{csrf_field()}}

            {{method_field('PATCH')}}
            <div class="form-group">
                <label for="title" >Title: </label>
                <input type ="text" class="form-control" id="title" name="title" value="{{$page['title']}}">
            </div>

            <div class="form-group">
                <label for="alias" >Alias: </label>
                <input type ="text" class="form-control" id="alias" name="alias" value="{{$page['alias']}}">
            </div>

            <div class="form-group">
                <label for="intro" >Intro: </label>
                <textarea  name="intro" id="intro" class="form-control">{{$page['intro']}}</textarea>
            </div>

            <div class="form-group">
                <label for="content" >Content: </label>
                <textarea  name="content" id="content" class="form-control">{{$page['intro']}}</textarea>
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
            <h1 class="display-4">Editing {{$page->title}} page</h1>
        </div>
    </div>

@endsection