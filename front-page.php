<?php get_header(); ?>

<!-- SOBRE MI -->

<section id="sobre-mi">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">

                <h1>
                    <?php
                    //Titulo
                    $sobre_mi = get_theme_mod('sobre-mi');

                    if ($sobre_mi['titulo']) {
                        echo $sobre_mi['titulo'];
                    } else {
                        echo "Lorem Ipsum";
                    }
                    ?>
                </h1>

                <h2>
                    <?php
                    //Subtitulo
                    if ($sobre_mi['subtitulo']) {
                        echo $sobre_mi['subtitulo'];
                    } else {
                        echo "Lorem ipsum dolor sit amet";
                    }
                    ?>
                </h2>
                <div class="cover-letter">
                    <?php
                    //Texto
                    if ($sobre_mi['texto']) {
                        echo $sobre_mi['texto'];
                    } else {
                        echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";
                    }
                    ?>

                </div>
            </div>
            <div class="foto col-md-4 col-sm-6 col-xs-12">
                <div class="foto-inner ">
                    <?php if ($sobre_mi['foto']) { ?>
                        <img src = "<?php echo $sobre_mi['foto']; ?>" class = "portrait align-middle" width="300" height="300" alt = "<?php the_author(); ?>"/>
                    <?php } else { ?>
                        <img src="http://placehold.it/350x150" class = "portrait align-middle">
                    <?php }
                    ?>
                </div>
            </div>                   
        </div>
    </div>
</section>

<!-- PORTAFOLIO -->
<section id="portafolio">
    <div class="container-fluid">

        <?php
        $args = array('post_type' => 'works', 'posts_per_page' => 8);
        $loop = new WP_Query($args);
        $i = 1;
        ?>

        <div class="row text-center titulo">
            <h1><?php
                $obj = get_post_type_object('works');
                echo $obj->labels->name;
                ?></h1>
        </div>


        <div class="menu-container">

            <div id="menu-portafolio"  role="group" class="btn-group button-group filter-button-group">
                <button data-filter="*" class="btn btn-default">Todos</button>
                <?php
                //Menú tipo portafolio
                $terms = get_terms(array(
                    'taxonomy' => 'tipo',
                    'hide_empty' => false,
                    'orderby' => 'description'
                ));

                if ($terms) {
                    foreach ($terms as $term) {
                        ?>
                        <button class="btn btn-default" data-filter=".<?php echo $term->name; ?>"><?php echo $term->name; ?></button>
                        <?php
                    }
                } else {
                    echo "No se encontraron resultados";
                }
                ?>
            </div>
        </div>

        <?php
        echo "<div class='row'>";
        if (have_posts()) {
            while ($loop->have_posts()) : $loop->the_post();
                //Two rows of four columns
                if ($i <= 6) {
                    ?>
                    <div class="col-md-4 grid">

                        <figure class="gallery-item grid-item <?php echo strip_tags(get_the_term_list($post->ID, 'tipo', '', ', ')); ?>">
                            <?php echo the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
                            <figcaption class="img-title">
                                <div class="content">
                                    <a href="#test-popup-<?php echo $i; ?>" class="open-popup-link">
                                        <h4><?php the_title(); ?></h4>
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>


                    <!-- Popup -->

                    <div id="test-popup-<?php echo $i; ?>" class="popup col-md-10 col-sm-10 offset- col-xs-12 single-column white-popup mfp-hide"> 
                        <article class="single-post">
                            <h1><?php the_title() ?></h1>
                            <h2><?php echo get_field("tipo"); ?></h2>

                            <div class="todo">
                                <div class="col-md-9 galeria">

                                    <?php
                                    //Cargando el custom post field de la galería
                                    $value = get_field("galeria");

                                    if ($value) {

                                        echo do_shortcode($value);
                                    } else {

                                        echo 'La galeria no se ha cargado';
                                    }
                                    ?>
                                </div>

                                <div class=" col-md-3 contenido">
                                    <div class="content">
                                        <?php echo get_the_content(); ?>
                                    </div>

                                    <div class="lista">
                                        <div class="lista">                       
                                            <?php echo get_field("lista"); ?>     
                                        </div>
                                        <?php if (get_field("enlace")) { ?>
                                            <div class="boton">
                                                <a href="<?php echo get_field("enlace"); ?>" target="_blank" class="btn btn-default">Visita <?php the_title(); ?></a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- End Popup -->

                    <?php
                    $i++;
                } else {//Fin de la linea. Empezamos segunda.
                    echo "</div>";
                    echo "<div class='row'>";
                }
            endwhile;
        } else {
            echo "No se encontraron resultados";
        }
        echo "</div>";
        ?>

</section>

<!-- END PORTAFOLIO -->


<!-- CONTACTO -->

<section id="contacto">
    <div class="container">
        <div class="row text-center titulo">
            <h1>Contacta conmigo!</h1>
        </div>
        <div class="row row-centered">
            <div class="col-md-6 col-sm-8 col-xs-12 col-centered">
                <?php echo do_shortcode('[contact-form-7 id="454" title="Formulario de contacto 1"]'); ?>
            </div>
        </div>
    </div>
</section>



<!-- END CONTACTO -->

<?php get_footer(); ?>