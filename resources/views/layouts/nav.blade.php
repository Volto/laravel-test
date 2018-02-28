<header>

    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">

            <a href="/">
                <img id="main-logo" src="{{ asset('img/worldwide.png') }}"/>
            </a>
            &nbsp;
            <ul class="nav">
                <li class="nav-item dropdown">
                    <a id="navbar-item" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Articles</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/articles">Show all</a>
                        @if (auth()->check())

                            <a class="dropdown-item" href="/articles/create">Create an article</a>
                            <a class="dropdown-item" href="/myarticles">See my articles</a>

                        @endif
                    </div>
                </li>
            </ul>

            <ul class="nav ml-auto">

                @if (auth()->check())
                    <li class="nav-item dropdown">
                        <a id="navbar-item" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/register/edit">Edit profile</a>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    </li>

                @else

                    <li class="nav-item">
                        <a id="navbar-item" href="/login">Login</a> &nbsp;&nbsp;
                    </li>
                    <li class="nav-item">
                        <a id="navbar-item" href="/register">Register</a>
                    </li>

                @endif
            </ul>
        </div>
    </div>

</header>