<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
?>
<section id="service-page"  style="order:<?php echo $order; ?>">
    <div class="blog-list">
            <div class="wrapper">
                <?php for( $i =0 ; $i < 4; $i ++) {?>
                    <div class="row" id="sec<?php echo ($i + 3); ?>">
                        <div class="col-md-6 desc-wrap">
                            <div class="blog-desc mx-auto">
                                <h1 class="display-6 l-10"><?php echo get_post_meta($id, 'meta-box-blogList-title-'.$id.$j.$i, true); ?></h1>
                                <p class="display-2 work-sans l-10"><?php echo get_post_meta($id, 'meta-box-blogList-content-'.$id.$j.$i, true); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6 blog-img">
                            <img src="<?php echo esc_attr( get_post_meta( $id, 'meta-box-blogList-image-'.$id.$j.$i, true ) ); ?>" alt="">
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
