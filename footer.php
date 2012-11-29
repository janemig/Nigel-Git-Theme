	<!-- Footer -->
	<footer>
		
		<!-- Copyright -->
		<p class="copyright">
			&copy; <?php echo date("Y"); ?> Copyright <?php bloginfo('name'); ?>.
		</p>
		<!-- /Copyright --> 
			
			<ul><?php wp_nav_menu( array( 'menu'  => 'Footer Nav') ); ?></ul> 
		
		
	</footer>
	<!-- /Footer -->
	
	</div>
	<!-- /Wrapper -->
	
	<script type="text/javascript">
	Shadowbox.init();
	</script>
	
	<?php wp_footer(); ?>
	
</body>
</html>