<?php get_header(); ?>

<?php get_sidebar(); ?>


<?php
    // condicion para saber en que pagina estamos y asignar menu de acuerdo al ID de la pagina

    if(get_the_ID() == 36 or get_the_ID() == 33 or get_the_ID() == 41 or get_the_ID() == 43 or get_the_ID() == 46)  {
        $menu = 'menu_lateral_territorio';
        $link = get_permalink(36);
        $nombre = get_the_title(36);
    }
        elseif(get_the_ID() == 30 or get_the_ID() == 52 or get_the_ID() == 48 or get_the_ID() == 54 or get_the_ID() == 50){
            $menu = 'menu_lateral_turismo';
            $link = get_permalink(30);
            $nombre = get_the_title(30);
        }
         elseif(get_the_ID() == 26 or get_the_ID() == 58 or get_the_ID() == 60 or get_the_ID() == 62 or get_the_ID() == 64 or get_the_ID() == 54){
            $menu = 'menu_lateral_inversion';
             $link = get_permalink(26);
             $nombre = get_the_title(26);
         }
            elseif(get_the_ID() == 66 or get_the_ID() == 68 or get_the_ID() == 80 or get_the_ID() == 74 or get_the_ID() == 76 or get_the_ID() == 72 or get_the_ID() == 70){
                $menu = 'menu_lateral_actualidad';
                $link = get_permalink(66);
                $nombre = get_the_title(66);
            }
            else{
                $menu = 'menu_lateral_qs';
                $link = get_permalink(82);
                $nombre = get_the_title(82);
            }
?>
    <!-- Page Title Area
         =========================== -->
    <section class="page-title fix">
        <div class="container bb-bottom">
            <div class="row">

                <div class="col-md-12">

                        <div class="page-title-content">
                            <h2 class="page-title"><?php the_title(); ?></h2>
                        </div>
                        <div class="bread-cumb">
                            <ul>
                                <li><a href="/WP_ProBarranquilla">Home</a></li>
                                <li><a href="<?php echo $link ?>"><?php echo $nombre ?></a></li>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></li>
                            </ul>
                        </div>
                        <!-- /.END OF BREAD CUMB -->

                </div>
            </div>
        </div>
    </section>
    <!-- End Of Page Title Area -->

    <!-- Page Internal Content -->
    <div class="page-internal-content">
        <div class="container">
            <div class="row">

                <!-- Sidebar -->
                <aside class="col-md-3 sidebar">

                    <!--Menu-Left-->
                    <div class="panel-group">
                        <nav class="navigation-menus">
                            <?php wp_nav_menu(
                                array(
                                    'container' => false,
                                    'items_wrap' => '
                                        <div class="panel panel-default">
                                             <div class="panel-heading">
                                                <ul class="sub-menu"">%3$s</ul>
                                              </div>

                                        </div>' ,
                                    'theme_location' => $menu
                                ));
                            ?>
                        </nav>
                    </div>

                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a data-toggle="" data-parent="#accordion" href="territorio.html">
                                    <span class="hover-ind fa fa-angle-right"></span>
                                    <h4 class="panel-title">
                                        Colombia
                                    </h4>
                                </a>

                            </div>

                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a data-toggle="" data-parent="#accordion" href="barranquilla.html">
                                    <span class="hover-ind fa fa-angle-right"></span>
                                    <h4 class="panel-title">
                                        Barranquilla y su<br>Área Metropolitana
                                    </h4>
                                </a>

                            </div>

                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a data-toggle="" data-parent="#accordion" href="atlantico.html">
                                    <span class="hover-ind fa fa-angle-right"></span>
                                    <h4 class="panel-title">
                                        Departamento del <br>Atlántico
                                    </h4>
                                </a>

                            </div>

                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a data-toggle="" data-parent="#accordion" href="proyectos.html">
                                    <span class="hover-ind fa fa-angle-right"></span>
                                    <h4 class="panel-title">
                                        Proyectos de <br>Cooperación Internacional
                                    </h4>
                                </a>

                            </div>

                        </div>
                    </div>
                    <!--End Menu-Left-->

                    <!-- Widget -->
                    <div class="widget">
                        <div class="widget-testimonial">

                            <!-- Single Widget Testimonial -->

                                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : endif; ?>

                            <!-- /.End Of Single Widget Testimonial -->

                        </div>
                    </div>
                    <!-- /.End Of Widget -->
                </aside>
                <!-- /.End Of Sidebar -->

                <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>

                    <!-- Content Section -->
                    <div class="col-md-9 main-content">


                        <!-- Single News Post -->
                        <div class="sin-news-content">
                            <div class="news-bio">
                                <h2><?php the_content();?>  </h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="faq-section">
                                    <h3 class="service-post-title">Indicadores</h3>

                                    <div class="faqs">
                                        <dl class="accordion">
                                            <dt>Indicadores económicos</dt>
                                            <dd>- Dólar TRM: $2.984,99 <br>
                                                - Tasa UVR: 251,7561 <br>
                                                - Desempleo Nacional (Total Nacional): 8,7% <br></dd>

                                            <dt>Indicadores sociales</dt>
                                            <dd>- Dólar TRM: $2.984,99 <br>
                                                - Tasa UVR: 251,7561 <br>
                                                - Desempleo Nacional (Total Nacional): 8,7%</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.End Of Single News Post -->

                <?php endwhile; else: ?>
                    <h1> No se encontraron publicaciones </h1>
                <?php endif; ?>

                <!-- /.End Of Content Section -->

            </div>
        </div>
    </div>
    <!-- /.End Of Page Internal Content -->


<!-- subscribe Box -->
<div class="suscribir-box-section2">
    <div class="suscribir-box-head">
        <div class="titleh2">
            <h2 class="text-center">SUSCRÍBETE A NUESTRO BOLETÍN</h2>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="suscribir2">
                    <form action="comment.php">
                        <div class="comment-form">
                            <input type="text" placeholder="Nombre y apellido *" required>
                            <input type="email" required placeholder="E-mail *" required>
                        </div>
                        <input type="submit" id="submit-comment" value="ENVIAR">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="suscribir-box-head">
        <div class="titleh2">
            <p class="text-center">DISCLAIMER: Protección de Datos Personales ley 1581 de 2010 y decreto 1377 de 2013.</p>
        </div>

    </div>

</div>
<!-- /.End Of subscribe Box -->
<?php get_footer(); ?>
