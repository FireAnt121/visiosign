<?php 
$i = $mystery['i'];
$order = $mystery['order'];

?>

        <section id="home" style="order:<?php echo $order; ?>">
            <div  class="nyhed" >
            <div class="wrapper">
                <div class="row">
                    <h1 class="display-6 m-40 w-100"><?php echo get_post_meta( $id, 'meta-box-nyhed-title-'.$id.$i, true ); ?></h1>
                    <?php
                    $type = 'nyhed';
                    $primary = esc_html(get_post_meta( $id, 'primarycolor-'.$type.$id.$i, true ));
                    $primaryborder = esc_html(get_post_meta( $id, 'primarybordercolor-'.$type.$id.$i, true ));
                    $color = esc_html(get_post_meta( $id, 'primarytextcolor-'.$type.$id.$i, true ));
                    $hovercolor = esc_html(get_post_meta( $id, 'hovertextcolor-'.$type.$id.$i, true ));
                    $hover = esc_html(get_post_meta( $id, 'hovercolor-'.$type.$id.$i, true ));
                    $hoverborder = esc_html(get_post_meta( $id, 'hoverbordercolor-'.$type.$id.$i, true ));
                    $transition = esc_html(get_post_meta( $id, 'button-transition-'.$type.$id.$i, true ));
                    $background = esc_html(get_post_meta( $id, 'button-background-'.$type.$id.$i, true ));
                                    $category = get_post_meta( $id, 'meta-box-nyhed-link-'.$id.$i,true);
                                    $btext = get_post_meta( $id, 'meta-box-nyhed-btext-'.$id.$i,true);
                                    $taxonomy = 'news_categories';
                                    $c = '';
                                    $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                                            foreach ( $terms as $term ) { ?>
                                                <?php if($term->term_id == $category) 
                                                            $c = $term->slug; ?>
                                            <?php } 
                    $args = array('post_type' => 'fire_news', 'posts_per_page' => 1,'order' => 'DESC', 
                    'tax_query' => array(
                      array(
                          'taxonomy' => 'news_categories',
                          'field'    => 'slug',
                          'terms'    => $c,
                      ),
                  ));
                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="col-md-6 nyhed-wrapper">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($id) , '_wp_attachment_image_alt', true);?>">
                            </div>
                            <div class="col-md-6 f-right">
                                <h5 class="display-2 work-sans m-30 fg-grey"><?php echo get_the_date('j. F Y'); ?></h5>
                                <h1 class="display-6 m-40"><?php echo get_the_title(); ?></h1>
                                <p class="display-2 work-sans m-65"><?php echo get_the_excerpt(); ?>
                                </p>
                                <a 
                                href="<?php echo get_the_permalink(); ?>" 
                                class="fr-button-link-global" 
                                style=" background:<?php echo ($background == "no")? 'transparent' : $primary; ?> !important;
                                        border-color:<?php echo $primaryborder; ?> !important;
                                        color:<?php echo $color; ?> !important;" 
                                onMouseOver="this.style.backgroundColor='<?php echo ($background == "no")? 'transparent' : $hover; ?> ';
                                            this.style.borderColor='<?php echo $hoverborder; ?>';
                                            <?php if($transition == "no"){  echo "this.style.padding='0.9375rem 6.75rem 0.9375rem 1.25rem';";} ?>
                                            this.style.color='<?php echo $hovercolor; ?>';
                                            this.children[1].style.fill='<?php echo $hovercolor; ?>'" 
                                onMouseOut="this.style.backgroundColor='<?php echo ($background == "no")? 'transparent' : $primary; ?> ';
                                            this.style.borderColor='<?php echo $primaryborder; ?>';
                                            this.style.color='<?php echo $color; ?>';
                                            this.children[1].style.fill='<?php echo $color; ?>'">
                                <span><?php echo ($btext != null) ? $btext : 'Se hele nyheden';?></span>
                                <svg xmlns="http://www.w3.org/2000/svg" style="fill:<?php echo $color; ?>;" viewBox="0 0 122.53 43.64"><title>arr</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M122.45,22.61l-.09.29a3.31,3.31,0,0,1-.12.42,3.06,3.06,0,0,1-.23.45l-.13.26a4.31,4.31,0,0,1-.49.62l-17,17.81a3.76,3.76,0,0,1-2.71,1.18A3.72,3.72,0,0,1,99,42.46a4.14,4.14,0,0,1,0-5.66l10.47-11H4A3.89,3.89,0,0,1,.21,23.16a4,4,0,0,1,3.61-5.35H109.45L99,6.84a4.16,4.16,0,0,1-.29-5.33v0L99,1.16a3.7,3.7,0,0,1,5.41,0l17,17.81a3.51,3.51,0,0,1,.48.6l.15.28c.07.11.13.25.19.37a3.53,3.53,0,0,1,.15.49,1.2,1.2,0,0,1,.1.51A3.31,3.31,0,0,1,122.45,22.61Z"/></g></g></svg>
                                </a>
                            </div>
                        <?php endwhile; wp_reset_postdata();?>
                    <?php endif; ?>
                </div>
                </div>
            </div>
        </section>