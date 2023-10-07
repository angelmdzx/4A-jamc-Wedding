<?php 
    if(!isset($_SESSION['validarIngreso'])){
        echo
        '
            <script>
                window.location = "index.php?pagina=login";
            </script>
        ';
        return;
    }else{
        if($_SESSION['validarIngreso'] != "ok"){
            echo
            '
                <script>
                    window.location = "index.php?pagina=login";
                </script>
            ';
            return;
        }
    }

    $usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);
?>
<div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
            our gallery
            </h1>
            <ul class="right__content">
                <li>
                <a href="index.html">
                    Home
                </a>
                </li>
                <li>
                <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                gallery
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="celebrate__section pb-120 pt-120">
    <div class="flowers__shape">
        <img src="HTML/assets/img/celebrate/flower.png" alt="shape__image">
    </div>
    <div class="left__shape">
        <img src="HTML/assets/img/celebrate/left.png" alt="left__shape">
    </div>
    <div class="container">
        <div class="celebrate__wrapper">
            <div class="border__shape">
                <img src="HTML/assets/img/celebrate/shape.png" alt="shape">
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="celebrate__items">
                    <div class="celebrate__thumb">
                        <img src="HTML/assets/img/celebrate/celebrate.jpg" alt="celebrate__image">
                    </div>
                </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="celebrate__content center">
                    <h3>
                        Join us to celebrate
                    </h3>
                    <h3>
                        The wedding day of
                    </h3>
                    <h2 class="celebrate__tittle">
                        Lizbeth & Israel
                    </h2>
                    <h3 class="sub__tittle">
                        Which is celebration on
                    </h3>
                    <ul class="d-flex">
                        <li>April</li>
                        <li>15</li>
                        <li class="mr-none">2023</li>
                    </ul>
                    <div class="last__text">
                        <h3>
                            Starting at 2:00
                        </h3>
                        <p>
                            In the afternoon
                        </p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Celebrate Section End ========= -->

<!--=========== Gallery Section Here ========= -->
<section class="gallery__section pt-120 pb-120">
    <div class="left__shape">
        <img src="HTML/assets/img/testi/shape-left.png" alt="left__shape">
    </div>
    <div class="container">
        <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
            <h2 class="section__title">
                Captured Moments
            </h2>
            <img src="HTML/assets/img/tittle/flower.png" alt="flower__tittle">
        </div>
        <div class="row g-4">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="gallery__thumb">
                <a href="HTML/assets/img/gallery/g1.jpg" class="popup__image">
                    <img src="HTML/assets/img/gallery/g1.jpg" alt="gallery__image">
                </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="gallery__thumb">
                <a href="HTML/assets/img/gallery/g2.jpg" class="popup__image">
                    <img src="HTML/assets/img/gallery/g2.jpg" alt="gallery__image">
                </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="gallery__thumb">
                <a href="HTML/assets/img/gallery/g3.jpg" class="popup__image">
                    <img src="HTML/assets/img/gallery/g3.jpg" alt="gallery__image">
                </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="gallery__thumb">
                <a href="HTML/assets/img/gallery/g4.jpg" class="popup__image">
                    <img src="HTML/assets/img/gallery/g4.jpg" alt="gallery__image">
                </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="gallery__thumb">
                <a href="HTML/assets/img/gallery/g5.jpg" class="popup__image">
                    <img src="HTML/assets/img/gallery/g5.jpg" alt="gallery__image">
                </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="gallery__thumb">
                <a href="HTML/assets/img/gallery/g6.jpg" class="popup__image">
                    <img src="HTML/assets/img/gallery/g6.jpg" alt="gallery__image">
                </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Gallery Section End ========= -->

<!--=========== Footer Section Here ========= -->
<div class="footer__section">
    <div class="container">
        <div class="border__area">
            <div class="container">
                <div class="footer__logo center">
                <a href="index.html">
                    <img src="HTML/assets/img/logo/logo.png" alt="footer__logo">
                </a>
                </div>
                <div class="footer__bottom center">
                <p>© 2023 All Rights Reserved. Designed by <a href="#0" class="text-base-2">NextGenerationDev</a></p>
                <ul class="footer__icon">
                    <li>
                        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li class="active">
                        <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                    </li>
                    <li class="mr-none">
                        <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                </ul>
                <ul class="footer__menu">
                    <li><a href="index.php?pagina=home">home</a></li>
                    <li><a href="index.php?pagina=about">about</a></li>
                    <li><a href="index.php?pagina=service">service</a></li>
                    <li><a href="index.php?pagina=story">Story</a></li>
                    <li><a href="index.php?pagina=gallery">gallery</a></li>
                    <li><a href="index.php?pagina=blog">blog</a></li>
                    <li class="mr-none"><a href="index.php?pagina=contact">contact</a></li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>