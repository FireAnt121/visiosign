<?php
/**
* Template Name: News Page
* Template Post Type: page
*
* @package VisioSign
*/

get_header();

    //building solution template
?>
    <?php           
        $id = get_the_ID();
        $ptype = get_post_type(); 
        $arr = ['ptype' => $ptype , 'order' => 1 , 'template' => true];
        set_query_var( 'mystery', $arr );?>
        <div class="position-relative" id="case-page">
            <?php get_template_part('includes/section','hero')?>
            <?php get_template_part('includes/section','newsRow'); ?>
        </div>
<?php

get_footer();
?>