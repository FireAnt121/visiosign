<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VisioSign</title>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WZLPXT');</script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-45053396-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-45053396-1');
</script>
  <script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    var element =  document.getElementById('g-recaptcha-response');
if (typeof(element) != 'undefined' && element != null)
{
    function timestamp() {
        var response = document.getElementById("g-recaptcha-response");
        if (response == null || response.value.trim() == "") {
            var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);
            elems["ts"] = JSON.stringify(new Date().getTime());
            document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems);
        }
    }

    setInterval(timestamp, 500);
}

</script>
    <?php wp_head(); 
    $result = pll_home_url( );?>

</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZLPXT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <!-- Header Section-->
    <!-- Navigation -->
    <div class="big-wrapper nav-big-wrap">
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-0">
    
          <a class="navbar-brand p-0" href="<?php echo $result;?>">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/img/global/logo.png" alt="visio logo">
           </a>
    
           <ul class="navbar-nav fr-mid-nav hide-until-9">
             <?php if ( is_active_sidebar( 'home_right_2' ) ) : ?>
             <li class="nav-item li-support li-support-mob" id="supportus">
                  <?php dynamic_sidebar( 'home_right_2' ); ?>
             </li>
             <?php endif; ?>
          </ul>
          <ul class="navbar-nav fr-end-nav hide-until-9">


               <?php if ( is_active_sidebar( 'mobile_switcher_nav' ) ) : ?>
                  <li class="nav-item">
                  <?php dynamic_sidebar( 'mobile_switcher_nav' ); ?>
                  </li>
                <?php endif; ?>

              <li class="nav-item">
                <a class="nav-link nav-search-class" href="#" id="nav-search-button">
                   <i class="fas fa-search"></i>
                 </a>
              </li>
          </ul>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
       
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php
          wp_nav_menu(
                array(
                    'container' => 'false',
                    'theme_location' => 'main-menu',
                    'menu_class' => 'navbar-nav mr-auto fr-begin-nav',
                    'walker'  => new Main_Walker_Nav_Menu ()  
                    )
                );
          ?>
                          <?php
          
          wp_nav_menu(

                  array(

                      'container' => 'false',
                      'theme_location' => 'top-right-menu',
                      'menu_class' => 'dropdown-menu hide-until-9 fr-mobile-show-menu',
                      'walker'  => new Main_Walker_Nav_Menu ()  
                      )
                  );
          ?>
          <ul class="navbar-nav fr-mid-nav">
          <?php if ( is_active_sidebar( 'home_right_2' ) ) : ?>
             <li class="nav-item li-support hide-after-9" id="supportus">
                  <?php dynamic_sidebar( 'home_right_2' ); ?>
             </li>
             <?php endif; ?>
          </ul>
          <ul class="navbar-nav fr-end-nav hide-after-9">
          <?php
 
               if ( is_active_sidebar( 'home_right_1' ) ) : ?>
                  <li class="nav-item">
                  <?php dynamic_sidebar( 'home_right_1' ); ?>
                  </li>
               <?php endif; ?>

              <li class="nav-item">
                <a class="nav-link nav-search-class" href="#" id="nav-search-button">
                   <i class="fas fa-search"></i>
                 </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fr-normal" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fas fa-bars"></i>
                </a>
                <?php
          
                    wp_nav_menu(

                            array(

                                'container' => 'false',
                                'theme_location' => 'top-right-menu',
                                'menu_class' => 'dropdown-menu',
                                'walker'  => new Main_Walker_Nav_Menu ()  
                                )
                            );
                    ?>


              </li>
          </ul>
          </div>
    
     </nav>
    </div>
    <section class="nav-search" id="nav-search-v">
       <div class="big-wrapper">
          <form>
             <div class="col-auto form-navigator m-55">
                <div class="row card-long-v">
                   <div class="col-md-2 card-long-img p-0">
                      <i class="fas fa-search"></i>
                   </div>
                   <div class="col-md-8">
                      <input type="text" id="keyword" onkeyup="fetch()" class="display-8" id="inlineFormInputGroup" placeholder="Søg..." autofocus>
                   </div>
                   <div class="col-md-2">
                      <i class="fas fa-chevron-right"></i>
                   </div>
                </div>
             </div>
             <div class="form-results" id="datafetch">

             </div>
          </form>
          <div class="close-v position-absolute" id="close-search-v">
             <i class="fas fa-times"></i>
          </div>
       </div>
    </section>
    <!-- End Header Section -->


    
