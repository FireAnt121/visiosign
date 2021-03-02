<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
?>
<section id="info-page"  style="order:<?php echo $order; ?>">
<div class="top-header">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-7 left">
                        <h1 class="display-6 fg-white"><?php echo  get_post_meta($id, "meta-box-bigHeader-title-".$id.$j,true);?></h1>
                        <p class="display-9 fg-white"><?php echo  get_post_meta($id, "meta-box-bigHeader-content-".$id.$j,true);?></p>
                        <?php 
                        button_customize_set($id,$j,'bigHeader','meta-box-bigHeader-Blink-','meta-box-bigHeader-Btext-',0,0,'meta-box-bigHeader-Blink-anchor-');?>
                        <!-- <button class="button-vi bg-brown fg-white">Bestil VisioSign løsning</button> -->
                        <?php button_customize_set($id,$j,'bigHeader','meta-box-bigHeader-Blink1-','meta-box-bigHeader-Btext1-',0,1,'meta-box-bigHeader-Blink1-anchor-');?>
                    </div>
                    <div class="col-md-5 right">
                        <img src="<?php echo get_post_meta($id, "meta-box-bigHeader-image-".$id.$j,true);?>" alt="">
                    </div>
                </div>
            </div>
            </div>
        </section>