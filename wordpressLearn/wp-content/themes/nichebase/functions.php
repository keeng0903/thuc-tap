<?php
/*
 * NicheBase Theme's Functions
 * Author & Copyright: NicheBase
 * URL: https://nicheaddons.com/
 */

/**
 * Define - Folder Paths
 */
define( 'NICHEBASE_THEMEROOT_PATH', get_template_directory() );
define( 'NICHEBASE_THEMEROOT_URI', get_template_directory_uri() );
define( 'NICHEBASE_CSS', NICHEBASE_THEMEROOT_URI . '/assets/css' );
define( 'NICHEBASE_IMAGES', NICHEBASE_THEMEROOT_URI . '/assets/images' );
define( 'NICHEBASE_SCRIPTS', NICHEBASE_THEMEROOT_URI . '/assets/js' );
define( 'NICHEBASE_FRAMEWORK', get_template_directory() . '/inc' );
define( 'NICHEBASE_LAYOUT', get_template_directory() . '/template-parts' );

/**
 * Define - Global Theme Info's
 */
if (is_child_theme()) { // If Child Theme Active
	$nichebase_theme_child = wp_get_theme();
	$nichebase_get_parent = $nichebase_theme_child->Template;
	$nichebase_theme = wp_get_theme($nichebase_get_parent);
} else { // Parent Theme Active
	$nichebase_theme = wp_get_theme();
}
define('NICHEBASE_NAME', $nichebase_theme->get( 'Name' ));
define('NICHEBASE_VERSION', $nichebase_theme->get( 'Version' ));
define('NICHEBASE_BRAND_URL', $nichebase_theme->get( 'AuthorURI' ));
define('NICHEBASE_BRAND_NAME', $nichebase_theme->get( 'Author' ));

/**
 * All Main Files Include
 */
/* Theme All Basic Setup */
require_once( NICHEBASE_FRAMEWORK . '/enqueue-files.php' );
require_once( NICHEBASE_FRAMEWORK . '/configuration.php' );

/* Bootstrap Menu Walker */
require_once( NICHEBASE_FRAMEWORK . '/plugins/class-wp-bootstrap-navwalker.php' );

/* Install Plugins */
require_once( NICHEBASE_FRAMEWORK . '/plugins/notify/activation.php' );

/* Include the TGM_Plugin_Activation class. */
require_once( NICHEBASE_FRAMEWORK . '/plugins/notify/class-tgm-plugin-activation.php' );

/* Integrate - Redux Framework */
require_once( NICHEBASE_FRAMEWORK .'/theme-options.php' );

/* Ccontent Width */
function nichebase_content_width() {
	if ( ! isset( $content_width ) ) $content_width = 1170;
}
add_action( 'after_setup_theme', 'nichebase_content_width', 0 );