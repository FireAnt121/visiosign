<?php 
    $i = $mystery['i'];
    $order = $mystery['order'];
    $design = get_post_meta($id,"meta-box-cta-design-".$id.$i,true);
    $bgcolor = get_post_meta($id,"meta-box-cta-bgcolor-".$id.$i,true);
    $fgcolor = get_post_meta($id,"meta-box-cta-fgcolor-".$id.$i,true);
    if($design == 'design3')
    $ied = 'case-large-page';
elseif($design == 'design4')
    $ied = 'case-page';
else
    $ied = 'home';
?>
        <section id="<?php echo $ied;?>" style="order:<?php echo $order; ?>">
        <div class="<?php echo ($design == 'design4')? 'testimon' : 'cta' ;	?>" style="background:<?php echo $bgcolor; ?>">
        <?php if($design == 'design4'): ?>
                        <div class="wrapper">
                                    <h1 class="display-6"><?php echo get_post_meta( $id, 'meta-box-cta-title-'.$id.$i,true); ?></h1>
                                    <div id="carouselControls<?php echo $order; ?>" class="<?php echo ($design != 'design3')? 'carousel' : ' ';?> slide hide-until-9" data-ride="carousel">
                <div class="carousel-inner">
                <?php
                $category = get_post_meta( $id, 'meta-box-cta-link-'.$id.$i,true);
                $taxonomy = 'testimonial_categories';
                $c = '';
                $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                        foreach ( $terms as $term ) { ?>
                            <?php if($term->term_id == $category) 
                                        $c = $term->slug; ?>
                        <?php } ?>
                <?php 
                    $args = array('post_type' => 'fire_testimonial',
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
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); $idd = get_the_ID();?>
                        <?php if($design == 'design4'): ?>
                            <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
                                                            <div class="text-center hero-left position-relative" >
																		<p class="display-5 work-sans m-30" style="text-align:center;color:<?php echo $fgcolor; ?>;">
																			"<?php echo strip_tags(get_post_meta($idd,"meta-box-testimonial-content-".$idd,true)); ?>"
																		</p>
																		<h5 class="display-1"><?php echo get_post_meta($idd,"meta-box-testimonial-name-".$idd,true); ?></h5>
																		<h5 class="display-1 work-sans"><?php echo get_post_meta($idd,"meta-box-testimonial-desg-".$idd,true); ?></h5>
                                                                </div>
                            </div>
                    <?php endif; $count++; endwhile; wp_reset_postdata();endif;?>  
                        </div>
                        </div>
                        <?php endif; ?>
        <div id="carouselControls<?php echo $order; ?>" class="<?php echo ($design == 'design3')? 'carousel-d3' : ' ';?> carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <?php
                $category = get_post_meta( $id, 'meta-box-cta-link-'.$id.$i,true);
                $taxonomy = 'testimonial_categories';
                $c = '';
                $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                        foreach ( $terms as $term ) { ?>
                            <?php if($term->term_id == $category) 
                                        $c = $term->slug; ?>
                        <?php } ?>
                <?php 
                    $args = array('post_type' => 'fire_testimonial',
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
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); $idd = get_the_ID();?>
                        <?php if($design == 'design4'): ?>
														<?php if($count%2 == 0):?>
                                                        <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?> hide-after-9">

														<div class="row">
																			<div class="col-md-6 hide-after-9">
																				<p class="display-5 l-10 fg-brown text-center">”<?php echo strip_tags(get_post_meta($idd,"meta-box-testimonial-content-".$idd,true)); ?>”</p>
																				<p class="display-1 "><?php echo get_post_meta($idd,"meta-box-testimonial-name-".$idd,true); ?></p>
																				<p class="display-1 work-sans"><?php echo get_post_meta($idd,"meta-box-testimonial-desg-".$idd,true); ?></p>
																			</div>
                                                                        <?php else:?>
																			<div class="col-md-6 hide-after-9">
																				<p class="display-5 l-10 fg-blue text-center">”<?php echo strip_tags(get_post_meta($idd,"meta-box-testimonial-content-".$idd,true)); ?>”</p>
																				<p class="display-1 "><?php echo get_post_meta($idd,"meta-box-testimonial-name-".$idd,true); ?></p>
																				<p class="display-1 work-sans"><?php echo get_post_meta($idd,"meta-box-testimonial-desg-".$idd,true); ?></p>
																			</div>
																			</div>
																			</div>
														<?php endif; ?>

													<?php else: ?>
                        <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
															<?php if($design != 'design3'): ?>
																<div class="text-center hero-left position-relative" >
																		<p class="display-5 work-sans m-30" style="text-align:center;color:<?php echo $fgcolor; ?>;">
																			"<?php echo strip_tags(get_post_meta($idd,"meta-box-testimonial-content-".$idd,true)); ?>"
																		</p>
																		<h5 class="display-1"><?php echo get_post_meta($idd,"meta-box-testimonial-name-".$idd,true); ?></h5>
																		<h5 class="display-1 work-sans"><?php echo get_post_meta($idd,"meta-box-testimonial-desg-".$idd,true); ?></h5>
																</div>
															<?php else: ?>
																<section class="mid-text text-center">
																	<h1 class="display-11 l-10" style="color:<?php echo $fgcolor; ?>;">”<?php echo strip_tags(get_post_meta($idd,"meta-box-testimonial-content-".$idd,true)); ?>”</h1>
																	<h4 class="display-1"><?php echo get_post_meta($idd,"meta-box-testimonial-name-".$idd,true); ?>n</h4>
																	<p class="display-1 work-sans"><?php echo get_post_meta($idd,"meta-box-testimonial-desg-".$idd,true); ?></p>
																</section>
															<?php endif; ?>
														</div>
                                                            <?php endif; $count++; endwhile; 
                        wp_reset_postdata();?>
                    <?php endif; ?>
                </div>

                <?php if($design == 'design4' ): ?>
                <?php if($count > 2 ): ?>
                <a class="carousel-control-prev hide-after-9" href="#carouselControls<?php echo $order; ?>" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left " aria-hidden="true"></i>
                </a>
                <a class="carousel-control-next hide-after-9" href="#carouselControls<?php echo $order; ?>" role="button" data-slide="next">
                    <i class="fas fa-chevron-right " aria-hidden="true"></i>
                </a>
                </div>
                <?php elseif($count > 1 ): ?>
                    <a class="carousel-control-prev hide-until-9" href="#carouselControls<?php echo $order; ?>" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left " aria-hidden="true"></i>
                </a>
                <a class="carousel-control-next hide-until-9" href="#carouselControls<?php echo $order; ?>" role="button" data-slide="next">
                    <i class="fas fa-chevron-right " aria-hidden="true"></i>
                </a>
                </div>
                <?php endif;?>
                <?php else:?>
                <?php if($count > 1 ): ?>
                <a class="carousel-control-prev" href="#carouselControls<?php echo $order; ?>" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left " aria-hidden="true"></i>
                </a>
                <a class="carousel-control-next" href="#carouselControls<?php echo $order; ?>" role="button" data-slide="next">
                    <i class="fas fa-chevron-right " aria-hidden="true"></i>
                </a>
                <?php endif;?>
                <?php endif; ?>
            </div>
            </div>
        </section>