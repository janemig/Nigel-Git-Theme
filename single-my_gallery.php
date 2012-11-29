<!-- Template: Single My Gallery -->


<?php get_header(); ?>
	
	<!-- Section -->
	<section>
		
		<h1>single-my_gallery.php</h1>
		
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- Article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php the_meta(); ?>
			
				<!-- Post Title -->
				<h1>
					<?php the_title(); ?>
				</h1>
				<!-- /Post Title -->
		
			<!-- Post Thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			
			<?php endif; ?>
			<!-- /Post Thumbnail -->
			
			<!-- Jane added this in --> 
			<?php echo do_shortcode("[gallery]"); ?>
			<!-- end Jane add -->
			
			<!-- Post Details -->
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			<!-- /Post Details -->
			
			<?php the_content(); // Dynamic Content ?>
			
			<br class="clear">
			
			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
			
			<h6><?php _e( 'Categorized in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></h6>
			
	
	<!-- Jane edited this out -->	
	<!-- <p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p> -->
			
	
	<!-- Jane edited this out -->	
	<!--  <?php edit_post_link(); ?>  -->	
		
			
			<?php comments_template(); ?>
			
		</article>
		<!-- /Article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- Article -->
		<article>
			
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			
		</article>
		<!-- /Article -->
	
	<?php endif; ?>
	
	</section>
	<!-- /Section -->
	<script type="text/javascript" charset="utf-8">
		Shadowbox.init();
	</script>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>


