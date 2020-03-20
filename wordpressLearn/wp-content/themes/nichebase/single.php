<?php
/*
 * The template for displaying all single posts.
 * Author & Copyright: NicheBase
 * URL: https://nicheaddons.com/
 */
get_header();
global $nichebase_redux_options;

// Theme Options
$nichebase_sidebar_position = (isset($nichebase_redux_options['blog_sidebar_position'])) ? $nichebase_redux_options['blog_sidebar_position'] : '';
$nichebase_blog_widget = (isset($nichebase_redux_options['blog_widget'])) ? $nichebase_redux_options['blog_widget'] : '';

if ($nichebase_blog_widget) {
	$widget_select = $nichebase_blog_widget;
} else {
	if (is_active_sidebar('sidebar-1')) {
		$widget_select = 'sidebar-1';
	} else {
		$widget_select = '';
	}
}

// Sidebar Position
if ($widget_select && is_active_sidebar( $widget_select )) {
	if ($nichebase_sidebar_position === 'sidebar-hide') {
		$layout_class = 'col-md-12';
		$nichebase_sidebar_class = 'hide-sidebar';
	} elseif ($nichebase_sidebar_position === 'sidebar-left') {
		$layout_class = 'nibs-primary';
		$nichebase_sidebar_class = 'left-sidebar';
	} else {
		$layout_class = 'nibs-primary';
		$nichebase_sidebar_class = 'right-sidebar';
	}
} else {
	$nichebase_sidebar_position = 'sidebar-hide';
	$layout_class = 'col-md-12';
	$nichebase_sidebar_class = 'hide-sidebar';
}
?>
<div id="nibs-content" class="nibs-mid-wrap nibs-post-single <?php echo esc_attr($nichebase_sidebar_class); ?>">
	<div class="container">
    <div class="row">
      <div class="<?php echo esc_attr($layout_class); ?>">
        <div class="nibs-unit-fix">
					<?php
					if ( have_posts() ) :
						/* Start the Loop */
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/post/content', 'single' );
							if ( comments_open() || get_comments_number() ) :
			          comments_template();
			        endif;
						endwhile;
					else :
						get_template_part( 'template-parts/post/content', 'none' );
					endif; ?>
				</div><!-- unit-fix -->
			</div><!-- layout -->
			<?php
				if ($nichebase_sidebar_position !== 'sidebar-hide') {
					get_sidebar(); // Sidebar
				}
			?>
		</div><!-- row -->
	</div><!-- container -->
</div><!-- mid -->
<?php
get_footer();
