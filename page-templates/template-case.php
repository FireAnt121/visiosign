<?php
/**
* Template Name: Case Page
* Template Post Type: page
*
* @package VisioSign
*/

get_header();

    //building solution template
?>
        <div class="position-relative" id="case-page">
            <?php get_template_part('includes/section','hero'); ?>
            <?php get_template_part('includes/section','newsRow'); ?>
            <?php get_template_part('includes/section','testimon'); ?>
            <?php get_template_part('includes/section','reference'); ?>
        </div>
<?php

get_footer();
?>