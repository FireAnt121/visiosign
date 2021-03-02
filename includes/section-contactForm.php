<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
    $design = get_post_meta($id,"meta-box-contactForm-design-".$id.$j,true);
?>
<?php if($design == "design1"){ ?>
<section id="priser-page"  style="order:<?php echo $order; ?>">
    <div class="contact-form position-relative" style="background:url(<?php echo esc_url(get_post_meta($id,"meta-box-contactForm-image-".$id.$j,true)); ?>);">
            <div class="overlay-v"></div>
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-6 content">
                        <h2 class="display-6 l-10 fg-brown">
                            <?php echo get_post_meta($id,"meta-box-contactForm-title-".$id.$j,true);?>
                        </h2>
                        <DIV class="row">
                            <div class="col-md-6 iconss">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/priser/phone.png">
                            </div>
                            <div class="col-md-6 icon-desc">
                                <h3 class="display-4"><?php echo get_post_meta($id,"meta-box-contactForm-content-".$id.$j,true); ?></h3>
                            </div>
                        </DIV>
                    </div>
                    <div class="col-md-6 forms" >
                        <h2 class="display-6 l-10 fg-brown bs-main">
                        <?php echo get_post_meta($id,"meta-box-contactForm-formtitle-".$id.$j,true); ?>
                        </h2>

                        <div class="bs-callout bs-callout-info hidden">
                            <h2 class="display-6 l-10 fg-brown form-titles">Success!</h2>
                          </div>
                          <?php 
                              echo do_shortcode(get_post_meta($id,"meta-box-contactForm-shortcode-".$id.$j,true));  ?>
                    </div>
                </div>
            </div>
    </div>
</section>
<?php } elseif($design == "design2") { ?>
<section class="position-relative" id="contact-page" style="order:<?php echo $order; ?>">
            <div class="contact-form position-relative" style="background:url(<?php echo esc_url(get_post_meta($id, "meta-box-contactForm-image-".$id.$j,true));?>);">
                <div class="overlay-v"></div>
                <div class="wrapper">
                    <h2 class="display-6 l-10 fg-brown position-relative">
                        <?php echo strip_tags(get_post_meta($id, "meta-box-contactForm-title-".$id.$j,true));?>
                        <?php echo get_post_meta($id, "meta-box-contactForm-subtitle-".$id.$j,true);?>
                    </h2>
                    <div class="row">
                        <div class="col-md-6 content">
                            <DIV class="row f-content">
                                <div class="col-md-6 iconss">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/priser/phone.png">
                                </div>
                                <div class="col-md-6 icon-desc">
                                    <?php echo get_post_meta($id, "meta-box-contactForm-content-".$id.$j,true);?>
                                </div>
                            </DIV>
                            <div class="row grid-contain">
                                <?php for ($i = 0; $i < 3; $i++ ): ?>
                                    <div class="grid-item">
                                        <a href="<?php echo get_the_permalink(esc_html(get_post_meta($id, "meta-box-contactForm-link-".$id.$j.$i,true)));?>">
                                        <h3 class="display-4 fg-white"><?php echo esc_html(get_post_meta($id, "meta-box-contactForm-title-".$id.$j.$i,true));?></h3>
                                        <?php if(!esc_url(get_post_meta($id, "meta-box-contact-item-image".$i."-".$id,true))): ?>
                                            <span><i class="far fa-comment-alt"></i></span>
                                        <?php else: ?>
                                            <img src="<?php echo esc_html(get_post_meta($id, "meta-box-contactForm-image-".$id.$j.$i,true));?>"></a>
                                        <?php endif; ?>
                                        </a>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>

<?php } else{ ?>
    <section class="position-relative" id="contactB-page" style="order:<?php echo $order; ?>">
        <div class="contact-form position-relative" style="background:url(<?php echo esc_url(get_post_meta($id, "meta-box-contactForm-image-".$id.$j,true));?>);">
            <div class="overlay-v"></div>
            <div class="wrapper">
                <div class="row fire-late-header">
                    <div class="col-md-6 forms">
                        <h2 class="display-6 l-10 fg-brown bs-main form-tap">
                            <?php echo get_post_meta($id,"meta-box-contactForm-formtitle-".$id.$j,true); ?>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 content">
        
                        <div class="row">
                            <div class="col-md-6 iconss">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/priser/phone.png">

                            </div>
                            <div class="col-md-6 icon-desc">
                            <?php echo get_post_meta($id, "meta-box-contactForm-content-".$id.$j,true);?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 forms">
                        <div class="bs-callout bs-callout-info hidden">
                            <h2 class="display-6 l-10 fg-brown form-titles">Sucess!</h2>
                          </div>
                        <h3 class="display-1 fg-white">Få tilsendt fores flotte katalog med masse af inspiration</h3>
                        <p class="work-sans display-2 fg-white">Vi sender dig ikke spam eller 
                            markedsførings emails.</p>
                            <?php 
                              echo do_shortcode(get_post_meta($id,"meta-box-contactForm-shortcode-".$id.$j,true));  ?></div>
                </div>
            </div>
 
    </div>
    </section>
<?php } ?>
