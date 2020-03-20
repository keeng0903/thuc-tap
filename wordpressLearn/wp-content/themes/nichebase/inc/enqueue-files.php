<?php
/*
 * All CSS and JS files are enqueued from this file
 * Author & Copyright: NicheBase
 * URL: https://nicheaddons.com/
 */

/**
 * Enqueue Files for FrontEnd
 */
if ( ! function_exists( 'nichebase_vt_scripts_styles' ) ) {
  function nichebase_vt_scripts_styles() {

    // Styles
    wp_enqueue_style( 'nichebase-google-fonts', '//fonts.googleapis.com/css?family=Hind:400,600,700|Montserrat:400,600,700&display=swap', false );
    wp_enqueue_style( 'font-awesome', NICHEBASE_CSS . '/font-awesome.min.css', array(), '4.7.0', 'all' );
    wp_enqueue_style( 'meanmenu', NICHEBASE_CSS .'/meanmenu.css', array(), '2.0.7', 'all' );
    wp_enqueue_style( 'bootstrap', NICHEBASE_CSS .'/bootstrap.min.css', array(), '4.4.1', 'all' );
    wp_enqueue_style( 'nichebase-style', get_stylesheet_uri() );
    wp_enqueue_style( 'nichebase-styles', NICHEBASE_CSS .'/styles.css', array(), NICHEBASE_VERSION, 'all' );

    // Scripts
    wp_enqueue_script( 'bootstrap', NICHEBASE_SCRIPTS . '/bootstrap.min.js', array( 'jquery' ), '4.4.1', true );
    wp_enqueue_script( 'meanmenu', NICHEBASE_SCRIPTS . '/jquery.meanmenu.js', array( 'jquery' ), '2.0.8', true );
    wp_enqueue_script( 'nichebase-skip-link-focus-fix', NICHEBASE_SCRIPTS . '/skip-link-focus-fix.js', array(), NICHEBASE_VERSION, true );
    wp_enqueue_script( 'nichebase-scripts', NICHEBASE_SCRIPTS . '/scripts.js', array( 'jquery' ), NICHEBASE_VERSION, true );

    // Comments
    wp_enqueue_script( 'validate', NICHEBASE_SCRIPTS . '/jquery.validate.min.js', array( 'jquery' ), '1.9.0', true );
    wp_add_inline_script( 'validate', 'jQuery(document).ready(function($) {$("#commentform").validate({rules: {author: {required: true,minlength: 2},email: {required: true,email: true},comment: {required: true,minlength: 10}}});});' );

    // Responsive
    wp_enqueue_style( 'nichebase-responsive', NICHEBASE_CSS .'/responsive.css', array(), NICHEBASE_VERSION, 'all' );

    // Adds support for pages with threaded comments
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }

  }
  add_action( 'wp_enqueue_scripts', 'nichebase_vt_scripts_styles' );
}

/**
 * Enqueue Files for BackEnd
 */
if ( ! function_exists( 'nichebase_vt_admin_scripts_styles' ) ) {
  function nichebase_vt_admin_scripts_styles() {
    wp_enqueue_style( 'font-awesome', NICHEBASE_CSS . '/font-awesome.min.css', array(), '4.7.0', 'all' );
  }
  add_action( 'admin_enqueue_scripts', 'nichebase_vt_admin_scripts_styles' );
}

/**
 * Apply theme's stylesheet to the visual editor.
 *
 * @uses add_editor_style() Links a stylesheet to visual editor
 * @uses get_stylesheet_uri() Returns URI of theme stylesheet
 */
function nichebase_add_editor_styles() {
  add_editor_style( get_stylesheet_uri() );
}
add_action( 'init', 'nichebase_add_editor_styles' );
