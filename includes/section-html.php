<?php 
    $i = $mystery['i'];
    $order = $mystery['order'];
?>
        <section id="home" style="order:<?php echo $order; ?>">
        <div class="html">    
            <?php echo get_post_meta( $id,'meta-box-html-title-'.$id.$i, true ); ?>
         </div>
        </section>
