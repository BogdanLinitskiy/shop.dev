@extends('template')

@section('content')

    <div class="col-md-12">
        <form action="/pages/{{$page['alias']}}" method="post" class="form-horizontal">
            @include('embed.errors')

            {{csrf_field()}}

            <input type="hidden" name="_method" value="DELETE">

            <div class="form-group">
                <h3>Are you sure you want to delete {{$page->title}} ?</h3>
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
            <h1 class="display-4">Deleting {{$page->title}} page </h1>
        </div>
    </div>

@endsection