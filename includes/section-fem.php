<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
?>
<section id="info-page"  style="order:<?php echo $order; ?>">
    <div class="fem bg-lightwhite">
            <div class="wrapper">
                <h4 class="col-6 display-4"><?php echo  get_post_meta($id, "meta-box-fiveSplit-title-".$id.$j,true); ?></h1>
                <div class="row-v w-100">
                    <?php for($ii = 0; $ii < 5; $ii++ ): ?>
                    <div class="col-v">
                        <img src="<?php echo  get_post_meta($id, "meta-box-fiveSplit-image-".$id.$j.$ii,true); ?>" alt="">
                        <h3 class="display-10 work-sans fg-brown l-10"><?php echo  get_post_meta($id, "meta-box-fiveSplit-title-".$id.$j.$ii,true); ?></h3>
                        <div class="display-2 work-sans l-10"><?php echo  get_post_meta($id, "meta-box-fiveSplit-content-".$id.$j.$ii,true); ?></div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
                    </div>
</section>