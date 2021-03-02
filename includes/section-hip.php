<?php 
    $i = $mystery['i'];
    $order = $mystery['order'];
?>
        <section id="home" style="order:<?php echo $order; ?>">
        <div class="hip" style="background:<?php echo get_post_meta( $id,'meta-box-hip-bgcolor-'.$id.$i, true );?>" >    
            <?php echo get_post_meta( $id,'meta-box-hip-title-'.$id.$i, true ); ?>
            <img src="<?php echo esc_attr( get_post_meta( $id, 'meta-box-hip-image-'.$id.$i, true ) ); ?>">
            <?php echo (get_post_meta( $id,'meta-box-hip-title2-'.$id.$i, true ) != ' ') ? get_post_meta( $id,'meta-box-hip-title2-'.$id.$i, true ) : ' '; ?>
        </div>
        </section>
