<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
?>
<section id="service-page" style="order:<?php echo $order; ?>">
<div class="magazine" id="sec2">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-6 left">
                        <img src="<?php echo esc_attr( get_post_meta( $id, 'meta-box-magazine-image-'.$id.$j, true ) ); ?>" alt="">
                        <img src="<?php echo esc_attr( get_post_meta( $id, 'meta-box-magazine-image2-'.$id.$j, true ) ); ?>" alt="">
                    </div>
                    <div class="col-md-6 right">
                        <div class="mag-wrap ml-auto">
                            <h1 class="display-6"><?php echo get_post_meta($id, 'meta-box-magazine-title-'.$id.$j, true); ?></h1>
                            <h4 class="display-4"><?php echo get_post_meta($id, 'meta-box-magazine-content-'.$id.$j, true); ?></h4>
                            <div class="row bot">
                                <div class="wrap wr-cols">
                                    <?php for($i = 0; $i < 4; $i++) {?>
                                        <?php if(get_post_meta($id, 'meta-box-magazine-title-'.$id.$j.$i, true) != null || get_post_meta($id, 'meta-box-magazine-content-'.$id.$j.$i, true) != null): ?>
                                    <div class="block">
                                        <h5 class="my-accordion display-1 l-10"><?php echo get_post_meta($id, 'meta-box-magazine-title-'.$id.$j.$i, true); ?><span class="close">+</span></h5>
                                        <div class="links">
                                            <p class="display-2 work-sans l-10"><?php echo get_post_meta($id, 'meta-box-magazine-content-'.$id.$j.$i, true); ?></p>
                                    </div>
                                    </div>
                                        <?php endif; } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
