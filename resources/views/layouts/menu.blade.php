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
                <a class="nav-link" href="/">Home</a>
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
                                <a class="dropdown-item"
                                   href="/products/{{ $child->name }}">{{ ucfirst($child->name) }}</a>
                            @endforeach
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/products/{{ $category->name }}">{{ ucfirst($category->name) }}</a>
                    </li>
                @endif
            @endforeach
            <li class="nav-item">
                <a class="nav-link" href="/sale">Sale</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cart">Shopping Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About us</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="/search" method="get">
            <input class="form-control mr-sm-2" type="text" name="q" placeholder="Search" value="{{ $_GET['q'] }}">
            <button class="btn my-2 my-sm-0 btn-secondary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
        <ul class="navbar-nav ml-auto">
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
                        <a class="dropdown-item" href="/dashboard">Account settings</a>
                        <a class="dropdown-item" href="/logout">Logout</a>
                    @else
                        <a class="dropdown-item" href="/login">Login</a>
                        <a class="dropdown-item" href="/register">Register</a>
                    @endif
                </div>
            </li>
        </ul>
    </div>
</nav>