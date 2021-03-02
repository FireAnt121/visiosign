<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
?>
<section id="aboutus-page"  style="order:<?php echo $order; ?>">
<div class="tal">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-6 prices">
                    <?php for($i = 0; $i <4; $i++){?>
                        <div>
                            <h3 class="fg-brown l-10"><?php echo  get_post_meta($id, "meta-box-tal-number-".$id.$j.$i,true); ?></h3>
                            <div class="display-10 work-sans l-10">
                            <?php echo  get_post_meta($id, "meta-box-tal-title-".$id.$j.$i,true); ?>
                            <img src="<?php echo esc_url(get_post_meta($id, "meta-box-tal-image-".$id.$j.$i,true)); ?>">
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                    <dic class="col-md-6 info">
                        <h1 class="display-6"><?php echo  get_post_meta($id, "meta-box-tal-title-".$id.$j,true); ?></h1>
                        <p class="display-2 work-sans l-10"><?php echo  get_post_meta($id, "meta-box-tal-content-".$id.$j,true); ?></p>
                    </dic>
                </div>
            </div>
            </div>
        </section>