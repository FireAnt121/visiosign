<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];

?>
<section id="cloud-page"  style="order:<?php echo $order; ?>">
    <?php if($order == 1):?>
        <div class="hero">
            <div class="wrapper">
                <h1 class="display-6"><?php echo get_the_title();?></h1>
            </div>
            </div>
    <?php endif;?>
        <div class="click-on" style="background:url(<?php echo esc_url(get_post_meta($id,"meta-box-clicker-image-".$id.$j,true)); ?>);background-size:100%;">

            <?php 
            if(get_post_meta($id,"meta-box-clicker-count-".$id,true)):
                $c = esc_html(get_post_meta($id,"meta-box-clicker-count-".$id,true));
            endif;
            for($i = 0; $i < $c; $i++){
                if( get_post_meta($id,"fr-clicker-item-top".$i."-".$id,true) != null &&  get_post_meta($id,"fr-clicker-item-left".$i."-".$id,true) != null){
                    $feature = get_post_meta($id,"fr-clicker-item-marker".$i."-".$id,true);
            ?>
            <div class="clicker c<?php echo $i; ?> <?php echo ($feature == 'true')? ' ' : 'hov' ;?>" style="position:absolute;top:<?php echo get_post_meta($id,"fr-clicker-item-top".$i."-".$id,true); ?>vw;left:<?php echo get_post_meta($id,"fr-clicker-item-left".$i."-".$id,true); ?>vw">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cloud/clicker.png">
                <div class="c-info  <?php echo ($feature == 'true')? 'active' : ' ' ;?>" id="testte" style="<?php echo (get_post_meta($id,"fr-clicker-item-left".$i."-".$id,true) > 70)? "margin-left:-25rem;" : " "; ?>">
                    <img src=" <?php echo (get_post_meta($id,"fr-clicker-item-image".$i."-".$id,true)); ?>">
                    <i class="fas fa-times close-clicker"></i>
                    <div class="mix-max">
                        <h2 class="display-1"><?php echo (get_post_meta($id,"fr-clicker-item-title".$i."-".$id,true)); ?></h2>
                        <h3 class="display-12 fg-brown"><?php echo (get_post_meta($id,"fr-clicker-item-subtitle".$i."-".$id,true)); ?></h3>
                    </div>
                    <div class="for-m"><?php echo (get_post_meta($id,"fr-clicker-item-conten".$i."-".$id,true)); ?></div>
                </div>
            </div>
            <?php }
            } ?>
            </div>
            <div class="grey-part hide-until-9">

            </div> 
        </section>