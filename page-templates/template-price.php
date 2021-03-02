<?php
/**
* Template Name: Price Page
* Template Post Type: page
*
* @package VisioSign
*/

get_header();

    //building solution template
?>
        <div class="position-relative" id="priser-page">
            <?php get_template_part('includes/section','hero'); ?>
            <?php get_template_part('includes/section','infoPriser'); ?>
            <?php get_template_part('includes/section','contactForm');?>
        </div>
<?php

get_footer();
?>