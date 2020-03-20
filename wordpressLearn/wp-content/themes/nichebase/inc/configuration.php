<?php
/*
 * Redux Framework Configurations
 * Author & Copyright: NicheBase
 * URL: https://nicheaddons.com/
 */

/* Register menu */
register_nav_menus( array(
	'primary' => esc_html__( 'Main Navigation', 'nichebase' )
) );

/* Thumbnails */
add_theme_support( 'post-thumbnails' );

/* Feeds */
add_theme_support( 'automatic-feed-links' );

/* Add support for Title Tag. */
add_theme_support( 'title-tag' );

/* Added for backwards compatibility to support pre 5.2.0 WordPress versions */
if ( ! function_exists( 'nichebase_wp_body_open' ) ) :
  function nichebase_wp_body_open() {
    do_action( 'wp_boby_open' );
  }
endif;

/* Custom Header */
$nichebase_header_args = array(
  'flex-width'    => true,
  'flex-height'   => true,
  'header-text'   => true,
);
add_theme_support( 'custom-header', $nichebase_header_args );

/* Custom Logo */
add_theme_support( 'custom-logo' );

/* Custom Background */
add_theme_support( 'custom-background' );

/* HTML5 */
add_theme_support( 'html5', array( 'comment-form', 'comment-list', 'gallery', 'caption' ) );

/* Extend wp_title */
if ( ! function_exists( 'nichebase_theme_wp_title' ) ) {
	function nichebase_theme_wp_title( $title, $sep ) {
	 global $paged, $page;

	 if ( is_feed() )
	  return $title;

	 // Add the site name.
	 $site_name = get_bloginfo( 'name' );

	 // Add the site description for the home/front page.
	 $site_description = get_bloginfo( 'description', 'display' );
	 if ( $site_description && ( is_front_page() ) )
	  $title = "$site_name $sep $site_description";

	 // Add a page number if necessary.
	 if ( $paged >= 2 || $page >= 2 )
    /* translators: %s: Page */
	  $title = "$site_name $sep" . sprintf( esc_html__( ' Page %s', 'nichebase' ), max( $paged, $page ) );

	 return $title;
	}
	add_filter( 'wp_title', 'nichebase_theme_wp_title', 10, 2 );
}

/* Languages */
if ( ! function_exists( 'nichebase_theme_language_setup' ) ) {
	function nichebase_theme_language_setup(){
	  load_theme_textdomain( 'nichebase', get_template_directory() . '/languages' );
	}
	add_action('after_setup_theme', 'nichebase_theme_language_setup');
}

/* Custom Logo */
if ( ! function_exists( 'nichebase_custom_logo_setup' ) ) {
	function nichebase_custom_logo_setup() {
	 $defaults = array(
	 'height'      => null,
	 'width'       => null,
	 );
	 add_theme_support( 'custom-logo', $defaults );
	}
	add_action( 'after_setup_theme', 'nichebase_custom_logo_setup' );
}

/* Footer Widgets */
if ( ! function_exists( 'nichebase_vt_widget_init' ) ) {
	function nichebase_vt_widget_init() {
		if ( function_exists( 'register_sidebar' ) ) {

			// Main Widget Area
			register_sidebar(
				array(
					'name' => esc_html__( 'Main Widget Area', 'nichebase' ),
					'id' => 'sidebar-1',
					'description' => esc_html__( 'Appears on posts and pages.', 'nichebase' ),
					'before_widget' => '<div id="%1$s" class="nibs-widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h4 class="widget-title">',
					'after_title' => '</h4>',
				)
			);

	    // Footer Widgets
	    register_sidebar(
				array(
					'name' => esc_html__( 'Footer Widget 1', 'nichebase' ),
					'id' => 'footer-1',
					'description' => esc_html__( 'Appears on Footer.', 'nichebase' ),
					'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>',
				)
			);
			register_sidebar(
				array(
					'name' => esc_html__( 'Footer Widget 2', 'nichebase' ),
					'id' => 'footer-2',
					'description' => esc_html__( 'Appears on Footer.', 'nichebase' ),
					'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>',
				)
			);
			register_sidebar(
				array(
					'name' => esc_html__( 'Footer Widget 3', 'nichebase' ),
					'id' => 'footer-3',
					'description' => esc_html__( 'Appears on Footer.', 'nichebase' ),
					'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>',
				)
			);
			register_sidebar(
				array(
					'name' => esc_html__( 'Footer Widget 4', 'nichebase' ),
					'id' => 'footer-4',
					'description' => esc_html__( 'Appears on Footer.', 'nichebase' ),
					'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>',
				)
			);

		}
	}
	add_action( 'widgets_init', 'nichebase_vt_widget_init' );
}

