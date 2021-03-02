<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
?>
<section id="support-page"  style="order:<?php echo $order; ?>">
<div class="two-sec2">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-4 page-desc">
                        <?php 
                            $terms = get_the_terms($id,"cases_categories");
                            if($terms):
                                foreach($terms as $term){
                                    if( $term->slug == "small")
                                        $cat = true;
                                    elseif($term->slug == "large")
                                        $cat = false;
                                }
                            endif;
                        ?>
                        <div class="mag-wrap ">

                        <?php
                        if($terms):
                            if($cat): ?>
                            <h1 class="display-6">
                            </h1>
                            <h4 class="display-1 l-10"><?php echo   get_post_meta( $id, 'meta-box-split-title-'.$id.$j, true ) ; ?>
                            </h4>
                                <p class="display-2 work-sans l-10">
                                <?php echo  get_post_meta( $id, 'meta-box-split-content-'.$id.$j, true ); ?>   </p>
                        <?php else: ?>
                            <h1 class="display-4"><?php echo   get_post_meta( $id, 'meta-box-split-title-'.$id.$j, true ) ; ?></h1>
                               
                                <?php echo  get_post_meta( $id, 'meta-box-split-content-'.$id.$j, true ); ?>   
                                
                        <?php endif; ?>
                        <?php
                        else:
                        ?>
                            <h1 class="display-6"><?php echo   get_post_meta( $id, 'meta-box-split-title-'.$id.$j, true ) ; ?></h1>
                                <div class="display-2 work-sans l-10"><?php echo  get_post_meta( $id, 'meta-box-split-content-'.$id.$j, true ); ?>  </div>
                        <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-8 page-pic">
                        <img src="<?php echo   get_post_meta( $id, 'meta-box-split-image-'.$id.$j, true ) ; ?>">
                    </div>
                </div>
            </div>
            </div>
        </section>