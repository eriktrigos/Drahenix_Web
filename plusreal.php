<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PlusReal | Drahenix</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="A high tech company.">
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
                        <a href="index.html">
                            <img src="assets/images/logo/logo.png" alt="Drahenix">
                        </a>
                    </div>
                </div>
                <div class="header-right">
                    <div class="mainmenunav d-lg-block">
                        <!-- Start Mainmanu Nav -->
                        <nav class="main-menu-navbar">
                            <ul class="mainmenu">
                                <li><a class="" href="index.html">HOME</a></li>
                                <li><a class="" href="about.html">ABOUT</a></li>
                                <li class="has-droupdown"><a class="on">PROJECTS</a>
                                    <ul class="submenu">
                                        <li><a class="on" href="#">PLUSREAL</a></li>
                                     </ul>
                                </li>
                                <li><a class="" href="contact.html">CONTACT</a></li>
                                <li class="pl--100 sm-pl--0 sm-pt--50"><a class="on" href="plusreal.php">EN</a></li>
                                <li class="mr--0 ml--0 quitar"><a class="disabled color-white">|</a></li>
                                <li><a class="" href="plusreal_es.php">ES</a></li>
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
                        		<div class="ribbon ribbon-right" style="color: #fff; font-weight: 400; font-size: 12px"> JOIN US IN <img src="assets/images/brand/discord.png" alt="Discord" /></div>
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
                                        <h3 class="project-quote">GET AMAZING REWARDS WHILE PLAYING AR GAMES.</h3>
                                        <p class="subtitle" style="color: #778797">Get an inmersive 3D experience by playing one of our amazing games. If you're good enough to get a coupon, please reach to us and get a nice surprice.</p>
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
                                                <span class="app-info">CURRENT VERSION</span>
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
                                                <span class="app-info">UPDATED</span>
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
                                                <span class="app-info">INSTALLS</span>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="mt--40">
                                        <a class="rn-button-style--2 btn_border btn_border--dark btn-size-md" href="http://drahenix.com/plusreal/index.html">GO TO THE WEBSITE</a>
                                        <a class="discord-color discord-text-responsive" href="https://www.discord.gg/K55QfE9" target="_blank">JOIN US ON</a>
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
                                <h2 class="title">Gallery</h2>
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
                                <h2>Advertise with Us</h2>
                                <p>We created PlusReal in a way that any company can add their own promotions and coupons to our games. We did it like this because we always wanted to have as many rewards as possible to our users. The idea is to let everyone play an amazing game, get an immersive virtual experience and finally get something with value in the real world. <br>Do you want to know more? Contact us and we will be happy to answer all your questions.</p>
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
                                            <h3 class="title">Promotions</h3>
                                            <p>Every company has a full control over the promotions, the scores required, the number of coupons availabe, the dates to be active, etc.</p>
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
                                            <h3 class="title">Rewards</h3>
                                            <p>Coupons are our most popular rewards (percentage or fixed amount), but we also allow the companies to provide limited access, or one time rewards to our users. As always the companies has full controls over the rewards. </p>
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
                                            <p>If you're not interested in promotions or rewards, you can always advertise with us.</p>
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
                                            <h3 class="title">Games</h3>
                                            <p>We have exclusive games for the companies that wanted to go one step further.</p>
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
                                            <h3 class="title">Marketing & Reporting</h3>
                                            <p>Did it work? How can I measure my promotions? Don't worry we have designed a portal where you can collect all the data.</p>
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
                                            <h3 class="title">More</h3>
                                            <p>Not sure if you really want to get onboard to this awesome experience, what if I told you that we have FREE trials so you can test it out.</p>
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
                                    <img src="assets/images/brand/googleplay_en.png" alt="Play Store"/></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="brand-style-2">
                                <li><a href="https://apps.apple.com/mx/app/plusreal/id1547719671" target="_blank">
                                    <img src="assets/images/brand/appstore_en.png" alt="App Store"/></a>
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
                                <h2 class="no-letter-spacing">Get in <br /> touch</h2>
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
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a class="disabled color-gray">Projects</a></li>
                                            <li class="pl--30"><a href="plusreal.php">PlusReal</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Widget  -->
                                <!-- Start Single Widget -->
                                <div class="col-lg-4 col-sm-4 col-12 mt_mobile--30">
                                    <div class="footer-widget">
                                        <h4>Say Hello</h4>
                                        <ul class="ft-link">
                                            <li><a href="mailto:contact@drahenix.com">contact@drahenix.com</a></li>
                                            <li><a href="tel:2067550280">206.755.0280</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Widget  -->
                                <!-- Start Single Widget -->
                                <div class="col-lg-4 col-sm-4 col-12 mt_mobile--30">
                                    <div class="footer-widget">
                                        <h4>Important Information</h4>
                                        <ul class="ft-link">
                                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Widget  -->
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