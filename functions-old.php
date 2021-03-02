<?php
global $filter_post;
add_theme_support('post-thumbnails');    
add_image_size('large_thumb', 900, 500, true);
add_image_size('small_thumb', 250, 250, true);

//loading styles
function fire_css(){
    wp_register_style('main_css',get_template_directory_uri().'/assets/css/main.min.css',array() ,false, 'all');
    wp_enqueue_style('main_css');
    wp_register_style('styles',get_template_directory_uri().'/style.css',array(),false,'all');
    wp_enqueue_style('styles');
}

add_action('wp_enqueue_scripts','fire_css');

function fireEditor($id,$name){
    $settings = array( 'wpautop' => false, 'media_buttons' =>false,'tinymce' => false,'textarea_rows'=>4,'textarea_name' => $name );
    wp_editor( $id , $name ,$settings);
}

function strip($text){
    return strip_tags($text,'<br>');
}
//loading js
function fire_js(){
    wp_enqueue_script('jquery');
    wp_register_script('main_js',get_template_directory_uri().'/assets/js/main.js','jquery','v2',true);
    wp_enqueue_script('main_js');
    wp_register_script('mainc_js',get_template_directory_uri().'/assets/js/custom-front.js','jquery','v2',true);
    wp_enqueue_script('mainc_js');
}

add_action('wp_enqueue_scripts','fire_js');


function admin_js(){
    wp_register_script('custom_ck_jss',get_template_directory_uri().'/includes/ckeditor/ckeditor.js',false,true);
    wp_enqueue_script('custom_ck_jss');

    wp_register_script('editor_js',get_template_directory_uri().'/includes/admin/js/edit.js','jquery',false,true);
    wp_enqueue_script('editor_js');
    wp_register_script('popper_js','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js','jquery',false,true);
    wp_enqueue_script('popper_js');
    wp_register_script('bootstrap_js','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js','jquery',false,true);
    wp_enqueue_script('bootstrap_js');
}

add_action( 'admin_enqueue_scripts', 'admin_js' );
function wpa_scripts() {
    wp_enqueue_script(
        'fire_jss',
        get_template_directory_uri() . '/assets/js/fire_toggle.js',
        array('jquery'),
        null,
        true
    );
    $script_data = array(
        'image_path' => get_template_directory_uri() . '/assets/img/',
        'web_path'=> get_site_url(),
    );
    wp_localize_script(
        'fire_jss',
        'wpa_data',
        $script_data
    );
}
add_action( 'admin_enqueue_scripts', 'wpa_scripts' );
function admin_css(){

    wp_register_style('admin-styles',get_template_directory_uri().'/includes/admin-style.css',array(),'2.0','all');
    wp_enqueue_style('admin-styles');
    wp_register_style('visio',get_template_directory_uri().'/includes/main.min.css',array(),false,'all');
    wp_enqueue_style('visio');
}
add_action('admin_enqueue_scripts','admin_css');

