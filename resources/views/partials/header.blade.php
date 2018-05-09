

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Book Cart</a>
    <a class="navbar-brand" href="{{ route('product.index') }}">Brand</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{URL::to('shop/index')}}"> <i class="fas fa-shopping-cart"></i> Shopping Cart <span class="sr-only">(current)</span></a>
            </li>
            <li>
                <a href="{{ route('product.shoppingCart') }}">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart
                    <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-user"></i> User Management
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('user.signup')}}">Sign Up</a>
                    <a class="dropdown-item" href="{{route('user.signup')}}">Sign In</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('user.logout')}}">LogOut</a>
                    @if(Auth::check())
                <li><a href="{{ route('user.profile') }}">User Profile</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('user.logout') }}">Logout</a></li>
            @else
                <li><a href="{{ route('user.signup') }}">Signup</a></li>
                <li><a href="{{ route('user.signin') }}">Signin</a></li>
        @endif
                </div>
            </li>
        </ul>
{{--        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>--}}
    </div>
</nav>