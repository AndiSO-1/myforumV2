<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>myForum</title>
    <link rel="stylesheet" href="/assets/mdbootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/mdbootstrap/css/mdb.css">
    <link rel="stylesheet" href="/assets/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/assets/mdbootstrap/js/jquery.js"></script>
    <script src="/assets/mdbootstrap/js/bootstrap.js"></script>
    <script src="/assets/mdbootstrap/js/popper.js"></script>
    <script src="/js/app.js"></script>
    @stack('scripts')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark teal lighten-2 text-white">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="/">My Forum</a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('themes.index') }}">Gestion des thèmes</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('references.index') }}">Gestion des références</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('roles.index') }}">Gestion des rôles</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('states.index') }}">Gestion des états</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('themes.index') }}">Modération</a></li>
                    @if (Auth::user())
                        <form method="post" class="nav-item" action="{{ route('logout') }}">
                            @csrf
                            <a class="nav-link" href="#"
                                onclick="event.preventDefault(); this.closest('form').submit();">Logout {{ Auth::user()->pseudo }}</a>
                        </form>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @if ($message = Session::get('message'))
        <div class="w-100 container text-center alert-success alert-block mb-3 flashmessage">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="container p-3">
        @yield ('content')
    </div>
</body>
</html>
