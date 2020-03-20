<?php
/**
 * Single Post.
 */
global $post;
$nichebase_large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' );
$nichebase_large_image = $nichebase_large_image[0];

// Single Theme Option
if ($nichebase_large_image) {
  $img_class = '';
} else {
  $img_class = ' no-img';
}

$cat_list = get_the_category();
$tag_list = get_the_tags();
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('nibs-blog-post'); ?>>
	<div class="nibs-news-detail<?php echo esc_attr($img_class); ?>">    
    <?php if ($nichebase_large_image) { ?>
		  <div class="nibs-news"><img src="<?php echo esc_url($nichebase_large_image); ?>" alt="<?php the_title_attribute(); ?>"></div>
		<?php } ?>
		<div class="nibs-news-detail-wrap">
			<div class="nibs-news-meta">
	      <div class="row">
	        <div class="col-md-12">
	        	<h5 class="nibs-news-date">
	        		<span><?php echo esc_html(get_the_date()); ?></span>
	        		<span><?php esc_html_e(' By', 'nichebase'); ?> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html(get_the_author()); ?></a></span>
					    <?php $categories = get_the_category();
					    if ($categories) { ?>
						    <span>
					        <?php foreach ( $categories as $category ) : ?>
					          <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><?php echo esc_html( $category->name ); ?></a>
					        <?php endforeach; ?>
				        </span>
			        <?php } ?>
	        	</h5>
	        </div>
	      </div>
	    </div>
	    <!-- Content -->
			<?php
			the_content();
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
			<!-- Content -->
			<div class="single-news-meta">
        <?php $tags = get_the_tags();
		    if ($tags) { ?>
	        <div class="news-meta-tags">
	          <span class="meta-label"><?php esc_html_e( 'Tags:', 'nichebase' ); ?></span>
			      <?php foreach ( $tags as $post_tag ) : ?>
		          <span class="meta-tag"><a href="<?php echo esc_url( get_tag_link( $post_tag->term_id ) ); ?>"><?php echo esc_html( $post_tag->name ); ?></a></span>
			      <?php endforeach; ?>
	        </div>
	      <?php } ?>
      </div>
		</div>
  </div>
	<!-- Author Info -->
	<?php	
	if (get_the_author_meta( 'url' )) {
    $author_url = get_author_posts_url( get_the_author_meta( 'ID' ) );
    $website_url = get_the_author_meta( 'url' );
    $target = 'target="_blank"';
  } else {
    $author_url = get_author_posts_url( get_the_author_meta( 'ID' ) );
    $website_url = get_author_posts_url( get_the_author_meta( 'ID' ) );
    $target = '';
  }
  $author_content = get_the_author_meta( 'description' );
  if ($author_content) {
  ?>
    <div class="nibs-author-info">
      <div class="author-content">
        <a href="<?php echo esc_url($author_url); ?>" class="author-name"><?php echo esc_html(get_the_author_meta('first_name')).' '.esc_html(get_the_author_meta('last_name')); ?></a>
        <p><?php echo esc_html(get_the_author_meta( 'description' )); ?></p>
      </div>
    </div>
  <?php } ?>
</div><!-- #post-## -->
<?php
