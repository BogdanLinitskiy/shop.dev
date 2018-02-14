@extends('template')

@section('content')
    @foreach($pages as $page)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <h2 class="card-text">{{ $page['title'] }}</h2>
                    <p class="card-text">{{ $page['intro'] }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/pages/{{ $page['alias'] }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <p><a class="btn btn-primary" href="{{url()->previous()}}" role="button">Back to the home page</a></p>
@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4 text-center"> All articles </h1>
        </div>
    </div>

@endsection