<?php
/*
 * The template for displaying all single elementor library.
 * Author & Copyright: NicheBase
 * URL: https://nicheaddons.com/
 */
get_header();
?>
<div id="nibs-content" class="nibs-mid-wrap elementor-single-page">
	<div class="container ">
		<div class="row">
      <div class="col-lg-12">
				<?php
				if (have_posts()) : while (have_posts()) : the_post();
					the_content();
				endwhile;
				endif;
				?>
			</div>
		</div>
	</div>
	<?php wp_reset_postdata(); ?>
</div>
<?php
get_footer();
