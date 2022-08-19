<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="./assets/style.css">

</head>

<body class="">
    <nav class="navbar">
        <div class="logo">
            <a href="/">
                <img src="./images/logo.svg" alt="">
            </a>
        </div>
        <div class="links">
            <a class="nav-link" href="/catalogue">Catalogue</a>
            <a class="nav-link" href="#about-us">About us</a>
            <a class="nav-link" href="#gallery">Gallery</a>
            <a class="nav-link" href="#contacts">Contacts</a>
        </div>
        <div class="contact">
            <button class="call-btn">Call me</button>
        </div>
    </nav>
    <div class="overview">
        <div class="over-left"></div>
        <h1>Catalogue</h1>
        <div class="catalogue">
            <div class="catalogue-card">
                <div class="card-image card-image1" alt=""></div>
                <h5 class="card-title">Fabric furniture</h5>
                <button class="card-btn">Open</button>
            </div>
            <div class="catalogue-card">
                <div class="card-image card-image2" alt=""></div>
                <h5 class="card-title">Wooden furniture</h5>
                <button class="card-btn">Open</button>
            </div>
            <div class="catalogue-card">
                <div class="card-image card-image3" alt=""></div>
                <h5 class="card-title">Leather furniture</h5>
                <button class="card-btn">Open</button>
            </div>
            <div class="catalogue-card ">
                <div class="card-image card-image4" alt=""></div>
                <h5 class="card-title">Complete furniture</h5>
                <button class="card-btn">Open</button>
            </div>
        </div>
    </div>
    <div id="contact" class="contact">
        <h3 class="contact-title">Have any question? We will help you</h3>
        <form class="contact-form" action="">
            <div class="contact-inputs">
                <input class="contact-input" type="text" placeholder="Fullname">
                <input class="contact-input" type="tel" placeholder="Phone number">
                <input class="contact-input" type="email" placeholder="E-mail">
            </div>
            <button class="contact-submit" type="submit">Call me</button>
        </form>
    </div>

</body>

</html>