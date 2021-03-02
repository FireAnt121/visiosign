
<?php 
$i = $mystery['i'];
$order = $mystery['order'];

?>
        <section id="home" style="order:<?php echo $order; ?>">
        <div class="umbrella">
            <img class="d-image" src="<?php echo esc_attr( get_post_meta( $id, 'meta-box-umbrella-image-'.$id.$i, true ) ); ?>">
            <div class="wrapper">
                <div class="row">
                    <div class="col-sm-12 col-md-6 f-left">
                        <h1 class="display-3"><?php echo get_post_meta( $id, 'meta-box-umbrella-title-'.$id.$i, true ); ?></h1>
                    </div>
                    <div class="col-sm-12 col-md-6 f-right">
        
                        <div>
                            <img src="<?php echo esc_attr( get_post_meta( $id, 'meta-box-umbrella-image2-'.$id.$i, true ) ); ?>">
                        <p></p>
                        <div class="display-2 m-65">
                        <?php echo get_post_meta( $id, 'meta-box-umbrella-content-'.$id.$i, true ); ?>
                        </div>
                        <?php button_customize_set($id,$i,'umbrella','meta-box-umbrella-link-','meta-box-umbrella-Blink-',0,0,'meta-box-umbrella-link-anchor-');?>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
