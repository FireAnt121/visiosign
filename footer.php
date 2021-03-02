    <!-- Footer Section-->
    <footer>
       <div class="wrapper">
          <div class="row m-30">
             <div class="col-sm-12 col-md-4 d-flex left-footer">
                 <?php if ( is_active_sidebar( 'footer_left' ) ) : ?>
                  <?php dynamic_sidebar( 'footer_left' ); ?>
                     <?php endif; ?>
             </div>
             <div class="col-sm-12 col-md-4 mid-footer">
                <div class="wraps">
                     <div class="bs-callout bs-callout-info-footer hidden">
                      <h2 class="display-6 l-10 fg-brown form-titles">Success!</h2>
                    </div>
                    <?php if ( is_active_sidebar( 'footer_mid' ) ) : ?>
                  <?php dynamic_sidebar( 'footer_mid' ); ?>
                     <?php endif; ?>
                   <!-- <form id="footer-form" data-parsley-validate="" data-parsley-focus="none">
                      <div class="field-col">
                         <input type="text" class="form-control form-v bg-hard-black" id="footerNavn" placeholder=" " data-parsley-trigger="focusout" required>
                         <label for="footerNavn">Navn*</label>
                      </div>
                      <div class="field-col m-30">
                      <input type="email" class="form-control form-v bg-hard-black" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" " id="footerEmail" data-parsley-trigger="focusout" required>
                      <label for="footerEmail">Email*</label>
                      </div>
                      <p class="display-13">Ved at registrere dig bekræfter du, at du accepterer lagring og behandling af dine personlige data af VisioSign som beskrevet i fortrolighedserklæringen.</p>
                      <button type="submit" class="fr-button-link-grey-brown">Tilmeld mig</button>
                   </form> -->
                </div>
             </div>
             <!-- <div class="sol-sm-12 col-md-2 mid-footer2">
                <h1 class="display-1 m-30">Find os på</h1>
                <ul class="list-v p-0">
                   <li ><a href="#" class="display-2 work-sans border-v">LinkedIn</a></li>
                   <li><a href="#" class="display-2 work-sans border-v" >Facebook</a></li>
                </ul>
             </div> -->
             <div class="col-sm-12 col-md-4 end-footer">
                <div>
                <?php if ( is_active_sidebar( 'footer_end' ) ) : ?>
                  <?php dynamic_sidebar( 'footer_end' ); ?>
                     <?php endif; ?>
                     <?php if ( is_active_sidebar( 'footer_end_bot' ) ) : ?>
                  <?php dynamic_sidebar( 'footer_end_bot' ); ?>
                     <?php endif; ?>
                </div>
             </div>
          </div>
    
       </div>
       <div class="row copyright-footer">
          <div class="wrapper">
             <span>© 1999 - 2020 Visiosign A/S • All rights reserved</span> 
          </div>
    
       </div>
    </footer>
    <!-- End Section Section -->

<script>
jQuery( document ).ready( function($) {

/* Editor Toggle Function */
function fxPb_Editor_Toggle(){
    if( 'templates/page-builder.php' == $( '#page_template' ).val() ){
        $( '#postdivrich' ).hide();
        $( '#fx-page-builder' ).show();
    }
    else{
        $( '#postdivrich' ).show();
        $( '#fx-page-builder' ).hide();
    }
}

/* Toggle On Page Load */
fxPb_Editor_Toggle();

/* If user change page template drop down */
$( "#page_template" ).change( function(e) {
    fxPb_Editor_Toggle();
});

});
</script>

<?php wp_footer(); ?>
</body>
</html>