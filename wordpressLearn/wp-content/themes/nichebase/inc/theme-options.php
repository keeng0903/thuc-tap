<?php
/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */

if ( ! class_exists( 'Redux' ) ) {
  return;
}

// This is your option name where all the Redux data is stored.
$nichebase_opt_name = "nichebase_redux_options";
$nichebase_opt_name = apply_filters( 'redux_demo/opt_name', $nichebase_opt_name );

// Args

$nichebase_theme = wp_get_theme();
$nichebase_args = array(
  'opt_name'             => $nichebase_opt_name,
  'display_name'         => $nichebase_theme->get( 'Name' ),
  'display_version'      => $nichebase_theme->get( 'Version' ),
  'menu_type'            => 'menu',
  'allow_sub_menu'       => true,
  'menu_title'           => __( 'NicheBase', 'nichebase' ),
  'page_title'           => __( 'NicheBase', 'nichebase' ),
  'google_api_key'       => '',
  'google_update_weekly' => false,
  'async_typography'     => false,
  'admin_bar'            => true,
  'admin_bar_icon'       => 'dashicons-awards',
  'admin_bar_priority'   => 50,
  'global_variable'      => '',
  'dev_mode'             => false,
  'update_notice'        => false,
  'customizer'           => true,
  'page_priority'        => '4',
  'page_parent'          => 'themes.php',
  'page_permissions'     => 'manage_options',
  'menu_icon'            => 'dashicons-awards',
  'last_tab'             => '',
  'page_icon'            => 'dashicons-awards',
  'page_slug'            => '',
  'save_defaults'        => true,
  'default_show'         => false,
  'default_mark'         => '',
  'show_import_export'   => true,
  'transient_time'       => 60 * MINUTE_IN_SECONDS,
  'output'               => true,
  'output_tag'           => true,
  'database'             => '',
  'use_cdn'              => true,

);
Redux::setArgs( $nichebase_opt_name, $nichebase_args );

// Header Parent
Redux::setSection( $nichebase_opt_name, array(
  'title'            => esc_html__('Header', 'nichebase'),
  'id'               => 'theme_header_tab',
  'icon'             => 'fa fa-bars',
) );

// Normal Menu
Redux::setSection( $nichebase_opt_name, array(
  'title'  => esc_html__('Normal Menu', 'nichebase'),
  'id'     => 'header_color_section-normal',
  'icon'             => 'fa fa-crosshairs',
  'subsection'       => true,
  'fields' => array(
    array(
      'id'       => 'hide_dots',
      'type'     => 'switch',
      'title' => esc_html__('Hide Active Dots', 'nichebase'),
      'default' => false,
    ),
    array(
      'id'      => 'menu_info',
      'type'    => 'info',
      'style'   => 'info',
      'title'   => esc_html__('Main Menu Colors', 'nichebase'),
    ),
    array(
      'id'        => 'menu_link_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Menu Normal Color', 'nichebase'),
      'output'    => array(
        'color' => '.nibs-navigation ul li a'
      ),
    ),
    array(
      'id'        => 'menu_link_hover_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Menu Hover (or) Active Color', 'nichebase'),
      'output'    => array(
        'color' => '.nibs-navigation ul li a:hover, .nibs-navigation > ul > li.active > a, .nibs-navigation > ul > li:hover > a',
        'border-color' => '.nibs-navigation .nav-text .nav-dots, .nibs-navigation .nav-text .nav-dots:before, .nibs-navigation .nav-text .nav-dots:after'
      ),
    ),
    array(
      'id'      => 'submenu_info',
      'type'    => 'info',
      'style'   => 'info',
      'title'   => esc_html__('Sub Menu Colors', 'nichebase'),
    ),
    array(
      'id'        => 'submenu_bg_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Sub Menu Background Color', 'nichebase'),
      'output'    => array(
        'background-color' => '.dropdown-nav',
        'border-bottom-color' => '.dropdown-nav:before'
      ),
    ),
    array(
      'id'        => 'submenu_link_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Sub Menu Normal Color', 'nichebase'),
      'output'    => array(
        'color' => '.nibs-navigation ul .dropdown-nav li a'
      ),
    ),
    array(
      'id'        => 'submenu_link_hover_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Sub Menu Hover Color', 'nichebase'),
      'output'    => array(
        'color' => '.nibs-navigation ul .dropdown-nav li a:hover'
      ),
    ),

  )
) );

