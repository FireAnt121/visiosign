
<?php 
$j = $mystery['i'];
$order = $mystery['order'];
$black = true;
$ptype = $mystery['ptype'];
$design = get_post_meta($id,'meta-box-sHero-design-'.$id.$j,true);
?>
<section id = "<?php echo ($design == 'design1') ? 'backline-page' : 'backline-inner-page';?>" style="order:<?php echo $order; ?>">
        <div class="small-hero" style="background: url(<?php echo get_post_meta( $id, 'meta-box-sHero-image-'.$id.$j, true ); ?>);background-size:100%;background-position:center;">
            <div class="wrapper">
                <div class="row <?php echo ($design == 'design1') ? 'top' : 'text-in';?>">
                    <div class="col-md-6 px-0">
                        <?php if($black):?>
                            <h1 class="display-6 l-10 text-white"><?php echo get_post_meta( $id, 'meta-box-sHero-title-'.$id.$j, true ); ?></h1>
                            <div class="display-4 fg-white-w"><?php echo get_post_meta( $id, 'meta-box-sHero-content-'.$id.$j, true ); ?></div>
                        <?php else: ?>
                            <?php $categoryy = get_the_terms( $id, "product_categories" );  
                                foreach ( $categoryy as $cat){
                                    if($cat->parent > 0)
                                        $ch = $cat->name;
                                } 
                            ?>
                            <h1 class="display-6 l-10 text-white"><?php echo get_the_title()." "; ?><span class="fg-brown"><?php echo $ch; ?></span></h1>
                            <p class="mark-regular display-4 fg-white "><?php echo get_post_meta( $id, 'meta-box-sHero-content-'.$id.$j, true ); ?></p>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
</section>
