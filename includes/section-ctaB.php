
<?php 
$i = $mystery['i'];
$order = $mystery['order'];
$drop  = esc_html(get_post_meta( $id, 'meta-box-ctaB-dropdown-'.$id.$i, true ));

if( $drop== "overlay-v"){
    $button = "fr-button-link-brown-white";
        }
        else {
            $button = "fr-button-link-black";
        }?>
    <section id="home" style="order:<?php echo $order; ?>">
    <div class="big-cta" style="background:url(<?php echo esc_attr( get_post_meta( $id, 'meta-box-ctaB-image-'.$id.$i, true ) ); ?>);background-size:cover;">
            <div class="<?php echo $drop; ?>">
            </div>
            <div class="wrapper">
                <div class="text-wraps position-relative">
                    <h1 class="display-0 m-40">
                        <?php echo get_post_meta( $id, 'meta-box-ctaB-title-'.$id.$i, true ); ?>
                    </h1>
                        <div class="display-2 work-sans fg-white m-80">
                        <?php echo get_post_meta( $id, 'meta-box-ctaB-content-'.$id.$i, true ); ?>
                        </div>
                        <?php button_customize_set($id,$i,'ctaB','meta-box-ctaB-link-','meta-box-ctaB-Blink-');?>
                        <!-- <button class="button-v bg-black fg-white">Få et tilbud</button> -->
                </div>
            </div>
            </div>
    </section>

