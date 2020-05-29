<!doctype html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">

<head>
    <title>@yield("title")</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @if (isset($__env->getSections()["description"]))
        <meta name="description" content="@yield("description")">
    @endif
    @if (isset($__env->getSections()["keywords"]))
        <meta name="keywords" content="@yield("keywords")">
    @endif

    <meta property="og:locale" content="ru_RU"/>
    <meta property="og:type" content="article"/>
    @if (isset($__env->getSections()["title"]))
        <meta property="og:title" content="@yield("title")"/>
    @endif
    @if (isset($__env->getSections()["description"]))
        <meta property="og:description" content="@yield("description")"/>
    @endif
    <meta property="og:image" content="{{ asset("/logo-drone-pilot.png") }}"/>
    <meta property="og:url" content="{{ url(Request::url()) }}"/>
    <meta property="og:site_name" content="Developer Blog"/>

    <meta name=author content="Dmytro Kuchura">
    <link rel="icon" href="{{ asset("/img/favicon.png") }}" type="image/png">

    <link rel="stylesheet" href="{{ asset("/css/all.css") }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,900&display=swap" rel="stylesheet">

    <!-- sitemap.xml -->
    <link href="{{ url("sitemap.xml") }}" rel="alternate" title="Sitemap" type="application/rss+xml"/>
    <!-- canonical -->
    <link rel="canonical" href="{{ url(Request::url()) }}" />
    <!-- csrf-token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your
    browser</a> to improve your experience.
</p>
<![endif]-->


<div id="preloader">
    <div id="status">
        <img src="/img/loading.gif" alt="LOADING....!!!!!"/>
    </div>
</div>

@widget("Header")

@yield("content")

@widget("Footer")

<script src="{{ asset("/js/all.js") }}"></script>

</body>
</html>
