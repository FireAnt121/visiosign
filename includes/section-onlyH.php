
<?php 
    $i = $mystery['i'];
    $order = $mystery['order'];
?>

<section id="service-page" style="order:<?php echo $order; ?>">
<div class="only-header" style="background:url(<?php echo esc_attr( get_post_meta( $id, 'meta-box-onlyH-image-'.$id.$i, true ) ); ?>);background-size: cover;">
            <div class="overlay-v-brown">
        
            </div>
            <div class="wrapper">
                <h1 class="display-6 fr-mobile-page-header"><?php echo get_post_meta( $id, 'meta-box-onlyH-title-'.$id.$i, true ); ?></h1>
                <?php echo get_post_meta( $id, 'meta-box-onlyH-content-'.$id.$i, true ); ?>
                
                </div>
        </div>
</section>