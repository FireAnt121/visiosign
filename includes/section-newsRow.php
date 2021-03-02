<?php 
    $i = $mystery['i'];
    $order = $mystery['order'];
    $ptype = $mystery['ptype'];
    $num = get_post_meta($id,"meta-box-gridShow-counts-".$id.$i,true); 
    $design = get_post_meta($id,"meta-box-gridShow-design-".$id.$i,true);
?>
<section id="case-page" style="order:<?php echo $order; ?>">
	<div class="news-row">
									<div class="wrapper">
									<?php 
										$num = ($num == "all") ? -1 : $num;
										$args = array('post_type' => $design,'posts_per_page' => $num, 'order' => 'ASC', 'orderby' => 'menu_order');
										$the_query = new WP_Query($args);
										$post_list = get_posts( $args);
										$count = 0; $min_count = 1;$rev = false;
										foreach ( $post_list as $post ) {
											$idd = $post->ID;
										?>
										<?php 
										
											if($count%2 === 0): 
											?>
											<div class="row <?php echo ($rev) ? 'r-rev' : ''; ?>">
												<div class="single-news-left"><a href="<?php echo get_the_permalink( $idd ); ?>">
													<img src="<?php echo get_the_post_thumbnail_url($idd); ?>" alt="">
													<h1 class="display-1 l-10 fg-black"><?php echo $post->post_title; ?></h1></a>             
												</div>
										<?php 
												else: ?>

												<div class="single-news-right"><a href="<?php echo get_the_permalink( $idd ); ?>" >
													<img src="<?php echo get_the_post_thumbnail_url($idd); ?>" alt="">
													<h1 class="display-1 l-10 fg-black"><?php echo $post->post_title; ?></h1></a>            
												</div>	
											</div>
										<?php 	
												endif; ?>
										<?php
										if($min_count === 4){
											$min_count = 1; $rev = true;
										}
										elseif($min_count === 2 && $count === 1 ){
											$rev = true;$min_count = 1;
										}
										 else 
										 { $min_count++; $rev = false; }
										$count++;
									} ?>
									</div>
								</section>