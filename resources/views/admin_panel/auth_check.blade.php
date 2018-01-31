@extends('admin_template')

@section('content')
    <div class="col-md-12">
        <form action="/auth_check" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="email">Enter your email: </label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Enter your password: </label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
@endsection

@section('jumbotron')
    <div class="jumbotron">
        <a href="/">go back</a>
        <div class="container">
            <h1 class="display-4" align="center">This is admin page</h1>
        </div>
    </div>
@endsection