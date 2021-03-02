<?php
/**
* Template Name: Service Page
* Template Post Type: page
*
* @package VisioSign
*/

get_header();

    //building solution template
?>
        <div class="position-relative" id="service-page">
            <?php get_template_part('includes/section','onlyH'); ?>
            <?php get_template_part('includes/section','page50'); ?>
            <?php get_template_part('includes/section','gridInfo'); ?>
            <?php get_template_part('includes/section','magazine'); ?>
            <?php get_template_part('includes/section','blogList'); ?>
            <?php get_template_part('includes/section','ctaB'); ?>
        </div>
<?php

get_footer();
?>