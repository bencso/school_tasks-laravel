<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/mystyle.css">
    <script src="/js/bootstrap.bundle.js"></script>
</head>
<body class="bg-light">
    <div class="container-fliud bg-dark">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark container">
          <a class="navbar-brand" href="/">Cute cats</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/">Cat pics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/authors">Author</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/random">Random cats</a>
              </li>
            </ul>
          </div>
        </nav>
    </div>
    <div class="container pb-2 pt-2">
        <p class="text-center fs-1">@yield('title')</p>
        @yield('content')
    </div>
    <footer class="container text-center">
        <hr>
        <p>Bábolnai Bence - 13.A</p>
    </footer>
</body>
</html>
