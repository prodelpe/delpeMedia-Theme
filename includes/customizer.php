<?php

if (!function_exists("delpemedia_customizer")) {

    function delpemedia_customizer($wp_customize) {
        // ===================================
        // HEADER   
        // ===================================

        $wp_customize->add_section('header', array(
            'title' => __('Header', 'delpemedia'),
            'description' => __('Cambiar lineas del header', 'delpemedia'),
            'priority' => 36
        ));

        //====================================== Linea 1

        $wp_customize->add_setting('header[linea1]', array(
            'default' => '',
        ));

        //añadir control texto customizer
        $wp_customize->add_control('delpemedia_options_theme[linea1]', array(
            'label' => __('Linea 1', 'delpemedia'),
            'section' => 'header',
            'settings' => 'header[linea1]'
        ));

        //====================================== Linea 2

        $wp_customize->add_setting('header[linea2]', array(
            'default' => '',
        ));

        //añadir control texto customizer
        $wp_customize->add_control('delpemedia_options_theme[linea2]', array(
            'label' => __('Linea 2', 'delpemedia'),
            'section' => 'header',
            'settings' => 'header[linea2]'
        ));

        //====================================== Linea 3

        $wp_customize->add_setting('header[linea3]', array(
            'default' => '',
        ));

        //añadir control texto customizer
        $wp_customize->add_control('delpemedia_options_theme[linea3]', array(
            'label' => __('Linea 3', 'delpemedia'),
            'section' => 'header',
            'settings' => 'header[linea3]'
        ));


        // ===================================
        // SOBRE MI
        // ===================================

        $wp_customize->add_section('sobre-mi', array(
            'title' => __('Sobre Mi', 'delpemedia'),
            'description' => __('Cambiar apartado Sobre Mi', 'delpemedia'),
            'priority' => 36
        ));

        //====================================== Titulo

        $wp_customize->add_setting('sobre-mi[titulo]', array(
            'default' => '',
        ));

        //añadir control texto customizer
        $wp_customize->add_control('sobre-mi[titulo]', array(
            'label' => __('Título', 'delpemedia'),
            'section' => 'sobre-mi',
            'settings' => 'sobre-mi[titulo]'
        ));

        //====================================== Subtitulo

        $wp_customize->add_setting('sobre-mi[subtitulo]', array(
            'default' => '',
        ));

        //añadir control texto customizer
        $wp_customize->add_control('sobre-mi[subtitulo]', array(
            'label' => __('Subtítulo', 'delpemedia'),
            'section' => 'sobre-mi',
            'settings' => 'sobre-mi[subtitulo]'
        ));

        //====================================== Texto

        $wp_customize->add_setting('sobre-mi[texto]', array(
            'default' => '',
        ));

        //añadir control texto customizer
        $wp_customize->add_control('sobre-mi[texto]', array(
            'type' => 'textarea',
            'label' => __('Texto', 'delpemedia'),
            'section' => 'sobre-mi',
            'settings' => 'sobre-mi[texto]'
        ));

        //====================================== Foto

        $wp_customize->add_setting('sobre-mi[foto]', array(
            'default' => '',
        ));

        //añadir control imagen
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'Foto', array(
            'label' => __('Foto', 'delpemedia'),
            'section' => 'sobre-mi',
            'settings' => 'sobre-mi[foto]'
        )));
    }
}

add_action('customize_register', 'delpemedia_customizer');
