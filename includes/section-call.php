
<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
?>
<section id="support-page"  style="order:<?php echo $order; ?>">
<div class="call">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-5 left">
                        <h1 class="display-6 l-10"><?php echo get_post_meta($id,"meta-box-call-title-".$id.$j,true);?>
                        </h1>
                        <!-- <h2 class="display-1 l-10 fg-brown"><?php //echo esc_html(get_post_meta($id,"meta-box-fr-call-atitle-".$id,true));?></h2> -->
                        <div class="combo display-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/support/call.png">
                            <span>+45 3915 3321</span>
                        </div>
                        <?php echo get_post_meta($id,"meta-box-call-content-".$id.$j,true);?>
                        <!-- <h2 class="display-1 l-10"><?php //echo esc_html(get_post_meta($id,"meta-box-fr-call-subtitle-".$id,true));?></h2> -->

                    </div>
                    <div class="col-md-9 content">
        
                            <div class="forms" >
                              <h2 class="display-4 form-titles bs-main">
                              <?php echo get_post_meta($id,"meta-box-call-formtitle-".$id.$j,true);?>
                              </h2>
                              <div class="bs-callout bs-callout-info hidden">
                                <h1 class="display-1 fg-brown">Tak for din henvendelse. 
                                  Vores Supportteam vender tilbage hurtigst muligt.</h1>
                                  <a class="fr-button-link-brown-black" href="">Opret ny sag</a>
                                </div>
                                <?php echo do_shortcode(get_post_meta($id,"meta-box-call-shortcode-".$id.$j,true)); ?>
                              <!-- <form id="demo-form" data-parsley-validate="" data-parsley-focus="none">
                                  <div class="row field-col">
                                      <input type="text" class="form-control" placeholder=" " id="f-name" data-parsley-trigger="focusout" required>
                                      <label for="f-name">Navn*</label>
                                  </div>
                                  <div class="row field-col">
                                        <input type="email" class="form-control" placeholder=" " id="f-email" data-parsley-trigger="focusout" required>
                                        <label for="f-email">Email*</label>
                                    </div>
                                    <div class="row field-col">
                                        <input type="text" class="form-control" placeholder=" " id="f-phone" data-parsley-trigger="focusout" required>
                                        <label for="f-phone">Telefon*</label>
                                    </div>
                                    <div class="row field-col">
                                        <input type="text" class="form-control" placeholder=" " id="f-firma" data-parsley-trigger="focusout" required>
                                        <label for="f-firma">Firma*</label>
                                    </div>
                                    <div class="row field-col">
                                        <input type="text" class="form-control" placeholder=" " id="f-dom" data-parsley-trigger="focusout" required>
                                        <label for="f-dom">Domæne*</label>
                                    </div>
                                    <div class="row field-col">
                                      <input type="text" class="form-control" placeholder=" " id="f-emne" data-parsley-trigger="focusout" required>
                                      <label for="f-emne">Emne*</label>
                                  </div>
                                    <div class="row field-col">
                                        <textarea rows="5" class="form-control" placeholder=" " id="f-area" data-parsley-trigger="focusout" ></textarea>
                                        <label for="f-area">Beskrivelse*</label>
                                    </div>
                                  <button type="submit" class="fr-button-link-brown-black">Send</button>
                              </form> -->
                          </div>
                          </div>
                    </div>
                </div>
            </div>
        
        </section>