
<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
?>
<section id="service-page"  style="order:<?php echo $order; ?>">
<div class="grid-info" id="sec1">
            <div class="wrapper">
                <div class="row top">
                    <div class="col-md-8 px-0">
                        <h1 class="display-6 l-10"><?php echo get_post_meta($id, 'meta-box-gridInfo-title-'.$id.$j, true); ?></h1>
                        <p class="display-9 l-10"><?php echo get_post_meta($id, 'meta-box-gridInfo-content-'.$id.$j, true); ?>
                        </p>
                    </div>
                </div>
                <div class="row bot">
                    <div class="wrap">
                    <?php for($i = 0; $i <4; $i++){ ?>
                        <div class="block">
                            <h3 class="my-accordion display-1 l-10"><?php echo get_post_meta($id, 'meta-box-gridInfo-title-'.$id.$j.$i, true); ?><span class="fg-brown"><?php echo get_post_meta($id, 'meta-box-gridInfo-sub-title'.( $i + 1 ) .'-'.$id.$j, true); ?></span><span class="close">+</span></h3>
                          <div class="links">
                            <div class="display-2 work-sans l-10"><?php echo get_post_meta($id, 'meta-box-gridInfo-content-'.$id.$j.$i, true); ?>
                            </div>
                        </div>
                        </div>
                    <?php } ?>
                       
                      </div>
                </div>
            </div>
            </div>
        </section>
