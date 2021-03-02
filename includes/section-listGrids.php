<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
?>
<section id="backline-page" style="order:<?php echo $order; ?>">
<div class="list-grids">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-12 col-lg-7">
                        <h1 class="display-4 fg-brown"><?php echo   get_post_meta( $id, 'meta-box-listGrids-title-'.$id.$j, true ); ?></h1>
                        <div class="display-4 work-sans fg-white-w"><?php echo   get_post_meta( $id, 'meta-box-listGrids-content-'.$id.$j, true ); ?>
                            <!-- <ul  type="button" data-toggle="modal" data-target="#exampleModal">
                                <?php // for($ii = 0; $ii < 5 ; $ii++) { ?>
                                        <?php // if(get_post_meta($id, 'meta-box-listGrids-list-item1'.$ii.'-'.$id, true)) { ?>
                                            <li>
                                                    <?php // echo get_post_meta($id, 'meta-box-listGrids-list-item1'.$ii.'-'.$id, true); ?>
                                            </li>
                                    <?php //} }?>
                            </ul> -->
                    </div>
                </div>
            </div>
            </div>
        </section>