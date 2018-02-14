<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/pages">Articles</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/order">Your order</a>
            </li>

        </ul>

        <div class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:lightgray">Your cart</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                @if(!isset($_COOKIE['cart']))
                    <p>Cart is empty</p>
                @else
                    @foreach($cart_products['products'] as $product)
                        <p>{{$product['title']}} x {{$cart_products['cart'][$product->id]['amount']}}
                            : {{$cart_products['cart'][$product->id]['totalPrice']}}$
                        </p>
                    @endforeach
                    <p><a href="/order">Make an order</a></p>
                    <p><a href="/cart">Check cart details</a></p>
                @endif
            </div>
        </div>
        <div class="nav-item  col-md-2 ">
            <ul class="navbar-nav mr-auto">
                @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{Auth::user()->name}}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>