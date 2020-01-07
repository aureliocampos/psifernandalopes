<?php

    // HTML5 #
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    // Register Title Tag - Esse recurso permite que plug-ins e temas gerenciem a tag de título do documento #
    add_theme_support( 'title-tag' );

    //Esse recurso ativa os links de feed automáticos para postagem e comentários no cabeçalho. 
    add_theme_support( 'automatic-feed-links' );

    //Ativa o thumbnails em TODOS os Post Types
    add_theme_support( 'post-thumbnails');

    // Remover auto p
	remove_filter( 'the_excerpt', 'wpautop' );
	remove_filter ('the_content', 'wpautop');
