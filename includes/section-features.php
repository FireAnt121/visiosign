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
                      <div class="card" style="background:url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat;background-size:cover;background-position:center;">
                        <div class="card-header" id="heading<?php echo $count; ?>">
                          <h2 class="mb-0 ">
                            <button class="btn btn-link display-0 text-white collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo $count; ?>" aria-expanded="true" aria-controls="collapse<?php echo $count; ?>">
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
                                    <a 
href="<?php echo get_post_permalink(get_post_meta( $id, 'meta-box-shows-blink-'.$id, true )); ?>" 
class="fr-button-link-global" 
style="background:#aa8c46 ;
        border-color:#aa8c46;
        color:#fff ;" 
onMouseOver="this.style.backgroundColor='#fff';
             this.style.borderColor='#fff';
             this.style.color='#000';
             this.children[1].style.fill='#000'" 
onMouseOut="this.style.backgroundColor='#aa8c46';
            this.style.borderColor='#aa8c46';
            this.style.color='#fff';
            this.children[1].style.fill='#fff'">
<span><?php echo get_post_meta( $id, 'meta-box-shows-btext-'.$id, true ); ?></span>
<svg style="fill:#fff;" viewBox="0 0 122.53 43.64"><title>arr</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M122.45,22.61l-.09.29a3.31,3.31,0,0,1-.12.42,3.06,3.06,0,0,1-.23.45l-.13.26a4.31,4.31,0,0,1-.49.62l-17,17.81a3.76,3.76,0,0,1-2.71,1.18A3.72,3.72,0,0,1,99,42.46a4.14,4.14,0,0,1,0-5.66l10.47-11H4A3.89,3.89,0,0,1,.21,23.16a4,4,0,0,1,3.61-5.35H109.45L99,6.84a4.16,4.16,0,0,1-.29-5.33v0L99,1.16a3.7,3.7,0,0,1,5.41,0l17,17.81a3.51,3.51,0,0,1,.48.6l.15.28c.07.11.13.25.19.37a3.53,3.53,0,0,1,.15.49,1.2,1.2,0,0,1,.1.51A3.31,3.31,0,0,1,122.45,22.61Z"/></g></g></svg>
</a>
                                    
                                </div>
                            </div>
                        <?php endwhile; wp_reset_postdata();?>
                    <?php endif; ?>
                </div>
            </div>
            </div>
        </section>