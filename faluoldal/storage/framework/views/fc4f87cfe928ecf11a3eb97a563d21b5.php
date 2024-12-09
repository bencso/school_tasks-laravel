<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pusztaszentmária</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/bootstrap.bundle.js"></script>
    <style>
        h2,
        h5 {
            font-family: 'PT Sans Narrow', sans-serif;
        }

        header,
        .nav-link,
        .navbar-brand {
            font-family: 'Fira Sans', sans-serif;
        }
    </style>
</head>

<body>
    <header
        style="height: 300px; background-image: url('/img/header.jpg');background-repeat: no-repeat; background-size: cover; background-position: center 70%; text-shadow: 2px 2px 4px #000;"
        class="d-flex justify-content-center align-items-center text-white">
        <h1>Üdvözöljük a településünk weboldalán!</h1>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: rgb(0, 83, 151)">
        <div class="container">
            <a class="navbar-brand" href="/">Pusztaszentmária</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-white" href="/hirek">Hírek</a>
                    <a class="nav-link text-white" href="/vendegkonyv">Vendégkönyv</a>
                </div>
            </div>
    </nav>
    <main>
        <div class="container">
            <div class="row">
                    <?php echo $__env->yieldContent('content'); ?>
                <div class="col-md-3">
                    <h5 class="mt-5">Boldog névnapot!</h5>
                    <span id="nevnap"></span>
                    <hr>
                    <div>
                        <h5>Menetrendek</h5>
                        <p>
                            Vasúti menetrend
                        </p>
                        <a href="https://www.mavcsoport.hu/" target="_blank" rel="noopener noreferrer"><img
                                src="/img/mav.jpg" alt="Menetrend" class="img-fluid"></a>
                    </div>
                    <div class="mt-3">
                        <p>
                            Volánbusz menetrend
                        </p>
                        <a href="http://www.volanbusz.hu" target="_blank" rel="noopener noreferrer"><img
                                src="/img/volanbusz.png" alt="Menetrend" class="img-fluid"></a>
                    </div>
                    <hr>
                    <div class="mt-3">
                        <h5>Ügyintézés</h5>
                        <p>
                            Ügyfélkapu
                        </p>
                        <a href="https://ugyfelkapu.gov.hu/" target="_blank" rel="noopener noreferrer"><img
                                src="/img/ugyfelkapu.jpg" alt="Ugyfelkapu" class="img-fluid"></a>
                    </div>
                    <hr>
                    <div class="mt-3">
                        <h5>Magyar Falu Program</h5>
                        <a href="https://magyarfaluprogram.hu/" target="_blank" rel="noopener noreferrer"><img
                                src="/img/magyar-falu-program.png" alt="Magyar Falu Program" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="text-white py-3" style="background: rgb(0, 83, 151)">
        <div class="container">
            <h5>Elérhetőség</h5>
            <hr>
            <div class="row">
                <div class="col-md">
                    <p>Polgármesteri hivatal</br>
                    6666 Pusztaszentmária, Petőfi út 1.</p>
                </div>
                <div class="col-md">
                    <p>Telefon : <a class="link-light" href="tel:+36661234567">06 66 123-4567</a></p>
                    <p>Email: <a class="link-light" href="mailto:hivatal@pusztaszentmaria.hu">hivatal@pusztaszentmaria.hu</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="/js/nevnap.js"></script>
</body>

</html>
<?php /**PATH C:\Users\babolnai.bence\Desktop\14SZ-webmeres\laravel\resources\views/layout.blade.php ENDPATH**/ ?>