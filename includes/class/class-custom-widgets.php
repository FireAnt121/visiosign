<?php

function arphabet_widgets_init() {

  register_sidebar( array(
      'name' => 'Header Top Right',
      'id' => 'home_right_1',
      'before_widget' => '<div class="fr-changed">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="rounded">',
      'after_title' => '</h2>',
  ) );
  register_sidebar( array(
      'name' => 'Header Top Left',
      'id' => 'home_right_2',
      'before_widget' => '<div class="fr-changed">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="rounded">',
      'after_title' => '</h2>',
  ) );
    register_sidebar( array(
      'name' => 'Mobile Language Switcher',
      'id' => 'mobile_switcher_nav',
      'before_widget' => '<div class="fr-changed">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="rounded">',
      'after_title' => '</h2>',
  ) );
  register_sidebar( array(
    'name' => 'Footer Left',
    'id' => 'footer_left',
    'before_widget' => '<div class="fr-changed">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rounded">',
    'after_title' => '</h2>',
  ) );
  register_sidebar( array(
    'name' => 'Footer End Top',
    'id' => 'footer_end',
    'before_widget' => '<div class="fr-changed">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rounded">',
    'after_title' => '</h2>',
  ) );
  register_sidebar( array(
    'name' => 'Footer End Bottom',
    'id' => 'footer_end_bot',
    'before_widget' => '<div class="fr-changed">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rounded">',
    'after_title' => '</h2>',
  ) );
  register_sidebar( array(
    'name' => 'Footer Mid',
    'id' => 'footer_mid',
    'before_widget' => '<div class="fr-changed">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rounded">',
    'after_title' => '</h2>',
  ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

class Visio_Link extends WP_Widget {
  /**
  * To create the Visio Link all four methods will be 
  * nested inside this single instance of the WP_Widget class.
  **/

  public function __construct() {
    $widget_options = array( 
      'classname' => 'visio_link',
      'description' => 'This is an Visio Support Link',
    );
    parent::__construct( 'visio_link', 'Visio Support Link', $widget_options );
  }

  public function widget( $args, $instance ) {

    $image = ! empty( $instance['image'] ) ? $instance['image'] : '';
    $page = ! empty( $instance['page'] ) ? $instance['page'] : '';
  ?>
  
  <a class="nav-link d-block" href="<?php echo get_the_permalink($page);?>">
                   <img src="<?php echo $image; ?>">
                   <span class="pb-1"><?php echo get_the_title($page);?></span>
  </a>
  
    <?php 
  }
  public function form( $instance ) {

    $image = ! empty( $instance['image'] ) ? $instance['image'] : '';
    $page = ! empty( $instance['page'] ) ? $instance['page'] : ''; ?>
        <p>
    <fieldset>
		<div>
			<input type="text" class="large-text" name="<?php echo $this->get_field_name( 'image' ); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>" value="<?php echo $image; ?>">
			<button type="button" class="button " id="imedia-widget<?php echo $this->get_field_name( 'image' ); ?>" data-media-images="#r" data-media-uploader-target="#<?php echo $this->get_field_id( 'image' ); ?>">Upload</button>
		</div>
	</fieldset>
 </p>
	<label for="<?php echo $this->get_field_id( 'page' ); ?>">Select a link for the page</label> 
	<?php wp_dropdown_pages( array(
									'name' => $this->get_field_name( 'page' ) ,
									'id' => $this->get_field_id( 'page' ),
									'selected' => $page
								));?>
<?php 
  
  }
  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance[ 'image' ] = strip_tags( $new_instance[ 'image' ] );
    $instance[ 'page' ] = strip_tags( $new_instance[ 'page' ] );
    return $instance;
  }
}

function visio_link_widget() { 
    register_widget( 'Visio_Link' );
  }
  add_action( 'widgets_init', 'visio_link_widget' );

  class Visio_shortcode extends WP_Widget {
    /**
    * To create the Visio Link all four methods will be 
    * nested inside this single instance of the WP_Widget class.
    **/
  
    public function __construct() {
      $widget_options = array( 
        'classname' => 'visio_shortcode',
        'description' => 'This is an Visio Support shortcode',
      );
      parent::__construct( 'visio_shortcode', 'Visio Support shortcode', $widget_options );
    }
  
    public function widget( $args, $instance ) {
  
      $image = ! empty( $instance['image'] ) ? $instance['image'] : '';
    ?>
    
    <?php echo do_shortcode($image); ?>
      <?php 
    }
    public function form( $instance ) {
  
      $image = ! empty( $instance['image'] ) ? $instance['image'] : ''; ?>
          <p>
        <input type="text" class="large-text" name="<?php echo $this->get_field_name( 'image' ); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>" value="<?php echo $image; ?>">
    <?php 
    
    }
    public function update( $new_instance, $old_instance ) {
      $instance = $old_instance;
      $instance[ 'image' ] = strip_tags( $new_instance[ 'image' ] );
      return $instance;
    }
  }
  
  function visio_shortcode_widget() { 
      register_widget( 'Visio_shortcode' );
    }
    add_action( 'widgets_init', 'visio_shortcode_widget' );
  


  class Visio_editor extends WP_Widget {
    /**
    * To create the Visio Link all four methods will be 
    * nested inside this single instance of the WP_Widget class.
    **/
  
    public function __construct() {
      $widget_options = array( 
        'classname' => 'visio_editor',
        'description' => 'This is an Visio editor',
      );
      parent::__construct( 'visio_editor', 'Visio editor', $widget_options );
    }
  
    public function widget( $args, $instance ) { 
      $number = 2; 
      $page = array();
      for($i = 1; $i <= $number; $i++){
      $page[$i] = ! empty( $instance['page'.$i] ) ? $instance['page'.$i] : '';
      }
      global $post;
      $pattern = '/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i'; ?>
      <div class="col-xs-2 col-sm-2">
                <nav>
                   <div class="nav fr-footer-flag nav-fill" id="nav-tab" role="tablist">
                     <?php if($post->ID != $page[1] && $post->ID != $page[2]): ?>
                   <?php $languages = pll_languages_list(array('fields'=>'locale')); 
                        foreach($languages as $language):
                           $lang = explode('_',$language);?>
                     <a class="nav-item country-fit nav-link <?php echo (pll_current_language('locale') == $language)? 'active' : '' ;?>" id="nav-profile-tab" data-toggle="tab" href="#nav-<?php echo $language; ?>" role="tab" aria-controls="nav-<?php echo $language; ?>" aria-selected="false"><img src="https://www.countryflags.io/<?php echo (count($lang) > 1)? $lang[1] : $lang[0];?>/flat/48.png"><?php echo (count($lang) > 1)? $lang[1] : $lang[0];?></a>
                        <?php endforeach; ?>
                        <?php else:
                              $number = 2; 
                              for($i = 1; $i <= $number; $i++){  
                                if($page[$i] == $post->ID){
                          $translationss = pll_get_post_translations($page[$i]);
  
                          foreach($translationss as $l => $idd): 
                            $language = pll_get_post_language($idd,'locale');
                            $langu = explode('_',pll_get_post_language($idd,'locale'));?>
                     <a class="nav-item country-fit nav-link <?php echo (pll_current_language('locale') == $language)? 'active' : '' ;?>" id="nav-profile-tab" data-toggle="tab" href="#nav-<?php echo $language; ?>" role="tab" aria-controls="nav-<?php echo $language; ?>" aria-selected="false"><img src="https://www.countryflags.io/<?php echo (count($langu) > 1)? $langu[1] : $langu[0];?>/flat/48.png"><?php echo (count($langu) > 1)? $langu[1] : $langu[0];?></a>
                          <?php endforeach;
                          }
                        }?>
                        <?php endif;?>

                  </div>
                 </nav>
                </div>
                <div class="col-xs-10 col-sm-10">
                 <div class="tab-content pb-3 px-3 px-sm-0" id="nav-tabContent">
                 <?php if($post->ID != $page[1] && $post->ID != $page[2]): ?>
                      <?php foreach($languages as $language): 
                            $edit = ! empty( $instance['footer_editor'.$language] ) ? $instance['footer_editor'.$language] : '';
                            $title = ! empty( $instance['footer_title'.$language] ) ? $instance['footer_title'.$language] : '';
                              preg_match($pattern, $edit, $matches);
                              $final = preg_replace($pattern,'<span class="fg-brown">'.$matches[0].'</span>',$edit);
                              ?>
                                  <div class="tab-pane fade <?php echo (pll_current_language('locale') == $language)? 'active show' : '' ;?>" id="nav-<?php echo $language?>" role="tabpanel" aria-labelledby="nav-home-tab">
                                      <h1 class="display-1 m-30"><?php echo $title;?></h1> 
                                      <h5 class="display-2"><?php echo $final; ?></h5>
                                  </div>
                      <?php endforeach; ?>
                      <?php else: 
                                    $number = 2; 
                                    for($i = 1; $i <= $number; $i++){
                                      if($page[$i] == $post->ID){
                                $translationss = pll_get_post_translations($page[$i]);
                                print_r($translationss);
                                foreach($translationss as $l => $idd): 
                                  $edit = ! empty( $instance['footer_editor2'.$idd.$i] ) ? $instance['footer_editor2'.$idd.$i] : '';
                                  $title = ! empty( $instance['footer_title2'.$idd.$i] ) ? $instance['footer_title2'.$idd.$i] : '';
                                  preg_match($pattern, $edit, $matches);
                                  $language = pll_get_post_language($idd,'locale');
                                  $final = preg_replace($pattern,'<span class="fg-brown">'.$matches[0].'</span>',$edit)?>

<div class="tab-pane fade <?php echo (pll_current_language('locale') == $language)? 'active show' : '' ;?>" id="nav-<?php echo $language?>" role="tabpanel" aria-labelledby="nav-home-tab">
                      <h1 class="display-1 m-30"><?php echo $title;?></h1> 
                      <h5 class="display-2"><?php echo $final; ?></h5>
                   </div>
                                <?php endforeach;
                                }}?>
      <?php endif; ?>
                  </div>
                </div>

      <?php 
    }
    public function form( $instance ) {
    ?>
   <p>

        <?php $number = 2; ?>
        <?php for($i = 1; $i <= $number; $i++){
        $page[$i] = ! empty( $instance['page'.$i] ) ? $instance['page'.$i] : ''; 
        } ?>
        <?php 
    $translations = pll_languages_list(array('fields'=>'locale')); ?>
    <?php foreach($translations as $trans): 
        $edit = ! empty( $instance['footer_editor'.$trans] ) ? $instance['footer_editor'.$trans] : '';
        $title = ! empty( $instance['footer_title'.$trans] ) ? $instance['footer_title'.$trans] : '';

        $lang = explode('_',$trans);?>
      <p>
        <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'footer_title'.$trans ); ?>" name='<?php echo $this->get_field_name( 'footer_title'.$trans ); ?>' value="<?php echo $title;?>">
      <label for="<?php echo $this->get_field_id( 'footer_editor'.$trans ); ?>">Content for <?php echo $trans;?> <img src="https://www.countryflags.io/<?php echo (count($lang) > 1)? $lang[1] : $lang[0];?>/flat/24.png"></label>
          <textarea class="widefat" contenteditable="true" rows="10" id="<?php echo $this->get_field_id( 'footer_editor'.$trans ); ?>" name='<?php echo $this->get_field_name( 'footer_editor'.$trans ); ?>' ><?php echo $edit; ?></textarea>
      </p>
    <?php endforeach; ?>
    <?php $number = 2; ?>
    <?php for($i = 1; $i <= $number; $i++){ ?>
    <label for="<?php echo $this->get_field_id( 'page'.$i ); ?>">Select a link for the specific page</label> 
	<?php wp_dropdown_pages( array(
									'name' => $this->get_field_name( 'page'.$i ) ,
									'id' => $this->get_field_id( 'page'.$i ),
                  'selected' => $page[$i],
                  'post_status' => [ 'publish', 'draft' ]
                ));
                $defaultLanguage = pll_default_language();

$translationss = pll_get_post_translations($page[$i]);
 foreach($translationss as $l => $idd): 
  echo $l.'-'.$idd;
  $edit = ! empty( $instance['footer_editor2'.$idd.$i] ) ? $instance['footer_editor2'.$idd.$i] : '';
  $title = ! empty( $instance['footer_title2'.$idd.$i] ) ? $instance['footer_title2'.$idd.$i] : '';
  $langu = explode('_',pll_get_post_language($idd,'locale'));
 ?>
  <p>
  <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'footer_title2'.$idd.$i ); ?>" name='<?php echo $this->get_field_name( 'footer_title2'.$idd.$i ); ?>' value="<?php echo $title;?>">
<label for="<?php echo $this->get_field_id( 'footer_editor2'.$idd.$i ); ?>">Content for <?php echo $l;?> <img src="https://www.countryflags.io/<?php echo (count($langu) > 1)? $langu[1] : $langu[0];?>/flat/24.png"></label>
    <textarea class="widefat" contenteditable="true" rows="10" id="<?php echo $this->get_field_id( 'footer_editor2'.$idd.$i); ?>" name='<?php echo $this->get_field_name( 'footer_editor2'.$idd.$i ); ?>' ><?php echo $edit; ?></textarea>
</p>
 <?php endforeach;
?>
<?php }?>
   </p>
    <?php 
    
    }
    public function update( $new_instance, $old_instance ) {
      $instance = $old_instance;
      $translations = pll_languages_list(array('fields'=>'locale'));
      foreach($translations as $trans):
        $instance[ 'footer_editor'.$trans ] = $new_instance[ 'footer_editor'.$trans ];
        $instance[ 'footer_title'.$trans ] = $new_instance[ 'footer_title'.$trans ];
      endforeach; 
      $number = 2; 
      for($i = 1; $i <= $number; $i++){
      $instance[ 'page'.$i ] = strip_tags( $new_instance[ 'page'.$i ] );

        $translationss = pll_get_post_translations($instance[ 'page'.$i ]);
        foreach($translationss as $trans => $idd):
          $instance[ 'footer_editor2'.$idd.$i ] = $new_instance[ 'footer_editor2'.$idd.$i ];
          $instance[ 'footer_title2'.$idd.$i ] = $new_instance[ 'footer_title2'.$idd.$i ];
        endforeach; 
      }
      return $instance;
    }
  }
  
  function visio_editor_widget() { 
      register_widget( 'Visio_editor' );
    }
    add_action( 'widgets_init', 'visio_editor_widget' );


  class Visio_List extends WP_Widget {
      /**
      * To create the Visio Link all four methods will be 
      * nested inside this single instance of the WP_Widget class.
      **/
    
      public function __construct() {
        $widget_options = array( 
          'classname' => 'visio_list',
          'description' => 'This is an Visio Footer list',
        );
        parent::__construct( 'visio_list', 'Visio Footer Link', $widget_options );
      }
    
      public function widget( $args, $instance ) {
              $translations = pll_languages_list(array('fields'=>'locale')); ?>
                            <ul class="list-v p-0">
        <?php foreach($translations as $trans): 
                  $lang = ! empty( $instance['lang'.$trans] ) ? $instance['lang'.$trans] : '';
                  $name = ! empty( $instance['name'.$trans] ) ? $instance['name'.$trans] : '';
                  $page = ! empty( $instance['page'.$trans] ) ? $instance['page'.$trans] : ''; 
                  $name2 = ! empty( $instance['name2'.$trans] ) ? $instance['name2'.$trans] : '';
                  $page2 = ! empty( $instance['page2'.$trans] ) ? $instance['page2'.$trans] : ''; ?>
              <?php if($trans == pll_current_language('locale')): ?>
                   <li ><a href="<?php echo get_the_permalink($page);?>" class="display-2 work-sans "><?php echo $name; ?></a></li>
                   <li ><a href="<?php echo get_the_permalink($page2);?>" class="display-2 work-sans "><?php echo $name2; ?></a></li>
              <?php endif; ?>
        <?php endforeach; ?>
        </ul>
        <?php 
      }
      public function form( $instance ) {
        $translations = pll_languages_list(array('fields'=>'locale')); ?>
        <?php foreach($translations as $trans): 
        $name = ! empty( $instance['name'.$trans] ) ? $instance['name'.$trans] : '';
        $page = ! empty( $instance['page'.$trans] ) ? $instance['page'.$trans] : ''; 
        $lang = ! empty( $instance['lang'.$trans] ) ? $instance['lang'.$trans] : ''; 
        $name2 = ! empty( $instance['name2'.$trans] ) ? $instance['name2'.$trans] : '';
        $page2 = ! empty( $instance['page2'.$trans] ) ? $instance['page2'.$trans] : ''; 
        $lang = explode('_',$trans);?>
      <input type="hidden" class="widefat" name="<?php echo $this->get_field_name( 'lang'.$trans ); ?>" id="<?php echo $this->get_field_id( 'lang'.$trans ); ?>" value="<?php echo $name; ?>">

      <label for="<?php echo $this->get_field_id( 'page'.$trans ); ?>">Content for <?php echo $trans;?> <img src="https://www.countryflags.io/<?php echo (count($lang) > 1)? $lang[1] : $lang[0];?>/flat/24.png"></label>
     <br> 
     <?php fire_drop_pages($trans,$this->get_field_id( 'page'.$trans ),$this->get_field_name( 'page'.$trans ),$page); ?>
                <p>
          <input type="text" class="widefat" name="<?php echo $this->get_field_name( 'name'.$trans ); ?>" id="<?php echo $this->get_field_id( 'name'.$trans ); ?>" value="<?php echo $name; ?>">
     </p>
     <?php fire_drop_pages($trans,$this->get_field_id( 'page2'.$trans ),$this->get_field_name( 'page2'.$trans ),$page2); ?>
                <p>
          <input type="text" class="widefat" name="<?php echo $this->get_field_name( 'name2'.$trans ); ?>" id="<?php echo $this->get_field_id( 'name2'.$trans ); ?>" value="<?php echo $name2; ?>">
     </p>
    <?php 
    endforeach;
      }
      public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $translations = pll_languages_list(array('fields'=>'locale'));
      foreach($translations as $trans): 

        $instance[ 'name'.$trans ] = strip_tags( $new_instance[ 'name'.$trans ] );
        $instance[ 'page'.$trans ] = strip_tags( $new_instance[ 'page'.$trans ] );
        $instance[ 'name2'.$trans ] = strip_tags( $new_instance[ 'name2'.$trans ] );
        $instance[ 'page2'.$trans ] = strip_tags( $new_instance[ 'page2'.$trans ] );
        $instance[ 'lang'.$trans ] = strip_tags( $new_instance[ 'lang'.$trans ] );
      endforeach;
        return $instance;
      }
    }
    
    function visio_list_widget() { 
        register_widget( 'Visio_list' );
      }
      add_action( 'widgets_init', 'visio_list_widget' );

      class Visio_social extends WP_Widget {
        /**
        * To create the Visio Link all four methods will be 
        * nested inside this single instance of the WP_Widget class.
        **/
      
        public function __construct() {
          $widget_options = array( 
            'classname' => 'visio_social',
            'description' => 'This is an Visio social',
          );
          parent::__construct( 'visio_social', 'Visio social', $widget_options );
        }
      
        public function widget( $args, $instance ) {   ?>
          <ul class="social-links">
          <?php for($t = 0; $t < 3 ;$t++): 
                      $icon = ! empty( $instance['footer_icon'.$t] ) ? $instance['footer_icon'.$t] : '';
                      $link= ! empty( $instance['footer_link'.$t] ) ? $instance['footer_link'.$t] : ''; ?>
                   <li class="single-social"><a href="<?php echo $link; ?>"><i class="<?php echo $icon; ?> fa-lg"></i></a></li>
          <?php endfor; ?>
                </ul>
          <?php 
        }
        public function form( $instance ) {
    ?>
       <p>
        <?php for($t = 0; $t < 3 ;$t++): 
            $icon = ! empty( $instance['footer_icon'.$t] ) ? $instance['footer_icon'.$t] : '';
            $link= ! empty( $instance['footer_link'.$t] ) ? $instance['footer_link'.$t] : '';?>
          <p>
            <label for="<?php echo $this->get_field_id( 'footer_icon'.$t ); ?>">Enter icon and link below<label>
            <input placeholder="dsa" type="text" class="widefat" id="<?php echo $this->get_field_id( 'footer_icon'.$t ); ?>" name='<?php echo $this->get_field_name( 'footer_icon'.$t ); ?>' value="<?php echo $icon;?>">
          </p>
          <p>
          <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'footer_link'.$t ); ?>" name='<?php echo $this->get_field_name( 'footer_link'.$t ); ?>' value="<?php echo $link;?>"></p>
        <?php endfor; ?>
       </p>
      <?php 
        
        }
        public function update( $new_instance, $old_instance ) {
          $instance = $old_instance;
          for($t = 0; $t < 3 ;$t++): 
            $instance[ 'footer_icon'.$t] = $new_instance[ 'footer_icon'.$t];
            $instance[ 'footer_link'.$t] = $new_instance[ 'footer_link'.$t];
          endfor; 
          return $instance;
        }
  }
      
      function visio_social_widget() { 
          register_widget( 'Visio_social' );
        }
        add_action( 'widgets_init', 'visio_social_widget' );
?>