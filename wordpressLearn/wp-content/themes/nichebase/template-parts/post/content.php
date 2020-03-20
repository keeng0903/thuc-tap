<?php
/**
 * Template part for displaying posts.
 */
// Metabox
global $post;

$nichebase_large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' );
$nichebase_large_image = $nichebase_large_image[0];

if (is_sticky()) {
  $nichebase_sticky_class = ' sticky';
} else {
  $nichebase_sticky_class = '';
}
if ($nichebase_large_image) {
  $nichebase_img_class = '';
} else {
  $nichebase_img_class = ' no-img';
}
?>
<div class="nibs-news-item<?php echo esc_attr($nichebase_sticky_class.$nichebase_img_class); ?>">
	<div id="post-<?php the_ID(); ?>" <?php post_class('nibs-blog-post'); ?>>
		<?php if ($nichebase_large_image) { ?>
		  <div class="nibs-image">
		    <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail(); ?></a>
		  </div>
		<?php } ?>
	  <div class="nibs-news-info">
	    <div class="nibs-news-meta">
	      <div class="row">
	        <div class="col-md-12">
	        	<h5 class="nibs-news-date">
	        		<span><?php echo esc_html(get_the_date()); ?></span>
	        		<span><?php esc_html_e(' By', 'nichebase'); ?> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html(get_the_author()); ?></a></span>
					    <?php $nichebase_categories = get_the_category();
					    if ($nichebase_categories) { ?>
						    <span>
					        <?php foreach ( $nichebase_categories as $nichebase_category ) : ?>
					          <a href="<?php echo esc_url( get_category_link( $nichebase_category->term_id ) ); ?>"><?php echo esc_html( $nichebase_category->name ); ?></a>
					        <?php endforeach; ?>
				        </span>
			        <?php } ?>
	        	</h5>
	        	<?php the_title( '<h3 class="nibs-news-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' ); ?>
	        </div>
	      </div>
	    </div>
	    <?php
				echo '<div class="nibs-news-info-content">';
				the_excerpt();
				echo '</div>';
				wp_link_pages(
					array(
						'before'           => '<div class="wp-link-pages">' . esc_html__( 'Pages:', 'nichebase' ),
			      'after'            => '</div>',
			      'link_before'      => '<span>',
			      'link_after'       => '</span>',
			      'next_or_number'   => 'number',
			      'separator'        => ' ',
			      'pagelink'         => '%',
			      'echo'             => 1
					)
				);
			?>
	    <div class="nibs-link">
	      <a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'Read More', 'nichebase' ); ?> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
	    </div>
	  </div>
	</div>
</div>
<!-- #post-## -->
<?php
