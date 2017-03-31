<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Starwars Webshop</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/products/figures">Figures</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/products/clothes">Clothes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/products/movies">Movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/products/plushies">Plushies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/sale">Sale</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cart">Shopping Cart</a>
            </li>
        </ul>
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