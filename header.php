<!DOCTYPE html>
<!--
“Si buscas resultados distintos, no hagas siempre lo mismo”. Albert Einstein
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- wp_head() stuff -->
        <?php wp_head(); //All metas declared here ?>

    </head>
    <body <?php body_class(); ?> id="content" data-spy="scroll" data-target="#menu_nav">

        <!-- PRELOADER -->

        <?php if (is_front_page()) { ?>
        <div id="loader-wrapper">
            <div id="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <?php } ?>

        <!-- END PRELOADER -->

        <!-- HEADER -->
        <?php if (is_front_page()) { ?>
            <section id="header">
                <div class="outer text-center">
                    <div class="inner">
                        <article>
                            <h1 class="wow bounceInDown " data-wow-delay="0.6s">
                                <?php
                                $header = get_theme_mod('header');
                                //
                                if ($header['linea1']) {
                                    echo $header['linea1'];
                                } else {
                                    echo "Lorem";
                                }
                                ?>
                            </h1>
                            <h3 class="wow bounceInDown" data-wow-delay="1.2s">
                                <?php
                                if ($header['linea2']) {
                                    echo $header['linea2'];
                                } else {
                                    echo "ipsum dolor";
                                }
                                ?>
                            </h3>
                            <h3 class="wow bounceInDown" data-wow-delay="1.8s">
                                <?php
                                if ($header['linea3']) {
                                    echo $header['linea3'];
                                } else {
                                    echo "sit amet";
                                }
                                ?>
                            </h3>
                        </article>
                        <div data-wow-delay="2.5s" class="wow fadeIn"> 
                            <a href="#sobre-mi"> 
                                <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>

        <!-- Global Content Wrapper -->
        <div id="wrapper" class="top-waypoint" data-animate-up="header-hide" data-animate-down="header-show">

            <!-- MENU -->       
            <header id="menu" class="ha-header">
                <nav id="menu_nav" class="navbar navbar-default">
                    <div class="container">

                        <div class="navbar-header page-scroll">

                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="logo">
                                <a href="<?php echo get_home_url(); ?>"><?php bloginfo(); ?></a>
                            </div>

                        </div>

                        <!-- WP Nav Menu -->
                        <?php
                        wp_nav_menu(array(
                            'menu' => 'primary',
                            'theme_location' => 'main_menu',
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse navbar-right navbar-ex1-collapse',
                            'container_id' => 'menu_delpemedia',
                            'menu_class' => 'nav navigation navbar-nav',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new Bootstrap_Walker_Nav_Menu())
                        );
                        ?>

                    </div>
                </nav>

            </header>