// Mobile Menu
Redux::setSection( $nichebase_opt_name, array(
  'title'  => esc_html__('Mobile Menu', 'nichebase'),
  'id'     => 'header_color_section-mobile',
  'icon'             => 'fa fa-crosshairs',
  'subsection'       => true,
  'fields' => array(
    array(
      'id'      => 'mobile_menu_info',
      'type'    => 'info',
      'style'   => 'info',
      'title'   => esc_html__('Mobile Menu Colors', 'nichebase'),
    ),
    array(
      'id'        => 'mobile_menu_toggle_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Menu Toggle Color', 'nichebase'),
      'output'    => array(
        'background-color' => '.mean-container a.meanmenu-reveal span, .mean-container a.meanmenu-reveal span:before, .mean-container a.meanmenu-reveal span:after, .mean-container a.meanmenu-reveal.meanclose span:before.mean-container a.meanmenu-reveal span, .mean-container a.meanmenu-reveal span:before, .mean-container a.meanmenu-reveal span:after, .mean-container a.meanmenu-reveal.meanclose span:before',
        'border-color' => '.mean-container a.meanmenu-reveal',
      ),
    ),
    array(
      'id'        => 'mobile_menu_bg_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Menu Background Color', 'nichebase'),
      'output'    => array(
        'background-color' => '.mean-container .mean-nav'
      ),
    ),
    array(
      'id'        => 'mobile_menu_border_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Menu Border Color', 'nichebase'),
      'output'    => array(
        'background-color' => '.mean-container .dropdown-nav.normal-style .current-menu-parent > a, .mean-container .mean-nav ul li li a, .mean-nav .dropdown-nav li.active > a, .mean-container .mean-nav ul > li a'
      ),
    ),
    array(
      'id'      => 'mobile_menu_info_link',
      'type'    => 'info',
      'style'   => 'info',
      'title'   => esc_html__('Menu Link Colors', 'nichebase'),
    ),
    array(
      'id'        => 'mobile_menu_link_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Menu Normal Color', 'nichebase'),
      'output'    => array(
        'color' => '.mean-container .mean-nav ul li a'
      ),
    ),
    array(
      'id'        => 'mobile_menu_link_hover_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Menu Hover Color', 'nichebase'),
      'output'    => array(
        'color' => '.mean-container .mean-nav > ul > li:hover > a, .mean-container .mean-nav > ul > li.current-menu-ancestor > a, .mean-container .mean-nav > ul > li.active > a, .mean-container .mean-nav .dropdown-nav > li:hover > a, .mean-container .mean-nav .dropdown-nav > li.active > a'
      ),
    ),
    array(
      'id'      => 'expand_info',
      'type'    => 'info',
      'style'   => 'info',
      'title' => esc_html__('Menu Expand Color', 'nichebase'),
    ),
    array(
      'id'        => 'expand_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Expand Color', 'nichebase'),
      'output'    => array(
        'color' => '.mean-container .mean-nav ul li a.mean-expand'
      ),
    ),
    array(
      'id'        => 'expand_hover_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Expand Hover Color', 'nichebase'),
      'output'    => array(
        'color' => '.mean-container .mean-nav ul li a.mean-expand:hover, .mean-container .mean-nav ul li a.mean-expand:focus, .mean-container .mean-nav ul li:hover > a.mean-expand, .mean-container .mean-nav ul li:focus > a.mean-expand, .nibs-header .mean-container .dropdown-nav > li:hover > a.mean-expand, .nibs-header .mean-container .dropdown-nav > li:focus > a.mean-expand'
      ),
    ),
    array(
      'id'        => 'expand_bg_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Expand Background Color', 'nichebase'),
      'output'    => array(
        'background-color' => '.mean-container .mean-nav ul li a.mean-expand'
      ),
    ),
    array(
      'id'        => 'expand_bg_hover_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Expand Background Hover Color', 'nichebase'),
      'output'    => array(
        'background-color' => '.mean-container .mean-nav ul li a.mean-expand:hover, .mean-container .mean-nav ul li a.mean-expand:focus, .mean-container .mean-nav ul li:hover > a.mean-expand, .mean-container .mean-nav ul li:focus > a.mean-expand, .nibs-header .mean-container .dropdown-nav > li:hover > a.mean-expand, .nibs-header .mean-container .dropdown-nav > li:focus > a.mean-expand'
      ),
    ),
  )
) );