/* Add a pingback url auto-discovery header for single posts, pages, or attachments. */
if ( ! function_exists( 'nichebase_pingback_header' ) ) {
	function nichebase_pingback_header() {
	  if ( is_singular() && pings_open() ) {
	    echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	  }
	}
	add_action( 'wp_head', 'nichebase_pingback_header' );
}

/* Title Area */
if ( ! function_exists( 'nichebase_title_area' ) ) {
  function nichebase_title_area() {

    global $post, $wp_query;
    // Get post meta in all type of WP pages
    $nichebase_id    = ( isset( $post ) ) ? $post->ID : 0;
    $nichebase_id    = ( is_home() ) ? get_option( 'page_for_posts' ) : $nichebase_id;
    $nichebase_meta  = get_post_meta( $nichebase_id, 'page_type_metabox', true );
    if ($nichebase_meta && (!is_archive() || nichebase_is_woocommerce_shop())) {
      $custom_title = $nichebase_meta['page_custom_title'];
      if ($custom_title) {
        $custom_title = $custom_title;
      } else {
        $custom_title = '';
      }
    } else { $custom_title = ''; }

    $allowed_title_area_tags = array(
        'a' => array(
          'href' => array(),
        ),
        'span' => array(
          'class' => array(),
        )
    );

    if ( $custom_title && !is_search()) {
      echo esc_html($custom_title);
    } elseif ( is_home() ) {
      bloginfo('description');
    } elseif ( is_search() ) {
      /* translators: %s: Search Results */
      printf( esc_html__( 'Search Results for %s', 'nichebase' ), '<span>' . get_search_query() . '</span>' );
    } elseif ( is_category() || is_tax() ){
      single_cat_title();
    } elseif ( is_tag() ){
      single_tag_title(esc_html__('Posts Tagged: ', 'nichebase'));
    } elseif ( is_archive() ){
      if ( is_day() ) {
        /* translators: %s: Search Results */
        printf( wp_kses( __( 'Archive for <span>%s</span>', 'nichebase' ), $allowed_title_area_tags ), get_the_date());
      } elseif ( is_month() ) {
        /* translators: %s: Search Results */
        printf( wp_kses( __( 'Archive for <span>%s</span>', 'nichebase' ), $allowed_title_area_tags ), get_the_date( 'F, Y' ));
      } elseif ( is_year() ) {
        /* translators: %s: Search Results */
        printf( wp_kses( __( 'Archive for <span>%s</span>', 'nichebase' ), $allowed_title_area_tags ), get_the_date( 'Y' ));
      } elseif ( is_author() ) {
        /* translators: %s: Search Results */
        printf( wp_kses( __( 'Posts by: <span>%s</span>', 'nichebase' ), $allowed_title_area_tags ), esc_html( get_the_author_meta( 'display_name', $wp_query->post->post_author )));
      } elseif ( is_post_type_archive() ) {
        post_type_archive_title();
      } else {
        esc_html_e( 'Archives', 'nichebase' );
      }
    } else {
      the_title();
    }

  }
}

/* Filter the categories archive widget to add a span around post count */
if ( ! function_exists( 'nichebase_cat_count_span' ) ) {
	function nichebase_cat_count_span( $links ) {
	  $links = str_replace( '</a> (', '</a><span class="post-count">(', $links );
	  $links = str_replace( ')', ')</span>', $links );
	  return $links;
	}
	add_filter( 'wp_list_categories', 'nichebase_cat_count_span' );
}

/* Filter the archives widget to add a span around post count */
if ( ! function_exists( 'nichebase_archive_count_span' ) ) {
	function nichebase_archive_count_span( $links ) {
	  $links = str_replace( '</a>&nbsp;(', '</a><span class="post-count">(', $links );
	  $links = str_replace( ')', ')</span>', $links );
	  return $links;
	}
	add_filter( 'get_archives_link', 'nichebase_archive_count_span' );
}