<?php if(is_page_template() == "template-support.php") : ?>
<section class="header-image">
            <div class="big-wrapper">
                <img src="<?php echo esc_attr( get_post_meta( $id, 'meta-box-heroImage-image-'.get_the_ID(), true ) ); ?>" alt="">
            </div>
    <?php else: ?>
<section class="hero-image">
            <img src="<?php echo esc_attr( get_post_meta( $id, 'meta-box-heroImage-image-'.get_the_ID(), true ) ); ?>" alt="">
    <?php endif; ?>
</section>