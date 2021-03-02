<?php $i = $mystery['i'];
    $order = $mystery['order'];
    $ptype = $mystery['ptype'];
    $design = esc_html(get_post_meta($id,"meta-box-infoPriser-design-".$id.$i,true));
    $ptop = esc_html(get_post_meta($id,"meta-box-infoPriser-ptop-".$id.$i,true));
    $pbot = esc_html(get_post_meta($id,"meta-box-infoPriser-pbot-".$id.$i,true));
     ?>

<section id="<?php echo ($ptype == "page")? 'priser-page' : 'news-main-page'; ?>" style="order:<?php echo $order; ?>" >
<div class="info-priser" style="padding-top:<?php echo $ptop; ?>rem !important; padding-bottom:<?php echo $pbot; ?>rem !important;">
            <div class="wrapper">
                <div class="row">
                    <?php if($design == "design2"): ?>
                        <div class="col-md-6 pic c-rev">
                        <img src="<?php echo get_post_meta($id,"meta-box-infoPriser-image-".$id.$i,true); ?>">
                    </div>
                        <div class="col-md-6 <?php echo ($ptype == "page")? ' ' : 'l-10 cont'; ?> rev-c">
                        <?php if(get_post_meta($id,"meta-box-infoPriser-title-".$id.$i,true) != null ): ?>
                        <h1 class="display-6"><?php echo get_post_meta($id,"meta-box-infoPriser-title-".$id.$i,true);?></h1>
                        <?php endif; ?>
                        <h3 class="display-4"><?php echo get_post_meta($id,"meta-box-infoPriser-content-".$id.$i,true);?></h3>
                    </div>
                    <?php else: ?>
                    <div class="col-md-6 <?php echo ($ptype == "page")? ' ' : 'l-10 cont'; ?>">
                        <?php if(get_post_meta($id,"meta-box-infoPriser-title-".$id.$i,true) != null ): ?>
                        <h1 class="display-6"><?php echo get_post_meta($id,"meta-box-infoPriser-title-".$id.$i,true);?></h1>
                        <?php endif; ?>
                        <h3 class="display-4"><?php echo get_post_meta($id,"meta-box-infoPriser-content-".$id.$i,true);?></h3>
                    </div>
                    <div class="col-md-6 pic">
                        <img src="<?php echo get_post_meta($id,"meta-box-infoPriser-image-".$id.$i,true); ?>">
                    </div>
                        <?php endif; ?>
                </div>
            </div>
    </div>
</section>
