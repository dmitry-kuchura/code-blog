@extends('layouts.application')

@section('title', __('seo.index.title'))
@section('description', __('seo.index.description'))
@section('keywords', __('seo.index.keywords'))

@section('content')
    <div class="portfolio-hero-banner">
        <div class="portfolio-hero-text">
            <h1>Статьи блога</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a viverra leo. </p>
        </div>
    </div>

    <div class="portfolio-main-area">
        <div class="container">
            <div class="portfolio-intro">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Praesent a viverra leo. Morbi purus
                    augue,
                    lacinia vel molestie.</p>
            </div>

            <div class="row">
                @foreach($results as $result)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 portfolio-headmove">
                        <div class="single-portfolio">
                            <div class="portfolio-image">
                                <img src="img/portfolio/4.jpg" alt="">
                                <div class="portfolio-content">
                                    <p>{{ $result->translations->text }}</p>
                                    <a href="{{ route('blog.inner', ['alias' => $result->alias]) }}">view details</a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-titile">
                            <h4>{{ $result->translations->name }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {!! $results->links('widgets.paginate') !!}
    </div>
@endsection
