<!-- home.php
This page loads when you change the "Posts page" settings in Settings>Reading
If you're using WordPress primarily as a CMS, consider creating a blog page in Pages>Add page and choosing it here.
For some reason, this template file is what WP loads when you choose a static page for your blog posts. -->
<?php // Use php to process the next line of code
get_header(); // this command loads header.php and adds all the code in that file to the top of this file
?><!--  All done using php for now -->
<!-- everything above here will be on all  the pages of the site -->
<!-- the loop -->
<div id="main"><!-- create the main content div -->
<?php // Use php to process the next line of code 
	if ( have_posts() ) : // Check if there is a post to display. 
	while ( have_posts() ) : // There may be more than one post to display. "While" starts the loop, repeating until all post contenthas been displayed.
	the_post(); // Uh, you need this. "Sets up the post", according to wp.org. OK.
?><!--  All done using php for now --> 
<?php // Use php to process the next line of code 
	the_title('<h2>','</h2>'); // This command dispays the title of the post
	the_date(); 
	the_excerpt();
?><!--  All done using php for now -->
<a href="<?php echo get_permalink(); ?>"><!-- display a link to the full, single blog post -->
Read More...</a><!-- the text that links to the full, single blog post -->
<hr><!-- display a horizontal line to seperate the posts -->
<?php // Use php to process the next line of code 
	endwhile; // Stop looping, because all the posts that were found with have_posts() have been displayed
	else : // Maybe there aren't any posts? What if have_posts() didn't find anything? Don't leave your audience hanging. Note: you'll likely not see the next part unless you're using the loop in a conditional environment, e.g., search results.
?><!--  All done using php for now -->
	<p>Nothing to see here, folks.</p><!-- Show this message if there's nothing to display. -->
<?php // Use php to process the next line of code 
	endif; // All done, but we have to tell WordPress to move on. Otherwise, it thinks the rest of the code should only be displayed if no posts are found.
?><!--  All done using php for now -->
</div><!-- /#main -->
<div id="sidebar"><!-- create the sidebar widgets div -->
	<?php dynamic_sidebar('widgets'); ?>
</div><!-- /#sidebar -->
<!-- everything below here will be on all the pages of the site -->
<?php // Use php to process the next line of code
get_footer(); // this command loads footer.php and adds all the code in that file to the bottom of this file
?><!--  All done using php for now