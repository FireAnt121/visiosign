<?php
/**
* Template Name: Blackline Page
* Template Post Type: page
*
* @package VisioSign
*/

get_header();

    //building solution template
?>
        <div class="position-relative" id="backline-page">
            <?php get_template_part('includes/section','smallHero'); ?>
            <?php get_template_part('includes/section','listGrids'); ?>
            <?php get_template_part('includes/section','gridInfoB'); ?>
            <?php get_template_part('includes/section','listGrids'); ?>
            <?php get_template_part('includes/section','gridInfoBot'); ?>
        </div>
<?php

get_footer();
?>

