<?php 
    $i = $mystery['i'];
    $order = $mystery['order'];
?>
        <section id="home" style="order:<?php echo $order; ?>">
        <div class="floater-form" style="background:<?php echo get_post_meta( $id,'meta-box-floater-bgcolor-'.$id.$i, true );?>" >    
            <?php echo get_post_meta( $id,'meta-box-floater-title-'.$id.$i, true ); ?>
            <form id="fire-floater-form" action="<?php echo esc_url(admin_url('admin-post.php'));?>" method="POST" >
            <?php wp_nonce_field(basename(__FILE__), "fr-front-floater-nonce"); ?>
            <input type="text" id="fire-first" name="fire-first" placeholder="<?php echo get_post_meta( $id,'meta-box-floater-placeholder1-'.$id.$i, true );?>" required>
            <input type="text" id="fire-second" name="fire-second" placeholder="<?php echo get_post_meta( $id,'meta-box-floater-placeholder2-'.$id.$i, true );?>" required>
            <?php global $wp; ?>
            <input type="hidden" name="fire-cb" value="'<?php echo home_url($wp->request)?>">

            <button  
type="submit"
name="submit"
class="fr-button-link-global" 
style=" background:transparent !important;
        border-color:#fff !important;
        color:#fff !important;" 
onMouseOver="this.style.backgroundColor='#fff';
             this.style.borderColor='<?php echo get_post_meta( $id,'meta-box-floater-bgcolor-'.$id.$i, true );?>';
             <?php echo "this.style.padding='0.9375rem 6.75rem 0.9375rem 2rem';"; ?>
             this.style.color='<?php echo get_post_meta( $id,'meta-box-floater-bgcolor-'.$id.$i, true );?>';
             this.children[1].style.fill='<?php echo get_post_meta( $id,'meta-box-floater-bgcolor-'.$id.$i, true );?>'" 
onMouseOut="this.style.backgroundColor='transparent';
            this.style.borderColor='#fff';
            this.style.color='#fff';
            this.children[1].style.fill='#fff'"
value="<?php echo get_post_meta( $id,'meta-box-floater-button-'.$id.$i, true );?>">
<span><?php echo get_post_meta( $id,'meta-box-floater-button-'.$id.$i, true );?></span>
<svg xmlns="http://www.w3.org/2000/svg" style="fill:<?php echo $color; ?>;" viewBox="0 0 122.53 43.64"><title>arr</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M122.45,22.61l-.09.29a3.31,3.31,0,0,1-.12.42,3.06,3.06,0,0,1-.23.45l-.13.26a4.31,4.31,0,0,1-.49.62l-17,17.81a3.76,3.76,0,0,1-2.71,1.18A3.72,3.72,0,0,1,99,42.46a4.14,4.14,0,0,1,0-5.66l10.47-11H4A3.89,3.89,0,0,1,.21,23.16a4,4,0,0,1,3.61-5.35H109.45L99,6.84a4.16,4.16,0,0,1-.29-5.33v0L99,1.16a3.7,3.7,0,0,1,5.41,0l17,17.81a3.51,3.51,0,0,1,.48.6l.15.28c.07.11.13.25.19.37a3.53,3.53,0,0,1,.15.49,1.2,1.2,0,0,1,.1.51A3.31,3.31,0,0,1,122.45,22.61Z"/></g></g></svg>
</button>
<input type="hidden" name="action" value="fire_floater_form">
<input type="hidden" name="fire-id" value="<?php echo $id; ?>">
<input type="hidden" name="fire-counter" value="<?php echo $i; ?>">
</form>
        </div>
        </section>