function button_customize_set($id,$i,$type,$links,$texts,$condition = 0,$extra = 0)
{
    $add = ($extra != 0 )? $i.$extra: $i;
    $primary = esc_html(get_post_meta( $id, 'primarycolor-'.$type.$id.$add, true ));
    $primaryborder = esc_html(get_post_meta( $id, 'primarybordercolor-'.$type.$id.$add, true ));
    $color = esc_html(get_post_meta( $id, 'primarytextcolor-'.$type.$id.$add, true ));
    $hovercolor = esc_html(get_post_meta( $id, 'hovertextcolor-'.$type.$id.$add, true ));
    $hover = esc_html(get_post_meta( $id, 'hovercolor-'.$type.$id.$add, true ));
    $hoverborder = esc_html(get_post_meta( $id, 'hoverbordercolor-'.$type.$id.$add, true ));
    $transition = esc_html(get_post_meta( $id, 'button-transition-'.$type.$id.$add, true ));
    $background = esc_html(get_post_meta( $id, 'button-background-'.$type.$id.$add, true ));
?>
<a 
href="<?php echo ($condition == 2)? get_site_url()."/".get_the_title(get_post_meta( $id, $links.$id.$i, true )) : get_post_permalink(get_post_meta( $id, $links.$id.$i, true )); ?>" 
class="fr-button-link-global" 
style=" background:<?php echo ($background == "no")? 'transparent' : $primary; ?> !important;
        border-color:<?php echo $primaryborder; ?> !important;
        color:<?php echo $color; ?> !important;" 
onMouseOver="this.style.backgroundColor='<?php echo ($background == "no")? 'transparent' : $hover; ?> ';
             this.style.borderColor='<?php echo $hoverborder; ?>';
             <?php if($transition == "no"){  echo "this.style.padding='0.9375rem 6.75rem 0.9375rem 1.25rem';";} ?>
             this.style.color='<?php echo $hovercolor; ?>';
             this.children[1].style.fill='<?php echo $hovercolor; ?>'" 
onMouseOut="this.style.backgroundColor='<?php echo ($background == "no")? 'transparent' : $primary; ?> ';
            this.style.borderColor='<?php echo $primaryborder; ?>';
            this.style.color='<?php echo $color; ?>';
            this.children[1].style.fill='<?php echo $color; ?>'">
<div><?php echo get_post_meta( $id, $texts.$id.$i, true ); ?></div>
<svg xmlns="http://www.w3.org/2000/svg" style="fill:<?php echo $color; ?>;" viewBox="0 0 122.53 43.64"><title>arr</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M122.45,22.61l-.09.29a3.31,3.31,0,0,1-.12.42,3.06,3.06,0,0,1-.23.45l-.13.26a4.31,4.31,0,0,1-.49.62l-17,17.81a3.76,3.76,0,0,1-2.71,1.18A3.72,3.72,0,0,1,99,42.46a4.14,4.14,0,0,1,0-5.66l10.47-11H4A3.89,3.89,0,0,1,.21,23.16a4,4,0,0,1,3.61-5.35H109.45L99,6.84a4.16,4.16,0,0,1-.29-5.33v0L99,1.16a3.7,3.7,0,0,1,5.41,0l17,17.81a3.51,3.51,0,0,1,.48.6l.15.28c.07.11.13.25.19.37a3.53,3.53,0,0,1,.15.49,1.2,1.2,0,0,1,.1.51A3.31,3.31,0,0,1,122.45,22.61Z"/></g></g></svg>
</a>
<?php
}

function fire_drop_pages($lang,$id,$name,$selected){
    $pages = get_pages(); ?>
    <select id="<?php echo $id; ?>" name="<?php echo $name; ?>">
    <?php
    foreach ( $pages as $page ) {
        if(pll_get_post_language($page->ID,'locale') == $lang){
        ?>
        <option value="<?php echo $page->ID; ?>" <?php echo ($selected == $page->ID)? 'selected' : ''; ?>><?php echo $page->post_title; ?></option>
        <?php
    }}
    ?>
    </select>
    <?php
}
// function enqueue_scripts() {

// 	 $params = array ( 'ajaxurl' => admin_url( 'admin-ajax.php' ) );
// 	wp_enqueue_script( 'nds_ajax_handle', get_template_directory_uri().'/assets/js/fire-ajax-form.js', array( 'jquery' ), false );				
// 	wp_localize_script( 'nds_ajax_handle', 'params', $params );		

// }
// add_action('wp_enqueue_scripts','enqueue_scripts');

// add_action ( 'admin_enqueue_scripts', function () {
//     if (is_admin ())
//         wp_enqueue_media ();
// } );

//
//require get_template_directory() . '/includes/class/duplicate.php';


require get_template_directory() . '/includes/class/class-navigation.php';

// require get_template_directory() . '/includes/class/handle-ajax.php';
require get_template_directory() . '/includes/class/class-custom-meta-boxes.php';

require get_template_directory() . '/includes/class/class-custom-post.php';

 require get_template_directory() . '/includes/class/class-custom-widgets.php';



// require get_template_directory() . '/includes/class/class-fire-page-builder.php';



