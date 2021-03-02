<?php 
    $i = $mystery['i'];
    $order = $mystery['order'];
?>
        <section id="home" style="order:<?php echo $order; ?>">
        <div class="cloud">
            <div class="big-wrapper" style="background:url(<?php echo esc_attr( get_post_meta( $id, 'meta-box-cloud-image-'.$id.$i, true ) ); ?>);background-size: cover;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="overlay-v-green"></div>
                        <div class="position-relative"><?php echo get_post_meta( $id, 'meta-box-cloud-title-'.$id.$i, true ); ?></div>
                        <div class="display-4 m-65 position-relative text-white"><?php echo get_post_meta( $id, 'meta-box-cloud-content-'.$id.$i, true ); ?>
</div>
                        <?php button_customize_set($id,$i,'cloud','meta-box-cloud-link-','meta-box-cloud-Btext-',2);?>

                    </div>
                    <div class="col-md-6">
        
                    </div>
                </div>
            </div>
            </div>
        </section>