// Button
Redux::setSection( $nichebase_opt_name, array(
  'title'  => esc_html__('Button', 'nichebase'),
  'id'     => 'header_design_tab',
  'icon'   => 'fa fa-magic',
  'subsection'       => true,
  'fields' => array(
    array(
      'id'       => 'need_content',
      'type'     => 'switch',
      'title' => esc_html__('Need Header Button', 'nichebase'),
      'default' => false,
    ),
    array(
      'id'          => 'btn_text',
      'type'        => 'text',
      'title'       => esc_html__( 'Button Text', 'nichebase' ),
      'placeholder' => esc_html__( 'Contact Us', 'nichebase' ),
      'required' => array( 'need_content', '=', true ),
    ),
    array(
      'id'          => 'btn_link',
      'type'        => 'text',
      'title'       => esc_html__( 'Button Link', 'nichebase' ),
      'placeholder' => esc_html__( 'http://', 'nichebase' ),
      'required' => array( 'need_content', '=', true ),
    ),
    array(
      'id'      => 'btnlink_info',
      'type'    => 'info',
      'style'   => 'info',
      'title' => esc_html__('Header Button Colors', 'nichebase'),
      'required' => array( 'need_content', '=', true ),
    ),
    array(
      'id'        => 'button_link_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Button Text Color', 'nichebase'),
      'output'    => array(
        'color' => '.header-right-btn .nibs-btn'
      ),
      'required' => array( 'need_content', '=', true ),
    ),
    array(
      'id'        => 'button_link_hover_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Button Text Hover Color', 'nichebase'),
      'output'    => array(
        'color' => '.header-right-btn .nibs-btn:hover'
      ),
      'required' => array( 'need_content', '=', true ),
    ),
    array(
      'id'        => 'button_bg_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Button Background Color', 'nichebase'),
      'output'    => array(
        'background-color' => '.header-right-btn .nibs-btn'
      ),
      'required' => array( 'need_content', '=', true ),
    ),
    array(
      'id'        => 'button_bg_hover_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Button Background Hover Color', 'nichebase'),
      'output'    => array(
        'background-color' => '.header-right-btn .nibs-btn:hover'
      ),
      'required' => array( 'need_content', '=', true ),
    ),
    array(
      'id'        => 'button_border_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Button Border Color', 'nichebase'),
      'output'    => array(
        'border-color' => '.header-right-btn .nibs-btn'
      ),
      'required' => array( 'need_content', '=', true ),
    ),
    array(
      'id'        => 'button_border_hover_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Button Border Hover Color', 'nichebase'),
      'output'    => array(
        'border-color' => '.header-right-btn .nibs-btn:hover'
      ),
      'required' => array( 'need_content', '=', true ),
    ),

  )
) );

// Title Bar
Redux::setSection( $nichebase_opt_name, array(
  'title'  => esc_html__('Title Bar', 'nichebase'),
  'id'     => 'theme_header_tab-banner',
  'icon'   => 'fa fa-bullhorn',
  'subsection'       => true,
  'fields' => array(
    array(
      'id'       => 'title_color',
      'type'     => 'color',
      'transparent'  => false,
      'title'    => esc_html__( 'Title Color', 'nichebase' ),
      'output'    => array(
        'color' => '.nibs-page-title h2'
      ),
    ),
    array(
      'id'       => 'title_bg_color',
      'type'     => 'color_rgba',
      'transparent'  => false,
      'title'    => esc_html__( 'Overlay (or) Background Color', 'nichebase' ),
      'output'    => array(
        'background-color' => '.nibs-page-title:after'
      ),
    ),

  )
) );

