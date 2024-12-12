<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <!-- Bootswatch Lux Theme -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/js/bootstrap.bundle.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Tanulók</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/klippek">Klippek</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/autok">Autók</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/szinesz">Színész</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/szallitas">Szállítás</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
    <main class="container py-4 px-5">
      @yield("content")
    </main>
    <footer class="my-4 text-center">
        <p>$_POST post_gyakorló</p>
    </footer>
</body>
</html>
