<?php $i = $mystery['i'];
    $order = $mystery['order']; ?>
<section id="solution-page" style="order:<?php echo $order; ?>" >
    <div class="inspire">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-6 left">
                        <h1 class="display-6"><?php echo get_post_meta( $id, 'meta-box-inspire-title-'.$id.$i, true ); ?></h1>
                        <h2 class="display-1"><?php echo get_post_meta( $id, 'meta-box-inspire-subcontent-'.$id.$i, true ); ?></h2>
                        <p class="display-2 l-10"><?php echo get_post_meta( $id, 'meta-box-inspire-content-'.$id.$i, true ); ?></p>

                        <?php button_customize_set($id,$i,'inspire','meta-box-inspire-link-','meta-box-inspire-text-');?>
                    </div>
                    <div class="col-md-6 right">
                        <svg height="100%" width="450" viewBox="0 0 450 860">
                            <path d="M 10 10 l 0 840" stroke="#ccc" stroke-width="2" fill="none" />
                            
                              <!-- Mark relevant points -->
                              <g fill="#ccc">
                                <circle id="pointA" cx="10" cy="10" r="6" />
                                <circle id="pointB" cx="10" cy="130" r="6" />
                                <circle id="pointC" cx="10" cy="250" r="6" />
                                <circle id="pointC" cx="10" cy="370" r="6" />
                                <circle id="pointC" cx="10" cy="490" r="6" />
                                <circle id="pointC" cx="10" cy="610" r="6" />
                                <circle id="pointC" cx="10" cy="730" r="6" />
                                <circle id="pointC" cx="10" cy="850" r="6" />
                              </g>
                            
                            </svg>
                        <ul>
                            <?php for($ii = 0; $ii < 8; $ii++ ):?>
                            <li>
                                <span class="img-wrapper">
                                    <img src="<?php echo get_post_meta( $id, 'meta-box-inspire-image-'.$id.$i.$ii, true ); ?>" alt="">
                                </span>
                                <div class="display-2 work-sans"><?php echo get_post_meta( $id, 'meta-box-inspire-title-'.$id.$i.$ii, true ); ?></div>
                            </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </section>