<?php
/**
* Template Name: Contact A Page
* Template Post Type: page
*
* @package VisioSign
*/

get_header();

    //building solution template
?>
        <div class="position-relative" id="contactA-page">
            <?php get_template_part('includes/section','contactForm');?>
        </div>
<?php

get_footer();
?>