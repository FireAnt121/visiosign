<?php while (have_posts()) : the_post(); ?>
<section class="testimon">
            <div class="wrapper">
                <h1 class="display-6">Det siger kunderne</h1>
                <div class="row">
                <?php
                $category = get_post_meta( get_the_ID(), 'meta-box-ctaS-link-'.get_the_ID());
                $taxonomy = 'testimonial_categories';
                $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                        foreach ( $terms as $term ) { ?>
                            <?php if($term->term_id == $category[0]) 
                                        $c = $term->slug; ?>
                        <?php } 
                    $args = array('post_type' => 'fire_testimonial','posts_per_page' => -1, 'order' => 'ASC',
                     'tax_query' => array(
                       array(
                           'taxonomy' => 'testimonial_categories',
                           'field'    => 'slug',
                           'terms'    => $c,
                       ),)
                  );
                    $the_query = new WP_Query($args);
                    $count = 0;
                    ?>
                    <div id="carouselControls" class="carousel slide hide-until-9" data-ride="carousel">
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="carousel-inner">
                          <div class="carousel-item <?php echo ($count == 0)? 'active' : ' ' ;?>">
                            <div class="col-md-6">
                                <p class="display-5 l-10 fg-brown text-center">"<?php echo get_the_content(); ?>"</p>
                                <p class="display-1 "><?php echo get_the_title(); ?></p>
                                <p class="display-1 work-sans"><?php echo get_the_excerpt(); ?></p>
                            </div>
                          </div>
                          <?php $count;endwhile; 
                          wp_reset_postdata();?>
                             <?php endif; ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                            <i class="fas fa-chevron-left " aria-hidden="true"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                            <i class="fas fa-chevron-right " aria-hidden="true"></i>
                        </a>
                    </div>
                    <?php
                    $args = array('post_type' => 'fire_testimonial','posts_per_page' => 2, 'order' => 'ASC',
                     'tax_query' => array(
                       array(
                           'taxonomy' => 'testimonial_categories',
                           'field'    => 'slug',
                           'terms'    => $c,
                       ),)
                  );
                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="col-md-6 hide-after-9">
                            <p class="display-5 l-10 fg-brown text-center">"<?php echo get_the_content(); ?>"</p>
                                <p class="display-1 "><?php echo get_the_title(); ?></p>
                                <p class="display-1 work-sans"><?php echo get_the_excerpt(); ?></p>
                            </div>
                            <div class="col-md-6 hide-after-9">
                            <p class="display-5 l-10 fg-blue text-center">"<?php echo get_the_content(); ?>"</p>
                                <p class="display-1 "><?php echo get_the_title(); ?></p>
                                <p class="display-1 work-sans"><?php echo get_the_excerpt(); ?></p>          
                            </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
                    <?php endwhile;?>