// Blog
Redux::setSection( $nichebase_opt_name, array(
  'title'  => esc_html__('Blog', 'nichebase'),
  'id'     => 'blog_section',
  'icon'   => 'fa fa-edit',
  'fields' => array(
    array(
      'id'             => 'blog_sidebar_position',
      'type'           => 'select',
      'title'          => esc_html__('Sidebar Position', 'nichebase'),
      'options'        => array(
        'sidebar-right' => esc_html__('Right', 'nichebase'),
        'sidebar-left' => esc_html__('Left', 'nichebase'),
        'sidebar-hide' => esc_html__('Hide', 'nichebase'),
      ),
      'default'  => 'sidebar-right',
      'desc'          => esc_html__('This style will apply, default blog pages - Like : Archive, Category, Tags, Search, Single & Author.', 'nichebase'),
      'subtitle'          => esc_html__('Default option : Right', 'nichebase'),
    ),
    array(
      'id'             => 'blog_widget',
      'type'           => 'select',
      'title'          => esc_html__('Sidebar Widget', 'nichebase'),
      'data'           => 'sidebars',
      'desc'           => esc_html__('Default option : Main Widget Area', 'nichebase'),
      'required' => array( 'blog_sidebar_position', 'equals', array( 'sidebar-right', 'sidebar-left' ) ),
    ),

  )
) );

// Content Colors
Redux::setSection( $nichebase_opt_name, array(
  'title'            => esc_html__('Content Colors', 'nichebase'),
  'id'               => 'content_section',
  'icon'             => 'fa fa-crosshairs',
) );

// Content Text
Redux::setSection( $nichebase_opt_name, array(
  'title'  => esc_html__('Content Text', 'nichebase'),
  'id'     => 'content_text_section',
  'subsection'       => true,
  'fields' => array(
    array(
      'id'      => 'cnt_info',
      'type'    => 'info',
      'style'   => 'info',
      'title'   => esc_html__('Body Content', 'nichebase'),
    ),
    array(
      'id'        => 'body_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Body & Content Text Color', 'nichebase'),
      'output'    => array(
        'color' => 'p, span, .nibs-mid-wrap p, .nibs-mid-wrap span, li, .news-info p, .news-detail-wrap p, .nibs-post-single p, .bullets-list li'
      ),
    ),
    array(
      'id'        => 'body_link_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Body & Content Link Color', 'nichebase'),
      'output'    => array(
        'color' => 'a, .nibs-mid-wrap a, .nibs-mid-wrap ul li a, .nibs-post-single a, .bullets-list li a, .nibs-mid-wrap .nibs-social a'
      ),
    ),
    array(
      'id'        => 'body_link_hover_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Body & Content Link Hover Color', 'nichebase'),
      'output'    => array(
        'color' => 'a:hover, .nibs-mid-wrap a:hover, .nibs-mid-wrap ul li a:hover, .nibs-post-single a:hover, .bullets-list li a:hover, .nibs-mid-wrap .nibs-social a:hover'
      ),
    ),
    array(
      'id'      => 'sidebor_info',
      'type'    => 'info',
      'style'   => 'info',
      'title'   => esc_html__('Sidebar Content', 'nichebase'),
    ),
    array(
      'id'        => 'sidebar_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Sidebar Text Color', 'nichebase'),
      'output'    => array(
        'color' => '.nibs-secondary p, .nibs-secondary .nibs-widget, .nibs-secondary .widget_rss .rssSummary, .nibs-secondary .news-time, .nibs-secondary .recentcomments, .nibs-secondary input[type="text"], .nibs-secondary .nice-select, .nibs-secondary caption, .nibs-secondary table td, .nibs-secondary .nibs-widget input[type="search"], .nibs-widget ul li'
      ),
    ),
    array(
      'id'        => 'sidebar_link_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Sidebar Link Color', 'nichebase'),
      'output'    => array(
        'color' => '.nibs-secondary a, .nibs-mid-wrap .nibs-secondary a, .nibs-secondary .nibs-widget ul li a, .nibs-widget ul li a, .widget_list_style ul a, .widget_categories ul a, .widget_archive ul a, .widget_recent_comments ul a, .widget_recent_entries ul a, .widget_meta ul a, .widget_pages ul a, .widget_rss ul a, .widget_nav_menu ul a, .widget_layered_nav ul a, .post-widget .nav-tabs a.nav-link, .widget_product_categories ul a'
      ),
    ),
    array(
      'id'        => 'sidebar_link_hover_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Sidebar Link Hover Color', 'nichebase'),
      'output'    => array(
        'color' => '.nibs-secondary a:hover, .nibs-widget ul li a:hover, .nibs-widget ul li a:focus, .nibs-mid-wrap .nibs-secondary a:hover, .nibs-mid-wrap .nibs-secondary a:focus, .nibs-secondary .nibs-widget ul li a:hover, .widget_list_style ul a:hover, .widget_list_style ul a:focus, .widget_categories ul a:hover, .widget_categories ul a:focus, .widget_archive ul a:hover, .widget_archive ul a:focus, .widget_recent_comments ul a:hover, .widget_recent_comments ul a:focus, .widget_recent_entries ul a:hover, .widget_recent_entries ul a:focus, .widget_meta ul a:hover, .widget_meta ul a:focus, .widget_pages ul a:hover, .widget_pages ul a:focus, .post-widget .nav-tabs a.nav-link:hover, .post-widget .nav-tabs a.nav-link:focus, .post-widget .nav-tabs a.nav-link.active, .post-widget .nav-tabs a.nav-link.active:hover, .post-widget .nav-tabs a.nav-link.active:focus, .widget_rss ul a:hover, .widget_rss ul a:focus, .widget_nav_menu ul a:hover, .widget_nav_menu ul a:focus, .widget_layered_nav ul a:hover, .widget_layered_nav ul a:focus, .widget_product_categories ul a:hover, .widget_product_categories ul a:focus'
      ),
    ),

  )
) );

