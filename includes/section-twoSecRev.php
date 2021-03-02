<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
    $ptype = $mystery['ptype'];
    $primary = esc_html(get_post_meta( $id, 'primarycolor-splitRev'.$id.$j, true ));
    $primaryborder = esc_html(get_post_meta( $id, 'primarybordercolor-splitRev'.$id.$j, true ));
    $color = esc_html(get_post_meta( $id, 'primarytextcolor-splitRev'.$id.$j, true ));
    $hovercolor = esc_html(get_post_meta( $id, 'hovertextcolor-splitRev'.$id.$j, true ));
    $hover = esc_html(get_post_meta( $id, 'hovercolor-splitRev'.$id.$j, true ));
    $hoverborder = esc_html(get_post_meta( $id, 'hoverbordercolor-splitRev'.$id.$j, true ));
    $transition = esc_html(get_post_meta( $id, 'button-transition-splitRev'.$id.$j, true ));
    $background = esc_html(get_post_meta( $id, 'button-background-splitRev'.$id.$j, true ));
    $primary1 = esc_html(get_post_meta( $id, 'primarycolor-splitRev'.$id.$j.'1', true ));
    $primaryborder1 = esc_html(get_post_meta( $id, 'primarybordercolor-splitRev'.$id.$j.'1', true ));
    $color1 = esc_html(get_post_meta( $id, 'primarytextcolor-splitRev'.$id.$j.'1', true ));
    $hovercolor1 = esc_html(get_post_meta( $id, 'hovertextcolor-splitRev'.$id.$j.'1', true ));
    $hover1 = esc_html(get_post_meta( $id, 'hovercolor-splitRev'.$id.$j.'1', true ));
    $hoverborder1 = esc_html(get_post_meta( $id, 'hoverbordercolor-splitRev'.$id.$j.'1', true ));
    $transition1 = esc_html(get_post_meta( $id, 'button-transition-splitRev'.$id.$j.'1', true ));
    $background1 = esc_html(get_post_meta( $id, 'button-background-splitRev'.$id.$j.'1', true ));
    $design = get_post_meta($id,'meta-box-splitRev-design-'.$id.$j,true);
    if($design == "design1")
        $ied = "aboutus-page";
    elseif($design == "design2")
        $ied = "case-large-page";
    else
        $ied = "case-small-page";
