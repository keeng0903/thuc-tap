<?php
/*
 * The sidebar containing the main widget area.
 * Author & Copyright: NicheBase
 * URL: https://nicheaddons.com/
 */

global $nichebase_redux_options;
$nichebase_blog_widget = (isset($nichebase_redux_options['blog_widget'])) ? $nichebase_redux_options['blog_widget'] : '';

?>
<div class="nibs-secondary">
	<?php if (!is_page() && $nichebase_blog_widget && !is_single()) {
		if (is_active_sidebar($nichebase_blog_widget)) {
			dynamic_sidebar($nichebase_blog_widget);
		}
	} else {
		if (is_active_sidebar('sidebar-1')) {
			dynamic_sidebar( 'sidebar-1' );
		}
	} ?>
</div><!-- #secondary -->
<?php
