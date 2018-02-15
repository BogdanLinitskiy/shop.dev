@extends('admin_template')
<link rel="stylesheet" href="/css/admin.css">
@section('content')

    <div class="div-create col-md-12">
        <hr>
        <h1>Articles</h1>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Alias</th>
            <th scope="col">Intro</th>
            <th scope="col">Content</th>
            <th scope="col">Created_at</th>
            <th scope="col">Show</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pages as $page)
            <tr>
                <th scope="row">{{$page['id']}}</th>
                <td>{{substr($page['title'],0,30)}}</td>
                <td>{{$page['alias']}}</td>
                <td>{{$page['intro']}}</td>
                <td>{{substr($page['content'],0,70)}}</td>
                <td>{{$page['created_at']}}</td>
                <td>
                    <a href="/admin/pages/{{$page['alias']}}">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Show</button>
                    </a>
                </td>
                <td>
                    <a href="/admin/pages/{{$page['alias']}}/edit">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </a>
                </td>
                <td>
                    <a href="/admin/pages/{{$page['alias']}}/delete">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4" align="center">Articles page</h1>
        </div>
    </div>

@endsection