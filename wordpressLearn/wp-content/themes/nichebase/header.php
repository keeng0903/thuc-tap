<?php
/*
 * The header for our theme.
 * Author & Copyright: NicheBase
 * URL: https://nicheaddons.com/
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="//gmpg.org/xfn/11">
<?php
wp_head();

// Site title and Tagline alignment
if (display_header_text() == true) {
  if (get_bloginfo( 'name' )) {
    $text_logo_class = ' nibs-has-text-logo';
  } else {
    $text_logo_class = ' nibs-no-text-logo';
  }
  if (get_bloginfo( 'description' )) {
    $site_tagline_class = ' nibs-has-site-tagline';
  } else {
    $site_tagline_class = ' nibs-no-site-tagline';
  }
} else {
  $text_logo_class = ' nibs-no-text-logo';
  $site_tagline_class = ' nibs-no-site-tagline';
}
?>
</head>
<body <?php body_class(); ?>>
<?php nichebase_wp_body_open(); ?>
<!-- Full Page -->
<!-- NicheBase Main Wrap -->
<div class="nibs-main-wrap">
  <a class="skip-link screen-reader-text" href="#nibs-content"><?php esc_html_e( 'Skip to content', 'nichebase' ); ?></a>
  <!-- NicheBase Main Wrap Inner -->
  <div class="main-wrap-inner">
  <!-- Header -->
  <header class="nibs-header<?php echo esc_attr($text_logo_class . $site_tagline_class); ?>">
    <div class="container">
      <?php get_template_part( 'template-parts/header/logo' ); ?>
      <div class="nibs-header-right">
        <?php get_template_part( 'template-parts/header/menu', 'bar' ); ?>
      </div>
    </div>
  </header>
  <?php
  // Title Area
  if ( !is_404() && !is_page_template( 'template-home.php' ) ) { get_template_part( 'template-parts/header/title', 'bar' ); }
