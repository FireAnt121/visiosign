<section class="case-carousel">
    <div class="big-wrapper">
        <div id="CaseCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            <?php
            $category = get_post_meta( get_the_ID(), 'meta-box-carouselC-link-'.get_the_ID());
                    $taxonomy = 'carousel_categories';
                    $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                            foreach ( $terms as $term ) { ?>
                                <?php if($term->term_id == $category[0]) 
                                            $c = $term->slug; ?>
                            <?php } 
                        $args = array('post_type' => 'fire_carousel','posts_per_page' => -1, 'order' => 'ASC',
                        'tax_query' => array(
                        array(
                            'taxonomy' => $taxonomy,
                            'field'    => 'slug',
                            'terms'    => $c,
                        ),)
                    );
                        $the_query = new WP_Query($args);
                        $count = 0;
                        ?>
                        <?php if ($the_query->have_posts()) : ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <div class="carousel-item <?php echo ($count == 0)? 'active' : ' ';?>">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Los Angeles">
              </div>
              <?php 
                $count++;
                endwhile; 
              wp_reset_postdata();?>
                    <?php endif; ?>
            </div>
            <a class="carousel-control-prev" href="#CaseCarousel" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#CaseCarousel" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
              </a>
          </div>
    </div>

</section>
<section class="small-text">
    <div class="wrapper">
        <p class="display-2 work-sans l-10"><?php echo esc_attr( get_post_meta( $id, 'meta-box-carouselC-title-'.get_the_ID(), true ) ); ?></p>
    </div>
</section>