<?php 
    $i = $mystery['i'];
    $order = $mystery['order'];
?>

        <section id="home" style="order:<?php echo $order; ?>">
        <div class="reference">
            <div class="wrapper">
                <h1 class="display-6 m-55"><?php echo get_post_meta($id,"meta-box-reference-title-".$id.$i,true);?></h1>
                <div class="row m-40">
                <?php
                    $args = array('post_type' => 'fire_reference', 'order'=>'ASC', 'posts_per_page' => 6 );
                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="col-sm-2">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($id) , '_wp_attachment_image_alt', true);?>">
                            </div>
                        <?php endwhile; wp_reset_postdata();?>
                    <?php endif; ?>
                </div>
                <div class="row m-80">
                <?php
                    $args = array('post_type' => 'fire_reference','order'=>'ASC','offset' => 6);
                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="col-sm-2">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($id) , '_wp_attachment_image_alt', true);?>">
                            </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
                <!-- <div class="row button-center">
                    <a href="<?php //echo get_post_permalink(get_post_meta( $id, 'meta-box-reference-link-'.$id.$i, true )); ?>" class="fr-button-link-brown-border"><?php //echo get_post_meta($id,"meta-box-reference-Blink-".$id.$i,true);?></a>
                </div> -->
            </div>
            </div>
        </section>