<?php
/**
* Template Name: Support Page
* Template Post Type: page
*
* @package VisioSign
*/

get_header();

    //building solution template
?>
        <div class="position-relative" id="support-page">
            <?php get_template_part('includes/section','hero'); ?>
            <?php get_template_part('includes/section','heroImage'); ?>
            <?php get_template_part('includes/section','call'); ?>            
            <?php get_template_part('includes/section','twoSecTwo'); ?>
            <?php get_template_part('includes/section','accord'); ?>
        </div>
<?php

get_footer();
?>