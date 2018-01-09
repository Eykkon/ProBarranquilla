<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>

    <div class="col-md-4">
        <div class="about-left">
            <h2>¿QUE ESTÁ PASANDO?</h2>
            <figure class="about-thumb">
                <img src="<?php bloginfo('template_url')?>/img/about-thumb.jpg" alt="" class="img-responsive">
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
            </figure>
        </div>
    </div>

<?php endwhile; else: ?>
    <h1> No se encontraron publicaciones </h1>
<?php endif; ?>