// Headings
Redux::setSection( $nichebase_opt_name, array(
  'title'  => esc_html__('Headings', 'nichebase'),
  'id'     => 'content_heading_section',
  'subsection'       => true,
  'fields' => array(
    array(
      'id'      => 'bdy_heading_info',
      'type'    => 'info',
      'style'   => 'info',
      'title'   => esc_html__('Content Heading Color', 'nichebase'),
    ),
    array(
      'id'        => 'content_heading_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Content Heading', 'nichebase'),
      'output'    => array(
        'color' => '.nibs-mid-wrap h1, .nibs-mid-wrap h2, .nibs-mid-wrap h3, .nibs-mid-wrap h4, .nibs-mid-wrap h5, .nibs-mid-wrap h6, .nibs-primary h1, .nibs-primary h2, .nibs-primary h3, .nibs-primary h4, .nibs-primary h5, .nibs-primary h6, .meta-label, .nibs-mid-wrap h2 span'
      ),
    ),
    array(
      'id'      => 'sidebor_heading_info',
      'type'    => 'info',
      'style'   => 'info',
      'title'   => esc_html__('Sidebar Heading Color', 'nichebase'),
    ),
    array(
      'id'        => 'sidebar_heading_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Sidebar Heading', 'nichebase'),
      'output'    => array(
        'color' => '.nibs-secondary h1, .nibs-secondary h2, .nibs-secondary h3, .nibs-secondary h4, .nibs-secondary h5, .nibs-secondary h6, .nibs-widget .widget-title'
      ),
    ),

  )
) );

// Content Colors
Redux::setSection( $nichebase_opt_name, array(
  'title'            => esc_html__('Footer Colors', 'nichebase'),
  'id'               => 'footer_section',
  'icon'             => 'fa fa-crosshairs',
) );

