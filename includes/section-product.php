<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
    $design = get_post_meta($id,'meta-box-productSpec-col-'.$id.$j,true);
?>
<section id="backline-inner-page" style="order:<?php echo $order; ?>">
<div class="magazine-rev">
            <div class="big-wrapper position-relative">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-md-6 right px-0">
                            <div class="mag-wrap mr-auto">
                                <h3 class="display-10 l-10 work-sans fg-white"><?php echo   get_post_meta( $id, 'meta-box-productSpec-varnumber-'.$id.$j, true ); ?></h3>
                                <h1 class="display-6 fg-white"><?php echo get_post_meta( $id, 'meta-box-productSpec-content-'.$id.$j, true ); ?></h1>
                            </div>
                        </div>
                        <div class="col-md-6 left px-0 fg-white offset">
                            <div class="row">
                                <div class="col-md-6 pl-0">
                                    <img src="<?php echo get_post_meta( $id, 'meta-box-productSpec-image-'.$id.$j, true ); ?>">
                                </div>
                                <div class="col-md-6 pr-0">
                                    <img src="<?php echo get_post_meta( $id, 'meta-box-productSpec-image2-'.$id.$j, true ); ?>">
        
                                </div>
                            </div>
                            <h3 class="mark-regular display-4"><?php echo get_post_meta( $id, 'meta-box-productSpec-stitle-'.$id.$j, true ); ?></h3>
                            <div class="row work-sans display-10">
                                <?php if($design == "design1"):?>
                                <div class="col-sm-12 pl-0">
                                    <div class="grid-containe">
                                        <?php echo get_post_meta( $id, 'meta-box-productSpec-scontent-'.$id.$j, true ); ?>
                                    </div>
                                </div>
                                <?php else: ?>
                                <div class="col-md-6 pl-0">
                                    <div class="grid-containe">
                                        <?php echo get_post_meta( $id, 'meta-box-productSpec-scontent-'.$id.$j, true ); ?>
                                    </div>                       
                                </div>
                                <div class="col-md-6 pr-0">
                                    <div class="grid-containe">
                                        <?php echo get_post_meta( $id, 'meta-box-productSpec-scontent1-'.$id.$j, true ); ?>
                                    </div>                       
                                </div>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>