<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Travel</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/mystyle.css">
    <!-- Font Awesome Solid -->
    <link href="/assets/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/assets/fontawesome/css/solid.css" rel="stylesheet">
    <script src="/assets/js/bootstrap.bundle.js"></script>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
        <div class="container bg-dark">
            <i class="fa-solid fa-umbrella-beach me-2"></i>
            <a class="navbar-brand" href="/">Happy Travel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    @foreach ($routes as $route)
                        <li class="nav-item">
                            <a class="nav-link" href="/uticel/{{ $route->uticel }}">{{ $route->uticel }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
    <main class="container pb-2">
        @yield('content')
    </main>
    <footer class="container text-center">
        <hr>
        <p>- Happy Travel - E-mail: <a href="mailto:hello@happytravel.hu">hello@happytravel.hu</a> - Tel: <a href="tel: +36 1 123-4567">06 1 123-4567</a> -</p>
    </footer>
</body>
</html>
