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

@widget('Header')

@yield('content')

@widget('Footer')

<script src="{{ asset('/js/all.js') }}"></script>

</body>
</html>
