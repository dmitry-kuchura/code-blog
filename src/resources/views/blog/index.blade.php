@extends('layouts.application')

@section('title', __('seo.index.title'))
@section('description', __('seo.index.description'))
@section('keywords', __('seo.index.keywords'))

@section('content')
    <div class="blog-home-page">
        <div class="blog-hero-home">
            <div class="blog-home-text">
                <h1>read our stories</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a viverra leo. </p>
            </div>
        </div>
        <div class="container">
            <div class="main-blog-list">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-heading-3">
                            <h4> read blogs</h4>
                            <h3>blog list page</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($results as $result)
                        <div
                            class="col-xl-4 col-lg-4 col-md-4 col-sm-6 default-margin-mt margin-top-sb-30 margin-top-lb-30">
                            <div class="home-single-blog">
                                <div class="s-blog-image">
                                    <img src="img/blog/3.png" alt="">
                                    <div class="blog-post-date">
                                        <span>12 jul</span>
                                    </div>
                                </div>
                                <div class="s-blog-content">
                                    <h4>{{ $result->translations->name }}</h4>
                                    <p>{{ $result->translations->text }}</p>
                                    <a href="{{ route('blog.inner', ['alias' => $result->alias]) }}">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {!! $results->links('widgets.paginate') !!}
            </div>
        </div>
    </div>
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
@endsection
