<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
?>
<section id="service-page" style="order:<?php echo $order; ?>">
    <div class="page-50">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-6 page-pic">
                        <img src="<?php echo esc_attr( get_post_meta( $id, 'meta-box-page50-image-'.$id.$j, true ) ); ?>" alt="">
                    </div>
                    <div class="col-md-6 page-desc">
                        <ul>
                        <?php for($i = 1; $i < 7; $i++) { ?>
                            <li>
                                <span class="img-wrapper">
                                    <img src="<?php echo esc_attr( get_post_meta( $id, 'meta-box-page50-image-'.$id.$j.$i, true ) ); ?>" alt="">
                                </span>
                                <div class="display-2 work-sans"><a href="#sec<?php echo $i; ?>" ><?php echo get_post_meta( $id, 'meta-box-page50-title-'.$id.$j.$i, true ); ?></a></div>
                            </li>
                        <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </section>
