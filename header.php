<!-- header.php 
This file gets loaded by the command get_header(); and we see that on every page file, so front-page.php, page.php, archive.php are all loading this file. Whatever we put here will become part of those files. -->
<!DOCTYPE html><!-- Let the world know this is an html file -->
<html lang="en"><!-- Let the world know this site is in English -->
<head><!-- The "brains" of the site; this element contains identifying info, loads scripts, and more stuff that you can't see. -->
	<meta charset="UTF-8"><!-- The site uses the UTF-8 character set. -->
	<title><!-- The title tag appears in your browser's tab, or in the user's history, or in a bookmark. It doesn't appear on the page. -->
		<?php // Use php to process the next line of code
			bloginfo('name'); //Displays the name of the site, which is what you create when you added your Site Title
		?><!--  All done using php for now -->
		:: <!-- Just a couple of colons to separate the title and tagline -->
		<?php  // Use php to process the next line of code
			bloginfo('description'); //Displays the tagline of the site, which is what you create when you added your Site Title
		?><!--  All done using php for now -->
	</title><!-- All done displaying the title of the page -->
	<link href="<!-- Link to style.css, the external stylesheet that will contain all the style and formatting rules for our site -->
		<?php  // Use php to process the next line of code
			echo get_stylesheet_uri(); // This command writes out an absolute link to style.css. We could hard-code it by actually typing out the url, but it would break if we moved our site to a different server.
		?><!--  All done using php for now -->
		" rel="stylesheet"><!-- All done loading the stylesheet -->
	<?php // Use php to process the next line of code
		wp_head(); // This command loads additional resources
	?><!-- All done using php for now -->
</head><!-- All done with the head -->
<body><!-- The "body" of the site; this element contains everything you can see. -->
<?php // Use php to process the next line of code
	wp_nav_menu(); // This command creates a list of the pages in our site. We can manage these pages in the WP-Admin>Appearance>Menus.
?><!-- All done using php for now -->