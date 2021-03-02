
<?php 
    $i = $mystery['i'];
    $order = $mystery['order'];
    //$selector = get_post_meta($id, 'meta-carousel-fire-selector-'.$id,true);
    $selector = $mystery['ptype'];

            $category = get_post_meta( $id, 'meta-box-carousel-link-'.$id.$i,true);
                    $taxonomy = 'carousel_categories';
                    $c = '';
                    $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                            foreach ( $terms as $term ) { ?>
                                <?php if($term->term_id == $category) 
                                            $c = $term->slug; ?>
                            <?php } 
                        $args = array('post_type' => 'fire_carousel','posts_per_page' => -1, 'order' => 'DESC',
                        'tax_query' => array(
                        array(
                            'taxonomy' => $taxonomy,
                            'field'    => 'slug',
                            'terms'    => $c,
                        ),)
                    );
                        $the_query = new WP_Query($args);
                        ?>

<section id="<?php echo ($selector == 'page')? 'home' : 'case-large-page'; ?>" style="order:<?php echo $order; ?>" >
<div class="<?php echo ($selector == 'page')? 'hero' : 'case-carousel'; ?>">

    <div class="<?php echo ($selector != 'page')? 'big-wrapper' : 'ne'; ?>">
            <div id="carouselControls<?php echo $i;?>" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php $count = 0;
                    if( $the_query->have_posts() ):
                        while( $the_query->have_posts() ): $the_query->the_post(); 
                        $idd = get_the_ID();
                        $design = get_post_meta( $idd, 'meta-carousel-fire-selector-'.$idd,true);?>
                    <?php if($design == 'split'):?>
                    <div class="carousel-item <?php echo ($count == 0)? 'active' : ' ';?> n-h">
        
                        <div class="wrapper carousel-caption ">
                            <div class="row">
                                <div class="col-md-5 d-flex hero-left position-relative" >
                                    <div class="display-0 m-40"><?php echo get_post_meta($idd,"meta-box-carousel-title-".$idd,true); ?></div>
                                        <div class="display-1 work-sans text-dark"><?php echo get_post_meta($idd,"meta-box-carousel-content-".$idd,true); ?></div>
                                </div>
                                <div class="col-md-7 hero-right">
                                    <img src="<?php echo esc_url(get_post_meta($idd,"meta-box-carousel-fire-".$idd,true)); ?>">
                                </div>
                            </div>
                    
                        </div>
                    </div>
                    <?php elseif($design == 'bg'): 
                        $bgcolor = get_post_meta($id,"meta-box-carousel-bgcolor-".$id."1",true); ?>
                    <div class="carousel-item <?php echo ($count == 0)? 'active' : ' ';?> w-h">
                    <div class="<?php echo $bgcolor; ?>"></div>
                    <img class="d-block w-100" src="<?php echo esc_url(get_post_meta($idd,"meta-box-carousel-fire-".$idd,true)); ?>" alt="First slide">
                    <div class="wrapper carousel-caption ">
                        <div class="row">
                            <div class="col-md-5 d-flex hero-left position-relative" >
                                <div class="display-0 m-40"><?php echo get_post_meta($idd,"meta-box-carousel-title-".$idd,true); ?></div>
                                    <div class="display-1 work-sans"><?php echo get_post_meta($idd,"meta-box-carousel-content-".$idd,true); ?></div>
                            </div>
                            <div class="col-md-7">
                
                            </div>
                        </div>
                
                    </div>
                  </div>
                    <?php else: ?>
                    <div class="carousel-item <?php echo ($count == 0)? 'active' : ' ';?>">
                        <img src="<?php echo esc_url(get_post_meta($idd,"meta-box-carousel-fire-".$idd,true)); ?>" alt="Los Angeles">
                    </div>
                    <?php endif; ?>
                      <?php 
                      $count++;endwhile;wp_reset_postdata();
                    endif;
                      ?>
                </div>
                <?php if( $count > 1): ?>
                <a class="carousel-control-prev" href="#carouselControls<?php echo $i;?>" role="button" data-slide="prev">
                  <i class="fas fa-chevron-left " aria-hidden="true"></i>
                </a>
                <a class="carousel-control-next" href="#carouselControls<?php echo $i;?>" role="button" data-slide="next">
                  <i class="fas fa-chevron-right " aria-hidden="true"></i>
                </a>
                <?php endif;?>
              </div>
              </div>  
    </div>     

<?php if($selector != "page"):?>
<div class="small-text">
    <div class="wrapper">
        <p class="display-2 work-sans l-10"><?php echo esc_attr( get_post_meta( $id, 'meta-box-carouselC-title-'.get_the_ID(), true ) ); ?></p>
    </div>
</div> 
<?php endif;?>
</section>
