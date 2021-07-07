<?php get_header(); 
/**
 * Template Name: Form Step 2
 *
 * @package WordPress
 * @subpackage Brian Foraker
 * 
 */
?>
<div class="d-block d-md-none pt-5">
    <div class="container text-center pt-5">
        <h2 class="h1 text-white pb-2">We Have Located Your Home! What's Next?</h2>
        <p class="text-white small">We need the following information in order to correctly provide you with an apprasial</p>
        <?php echo do_shortcode('[contact-form-7 id="17" title="Step 2"]'); ?>
    </div>
</div>
<div class="d-none d-md-block">
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
    	<h2 class="h1 text-white pb-2">We Have Located Your Home! What's Next?</h2>
    	<p class="text-white small">We need the following information in order to correctly provide you with an apprasial</p>
    	<?php echo do_shortcode('[contact-form-7 id="17" title="Step 2"]'); ?>
    		
    </div>
</div>
<?php get_footer(); ?>
