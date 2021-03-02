<?php
/**
* Template Name: News Inner Page
* Template Post Type: page
*
* @package VisioSign
*/

get_header();

    //building solution template
?>
        <div class="position-relative" id="news-main-page">
            <?php //get_template_part('includes/section','heroImage')?>
            <?php get_template_part('includes/section','infoPriser'); ?>
            <?php get_template_part('includes/section','ctaB'); ?>      
        </div>
<?php

get_footer();
?>