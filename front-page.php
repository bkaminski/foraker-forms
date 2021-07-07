<?php get_header(); ?>
<div class="d-block d-md-none pt-5">
	<div class="container pt-5" style="margin-right: 15px;">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="h1 text-white pb-2">How Much is my Home Worth?</h2>
				<p class="text-white small">Please enter the address of your property below.</p>
				<?php echo do_shortcode('[contact-form-7 id="5" title="Step 1"]'); ?>

			</div>
		</div>
	</div>
</div>
<div class="d-none d-md-block">
	<div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
		<h2 class="h1 text-white pb-2">How Much is my Home Worth?</h2>
		<p class="text-white small">Please enter the address of your property below.</p>
			<?php echo do_shortcode('[contact-form-7 id="5" title="Step 1"]'); ?>
			
	</div>
</div>
<?php get_footer(); ?>
