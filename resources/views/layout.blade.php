<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>myForum</title>
    <link rel="stylesheet" href="/assets/mdbootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/mdbootstrap/css/mdb.css">
    <link rel="stylesheet" href="/assets/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="css/app.css">
    <script src="/assets/mdbootstrap/js/jquery.js"></script>
    <script src="/assets/mdbootstrap/js/bootstrap.js"></script>
    <script src="/assets/mdbootstrap/js/popper.js"></script>
    <script src="/js/app.js"></script>
    @stack('scripts')
</head>
<body>
<div class="w-100 bg-primary font-weight-bolder p-5 navbar"><a class="text-reset" href="/"><h1>My Forum</h1></a></div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Utilisateur
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Alexandre</a>
                <a class="dropdown-item" href="#">Andi</a>
                <a class="dropdown-item" href="#">Cyril</a>
                <a class="dropdown-item" href="#">Dimitri</a>
                <a class="dropdown-item" href="#">Dylan</a>
                <a class="dropdown-item" href="#">Gabriel</a>
                <a class="dropdown-item" href="#">Mathieu</a>
                <a class="dropdown-item" href="#">Quentin</a>
                <a class="dropdown-item" href="#">Sou</a>
                <a class="dropdown-item" href="#">William</a>
                <a class="dropdown-item" href="#">Xavier</a>
            </div>
        </li>
        <li class="nav-item"><a href="{{ route('themes.index') }}" class="btn">Gestion des thèmes</a></li>
        <li class="nav-item"><a href="{{ route('references.index') }}" class="btn">Gestion des références</a></li>
        <li class="nav-item"><a href="{{ route('roles.index') }}" class="btn">Gestion des rôles</a></li>
        <li class="nav-item"><a href="{{ route('states.index') }}" class="btn">Gestion des états</a></li>
        <li class="nav-item"><a href="{{ route('themes.index') }}" class="btn">Modération</a></li>
    </ul>
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
