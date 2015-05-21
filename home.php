home.php

<?php
get_header();
?>
    
<!-- everything above here will be on all  the pages of the site -->
<!-- the loop --> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_title(); the_content(); ?>
    <?php endwhile; else : ?>
    <p>
        <?php _e( 'Sorry, no content for this url.' ); ?>
    </p>
    <?php endif; ?>


<!-- everything below here will be on all the pages of the site -->

<?php
get_footer();
?>