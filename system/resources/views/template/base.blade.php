<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UTS_LARAVEL</title>
    <meta name="description" content="Ethanol is an Agency and Personal Portfolio Template built with bootstrap 3.3.2. This is created for a cause to support my uncle's campaign. Go and Donate at - https://life.indiegogo.com/fundraisers/medical-support-for-a-filipino-overseas-worker--3/x/10058181">
    <meta name="keywords" content="portfolio, agency, bootstrap theme, mobile responsive, template, personal">
    <meta name="author" content="ThemeForces.Com">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{url('public')}}/img/logo-wisata.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{url('public')}}/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('public')}}/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('public')}}/img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="{{url('public')}}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/fonts/font-awesome/css/font-awesome.css">

    <!-- Nivo Lightbox
    ================================================== -->
    <link rel="stylesheet" href="{{url('public')}}/css/nivo-lightbox.css" >
    <link rel="stylesheet" href="{{url('public')}}/css/nivo_lightbox_themes/default/default.css">

    <!-- Slider
    ================================================== -->
    <link href="{{url('public')}}/css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="{{url('public')}}/css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="{{url('public')}}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/css/responsive.css">

    <!-- Google Fonts
    ================================================== -->
    <link href="{{url('public')}}/http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css">

    <script type="text/javascript" src="{{url('public')}}/js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Main Navigation 
    ================================================== -->
    @include('template.section.header')

    @yield('content')
      


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{url('public')}}/https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{url('public')}}/js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{url('public')}}/js/bootstrap.js"></script>

    <script type="text/javascript" src="{{url('public')}}/js/owl.carousel.js"></script><!-- Owl Carousel Plugin -->

    <script type="text/javascript" src="{{url('public')}}/js/SmoothScroll.js"></script>

    <!-- Google Map -->
    <script type="text/javascript" src="{{url('public')}}/https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&ampsensor=false"></script>
    <script type="text/javascript" src="{{url('public')}}/js/map.js"></script>

    <!-- Parallax Effects -->
    <script type="text/javascript" src="{{url('public')}}/js/skrollr.js"></script>
    <script type="text/javascript" src="{{url('public')}}/js/imagesloaded.js"></script>

    <!-- Portfolio Filter -->
    <script type="text/javascript" src="{{url('public')}}/js/jquery.isotope.js"></script>

    <!-- LightBox Nivo -->
    <script type="text/javascript" src="{{url('public')}}/js/nivo-lightbox.min.js"></script>

    <!-- Contact page-->
    <script type="text/javascript" src="{{url('public')}}/js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="{{url('public')}}/js/contact.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="{{url('public')}}/js/main.js"></script>

  </body>
</html>