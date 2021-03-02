

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
        <section class="cta-small">
            <div class="text-center hero-left position-relative" >
            
            <?php
                $category = get_post_meta( get_the_ID(), 'meta-box-ctaS-link-'.get_the_ID());
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
                            <p class="display-5 work-sans fg-brown m-30">
                                ”<?php echo get_the_content(); ?>”
                            </p>
                            <h5 class="display-1"><?php echo get_the_title(); ?></h5>
                            <h5 class="display-1 work-sans"><?php echo get_the_excerpt(); ?></h5>
                        <?php endwhile; ?>
                    <?php endif; ?>
        </div>
        </section>
        <?php endwhile;
endif;?>