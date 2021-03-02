
<?php 
    $order = $mystery['order'];
    $template =$mystery['template'];
?>
<section id="solution-page"  style="order:<?php echo $order; ?>">
<div class="hero">
            <div class="wrapper">
                <?php if(!$template): 
                        $j = $mystery['i'];?>
                <h1 class="display-6 fr-mobile-page-header"><?php echo get_post_meta( $id, 'meta-box-hero-title-'.$id.$j, true );?></h1>
                <?php 
                if(get_post_meta($id, 'meta-box-hero-content-'.$id.$j, true )) { 
                    echo get_post_meta( $id, 'meta-box-hero-content-'.$id.$j, true ); } ?>
                <?php else: ?>
                <h1 class="display-6"><?php echo get_the_title();?></h1>
                <?php endif; ?>
            </div>
            </div>
</section>
