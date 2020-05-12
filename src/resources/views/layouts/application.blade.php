<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>CODE Blog</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name=description content="">
    <meta name=author content="Enventer">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,900&display=swap" rel="stylesheet">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.css">
    <!-- Animation CSS -->
    <link href="css/aos.min.css" rel="stylesheet">
    <!-- Slick Carousel CSS -->
    <link href="css/slick.css" rel="stylesheet">
    <!-- Main CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->


<!--  Preloader Start =======================-->

<div id='preloader'>
    <div id='status'>
        <img src='img/loading.gif' alt='LOADING....!!!!!'/>
    </div>
</div>
<!--=========== Main Header Area ===============-->
<header id="home">
    <div class="main-navigation-1">
        <div class="container">
            <div class="row">
                <!-- logo-area-->
                <div class="col-xl-2 col-lg-3 col-md-3">
                    <div class="logo-area">
                        <a href="index.html"><img src="img/logo.png" alt="enventer"></a>
                    </div>
                </div>
                <!-- mainmenu-area-->
                <div class="col-xl-10 col-lg-9 col-md-9">
                    <div class="main-menu f-right">
                        <nav id="mobile-menu">
                            <ul>
                                <li>
                                    <a href="#">home</a>
                                </li>
                                <li>
                                    <a href="about-us.html">about</a>
                                </li>
                                <li>
                                    <a href="team.html">team</a>
                                </li>
                                <!-- dropdown menu-area-->
                                <li>
                                    <a class="current" href="#" onclick="return false">pages <i
                                            class="fas fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown">
                                        <li><a href="about-us.html">about us</a></li>
                                        <li><a href="portfolio.html">portfolio</a></li>
                                        <li><a href="portfolio2.html">portfolio two</a></li>
                                        <li><a href="single-portfolio.html">single portfolio</a></li>
                                        <li><a href="blog.html">blog page</a></li>
                                        <li><a href="single-blog.html">single blog</a></li>
                                        <li><a href="single-blog2.html">single blog two</a></li>
                                        <li><a href="team.html">our team</a></li>
                                        <li><a href="contact.html">contact us</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- mobile menu-->
                    <div class="mobile-menu"></div>
                    <!--Search-->
                    <div class="search-box-area">
                        <div id="search" class="fade">
                            <a href="#" class="close-btn" id="close-search">
                                <em class="fa fa-times"></em>
                            </a>
                            <input placeholder="what are you looking for?" id="searchbox" type="search"/>
                        </div>
                        <div class="search-icon-area">
                            <a href='#search'>
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- =========Portfolio Image Area=========== -->
<div class="portfolio-hero-banner">
    <div class="portfolio-hero-text">
        <h1>Highlights our works</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a viverra leo. </p>
    </div>
</div>
<div class="portfolio-main-area">
    <div class="container">
        <!--portfolio intro-->
        <div class="portfolio-intro">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Praesent a viverra leo. Morbi purus augue,
                lacinia vel molestie.</p>
        </div>
        <div class="row">
            <!--single portfolio-->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 portfolio-headmove">
                <div class="single-portfolio">
                    <div class="portfolio-image">
                        <img src="img/portfolio/4.jpg" alt="">
                        <div class="portfolio-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam molestiae voluptatum
                                nemo, animi error, fugiat?</p>
                            <a href="#">view details</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-titile">
                    <h4>Lorem ipsum dolor sit amet.</h4>
                </div>
            </div>
            <!--single portfolio-->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 margin-top-sb-30 portfolio-headmove">
                <div class="single-portfolio">
                    <div class="portfolio-image">
                        <img src="img/portfolio/1.jpg" alt="">
                        <div class="portfolio-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam molestiae voluptatum
                                nemo, animi error, fugiat?</p>
                            <a href="#">view details</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-titile">
                    <h4>Lorem ipsum dolor sit amet.</h4>
                </div>
            </div>
            <!--single portfolio-->
            <div
                class="col-xl-4 col-lg-4 col-md-6 col-sm-6 default-margin-mt-sm margin-top-lb-30 margin-top-sb-30 portfolio-headmove">
                <div class="single-portfolio">
                    <div class="portfolio-image">
                        <img src="img/portfolio/3.jpg" alt="">
                        <div class="portfolio-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam molestiae voluptatum
                                nemo, animi error, fugiat?</p>
                            <a href="#">view details</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-titile">
                    <h4>Lorem ipsum dolor sit amet.</h4>
                </div>
            </div>
            <!--single portfolio-->
            <div
                class="col-xl-4 col-lg-4 col-md-6 col-sm-6 default-margin-mt margin-top-lb-30 margin-top-sb-30 portfolio-headmove">
                <div class="single-portfolio">
                    <div class="portfolio-image">
                        <img src="img/portfolio/2.jpg" alt="">
                        <div class="portfolio-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam molestiae voluptatum
                                nemo, animi error, fugiat?</p>
                            <a href="#">view details</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-titile">
                    <h4>Lorem ipsum dolor sit amet.</h4>
                </div>
            </div>
            <!--single portfolio-->
            <div
                class="col-xl-4 col-lg-4 col-md-6 col-sm-6 default-margin-mt margin-top-lb-30 margin-top-sb-30 portfolio-headmove">
                <div class="single-portfolio">
                    <div class="portfolio-image">
                        <img src="img/portfolio/5.jpg" alt="">
                        <div class="portfolio-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam molestiae voluptatum
                                nemo, animi error, fugiat?</p>
                            <a href="#">view details</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-titile">
                    <h4>Lorem ipsum dolor sit amet.</h4>
                </div>
            </div>
            <!--single portfolio-->
            <div
                class="col-xl-4 col-lg-4 col-md-6 col-sm-6 default-margin-mt margin-top-lb-30 margin-top-sb-30 portfolio-headmove">
                <div class="single-portfolio">
                    <div class="portfolio-image">
                        <img src="img/portfolio/6.jpg" alt="">
                        <div class="portfolio-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam molestiae voluptatum
                                nemo, animi error, fugiat?</p>
                            <a href="#">view details</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-titile">
                    <h4>Lorem ipsum dolor sit amet.</h4>
                </div>
            </div>
            <!--single portfolio-->
            <div
                class="col-xl-4 col-lg-4 col-md-6 col-sm-6 default-margin-mt margin-top-lb-30 margin-top-sb-30 portfolio-headmove">
                <div class="single-portfolio">
                    <div class="portfolio-image">
                        <img src="img/portfolio/4.jpg" alt="">
                        <div class="portfolio-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam molestiae voluptatum
                                nemo, animi error, fugiat?</p>
                            <a href="#">view details</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-titile">
                    <h4>Lorem ipsum dolor sit amet.</h4>
                </div>
            </div>
            <!--single portfolio-->
            <div
                class="col-xl-4 col-lg-4 col-md-6 col-sm-6 default-margin-mt margin-top-lb-30 margin-top-sb-30 portfolio-headmove">
                <div class="single-portfolio">
                    <div class="portfolio-image">
                        <img src="img/portfolio/1.jpg" alt="">
                        <div class="portfolio-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam molestiae voluptatum
                                nemo, animi error, fugiat?</p>
                            <a href="#">view details</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-titile">
                    <h4>Lorem ipsum dolor sit amet.</h4>
                </div>
            </div>
            <!--single portfolio-->
            <div
                class="col-xl-4 col-lg-4 col-md-6 col-sm-6 default-margin-mt margin-top-lb-30 margin-top-sb-30 portfolio-headmove">
                <div class="single-portfolio">
                    <div class="portfolio-image">
                        <img src="img/portfolio/3.jpg" alt="">
                        <div class="portfolio-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam molestiae voluptatum
                                nemo, animi error, fugiat?</p>
                            <a href="#">view details</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-titile">
                    <h4>Lorem ipsum dolor sit amet.</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Pagination -->
    <div class="col-xl-12">
        <div class="next-previous-page">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"> &#60; </a></li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">&#62;</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- =========Call to Action=========== -->
