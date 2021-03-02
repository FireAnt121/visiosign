<?php
/**
* Template Name: Solution Page
* Template Post Type: page
*
* @package VisioSign
*/

get_header();

    //building solution template
?>
        <div class="position-relative" id="solution-page">
            <?php get_template_part('includes/section','hero'); ?>
            <?php get_template_part('includes/section','features'); ?>
            <?php get_template_part('includes/section','inspire'); ?>
            <?php get_template_part('includes/section','cloud'); ?>
            <?php get_template_part('includes/section','ctaB'); ?>
        </div>
<?php

get_footer();
?>