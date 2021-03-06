<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta
      name="description"           
      content="Conectando Emprendedores en Oaxaca
           Evento Digital CEO 2020.">
    <title>Conectando Emprendedores en Oaxaca - 2020</title>
    <meta name="theme-color" content="#fdeb00"/>
  	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('layout/assets/img/favicon/favicon-32x32.png') }}">
  	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('layout/assets/img/favicon/favicon-96x96.png') }}">
  	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('layout/assets/img/favicon/favicon-16x16.png') }}">

    <link href="{{ asset('layout/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('layout/assets/css/offset-right.css') }}" rel="stylesheet">
    <link href="{{ asset('layout/assets/css/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
 	  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Saira:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <link href="{{ asset('layout/assets/css/glitch.css') }}" rel="stylesheet">
    <link href="{{ asset('layout/assets/css/tabs.css') }}" rel="stylesheet">
    <link href="{{ asset('layout/assets/css/form.css') }}" rel="stylesheet">
    <link href="{{ asset('layout/assets/css/animation.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('layout/assets/css/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('layout/assets/css/slick/slick-theme.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172329568-1"></script>
    <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-172329568-1');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '896531500825245'); 
        fbq('track', 'PageView');
    </script>
    <noscript>
     <img height="1" width="1" src="https://www.facebook.com/tr?id=896531500825245&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->


</head>
<body>

@yield("header")

<!-- Global App -->
<div id="app">

@yield("body")

<!-- Global App -->
</div>
@yield("footer")

<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('layout/assets/js/jquery-2.1.1.js') }}"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="{{ asset('layout/assets/js/slick/slick.js') }}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="{{ asset('layout/assets/js/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('layout/assets/js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('layout/assets/js/menu.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="{{ asset('layout/assets/js/global.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://www.gstatic.com/firebasejs/5.9.3/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.9.3/firebase-database.js"></script>
<script type="text/javascript" src="{{ asset('layout/assets/js/firebase.js') }}"></script>

</body>
</html>