<div class="callto-action">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-7">
                <div class="callto-action-text">
                    <h5>Like what you see? <span>Let’s work</span></h5>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5">
                <div class="callto-action-btn">
                    <a href="#">contact us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =========Footer Area=========== -->
<section id="footer-fixed">
    <div class="big-footer">
        <div class="container">
            <div class="row">
                <!--footer logo-->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="footer-logo">
                        <a href="#">
                            <img src="img/footer-logo.png" alt="">
                        </a>
                        <p> We have bothh premium and free website templates. Build your professional website with
                            us.</p>
                    </div>
                    <!--footer social-->
                    <div class="social">
                        <ul>
                            <li><a class="footer-socials" href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a class="footer-socials" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="footer-socials" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="footer-socials" href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--footer quick links-->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="footer-heading">
                        <h3>quick links</h3>
                    </div>
                    <div class="footer-content">
                        <ul>
                            <li><a href="">about</a></li>
                            <li><a href="">contact</a></li>
                            <li><a href="">privacy</a></li>
                            <li><a href="">our blog</a></li>
                            <li><a href="">forum</a></li>
                        </ul>
                    </div>
                </div>
                <!--footer latest work-->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="footer-heading">
                        <h3>Latest works</h3>
                    </div>
                    <div class="footer-content">
                        <ul>
                            <li><a href="">sparkel</a></li>
                            <li><a href="">getparts</a></li>
                            <li><a href="">youtuber</a></li>
                            <li><a href="">smartco</a></li>
                            <li><a href="">petcare</a></li>
                        </ul>
                    </div>
                </div>
                <!--footer subscribe-->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="footer-heading">
                        <h3>Get Updates</h3>
                    </div>
                    <div class="footer-content footer-cont-mar-40">
                        <form action="#">
                            <input id="leadgenaration" type="email" placeholder="Enter your email">
                            <input id="subscribe" type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--copyright-->
    <footer>
        <p>All rights reserved @ enventer 2019</p>
    </footer>
</section>
<!-- Jquery JS -->
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<!-- Proper JS -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap Js -->
<script src="js/bootstrap.min.js"></script>
<!-- Video popup Js -->
<script src="js/magnific-popup.min.js"></script>
<!-- Waypoint Up Js -->
<script src="js/waypoints.min.js"></script>
<!-- Counter Up Js -->
<script src="js/counterup.min.js"></script>
<!-- Meanmenu Js -->
<script src="js/meanmenu.min.js"></script>
<!-- Animation Js -->
<script src="js/aos.min.js"></script>
<!-- Filtering Js -->
<script src="js/isotope.min.js"></script>
<!-- Background Move Js -->
<script src="js/jquery.backgroundMove.js"></script>
<!-- Slick Carousel Js -->
<script src="js/slick.min.js"></script>
<!-- ScrollUp Js -->
<script src="js/scrollUp.js"></script>
<!-- Main Js -->
<script src="js/main.js"></script>
</body>

</html>
