<!-- Footer Widgets -->
<div class="row">
	<?php if (is_active_sidebar('footer-1')) { ?>
		<div class="col-lg-3 col-md-6">
      <?php dynamic_sidebar( 'footer-1' ); ?>
    </div>
	<?php }
	if (is_active_sidebar('footer-2')) { ?>
		<div class="col-lg-3 col-md-6">
      <?php dynamic_sidebar( 'footer-2' ); ?>
    </div>
	<?php }
	if (is_active_sidebar('footer-3')) { ?>
		<div class="col-lg-3 col-md-6">
      <?php dynamic_sidebar( 'footer-3' ); ?>
    </div>
	<?php }
	if (is_active_sidebar('footer-4')) { ?>
		<div class="col-lg-3 col-md-6">
      <?php dynamic_sidebar( 'footer-4' ); ?>
    </div>
	<?php } ?>
</div>
<!-- Footer Widgets -->