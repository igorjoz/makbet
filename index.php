<!DOCTYPE HTML>
<html lang="pl">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- site info -->
    <title>Makbet - akumulator wiedzy - start</title>
    <meta name="description"
        content="Akumulacja esencyjnej wiedzy na temat Makbeta - dramatu Williama Shakespeare'a. Streszczenie krótkie, plan wydarzeń, opis bohaterów, motywy oraz quiz! Dodatkowo informacje o Williamie Shakespearze, teatrze elżbietańskim i cechy dramatu shakespearowskiego; linki do przydatnych stron, fimów wartych uwagi. Wszystko uporządkowane i w jednym miejscu! Idealne opracowanie szkolnej lektury.">
    <meta name="keywords"
        content="Makbet, Macbeth, William Shakespeare, William Szekspir, Shakespeare, tragedia, dramat, Lady Makbet, Lady Macbeth, streszczenie, opracowanie, bohaterowie, motywy, kultura, lektura, lektura szkolna, szkoła, pomoc naukowa, ściąga">
    <meta name="author" content="Igor Józefowicz">

    <!-- favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/css/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/css/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/css/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/css/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="assets/css/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="assets/css/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="assets/css/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets/css/favicon/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="assets/css/favicon/favicon-196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="assets/css/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/css/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/css/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/css/favicon/favicon-128.png" sizes="128x128">
    <meta name="application-name" content="Makbet - akumulator wiedzy">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="assets/css/favicon/mstile-144x144.png">
    <meta name="msapplication-square70x70logo" content="assets/css/favicon/mstile-70x70.png">
    <meta name="msapplication-square150x150logo" content="assets/css/favicon/mstile-150x150.png">
    <meta name="msapplication-wide310x150logo" content="assets/css/favicon/mstile-310x150.png">
    <meta name="msapplication-square310x310logo" content="assets/css/favicon/mstile-310x310.png">

    <!-- fonts: Montserrat 500, 600, 700 & Sriracha 400-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    

    <!-- stylesheets & fontello -->
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="assets/fontello/css/fontello.css" type="text/css">

    <!-- jquery 3.5.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

    <!-- logo -->
    <div class="logo unselectable">
        <div class="fLeft">
            <a href="index.php?p=start">
                <img class="logo__image" src="assets/img/shakespeare.jpg" alt="William Shakespeare">
            </a>
        </div>

        <!-- <div class="fLeft" id="test">
            <a href="index.php?p=start"></a>
        </div> -->

        <div class="fLeft">
            <a href="index.php?p=start">
                <h1 class="logo__text">Shakespeare bez tajemnic - Makbet</h1>
            </a>
        </div>

        <!-- filling .logo__text with proper value -->
        <script src="assets/js/title.js"></script>

        <div style="clear: both;"></div>
    </div>

    <!-- top navigation -->
    <nav class="topnav unselectable">
        <ul class="menu">
            <li class="menu__item">
                <a href="index.php?p=start" title="Informacje o Shakespearze i teatrze elżbietańskim">Shakespeare i teatr</a>
            </li>

            <li class="menu__item">
                <a href="index.php?p=streszczenie" title="Streszczenie Makbeta + opracowanie w formie filmu">Streszczenie</a>
            </li>

            <li class="menu__item">
                <a href="index.php?p=bohaterowie" title="Cech charakteru i zachowania bohaterów w Makbecie">Bohaterowie</a>
            </li>

            <li class="menu__item">
                <a href="index.php?p=quiz" title="Sprawdź się w quizie o Makbecie!">Quiz</a>
            </li>
        </ul>
    </nav>

    <!-- main content -->
    <div class="main-content-wrapper">

    <?php
        $pageName = $_GET['p'] ?? null;

        if ($pageName === 'bohaterowie') {
            require_once('elements/bohaterowie.php');
        } elseif($pageName === 'streszczenie') {
            require_once('elements/streszczenie.php');
        } elseif ($pageName === 'quiz') {
            require_once('elements/quiz.php');
        } else {
            require_once('elements/start.php');
        }
    ?>

    </div>

    <!-- footer -->
    <footer>
        <div class="footer unselectable">
            <div class="footer__intro">
                Twórcy projektu:
            </div>

            <div class="footer__author footer__author--1">
                <span class="footer__author-name">Igor Józefowicz</span>
                <i class="icon-code"></i>
            </div>
            
            <div class="footer__author footer__author--2 footer__author--adrian">
                <span class="footer__author-name">Adrian Ściepura</span>
                <img class="footer__csharp-icon" src="assets/img/csharp.png" alt="csharp">
            </div>

            <div class="footer__author footer__author--3">
                <span class="footer__author-name">Jan Walczak</span>
                <i class="icon-brush"></i>
            </div>
        </div>
    </footer>

</body>

</html>