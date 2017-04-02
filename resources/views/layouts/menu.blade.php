<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/">Starwars Webshop</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link sliding-middle-out" href="/">Home</a>
            </li>
            @foreach($categories as $category)
                @continue($category->parent != null)

                @if ($category->children->count())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/products/{{ $category->name }}"
                           id="navbarDropdownMenu{{ $category->name }}"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ ucfirst($category->name) }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenu{{ $category->name }}">
                            @foreach ($category->children as $child)
                                <a class="dropdown-item sliding-middle-out"
                                   href="/products/{{ $child->name }}">{{ ucfirst($child->name) }}</a>
                            @endforeach
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link sliding-middle-out"
                           href="/products/{{ $category->name }}">{{ ucfirst($category->name) }}</a>
                    </li>
                @endif
            @endforeach
            <li class="nav-item">
                <a class="nav-link sliding-middle-out" href="/sale">Sale</a>
            </li>
            <li class="nav-item">
                <a class="nav-link sliding-middle-out" href="/about">About us</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="/search" method="get">
            <input class="form-control mr-sm-2" type="text" name="q" placeholder="Search" value="{{ (isset($_GET['q']) ? $_GET['q'] : "") }}">
            <button class="btn my-2 my-sm-0 btn-secondary" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </form>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link sliding-middle-out" href="/cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userMenuDropDown" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    @if (Auth::check())
                        Welcome, {{ Auth::user()->name }}!
                    @else
                        Welcome, guest!
                    @endif
                </a>
                <div class="dropdown-menu" aria-labelledby="userMenuDropDown">
                    @if (Auth::check())
                        <a class="dropdown-item sliding-middle-out" href="/dashboard">Account settings</a>
                        <a class="dropdown-item sliding-middle-out" href="/logout">Logout</a>
                    @else
                        <a class="dropdown-item sliding-middle-out" href="/login">Login</a>
                        <a class="dropdown-item sliding-middle-out" href="/register">Register</a>
                    @endif
                </div>
            </li>
        </ul>
    </div>
</nav>