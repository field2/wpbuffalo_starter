<!-- header.php 
This file gets loaded by the command get_header(); and we see that on every page file, so front-page.php, page.php, archive.php are all loading this file. Whatever we put here will become part of those files. -->
<!DOCTYPE html><!-- Let the world know this is an html file -->
<html lang="en"><!-- Let the world know this site is in English -->
<head><!-- The "brains" of the site; this element contains identifying info, loads scripts, and more stuff that you can't see. -->
	<meta charset="UTF-8"><!-- The site uses the UTF-8 character set. -->
	<meta name="viewport" content="width=device-width, initial-scale=1"><!-- enable touch zooming and ensure proper rendering on mobile devices -->
	<!-- The title tag appears in your browser's tab, or in the user's history, or in a bookmark. It doesn't appear on the page. -->
	<title>
		<?php 
			wp_title();
		?>
	</title>
	<!-- All done displaying the title of the page -->
	<link href="<!-- Link to style.css, the external stylesheet that will contain all the style and formatting rules for our site -->
		<?php  // Use php to process the next line of code
			echo get_stylesheet_uri(); // This command writes out an absolute link to style.css. We could hard-code it by actually typing out the url, but it would break if we moved our site to a different server.
		?><!--  All done using php for now -->
		" rel="stylesheet"><!-- All done loading the stylesheet -->
	<?php // Use php to process the next line of code
		wp_head(); // This command loads additional resources
	?><!-- All done using php for now -->
</head><!-- All done with the head -->
<body <?php body_class(); ?><!-- The "body" of the site; this element contains everything you can see. -->
<header>
	<h1><?php 
	bloginfo('name'); //Displays the site title you chose when you created your site. Can be changed in Settings>General
	 ?></h1>
</header>
<?php // Use php to process the next line of code
	wp_nav_menu(array('theme_location'=> 'primary', 'container'=>'nav')); // This command displays the primary menu. We can manage these links in the WP-Admin>Appearance>Menus.
?><!-- All done using php for now -->
<div id="pagecontent"><!-- All the page's unique content goes below here -->