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
        <img class="over-img" src="./images/overview-image.jpg" alt="">
        <div class="over-text">
            <h1 class=over-title>LOFT FURNITURE</h1>
            <a class="over-btn" href="/catalogue">Catalogue</a>
        </div>
    </div>
    <div id="gallery" class="gallery">
        <h3 class="gallery-title">Gallery</h3>
        <div class="gallery-images">
            <div class="gallery-image1 gallery-image">
                <div class="gallery-hover">
                    <a href="#" class="gallery-link">OPEN</a>
                </div>
            </div>
            <div class="gallery-image2 gallery-image">
                <div class="gallery-hover">
                    <a href="#" class="gallery-link">OPEN</a>
                </div>
            </div>
            <div class="gallery-image3 gallery-image">
                <div class="gallery-hover">
                    <a href="#" class="gallery-link">OPEN</a>
                </div>
            </div>
            <div class="gallery-image4 gallery-image">
                <div class="gallery-hover">
                    <a href="#" class="gallery-link">OPEN</a>
                </div>
            </div>
            <div class="gallery-image5 gallery-image">
                <div class="gallery-hover">
                    <a href="#" class="gallery-link">OPEN</a>
                </div>
            </div>
            <div class="gallery-image6 gallery-image">
                <div class="gallery-hover">
                    <a href="#" class="gallery-link">OPEN</a>
                </div>
            </div>
        </div>
    </div>
    <div id="about-us" class="about">
        <h3 class="about-title">About us</h3>
        <img src="./images/logo.svg" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda optio dolor, nisi placeat itaque dolore sapiente autem est qui minus, id accusamus, modi enim animi doloribus reprehenderit minima cum voluptatibus expedita velit quisquam quidem. Perferendis hic sint nulla aperiam facilis! Earum temporibus, facere accusantium iusto amet obcaecati. Molestiae quia a quas reiciendis quam maiores nobis voluptatem quaerat voluptatibus voluptates explicabo, suscipit provident officiis </p>
        <a href="/catalogue#contact" class="about-contact">Contacts us</a>

    </div>
    <footer>
        <div class="footer-logo">
            <img src="./images/logo.svg" alt="">
        </div>
        <div class="footer-info">
            <div>
                <p>Phone: +40 842 94 41 320</p>
                <p>Phone: +48 842 94 41 320</p>
                <p>E-mail: loftdesk@gmail.com</p>
                <p> Instagram: loftdesk_pl </p>

            </div>
            <div>
                <p>Office address: Marszałka Ofach 23, 85-310 Bydgoszcz, Poland</p>
                <p>Factory address: Szubińska 49, 85-312 Bydgoszcz, Poland</p>
            </div>
            <div>
                <a class="footer-link" href="#">LoftDesk privacy policy</a>
                <br>
                <a class="footer-link" href="#">LoftDesk public offer agreement</a>
            </div>
        </div>
        <p class="footer-cop">© All rights reserved loftdesk.pl 2017-2022</p>
    </footer>


</body>

</html>