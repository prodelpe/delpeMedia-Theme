<?php
get_header();
?>
<section id="blog">
    <div class="container">
        <div class="col-md-8 col-sm-12 col-xs-12 single-column">
            <?php
            if (have_posts()) { //si hay posts
                while (have_posts()) { //iniciamos el loop
                    the_post(); //obtenemos las funciones que devuelven los datos del post
                    ?>
                    <article class="single-post">
                        <h1><?php the_title() ?></h1><hr>

<!--                        <?php
//                        if (has_post_thumbnail()) {
                            ?>
                            <div class="col-md-12">
                                <?php
//                                the_post_thumbnail('medium', array('class' => 'img-responsive'));
                                ?>
                            </div>-->
                            <?php
                       // }
                        ?>
                        <?php the_content(); ?>
                        <hr>

                    </article>

                    <div class="comment list">
                        			<?php // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			} ?>
                    </div>


                    <?php

                }
            }
            ?>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <?php
            get_sidebar();
            ?>
        </div>
    </div>
</section>
<?php
get_footer();
