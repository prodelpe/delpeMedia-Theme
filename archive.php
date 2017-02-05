<?php get_header(); ?>

<section id="blog">
    <div class="container">
        <div class="row">

            <div class="posts-column col-md-8">

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="title" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title('<h2>', '</h2>'); ?>
                            </a>
                            <div class="sub">
                                <?php the_date(); ?>
                                <?php echo " | "; ?>
                                <?php the_category(' ,'); ?>
                            </div>
                            <?php
                            the_excerpt(); 
                            ?>
                            
                        </div>
                        
                        <?php
                        
                        if (is_singular()) {
                            // support for pages split by nextpage quicktag
                            wp_link_pages();

                            if (comments_open() || get_comments_number()) :
                                comments_template();
                            endif;

                            // Previous/next post navigation.
                            the_post_navigation(array(
                                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __('Next', 'twentyfifteen') . '</span> ' .
                                '<span class="screen-reader-text">' . __('Next post:', 'twentyfifteen') . '</span> ' .
                                '<span class="post-title">%title</span>',
                                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __('Previous', 'twentyfifteen') . '</span> ' .
                                '<span class="screen-reader-text">' . __('Previous post:', 'twentyfifteen') . '</span> ' .
                                '<span class="post-title">%title</span>',
                            ));

                            // tags anyone?
                            the_tags();
                        }

                        echo "<hr>";
                        ?>

                    <?php endwhile; ?>

                    <?php if (!is_singular()) : ?>
                        <?php
                        $prev_link = get_previous_posts_link(__('&laquo; Older Entries'));
                        $next_link = get_next_posts_link(__('Newer Entries &raquo;'));

                        if ($prev_link || $next_link) {
                            echo '<ul class="list-inline inline">';
                            if ($prev_link) {
                                echo '<li>' . $prev_link . '</li>';
                            }
                            if ($next_link) {
                                echo '<li>' . $next_link . '</li>';
                            }
                            echo '</ul>';
                        }
                        ?>
                    <?php endif; ?>

                <?php else : ?>

                    <div class="alert alert-info">
                        <strong>No content in this loop</strong>
                    </div>

                <?php endif; ?>
            </div>

            <div class="widgets-column col-md-4 col-sm-12 col-xs-12">

                <?php
                if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-1')) : //  Sidebar name
                    ?>
                    <?php
                endif;
                ?>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>