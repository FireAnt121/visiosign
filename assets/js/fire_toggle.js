jQuery( document ).ready( function($) {

    'use strict';

	// Instantiates the variable that holds the media library frame.
	var metaImageFrame;
    $('.fire_button_selector_attr').on('change',function(e){

        let type = $(this).attr('data-fire-color-type');
        let id = $(this).attr('data-id');
        let i = $(this).attr('data-i');


        var color_arr = $(this).val().split(',');

        //chnage primarytextcolor
        $('#primarytextcolor-'+type+id+i).val(color_arr[0]);
        $('#hovertextcolor-'+type+id+i).val(color_arr[1]);
        $('#primarycolor-'+type+id+i).val(color_arr[2]);
        $('#hovercolor-'+type+id+i).val(color_arr[3]);
        $('#primarybordercolor-'+type+id+i).val(color_arr[4]);
        $('#hoverbordercolor-'+type+id+i).val(color_arr[5]);

    });
	// Runs when the media button is clicked.
	$( 'body' ).click(function(e) {

		// Get the btn
		var btn = e.target;

		// Check if it's the upload button
		if ( !btn || $( btn ).attr( 'data-media-uploader-target' ) ) {

		// Get the field target
        var field = $( btn ).data( 'media-uploader-target' );
		var img = $(btn).data( 'media-images');


		// Prevents the default action from occuring.
		e.preventDefault();

		// Sets up the media library frame
		metaImageFrame = wp.media.frames.metaImageFrame = wp.media({
			title: "select a file",
			button: { text:  'Change' },
		});

		// Runs when an image is selected.
		metaImageFrame.on('select', function() {

			// Grabs the attachment selection and creates a JSON representation of the model.
			var media_attachment = metaImageFrame.state().get('selection').first().toJSON();

			// Sends the attachment URL to our custom image input field.
			$( field ).val(media_attachment.url);
			if($(btn).attr('data-show')){
				// $( img ).attr('style','background:url('+ media_attachment.url +');background-size:cover;');
				$( img ).css({
					'background':'url('+ media_attachment.url +')',
					'background-size':'cover'
				});
			}
			else
            $( img ).attr('src',media_attachment.url);

		});

		// Opens the media library frame.
		metaImageFrame.open();
		}// add buttons
      	else if(!btn || $(btn).attr('data-converter')){
		     var id = $(btn).attr('data-converter');
		    var c  = $(btn).attr('data-counters');
		 var result = String($('#fire_customs_paste').val());
		 		 $('#fire_customs_paste').append(result);
		 var container = document.querySelector("#fire_customs_paste");
		 var f = container.querySelectorAll('form');
		 $('#meta-box-fr-forms-action-'+id).val(f[0].action);
         var site  = container.querySelectorAll('div');
         if(site.length > 0){
         $('#meta-box-fr-forms-siteKey-'+id).val(site[0].dataset.sitekey);
         }
         var label  = container.querySelectorAll('label');

         var r  = container.querySelectorAll('input, select, textarea');

		 let count = 0;
                $.each(r, function (i) {
                        if(r[i].name === 'oid'){
                            $('#meta-box-fr-forms-oid-'+id).val(r[i].value);
                        }else if(r[i].name === 'retURL'){
                            $('#meta-box-fr-forms-return-'+id).val(r[i].value);
                        }
                        else if( r[i].name === 'captcha_settings'){
                            $('#meta-box-fr-forms-captcha-'+id).val(r[i].value);
                        }
                        else if ( r[i].name === 'submit' || r[i].name === 'subscribe'){
                            
                        }
                        else if( r[i].type === 'text' || r[i].type === 'textarea' || r[i].type === 'select-one' || r[i].type === 'hidden' || r[i].type === 'email'){
                            let lal = ' ',max_length = '', res= '', tab = ' ';

                             $.each(label, function (j) {
                                 if(label[j].htmlFor === r[i].id)
                                    lal = label[j].innerHTML;
                             });
                             $.each(r[i].attributes,function(j){

                                max_length = (r[i].attributes[j].name === "maxlength")? r[i].attributes[j].value : max_length;
                                if(r[i].attributes[j].name === "tabindex")
                                    tab = r[i].attributes[j].value;
                             });

                              if(tab == -1 )
                                {
                                    res += '<tr><td><input class="d-none" name="meta-box-fr-forms-tabbed'+c+'-'+id+'" type="text" value="'+r[i].name+'"></td></tr>';
                                
                                    count++;
                                    c++;
                                }
                             if(r[i].type === 'select-one'){ 
                                res += '<tr><td><textarea class="d-none" name="meta-box-fr-forms-options'+c+'-'+id+'" value="<option value="">first</option>'+r[i].innerHTML+'" ><option value="">first</option>'+r[i].innerHTML+'</textarea></td></tr>';
                            }
                            if(r[i].type === 'hidden'){
                                console.log(c+" "+r[i].defaultValue);
                                res += '<tr><td><textarea class="d-none" name="meta-box-fr-forms-options'+c+'-'+id+'" value="'+r[i].defaultValue+'" >'+r[i].defaultValue+'</textarea></td></tr>';
                            }
                             if(lal !== ' '){
                            	res += '<tr>'+
                        			'<td>'+
                        				'<select name="meta-box-fr-forms-type'+c+'-'+id+'">'+
                        					'<option value="'+r[i].type+'" selected >'+r[i].type+'</option>'+
                        				'</select>'+
                        			'</td>'+
                        			'<td>'+
                        				'<input name="meta-box-fr-forms-placeholder'+c+'-'+id+'" type="text" value="'+lal+'">'+
                        			'</td>'+
                        			'<td>'+
                        				'<input name="meta-box-fr-forms-name'+c+'-'+id+'" type="text" value="'+r[i].name+'">'+
                        			'</td>'+
                        			'<td>'+
                        				'<input name="meta-box-fr-forms-id'+c+'-'+id+'" type="text" value="'+r[i].id+'">'+
                        			'</td>'+
                        			'<td>'+
                        				'<input name="meta-box-fr-forms-max'+c+'-'+id+'" type="text" value="'+max_length+'">'+
                        			'</td>'+
                        			'<td>'+
                        				'<input type="hidden" value="0" name="meta-box-fr-forms-required'+c+'-'+id+'">'+
                        				'<input type="checkbox" name="meta-box-fr-forms-required'+c+'-'+id+'" value="1" >'+
                        			'</td>'+
                        		'</tr>';

                                count++;
                                c++;
                             }
                             $('#forms-table-fr').append(res);
                        }
                        else{
                            
                        }
                });
            $("#meta-box-fr-form-list-count-"+id).val(count);
		}
		else if( !btn || $(btn).attr('data-media-adder')){
			let cid = $(btn).attr('data-media-adder');
			let type = $(btn).attr('data-media-type');
			let id = $(btn).attr('data-media-id');
			//let typer = $(btn).attr('data-media-type-counter');
			let current_count = $(cid).val();
			let data_id = $(btn).attr('data-id');
			let order = parseInt(get_last_order()) + 1;
			
			switch(type){
				case 'hip':
                    // var data = {
                    //     'action': 'my_action',
                    //     'order': order,
                    //     'id' : id,
                    //     'type' : type,
                    //     'i' : current_count    // We pass php values differently!
                    // };
                    // // We can also pass the url value separately from ajaxurl for front end AJAX implementations
                    // jQuery.post(ajax_object.ajax_url, data, function(response) {
                    //     $(data_id).append(response);
                    //     jQuery( document.body ).trigger( 'post-load' ); 
                    // });
                    // jQuery( document.body ).on( 'post-load', function () {
                    //     CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
                    //     CKEDITOR.inline('meta-box-'+type+'-title2-'+id+current_count);
                    //     current_count++;
                    //     //$(typer).val(count);
                    //     $(cid).val(current_count);  
                    // } );
                    $(data_id).append(hip(type,id,current_count,order));
                    CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
                    CKEDITOR.inline('meta-box-'+type+'-title2-'+id+current_count);
                    break;
                    case 'html':
                        $(data_id).append(html(type,id,current_count,order));
                        break;
                    case 'floater':
                        $(data_id).append(floater(type,id,current_count,order));
                        CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
                        break;
				case 'ctaB':
					$(data_id).append(ctaB(type,id,current_count,order));
					$('.myctaB-'+id+type+current_count).css('order',order);
					CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
					CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
					break;	
				case 'features':
                    // var data = {
                    //     'action': 'my_action',
                    //     'order': order,
                    //     'id' : id,
                    //     'type' : type,
                    //     'i' : current_count    // We pass php values differently!
                    // };
                    // // We can also pass the url value separately from ajaxurl for front end AJAX implementations
                    // jQuery.post(ajax_object.ajax_url, data, function(response) {
                    //     $(data_id).append(response);
                    //     jQuery( document.body ).trigger( 'post-load' ); 
                    // });
                    // jQuery( document.body ).on( 'post-load', function () {
                    //     current_count++;
                    //     //$(typer).val(count);
                    //     $(cid).val(current_count);  
                    // } );
					$(data_id).append(features(type,id,current_count,order));	
					break;	
				case 'cloud':
					$(data_id).append(clouds(type,id,current_count,order));
					CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
					CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);	
					break;	
				case 'cta':
                    // var data = {
                    //     'action': 'my_action',
                    //     'order': order,
                    //     'id' : id,
                    //     'type' : type,
                    //     'i' : current_count    // We pass php values differently!
                    // };
                    // // We can also pass the url value separately from ajaxurl for front end AJAX implementations
                    // jQuery.post(ajax_object.ajax_url, data, function(response) {
                    //     $(data_id).append(response);
                    //     jQuery( document.body ).trigger( 'post-load' ); 
                    // });
                    // jQuery( document.body ).on( 'post-load', function () {
                    //     current_count++;
                    //     //$(typer).val(count);
                    //     $(cid).val(current_count);  
                    // } );
					$(data_id).append(ctas(type,id,current_count,order));
					break;		
				case 'nyhed':
					$(data_id).append(news_alone(type,id,current_count,order));
					CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
					break;	
				case 'cards':
					$(data_id).append(fire_cards(type,id,current_count,order));
					CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
					break;	
				case '3cards':
					$(data_id).append(fire_3cards(type,id,current_count,order));
					CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);	
					break;	
				case 'reference':
					$(data_id).append(fire_reference(type,id,current_count,order));	
					CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);	
					break;	
				case 'umbrella':
					$(data_id).append(fire_umbrella(type,id,current_count,order));	
					CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
					CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);		
					break;
				case 'carousel':
					$(data_id).append(fire_carousel(type,id,current_count,order));
					break;
				case 'onlyH':
					$(data_id).append(onlyH(type,id,current_count,order));
					CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
					CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);	
					break;	
				case 'page50':
					$(data_id).append(page50(type,id,current_count,order));
					for(var jj = 0; jj < 7;jj++){
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count+jj);
					}
					break;	
				case 'gridInfo':
					$(data_id).append(gridInfo(type,id,current_count,order));
					CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
					CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
					for(var jj = 0; jj < 4;jj++){
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count+jj);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count+jj);
					}
					break;	
				case 'magazine':
					$(data_id).append(magazine(type,id,current_count,order));
					CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
					CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
					for(var jj = 0; jj < 4;jj++){
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count+jj);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count+jj);
					}
					break;	
				case 'blogList':
					$(data_id).append(blogList(type,id,current_count,order));
					for(var jj = 0; jj < 4 ; jj++){
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count+jj);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count+jj);
					}
					break;	
				case 'sHero':
					$(data_id).append(sHero(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
					break;	
				case 'listGrids':
					$(data_id).append(listGrids(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
					break;	
				case 'products':
					$(data_id).append(product_listing(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
					break;
				case 'hero':
					$(data_id).append(simple_hero(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
					break;
				case 'onlyImg':
					$(data_id).append(onlyImg(type,id,current_count,order));
					break;	
				case 'call':
					$(data_id).append(call(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-formtitle-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-shortcode-'+id+current_count);
					break;				
				case 'split':
					$(data_id).append(split(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
					break;	
				case 'accord':
					$(data_id).append(accord(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);

					break;	
				case 'contactForm':
					$(data_id).append(cForm(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-formtitle-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-shortcode-'+id+current_count);
					break;	
				case 'splitRev':
					$(data_id).append(splitRev(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
					break;
				case 'tal':
					$(data_id).append(tal(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
						for(var jj = 0; jj < 4 ; jj++){
							CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count+jj);
							CKEDITOR.inline('meta-box-'+type+'-number-'+id+current_count+jj);
						}
					break;	
				case 'globe':
					$(data_id).append(globe(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
						for(var jj = 0; jj < 4 ; jj++){
							CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count+jj);
						}
					break;	
				case 'circleSec':
					$(data_id).append(circleSec(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
						for(var jj = 0; jj < 7 ; jj++){
							CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count+jj);
						}
					break;
				case 'bigHeader':
					$(data_id).append(bigHeader(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
					break;		
				case 'splitThree':
					$(data_id).append(splitThree(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-tagLine-'+id+current_count);

					break;	
				case 'magCarousel':
					$(data_id).append(magCarousel(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
	
					break;
				case 'fiveSplit':
					$(data_id).append(fiveSplit(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
						for(var jj = 0; jj < 5 ; jj++){
							CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count+jj);
							CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count+jj);
						}
					break;
				case 'magCarouselRev':
					$(data_id).append(magCarouselRev(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
					break;
				case 'clicker':
				 //var data = {
				  	//'action': 'my_action',
				  	//'type': type,
				  	//'id' : id,
				  	//'current_count' :current_count,
				  	//'order' : order
					// };
				  //var ves = '';
				  // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
					 //jQuery.post(ajaxurl, data,function(){
						 //console.log("sucess");
				 	//$(data_id).append(response);
				  //});
					$(data_id).append(clickers(type,id,current_count,order));
				break; 
				case 'twoSec':
					$(data_id).append(twoSec(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
					break;
				case 'inspire':
					$(data_id).append(inspires(type,id,current_count,order));
					CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
					CKEDITOR.inline('meta-box-'+type+'-subcontent-'+id+current_count);
					CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
					for(var j = 0; j < 8; j++){
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count+j);
					}
					break;
				case 'infoPriser':
					$(data_id).append(infoPriser(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
					break;
				case 'productSpec':
					$(data_id).append(productSpec(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-varnumber-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-stitle-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-scontent-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-scontent1-'+id+current_count);
					break;	
				case 'tabbed':
					$(data_id).append(tabbed(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
					break;	
				case 'sameInfo':
					$(data_id).append(sameInfo(type,id,current_count,order));
						CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
						CKEDITOR.inline('meta-box-'+type+'-content1-'+id+current_count);
                    break;		
                case 'gridShow':
                    $(data_id).append(fire_gridShow(type,id,current_count,order));
                    break;                   							
				default:
					break;
			}


			
			//count++;
            current_count++;
            //$(typer).val(count);
            $(cid).val(current_count);  

		}
		//global button deleter
		else if( !btn || $( btn ).attr( 'data-sec-deleter' ) ){
            let main_counter = $(btn).attr('data-main-counter');
			let current_count = $(btn).attr('data-current-counter');
			let type = $(btn).attr('data-typess');
			let id = $(btn).attr('data-id');
			let order_id = $(btn).attr('data-order');
			let order = $(order_id).val();
			let t = $(btn).parent().find($('textarea'));
			$.each( t, function( i, val ) {

				$('#'+val.id+'+ div').html("hello");
			});
			$('#meta-fire-'+type+id+current_count).val("false");
			fire_re_order(order);
			$(btn).parent().parent().remove();
		}//order up
		else if( !btn || $( btn ).attr( 'data-order-up' ) ){
			let order_id = $(btn).attr('data-order');
			let order = $(order_id).val();

			let j = parseInt(order);
			if(j > 1){
				swap_prev_order(j,btn);
			}
		}//order down
		else if( !btn || $( btn ).attr( 'data-order-down' ) ){
			let order_id = $(btn).attr('data-order');
			let order = $(order_id).val();

			let j = parseInt(order);
			if(j < get_last_order()){
				swap_next_order(j,btn);
			}
		}
		else if( !btn || $( btn ).attr( 'data-list' ) ){

			const id = $(btn).data('list');
			const selector = $(btn).attr('id');
			let p = $(btn).attr('fire-type');
			let count = $(btn).attr('data-count');
			$(btn).parent().append('<input name="meta-box-'+p+'-list-item'+ selector+count+'-'+ id +'" type="text" value=""><br>');
			$(btn).attr('data-count',++count);
		}
		else if( !btn || $( btn ).attr( 'data-product' ) ){

			const id = $(btn).data('product');
            let idd = $(btn).attr('data-id');
            let types = $(btn).attr('data-typess');
            let current_count = $(btn).attr('datat-current-counter');
			$(btn).parent().append('<input name="meta-box-product-feature-title'+count+'-'+ id +'" type="text" value="" placeholder="Feature Title"><br><textarea name="meta-box-product-feature-content'+count+'-'+ id +'" rows="5" placeholder="Feature Content" ></textarea>');
			$(btn).attr('data-count',++count);
		}
		else if( !btn || $( btn ).attr( 'data-spec' ) ){

			const x_id = $(btn).data('spec');
            let id = $(btn).attr('data-id');
            let type = $(btn).attr('data-typess');
            let current_count = $(btn).attr('data-current-counter');
            let ii = $(x_id).val();
            let res = '';
                res = '<input type="hidden" class="clicker-deleter" id = "fr-clicker-accord-deleter'+current_count+'-'+id+ii+'" name="fr-clicker-accord-deleter'+current_count+'-'+id+ii+'" value="true"> '+
                '<div class="card">'+
                '<i class="fas fa-times close-click"></i>'+
                '<div class="card-header" id="heading'+ii+'">'+
                    '<h2 class="mb-0 ">'+
                    '<button class="btn btn-link display-1 l-10 collapsed" type="button" data-toggle="collapse" data-target="#collapse'+ii+'" aria-expanded="false" aria-controls="collapse'+ii+'">'+
                    fr_textarea(type,id,current_count+ii,"title","<div class='display-1 l-10'>Title</div>")+
                    '</button>'+
                    '</h2>'+
                '</div>'+
                '<div id="collapse'+ii+'"  aria-labelledby="heading'+ii+'" data-parent="#accordionExample">'+
                    '<div class="card-body">'+
                    fr_textarea(type,id,current_count+ii,"content"," keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.")+
                    '</div>'+
                '</div>'+
                '</div>';
                $(btn).parent().append(res);
                    CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count+ii);
                    CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count+ii);
            ii++;
			$(x_id).val(ii);
		}
		else if( !btn || $( btn ).attr( 'fr-type' ) ){

			const id = $(btn).data('form');
			const s = $(btn).attr('id');
			let count = $(btn).attr('data-count'); //ii
			let counter = $(btn).attr('data-counter');
			$(btn).parent().append(
			'<div class="row"><div class ="col-md-6">'+
				'<fieldset>'+
					'<div>'+
						'<input type="hidden" class="large-text" name="meta-box-globe-list-image'+count+'-'+id+'"  id="myplugin_mediaglobal'+count+'-'+id+'" value=""><br>'+
						'<img src="" height="200" id="mymediaglobal'+count+'-'+id+'"><br>'+
						'<button type="button" class="button" id="events_video_upload_btn" data-media-images="#mymediaglobal'+count+'-'+id+'" data-media-uploader-target="#myplugin_mediaglobal'+count+'-'+id+'">Upload</button>'+
					'</div>'+
				'</fieldset>'+
			'</div>'+
			'<div class ="col-md-6">'+
				'<input name="meta-box-global-item-name<'+count+'-'+id+'" type="text" value="">'+
				'<textarea name="meta-box-globe-item-content'+count+'-'+id+'" rows="5"></textarea>'+
			'</div></div>'
			);
			++count;
			$(btn).attr('data-count',count);
			$(counter).val(count);
		}
		else if( !btn || $( btn ).attr( 'clicker-type' ) ){

			const id = $(btn).data('form');
			const s = $(btn).attr('id');
			const img = $(btn).attr('img-path');
			let count = $(btn).attr('data-count'); //ii
			let counter = $(btn).attr('data-counter');
			$('.clicker .c-info').removeClass('active');
			$(btn).parent().append(
				'<div class="clicker c'+count+'" style="top:10vw;left:30vw;position:absolute;">'+
				'<input type="hidden" class="clicker-top-v" id = "fr-clicker-item-top'+count+'-'+id+'" name="fr-clicker-item-top'+count+'-'+id+'" value="">'+
                '<input type="hidden" class="clicker-left-v" id = "fr-clicker-item-left'+count+'-'+id+'" name="fr-clicker-item-left'+count+'-'+id+'" value=""> '+
                '<input type="hidden" class="clicker-deleter" id = "fr-clicker-item-deleter'+count+'-'+id+'" name="fr-clicker-item-deleter'+count+'-'+id+'" value="true"> '+
                '<input type="hidden" class="clicker-marker" id = "fr-clicker-item-marker'+count+'-'+id+'" name="fr-clicker-item-marker'+count+'-'+id+'" value="false"> '+
                '<img src="'+wpa_data.image_path+'cloud/clicker.png">'+
					'<div class="c-info active" id="testte">'+
						'<fieldset>'+
							'<div>'+
								'<input type="hidden" class="large-text" name="fr-clicker-item-image'+count+'-'+id+'" id="myplugin_media-'+id+count+'" value="'+wpa_data.image_path+'cloud/info1.png">'+
								'<img src="'+wpa_data.image_path+'cloud/info1.png" id="mymedia-'+id+count+'"><br>'+
								'<button type="button" class="button " id="mymed-'+id+count+'" data-media-images="#mymedia-'+id+count+'" data-media-uploader-target="#myplugin_media-'+id+count+'">Change Image</button>'+	
							'</div>'+
						'</fieldset>'+
                        '<i class="fas fa-times close-clicker"></i>'+
                        '<i class="fas fa-bookmark book-clicker"></i>'+
						'<div class="mix-max">'+
						'<textarea class="display-1" id="fr-clicker-item-title'+count+'-'+id+'" name="fr-clicker-item-title'+count+'-'+id+'" value=" " placeholder="Enter Title "><span class="display-1">Skærmvæg</span></textarea>'+
						'<textarea class="display-12 fg-brown" name="fr-clicker-item-subtitle'+count+'-'+id+'"><span class="display-12 fg-brown">Indretnings-serien</span></textarea>'+
						'</div>'+
						'<textarea class="work-sans l-10 display-13" rows="8" name="fr-clicker-item-conten'+count+'-'+id+'" placeholder="content"><span class="work-sans l-10 display-13">Perfekt til visning af bl.a. kundecases og præsentationer. Skærmvæg er en pakke sammensat af specialtilpasset player, design og opsætning til administration af væggen. Skærmene kan monteres vandret eller lodret på en eller to rækker. <br><br>Perfekt til visning af bl.a. kundecases og præsentationer. Skærmvæg er en pakke sammensat af specialtilpasset player, design og opsætning tiladministration af væggen. </span><br><a href="#" class="fg-brown display-13">Læs mere</a></textarea>'+
					'</div>'+
				'</div>	'
			);
			CKEDITOR.inline('fr-clicker-item-title'+count+'-'+id);
			CKEDITOR.inline('fr-clicker-item-subtitle'+count+'-'+id);
			CKEDITOR.inline('fr-clicker-item-conten'+count+'-'+id);
			++count;
			$(btn).attr('data-count',count);

			$(counter).val(count);
			return;
		}
		else if( !btn || $( btn ).attr( 'data-form' )){
			const id = $(btn).data('form');
			const s = $(btn).attr('id');
			let count = $(btn).attr('data-count');
			let counter = $(btn).attr('data-counter');
			$(
			'<div class="row"><div class ="col-md-2">'+
			'<select name="meta-box-fr-forms-type'+count+'-'+id+'">'+
				'<option value="text">Text</option>'+
				'<option value="number">Number</option>'+
				'<option value="email">Email</option>'+
				'<option value="textarea">Textarea</option>'+
			'</select>'+
			'</div>'+
			'<div class ="col-md-4">'+
				'<input name="meta-box-fr-forms-placeholder'+count+'-'+id+'" type="text" value="" placeholder="Enter Placeholder">'+
            '</div>'+
			'<div class ="col-md-4">'+
				'<input name="meta-box-fr-forms-name'+count+'-'+id+'" type="text" value="" placeholder="Enter name">'+
			'</div>'+
			'<div class="col-md-2">'+
				'<input type="checkbox" name="meta-box-fr-forms-required'+count+'-'+id+'" value="*">'+
				'<label for="vehicle1"> Required</label><br>'+
				'</div> </div>').insertBefore($(btn));
			++count;
			$(btn).attr('data-count',count);
			$(counter).val(count);
		}
		else if($(".fr-cloud-navigator div").is(btn)){
			var sel_class = $(btn).attr("holding");
			$('.clicker .c-info').removeClass('active');
			$('.clicker').addClass('hov');
			$( '.click-on .'+sel_class ).removeClass('hov').find('.c-info').addClass('active');
        }
        else if($('i.close-click').is($(btn))){
            $(btn).parent().prev().val("false");
            $(btn).parent().remove();
        }
		else
		 return;
	});
//
//
// order functions
//
function swap_prev_order(i,btn){
	i = parseInt(i);
	$(".fire_customs section").each(function(eq){

		if($(this).css('order') == (i - 1) ){
			$(this).css('order',i);
			$(this).find('input:nth-of-type(2)').val(i);
			$(btn).parent().parent().css('order',i-1);
			$(btn).parent().find('input:nth-of-type(2)').val(i-1);
			return false;
		}
	  });
}
function swap_next_order(i,btn){
	i = parseInt(i);
	$(".fire_customs section").each(function(eq){

		if($(this).css('order') == (i + 1) ){
			$(this).css('order',i);
			$(this).find('input:nth-of-type(2)').val(i);
			$(btn).parent().parent().css('order',i+1);
			$(btn).parent().find('input:nth-of-type(2)').val(i+1);
			return false;
		}
	  });
}
function get_last_order(){
	let max = 0,count= 0 ;
	$(".fire_customs section").each(function(){
		count++;
	  });

	max = (count > max) ? count : max;
	return max;
}
function fire_re_order(i){
	let j = parseInt(i);
	$(".fire_customs section").each(function(index,ele){
	
		let a = parseInt($(this).css('order'));
		if(j < $(this).css('order')){
			$(this).css('order',a-1);
			$( this).find('input:nth-of-type(2)').val(a-1);
		}
	  });
}

//
//
// order functions ends
//


//
//
// Categories cases control starts
//
//


	function case_large_toggle(){
		if(window.location.pathname == "/wp-admin/post-new.php"){
			var data_id = "#fire-home";
			var id = $("#postimagediv .inside p a").attr('href').split("post_id=")[1].split("&")[0];
		$('#fire-home').html(" ");
		var current_count = 0,order = 1,type="onlyImg";
		$('#fire-home').append(onlyImg(type,id,current_count,order));
		current_count = 1;order = 2;type="twoSec";
		$(data_id).append(twoSec(type,id,current_count,order));
		CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
		CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
		current_count = 2;order = 3;type="cta";
		$(data_id).append(ctas(type,id,current_count,order));
		current_count = 3;order = 4;type="splitRev";
		$(data_id).append(splitRev(type,id,current_count,order));
		CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
		CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
		current_count = 4;order = 5;type="cta";
		$(data_id).append(ctas(type,id,current_count,order));
		current_count = 5;order = 6;type="carousel";
		$(data_id).append(fire_carousel(type,id,current_count,order));
		current_count = 6,order = 7,type="split";
		$(data_id).append(split(type,id,current_count,order));
		CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
		CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
		current_count = 7,order = 8,type="onlyImg";
		$('#fire-home').append(onlyImg(type,id,current_count,order));
		current_count = 8,order = 9,type="cards";
		$(data_id).append(fire_cards(type,id,current_count,order));
		CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
		current_count = 9,order = 10,type="reference";
		$(data_id).append(fire_reference(type,id,current_count,order));	
		CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);	
		current_count = 10,order = 11,type="ctaB";
		$('#fire-home').append(ctaB(type,id,current_count,order));
		$('.myctaB-'+id+type+current_count).css('order',order);
		CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
		CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
		$('#fire_adder_counter'+id).val(11);}
	}
	function case_small_toggle(){
		if(window.location.pathname == "/wp-admin/post-new.php"){
			var data_id = "#fire-home";
			var id = $("#postimagediv .inside p a").attr('href').split("post_id=")[1].split("&")[0];
		$('#fire-home').html(" ");
		current_count = 0,order = 1,type="split";
		$(data_id).append(split(type,id,current_count,order));
		CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
		CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
		current_count = 1;order = 2;type="cta";
		$(data_id).append(ctas(type,id,current_count,order));
		current_count = 2;order = 3;type="splitRev";
		$(data_id).append(splitRev(type,id,current_count,order));
		CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
		CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
		current_count = 3;order = 4;type="cta";
		$(data_id).append(ctas(type,id,current_count,order));
		current_count = 4;order = 5;type="carousel";
		$(data_id).append(fire_carousel(type,id,current_count,order));
		current_count = 5,order = 6,type="cards";
		$(data_id).append(fire_cards(type,id,current_count,order));
		CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
		current_count = 6,order = 7,type="reference";
		$(data_id).append(fire_reference(type,id,current_count,order));
		CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);	
		current_count = 7,order = 8,type="ctaB";
		$('#fire-home').append(ctaB(type,id,current_count,order));
		$('.myctaB-'+id+type+current_count).css('order',order);
		CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
		CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
		$('#fire_adder_counter'+id).val(8);}
	}

//large case
	$('input#in-cases_categories-7').on('change',function (e) {
		 e.preventDefault(); 
		 if($(this).is(':checked')){
			 $('input#in-cases_categories-8').prop("checked",false);
			 case_large_toggle();
		}
		});
//small case
	$('input#in-cases_categories-8').on('change',function (e) { 
		e.preventDefault(); 
		if($(this).is(':checked')){
			$('input#in-cases_categories-7').prop("checked",false);
			case_small_toggle();
		}
	});

//
//
// Categories cases control starts
//
//

$(document).on('change','select.fr-col-selector', function(){
    let design = this.value;
    let length = $(this).parent().children().length;
    let id = $(this).attr('data-id');
    let type = $(this).attr('data-type');
    let current_count = $(this).attr('data-count');
    console.log(design+' '+length);
    if(design === "design1"){
        if(length == 1){
            $(this).parent().append(
                '<div class="col-md-12 pl-0 pr-0">'+
                '<div class="grid-containe">'+
                fr_textarea(type,id,current_count,"scontent",'<table border="1" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td>Farve:</td><td>dsadaad<br>sdsad</td></tr><tr><td>Materiale:</td><td>dsad<br>dsad</td></tr><tr><td>Dimensioner:</td><td>dsad<br>dsadsad</td></tr><tr><td>Vægt:</td><td>dsad</td></tr><tr><td>Køling:</td><td>dsadadsssad</td></tr><tr><td>Display:</td><td>dsadas</td></tr><tr><td>Lysstyrke:</td><td><br></td></tr><tr><td>Strøm/Netværk:</td><td>dsadas</td></tr><tr><td>Strømforbrug:</td><td>dsadsad</td></tr></tbody></table>')+
                '</div>'+
            '</div>'
            );
        }
        else if(length == 3){
            $(this).parent().children('div:nth-of-type(2)').remove();
            $(this).parent().children('div:nth-of-type(1)').removeClass('col-md-6');
            $(this).parent().children('div:nth-of-type(1)').addClass('col-md-12 pr-0');
        }
        else{

        }
    }else{
        if(length == 1){
            $(this).parent().append(
                '<div class="col-md-6 pl-0">'+
                '<div class="grid-containe">'+
                fr_textarea(type,id,current_count,"scontent",'<table border="1" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td>Farve:</td><td>dsadaad<br>sdsad</td></tr><tr><td>Materiale:</td><td>dsad<br>dsad</td></tr><tr><td>Dimensioner:</td><td>dsad<br>dsadsad</td></tr><tr><td>Vægt:</td><td>dsad</td></tr><tr><td>Køling:</td><td>dsadadsssad</td></tr><tr><td>Display:</td><td>dsadas</td></tr><tr><td>Lysstyrke:</td><td><br></td></tr><tr><td>Strøm/Netværk:</td><td>dsadas</td></tr><tr><td>Strømforbrug:</td><td>dsadsad</td></tr></tbody></table>')+
                '</div>'+
            '</div>'+
            '<div class="col-md-6 pr-0">'+
            '<div class="grid-containe">'+
            fr_textarea(type,id,current_count,"scontent1",'<table border="1" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td>Farve:</td><td>dsadaad<br>sdsad</td></tr><tr><td>Materiale:</td><td>dsad<br>dsad</td></tr><tr><td>Dimensioner:</td><td>dsad<br>dsadsad</td></tr><tr><td>Vægt:</td><td>dsad</td></tr><tr><td>Køling:</td><td>dsadadsssad</td></tr><tr><td>Display:</td><td>dsadas</td></tr><tr><td>Lysstyrke:</td><td><br></td></tr><tr><td>Strøm/Netværk:</td><td>dsadas</td></tr><tr><td>Strømforbrug:</td><td>dsadsad</td></tr></tbody></table>')+
            '</div>'+
        '</div>'
            );
        }
        else if(length == 2){
            $(this).parent().children('div:nth-of-type(1)').removeClass('col-md-12 pr-0');
            $(this).parent().children('div:nth-of-type(1)').addClass('col-md-6');
            $(this).parent().append(
                '<div class="col-md-6 pr-0">'+
                '<div class="grid-containe">'+
                    fr_textarea(type,id,current_count,"scontent1",'<table border="1" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td>Farve:</td><td>dsadaad<br>sdsad</td></tr><tr><td>Materiale:</td><td>dsad<br>dsad</td></tr><tr><td>Dimensioner:</td><td>dsad<br>dsadsad</td></tr><tr><td>Vægt:</td><td>dsad</td></tr><tr><td>Køling:</td><td>dsadadsssad</td></tr><tr><td>Display:</td><td>dsadas</td></tr><tr><td>Lysstyrke:</td><td><br></td></tr><tr><td>Strøm/Netværk:</td><td>dsadas</td></tr><tr><td>Strømforbrug:</td><td>dsadsad</td></tr></tbody></table>')+
                '</div>'+
            '</div>'
            );
            CKEDITOR.inline('meta-box-'+type+'-scontent1-'+id+current_count);
        }
        else{

        }
    }
});




//
//
// clicker component starts
//
//
	$('#d_S').click(function(e){
		e.preventDefault();
		$("#entry_fire").attr('action',$("#entry_fire").attr("action")+"d="+$('#f_o').val()).submit();
	});

	//cloud top component
	var location = [{
		'x' : '',
		'y' : '' ,
	}],cMPos= [{
		'x' : '',
		'y' : '' ,
	}];
	var fr_scroll = 0;
	var fr_ele,fr_tops = 0, fr_lefts = 0;
	$('#cloud-page').scroll(function(e){
		fr_scroll  = $(this).scrollLeft();
	});
	var start_log = false;

	$('.click-on').mouseup(function(e){
		if(!start_log){	 
			if($(".clicker > img").is(e.target)){
                if($(e.target).parent().find('.c-info').hasClass('active')){
                    fr_ele = e.target;
                    location.x = e.pageX;
                    location.y = e.pageY;
                    $(fr_ele).parent().css({
                        'opacity' : 0.3
                    });
                    $(e.target).parent().removeClass('hov');
                    start_log = true;
                }
                else{
                    $('.c-info').removeClass('active');
                    $(e.target).parent().find('.c-info').addClass('active');
                }
            }
            
            if($("i.close-clicker").is(e.target)){
                $(e.target).parent().parent().find('.clicker-deleter').val("false");
                $(e.target).parent().parent().hide();
            }

            if($("i.book-clicker").is(e.target)){
                $("i.book-clicker").removeClass('gren-col');
                $("i.book-clicker").parent().parent().find('.clicker-marker').val("false");
                $(e.target).addClass('gren-col');
                $(e.target).parent().parent().find('.clicker-marker').val("true");
            }
		}else{	
            e.preventDefault();
			cMPos.x = e.pageX - $('.cloud-clicker').offset().left;
			cMPos.y = e.pageY - $('.cloud-clicker').offset().top;
			fr_tops = Math.floor((100 / ($(document).width() / (cMPos.y)))); 
			fr_lefts = Math.floor((100 / ($(document).width() / (cMPos.x + fr_scroll )))); 

			$(fr_ele).parent().css({
				'opacity' : 1,
				'top' : fr_tops + 'vw',
				'left' : fr_lefts + 'vw'
			});
			if(fr_lefts > 70)
				$(fr_ele).parent().find('.c-info').css({ 'margin-left' : '-25em'});
			$(fr_ele).parent().find('.clicker-top-v').val(fr_tops);
			$(fr_ele).parent().find('.clicker-left-v').val(fr_lefts);
			start_log=false;	
		}
			
    });

//
//
// clicker component ends
//
//


//
//
// global function helpers starts
//

//
//global function helepers variables
//

var drop_colors = [
    { value: '#aa8c46', name: 'Brown' }, 
	{ value: '#8ca5aa', name: 'Green'},
	{ value: '#fafafa', name: 'Grey'},
    { value: '#ffffff', name: 'White'},
    { value: '#000000', name: 'Black'},    
];

var overlay_colors = [
    { value: 'overlay-v-brown', name: 'Brown overlay' }, 
	{ value: 'overlay-v', name: 'Black overlay'},
	{ value: 'overlay-v-green', name: 'Green overlay'}
];


//
//
// 1 type = component type
// 2 id = post/page/taxonomy id
// 3 current_count = current no of that particular component in that page/post/taxonomy
// 4 character = custom key
// 5 value = value
// 6 btn_class = butoon class
//
//


	//funvtion del
	function fr_del_button(type,id,current_count){
		return ''+
		'<a class="button fr-del-button" data-id="'+id+'" data-typess="'+type+'" data-current-counter="'+current_count+'" data-main-counter="#fire_adder_counter'+id+'" data-sec-deleter="#fr-del'+id+type+current_count+'" id="fr-del'+id+type+current_count+'" data-order="#meta-fire-order'+id+current_count+'" >delete</a>'+
		'<a class="button fr-up-button" data-id="'+id+'" data-typess="'+type+'" data-current-counter="'+current_count+'" data-main-counter="#fire_adder_counter'+id+'" data-order-up="#fr-up'+id+type+current_count+'" id="fr-up'+id+type+current_count+'" data-order="#meta-fire-order'+id+current_count+'" >Up</a>'+
		'<a class="button fr-down-button" data-id="'+id+'" data-typess="'+type+'" data-current-counter="'+current_count+'" data-main-counter="#fire_adder_counter'+id+'" data-order-down="#fr-down'+id+type+current_count+'" id="fr-down'+id+type+current_count+'" data-order="#meta-fire-order'+id+current_count+'" >Down</a>';
		''
	}
	//function textarea 
	function fr_textarea(type,id,current_count,character,value = "Enter Text"){
		return '<textarea contenteditable="true" id="metabox'+type+character+id+current_count+'" name="meta-box-'+type+'-'+character+'-'+id+current_count+'" >'+value+'</textarea>';
	}
	//function input
	function fr_input(type,id,current_count,character){
		return '<input type="text" class="tooltips" name="meta-box-'+type+'-'+character+'-'+id+current_count+'" value="Place Your '+character+'"><span class="tooltiptext">Save first to select from dropdown</span>';	
	}
	//function image src
	//
	// back
	//    :true = iamge as background
	//    :false = img tag
	//
	function fr_image_src(type,id,current_count,back,character = "image",value= " ",btn_class = ""){
		var img = 	(back != "true") ? 
		'<img src="'+value+'" id="mymedia-'+id+type+current_count+character+'"><br>'+
		'<button type="button" class="button '+btn_class+'" id="mymed-'+id+type+current_count+character+'" data-media-images="#mymedia-'+id+type+current_count+character+'" data-media-uploader-target="#myplugin_media-'+id+type+current_count+character+'">Change Image</button>' 
		:
		'<button type="button" class="button '+btn_class+'" id="mymed-'+id+type+current_count+character+'" data-show="true"  data-media-images="#mymedia-'+id+type+current_count+character+'" data-media-uploader-target="#myplugin_media-'+id+type+current_count+character+'">Change Image</button>';
		return '<fieldset>'+
				'<div>'+
					'<input type="hidden" class="large-text" name="meta-box-'+type+'-'+character+'-'+id+current_count+'" id="myplugin_media-'+id+type+current_count+character+'" value="'+value+'">'+
				img+	
				'</div>'+
			'</fieldset>';
	}
	//function color selector

	function fr_back_color(type,id,current_count,character = "bgcolor",btn_class = "fr-stick-right"){
		let res = '<select id="metabox'+type+character+id+current_count+'" class="'+btn_class+'" name="meta-box-'+type+'-'+character+'-'+id+current_count+'">';
			for(var i = 0; i < drop_colors.length ; i++){
				res += '<option value="'+drop_colors[i].value+'">'+drop_colors[i].name+'</option>';
			}
		res += '</select>';
		return res;
	}

	//function desgin selector

	function fr_col_design(type,id,current_count,character = "col",number = 2){
		let res = '<select id="metabox'+type+character+id+current_count+'" data-id="'+id+'" data-count="'+current_count+'" data-type="'+type+'" class="fr-col-selector fr-stick-right2" name="meta-box-'+type+'-'+character+'-'+id+current_count+'">';
        var sel = ' ';
        
		res+='<option value="design'+2+'">Select cols</option>';
        for(var i = 1; i <= number; i++){

		res+='<option value="design'+i+'">Col '+i+'</option>';
		}
		res+='</select>';
		return res;
    }
	function fr_test_design(type,id,current_count,character = "design",number = 3,btn_class = "fr-stick-right2"){
		let res = '<select id="metabox'+type+character+id+current_count+'" class="'+btn_class+'" name="meta-box-'+type+'-'+character+'-'+id+current_count+'">';
		for(var i = 1; i <= number; i++){	
		res+='<option value="design'+i+'">Design '+i+'</option>';
		}
		res+='</select>';
		return res;
	}
	function fr_test_count(type,id,current_count,character = "counts",number = 3){
		let res = '<select id="metabox'+type+character+id+current_count+'" class="fr-stick-right3" name="meta-box-'+type+'-'+character+'-'+id+current_count+'">'+
        '<option value="all">all</option>';
        var j = 2;
        for(var i = 1; i <= number; i++){	
            j += 2;
		res+='<option value="'+j+'">'+j+'</option>';
		}
		res+='</select>';
		return res;
	}
    function fr_test_type(type,id,current_count,character = "design",btn_class = "fr-stick-right2"){
		let res = '<select id="metabox'+type+character+id+current_count+'" class="'+btn_class+'" name="meta-box-'+type+'-'+character+'-'+id+current_count+'">';
		res+='<option value="fire_cases">Case</option>'+
		      '<option value="fire_news">News</option>'+
                '</select>';
		return res;        
    }
	//function overlay colors
	function fr_overlay_color(type,id,current_count){
		let res = '<select class="fr-stick-right2" name="meta-box-'+type+'-dropdown-'+id+current_count+'">';
			for(var i = 0; i < overlay_colors.length ; i++){
				res += '<option value="'+overlay_colors[i].value+'">'+overlay_colors[i].name+'</option>';
			}
		res += '</select>';
		return res;
	}

	//function initlas
	function fr_initials(type,id,current_count,order){
		return 	'<input type="hidden" id="meta-fire-'+id+current_count+'" name="meta-fire-'+id+current_count+'" value="'+type+'">'+
		'<input type="hidden" id="meta-fire-order'+id+current_count+'" name="meta-fire-order'+id+current_count+'" value="'+order+'">';
	}


	//
	//
	//
	// functions start
	//
	//

	//funvtions hip
function hip(type,id,current_count,order){
    return 	''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="home" style="order:'+order+'">'+
    '<div class="hip">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    fr_back_color(type,id,current_count)+
    '<textarea contenteditable="true" id="metabox'+type+'title'+id+current_count+'" name="meta-box-'+type+'-title-'+id+current_count+'" ><div class="display-7">Place Your Text</div></textarea>'+
    '<fieldset>'+
        '<div>'+
            '<input type="hidden" class="large-text" name="meta-box-'+type+'-image-'+id+current_count+'" id="myplugin_media-'+id+type+current_count+'" value=" ">'+
            '<img src="'+wpa_data.image_path+'images.png" id="mymedia-'+id+type+current_count+'"><br>'+
            '<button type="button" class="button" id=" " data-media-images="#mymedia-'+id+type+current_count+'" data-media-uploader-target="#myplugin_media-'+id+type+current_count+'">Upload Image</button>'+
        '</div>'+
    '</fieldset>'+
    '<textarea contenteditable="true" id="metabox'+type+'title2'+id+current_count+'" name="meta-box-'+type+'-title2-'+id+current_count+'" ><div class="display-7">Text</div></textarea>'+
    '</div>'+
    '</section>';
}
function floater(type,id,current_count,order){
    return 	''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="home" style="order:'+order+'">'+
    '<div class="floater">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    fr_back_color(type,id,current_count)+
    '<textarea contenteditable="true" id="metabox'+type+'title'+id+current_count+'" name="meta-box-'+type+'-title-'+id+current_count+'" ><div class="display-5" style="font-family:Mark-Pro-Medium; letter-spacing:38">Place Your Text</div></textarea>'+
    fr_input(type,id,current_count,"placeholder1")+
    fr_input(type,id,current_count,"placeholder2")+
    fr_input(type,id,current_count,"email")+
    fr_input(type,id,current_count,"button")+
    '</div>'+
    '</section>';
}
function html(type,id,current_count,order){
    return 	''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="home" style="order:'+order+'">'+
    '<div class="html">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<textarea id="metabox'+type+'title'+id+current_count+'" name="meta-box-'+type+'-title-'+id+current_count+'" rows="10" >Enter Html Text</textarea>'+
     '</div>'+
    '</section>';
}
function ctaB(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="home" class="myctaB-'+id+type+current_count+'" style="order:'+order+'">'+
    '<div class="big-cta" id="mymedia-'+id+type+current_count+'" style="background:url('+wpa_data.image_path+'default/def-cta.png);background-size:cover;background-position-x: center;">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="overlay-v-brown">'+
    '</div>'+
    '<div class="wrapper">'+
        '<div class="text-wraps higher-index">'+
            '<div>'+
            fr_textarea(type,id,current_count,"title","<div class='display-0'>Lets Work</br><div class='text-white'>together</div></div>" )+
            '</div>'+
                '<p>'+
                fr_textarea(type,id,current_count,"content","<div class='display-2 fg-white work-sans'>Vi leverer mange typer af skærmløsninger og samarbejder tæt med vores kunder om at skræddersy en løsning der afspejler organisationens behov og ønsker.</div>")+
                '</p>'+
                fr_overlay_color(type,id,current_count)+
                '<a class="fr-button-link-black"><input type="text" name="meta-box-ctaB-Blink-'+id+current_count+'" value="Kontakt os"></a>'+
                '<br>'+
                fr_input(type,id,current_count,"link")+
                '<fieldset>'+
                '<div>'+
                    '<input type="hidden" class="large-text" name="meta-box-'+type+'-image-'+id+current_count+'" id="myplugin_media-'+id+type+current_count+'" value="'+wpa_data.image_path+'default/def-cta.png">'+
                    '<button type="button" class="button" id=" " data-show="true"  data-media-images="#mymedia-'+id+type+current_count+'" data-media-uploader-target="#myplugin_media-'+id+type+current_count+'">Change background</button>'+
                '</div>'+
                    '</fieldset>'+
                    '</div>'+
            '</div>'+
    '</div>'+
    '</section>';
}
function features(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="home" style="order:'+order+'">'+
    '<div class="fr-after-save">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<h3>Add or Edit Shows to display in feature</h3><br><h5>Save first to view</h5><br>'+
    '<a class="btn btn-primary" target="_blank" href="'+wpa_data.web_path+'/wp-admin/edit.php?post_type=fire_show">Edit Shows</a>'+
    '</div>'+
    '</section>';
}
function clouds(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id = "home" style="order:'+order+'">'+
    '<div class="cloud mb-0" >'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
        '<div class="big-wrapper" id="mymedia-'+id+type+current_count+'" style="background:url('+wpa_data.image_path+'home/cloud.jpg);background-size:cover;">'+
            '<div class="row">'+
                '<div class="col-md-6" style="position:relative">'+
                    '<div class="overlay-v-green"></div>'+
                    '<div style="position:relative">'+
                    fr_textarea(type,id,current_count,"title","<div class='display-11'>VISIOSIGN <div class='text-white'>CLOUD</div></div>")+
                    '<p class="display-4 position-relative">'+
                    fr_textarea(type,id,current_count,"content","<div class='display-4'><div class='text-white'>VisioSign kan hjælpe dig skabe et digitalt hus. Med VisioSign Cloud har du mulighed for centralt at styre alle dine informationsskærme fra et sted.</div><br><br>Globalt, regionalt og lokalt.</div>")+
                    '</p>'+
                    '<a class="fr-button-link-black"><input type="text" name="meta-box-cloud-Btext-'+id+current_count+'" value="Få et tilbud"></a>'+
                    '<br>'+
                    fr_input(type,id,current_count,"link")+
                    '<br>'+
                    fr_image_src(type,id,current_count,"true","image",wpa_data.image_path+'home/cloud.jpg')+
                    '</div>'+
                '</div>'+
                '<div class="col-md-6">'+
    
                '</div>'+
            '</div>'+
        '</div>'+
        '</div>'+
    '</section>';
} 
function ctas(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="home" style="order:'+order+'">'+
    fr_back_color(type,id,current_count)+
    fr_test_design(type,id,current_count,"design",4)+
    fr_back_color(type,id,current_count,"fgcolor","fr-stick-right3")+
    '<div class="fr-after-save">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="input-wrapper">'+
    fr_input(type,id,current_count,"link")+

    '</div><h3>Add or Edit Testimonials to display</h3><br><h5>Save first to view</h5><br>'+
    '<a class="btn btn-primary" target="_blank" href="'+wpa_data.web_path+'/wp-admin/edit.php?post_type=fire_testimonial">Edit Testimonial</a>'+
    '</div>'+
    '</section>';
}
function news_alone(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="home" style="order:'+order+'">'+
    '<div class="fr-after-save">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+

    '<div class="input-wrapper">'+
    fr_textarea(type,id,current_count,"title","<div class=display-6>Place title</div>")+'<br>'+
    fr_input(type,id,current_count,"link")+
    '</div><h4>Add or Edit News</h4><h5>Save first to view</h5><br>'+
    '<a class="btn btn-primary" target="_blank" href="'+wpa_data.web_path+'/wp-admin/edit.php?post_type=fire_news">Add or Edit News</a>'+

    '</div>'+
    '</section>';
}
function fire_cards(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="home" style="order:'+order+'">'+
    '<div class="fr-after-save">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    fr_test_type(type,id,current_count)+
    '<div class="input-wrapper">'+
    fr_textarea(type,id,current_count,"title","<div class=display-6>Place title</div>")+'<br>'+
    fr_input(type,id,current_count,"link")+
    '</div><h4>Add or Edit News</h4><h5>Save first to view</h5><br>'+
    '<a class="btn btn-primary" target="_blank" href="'+wpa_data.web_path+'/wp-admin/edit.php?post_type=fire_news">Add or Edit News</a>'+
    '</div>'+
    '</section>';
}
function fire_3cards(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="home" style="order:'+order+'">'+
    '<div class="fr-after-save">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="input-wrapper">'+
    fr_textarea(type,id,current_count,"title","<div class=display-6>Place title</div>")+'<br>'+
    fr_input(type,id,current_count,"link")+
    '</div><h4>Add or Edit Cases</h4><h5>Save first to view</h5><br>'+
    '<a class="btn btn-primary" target="_blank" href="'+wpa_data.web_path+'/wp-admin/edit.php?post_type=fire_cases">Add or Edit Case</a>'+
    
    '</div>'+
    '</section>';
}
function fire_reference(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="home" style="order:'+order+'">'+
    '<div class="fr-after-save">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="input-wrapper">'+
    fr_textarea(type,id,current_count,"title","<div class=display-6>Place title</div>")+'<br>'+
    '</div><h4>Add or Edit Reference</h4><h5>Save first to view</h5><br>'+
    '<a class="btn btn-primary" target="_blank" href="'+wpa_data.web_path+'/wp-admin/edit.php?post_type=fire_reference">Add or Edit Reference</a>'+
    
    '</div>'+
    '</section>';
}
function fire_carousel(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="home" style="order:'+order+'">'+
    '<div class="fr-after-save">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="input-wrapper">'+
    fr_input(type,id,current_count,"link")+
    '</div><h3>Add or Edit Carousel to display</h3><br><h5>Save first to view</h5><br>'+
    '<a class="btn btn-primary" target="_blank" href="'+wpa_data.web_path+'/wp-admin/edit.php?post_type=fire_carousel">Edit Carousel</a>'+
    '</div>'+
    '</section>';
}	
function fire_umbrella(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="home" style="order:'+order+'">'+
    '<div class="umbrella" style="order:'+order+'">'+
        fr_initials(type,id,current_count,order)+
        fr_del_button(type,id,current_count)+
        '<fieldset>'+
        '<div>'+
            '<input type="hidden" class="large-text" name="meta-box-'+type+'-image-'+id+current_count+'" id="myplugin_media1-'+id+type+'1'+current_count+'" value="'+wpa_data.image_path+'home/umbrella1.jpg">'+
            '<img class="d-image" src="'+wpa_data.image_path+'home/umbrella1.jpg" id="mymedia-'+id+type+'1'+current_count+'"><br>'+
            '<button type="button" class="button fr-esp-bot" id="mymed1-'+id+type+'1'+current_count+'" data-media-images="#mymedia1-'+id+type+'1'+current_count+'" data-media-uploader-target="#myplugin_media1-'+id+type+'1'+current_count+'">Change Image</button>'+	
        '</div>'+
        '</fieldset>'+
        '<div class="wrapper">'+
            '<div class="row">'+
                '<div class="col-sm-12 col-md-6 f-left">'+
                    '<h1 class="display-3">'+fr_textarea(type,id,current_count,"title","<div class='display-3'>Intern kommunikation. Dynamisk skiltning. Møderumsoversigt<br><div class='fg-brown'>Gjort enkelt.</div></div>")+'</h1>'+
                    
                '</div>'+
                '<div class="col-sm-12 col-md-6 f-right">'+
                    '<div>'+
                        '<fieldset>'+
                            '<div>'+
                                '<input type="hidden" class="large-text" name="meta-box-'+type+'-image2-'+id+current_count+'" id="myplugin_media2-'+id+type+'2'+current_count+'" value="'+wpa_data.image_path+'home/umbrella2.jpg">'+
                                '<img src="'+wpa_data.image_path+'home/umbrella2.jpg" id="mymedia2-'+id+type+'2'+current_count+'"><br>'+
                                '<button type="button" class="button fr-esp-left" id="mymed2-'+id+type+'2'+current_count+'" data-media-images="#mymedia2-'+id+type+'2'+current_count+'" data-media-uploader-target="#myplugin_media2-'+id+type+'2'+current_count+'">Change Image</button>'+	
                            '</div>'+
                        '</fieldset>'+
                    '<p class="display-2 m-65">'+
                    fr_textarea(type,id,current_count,"content","<div class='display-2'>VisioSign har igennem 20 år været firstmover indenfor digitale skærmbaserede løsninger. Vi er visionære og nyskabende i forhold til at følge med digitalisering af vores samfund. VisioSign er en katalysator og samarbejdspartner for virksomheder og organisationer.<br><br>Vi er eksperter i at lave skræddersyede løsninger til vores kunder. Vi kan faciliterer at indrette et digitalt hus og helt ned til løsninger bestående af en enkelt skærm</div>")+
                    '</p>'+
                    fr_input(type,id,current_count,"link")+
                    '<a class="fr-button-link-brown-border">'+
                    '<input type="text" name="meta-box-cloud-Blink-'+id+current_count+'" value="Læs mere om VisioSig">'+
                    '</a>'+
                    '</div>'+
                '</div>'+
            '</div>'+
        '</div>'+
        '</div>'+
    '</section>	';	
}
function onlyH(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="service-page" style="order:'+order+'">'+
    '<div class="only-header" id="mymedia-'+id+type+current_count+'" style="order:'+order+';background:url('+wpa_data.image_path+'service/mag1.jpg);background-position:center;background-size:cover;">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="overlay-v-brown"></div>'+
    '<div class="wrapper position-relative">'+
    '<h1 class="display-6">'+
    fr_textarea(type,id,current_count,"title","<div class='display-6'>Title</div>")+'</h1>'+
    '<div class="display-4">'+
    fr_textarea(type,id,current_count,"content","<div class='display-4'>VisioSign Service er den palet af ydelser vores dygtige programmører, teknikere, konsulenter og projektledere leverer. Dette sikrer, at alle kommer godt i gang med at bruge vores produkter.<br><br>Vi tilbyder både Start kit og mulighed for fleksibelt, at tilkøbe præcis den vejledning, udvikling, undervisning og projektledelse, der er behov for. Vi hjælper med at udvikle specialtilpassede løsninger og opkvalificere brugernes færdigheder.</div>")+'</div>'+
    '<div>'+
    fr_image_src(type,id,current_count,"true","image",wpa_data.image_path+'service/mag1.jpg')+
    '</div>'+
    '</section>';	
}
function page50(type,id,current_count,order){
    let res =  ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="service-page" style="order:'+order+'">'+
    '<div class="page-50" style="order:'+order+'" >'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="wrapper">'+
    '<div class="row">'+
        '<div class="col-md-6 page-pic">'+
        '<fieldset>'+
        '<div>'+
            '<input type="hidden" class="large-text" name="meta-box-'+type+'-image-'+id+current_count+'" id="myplugin_media1-'+id+type+'1'+current_count+'" value="'+wpa_data.image_path+'service/ART2.png">'+
            '<img src="'+wpa_data.image_path+'service/ART2.png" id="mymedia-'+id+type+'1'+current_count+'"><br>'+
            '<button type="button" class="button fr-esp-top" id="mymed1-'+id+type+'1'+current_count+'" data-media-images="#mymedia1-'+id+type+'1'+current_count+'" data-media-uploader-target="#myplugin_media1-'+id+type+'1'+current_count+'">Change Image</button>'+	
        '</div>'+
        '</fieldset>'+
        '</div>'+
        '<div class="col-md-6 page-desc">'+
        '<ul>';
             for(var j = 1; j < 7; j++) {
                res += '<li>'+
                        '<div class="img-wrapper">'+
                        '<fieldset>'+
                        '<div>'+
                            '<input type="hidden" class="large-text" name="meta-box-'+type+'-image-'+id+current_count+j+'" id="myplugin_media1-'+id+type+'1'+current_count+j+'" value="'+wpa_data.image_path+'solution/l'+j+'.png">'+
                            '<img src="'+wpa_data.image_path+'solution/l'+j+'.png" id="mymedia-'+id+type+'1'+current_count+j+'"><br>'+
                            '<button type="button" class="button fr-esp-right" id="mymed1-'+id+type+'1'+current_count+j+'" data-media-images="#mymedia1-'+id+type+'1'+current_count+j+'" data-media-uploader-target="#myplugin_media1-'+id+type+'1'+current_count+j+'">Change Image</button>'+	
                        '</div>'+
                        '</fieldset>'+
                        '</div>'+
                        '<p>'+
                        fr_textarea(type,id,current_count+j,"title","<div class='display-2 work-sans'>Enter text</div>")+
                        '</p>'+
                        '</li>';
             }
    res += '</ul>'+
        '</div>'+
        '</div>'+
        '</div>'+
        '<section>';

    return res;
}
function gridInfo(type,id,current_count,order){
    let res =  ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="service-page" style="order:'+order+'">'+
    '<div class="grid-info">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="wrapper">'+
        '<div class="row top">'+
            '<div class="col-md-8 px-0">'+
                '<h1 class="display-6 l-10">'+fr_textarea(type,id,current_count,"title","<div class='display-6 l-10'>Enter title</div>")+
                '</h1>'+
                '<p>'+fr_textarea(type,id,current_count,"content","<div class='display-9 l-10'>Vores Start-kits gør det nemt at komme i gang, udvikle en eksisterende løsning eller implementere en mere kompleks løsning. Vi har fire Start kits</div>")+'</p>'+
            '</div>'+
        '</div>'+			
        '<div class="row bot">'+
        '<div class="wrap">';
             for(var j = 0; j < 4; j++) {
                res += '<div class="block">'+
                            '<h3 class="my-accordion display-1 l-10">'+
                                fr_textarea(type,id,current_count+j,"title","<div class='display-1 l-10'>Informationsskærm<br><div class='fg-brown'>Informationsskærm</div></div>")+
                            '</h3>'+
                            '<div class="links">'+
                                '<div class="display-2 work-sans l-10">'+
                                    fr_textarea(type,id,current_count+j,"content","<div class='display-2 work-sans l-10'>Informationsskærm giver mulighed for at bruge alle funktioner i VisioSign Cloud. Her kombineres kommunikation, design, funktion og driftssikkerhed.</div>")+
                                '</div>'+
                            '</div>'+
                        '</div>';
             }
    res += '</div>'+
        '</div>'+
        '</div>'+
        '</div>'+
        '</section>';

    return res;		
}

function magazine(type,id,current_count,order){
    let res =  ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="service-page" style="order:'+order+'" >'+
    '<div class="magazine" >'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="wrapper">'+
        '<div class="row top">'+
         '<div class="col-md-6 left">'+
         fr_image_src(type,id,current_count,"false","image",wpa_data.image_path+'service/mag1.jpg')+
         fr_image_src(type,id,current_count,"false","image2",wpa_data.image_path+'service/mag2.jpg')+
         '</div>'+
         '<div class="col-md-6 right">'+
             '<div class="mag-wrap ml-auto">'+
                 '<h1 class="display-6">'+fr_textarea(type,id,current_count,"title","<div class='display-6'>Undervisning og træning</div>")+
                 '</h1>'+
                 '<h4 class="display-4">'+fr_textarea(type,id,current_count,"content","<div class='display-4'>Vi har en række dygtige undervisere og konsulenter, der har mange års erfaring i at undervise og træne bruger af vores system.</div>")+'</h4>'+
                 '<div class="row bot">'+	
                 '<div class="wrap wr-cols">';
                 for(var j = 0; j < 4; j++) {
                    res += '<div class="block">'+
                                '<h5 class="my-accordion display-1 l-10">'+
                                    fr_textarea(type,id,current_count+j,"title","<div class='display-1 l-10'>Title</div> ")+
                                '<div class="close">+</div></h5>'+
                                '<div class="links">'+
                                    '<div class="display-2 work-sans l-10">'+
                                        fr_textarea(type,id,current_count+j,"content","<div class='display-2 work-sans l-10'>På vores webinarer er der mange deltagere, der undervises i specifikke emner, funktioner eller arbejdsgange. Indholdet er tilrettelagt med mulighed for feedback og input undervejs</div> ")+
                                    '</div>'+
                                '</div>'+
                            '</div>';
                 }
        res += '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</div>'+
        '</div>'+
        '</div>'+
        '</section>';
        return res;
}

function blogList(type,id,current_count,order){
    let res=''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="service-page" style="order:'+order+'" >'+
    '<div class="blog-list" >'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="wrapper">';
    for( var j =0 ; j < 4; j ++) {
        res += '<div class="row" id="sec">'+
            '<div class="col-md-6 desc-wrap">'+
                '<div class="blog-desc mx-auto">'+
                '<h1 class="display-6 l-10">'+fr_textarea(type,id,current_count+j,"title","<div class='display-6 l-10'>Enter Title</div>")+'</h1>'+
                '<p class="display-2 work-sans l-10">'+fr_textarea(type,id,current_count+j,"content","<div class='display-2 work-sans l-10'>Vi har en række dygtige konsulenter og projektleder. Der kan hjælpe inspirerer og vejlede. Det kan være i forbindelse med digital indretning af bygninger, Re-design af organisationens skærme kampagner og god intern kommunikation. Tøv ikke i at kontakt os</div>")+'</p>'+
                '</div>'+
            '</div>'+
            '<div class="col-md-6 blog-img">'+
                fr_image_src(type,id,current_count+j,"false","image",wpa_data.image_path+'images.png')+
            '</div>'+
        '</div>';
    }
    res += '</div></div></section>';
    return res;
}

function sHero(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="backline-page" style="order:'+order+'" >'+
    '<div id="mymedia-'+id+type+current_count+'" class="small-hero" style="background:url('+wpa_data.image_path+'backline/back-inner/inner.jpg);background-size:cover;background-position:center;">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    fr_test_design(type,id,current_count,"design",2)+
    fr_image_src(type,id,current_count,"true","image",wpa_data.image_path+'backline/back-inner/inner.jpg')+
    '<div class="wrapper">'+
    '<div class="row top">'+
        '<div class="col-md-6 px-0">'+
            '<h1 class="display-6 l-10 text-white">'+fr_textarea(type,id,current_count,"title","<div class='display-6 l-10'>BLACKLINE™</div>")+'</h1>'+
            '<p class="display-4 fg-white-w">'+fr_textarea(type,id,current_count,"content","<div class='display-4'>VisioSign Blackline™ er specialdesignet og tilpasset de særlige forhold de skal fungere under. VisioSign har 20 års erfaring med at levere skærme.</div>")+'</p>'+
        '</div>'+
    '</div>'+

    '</div>'+
    '</div>'+
    '</section>';
}

function listGrids(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="backline-page"  style="order:'+order+'">'+
    '<div class="list-grids">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
        '<div class="wrapper">'+
            '<div class="row">'+
                '<div class="col-md-12 col-lg-7">'+
                    '<h1 class="display-4 fg-brown">'+fr_textarea(type,id,current_count,"title","<div class='display-4 fg-brown'>BLACKLINE</div>")+'</h1>'+
                    '<div class="display-4 work-sans fg-white-w">'+fr_textarea(type,id,current_count,"content","<div class='display-4 work-sans'>Informationsskærm giver mulighed for at bruge alle funktioner i Løsningen indeholder</div>")+
                '</div>'+
            '</div>'+
        '</div>'+
        '</div>'+
    '</section>';
}

function product_listing(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="backline-page" style="order:'+order+'">'+
    '<div class="fr-after-save">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="input-wrapper">'+
    fr_textarea(type,id,current_count,"title","<div class=display-6>Place title</div>")+'<br>'+
    fr_input(type,id,current_count,"link")+
    '</div><h3>Add or Edit Products to display</h3><br><h5>Save first to view</h5><br>'+
    '<a class="btn btn-primary" target="_blank" href="'+wpa_data.web_path+'/wp-admin/edit.php?post_type=fire_product">Edit Products</a>'+
    '</div>'+
    '</section>';
}
function simple_hero(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="case-page" style="order:'+order+'">'+
    '<div class="hero"  >'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="wrapper">'+
            '<h1 class="display-6 l-10">'+fr_textarea(type,id,current_count,"title","<div class='display-6'>Title</div>")+'</h1>'+
            '<p class="display-4">'+fr_textarea(type,id,current_count,"content","<div class='display-4'>Content</div>")+'</p>'+
    '</div>'+
    '</div>'+
    '</section>';
}
function onlyImg(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="case-large-page" style="order:'+order+'">'+
    fr_test_design(type,id,current_count,"design",2)+
    '<div class="header-image"  >'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="big-wrapper">'+
        fr_image_src(type,id,current_count,"false","image",wpa_data.image_path+'case/large/large.jpg',"fr-esp-top")+
    '</div>'+
    '</div>'+
    '</section>';	
}
function call(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="support-page"  style="order:'+order+'" >'+
    '<div class="call">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
        '<div class="wrapper">'+
            '<div class="row">'+
                '<div class="col-md-5 left">'+
                    '<h1 class="display-6 l-10">'+fr_textarea(type,id,current_count,"title","<div class='display-6'>Har du spørgsmål?</div><br><div class='display-1 fg-brown l-10'>Vi sidder klar til ved telefonern</div>")+'</h1>'+
                    '<div class="combo display-4">'+
                        '<img src="'+wpa_data.image_path+'support/call.png">'+
                        '<div>+45 3915 3321</div>'+
                    '</div>'+
                    '<p class="display-2 work-sans l-10">'+fr_textarea(type,id,current_count,"content","<div class='display-2 l-10'>Medarbejderne i supportafdelingen har vi håndplukket, fordi de besidder netop de egenskaber. For dem er det naturligt at tage ansvar for a</div><br><br><div class='display-1'>Support åbningstider</div>")+'</p>'+
                '</div>'+
                '<div class="col-md-9 content">'+
                        '<div class="forms" >'+
                        '<h2 class="display-4 form-titles bs-main">'+
                        fr_textarea(type,id,current_count,"formtitle","<div class='display-4'>Form Title</div>")+
                        '</h2>'+
                        '<div class="bs-callout bs-callout-info hidden">'+
                            '<h1 class="display-1 fg-brown">Tak for din henvendelse.Vores Supportteam vender tilbage hurtigst muligt.</h1>'+
                            '<a class="fr-button-link-brown-black" href="">Opret ny sag</a>'+
                            '</div>'+
                            fr_textarea(type,id,current_count,"shortcode","Enter form shortcode")+
                    '</div>'+
                '</div>'+
            '</div>'+
        '</div>'+

    '</section>';
}
function split(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="support-page" style="order:'+order+'" >'+
    '<div class="two-sec2" >'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
        '<div class="wrapper">'+
            '<div class="row">'+
                '<div class="col-md-4 page-desc">'+
                    '<div class="mag-wrap ">'+
                        '<h1 class="display-6">'+fr_textarea(type,id,current_count,"title","<div class='display-6'>Title</div>")+
                        '</h1>'+
                            '<p class="display-2 work-sans l-10">'+fr_textarea(type,id,current_count,"content","<div class='display-2 work-sans l-10'>Igennem 15 år har vi opbygget stærke og personlige relationer til vores kunder. Den gode kontakt sætter vi en dyd i at bevare. Vores kunder skal føle, at de trygt kan komme til os og få løst såvel små som store udfordringer i hverdagen. Vi lægger stor vægt på at yde en effektiv og kvalificeret personlig support, der lever op til kundernes tilfredshed. Det gælder både den tekniske og grafiske support. Derfor er en af VisioSigns kerneværdier, at vi skal være service-mindede<br><br>Medarbejderne i supportafdelingen har vi håndplukket, fordi de besidder netop de egenskaber. For dem er det naturligt at tage ansvar for at imødekomme vores kunders behov. Det er deres hovedfokus. Deres engagement og dedikerede indsats i forhold til vores kunder sikrer, at de målrettet bestræber sig på at give den bedste</div>")+
                    '</div>'+
                '</div>'+
                '<div class="col-md-8 page-pic">'+
                    fr_image_src(type,id,current_count,"false","image",wpa_data.image_path+'images.png')+
                '</div>'+
            '</div>'+
        '</div>'+
        '</div>'+
    '</section>';
}

function accord(type,id,current_count,order){
    let res =  ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="support-page" style="order:'+order+'">'+
    '<div class="accord"  >'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
        '<div class="wrapper">'+
            '<div class="row">'+
                '<div class="col-md-6">'+
                    '<h1 class="display-6">'+fr_textarea(type,id,current_count,"title","<div class='display-6'>Title</div>")+'</h1>'+
                    '<div class="accordion" id="accordionExample">'+
                    '<input type="hidden" id="meta-count-'+type+id+current_count+'" name="meta-count-'+type+id+current_count+'" value="0">'+
                    '<a class="button fr-down-button fr-imp" data-id="'+id+'" data-typess="'+type+'" data-current-counter="'+current_count+'" data-spec="#meta-count-'+type+id+current_count+'"  >ADD</a>';
    res += '</div>'+
                '</div>'+
                '<div class="col-md-6 pics">'+
                    fr_image_src(type,id,current_count,"false","image",wpa_data.image_path+'images.png')+
                '</div>'+
            '</div>'+
        '</div>'+
        '</div>'+
    '</section>';

    return res;
}

function cForm(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="priser-page" style="order:'+order+'">'+
    '<div class="contact-form position-relative" style="background:url('+wpa_data.image_path+'priser/back.jpg);background-size:cover;background-position:center;">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    fr_test_design(type,id,current_count,"design",3)+
    '<div class="overlay-v"></div>'+
                    '<div class="wrapper position-relative">'+
                        '<div class="row">'+
                            '<div class="col-md-8 content">'+
                                '<h2 class="display-6 l-10 fg-brown">'+
                                    fr_textarea(type,id,current_count,"title","<div class='display-6 fg-brown l-10'>Title</div>")+	
                                '</h2>'+
                                '<div class="row">'+
                                    '<div class="col-md-6 iconss">'+
                                        '<img src="'+wpa_data.image_path+'priser/phone.png">'+
                                    '</div>'+
                                    '<div class="col-md-6 icon-desc">'+
                                    fr_textarea(type,id,current_count,"content","<div class='display-4'>Ring til os</div><br><Br><div class='display-14'>+45 3963 3906</div><br><Br><div class='display-10 work-sans'>Telefonen er åben alle hverdage fra 9:00-16:00</div>")+	
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-4 forms" >'+
                                '<h2 class="display-6 l-10 fg-brown">'+
                                    fr_textarea(type,id,current_count,"formtitle","<div class='display-6 fg-brown l-10'>Title</div>")+
                                '</h2>'+

                                '<div class="bs-callout bs-callout-info hidden">'+
                                    '<h2 class="display-6 l-10 fg-brown form-titles">Success!</h2>'+
                                '</div>'+
                                    fr_textarea(type,id,current_count,"shortcode","<div class='display-4 text-white'>Enter Shortcode</div>")+
                            '</div>'+
                        '</div>'+
                        fr_image_src(type,id,current_count,"true","image",wpa_data.image_path+'priser/back.jpg')+
                    '</div>'+
                    '</div>'+
                '</section>';
}

function splitRev(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="aboutus-page" style="order:'+order+'">'+
    '<div class="two-sec-rev"  >'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    fr_test_design(type,id,current_count)+
    '<div class="wrapper">'+
        '<div class="row">'+
        '<div class="col-md-6 page-pic">'+
            fr_image_src(type,id,current_count,"false","image",wpa_data.image_path+'about/pic.jpg')+
        '</div>'+
        '<div class="col-md-6 page-desc">'+
            '<div class="mag-wrap">'+
                    '<h1 class="display-6">'+fr_textarea(type,id,current_count,"title","<div class='display-6 '>Title</div>")+'</h1>'+
                    '<p class="display-2 work-sans l-10">'+
                    fr_textarea(type,id,current_count,"content","<div class='display-2 work-sans l-10 '>isioSign er en dansk IT- og konsulentvirksomhed, der igennem 20 år har været first mover inden for digitale skærmbaserede løsninger. VisioSigns løsninger er udviklet til intern kommunikation, vejvisning, dynamisk skiltning, lokale- & møderumsskærme og visuelle digitale løsninger. VisioSign leverer skærmbaserede løsninger til moderne digitale bygninger.<br><br>Hos VisioSign arbejder vi med fremtiden, vi er visionære og nyskabende i forhold til at følge med digitalisering af vores samfund. I dag består VisioSign af 25 engagerede medarbejdere, der fra vores domicil i Birkerød er en katalysator og samarbejdspartner for virksomheder og organisationer. Vi har løsninger til dem, der ønsker en enkel skærm til digitalisering af kommunikationsopgaver, eller til dem der ønsker at indrette et digitalt hus.</div>")+
                    '</p>'+
                    '<div class="input-wrapper">'+
                    fr_input(type,id,current_count,"Blink")+
                    '</div>'+
                    '<a class="fr-button-link-normal-brown-border"><input type="text" name="meta-box-'+type+'-Btext-'+id+current_count+'" value="Place text"></a>'+
                    '<div class="input-wrapper">'+
                    fr_input(type,id,current_count,"Blink1")+
                    '</div>'+
                    '<a class="fr-button-link-normal-brown-border"><input type="text" name="meta-box-'+type+'-Btext1-'+id+current_count+'" value="Place text"></a>'+
            '</div>'+
        '</div>'+
    '</div>'+
    '</div>'+
    '<div class="back-image">'+
    '<fieldset>'+
    '<div>'+
        '<input type="hidden" class="large-text" name="meta-box-'+type+'-bImage-'+id+current_count+'" id="myplugin_medias-'+id+type+current_count+'" value="'+wpa_data.image_path+'home/cta.jpg">'+
        '<img src="'+wpa_data.image_path+'home/cta.jpg" id="mymedias-'+id+type+current_count+'"><br>'+
        '<button type="button" class="button fr-sp-but" id="bimage'+type+'" data-media-images="#mymedias-'+id+type+current_count+'" data-media-uploader-target="#myplugin_medias-'+id+type+current_count+'">Change background</button>'+
    '</div>'+
        '</fieldset>'+
    '</div>'+
    '</div>'+
    '</section>';
}
function tal(type,id,current_count,order){
    let res = ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="aboutus-page" style="order:'+order+'" >'+
    '<div class="tal" >'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="wrapper">'+
            '<div class="row">'+
            '<div class="col-md-6 prices">';
            for(var ii = 0; ii < 4; ii++){
                res += '<div>'+
                    '<h3 class="fg-brown l-10">'+
                    fr_textarea(type,id,current_count+ii,"number","<div class='disp-new'>200</div>")+'</h3>'+
                    '<div class="display-10 work-sans l-10">'+
                    fr_textarea(type,id,current_count+ii,"title","<div class='display-10 work-sans l-10 '>Title</div>")+
                    fr_image_src(type,id,current_count+ii,"false","image",wpa_data.image_path+'about/s1.jpg',"fr-esp-right")+
                    '</div>'+
                '</div>';
             } 
             res+='</div>'+
            '<div class="col-md-6 info">'+
                '<h1 class="display-6">'+fr_textarea(type,id,current_count,"title","<div class='display-6'>Title</div>")+'</h1>'+
                '<p class="display-2 work-sans l-10">'+fr_textarea(type,id,current_count,"content","<div class='display-2 work-sans l-10 '>brede kundegrundlag og erfaring gør os til en stærk samarbejdspartner. Vi deler rundhåndet ud af vores kompetencer, erfaringer og viden.</div>")+'</p>'+
            '</div>'+
        '</div>'+
    '</div>'+
    '</div>'+
    '</section>';
    return res;
}
function globe(type,id,current_count,order){
    let res = ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="aboutus-page" style="order:'+order+'" >'+
        '<div class="globe" >'+
        fr_initials(type,id,current_count,order)+
        fr_del_button(type,id,current_count)+
        '<div class="c-wrap">'+
            '<h1 class="display-6 l-10">'+fr_textarea(type,id,current_count,"title","<div class='display-6 l-10 '>Title</div>")+'</h1>'+
            '<h2 class="display-4">'+fr_textarea(type,id,current_count,"content","<div class='display-4'>Vi reflekterer over den måde, vi driver virksomhed på og tager ansvar. Det gør vi især inden for følgende fire om</div>")+'</h2>';
            for(var ii = 0; ii < 4; ii++){
            res += '<div class="row g-step">'+
                '<div class="col-md-4">'+
                    fr_image_src(type,id,current_count+ii,"false","image",wpa_data.image_path+'images.png')+
                '</div>'+
                '<div class="col-md-8">'+
                    '<h3 class="display-4">'+fr_textarea(type,id,current_count+ii,"content","<div class='display-4'>Vi leverer produkter, der påvirker vores klima mindst muligt. Derfor sparer vi på strømmen for at minimere udledning af CO2 i vores atmosfære</div>")+'</h3>'+
                '</div>'+
            '</div>';
            }

        res += '</div>'+
        '</div>'+
    '</section>';

    return res;
}

function circleSec(type,id,current_count,order){
    let res = ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="aboutus-page" style="order:'+order+'">'+
     '<div class="circle-sec"  >'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="wrapper">'+
        '<div class="row">'+
            '<div class="col-sm-12 col-md-5 fg-white">'+
                '<h1 class="display-4">'+fr_textarea(type,id,current_count,"title","<div class='display-4 text-white'>Vi samarbejder med organisationer inden for</div>")+'</h1>'+
                '<p class="display-2 work-sans l-10">'+fr_textarea(type,id,current_count,"content","<div class='display-2 work-sans l-10'>VisioSign startede med at levere intern kommunikation til produktions-virksomheder. Efterfølgende specialiserede vi os yderligere i skærmbaserede kommunikationsløsninger til uddannelses- og læringsmiljøer.</div>")+'</p>'+
            '</div>'+
            '<div class="col-sm-12 col-md-7">'+
                '<div class="same-place position-relative">'+
                '<ul class="circle-container higher-index">';
                for(var ii = 0 ; ii < 7 ; ii++){
                    res += '<li><div class="img-wrapper hide-until-5">'+
                        '<i class="fas fa-home fg-brown display-6"></i>'+
                    '</div><p class="work-sans display-2 l-10">'+fr_textarea(type,id,current_count+ii,"title","<div class='display-2 work-sans l-10 '>Title</div>")+'</p></li>';
                }
                res += '</ul>'+
                '<ul class="circle-containers">';
                for(var ii = 0 ; ii < 7 ; ii++){
                    res += '<li> <svg height="5vw" width="40">'+
                        '<path id="lineAB" d="M 20 20 l 1 100" stroke="#aa8c46" stroke-width="3" fill="none" />'+
                        
                        
                        '<g stroke="#aa8c46" stroke-width="3" fill="#aa8c46">'+
                            '<circle id="pointA" cx="20" cy="20" r=".75vw" />'+
                        '</g>'+
                        '</svg></li>';
                }
                res+= '</ul>'+
                '</div>'+
            '</div>'+
        '</div>'+
        '</div>'+
    '</div>'+
'</section>';

return res;
}

function bigHeader(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="info-page" style="order:'+order+'">'+
    '<div class="top-header">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="wrapper">'+
        '<div class="row">'+
            '<div class="col-md-7 left">'+
                '<h1 class="display-6 fg-white">'+fr_textarea(type,id,current_count,"title","<div class='display-2 fg-brown'>title</div><br><br><div class='display-6'>Title</div>")+'</h1>'+
                '<p class="display-9 fg-white">'+
                fr_textarea(type,id,current_count,"content","<div class='display-9'>nformationsskærme hjælper din virksomhed kommunikere klart, tydeligt og effektivt internt såvel som eksternt.</div>")+
                '</p>'+
                '<div class="input-wrapper">'+
                fr_input(type,id,current_count,"Blink")+
                '</div>'+
                '<a class="fr-button-link-normal-brown mt-0"><input type="text" name="meta-box-'+type+'-Btext-'+id+current_count+'" value="Place text"></a>'+
                '<div class="input-wrapper">'+
                fr_input(type,id,current_count,"Blink1")+
                '</div>'+
                '<a class="fr-button-link-normal-brown-border mt-0"><input type="text" name="meta-box-'+type+'-Btext1-'+id+current_count+'" value="Place text"></a>'+
            '</div>'+
            '<div class="col-md-5 right">'+
            fr_image_src(type,id,current_count,"false","image",wpa_data.image_path+'info/bg.jpg',"fr-top-right")+
            '</div>'+
        '</div>'+
    '</div>'+
    '</div>'+
'</section>';
}

function splitThree(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="info-page" style="order:'+order+'" >'+
    '<div class="blackline" >'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="big-wrapper">'+
        '<div class="wrapper">'+
        '<div class="row">'+
            '<div class="col-md-6 left px-0">'+
                '<h1 class="display-6">'+fr_textarea(type,id,current_count,"title","<div class='display-6'>Title</div>")+'</h1>'+
                '<p class="display-2 work-sans l-10">'+fr_textarea(type,id,current_count,"content","<div class='display-2 work-sans l-10'>Informationsskærme sikrer at medarbejdere får aktuel og relevant information præsenteret på en enkel, flot og effektiv måde. Desuden tilbyder VisioSign interaktive Infostandere og interaktive Infoborde der er mere tydelige i rummet og giver mulighed for at interagere, modtage nyheder og gode historier, der er med til give en god velkomst</div>")+'</p>'+
            '</div>'+
            '<div class="col-md-6 right">'+
                '<div class="row">'+
                    '<div class="col-xs-4 col-sm-4 col-md-4">'+
                    fr_image_src(type,id,current_count,"false","image",wpa_data.image_path+'info/b1.png',"fr-o-top")+
                    '</div>'+
                    '<div class="col-xs-4 col-sm-4 col-md-4">'+
                    fr_image_src(type,id,current_count,"false","image1",wpa_data.image_path+'info/b1.png',"fr-o-top")+
                    '</div>'+
                    '<div class="col-xs-4 col-sm-4 col-md-4">'+
                    fr_image_src(type,id,current_count,"false","image2",wpa_data.image_path+'info/b1.png',"fr-o-top")+
                    '</div>'+
                '</div>'+
                '<p class="display-2 work-sans l-10">'+fr_textarea(type,id,current_count,"tagLine","<div class='display-2 work-sans l-10'>Comment</div>")+'</p>'+
            '</div>'+
        '</div>'+
        '</div>'+
    '</div>'+
    '</div>'+
'</section>';
}

function magCarousel(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="info-page"  style="order:'+order+'">'+
    '<div class="magazine">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="wrapper">'+
    '<div class="row">'+
        '<div class="col-md-6 left">'+
        '<div class="input-wrapper">'+
        fr_input(type,id,current_count,"link")+
        '</div><h3>Add or Edit Carousel Items</h3><br><h5>Save first to view</h5><br>'+
        '<a class="btn btn-primary" target="_blank" href="'+wpa_data.web_path+'/wp-admin/edit.php?post_type=fire_carousel">Edit Carousel</a>'+
        '</div>'+
        '<div class="col-md-6 right">'+
        '<div class="mag-wrap ml-auto">'+
            '<h1 class="display-6">'+fr_textarea(type,id,current_count,"title","<div class='display-2 fg-brown'>title</div><br><br><div class='display-6'>Title</div>")+'</h1>'+
            '<div class="display-2 work-sans l-10">'+
            fr_textarea(type,id,current_count,"content","<div class='display-2 work-sans l-10'>Comment</div>")+
            '<div class="input-wrapper">'+
            fr_input(type,id,current_count,"blink")+
            '</div>'+
            '<a class="fr-button-link-brown-border mt-0"><input type="text" name="meta-box-'+type+'-btext-'+id+current_count+'" value="Place text"></a>'+
            '</div>'+
        '</div>'+
    '</div>'+
    '</div>'+
    '</div>'+
    '</section>';
}

function fiveSplit(type,id,current_count,order){
    let res = ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="info-page" style="order:'+order+'" >'+
    '<div class="fem bg-lightwhite" >'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="wrapper">'+
        '<h4 class="col-6 display-4">'+fr_textarea(type,id,current_count,"title","<div class='display-4'>Fem grunde til at bruge Infoskærm, Infostander og Infobord fra VisioSign til intern kommunikation</div>")+'</h1>'+
        '<div class="row-v w-100 fire-flex-wrap">';
            for(var ii = 0;ii < 5 ; ii++ ){
            res += '<div class="col-v">'+
            fr_image_src(type,id,current_count+ii,"false","image",wpa_data.image_path+'images.png')+
                '<h3 class="display-10 work-sans fg-brown l-10">'+fr_textarea(type,id,current_count+ii,"title","<div class='display-10 work-sans l-10'>Title</div>")+'</h3>'+
                '<p class="display-2 work-sans l-10">'+fr_textarea(type,id,current_count+ii,"content","<div class='display-2 work-sans l-10'>Medarbejderne på gulvet har ikke altid adgang til e-mail. Hos andre drukner de vigtige beskeder i de mange mails. Med infoskærme er det muligt at centralisere indholdsstyring og design på skærmene for at </div>")+'</p>'+
            '</div>';
            }
        res += '</div>'+
    '</div>'+
    '</div>'+
'</section>';
return res;
}

function magCarouselRev(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="info-page"  style="order:'+order+'">'+
    '<div class="magazine-rev bg-lightwhite">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="wrapper">'+
    '<div class="row">'+
        
        '<div class="col-md-6 right">'+
        '<div class="mag-wrap ml-auto">'+
            '<h1 class="display-6">'+fr_textarea(type,id,current_count,"title","<div class='display-2 fg-brown'>title</div><br><br><div class='display-6'>Title</div>")+'</h1>'+
            '<div class="display-2 work-sans l-10">'+
            fr_textarea(type,id,current_count,"content","<div class='display-2 work-sans l-10'>Comment</div>")+
            '<div class="input-wrapper">'+
            fr_input(type,id,current_count,"blink")+
            '</div>'+
            '<a class="fr-button-link-brown-border mt-0"><input type="text" name="meta-box-'+type+'-btext-'+id+current_count+'" value="Place text"></a>'+
            '</div>'+
        '</div>'+
    '</div>'+
    '<div class="col-md-6 left">'+
        '<div class="input-wrapper">'+
        fr_input(type,id,current_count,"link")+
        '</div><h3>Add or Edit Carousel Items</h3><br><h5>Save first to view</h5><br>'+
        '<a class="btn btn-primary" target="_blank" href="'+wpa_data.web_path+'/wp-admin/edit.php?post_type=fire_carousel">Edit Carousel</a>'+
        '</div>'+
    '</div>'+
    '</div>'+
    '</div>'+
    '</section>';
}

function clickers(type,id,current_count,order){
    return ''+
    '<input type="hidden"  id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="cloud-page" style="order:'+order+'" >'+
    '<div  class="cloud-clicker" >'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="click-wraps">'+
    '<fieldset>'+
    '<div>'+
        '<input type="hidden" class="large-text" name="meta-box-clicker-image-'+id+current_count+'"  id="myplugin_media-'+id+type+current_count+'" value="'+wpa_data.image_path+'cloud/main.jpg"><br>'+
        '<button type="button" class="button" id="events_video_upload_btn'+id+type+current_count+'" data-show="back" data-media-images="#mymedia-'+id+type+current_count+'" data-media-uploader-target="#myplugin_media-'+id+type+current_count+'">Change Image</button>'+
    '</div>'+
'</fieldset>'+
'<div class="click-on" id="mymedia-'+id+type+current_count+'" style="background:url('+wpa_data.image_path+'cloud/main.jpg);background-size:100%;">'+

'<div class="fr-after-save"><h4>Add components</h4><h5>    Save first to start eddting     </h5><br></div>'+
    '</div>'+
    '</div>'+
    '</div>'+
    '</section>';
}

function twoSec(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="cloud-page" style="order:'+order+'">'+
    '<div class="two-sec" >'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="wrapper">'+
        '<div class="row">'+
            '<div class="col-md-5 page-desc">'+
                '<div class="mag-wrap ">'+
                    '<h1 class="display-6">'+fr_textarea(type,id,current_count,"title","<div class='display-6'>Title</div>")+'</h1>'+
                    '<p>'+fr_textarea(type,id,current_count,"content","<div class='display-2'>Fra VisioSign Cloud administreres og driftes indhold, funktion, design, brugere og hardware. De brugere, der kobles på systemet, kan online opdatere en eller flere skærme inden for få minutter. Det er desuden muligt at tilgå VisioSign Cloud fra en telefon eller tablet og lave mindre ændringer. Der er mulighed for at tilknytte et uendeligt antal skærme og brugere på løsningerne.</div></div>")+'</p>'+
                '</div>'+
            '</div>'+
            '<div class="col-md-7 page-pic">'+
            '<fieldset>'+
            '<div>'+
                '<input type="hidden" class="large-text" name="meta-box-twoSec-video-'+id+current_count+'"  id="myplugin_media-'+id+type+current_count+'" value=""><br>'+
                '<video controls >'+
                    '<source src=" " type="video/mp4" id="mymedia-'+id+type+current_count+'">'+
                    'Your browser does not support the video tag.'+
                '</video><br>'+
                '<button type="button" class="button" id="events_video_place_btn'+id+type+current_count+'" data-media-images="#mymedia-'+id+type+current_count+'" data-media-uploader-target="#myplugin_media-'+id+type+current_count+'">Upload Video</button>'+
            '</div>'+
        '</fieldset>'+
        '<fieldset>'+
            '<div>'+
            '<label for="meta-box-twoSec-image-'+id+current_count+'">Poster of Video</label>'+
                '<input type="hidden" class="large-text" name="meta-box-twoSec-image-'+id+current_count+'"  id="myplugin_mediap-'+id+type+current_count+'" value="'+wpa_data.image_path+'images.png"><br>'+
                '<img src="'+wpa_data.image_path+'images.png" height="200" id="mymediap-'+id+type+current_count+'"><br>'+
                '<button type="button" class="button" id="events_video_poster_btn'+id+type+current_count+'" data-media-images="#mymediap-'+id+type+current_count+'" data-media-uploader-target="#myplugin_mediap-'+id+type+current_count+'">Upload Media</button>'+
            '</div>'+
        '</fieldset>'+
            '</div>'+
        '</div>'+
    '</div>'+
    '</div>'+
'</section>';
}
function inspires(type,id,current_count,order){
    let res = ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="solution-page" style="order:'+order+'">'+
                            '<div class="inspire">'+
                            fr_initials(type,id,current_count,order)+
                            fr_del_button(type,id,current_count)+
                            '<div class="wrapper">'+
                                '<div class="row">'+
                                    '<div class="col-md-6 left">'+
                                        '<h1 class="display-6">'+fr_textarea(type,id,current_count,"title","<div class='display-6'>Title</div>")+'</h1>'+
                                        '<h2 class="display-1">'+fr_textarea(type,id,current_count,"subcontent","<div class='display-1'>content</div>")+'</h2>'+
                                        '<p class="display-2 l-10">'+fr_textarea(type,id,current_count,"content","<div class='display-2'>content</div>")+'</p>'+
                                        fr_input(type,id,current_count,"link")+
                                        '<a class="fr-button-link-brown-black"><input type="text" name="meta-box-inspire-text-'+id+current_count+'" value="text"></a>'+
                                            '</div>'+
                                    '<div class="col-md-6 right">'+
                                        '<svg height="100%" width="450" viewBox="0 0 450 860">'+
                                            '<path d="M 10 10 l 0 840" stroke="#ccc" stroke-width="2" fill="none" />'+
                                            '<g  fill="#ccc">'+
                                                '<circle id="pointA" cx="10" cy="10" r="6" />'+
                                                '<circle id="pointB" cx="10" cy="130" r="6" />'+
                                                '<circle id="pointC" cx="10" cy="250" r="6" />'+
                                                '<circle id="pointC" cx="10" cy="370" r="6" />'+
                                                '<circle id="pointC" cx="10" cy="490" r="6" />'+
                                                '<circle id="pointC" cx="10" cy="610" r="6" />'+
                                                '<circle id="pointC" cx="10" cy="730" r="6" />'+
                                                '<circle id="pointC" cx="10" cy="850" r="6" />'+
                                            '</g>'+
                                            
                                            '</svg>'+
                                        '<ul>';

                                for(var j = 0; j < 8; j++){
                                            res+=''+
                                            '<li>'+
                                            '<div class="img-wrapper">'+
                                            fr_image_src(type,id,current_count+j,"false","image",wpa_data.image_path+'/solution/l2.png')+
                                            '</div>'+
                                                '<p class="display-2 work-sans">'+fr_textarea(type,id,current_count+j,"title")+'</p>'+
                                            '</li>';
                                }
                                res += '</ul>'+
                                    '</div>'+
                                '</div>'+
                                '</div>'+
                            '</div>'+
                        '</section>';
    return res;
}
function infoPriser(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="priser-page" style="order:'+order+'">'+
    '<div class="info-priser">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="wrapper">'+
    fr_test_design(type,id,current_count,"design",2,"fr-stick-right2")+
        '<div class="row">'+
            '<div class="col-md-6">'+
                '<h1 class="display-6">'+fr_textarea(type,id,current_count,"title","<div class='display-6'>Title</div>")+'</h1>'+
                '<p class="display-2">'+fr_textarea(type,id,current_count,"content","<div class='display-4'>Content</div>")+'</p>'+
            '</div>'+
            '<div class="col-md-6 pic">'+
                fr_image_src(type,id,current_count,"false","image",wpa_data.image_path+'images.png',"fr-esp-right")+
            '</div>'+
        '</div>'+
    '</div>'+
    '</div>'+
'</section>';
}
function productSpec(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="backline-inner-page" style="order:'+order+'">'+
    '<div class="magazine-rev">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    '<div class="big-wrapper position-relative">'+
                                '<div class="wrapper">'+
                                    '<div class="row">'+
                                        '<div class="col-md-6 right px-0">'+
                                            '<div class="mag-wrap mr-auto">'+
                                                '<h3 class="display-10 l-10 work-sans fg-white">'+
                                                fr_textarea(type,id,current_count,"varnumber","<div class='display-10 l-10 work-sans'>Varenummer: 303141</div>")+'</h3>'+
                                                '<h1 class="display-6 fg-white">'+
                                                fr_textarea(type,id,current_count,"content","<div class='display-6'>Multifunktionel skærm i elegant design</div>")+'</h1>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="col-md-6 left px-0 fg-white offset">'+
                                            '<div class="row">'+
                                                '<div class="col-md-6 pl-0">'+
                                                    fr_image_src(type,id,current_count,"false","image",wpa_data.image_path+'images.png',"fr-esp-right")+
                                                '</div>'+
                                                '<div class="col-md-6 pr-0">'+
                                                    fr_image_src(type,id,current_count,"false","image2",wpa_data.image_path+'images.png',"fr-esp-right")+
                                                '</div>'+
                                            '</div>'+
                                            '<h3 class="mark-regular display-4">'+
                                            fr_textarea(type,id,current_count,"stitle","<div class='display-4'>Specifikationer</div")+'</h3>'+
                                            '<div class="row work-sans display-10">'+
                                                fr_col_design(type,id,current_count)+
                                                '<div class="col-md-6 pl-0">'+
                                                    '<div class="grid-containe">'+
                                                    fr_textarea(type,id,current_count,"scontent",'<table border="1" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td>Farve:</td><td>dsadaad<br>sdsad</td></tr><tr><td>Materiale:</td><td>dsad<br>dsad</td></tr><tr><td>Dimensioner:</td><td>dsad<br>dsadsad</td></tr><tr><td>Vægt:</td><td>dsad</td></tr><tr><td>Køling:</td><td>dsadadsssad</td></tr><tr><td>Display:</td><td>dsadas</td></tr><tr><td>Lysstyrke:</td><td><br></td></tr><tr><td>Strøm/Netværk:</td><td>dsadas</td></tr><tr><td>Strømforbrug:</td><td>dsadsad</td></tr></tbody></table>')+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-6 pr-0">'+
                                                    '<div class="grid-containe">'+
                                                    fr_textarea(type,id,current_count,"scontent1",'<table border="1" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td>Farve:</td><td>dsadaad<br>sdsad</td></tr><tr><td>Materiale:</td><td>dsad<br>dsad</td></tr><tr><td>Dimensioner:</td><td>dsad<br>dsadsad</td></tr><tr><td>Vægt:</td><td>dsad</td></tr><tr><td>Køling:</td><td>dsadadsssad</td></tr><tr><td>Display:</td><td>dsadas</td></tr><tr><td>Lysstyrke:</td><td><br></td></tr><tr><td>Strøm/Netværk:</td><td>dsadas</td></tr><tr><td>Strømforbrug:</td><td>dsadsad</td></tr></tbody></table>')+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+				
    '</div>'+
    '</section>';
}
function tabbed(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="home" style="order:'+order+'">'+
    '<div class="fr-after-save">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+

    '<div class="input-wrapper">'+
    fr_textarea(type,id,current_count,"title","<div class=display-6>Place title</div>")+'<br>'+
    fr_textarea(type,id,current_count,"content","<div class=display-6>Place content</div>")+'<br>'+
    '</div><h4>Add or Edit Functions</h4><h5>Save first to view</h5><br>'+
    '<a class="btn btn-primary" target="_blank" href="'+wpa_data.web_path+'/wp-admin/edit.php?post_type=fire_function">Add or Edit Function</a>'+

    '</div>'+
    '</section>';		
}
function sameInfo(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="cloud-page" style="order:'+order+'">'+
    '<div class="some-info">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
            '<h2 class="display-6 l-10">'+fr_textarea(type,id,current_count,"title","<div class=display-6>Place title</div>")+'</h2>'+
            '<div class="row">'+
                '<div class="col-md-6 l-10">'+
                    '<p class="display-2">'+fr_textarea(type,id,current_count,"content","<div class=display-6>Place title</div>")+'</div>'+
                '<div class="col-md-6 l-10">'+
                    '<p class="display-2">'+fr_textarea(type,id,current_count,"content1","<div class=display-6>Place title</div>")+
                    '</p></div>'+
            '</div>'+
        '</div>'+
    '</section>';
}
function fire_gridShow(type,id,current_count,order){
    return ''+
    '<input type="hidden" id="meta-fire-'+type+id+current_count+'" name="meta-fire-'+type+id+current_count+'" value="true">'+
    '<section id="home" style="order:'+order+'">'+
    '<div class="fr-after-save">'+
    fr_initials(type,id,current_count,order)+
    fr_del_button(type,id,current_count)+
    fr_test_type(type,id,current_count)+
    fr_test_count(type,id,current_count,"counts",5)+
    '<div class="input-wrapper">'+
    '</div><h4>Select a type</h4><h5>Save first to view</h5><br>'+    
    '</div>'+
    '</section>';
}


	$('.fire_customs section').find($('.fr-imp')).hide();
	$('.fire_customs section').hover(function(){
		$(this).find($('.fr-imp')).show();
	},function(){
		$(this).find($('.fr-imp')).hide();
	});






	//adding initla data
	if(window.location.pathname == "/visio/wp-admin/post-new.php")
		{
			var id = $("#postimagediv .inside p a").attr('href').split("post_id=")[1].split("&")[0];
			if(window.location.search == "?post_type=fire_product"){
				var current_count = 0,order = 1,type="sHero";
				$('#fire-home').append(sHero("sHero",id,current_count,order));
				CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
				CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
				current_count = 1;order = 2;type="productSpec";
				$('#fire-home').append(productSpec(type,id,current_count,order));
				CKEDITOR.inline('meta-box-'+type+'-varnumber-'+id+current_count);
				CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
				CKEDITOR.inline('meta-box-'+type+'-stitle-'+id+current_count);
				CKEDITOR.inline('meta-box-'+type+'-scontent-'+id+current_count);
				CKEDITOR.inline('meta-box-'+type+'-scontent1-'+id+current_count);
				current_count = 2;order = 3;type="ctaB";
				$('#fire-home').append(ctaB(type,id,current_count,order));
				$('.myctaB-'+id+type+current_count).css('order',order);
				CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
				CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
				$('#fire_adder_counter'+id).val(3);
			}else if(window.location.search == "?post_type=fire_news"){
				var current_count = 0,order = 1,type="onlyImg";
				$('#fire-home').append(onlyImg(type,id,current_count,order));
				current_count = 1;order = 2;type="infoPriser";
				$('#fire-home').append(infoPriser(type,id,current_count,order));
				CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
				CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
				current_count = 2;order = 3;type="ctaB";
				$('#fire-home').append(ctaB(type,id,current_count,order));
				$('.myctaB-'+id+type+current_count).css('order',order);
				CKEDITOR.inline('meta-box-'+type+'-title-'+id+current_count);
				CKEDITOR.inline('meta-box-'+type+'-content-'+id+current_count);
				$('#fire_adder_counter'+id).val(3);
			}
		}

    $('#slugdiv').hide();
        
    $(document).scroll(function(){
        let sTop = $(document).scrollTop();
    if(sTop > 500 )
        $('input#publish').addClass('move-down-fire');
    else
        $('input#publish').removeClass('move-down-fire');
    });
    
});
