<!-- FOOTER -->

<section id="footer">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 col-sm-6 col-xs-12 col-centered custom-col">  
                <div class="logo">
                    delpeMedia
                </div>
                <p>Web diseñada y creada con HTML, CSS y Javascript</p>
                <p>Maquetada con Bootstrap</p>
                <p>Adaptada a Wordpress</p>
            </div>

            <!-- WP Nav Menu -->
            <?php
            wp_nav_menu(array(
                'menu' => 'primary',
                'theme_location' => 'social_menu',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'social',
                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                'walker' => new Bootstrap_Walker_Nav_Menu())
            );
            ?>
        </div>
    </div>
</section>

<!-- END FOOTER -->

<!-- COPYRIGHT -->

<section id="copyright">
    <div class="row text-center copyright">
        <p>&copy; Copyright <?php echo date('Y'); ?> <?php bloginfo(); ?>. <a href='http://www.freepik.es/vector-gratis/fondo-abstracto-con-un-diseno-geometrico_906543.htm'>Background image by Freepik</a> | <?php bloginfo('description'); ?></p>
    </div>
</section>

<!-- END COPYRIGHT -->

</div> <!-- End global wrapper -->

<?php wp_footer(); ?>

<?php if (!is_front_page()) { //jQuery para conservar ScrollSpy en la home-page y que funcionen los links en el resto?>
    <script>
        $('a[href*="#"]').each(function (index) {
            $(this).attr('href', "<?php echo get_site_url() ?>" + $(this).attr('href'));
        });
    </script>
<?php } ?>

</body>
</html>
