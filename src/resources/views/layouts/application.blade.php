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

    <link rel="stylesheet" href="{{ asset('/css/all.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,900&display=swap" rel="stylesheet">
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</p>
<![endif]-->


<div id='preloader'>
    <div id='status'>
        <img src='img/loading.gif' alt='LOADING....!!!!!'/>
    </div>
</div>

@yield('content')

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
<script src="{{ asset('/js/all.js') }}"></script>
</body>

</html>
