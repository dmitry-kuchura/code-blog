<header id="home">
    <div class="main-navigation-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-3">
                    <div class="logo-area">
                        <a href="index.html">
                            <img src="img/logo.png" alt="dev блог">
                        </a>
                    </div>
                </div>

                <div class="col-xl-10 col-lg-9 col-md-9">
                    <div class="main-menu f-right">
                        <nav id="mobile-menu">
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}"
                                       class="{{ $uri === 'home' ? 'current' : '' }}">Главна</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}" class="{{ $uri === 'blog' ? 'current' : '' }}">Статьи
                                    <i
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
                                    <a href="{{ route('about') }}" class="{{ $uri === 'about' ? 'current' : '' }}">Обо мне</a>
                                </li>
                                <li>
                                    <a href="{{ route('contacts') }}" class="{{ $uri === 'contacts' ? 'current' : '' }}">Обратная связь</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-menu"></div>

                    @widget('Search')
                </div>
            </div>
        </div>
    </div>
</header>
