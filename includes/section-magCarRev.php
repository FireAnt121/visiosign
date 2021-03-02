<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
?>
<section id="info-page" style="order:<?php echo $order; ?>">
								<div class="magazine-rev bg-lightwhite" >
								<div class="wrapper">
									<div class="row">

										<div class="col-md-6 right">
											<div class="mag-wrap mr-auto">
												<h1 class="display-6"><?php echo  get_post_meta($id, "meta-box-magCarouselRev-title-".$id.$j,true); ?></h1>
												<div class="display-2 work-sans l-10">
                                                <?php echo  get_post_meta($id, "meta-box-magCarouselRev-content-".$id.$j,true); ?>
                                                <?php button_customize_set($id,$j,'magCarouselRev','meta-box-magCarouselRev-blink-','meta-box-magCarouselRev-btext-');?>
												</div>
											</div>
										</div>
										<div class="col-md-6 left">
										<div id="magizineCarouselRev<?php echo $order; ?>" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
											<?php
											$category = get_post_meta( $id,'meta-box-magCarouselRev-link-'.$id.$j,true);
													$taxonomy = 'carousel_categories';
													$c = '';
													$terms = get_terms($taxonomy); // Get all terms of a taxonomy
															foreach ( $terms as $term ) { ?>
																<?php if($term->term_id == $category) 
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
													<?php while ($the_query->have_posts()) : $the_query->the_post(); $idd = get_the_ID();?>
														<div class="carousel-item <?php echo ($count == 0) ? "active" : " "; ?>">
															<img src="<?php echo get_post_meta($idd,"meta-box-carousel-fire1-".$idd,true); ?>" alt="">
															<img src="<?php echo get_post_meta($idd,"meta-box-carousel-fire2-".$idd,true);?>" alt="">
														</div>
												<?php $count++;endwhile; wp_reset_postdata(); ?>
												<?php endif; ?>
												</div>
												<?php if($count > 1): ?>
												<a class="carousel-control-prev" href="#magizineCarouselRev<?php echo $order;?>" role="button" data-slide="prev">
												<i class="fas fa-chevron-left " aria-hidden="true"></i>
												</a>
												<a class="carousel-control-next" href="#magizineCarouselRev<?php echo $order;?>" role="button" data-slide="next">
												<i class="fas fa-chevron-right " aria-hidden="true"></i>
												</a>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
								</div>
							</section>