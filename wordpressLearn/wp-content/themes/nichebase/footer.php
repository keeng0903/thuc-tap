<?php
/*
 * The template for displaying the footer.
 * Author & Copyright: NicheBase
 * URL: https://nicheaddons.com/
 */
?>
</div><!-- Main Wrap Inner -->
<!-- Footer -->
<footer class="nibs-footer">
  <?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4') ) { ?>
  	<div class="container">
      <div class="footer-wrap">
        <?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
      </div>
  	</div>
  <?php }
  get_template_part( 'template-parts/footer/footer', 'copyright' ); ?>
</footer>
<!-- Footer -->
</div><!-- Main Wrap -->
<?php
wp_footer(); ?>
</body>
</html>
<?php
