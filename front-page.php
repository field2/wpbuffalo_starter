<?php
get_header(); // this command loads header.php and adds all the code in that file to the top of this file
?>
<!-- everything above here will be on all  the pages of the site -->
<!-- the loop --> 
<?php 
	if ( have_posts() ) : // Check if there is a post to display. 
	while ( have_posts() ) : // There may be more than one post to display. "While" starts the loop, repeating until all post contenthas been displayed.
	the_post(); // Uh, you need this. "Sets up the post", according to wp.org. OK.
?> 
<?php 
	the_title('<h1>','</h1>'); // This command dispays the title of the post
	the_content(); // This command displays the content of the post
?>
<?php 
	endwhile; // Stop looping, because all the posts that were found with have_posts() have been displayed
	else : // Maybe there aren't any posts? What if have_posts() didn't find anything? Don't leave your audience hanging. Note: you'll likely not see the next part unless you're using the loop in a conditional environment, e.g., search results.
?>
	<p>Nothing to see here, folks.</p>
<?php 
	endif; // All done, but we have to tell WordPress to move on. Otherwise, it thinks the rest of the code should only be displayed if no posts are found.
?>
<!-- everything below here will be on all the pages of the site -->
<?php
get_footer(); // this command loads footer.php and adds all the code in that file to the bottom of this file
?>