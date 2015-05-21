<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        <?php bloginfo( 'name'); ?>::
        <?php bloginfo( 'description'); ?>
    </title>
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
   <?php
wp_list_pages();
?>