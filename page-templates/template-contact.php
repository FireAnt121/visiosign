<?php
/**
* Template Name: Contact Page
* Template Post Type: page
*
* @package VisioSign
*/

get_header();

    //building solution template
    $id = get_the_ID();
?>
        <div class="position-relative" id="contact-page">
            <section class="contact-form position-relative" style="background:url(<?php echo esc_url(get_post_meta($id, "meta-box-contact-image-".$id,true));?>);">
                <div class="overlay-v"></div>
                <div class="wrapper">
                    <h2 class="display-6 l-10 fg-brown position-relative">
                        <?php echo esc_html(get_post_meta($id, "meta-box-contact-title-".$id,true));?>
                        <span class="fg-white display-4"><?php echo esc_html(get_post_meta($id, "meta-box-contact-subtitle-".$id,true));?></span>
                    </h2>
                    <div class="row">
                        <div class="col-md-6 content">
                            <DIV class="row f-content">
                                <div class="col-md-6 iconss">
                                    <img src="img/priser/phone.png">
                                </div>
                                <div class="col-md-6 icon-desc">
                                    <h3 class="display-4"><?php echo esc_html(get_post_meta($id, "meta-box-contact-ctitle-".$id,true));?></h3>
                                    <h4 class="display-14">+45 3963 3906</h4>
                                    <p class="work-sans display-10"><?php echo esc_html(get_post_meta($id, "meta-box-contact-ttitle-".$id,true));?></p>
                                </div>
                            </DIV>
                            <div class="row grid-contain">
                                <?php for ($i = 0; $i < 3; $i++ ): ?>
                                    <div class="grid-item">
                                        <a href="<?php echo get_the_permalink(esc_html(get_post_meta($id, "meta-box-contact-item-link".$i."-".$id,true)));?>">
                                        <h3 class="display-4 fg-white"><?php echo esc_html(get_post_meta($id, "meta-box-contact-item-title".$i."-".$id,true));?></h3>
                                        <?php if(!esc_url(get_post_meta($id, "meta-box-contact-item-image".$i."-".$id,true))): ?>
                                            <span><i class="far fa-comment-alt"></i></span>
                                        <?php else: ?>
                                            <img src="<?php echo esc_html(get_post_meta($id, "meta-box-contact-item-image".$i."-".$id,true));?>"></a>
                                        <?php endif; ?>
                                        </a>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
<?php

get_footer();
?>