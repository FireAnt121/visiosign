<?php
/**
* Template Name: About Page
* Template Post Type: page
*
* @package VisioSign
*/

get_header();

    //building solution template
?>
        <div class="position-relative" id="aboutus-page">
            <?php get_template_part('includes/section','hero'); ?>
            <?php get_template_part('includes/section','twoSecRev'); ?>
            <?php get_template_part('includes/section','circleSec'); ?>            
            <?php get_template_part('includes/section','tal'); ?>
            <?php get_template_part('includes/section','hip'); ?>
            <?php get_template_part('includes/section','globe'); ?>
            <?php get_template_part('includes/section','ctaB'); ?>
        </div>
<?php

get_footer();
?>