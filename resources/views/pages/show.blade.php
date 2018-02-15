@extends(Auth::guard('admin')->user() ? 'admin_template' : 'template')

@section('content')

        <div class="col-md-12">
            <h2>{{ $page['title'] }}</h2>
            <h5> {{ $page['intro'] }} </h5>
            <p> {{ $page['content'] }} </p>
            @if(Auth::guard('admin')->user())
                <p><a class="btn btn-primary" href="/admin/pages" role="button">Back </a></p>
            @else
                <p><a class="btn btn-primary" href="/pages" role="button">Back </a></p>
            @endif
        </div>

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4"> Page {{$page->title}} </h1>
        </div>
    </div>

@endsection