?>
<section id="<?php echo $ied; ?>" style="order:<?php echo $order; ?>">
<div class="two-sec-rev">
            <div class="wrapper">
                <div class="row">
                    <?php if($design == "design1"): ?>
                    <div class="col-md-6 page-pic">
                        <img src="<?php echo   get_post_meta( $id, 'meta-box-splitRev-image-'.$id.$j, true ) ; ?>">
                    </div>
                    <div class="col-md-6 page-desc">
                        <div class="mag-wrap">
                                <?php if(!$terms){ ?>
                                <h1 class="display-6"><span class="fg-brown"><?php echo  get_post_meta( $id, 'meta-box-splitRev-title-'.$id.$j, true ); ?></span></h1>

                                <?php echo  get_post_meta( $id, 'meta-box-splitRev-content-'.$id.$j, true ); ?>
                                <a 
                        href="<?php echo get_post_permalink(get_post_meta( $id, 'meta-box-splitRev-Blink-'.$id.$j, true )); ?>" 
                        class="fr-button-link-global" 
                        style=" background:<?php echo ($background == "no")? 'transparent' : $primary; ?> !important;
                                border-color:<?php echo $primaryborder; ?> !important;
                                color:<?php echo $color; ?> !important;" 
                        onMouseOver="this.style.backgroundColor='<?php echo ($background == "no")? 'transparent' : $hover; ?> ';
                                     this.style.borderColor='<?php echo $hoverborder; ?>';
                                     <?php if($transition == "no"){  echo "this.style.padding='0.9375rem 6.75rem 0.9375rem 1.25rem';";} ?>
                                     this.style.color='<?php echo $hovercolor; ?>';
                                     this.children[1].style.fill='<?php echo $hovercolor; ?>'" 
                        onMouseOut="this.style.backgroundColor='<?php echo ($background == "no")? 'transparent' : $primary; ?> ';
                                    this.style.borderColor='<?php echo $primaryborder; ?>';
                                    this.style.color='<?php echo $color; ?>';
                                    this.children[1].style.fill='<?php echo $color; ?>'">
                        <div><?php echo  get_post_meta( $id, 'meta-box-splitRev-Btext-'.$id.$j, true ); ?></div>
                        <svg xmlns="http://www.w3.org/2000/svg" style="fill:<?php echo $color; ?>;" viewBox="0 0 122.53 43.64"><title>arr</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M122.45,22.61l-.09.29a3.31,3.31,0,0,1-.12.42,3.06,3.06,0,0,1-.23.45l-.13.26a4.31,4.31,0,0,1-.49.62l-17,17.81a3.76,3.76,0,0,1-2.71,1.18A3.72,3.72,0,0,1,99,42.46a4.14,4.14,0,0,1,0-5.66l10.47-11H4A3.89,3.89,0,0,1,.21,23.16a4,4,0,0,1,3.61-5.35H109.45L99,6.84a4.16,4.16,0,0,1-.29-5.33v0L99,1.16a3.7,3.7,0,0,1,5.41,0l17,17.81a3.51,3.51,0,0,1,.48.6l.15.28c.07.11.13.25.19.37a3.53,3.53,0,0,1,.15.49,1.2,1.2,0,0,1,.1.51A3.31,3.31,0,0,1,122.45,22.61Z"/></g></g></svg>
                        </a>
                        <a 
                        href="<?php echo get_post_permalink(get_post_meta( $id, 'meta-box-splitRev-Blink1-'.$id.$j, true )); ?>" 
                        class="fr-button-link-global" 
                        style=" background:<?php echo ($background1 == "no")? 'transparent' : $primary1; ?> !important;
                                border-color:<?php echo $primaryborder1; ?> !important;
                                color:<?php echo $color1; ?> !important;" 
                        onMouseOver="this.style.backgroundColor='<?php echo ($background1 == "no")? 'transparent' : $hover1; ?> ';
                                     this.style.borderColor='<?php echo $hoverborder1; ?>';
                                     <?php if($transition1 == "no"){  echo "this.style.padding='0.9375rem 6.75rem 0.9375rem 1.25rem';";} ?>
                                     this.style.color='<?php echo $hovercolor1; ?>';
                                     this.children[1].style.fill='<?php echo $hovercolor1; ?>'" 
                        onMouseOut="this.style.backgroundColor='<?php echo ($background1 == "no")? 'transparent' : $primary1; ?> ';
                                    this.style.borderColor='<?php echo $primaryborder1; ?>';
                                    this.style.color='<?php echo $color1; ?>';
                                    this.children[1].style.fill='<?php echo $color1; ?>'">
                        <div><?php echo  get_post_meta( $id, 'meta-box-splitRev-Btext1-'.$id.$j, true ); ?></div>
                        <svg xmlns="http://www.w3.org/2000/svg" style="fill:<?php echo $color1; ?>;" viewBox="0 0 122.53 43.64"><title>arr</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M122.45,22.61l-.09.29a3.31,3.31,0,0,1-.12.42,3.06,3.06,0,0,1-.23.45l-.13.26a4.31,4.31,0,0,1-.49.62l-17,17.81a3.76,3.76,0,0,1-2.71,1.18A3.72,3.72,0,0,1,99,42.46a4.14,4.14,0,0,1,0-5.66l10.47-11H4A3.89,3.89,0,0,1,.21,23.16a4,4,0,0,1,3.61-5.35H109.45L99,6.84a4.16,4.16,0,0,1-.29-5.33v0L99,1.16a3.7,3.7,0,0,1,5.41,0l17,17.81a3.51,3.51,0,0,1,.48.6l.15.28c.07.11.13.25.19.37a3.53,3.53,0,0,1,.15.49,1.2,1.2,0,0,1,.1.51A3.31,3.31,0,0,1,122.45,22.61Z"/></g></g></svg>
                        </a>
                                <?php }else{ ?>

                                        <?php echo  get_post_meta( $id, 'meta-box-splitRev-content-'.$id.$j, true ); ?>

                                <?php }?>
                        </div>
                    </div>
                    <?php else: ?>
                        <div class="col-md-8 page-pic">
                        <img src="<?php echo   get_post_meta( $id, 'meta-box-splitRev-image-'.$id.$j, true ) ; ?>">
                    </div>
                    <div class="col-md-4 page-desc">
                        <div class="mag-wrap">
                            <?php if($design != "design2"): ?>
                            <h4 class="display-4 l-10"><?php echo  get_post_meta( $id, 'meta-box-splitRev-title-'.$id.$j, true ); ?>
                            <?php endif; ?>      
                                <?php echo  get_post_meta( $id, 'meta-box-splitRev-content-'.$id.$j, true ); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if($design == "design1"){?>
            <div class="back-image">
                <img src="<?php echo  get_post_meta( $id, 'meta-box-splitRev-bImage-'.$id.$j, true ); ?>">
            </div>
            <?php } ?>
            </div>
</section>
