<?php get_header(); ?>
	
	<!-- Section -->
	<section>
		
		 <h6>archive-friends.php</h6>
		
		<h1><?php _e( 'Friends', 'html5blank' ); ?></h1>
	
		<?php get_template_part('loop'); ?>
		
		<!-- Pagination -->
		<div id="pagination">
			<?php html5wp_pagination(); ?>
		</div>
		<!-- /Pagination -->
	
	</section>
	<!-- /Section -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>