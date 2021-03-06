<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/admin">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/categories">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/products">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/orders">Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/pages">Articles</a>
            </li>


        </ul>
        <div class="nav-item  col-md-2 ">
            <ul class="navbar-nav mr-auto">
                @if(Auth::guard('admin')->user())
                <li class="nav-item">
                    <a class="nav-link" href="#">{{Auth::guard('admin')->user()->name}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/logout">Logout</a>
                </li>
                    @endif
            </ul>
        </div>
    </div>
</nav>