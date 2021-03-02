<?php 
$i = $mystery['i'];
$order = $mystery['order'];

?>

        <section id="home" style="order:<?php echo $order; ?>">
        <div class="features">
            <div class="big-wrapper">
                <div class="accordion hide-until-9" id="accordionExample">
                  <?php
                      $args = array('post_type' => 'fire_show','posts_per_page' => 4,'order'=>'ASC','orderby'=>'menu_order');
                      $the_query = new WP_Query($args);
                      $count = 0;
                      ?>
                      <?php if ($the_query->have_posts()) : ?>
                          <?php while ($the_query->have_posts()) : $the_query->the_post();  $idd = get_the_ID();?>
                      <div class="card" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/home/feature1.jpg') no-repeat;background-size:cover;background-position:center;">
                        <div class="card-header" id="heading<?php echo $count; ?>">
                          <h2 class="mb-0 ">
                            <button class="btn btn-link display-0 text-white" type="button" data-toggle="collapse" data-target="#collapse<?php echo $count; ?>" aria-expanded="true" aria-controls="collapse<?php echo $count; ?>">
                              <?php echo get_the_title(); ?>
                            </button>
                          </h2>
                        </div>
                    
                        <div id="collapse<?php echo $count; ?>" class="collapse" aria-labelledby="heading<?php echo $count; ?>" data-parent="#accordionExample">
                          <div class="card-body">
                                    <h2 class="display-4 m-55 text-white"><?php echo get_post_meta($idd,"meta-box-shows-content-".$idd,true); ?></h2>
                              </ul>
                              <a href="<?php echo get_post_permalink(get_post_meta( $id, 'meta-box-shows-blink-'.$id, true )); ?>" class="fr-button-link-brown-white"><?php echo get_post_meta( $id, 'meta-box-shows-btext-'.$id, true ); ?></a>
                          </div>
                        </div>
                      </div>
                      <?php 
                            $count++;
                            endwhile; wp_reset_postdata();?>
                      <?php endif; ?>
                 </div>
                <div class="row pandora-box hide-after-9">
                <?php
                    $args = array('post_type' => 'fire_show','posts_per_page' => 4,'order'=>'ASC','orderby'=>'menu_order');
                    $the_query = new WP_Query($args);
                    $count = 0;
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); $idd = get_the_ID();?>
                            <div class="col-md-3 pandora-item">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(get_the_ID()) , '_wp_attachment_image_alt', true);?>">
                                <h1 class="display-0 pandora-title p-main"><?php echo get_the_title(); ?></h1>
                                <div class="pandora-content">
                                    <h2 class="display-0 m-30 text-white"><?php echo get_the_title(); ?></h2>
                                    <h2 class="display-4 m-55 text-white"><?php echo get_post_meta($idd,"meta-box-shows-content-".$idd,true); ?></h2>

                                    <a href="<?php echo get_post_permalink(get_post_meta( $id, 'meta-box-shows-blink-'.$id, true )); ?>" class="fr-button-link-brown-white"><?php echo get_post_meta( $id, 'meta-box-shows-btext-'.$id, true ); ?></a>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_postdata();?>
                    <?php endif; ?>
                </div>
            </div>
            </div>
        </section>