<?php
session_start(); 


if (!isset($_SESSION['mensaje_enviado']) || $_SESSION['mensaje_enviado'] !== true) {
    header("Location: index.html");
    exit();
}

unset($_SESSION['mensaje_enviado']);
?>


<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="utf-8">
    <meta name="description" content="QABU">
    <meta property="og:title" content="QABU">
    <meta property="og:description" content="QABU">
    <meta property="og:image" content="https://qabu.com.mx/assets/img/logos/meta.png">
    <meta property="og:url" content="https://qabu.com.mx/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mensaje Enviado - QABU</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="js/script.js"></script>
    <link rel="icon" href="assets/img/logos/favicon.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3cd9aa6fad.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <nav id="Navbar" class="navbar navbar-expand-lg fixed-top px-5 py-3">
        <a class="navbar-brand" href="index" aria-label="Navigate to the homepage">
            <img src="assets/img/logos/logo2.png" class="navicon">
        </a>

        <button class="navbar-toggler ms-auto custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item px-xxl-4 py-3"><a class="nav-link" href="index">Inicio</a></li>
                <li class="nav-item px-xxl-4 py-3"><a class="nav-link" href="ubicacion">Ubicación</a></li>
                <li class="nav-item px-xxl-4 py-3"><a class="nav-link" href="modelos">Modelos</a></li>
                <li class="nav-item px-xxl-4 py-3"><a class="nav-link" href="amenidades">Amenidades</a></li>
                <li class="nav-item px-xxl-4 py-3"><a class="nav-link" href="https://boomsmartliving.com/" target="_blank">Desarrollador</a></li>
                <li class="nav-item px-xxl-4 py-3"><a class="nav-link active" href="#">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <section id="contacto" data-nav-color="green" class="section-contacto">
        <div class="top-space"></div>
        <div class="row h-100 justify-content-center px-5" data-aos="fade-in">
            <div class="col-12 col-lg-10 px-lg-5 my-auto text-center">
                <h1>¡Mensaje enviado con éxito!</h1>
                
                <h3 class="py-3">Hemos recibido tu mensaje correctamente.<br>Muy pronto uno de nuestros asesores se pondrá en contacto contigo.</h3>
                <p class="py-3">
                    <b>¡Tengamos una llamada!</b><br>+52 669 331 3725<br>ventas@qabuboutiqueliving.com
                </p>
                <h3>
                    <a href="https://www.instagram.com/qabuboutiqueliving/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.facebook.com/people/Qabu-Boutique-Living/61553008078330/?_rdr" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                </h3>
            </div>
        </div>
    </section>

    <section id="Footer" data-nav-color="green" class="footer">
        <div class="row h-100 justify-content-center px-5" data-aos="fade-in">
            <div class="col-lg-6 px-lg-5 my-auto" style="text-align: left;">
                <h2>Boom Smart Living</h2>
                <br>
                <h3>
                    <i class="fa-solid fa-location-dot"></i>Av. Camarón Sábalo 131. Piso 6, Oficina 3, Lomas de Mazatlán. 82110. Mazatlán, Sinaloa.<br><br>
                    <i class="fa-solid fa-phone"></i>+52 669 331 3725<br><br>
                    <i class="fa-solid fa-envelope"></i>ventas@qabuboutiqueliving.com
                </h3>
            </div>
            <div class="col-lg-6 text-center my-auto py-5 py-xxl-0">
                <h3>
                    <a href="https://www.instagram.com/boomsmartliving?igsh=MTJ4YXk4bjh4cXVxYQ==" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.facebook.com/share/16cJBY4YzS/?mibextid=wwXIfr" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                </h3>
                <a href="https://boomsmartliving.com/" target="_blank"><button class="btn my-3">Visitar Página</button></a>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6 footer-copy text-center my-auto">
                    <p><b>Un proyecto desarrollado por: <img src="assets/img/logos/boom.png" class="footicon"></b></p>
                </div>
                <div class="col-lg-6 footer-copy text-center my-auto">
                    <p><b>Desarrollo arquitectónico por: <img src="assets/img/logos/harqui.png" class="footicon"></b></p>
                </div>
            </div>
        </div>
    </section>

    <a href="https://wa.me/526693313725" target="_blank"><button id="whappBtn" title="Open WhatsApp"><img class="whapp" src="assets/img/logos/whatsapp.png"></button></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous" defer></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        AOS.init({
            duration: 2000,
        });
    </script>

    <script>
        const navbar = document.getElementById('Navbar');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const color = entry.target.getAttribute('data-nav-color');
                    navbar.classList.remove('light', 'green');
                    navbar.classList.add(color);
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('section[data-nav-color]').forEach(section => {
            observer.observe(section);
        });
    </script>


</body>