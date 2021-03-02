
<?php 
    $j = $mystery['i'];
    $order = $mystery['order'];
    $ptype = $mystery['ptype'];
?>
<section id="<?php echo ($ptype == "page")? 'cloud-page' :'case-large-page'; ?>"  style="order:<?php echo $order; ?>">
<div class="two-sec">
    <div class="wrapper">
        <div class="row">
            <div class="col-md-5 page-desc">
                <div class="mag-wrap ">
                    <h1 class="display-6"><?php echo  get_post_meta($id, "meta-box-twoSec-title-".$id.$j,true); ?></h1>
                    <?php echo  get_post_meta($id, "meta-box-twoSec-content-".$id.$j,true); ?>
                </div>
            </div>
            <div class="col-md-7 page-pic">
                <div class="video-wrapper">
                <video class="video" poster="<?php echo esc_attr( get_post_meta( $id, 'meta-box-twoSec-image-'.$id.$j, true ) ); ?>" preload="none">
                    <source src="<?php echo esc_attr( get_post_meta( $id, 'meta-box-twoSec-video-'.$id.$j, true ) ); ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="playpause" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/cloud/play.png);"></div>
</div>
            </div>
        </div>
    </div>
    </div>
</section>

