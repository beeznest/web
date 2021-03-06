<?php
/**
 * Template Name: Landing page template
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php get_template_part( 'header/preloader' ); ?>

    <div class="widget-header">
        <?php

        if (!dynamic_sidebar ('header-page')) {
            dynamic_sidebar ('header-page');
        }

        ?>
    </div>
    <div id="page" class="page">

   <?php get_template_part( 'header/'.PergoHeader::get_navbar_style() ); ?> 
   <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( have_posts() ) : ?>
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
           
           the_content();

            // End the loop.
        endwhile;

        // If no content, include the "No posts found" template.
        else :

        get_template_part( 'template-parts/post/content', 'none' );

    endif;
    ?>
    </div>

    <?php get_template_part( 'footer/onepage', 'footer' ); ?>
    <?php get_template_part( 'footer/quick-form' ); ?>

  </div>  
 
 <?php wp_footer(); ?>

</body>
</html>
