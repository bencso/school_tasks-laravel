<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Világ országai</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/mystyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body class="bg-light">
    <header>
        <h1>Világ országai</h1>
    </header>
    <div class="container-fliud bg-dark">
        <nav class="navbar navbar-expand bg-dark navbar-dark container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Főoldal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kontinensek">Kontinensek</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/orszagok">Országok</a>
                </li>
            </ul>
        </nav>
    </div>
    <main class="container pb-2">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <footer class="container">
        <hr>
        <p class="text-center">Bábolnai Bence - 13A</p>
    </footer>
</body>

</html>
<?php /**PATH C:\Users\babolnai.bence\Desktop\Orszagok\orszagok\resources\views/layout.blade.php ENDPATH**/ ?>