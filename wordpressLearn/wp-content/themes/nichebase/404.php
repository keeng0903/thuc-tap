<?php
/*
 * The template for displaying 404 pages (not found).
 * Author & Copyright: NicheBase
 * URL: https://nicheaddons.com/
 */

get_header();
?>
<div class="nibs-error">
  <div class="container">
    <h1 class="error-title"><?php echo esc_html__( '404', 'nichebase' ); ?></h1>
    <h2 class="error-subtitle"><?php echo esc_html__( 'Ooops!!! Something went Wrong', 'nichebase' ); ?></h2>
    <p><?php echo esc_html__( 'The page you are looking for is removed or might never existed.', 'nichebase' ); ?></p>
    <div class="nibs-btn-wrap"><a href="<?php echo esc_url(home_url( '/' )); ?>" class="nibs-btn nibs-blue-btn nibs-small-btn"><?php echo esc_html__( 'BACK TO HOME', 'nichebase' ); ?></a></div>
  </div>
</div>
<?php
get_footer();
