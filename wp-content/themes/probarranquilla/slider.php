 <div class="Modern-Slider">

        <!-- Item -->
        <?php query_posts('category_name=slider'); ?>
        <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>

            <div class="item">
                <div class="img-fill">
                    <div> <?php if (has_post_thumbnail()) { the_post_thumbnail('slider'); } ?></div>
                    <div class="slider-text overlay">
                        <div class="tb">
                            <div class="tbc">
                                <div class="container text-left rs-padding ">
                                    <div class="col-md-12">
                                        <h1> <?php the_title();?></h1>
                                        <div class="mainmenu-area-all">
                                            <div class="container">
                                                <div class="row">

                                                    <div class="mainmenu-area-green">
                                                        <nav class="navigation-menus">
                                                            <ul class="mobile-menu nav navbar-nav">
                                                                <li class="dropdown-trigger"><a href="/territorio">Territorio <i class="hover-ind fa fa-angle-right" aria-hidden="true"></i></a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </div>


                                                    <div class="mainmenu-area-magenta">
                                                        <nav class="navigation-menus">
                                                            <ul class="mobile-menu nav navbar-nav">
                                                                <li class="dropdown-trigger"><a href="/turismo">Turismo de neg. <br>y eventos<i class="hover-ind fa fa-angle-right" aria-hidden="true"></i></a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </div>

                                                    <div class="mainmenu-area-blue">
                                                        <nav class="navigation-menus">
                                                            <ul class="mobile-menu nav navbar-nav">
                                                                <li class="dropdown-trigger"><a href="/inversion">Inversión <i class="hover-ind fa fa-angle-right" aria-hidden="true"></i></a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Item -->

        <?php endwhile; else: ?>

        <?php endif; ?>
</div>
