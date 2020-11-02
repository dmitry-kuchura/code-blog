@extends('layouts.application')

@section('title', __('seo.index.title'))
@section('description', __('seo.index.description'))
@section('keywords', __('seo.index.keywords'))

@section('content')
    <div class="blog-hero-banner">
        <div class="blog-hero-banner-text">
            <h1>Know more about wordpress</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a viverra leo. </p>
        </div>
    </div>
    <div class="blog-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="left-side">
                        <div class="blog-post-heading">
                            <h1>{{ $result->translation->name ? $result->translation->name : $result->translation->h1 }}</h1>
                            <span class="publishe-date">{{ __('static.published') }}: {{ date('Y-m-d H:i', strtotime($result->created_at)) }}</span>
                        </div>

                        <div class="blog-body-content">
                            {{ $result->translation->content }}
                            {{--@widget("Share")--}}
                        </div>
                    </div>
                </div>

                @widget("RightSideBar")
            </div>
            @widget("Comments")
        </div>
    </div>

    @widget("Related")
@endsection
