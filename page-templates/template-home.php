
<?php
/**
* Template Name: Front Page
* Template Post Type: page
*
* @package VisioSign
*/

get_header();

    //building solution template
?>

<div class="position-relative" id="home">

        <?php get_template_part('includes/section','carousel'); ?>
        <?php get_template_part('includes/section','features'); ?>
        <?php get_template_part('includes/section','ctaB'); ?>
        <?php get_template_part('includes/section','umbrella'); ?>
        <?php get_template_part('includes/section','cloud'); ?>
        <?php get_template_part('includes/section','cta'); ?>
        <?php get_template_part('includes/section','nyhed'); ?>
        <?php get_template_part('includes/section','vision'); ?>
        <?php get_template_part('includes/section','hip'); ?>
        <?php get_template_part('includes/section','kunde'); ?>
        <?php get_template_part('includes/section','ctaS'); ?>
        <?php get_template_part('includes/section','reference'); ?>

</div>
<?php get_footer(); ?>