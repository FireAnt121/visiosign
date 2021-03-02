jQuery( document ).ready( function( $ ) {

    "use strict";
/**
     * The file is enqueued from inc/admin/class-admin.php.
 */        
    $( '#demo-form' ).submit( function( event ) {
        
        event.preventDefault(); // Prevent the default form submit.            
        
        // serialize the form data
        var ajax_form_data = $("#demo-form").serialize();
        
        //add our own ajax check as X-Requested-With is not always reliable
        ajax_form_data = ajax_form_data+'&ajaxrequest=true&submit=Submit+Form';
        
        $.ajax({
            url:    params.ajaxurl, // domain/wp-admin/admin-ajax.php
            type:   'fire_form',                
            data:   ajax_form_data
        })
        
        .done( function( response ) { // response from the PHP action
            console.log(response);
        })
        
        // something went wrong  
        .fail( function() {
            console.log("wrong");
        })
    
        // after all this time?
        .always( function() {
            event.target.reset();
        });
    
   });
    
});