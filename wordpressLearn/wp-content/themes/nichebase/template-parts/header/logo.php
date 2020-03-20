<?php
$nichebase_custom_logo_id = get_theme_mod( 'custom_logo' );
$nichebase_logo = wp_get_attachment_image_url( $nichebase_custom_logo_id , 'full' );
if ( has_custom_logo() ) {
	$nichebase_logo_class = ' has-logo';
} else {
	$nichebase_logo_class = '';
}
if (get_header_textcolor()) {
	$nichebase_tag_color = ' style = color:#'.get_header_textcolor().';';
} else {
	$nichebase_tag_color = '';
}
?>
<div class="nibs-brand<?php echo esc_attr($nichebase_logo_class); ?>">
	<a href="<?php echo esc_url(home_url( '/' )); ?>">
	<?php
		if ( has_custom_logo() ) {
      echo '<img src="' . esc_url( $nichebase_logo ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '">';
		} elseif (display_header_text() == true){
			if (get_bloginfo( 'name' )){
	      echo '<h1 class="nibs-text-logo">'. esc_html( get_bloginfo( 'name' ) ) .'</h1>';
	    }
	    if (get_bloginfo( 'description' )){
      	echo '<h2 class="nibs-site-tagline"'.esc_attr($nichebase_tag_color).'>'.esc_html( get_bloginfo('description') ) .'</h2>';
      }
		}
	?>
	</a>
</div>
