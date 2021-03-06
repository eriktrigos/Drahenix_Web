<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PlusReal | Drahenix</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Tecnología, dando pasos hacia el futuro.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="og:image" content="assets/images/og/logo_og.jpg">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/fontawesome.css">
    <link rel="stylesheet" href="assets/css/vendor/lightbox.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="main-page">
        <div class="main-page">
        <!-- Start Header -->
        <header class="header-area formobile-menu header--transparent black-logo-version ">
            <div class="header-wrapper" id="header-wrapper">
                <div class="header-left">
                    <div class="logo">
                        <a href="es.html">
                            <img src="assets/images/logo/logo.png" alt="Drahenix">
                        </a>
                    </div>
                </div>
                <div class="header-right">
                    <div class="mainmenunav d-lg-block">
                        <!-- Start Mainmanu Nav -->
                        <nav class="main-menu-navbar">
                            <ul class="mainmenu">
                                <li><a class="" href="es.html">INICIO</a></li>
                                <li><a class="" href="acerca.html">ACERCA DE</a></li>
                                <li class="has-droupdown"><a class="on">PROYECTOS</a>
                                    <ul class="submenu">
                                        <li><a class="on" href="#">PLUSREAL</a></li>
                                     </ul>
                                </li>
                                <li><a class="" href="contacto.html">CONTACTO</a></li>
                                <li class="pl--100 sm-pl--0 sm-pt--50"><a class="" href="plusreal.php">EN</a></li>
                                <li class="mr--0 ml--0 quitar"><a class="disabled color-white">|</a></li>
                                <li><a class="on" href="plusreal_es.php">ES</a></li>
                            </ul>
                        </nav>
                        <!-- End Mainmanu Nav -->
                        <!-- Start Humberger Menu  -->
                        <div class="humberger-menu d-block d-lg-none">
                            <span class="menutrigger text-white">
                                <i data-feather="menu"></i>
                            </span>
                        </div>
                        <!-- End Humberger Menu  -->
                        <!-- Start Close Menu  -->
                        <div class="close-menu d-block d-lg-none">
                            <span class="closeTrigger">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                        <!-- End Close Menu  -->
                </div>
            </div>
        </header>
        <!-- Start Breadcrump Area  -->
        <div class="breadcrumb-area rn-bg-color ptb--120 bg_image bg_image--1" data-black-overlay="6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-inner pt--100 pt_sm--40 pt_md--50">
                            <div class="row">
                            <div class="col-lg-12">
                                <div class="inner">
                                    <h1 class="title theme-gradient title-left">PLUSREAL.</h1>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrump Area  -->
        <!-- Start Page Wrapper  -->
        <main class="page-wrapper">
            <!-- Start Portfolio Details Area  -->
            <div class="about-area about-position-top pb--120">
                <div class="about-wrapper">
                    <div class="container">
                        <div class="ribbon-right" style="width: 190px;">
                        	<a href="https://www.discord.gg/K55QfE9" target="_blank">
                        		<div class="ribbon ribbon-right" style="color: #fff; font-weight: 400; font-size: 12px"> ÚNETE EN <img src="assets/images/brand/discord.png" alt="Discord" /></div>
                        	</a>
                    	</div>
                        <div class="row row--35 align-items-center">
                            <div class="col-lg-4 col-md-12">
                                <div class="thumbnail thumbnail2">
                                    <img class="w-100" src="assets/images/plusreal/plusreal.jpg" alt="Plus Real" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="about-inner inner">
                                    <div class="inner">
                                        <h3 class="project-quote">OBTÉN ASOMBROSAS RECOMPENSAS AL DIVERTIRTE CON NUESTROS JUEGOS.</h3>
                                        <p class="subtitle" style="color: #778797">Obtén una experiencia inmersiva 3D al jugar alguno de nuestros juegos. Si eres lo suficientemente bueno como para obtener un cupón, por favor no dudes en comunicarte con nosotros y así llevarte una gran sorpresa.</p>
                                        <div class="portfolio-view-list d-flex flex-wrap mt--80"> 
                                            <div class="port-view pl--20 pr--20 text-center">
                                                <h4 class="mb--minus grey-color">
                                                    <?php
                                                        include '../vendor/autoload.php';

                                                        use Goutte\Client;

                                                        $client = new Client();
                                                        $crawler = $client->request('GET', 'https://play.google.com/store/apps/details?id=com.AGM.AGM_Prototype');
                                                        $cversion = $crawler->filter('div.IQ1z0d > span.htlgb')->eq(3);
                                                        echo $cversion->text();
                                                    ?>
                                                </h4>
                                                <!--<h4 class="mb--minus grey-color">1.9.2.1</h4>-->
                                                <span class="app-info">VERSIÓN</span>
                                            </div>
                                            <div class="port-view pl--20 pr--20 text-center">
                                                <h4 class="mb--minus grey-color">
                                                    <?php
                                                        include '../vendor/autoload.php';

                                                        //use Goutte\Client;

                                                        $client = new Client();
                                                        $crawler = $client->request('GET', 'https://play.google.com/store/apps/details?id=com.AGM.AGM_Prototype');
                                                        $updatedate = $crawler->filter('div.IQ1z0d > span.htlgb')->eq(0);
                                                        echo $updatedate->text();
                                                    ?>
                                                </h4>
                                                <!--<h4 class="mb--minus grey-color">June 7, 2020</h4>-->
                                                <span class="app-info">ACTUALIZACIÓN</span>
                                            </div>
                                            <div class="port-view pl--20 pr--20 text-center">
                                                <h4 class="mb--minus grey-color counter">
                                                    <?php
                                                        include '../vendor/autoload.php';

                                                        //use Goutte\Client;

                                                        $client = new Client();
                                                        $crawler = $client->request('GET', 'https://play.google.com/store/apps/details?id=com.AGM.AGM_Prototype');
                                                        $download = $crawler->filter('div.IQ1z0d > span.htlgb')->eq(2);
                                                        echo $download->text();
                                                    ?>
                                                </h4>
                                                <!--<h4 class="mb--minus grey-color counter count">100</h4>-->
                                                <span class="app-info">DESCARGAS</span>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="mt--40">
                                        <a class="rn-button-style--2 btn_border btn_border--dark btn-size-md" href="http://drahenix.com/plusreal/index.html">IR AL SITIO WEB</a>
                                        <a class="discord-color discord-text-responsive" href="https://www.discord.gg/K55QfE9" target="_blank">ÚNETE EN</a>
                                        <a class="discord-color discord-logo-responsive" href="https://www.discord.gg/K55QfE9" target="_blank"><i class="fab fa-discord"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="rn-portfolio-details ptb--120 bg_color--1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="portfolio-details">
                                <div class="portfolio-thumb-inner">
                                        <div class="thumb position-relative bg_color--3">
                                        <img src="assets/images/plusreal/youtube_cover.jpg" alt="Youtube Video">
                                            <div class="buton-play">
                                                <div class="social-share-inner">
                                                    <a class="play__btn" style="font-size: 50px;" href="https://www.youtube.com/watch?v=7fmxF5f5Db0"><i class="fas fa-play position-top-center play-icon" style="color: #fff"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Portfolio Details Area  -->
 <!-- Start Gallery Area  -->
            <div class="rn-gallery-area rn-section-gap bg_color--1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center mb--80 mb_sm--60" >
                                <h2 class="title">Galería</h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-wrapper gallery-grid row mt_dec--60" id="animated-thumbnials">

                        <!-- Start Single Gallery -->
                        <a class="item-portfolio-static gallery col-lg-6 col-md-6" href="assets/images/plusreal/01.jpg">
                            <div class="portfolio-static">
                                <div class="thumbnail-inner">
                                    <div class="thumbnail">
                                        <img src="assets/images/plusreal/01.jpg" alt="1">
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        <!-- End Single Gallery -->

                        <!-- Start Single Gallery -->
                        <a class="item-portfolio-static gallery col-lg-6 col-md-6" href="assets/images/plusreal/02.jpg">
                            <div class="portfolio-static">
                                <div class="thumbnail-inner">
                                    <div class="thumbnail">
                                        <img src="assets/images/plusreal/02.jpg" alt="2">
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        <!-- End Single Gallery -->

                        <!-- Start Single Gallery -->
                        <a class="item-portfolio-static gallery col-lg-6 col-md-6" href="assets/images/plusreal/03.jpg">
                            <div class="portfolio-static">
                                <div class="thumbnail-inner">
                                    <div class="thumbnail">
                                        <img src="assets/images/plusreal/03.jpg" alt="3">
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        <!-- End Single Gallery -->

                        <!-- Start Single Gallery -->
                        <a class="item-portfolio-static gallery col-lg-6 col-md-6" href="assets/images/plusreal/04.jpg">
                            <div class="portfolio-static">
                                <div class="thumbnail-inner">
                                    <div class="thumbnail">
                                        <img src="assets/images/plusreal/04.jpg" alt="4">
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        <!-- End Single Gallery -->

                        <!-- Start Single Gallery -->
                        <a class="item-portfolio-static gallery col-lg-6 col-md-6" href="assets/images/plusreal/05.jpg">
                            <div class="portfolio-static">
                                <div class="thumbnail-inner">
                                    <div class="thumbnail">
                                        <img src="assets/images/plusreal/05.jpg" alt="5">
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        <!-- End Single Gallery -->

                        <!-- Start Single Gallery -->
                        <a class="item-portfolio-static gallery col-lg-6 col-md-6" href="assets/images/plusreal/06.jpg">
                            <div class="portfolio-static">
                                <div class="thumbnail-inner">
                                    <div class="thumbnail">
                                        <img src="assets/images/plusreal/06.jpg" alt="6">
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        <!-- End Single Gallery -->
                    </div>
                </div>
            </div>
            <!-- End Gallery Area  -->
            <!-- Start Service Area  -->
            <div class="rn-service-area rn-section-gap bg_color--1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center mb--30">
                                <h2>Crea tus Propias Promociones</h2>
                                <p>Creamos PlusReal de tal manera que cualquier compañía puede agregar sus propias promociones y cupones. Lo hicimos de esta manera porque queremos que nuestros usuarios siempre tengan muchas recompensas disponibles. La idea es que todos puedan jugar un grandioso juego, tengan una experiencia virtual inmersiva y finalmente obtengan algo que tenga valor en el mundo real. <br>¿Quires saber más? Contáctanos y estaremos felices de responder a todas tus preguntas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Start Single Service  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="single-service service__style--4 large-size text-center">
                                <a href="under-construction.html">
                                    <div class="service">
                                        <div class="icon">
                                            <i class="fas fa-certificate"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="title">Promociones</h3>
                                            <p>Cada compañía tiene control total sobre las promociones, los puntajes requeridos, el número de cupones disponibles, las fechas durante las cuales la promoción está activa, etc.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Service  -->

                        <!-- Start Single Service  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="single-service service__style--4 large-size text-center">
                                <a href="under-construction.html">
                                    <div class="service">
                                        <div class="icon">
                                            <i class="fas fa-trophy"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="title">Recompensas</h3>
                                            <p>Cupones son nuestras recompensas más populares (porcentaje o cantidad fija), pero también permitimos a las empresas otorgar acceso limitado, o recompensas de un solo uso. Como siempre las compañías tienen el control completo sobre las recompesas.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Service  -->

                        <!-- Start Single Service  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="single-service service__style--4 large-size text-center">
                                <a href="under-construction.html">
                                    <div class="service">
                                        <div class="icon">
                                            <i class="fas fa-ad"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="title">Ads</h3>
                                            <p>Si no estas interesado en las promociones o en las recompensas, siempre puedes crear tus anuncios con nosotros.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Service  -->

                        <!-- Start Single Service  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="single-service service__style--4 large-size text-center">
                                <a href="under-construction.html">
                                    <div class="service">
                                        <div class="icon">
                                            <i i class="fas fa-gamepad"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="title">Juegos</h3>
                                            <p>Tenemos juegos exclusivos para las empresas que quieran ir un paso más allá.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Service  -->

                        <!-- Start Single Service  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="single-service service__style--4 large-size text-center">
                                <a href="under-construction.html">
                                    <div class="service">
                                        <div class="icon">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="title">Marketing e Informes</h3>
                                            <p>¿Funcionó? ¿Cómo analizo mis promociones? No te preocupes, ya que hemos diseñado un portal donde se puden recolectar todos estos datos.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Service  -->

                        <!-- Start Single Service  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="single-service service__style--4 large-size text-center">
                                <a href="under-construction.html">
                                    <div class="service">
                                        <div class="icon">
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="title">Más</h3>
                                            <p>No estas seguro de querer entrar en esta asombrosa experiencia, ¿qué tal si te dijera que tenemos pruebas gratuitas donde puedes probar todo esto?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Service  -->

                    </div>
                </div>
            </div>
            <!-- Start Service Area  -->
             <!-- Start Brand Area -->
            <div class="rn-brand-area brand-separation">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="brand-style-2">
                                <li><a href="https://play.google.com/store/apps/details?id=com.AGM.AGM_Prototype&fbclid=IwAR0BAoIZ82JltIwlATW6GZtA_usjKJivr0-Gf6V1IErYB4wQpOZxLaO1SPw" target="_blank">
                                    <img src="assets/images/brand/googleplay_es.png" alt="Play Store"/></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="brand-style-2">
                                <li><a href="https://apps.apple.com/mx/app/plusreal/id1547719671" target="_blank">
                                    <img src="assets/images/brand/appstore_es.png" alt="App Store"/></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Brand Area -->
        </main>

        <!-- End Page Wrapper  -->
        <footer class="footer-area footer-default">
            <div class="footer-wrapper">
                <div class="row align-items-end row--0">
                    <div class="col-lg-4">
                        <div class="footer-left">
                            <div class="inner">
                                <h2 class="no-letter-spacing">Haz <br /> contacto</h2>
                                <div class="social-share-inner">
                                    <ul class="social-share social-style--2 d-flex justify-content-start liststyle mt--15">
                                        <li><a class="facebook-color" href="https://www.facebook.com/Drahenix" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                        <li class="pl--50 pr--42"><a class="discord-color" href="https://www.discord.gg/K55QfE9" target="_blank"><i class="fab fa-discord"></i></a></li>
                                        <li><a class="youtube-color" href="https://www.youtube.com/channel/UCmgK0DjwCdbAODJtIn9_ZMg" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="footer-right" data-black-overlay="6">
                            <div class="row">
                                <!-- Start Single Widget -->
                                <div class="col-lg-4 col-sm-4 col-12">
                                    <div class="footer-widget">
                                        <h4>Quick Link</h4>
                                        <ul class="ft-link">
                                            <li><a href="es.html">Inicio</a></li>
                                            <li><a href="acerca.html">Acerca de</a></li>
                                            <li><a class="disabled color-gray">Proyectos</a></li>
                                            <li class="pl--30"><a href="plusreal_es.php">PlusReal</a></li>
                                            <li><a href="contacto.html">Contacto</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Widget  -->
                                <!-- Start Single Widget -->
                                <div class="col-lg-4 col-sm-4 col-12 mt_mobile--30">
                                    <div class="footer-widget">
                                        <h4>Saluda</h4>
                                        <ul class="ft-link">
                                            <li><a href="mailto:contact@drahenix.com">contact@drahenix.com</a></li>
                                            <li><a href="tel:2067550280">206.755.0280</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Widget  -->
                                <div class="col-lg-4 col-sm-4 col-12 mt_mobile--30">
                                    <div class="footer-widget">
                                        <h4>Información Importante</h4>
                                        <ul class="ft-link">
                                            <li><a href="politica-de-privacidad.html">Política de Privacidad</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="copyright">
                                <div class="col-lg-12">
                                    <div class="copyright-text copyright">
                                        <p>© <script>document.write(new Date().getFullYear())</script> Drahenix.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/stellar.js"></script>
    <script src="assets/js/vendor/particles.js"></script>
    <script src="assets/js/vendor/masonry.js"></script>
    <script src="assets/js/vendor/stickysidebar.js"></script>
    <script src="assets/js/vendor/contactform.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


</body>

</html>