<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helységnévtár</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <link href="/assets/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/assets/fontawesome/css/solid.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-dark py-2 sticky-top" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-map"></i>Helységnévtár</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#CosmoNavbar" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="CosmoNavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Települések</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="/all">Összes település</a>
                          <a class="dropdown-item" href="/abc">ABC sorrendbe</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/varos">Városok</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nagykozseg">Nagyközségek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kozseg">Községek</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container py-3 px-5">
        @yield('content')
    </main>
    <footer class="my-4 text-center">
        <p>Forrás:
            <a href="http://www.ksh.hu" target="_blank" rel="noopener noreferrer">KSH</a>
        </p>
    </footer>
</body>
</html>