// Widget Block
Redux::setSection( $nichebase_opt_name, array(
  'title'  => esc_html__('Widget Block', 'nichebase'),
  'id'     => 'footer_widget_section',
  'subsection'       => true,
  'fields' => array(
    array(
      'id'        => 'footer_bg_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Footer Background Color', 'nichebase'),
      'output'    => array(
        'background-color' => '.nibs-footer'
      ),
    ),
    array(
      'id'        => 'footer_heading_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Footer Heading Color', 'nichebase'),
      'output'    => array(
        'color' => '.footer-widget h4, .nibs-footer h1, .nibs-footer h2, .nibs-footer h3, .nibs-footer h4, .footer-widget-title, .footer-widget .widget-title'
      ),
    ),
    array(
      'id'        => 'footer_text_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Footer Text Color', 'nichebase'),
      'output'    => array(
        'color' => 'footer.nibs-footer .footer-widget-area, footer.nibs-footer .footer-widget, footer.nibs-footer .nibs-widget p, footer.nibs-footer .nibs-widget p span, footer.nibs-footer .nibs-widget span, footer.nibs-footer .nibs-widget ul li, footer.nibs-footer .footer-widget-area, footer.nibs-footer .nibs-widget p, footer.nibs-footer .nibs-recent-blog .widget-bdate, .nibs-footer-wrap, footer.nibs-footer table td, footer.nibs-footer caption, .nibs-footer .footer-item p, footer.nibs-footer .nibs-widget input[type="email"], .footer-widget .tp_recent_tweets ul li, footer.nibs-footer .widget_archive ul li, .footer-widget.widget_calendar caption, .footer-widget .nice-select .current, .footer-widget .nice-select ul li, .footer-widget ul li, footer.nibs-footer .widget_search form input[type="text"], .footer-widget p'
      ),
    ),
    array(
      'id'        => 'footer_link_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Footer Link Color', 'nichebase'),
      'output'    => array(
        'color' => 'footer.nibs-footer a, footer.nibs-footer .footer-widget .nibs-widget ul li a, footer.nibs-footer .nibs-widget a span, footer.nibs-footer .widget_list_style ul a, footer.nibs-footer .widget_categories ul a, footer.nibs-footer .widget_archive ul a, footer.nibs-footer .widget_recent_comments ul a, footer.nibs-footer .widget_recent_entries ul a, footer.nibs-footer .widget_meta ul a, footer.nibs-footer .widget_pages ul a, footer.nibs-footer .widget_rss ul a, footer.nibs-footer .widget_nav_menu ul a, footer.nibs-footer table td a, .nibs-footer ul li a, .nibs-footer .footer-item a, footer.nibs-footer .footer-widget .nibs-widget ul li a, .footer-widget .tp_recent_tweets ul li a, .footer-widget.widget_calendar a'
      ),
    ),
    array(
      'id'        => 'footer_link_hover_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Footer Link Hover Color', 'nichebase'),
      'output'    => array(
        'color' => 'footer.nibs-footer a:hover, footer.nibs-footer .footer-widget .nibs-widget ul li a:hover, footer.nibs-footer .nibs-widget a:hover span, footer.nibs-footer .widget_list_style ul a:hover, footer.nibs-footer .widget_categories ul a:hover, footer.nibs-footer .widget_archive ul a:hover, footer.nibs-footer .widget_recent_comments ul a:hover, footer.nibs-footer .widget_recent_entries ul a:hover, footer.nibs-footer .widget_meta ul a:hover, footer.nibs-footer .widget_pages ul a:hover, footer.nibs-footer .widget_rss ul a:hover, footer.nibs-footer .widget_nav_menu ul a:hover, footer.nibs-footer table td a:hover, .nibs-footer ul li a:hover, .nibs-footer .footer-item a:hover, footer.nibs-footer .footer-widget .nibs-widget ul li a:hover, .footer-widget .tp_recent_tweets ul li a:hover, .footer-widget .tp_recent_tweets ul li a:focus, .footer-widget.widget_calendar a:hover, .footer-widget.widget_calendar a:focus'
      ),
    ),

  )
) );

// Copyright Block
Redux::setSection( $nichebase_opt_name, array(
  'title'  => esc_html__('Copyright Block', 'nichebase'),
  'id'     => 'copyright_section',
  'subsection'       => true,
  'fields' => array(
    array(
      'id'        => 'copyright_bg_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Copyright Background Color', 'nichebase'),
      'output'    => array(
        'background-color' => '.nibs-copyright'
      ),
    ),
    array(
      'id'        => 'copyright_border_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Copyright Border Color', 'nichebase'),
      'output'    => array(
        'border-color' => '.nibs-copyright'
      ),
    ),
    array(
      'id'        => 'copyright_text_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Copyright Text Color', 'nichebase'),
      'output'    => array(
        'color' => '.alt-copyright p, .nibs-copyright, .nibs-footer .nibs-copyright .copyright-wrap p, .nibs-footer .nibs-copyright .copyright-links li'
      ),
    ),
    array(
      'id'        => 'copyright_link_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Copyright Link Color', 'nichebase'),
      'output'    => array(
        'color' => 'footer.nibs-footer .nibs-copyright a'
      ),
    ),
    array(
      'id'        => 'copyright_link_hover_color',
      'type'      => 'color',
      'transparent'  => false,
      'title'     => esc_html__('Copyright Link Hover Color', 'nichebase'),
      'output'    => array(
        'color' => 'footer.nibs-footer .nibs-copyright a:hover'
      ),
    ),

  )
) );