function prefix_send_email_to_admin() {
    /**
     * At this point, $_GET/$_POST variable are available
     *
     * We can do our normal processing here
     */ 

    // Sanitize the POST field
    // Generate email content
    // Send to appropriate email
    $url = $_POST["fire-cb"];
    // if( isset( $_POST['ajaxrequest'] ) && $_POST['ajaxrequest'] === 'true' ):
        if (isset($_POST["fr-front-nonce"]) || wp_verify_nonce($_POST["fr-front-nonce"], basename(__FILE__))):

            if(isset($_POST["fire-id"])):
                $id =  $_POST["fire-id"];
                $c = (get_post_meta($id, "meta-box-fr-forms-lists-".$id,true)) ? get_post_meta($id, "meta-box-fr-forms-lists-".$id,true) : 0;
                for($i = 0; $i < $_POST["fire-count"] ; $i++):
                    $name = esc_html(get_post_meta($id, "meta-box-fr-forms-name".$i."-".$id, true));
                    if(isset($_POST[$name]))
                        update_post_meta($id, "meta-box-fr-front-".$name.$c."-".$id, $_POST[$name]);
                endfor;
                $c++;
                update_post_meta($id, "meta-box-fr-forms-lists-".$id, $c);
            endif;
                    wp_safe_redirect(
                        esc_url_raw(
                            add_query_arg( 'pc_stats', 'success', $url)
                        )
                    );
                    exit();
        // endif;
    else:
        wp_safe_redirect(
            esc_url_raw(
                add_query_arg( 'pc_stats', 'error', $url )
            )
        );
        exit();
    endif;
}
 add_action( 'admin_post_nopriv_contact_form', 'prefix_send_email_to_admin');
 add_action( 'admin_post_contact_form', 'prefix_send_email_to_admin');

