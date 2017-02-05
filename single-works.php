<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div id="single-works" class="popup col-md-10 col-sm-10 offset- col-xs-12 single-column white-popup"> 
            <article class="single-post">
                <h1><?php the_title() ?></h1>
                <h2><?php echo get_field("tipo"); ?></h2>

                <div class="galeria">

                    <?php
                    //Cargando el custom post field de la galería
                    $value = get_field("Galeria");

                    if ($value) {

                        echo do_shortcode($value);
                    } else {

                        echo 'La galeria no se ha cargado';
                    }
                    ?>
                </div>

                <div class="contenido">
                    <div class="col-md-9 col-sm-12 col-xs-12 content">
                        <?php echo get_the_content(); ?>
                    </div>

                    <div class="col-md-3 col-sm-12 col-xs-12 lista">
                        <div class="lista">                       
                            <?php echo get_field("lista"); ?>     
                        </div>
                        <div class="boton">
                            <a href="<?php echo get_field("enlace"); ?>" target="_blank" class="btn btn-default">Visita <?php the_title(); ?></a>
                        </div>
                    </div>
                </div>
                <hr>
            </article>
        </div>
    </div>
</div>      

<?php get_footer(); ?>