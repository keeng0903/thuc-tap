<?php
global $nichebase_redux_options;
$nichebase_need_content = (isset($nichebase_redux_options['need_content'])) ? $nichebase_redux_options['need_content'] : '';
$nichebase_btn_text = (isset($nichebase_redux_options['btn_text'])) ? $nichebase_redux_options['btn_text'] : '';
$nichebase_btn_link = (isset($nichebase_redux_options['btn_link'])) ? $nichebase_redux_options['btn_link'] : '';
$nichebase_hide_dots = (isset($nichebase_redux_options['hide_dots'])) ? $nichebase_redux_options['hide_dots'] : '';
if ($nichebase_hide_dots) {
  $nichebase_dots_cls = ' hide-dots';
} else {
  $nichebase_dots_cls = '';
}
?>
<!-- Navigation & Search -->
<?php
if ( has_nav_menu( 'primary' ) ) { ?>
<nav class="nibs-navigation<?php echo esc_attr($nichebase_dots_cls) ?>">
<?php
  wp_nav_menu(
    array(
      'theme_location'    => 'primary',
      'container'         => '',
      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
      'walker'            => new WP_Bootstrap_Navwalker()
    )
  );
?>
</nav> <!-- Container -->
<?php } if ($nichebase_need_content) { ?>
<div class="header-links-wrap">
  <div class="header-right-btn">
    <a href="<?php echo esc_url( $nichebase_btn_link ); ?>" class="nibs-btn nibs-blue-btn nibs-small-btn"><?php echo esc_html( $nichebase_btn_text ); ?></a>
  </div>
</div>
<?php } ?>