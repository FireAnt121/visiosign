<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
    $ptop = esc_html(get_post_meta($id,"meta-box-products-ptop-".$id.$j,true));
    $pbot = esc_html(get_post_meta($id,"meta-box-products-pbot-".$id.$j,true));
?>
<section id="backline-page"  style="order:<?php echo $order; ?>">
<div class="grid-info">
            <div class="wrapper g-top">
                <h2 class="topics display-4 fg-brown"><?php echo   get_post_meta( $id, 'meta-box-products-title-'.$id.$j, true ); ?></h2>
                <div class="row bot pandora-grid-box" style="padding-top:<?php echo $ptop; ?>rem !important; padding-bottom:<?php echo $pbot; ?>rem !important;">
                <?php
                    $category = get_post_meta( $id, 'meta-box-products-link-'.$id.$j);
                    $taxonomy = 'product_categories';
                    $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                    foreach ( $terms as $term ) { ?>
                        <?php if($term->term_id == $category[0]) 
                                $c = $term->slug; ?>
                        <?php } 
                    $args = array('post_type' => 'fire_product','posts_per_page' => 6,'order'=>'ASC',
                    'tax_query' => array(
                      array(
                          'taxonomy' => $taxonomy,
                          'field'    => 'slug',
                          'terms'    => $c,
                      ),
                  ));
                    $the_query = new WP_Query($args);
                    $count = 0;
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <?php $categoryy = get_the_terms( $post->ID, $taxonomy );    
                                foreach ( $categoryy as $cat){
                                    if(term_is_ancestor_of($category[0],$cat->term_id,$taxonomy))
                                        $ch = $cat->name;
                                } 
                                ?>
                    <div class="col-sm-12 col-md-6 col-lg-4 pandora-grid-box-item">
                        <a href="<?php echo get_the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                        <h5 class="display-1 fg-white l-10"><?php echo get_the_title(); ?><span class="fg-brown"><?php  echo " ".$ch; ?></span></h5></a>
                    </div>
                    <?php endwhile;
                          wp_reset_postdata();
                    endif; ?>
                </div>
            </div>
            </div>
        </section>