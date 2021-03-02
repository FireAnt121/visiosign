<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
    $ptype = $mystery['ptype'];
    $design = get_post_meta($id,"meta-box-onlyImg-design-".$id.$j,true);

?>
<section id="case-large-page"  style="order:<?php echo $order; ?>">

    <?php if($design == "design1"):?> 
        <div class="only-img">
    <div class="big-wrapper">
        <img src="<?php echo esc_attr( get_post_meta( $id, 'meta-box-onlyImg-image-'.$id.$j, true ) ); ?>">
    </div>
    </div>
    <?php else: ?>
        <div class="hero-img">
        <img src="<?php echo esc_attr( get_post_meta( $id, 'meta-box-onlyImg-image-'.$id.$j, true ) ); ?>">
        </div>
    <?php endif; ?>

</section>