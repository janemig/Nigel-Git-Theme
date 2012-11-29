<?php get_header(); ?>
	
	<!-- Section -->
	<section>
		
		<p>archive-gallery.php</p>
	
		<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>
	
		<?php get_template_part('loop'); ?>
		
		<?php echo do_shortcode("[gallery]"); ?>
		<!-- Pagination -->
		<div id="pagination">
			<?php html5wp_pagination(); ?>
		</div>
		<!-- /Pagination -->
	
	</section>
	<!-- /Section -->
	
<?php get_sidebar(); ?>


<?php get_footer(); ?>

