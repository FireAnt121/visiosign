
<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
?>
    <section id="info-page" style="order:<?php echo $order; ?>">
        <div class="blackline">
            <div class="big-wrapper">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-md-6 left px-0">
                            <h1 class="display-6"><?php echo  get_post_meta($id, "meta-box-splitThree-title-".$id.$j,true); ?></h1>
                            <p class="display-2 work-sans l-10"><?php echo  get_post_meta($id, "meta-box-splitThree-content-".$id.$j,true); ?></p>
                        </div>
                        <div class="col-md-6 right">
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <img src="<?php echo  get_post_meta($id, "meta-box-splitThree-image-".$id.$j,true); ?>" alt="">
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <img src="<?php echo  get_post_meta($id, "meta-box-splitThree-image1-".$id.$j,true); ?>" alt="">
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <img src="<?php echo  get_post_meta($id, "meta-box-splitThree-image2-".$id.$j,true); ?>" alt="">
                                </div>
                            </div>
                            <?php echo  get_post_meta($id, "meta-box-splitThree-tagLine-".$id.$j,true); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>