<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- navbar mulai di sini -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
    <a class="nav-link active" aria-current="page" href="{{ url('/welcome') }}">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/about') }}">About</a>
        </li>

        <!-- nama -->

        <li class="nav-item">
            <a class="nav-link" href="#">Farid 2301010118</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Nasriani 2301010114</a>
        </li>

        <!-- nama -->



</nav>
    @yield('content')
    <!-- navbar berakhir di sini -->




</body>
<footer>
    <!-- footer disini -->
    <footer>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
    </footer>
    <!-- footer berakhir disini -->
</footer>
</html>
