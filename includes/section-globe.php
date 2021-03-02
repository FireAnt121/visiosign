<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
?>
<section id="aboutus-page"  style="order:<?php echo $order; ?>">
<div class="globe">
            <div class="c-wrap">
                <h1 class="display-6 l-10"><?php echo  get_post_meta($id,'meta-box-globe-title-'.$id.$j,true); ?></h1>
                <h2 class="display-4"><?php echo get_post_meta($id,'meta-box-globe-content-'.$id.$j,true); ?></h2>
                <?php 
                $count = get_post_meta($id,'meta-box-globe-list-count-'.$id.$j,true);
                for($i = 0; $i < 4; $i++){?>
                <div class="row g-step">
                    <div class="col-md-4">
                        <img src="<?php echo esc_url(get_post_meta($id,'meta-box-globe-image-'.$id.$j.$i,true));?>">
                    </div>
                    <div class="col-md-8">
                        <h3 class="display-4"><?php echo  get_post_meta($id,'meta-box-globe-content-'.$id.$j.$i,true);?></h3>
                    </div>
                </div>
                <?php }?>
            </div>
            </div>
        </section>