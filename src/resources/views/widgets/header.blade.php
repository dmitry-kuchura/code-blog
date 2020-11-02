<header id="home">
    <div class="main-navigation-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-3">
                    <div class="logo-area">
                        <a href="{{ route('home') }}">
                            <img src="/img/logo.png" alt="dev блог">
                        </a>
                    </div>
                </div>

                <div class="col-xl-10 col-lg-9 col-md-9">
                    <div class="main-menu f-right">
                        <nav id="mobile-menu">
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}"
                                       class="{{ $uri === 'home' ? 'current' : '' }}">{{ __('static.main_page') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}"
                                       class="{{ $uri === 'blog' ? 'current' : '' }}">{{ __('static.blog') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="{{ $uri === 'about' ? 'current' : '' }}">
                                        {{ __('static.about') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contacts') }}" class="{{ $uri === 'contacts' ? 'current' : '' }}">
                                        {{ __('static.contacts') }}
                                    </a>
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
