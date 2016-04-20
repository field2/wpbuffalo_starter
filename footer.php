</div><!-- /#pagecontent -->
<footer>
	<?php
	wp_nav_menu(array('theme_location'=> 'footer','container'=>'nav')); // This command displays the footer menu. We can manage these links in the WP-Admin>Appearance>Menus.
	?>
	<p>Copyright <?php 
	echo date('Y'); // Show the year. Use php to get the current year so we never have to change this manually.
	?> WPBuffalo. Licensed under GPL2.</p>
</footer><?php // Use php to process the next line of code 
wp_footer(); // This command loads additional resources
?><!-- All done using php -->
</body><!-- All done with the body -->
</html><!-- All done! -->