// add_action( 'wp_ajax_nopriv_contact_form','prefix_send_email_to_admin');
// add_action( 'wp_ajax_contact_form','prefix_send_email_to_admin');
// function that runs when shortcode is called
function FIRE_FORM_FRONT($atts) { 

    extract( shortcode_atts( array (
        'fire_id' => ''
     ), $atts ) );
    // Things that you want to do. 
    $post_id =  $atts['fire_id'];
    $count = esc_html(get_post_meta($post_id, "meta-box-fr-form-list-count-".$post_id, true));
    $action = get_post_meta($post_id, "meta-box-fr-forms-action-".$post_id, true);
    $oid = esc_html(get_post_meta($post_id, "meta-box-fr-forms-oid-".$post_id, true));
        $retu = esc_html(get_post_meta($post_id, "meta-box-fr-forms-return-".$post_id, true));
    $design = esc_html(get_post_meta($post_id, "meta-box-fr-forms-design-".$post_id, true));
    $capt = esc_html(get_post_meta($post_id, "meta-box-fr-forms-captcha-".$post_id, true));
    $siteKey = esc_html(get_post_meta($post_id, "meta-box-fr-forms-siteKey-".$post_id, true));
    $embed = esc_html(get_post_meta($post_id, "meta-box-fr-forms-embed-".$post_id, true));
    $res = ' ';
    if($design == 'dark'){
        $ied = "footer-form";
        $x_class = "form-v bg-hard-black";
        $btn_class = "fr-button-link-global-dark";
        if(get_post_meta($post_id,"meta-box-fr-forms-title-".$post_id, true) != null) {
            $res .= '
            <h1 class="display-1 m-30">
            '.get_post_meta($post_id,"meta-box-fr-forms-title-".$post_id, true).'
            </h1>';
        }
            $suces = "bs-callout bs-callout-info-footer";
    }
    else{
        $ied = "demo-form";
        $x_class = " ";
        $btn_class = "fr-button-link-global-default";
        if(get_post_meta($post_id,"meta-box-fr-forms-title-".$post_id, true) != null) {
            $res .= '
            <h2 class="display-6 l-10 fg-brown bs-main form-tap">
                '.get_post_meta($post_id,"meta-box-fr-forms-title-".$post_id, true).'
            </h2>
            ';
        }
            $suces = "bs-callout bs-callout-info-footer";
    }
    if(get_post_meta($post_id,"meta-box-fr-forms-stitle-".$post_id, true) != null) {
    $res .= '
    <h5 class="display-2 work-sans m-30">
    '.get_post_meta($post_id,"meta-box-fr-forms-stitle-".$post_id, true).'
    </h5>
    ';
    }
    if(get_post_meta($post_id,"meta-box-fr-forms-atitle-".$post_id, true) != null) {
        $res .= '  
        <div class="'.$suces.' hidden">
    <h2 class="display-6 l-10 fg-brown form-titles">
    '.get_post_meta($post_id,"meta-box-fr-forms-atitle-".$post_id, true).'</h2>
    </div>
        ';
    }

    $tar = ($embed == 'mailchimp')? 'target = "_blank"' : ' ';
    $res .= '<form id="'.$ied.'" action="'.$action.'" data-parsley-validate="" data-parsley-focus="none" method="POST" '.$tar.' >'.wp_nonce_field(basename(__FILE__), "fr-front-nonce").'';
    if($capt !== ' '){
        $res .= '
        <input type=hidden name="captcha_settings" value="'.$capt.'">
        ';
    }
    $res .= '
<input type=hidden name="oid" value="'.$oid.'">
<input type=hidden name="retURL" value="'.$retu.'">';
     if ($count > 0) {
        for($i = 0; $i < $count ; $i++):

            $req = (esc_html(get_post_meta($post_id, "meta-box-fr-forms-required".$i."-".$post_id, true))) ? 'required' : ' ';
            $ast = ($req != ' ') ? "*" : " ";
            $type = esc_html(get_post_meta($post_id, "meta-box-fr-forms-type".$i."-".$post_id, true));
            $place = esc_html(get_post_meta($post_id, "meta-box-fr-forms-placeholder".$i."-".$post_id, true));
            $name = esc_html(get_post_meta($post_id, "meta-box-fr-forms-name".$i."-".$post_id, true));
            $ids = esc_html(get_post_meta($post_id, "meta-box-fr-forms-id".$i."-".$post_id, true));
            switch($type){
                case "textarea":
                    $res .= '<div class="row field-col">
                <textarea rows="5" class="form-control '.$x_class.'" placeholder=" " id = "'.$name.'" name = "'.$name.'" '.$req.' ></textarea>
                <label for="'.$name.'">'.$place.$ast.'</label>
            </div>';
                break;
                case "select-one":
                    $res .= '<div class="row field-col">
                <select rows="5" class="form-control '.$x_class.'" placeholder=" " id = "'.$ids.'" name = "'.$name.'"  '.$req.' >'
                    .get_post_meta($post_id, "meta-box-fr-forms-options".$i."-".$post_id, true).'
                </select>
                <label for="'.$ids.'">'.$place.$ast.'</label>
            </div>';  
                break;
                default:
                $tab_value = get_post_meta( $post_id, "meta-box-fr-forms-tabbed".$i."-".$post_id, true );
                if($embed == 'mailchimp' && $tab_value != NULL ){
                $res .= ' 
            		<div class="response" id="mce-error-response" style="display:none"></div>
            		<div class="response" id="mce-success-response" style="display:none"></div>
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="'.$tab_value.'" tabindex="-1" value=""></div>';
                }
                else{
                    $res.='
                    <div class="row field-col">
                        <input type="'.$type.'" class="form-control '.$x_class.'" placeholder=" "  id = "'.$ids.'" name = "'.$name.'" data-parsley-trigger="focusout"'.$req.'>
                        <label for="'.$name.'">'.$place.$ast.'</label>
                    </div>
                    ';
                }
                break;
            }
        endfor;
    }
    global $wp;
    $res .= '     
        <input type="hidden" name="fire-id" value="'.$post_id.'">
        <input type="hidden" name="fire-count" value="'.$count.'">
        <input type="hidden" name="fire-cb" value="'.home_url($wp->request).'">
        <div class="display-13 end-form">'.esc_html(get_post_meta($post_id,"meta-box-fr-forms-etitle-".$post_id,true )).'</div>  
        <input type="hidden" name="action" value="contact_form">';
        if($capt !== ' '){
    $res .= '<div class="g-recaptcha" data-sitekey="'.$siteKey.'"></div>';
        }
        
    $res.= '
    <button 
    class="'.$btn_class.'" 
                type="submit"
                name="submit" 
                value="Send">
    <div>'.get_post_meta( $post_id, "meta-box-fr-forms-btext-".$post_id, true ).'</div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.53 43.64"><title>arr</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M122.45,22.61l-.09.29a3.31,3.31,0,0,1-.12.42,3.06,3.06,0,0,1-.23.45l-.13.26a4.31,4.31,0,0,1-.49.62l-17,17.81a3.76,3.76,0,0,1-2.71,1.18A3.72,3.72,0,0,1,99,42.46a4.14,4.14,0,0,1,0-5.66l10.47-11H4A3.89,3.89,0,0,1,.21,23.16a4,4,0,0,1,3.61-5.35H109.45L99,6.84a4.16,4.16,0,0,1-.29-5.33v0L99,1.16a3.7,3.7,0,0,1,5.41,0l17,17.81a3.51,3.51,0,0,1,.48.6l.15.28c.07.11.13.25.19.37a3.53,3.53,0,0,1,.15.49,1.2,1.2,0,0,1,.1.51A3.31,3.31,0,0,1,122.45,22.61Z"/></g></g></svg>
    </button></form>
    ';

    // Output needs to be return
    return $res;
    } 
    // register shortcode
    add_shortcode('pc_form', 'FIRE_FORM_FRONT'); 


    add_action('admin_menu', 'wpdocs_register_my_custom_submenu_page');
 
