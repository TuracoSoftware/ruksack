<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title> \pagetitle </title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="\page description">
  <meta name="Turaco Software, LLC" content="iThemesLab">

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="{{ asset("/static/asset/css/bootstrap.min.css") }}" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ asset("/static/css/font-awesome.min.css") }}" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="{{ asset("/static/css/slicknav.css") }}" media="screen">

  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ asset("/static/css/style.css") }}" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ asset("/static/css/responsive.css") }}" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ asset("/static/css/animate.css") }}" media="screen">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ asset("/static/css/colors/red.css") }}" title="red" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{ asset("/static/css/colors/jade.css") }}" title="jade" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{ asset("/static/css/colors/blue.css") }}" title="blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{ asset("/static/css/colors/beige.css") }}" title="beige" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{ asset("/static/css/colors/cyan.css") }}" title="cyan" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{ asset("/static/css/colors/green.css") }}" title="green" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{ asset("/static/css/colors/orange.css") }}" title="orange" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{ asset("/static/css/colors/peach.css") }}" title="peach" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{ asset("/static/css/colors/pink.css") }}" title="pink" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{ asset("/static/css/colors/purple.css") }}" title="purple" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{ asset("/static/css/colors/sky-blue.css") }}" title="sky-blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{ asset("/static/css/colors/yellow.css") }}" title="yellow" media="screen" />


  <!-- Margo JS  -->
  <script type="text/javascript" src="{{ asset("/static/js/jquery-2.1.4.min.js") }}"></script>
  <script type="text/javascript" src="{{ asset("/static/js/jquery.migrate.js") }}"></script>
  <script type="text/javascript" src="{{ asset("/static/js/modernizrr.js") }}"></script>
  <script type="text/javascript" src="{{ asset("/static/asset/js/bootstrap.min.js") }}"></script>
  <script type="text/javascript" src="{{ asset("/static/js/jquery.fitvids.js") }}"></script>
  <script type="text/javascript" src="{{ asset("/static/js/owl.carousel.min.js") }}"></script>
  <script type="text/javascript" src="{{ asset("/static/js/nivo-lightbox.min.js") }}"></script>
  <script type="text/javascript" src="{{ asset("/static/js/jquery.isotope.min.js") }}"></script>
  <script type="text/javascript" src="{{ asset("/static/js/jquery.appear.js") }}"></script>
  <script type="text/javascript" src="{{ asset("/static/js/count-to.js") }}"></script>
  <script type="text/javascript" src="{{ asset("/static/js/jquery.textillate.js") }}"></script>
  <script type="text/javascript" src="{{ asset("/static/js/jquery.lettering.js") }}"></script>
  <script type="text/javascript" src="{{ asset("/static/js/jquery.easypiechart.min.js") }}"></script>
  <script type="text/javascript" src="{{ asset("/static/js/jquery.nicescroll.min.js") }}"></script>
  <script type="text/javascript" src="{{ asset("/static/js/jquery.parallax.js") }}"></script>
  <script type="text/javascript" src="{{ asset("/static/js/jquery.slicknav.js") }}"></script>

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

  <!-- Container -->
  <div id="container"
    <!-- Header -->
    @include('layouts.static.header')

    <!-- Display Page Content -->
    @yield('content')

    <!-- Display Site Footer -->
    @include('layouts.static.footer')

  <script type="text/javascript" src="{{ asset(" js/script.js") }}"></script>
</div>
</body>

</html>