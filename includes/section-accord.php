<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
    $c = get_post_meta( $id, "meta-count-accord".$id.$j,true );
?>
<section id="support-page"  style="order:<?php echo $order; ?>">
<div class="accord">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="display-6"><?php echo  get_post_meta( $id, 'meta-box-accord-title-'.$id.$j, true ); ?></h1>
                        <div class="accordion" id="accordionExample<?php echo $order.$id; ?>">
                          <?php for($i = 0; $i < $c; $i++): 
                            if(get_post_meta($id,"fr-clicker-accord-deleter".$j."-".$id.$i,true) == "true"):?>
                            <div class="card">
                              <div class="card-header" id="heading<?php echo $i.$order; ?>">
                                <h2 class="mb-0 ">
                                  <button class="btn btn-link display-1 l-10 collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i.$order; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i.$order; ?>">
                                    <?php echo  get_post_meta( $id, 'meta-box-accord-title-'.$id.$j.$i, true ); ?>
                                  </button>
                                </h2>
                              </div>
                          
                              <div id="collapse<?php echo $i.$order; ?>" class="collapse" aria-labelledby="heading<?php echo $i.$order;?>" data-parent="#accordionExample<?php echo $order.$id; ?>">
                                <div class="card-body">
                                <?php echo  get_post_meta( $id, 'meta-box-accord-content-'.$id.$j.$i, true ); ?>
                                </div>
                              </div>
                            </div>
                            <?php endif;endfor; ?>
                        </div>
                          
                    </div>
                    <div class="col-md-6 pics">
                        <img src="<?php echo  get_post_meta( $id, 'meta-box-accord-image-'.$id.$j, true ); ?>">
                    </div>
                </div>
            </div>
            </div>
        </section>