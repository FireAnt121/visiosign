<?php
/**
* Template Name: Info Page
* Template Post Type: page
*
* @package VisioSign
*/

get_header();

    //building solution template
?>
        <div class="position-relative" id="info-page">
            <?php get_template_part('includes/section','topHeader')?>
            <?php get_template_part('includes/section','backline'); ?>
            <?php get_template_part('includes/section','hip'); ?>
            <?php get_template_part('includes/section','magazine'); ?>
            <?php get_template_part('includes/section','magazineRev'); ?>
            <?php get_template_part('includes/section','magazine'); ?>
            <?php get_template_part('includes/section','fem'); ?>
            <?php get_template_part('includes/section','vision'); ?>
            <?php get_template_part('includes/section','ctaB'); ?>

        </div>
<?php

get_footer();
?>