function wpdocs_register_my_custom_submenu_page() {
    add_submenu_page(
        'edit.php?post_type=fire_forms',
        'Entries',
        'Entries',
        'manage_options',
        'entries',
        'wpdocs_my_custom_submenu_page_callback' );
}
 
function wpdocs_my_custom_submenu_page_callback() {

    echo '<div class="wrap"><div id="icon-tools" class="icon32"></div>';
        echo '<h2>Entries</h2>';
    echo '</div>';

    $args = array('post_type' => 'fire_forms','posts_per_page' => -1, 'order' => 'ASC');
    $the_query = new WP_Query($args);
    $arr = array();
    if ($the_query->have_posts()) :
        $res = '
            <form id="entry_fire" action ="'.admin_url( '/edit.php?post_type=fire_forms&page=entries&' ).'" method="POST" >
                <select id="f_o" name="oh">
        ';

         while ($the_query->have_posts()) : $the_query->the_post();
                $res .= '<option value="'.get_the_ID().'">'.get_the_title().'</option>';
                array_push($arr,get_the_ID());
        endwhile;
    endif;
    $res .= '</select>
            <input type="submit" id="d_S" name="d_S" value="filter" >
            </form>';

    $post_id = (isset($_GET['d'])) ? $_GET['d'] : 263;
    $count = esc_html(get_post_meta($post_id, "meta-box-fr-form-list-count-".$post_id, true));
    $res .= '
    <table class="wp-list-table widefat fixed striped posts">
    <thead>
        <tr>
            ';
    for($i = 0 ; $i < $count; $i++):
        $res .= '<th >'.get_post_meta($post_id, "meta-box-fr-forms-placeholder".$i."-".$post_id, true).'</th>';
    endfor;

     $res.='
        </tr>
    </thead>
    <tbody>';
        $c = get_post_meta($post_id, "meta-box-fr-forms-lists-".$post_id,true);
        while ($c > 0){
            $c--;
        $res .= "<tr>";
        for($i = 0 ; $i < $count; $i++):
            $name = esc_html(get_post_meta($post_id, "meta-box-fr-forms-name".$i."-".$post_id, true));
            $res .= '<td>'.get_post_meta($post_id, "meta-box-fr-front-".$name.$c."-".$post_id, true).'</td>';
        endfor;
        $res .= "</tr>";
        }
        $res .= '

    </tbody>
    </table>
    ';
    echo $res;

    if(isset($_POST['d_S'])){
        
    }
}

//dashboard

// Remove dashboard widgets
function remove_dashboard_meta() {
	if ( current_user_can( 'manage_options' ) ) {
		remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
        remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal');
	}
}
add_action( 'admin_init', 'remove_dashboard_meta' ); 


/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function wpexplorer_add_dashboard_widgets() {
	wp_add_dashboard_widget(
		'wpexplorer_dashboard_widget', // Widget slug.
		'Cases', // Title.
		'wpexplorer_dashboard_widget_function' // Display function.
    );

    wp_add_dashboard_widget(
		'wpexplorer_dashboard_widget2', // Widget slug.
		'News', // Title.
		'wpexplorer_dashboard_widget_function2' // Display function.
    );
    wp_add_dashboard_widget(
		'wpexplorer_dashboard_widget3', // Widget slug.
		'Testimonial', // Title.
		'wpexplorer_dashboard_widget_function3' // Display function.
	);
}
function wpexplorer_add_dashboard_widgets1() {

	wp_add_dashboard_widget(
		'wpexplorer_dashboard_widget1', // Widget slug.
		'Show', // Title.
		'wpexplorer_dashboard_widget_function1' // Display function.
    );

}
add_action( 'wp_dashboard_setup', 'wpexplorer_add_dashboard_widgets' );
add_action( 'wp_dashboard_setup', 'wpexplorer_add_dashboard_widgets1','normal');
/**
 * Create the function to output the contents of your Dashboard Widget.
 */
