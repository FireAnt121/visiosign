<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
?>
<section id="cloud-page" style="order:<?php echo $order; ?>">
<div class="some-info" >
            <div class="wrapper">
                <h2 class="display-6 l-10"><?php echo get_post_meta($id,"meta-box-sameInfo-title-".$id.$j,true);?></h2>
                <div class="row">
                    <div class="col-md-6 l-10">
                        <p class="display-2"><?php echo get_post_meta($id,"meta-box-sameInfo-content-".$id.$j,true)?></p>
                    </div>
                    <div class="col-md-6 l-10">
                        <p class="display-2"><?php echo get_post_meta($id,"meta-box-sameInfo-content1-".$id.$j,true); ?></p>
                    </div>
                </div>
            </div>
</div>
        </section>