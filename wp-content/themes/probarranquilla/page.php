<?php get_header(); ?>

<?php get_sidebar(); ?>

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
