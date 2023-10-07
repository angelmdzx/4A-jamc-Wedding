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
                contact us
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
                contact
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="contact__info pt-120 pb-120">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="info__items center">
                <div class="info__icon">
                <i class="fas fa-map-marker-alt"></i>
                </div>
                <h4>Office address</h4>
                <p>Inner Circular Rose Valley Park.</p>
            </div>
            </div>
            <div class="col-lg-4">
                <div class="info__items center">
                <div class="info__icon">
                <i class="fa-solid fa-envelope"></i>
                </div>
                <h4>Email Address</h4>
                <p>example@example.com</p>
            </div>
            </div>
            <div class="col-lg-4">
                <div class="info__items center">
                <div class="info__icon">
                <i class="fas fa-phone"></i>
                </div>
                <h4>Phone Number</h4>
                <p>+123 456 789 888</p>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="contact__section pt-120 pb-120">
    <div class="container">
        <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
            <h2 class="section__title">
                have any question?
            </h2>
            <img src="HTML/assets/img/tittle/flower.png" alt="flower__tittle">
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="contact__right">
                    <form action="contact.php" id="contact-form" method="POST">
                        <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="form__clt">
                                <input type="text" name="name" id="name" placeholder="Your Name...">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form__clt">
                                <input type="text" name="email" id="email" placeholder=" Your Email...">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form__clt">
                                <input type="text" name="number" id="number" placeholder="Phone Number...">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form__clt__big">
                                <textarea name="message" id="message" placeholder="Message..."></textarea> 
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="cmn--btn">
                                send message
                                </button>
                        </div>
                        </div>
                        <p class="form-message"></p>
                    </form>
                </div>
            </div>
            </div>
    </div>
</section>

<div class="map__section">
    <div class="googpemap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13004082.928417291!2d-104.65713107818928!3d37.275578278180674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1649599302291!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

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