<?php
if( !function_exists( 'delpemedia_works_post_type' ) )
{
    function delpemedia_works_post_type()
    {
        register_post_type( 'works',
            array(
                'labels' => array(
                    'name' => __( 'Portafolio', 'delpemedia' ),
                    'singular_name' => __( 'Work', 'delpemedia' ),
                    'add_new'   =>  __( 'Añadir trabajo', 'delpemedia')
                ),
                'taxonomies' => array('brands', 'post_tag'),
                'exclude_from_search' => FALSE,
                'publicly_queryable'  => TRUE,
                'show_ui'             => TRUE,
                'show_in_nav_menus'   => TRUE,
                'show_in_menu'        => TRUE,
                'show_in_admin_bar'   => TRUE,
                'public' => TRUE,
                'has_archive' => TRUE,
                'show_in_menu'        => TRUE,
                'show_in_nav_menus'   => TRUE,
                'menu_position' => 20,
                'supports' => array(
                    'title',
                    'editor',
                    'excerpt',
                    'trackbacks',
                    'custom-fields',
                    'comments',
                    'revisions',
                    'thumbnail',
                    'author',
                    'page-attributes'
                )
            )
        );

        // create a new taxonomy
    	register_taxonomy(
    		'tipo',
    		'works',
    		array(
    			'label' => __( 'Tipo' ),
                'hierarchical'  =>  true,
    			'rewrite' => array( 'slug' => 'tipo' ),
    			'capabilities' => array(
                    'manage_terms' => 'administrator',
                    'edit_terms' => 'administrator',
                    'delete_terms' => 'administrator',
                    'assign_terms' => 'administrator', 'editor', 'author', 'contributor'
    			)
    		)
    	);
    }
}
add_action( 'init', 'delpemedia_works_post_type' );
