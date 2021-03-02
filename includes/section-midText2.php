<section class="mid-text text-center">
<?php
                $category = get_post_meta( get_the_ID(), 'meta-box-midText2-link-'.get_the_ID());
                    $taxonomy = 'testimonial_categories';
                    $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                            foreach ( $terms as $term ) { ?>
                                <?php if($term->term_id == $category[0]) 
                                            $c = $term->slug; ?>
                            <?php } 
                        $args = array('post_type' => 'fire_testimonial','posts_per_page' => 1, 'order' => 'ASC',
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
                        <?php if ($the_query->have_posts()) : ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <h1 class="display-11 l-10 fg-brown"><?php echo get_the_content(); ?></h1>
                                <h4 class="display-1"><?php echo get_the_title(); ?></h4>
                                <p class="display-1 work-sans"><?php echo get_the_excerpt(); ?></p>
                            <?php endwhile; ?>
                        <?php endif;
                        wp_reset_postdata(); ?>
</section>