<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
?>
<section id="aboutus-page"  style="order:<?php echo $order; ?>">
<div class="circle-sec">
            <div class="wrapper">
                <div class="row">
                    <div class="col-sm-12 col-md-5 fg-white">
                        <h1 class="display-4"><?php echo  get_post_meta($id, "meta-box-circleSec-title-".$id.$j,true);?></h1>
                        <p class="display-2 work-sans l-10"><?php echo  get_post_meta($id, "meta-box-circleSec-content-".$id.$j,true);?></p>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="same-place position-relative">
                        <ul class='circle-container'>
                          <?php for($i = 0 ; $i < 7 ; $i++){?>
                            <li><span class="img-wrapper">
                                <i class="fa fa-circle fg-brown display-6" aria-hidden="true"></i>
                            </span><?php echo  get_post_meta($id, "meta-box-circleSec-title-".$id.$j.$i,true);?></li>
                          <?php } ?>
                          </ul>
                          <!-- <ul class='circle-containers'>
                          <?php // for($i = 0 ; $i < 7 ; $i++){?>
                            <li>                  <svg height="5vw" width="40">
                                <path id="lineAB" d="M 20 20 l 1 100" stroke="#aa8c46" stroke-width="3" fill="none" />
                                  <g stroke="#aa8c46" stroke-width="3" fill="#aa8c46">
                                    <circle id="pointA" cx="20" cy="20" r=".75vw" />
                                  </g>
                                </svg></li>
                          <?php // } ?>
                          </ul> -->
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>