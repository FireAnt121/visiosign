<?php 
    $i = $mystery['i'];
    $order = $mystery['order'];
?>
        <section id="home" style="order:<?php echo $order; ?>">
        <div class="kunde">
            <div class="wrapper">
                <div class="row">
                    <h1 class="display-6 m-40 w-100"><?php echo get_post_meta( $id, 'meta-box-3cards-title-'.$id.$i, true ); ?></h1>
                </div>
            </div>
            <div class="big-wrapper">
                <div class="row">
                    <div class="col-md-8">
                    <?php
                                                        $category = get_post_meta( $id, 'meta-box-3cards-link-'.$id.$i,true);
                                                        $taxonomy = 'cases_categories';
                                                        $c = '';
                                                        $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                                                                foreach ( $terms as $term ) { ?>
                                                                    <?php if($term->term_id == $category) 
                                                                                $c = $term->slug; ?>
                                                                <?php } 
                    $args = array('post_type' => 'fire_cases','posts_per_page' => 2,'order'=>'DESC',
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
                            <?php if($count == 0) {?>
                                <div class="card-lg-v m-30">
                            <?php }else {?>
                                <div class="card-lg-v float-right">
                            <?php } ?>
                            <a href="<?php echo get_the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($id) , '_wp_attachment_image_alt', true);?>">
                                    <div class="card-v-content">
                                        <h1 class="display-1"><?php echo get_the_title(); ?></h1>
                                    </div>
                                    </a>
                                </div>
                        <?php $count++; endwhile;wp_reset_postdata();?>
                    <?php endif; ?>
                    </div>
                    <div class="col-md-4">
                    <?php
                        $args = array('post_type' => 'fire_cases','posts_per_page' => 1, 'offset' => 2, 'order'=>'DESC',
                        'tax_query' => array(
                        array(
                            'taxonomy' => 'cases_categories',
                            'field'    => 'slug',
                            'terms'    => $c,
                        ),
                    ));
                        $the_query = new WP_Query($args);
                        ?>
                        <?php if ($the_query->have_posts()) : ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <div class="card-lg-v"><a href="<?php echo get_the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($id) , '_wp_attachment_image_alt', true);?>">
                                    <div class="card-v-content">
                                        <h1 class="display-1"><?php echo get_the_title(); ?></h1>
                                    </div></a>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata();?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            </div>
        </section>
