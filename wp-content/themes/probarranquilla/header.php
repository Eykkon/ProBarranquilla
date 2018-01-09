<!DOCTYPE html>
<html lang="es">

<head>
    <!-- META KEYS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TITLE -->
    <title>ProBarranquilla</title>

    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>

    <!-- BOOTSTRAP CSS -->
    <link href="<?php bloginfo('template_url')?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- IcoFont CSS -->
    <link href="<?php bloginfo('template_url')?>/css/icofont.css" rel="stylesheet">

    <!-- FontAwesome Css -->
    <link href="<?php bloginfo('template_url')?>/css/font-awesome.min.css" rel="stylesheet">

    <!-- OWL CAROUSEL CSS -->
    <link href="<?php bloginfo('template_url')?>/css/owl.carousel.css" rel="stylesheet">

    <!-- ANIMATE CSS -->
    <link href="<?php bloginfo('template_url')?>/css/animate.css" rel="stylesheet">

    <!-- Mobile Menu Css -->
    <link href="<?php bloginfo('template_url')?>/css/meanmenu.css" rel="stylesheet">

    <!-- PrettyPhoto CSS -->
    <link href="<?php bloginfo('template_url')?>/css/prettyPhoto.css" rel="stylesheet">

    <!-- DIRECTORY FONT -->
    <link href="<?php bloginfo('template_url')?>/font/stylesheet.css" rel="stylesheet">

    <!-- STYLE CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>" >

    <!-- RESPONSIVE CSS -->
    <link href="<?php bloginfo('template_url')?>/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
</head>

<body>
<div id="preloader"></div>
<header class="header-area">

    <div class="head-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="social pull-right">
                        <ul>

                            <li><a href="http://www.twitter.com/ProBaq/" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/probarranquilla/" target="_blank"><i class="fa fa-lg fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/ProBarranquilla/" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li><a href="#"><small>ES</small></a> / <a href="#"><small>EN</small></a></li>
                            <li></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-3" >
                    <div class="logo">
                        <a href="/WP_ProBarranquilla"><img src="<?php bloginfo('template_url')?>/img/logo.png" width="" height="111px" alt=""></a>
                    </div>
                    <!-- /.End Of Logo -->
                </div>

                <div class="col-sm-9 hidden-xs">
                    <div class="head-top-right fix">

                        <div class="sin-info fix">
                            <div class="info-icon">
                                <i class="icofont icofont-social-google-map"></i>
                            </div>
                            <div class="info-content">
                                    <span>Calle 77B No.<br>
                           57-141 Of. 305</span>
                            </div>
                        </div>
                        <!-- /.End Of Seven -->

                        <div class="sin-info fix">
                            <div class="info-icon">
                                <i class="icofont icofont-clock-time"></i>
                            </div>
                            <div class="info-content">
                                <span>9 am - 6 pm<br> Lun - Vie</span>
                            </div>
                        </div>
                        <!-- /.End Of Seven -->

                        <div class="sin-info border-none fix">
                            <div class="info-icon">
                                <i class="icofont icofont-contacts"></i>
                            </div>
                            <div class="info-content">
                                <a href="mailto:info@probarranquilla.org">info@probarranquilla.org</a>
                                <a href="tel:+0213421543">(+57 5) 3561435</a>
                            </div>
                        </div>
                        <!-- /.End Of Seven -->

                        <div class="sin-info border-none fix">
                            <div class="search-form fix">
                                <form action="search.php">
                                    <input type="text" name="s" placeholder="Busqueda" id="search">
                                    <div class="input-submit">
                                        <input type="submit" value="Go">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.End Of Seven -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Of Top Head -->
    <div class="head-bottom-area">
        <div class="container">
            <div class="row">
                <div class="mainmenu-area">
                    <nav class="navigation-menus">
                        <?php wp_nav_menu(
                                array(
                                    'container' => false,
                                    'items_wrap' => '<ul class="mobile-menu nav navbar-nav">%3$s<i class="hover-ind fa fa-caret-down" aria-hidden="true"></i></ul>',
                                    'theme_location' => 'menu'
                                ));
                        ?>
                        <!--
                        <ul class="mobile-menu nav navbar-nav">
                            <li class="active"><a href="index.html"><i class="fa fa-home fa-2x"></i></a></li>

                            <li class="dropdown-trigger"><a href="services.html">Territorio <i class="hover-ind fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="services.html">Colombia</a></li>
                                    <li><a href="single-services-1.html">Barranquilla y su �rea metropolitrana</a></li>
                                    <li><a href="single-services-2.html">Departamento del atl�ntico</a></li>
                                    <li><a href="single-services-3.html">Proyectos de cooperaci�n internacional</a></li>

                                </ul>
                            </li>

                            <li><a href="projects.html">Turismo de negocios y eventos <i class="hover-ind fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="projects-v2.html">Destino ideal para tus eventos</a></li>
                                    <li><a href="projects.html">�C�mo apoya PROBARRANQUILLA  la realizaci�n y promoci�n de tus eventos?</a></li>
                                    <li><a href="projects-v3.html">Conoce el destino</a></li>
                                    <li><a href="projects-v3.html">Agenda de eventos</a></li>
                                </ul>
                            </li>
                            <li><a href="news.html">Inversion <i class="hover-ind fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="news.html">�Por qu� Barranquilla? �Por qu� el Atlantico?</a></li>
                                    <li><a href="news-v2.html">PROBARRANQUILLA tu aliado en inversi�n</a></li>
                                    <li><a href="news-v3.html">Oportunidades de inversi�n</a></li>
                                    <li><a href="single-news.html">Vocaci�n por municipios</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Actualidad  <i class="hover-ind fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="testimonial.html">�Qu� esta pasando?</a></li>
                                    <li><a href="quote.html">Novedades sobre la entidad</a></li>
                                    <li><a href="404.html">Blog</a></li>
                                    <li><a href="testimonial.html">Galeria</a></li>
                                    <li><a href="quote.html">Revista de destino</a></li>
                                    <li><a href="404.html">Comunicados de prensa</a></li>
                                    <li><a href="testimonial.html">Biblioteca</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Quienes Somos  <i class="hover-ind fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="testimonial.html">Institucional</a></li>
                                    <li><a href="quote.html">Nuestro equipo</a></li>
                                    <li><a href="404.html">Gobierno corporativo</a></li>
                                    <li><a href="quote.html">Empresas miembro</a></li>
                                    <li><a href="404.html">Descargables</a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    -->
    <!-- End Of Bottom Head -->
</header>
<!-- /.End Of Header -->