function wpexplorer_dashboard_widget_function() {
	echo "Hello there, I'm a great Dashboard Widget. Edit me!";
}
function wpexplorer_dashboard_widget_function1() {
	echo "Hello there, I'm a great Dashboard Widget. Edit me!";
}
function wpexplorer_dashboard_widget_function2() {
	echo "Hello there, I'm a great Dashboard Widget. Edit me!";
}
function wpexplorer_dashboard_widget_function3() {
	echo "Hello there, I'm a great Dashboard Widget. Edit me!";
}


//extra functions
function fire_ck_input($id){
    echo "
    <script>
    CKEDITOR.inline( $id );
    </script>
        ";
}

function ck_all(){
    echo "
<script>
CKEDITOR.disableAutoInline = true;
CKEDITOR.inlineAll( );
</script>
    "; 
}


//search
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
?>
<script type="text/javascript">
function fetch(){

    jQuery.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'post',
        data: { action: 'data_fetch', keyword: jQuery('#keyword').val() },
        success: function(data) {
            jQuery('#datafetch').html( data );
        }
    });

}
</script>

<?php
}
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){

    $the_query = new WP_Query( array( 'posts_per_page' => -1, 's' => esc_attr( $_POST['keyword'] ), 'post_type' => array('post','page','fire_product','fire_cases','fire_news') ) );
    if( $the_query->have_posts() ) :
        while( $the_query->have_posts() ): $the_query->the_post(); ?>
                <div class="row card-long-v">
                <div class="col-md-2 card-long-img p-0">
                      <img class="w-100" src="<?php echo (get_the_post_thumbnail_url())? get_the_post_thumbnail_url() : get_template_directory_uri().'/assets/img/images.png' ;?>">
                   </div>
                   <div class="col-md-8">
                      <h1 class="display-5">
                      <?php echo esc_html(get_the_title()); ?>
                      </h1>
                      <p class="display-2 work-sans">
                      <?php echo esc_html(get_the_excerpt()); ?>
                      </p>
                   </div>
                   <div class="col-md-2">
                   <a href="<?php echo esc_url( post_permalink() ); ?>">
                      <i class="fas fa-chevron-right"></i>
                      </a>
                   </div>
                </div>
        <?php endwhile;
        wp_reset_postdata();  
    endif;

    die();
}

function my_excerpt_length($length){
    return $length;
    }
add_filter('excerpt_length', 'my_excerpt_length',10,1);

function get_excerpt( $id, $count ) {
    $excerpt = get_the_excerpt($id);
    $excerpt = $excerpt;
    $excerpt = substr($excerpt, 0, $count);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = $excerpt.'(...)';
    return $excerpt;
    }
    add_action( 'init', function() {
        remove_post_type_support( 'page', 'editor' );
        remove_post_type_support( 'page', 'author' );
        remove_post_type_support( 'page', 'comments' );
        remove_post_type_support( 'page', 'postbox' );
    }, 99);
    function remove_custom_meta_form() {

        remove_meta_box( 'postcustom', 'page', 'normal' );
    }
    add_action( 'admin_menu' , 'remove_custom_meta_form' );
 

function archive_to_custom_archive() {
    if( is_archive('cases') ) {
        flush_rewrite_rules();
    }
}
add_action( 'template_redirect', 'archive_to_custom_archive' );

function delete_useless_post_meta() {
   global $wpdb;
   $table = $wpdb->prefix.'postmeta';
   $wpdb->delete ($table, array('meta_key' => '_edit_last'));
   $wpdb->delete ($table, array('meta_key' => '_edit_lock'));
   $wpdb->delete ($table, array('meta_key' => '_wp_old_slug')); }
add_action('wp_logout','delete_useless_post_meta');
?>