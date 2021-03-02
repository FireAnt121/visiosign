<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
?>
<section id="cloud-page" style="order:<?php echo $order; ?>">
								<div class="tabbed">
								<div class="wrapper">
									<h1 class="display-6 l-10"><?php echo get_post_meta($id, 'meta-box-tabbed-title-'.$id.$j, true); ?></h1>
									<h5 class="display-4"><?php echo get_post_meta($id, 'meta-box-blogList-content-'.$id.$j, true); ?></h5>
							
									<ul class="nav nav-tabs tabbed-fn">
									<?php 
											$args = array('post_type' => 'fire_function','posts_per_page' => 16, 'order' => 'ASC');
											$the_query = new WP_Query($args);
											$count = 1;

											$post_list = get_posts( $args);
											
											foreach ( $post_list as $post ) {
												$idd = $post->ID;
											   ?>
										<li <?php echo ($count == 1)? 'class="active"' : ' '; ?>><a data-toggle="tab" href="#menu<?php echo $count; ?>">
											<img src="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>">
											<span><?php echo $post->post_title; ?></span>
										</a>
										</li>
											<?php $count++;} ?>
									</ul>
									
									<div class="tab-content">
									<?php 
									$count = 1;
									foreach ( $post_list as $post ) {
												$idd = $post->ID; ?>
										<div id="menu<?php echo $count;?>" class="tab-pane fade <?php echo ($count == 1)? 'active show': '';?>">
											<i class="fas fa-times tabe-hider hide-until-7"></i>
											<div class="row">
												<div class="col-md-3">
													<img src="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>">
												</div>
												<div class="col-md-9">
													<h3 class="display-6"><?php echo $post->post_title; ?></h3>
													<p class="display-4"><?php echo $post->post_content; ?></p>
												</div>
											</div>
											<div class="row fr-tabbed-hidden hide-until-7">
												<p class="display-4"><?php echo $post->post_content; ?></p>
											</div>
										</div>
									<?php $count++;} ?>
								</div>
							</section>