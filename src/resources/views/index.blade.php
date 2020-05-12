@extends('layouts.application')

@section('title', __('seo.index.title'))
@section('description', __('seo.index.description'))
@section('keywords', __('seo.index.keywords'))

@section('content')
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Praesent a viverra leo. Morbi purus
                    augue,
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
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                    class="sr-only">(current)</span></a>
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
@endsection
