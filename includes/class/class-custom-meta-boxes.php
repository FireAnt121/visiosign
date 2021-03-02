<?php 

function clicker($object){
	wp_nonce_field(basename(__FILE__), "meta-box-nonce");
	$id = $object->ID;
	$c = "clicker";
	$savedI = get_post_meta( $id, 'meta-box-clicker-image-'.$id, true );
	?>
	<div id="cloud-page" class="fire_customs" data-sample="2">
	<fieldset>
		<div>
			<input type="hidden" class="large-text" name="meta-box-clicker-image-<?php echo $id;?>"  id="myplugin_media-<?php echo $id.$c.'1';?>" value="<?php echo esc_attr( $savedI ); ?>"><br>
			<button type="button" class="button" id="events_video_upload_btn" data-show="back" data-media-images="#mymedia-<?php echo $id.$c.'1';?>" data-media-uploader-target="#myplugin_media-<?php echo $id.$c.'1';?>"><?php _e( 'Upload Media', 'myplugin' )?></button>
		</div>
	</fieldset>
	<div class="fr-cloud-navigator"></div>
	<section class="click-on" id="mymedia-<?php echo $id.$c.'1';?>" style="background:url(<?php echo esc_attr( $savedI ); ?>);background-size:100%;">
			<?php 
				$count = (get_post_meta($id,"meta-box-clicker-count-".$id,true)) ? get_post_meta($id,"meta-box-clicker-count-".$id,true) : 0;
				for($i = 0; $i < get_post_meta($id,"meta-box-clicker-count-".$id,true); $i++ ){?>
				<div class="clicker c<?php echo $i; ?>" style="top:<?php echo get_post_meta($id,"fr-clicker-item-top".$i."-".$id,true); ?>vw;left:<?php echo get_post_meta($id,"fr-clicker-item-left".$i."-".$id,true); ?>vw">
					<input type="hidden" class="clicker-top-v" id="fr-clicker-item-top<?php echo $i; ?>-<?php echo $id; ?>" name="fr-clicker-item-top<?php echo $i; ?>-<?php echo $id; ?>" value="<?php echo get_post_meta($id,"fr-clicker-item-top".$i."-".$id,true);?>">
					<input type="hidden" class="clicker-left-v" id="fr-clicker-item-left<?php echo $i; ?>-<?php echo $id; ?>" name="fr-clicker-item-left<?php echo $i; ?>-<?php echo $id; ?>" value="<?php echo get_post_meta($id,"fr-clicker-item-left".$i."-".$id,true);?>">
					<input type="hidden" class="clicker-left-v" id="fr-clicker-item-pos<?php echo $i; ?>-<?php echo $id; ?>" name="fr-clicker-item-pos<?php echo $i; ?>-<?php echo $id; ?>" value="<?php echo get_post_meta($id,"fr-clicker-item-pos".$i."-".$id,true);?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cloud/clicker.png">
                <div class="c-info  <?php echo ($i == 0)? 'active' : ' '; ?>" id="testte" style="<?php echo (get_post_meta($id,"fr-clicker-item-left".$i."-".$id,true) > 70)? "margin-left:-25em" : " ";?>">
					<?php $savedI = get_post_meta( $id, 'fr-clicker-item-image'.$i.'-'.$id, true ); ?>
					<fieldset>
						<div>
							<input type="hidden" class="large-text" name="fr-clicker-item-image<?php echo $i; ?>-<?php echo $id; ?>"  id="myplugin_media-<?php echo $id.$c.$i;?>" value="<?php echo esc_attr( $savedI ); ?>"><br>
							<img src="<?php echo esc_attr( $savedI ); ?>" id="mymedia-<?php echo $id.$c.$i;?>">
							<button type="button" class="button" id="events_video_upload_btn<?php echo $c; ?>_<?php echo $i; ?>_<?php echo $id; ?>" data-media-images="#mymedia-<?php echo $id.$c.$i;?>" data-media-uploader-target="#myplugin_media-<?php echo $id.$c.$i;?>"><?php _e( 'Upload Media', 'myplugin' )?></button>
						</div>
					</fieldset>
                    <i class="fas fa-times close-clicker"></i>
                    <div class="mix-max">
                        <textarea  id="fire<?php echo $i; ?>" class="display-1"  name="fr-clicker-item-title<?php echo $i; ?>-<?php echo $id; ?>" contenteditable="true"><?php echo get_post_meta($id,"fr-clicker-item-title".$i."-".$id,true); ?></textarea>
						<?php fire_ck_input("fire".$i); ?>
						<textarea id ="frclickeritemsubtitle<?php echo $i; ?>_<?php echo $id; ?>" class="display-12 fg-brown" name="fr-clicker-item-subtitle<?php echo $i; ?>-<?php echo $id; ?>"><?php echo get_post_meta($id,"fr-clicker-item-subtitle".$i."-".$id,true); ?></textarea>
						<?php fire_ck_input("frclickeritemsubtitle".$i."_".$id); ?>
					</div>
					<textarea id="fireEditor<?php echo $i;?>"  class="work-sans l-10 display-13" rows="8" name="fr-clicker-item-conten<?php echo $i; ?>-<?php echo $id; ?>"><?php echo get_post_meta($id,"fr-clicker-item-conten".$i."-".$id,true); ?></textarea>
					<?php fire_ck_input("fireEditor".$i); ?>
                </div>
            	</div>	
			<?php 
				} 
			?>
			<input type="hidden" id="meta-box-clicker-count-<?php echo $id;?>" name="meta-box-clicker-count-<?php echo $id;?>" value="<?php echo $count;?>">
			<button type="button" class="button btn btn-primary fr-nav-leftter" id="1" img-path="<?php echo get_template_directory_uri(); ?>/assets/img/cloud/clicker.png" data-counter = "#meta-box-clicker-count-<?php echo $id;?>" data-form="<?php echo $id;?>" data-count="<?php echo $count; ?>" clicker-type="global-list">Add items</button><br>

		</section>
	</div>
	<?php 
}

function color_module($object){
	wp_nonce_field(basename(__FILE__), "meta-box-color-nonce");
	$id = $object->ID;
	$cout = 0;?>
	<div class="fire_customs">
		<label for="meta-box-fr-color-textcolor-<?php echo $id;?>">Button Text Color</label>
		<input name="meta-box-fr-color-textcolor-<?php echo $id;?>" type="color" value="<?php echo get_post_meta($object->ID, "meta-box-fr-color-textcolor-".$id, true); ?>">
		<br>
		<label for="meta-box-fr-color-texthovercolor-<?php echo $id;?>">Button Text Hover Color</label>
		<input name="meta-box-fr-color-texthovercolor-<?php echo $id;?>" type="color" value="<?php echo get_post_meta($object->ID, "meta-box-fr-color-texthovercolor-".$id, true); ?>">
		<br>
		<label for="meta-box-fr-color-backgroundcolor-<?php echo $id;?>">Button background Color</label>
		<input name="meta-box-fr-color-backgroundcolor-<?php echo $id;?>" type="color" value="<?php echo get_post_meta($object->ID, "meta-box-fr-color-backgroundcolor-".$id, true); ?>">
		<br>
		<label for="meta-box-fr-color-backgroundhovercolor-<?php echo $id;?>">Button background hover Color</label>
		<input name="meta-box-fr-color-backgroundhovercolor-<?php echo $id;?>" type="color" value="<?php echo get_post_meta($object->ID, "meta-box-fr-color-backgroundhovercolor-".$id, true); ?>">
		<br>
		<label for="meta-box-fr-color-bordercolor-<?php echo $id;?>">Button border Color</label>
		<input name="meta-box-fr-color-bordercolor-<?php echo $id;?>" type="color" value="<?php echo get_post_meta($object->ID, "meta-box-fr-color-bordercolor-".$id, true); ?>">
		<br>
		<label for="meta-box-fr-color-borderhovercolor-<?php echo $id;?>">Button border hover Color</label>
		<input name="meta-box-fr-color-borderhovercolor-<?php echo $id;?>" type="color" value="<?php echo get_post_meta($object->ID, "meta-box-fr-color-borderhovercolor-".$id, true); ?>">
		<br>
	</div>
	<?php
}

function forms($object){
	wp_nonce_field(basename(__FILE__), "meta-box-form-nonce");
	$id = $object->ID;
	$cout = 0;?>
	<div class="fire_customs">
	   <textarea id="fire_customs_paste" name="fire_customs_paste" rows=""></textarea>
		<button type="button" class="button btn btn-primary" id="paste-id" data-converter="<?php echo $id; ?>" data-counters = "<?php echo (get_post_meta($id, "meta-box-fr-form-list-count-".$id,true) > 0 ) ? get_post_meta($id, "meta-box-fr-form-list-count-".$id,true) : 0; ?>">Convert</button>
        <input type="hidden" name="meta-box-fr-forms-siteKey-<?php echo $id; ?>" id="meta-box-fr-forms-siteKey-<?php echo $id; ?>" value="<?php echo get_post_meta($object->ID, "meta-box-fr-forms-siteKey-".$id, true); ?>">
	    <br>
		<label for="meta-box-fr-forms-design-<?php echo $id;?>">Form Style</label>
		<select name="meta-box-fr-forms-design-<?php echo $id;?>">
			<?php $sel = get_post_meta($id,"meta-box-fr-forms-design-".$id,true); ?>
			<option value="light" <?php echo ( $sel == "light")? "selected" : " ";?>>Light</option>
			<option value="dark" <?php echo ( $sel == "dark")? "selected" : " ";?>>Dark</option>
		</select>
		<br>
		<label for="meta-box-fr-forms-embed-<?php echo $id;?>">Form Embed</label>
		<select name="meta-box-fr-forms-embed-<?php echo $id;?>">
			<?php $sele = get_post_meta($id,"meta-box-fr-forms-embed-".$id,true); ?>
			<option value="salesforce" <?php echo ( $sele == "salesforce")? "selected" : " ";?>>SalesForce</option>
			<option value="mailchimp" <?php echo ( $sele == "mailchimp")? "selected" : " ";?>>Mailchimp</option>
		</select>
		<br>
		<label for="meta-box-fr-forms-title-<?php echo $id;?>">Form Title</label>
		<textarea id="metaboxfrformstitle<?php echo $id;?>" name="meta-box-fr-forms-title-<?php echo $id;?>" rows="4"><?php echo get_post_meta($object->ID, "meta-box-fr-forms-title-".$id, true); ?></textarea>
		<?php fire_ck_input("metaboxfrformstitle".$id); ?>
		<br>
		<textarea name="meta-box-fr-forms-captcha-<?php echo $id;?>" id="meta-box-fr-forms-captcha-<?php echo $id;?>" class="hidden"><?php echo (get_post_meta($object->ID, "meta-box-fr-forms-captcha-".$id, true) != null ) ? get_post_meta($object->ID, "meta-box-fr-forms-captcha-".$id, true) : ' '; ?></textarea>
		<label for="meta-box-fr-forms-action-<?php echo $id;?>">Form Action</label>
		<textarea id="meta-box-fr-forms-action-<?php echo $id;?>" name="meta-box-fr-forms-action-<?php echo $id;?>" rows="4"><?php echo (get_post_meta($object->ID, "meta-box-fr-forms-action-".$id, true) != null ) ? get_post_meta($object->ID, "meta-box-fr-forms-action-".$id, true) : 'Enter Form Action'; ?></textarea>
		<br>
		<label for="meta-box-fr-forms-atitle-<?php echo $id;?>">Form Activation Title</label>
		<textarea name="meta-box-fr-forms-atitle-<?php echo $id;?>" rows="4"><?php echo get_post_meta($object->ID, "meta-box-fr-forms-atitle-".$id, true); ?></textarea>
		<br>
		<label for="meta-box-fr-forms-stitle-<?php echo $id;?>">Content Above Form</label>
		<textarea contenteditable="true" id="metaboxfrformsstitle<?php echo $id;?>" name="meta-box-fr-forms-stitle-<?php echo $id;?>" rows="4"><?php echo get_post_meta($object->ID, "meta-box-fr-forms-stitle-".$id, true); ?></textarea>
		<?php fire_ck_input("metaboxfrformsstitle".$id); ?>
		<br>
				<label for="meta-box-fr-forms-oid-<?php echo $id;?>">Form OID value</label>
		<textarea name="meta-box-fr-forms-oid-<?php echo $id;?>" id="meta-box-fr-forms-oid-<?php echo $id;?>" rows="1"><?php echo get_post_meta($object->ID, "meta-box-fr-forms-oid-".$id, true); ?></textarea>
		<br>
				<label for="meta-box-fr-forms-return-<?php echo $id;?>">Form return url</label>
		<textarea name="meta-box-fr-forms-return-<?php echo $id;?>" id="meta-box-fr-forms-return-<?php echo $id;?>" rows="1"><?php echo get_post_meta($object->ID, "meta-box-fr-forms-return-".$id, true); ?></textarea>
		<br>
		
				<div class="row">
				    <table class="w-100" id="forms-table-fr">
            			<tr>
            			    <th>Type</th>
            			    <th>Placeholder</th>
            			    <th>name</th>
            			    <th>id</th>
            			    <th>max-length</th>
            			    <th>required</th>
							<th>EXtra</th>
            			</tr>

	<?php 
	if(get_post_meta($id, "meta-box-fr-form-list-count-".$id,true)):
	  for($ii = 0; $ii < get_post_meta($id, "meta-box-fr-form-list-count-".$id,true); $ii++): ?>
		<tr>
			<td>
				<select name="meta-box-fr-forms-type<?php echo $ii;?>-<?php echo $id;?>">
					<?php $sel = get_post_meta($id,"meta-box-fr-forms-type".$ii."-".$id,true); ?>
					<option value="text" <?php echo ( $sel == "text")? "selected" : " ";?>>Text</option>
					<option value="number" <?php echo ( $sel == "number")? "selected" : " ";?>>Number</option>
					<option value="email" <?php echo ( $sel == "email")? "selected" : " ";?>>Email</option>
					<option value="textarea" <?php echo ( $sel == "textarea")? "selected" : " ";?>>Textarea</option>
					<option value="hidden" <?php echo ( $sel == "hidden")? "selected" : " ";?>>Hidden</option>
					<option value="select-one" <?php echo ( $sel == "select-one")? "selected" : " ";?>>select-one</option>
				</select>
			</td>
			<td>
				<input name="meta-box-fr-forms-placeholder<?php echo $ii;?>-<?php echo $id;?>" type="text" value="<?php echo get_post_meta($object->ID, "meta-box-fr-forms-placeholder".$ii."-".$id, true); ?>">
			</td>
			<td>
				<input name="meta-box-fr-forms-name<?php echo $ii;?>-<?php echo $id;?>" type="text" value="<?php echo get_post_meta($object->ID, "meta-box-fr-forms-name".$ii."-".$id, true); ?>">
			</td>
			<td>
				<input name="meta-box-fr-forms-id<?php echo $ii;?>-<?php echo $id;?>" type="text" value="<?php echo get_post_meta($object->ID, "meta-box-fr-forms-id".$ii."-".$id, true); ?>">
			</td>
			<td>
				<input name="meta-box-fr-forms-max<?php echo $ii;?>-<?php echo $id;?>" type="text" value="<?php echo get_post_meta($object->ID, "meta-box-fr-forms-max".$ii."-".$id, true); ?>">
			</td>
			<td>
				<input type='hidden' value='0' name="meta-box-fr-forms-required<?php echo $ii;?>-<?php echo $id;?>">
				<input type="checkbox" name="meta-box-fr-forms-required<?php echo $ii;?>-<?php echo $id;?>" value="1" <?php echo ( get_post_meta($id,"meta-box-fr-forms-required".$ii."-".$id,true) == "1")? "checked" : " ";?>>
			</td>
			<td>
            <textarea name="meta-box-fr-forms-options<?php echo $ii;?>-<?php echo $id;?>">
                <?php echo get_post_meta($object->ID, "meta-box-fr-forms-options".$ii."-".$id, true); ?>
            </textarea>
            </td>
		</tr>
		<?php 
			$cout++;
		 ?>
	<?php endfor;
	endif; ?>
				    </table>
				    </div>
		<input type="hidden" name="meta-box-fr-form-list-count-<?php echo $id;?>" id="meta-box-fr-form-list-count-<?php echo $id;?>" value="<?php echo get_post_meta($id, "meta-box-fr-form-list-count-".$id,true);?>">
		<!-- <button type="button" class="button btn btn-primary" id="1" data-counter = "#meta-box-fr-form-list-count-<?php echo $id;?>" data-form="<?php echo $id;?>" data-count="<?php echo $cout; ?>" fire-type="fr-forms">Add Form items</button><br> -->
		<br>
		<label for="meta-box-fr-forms-etitle-<?php echo $id;?>">Form end content</label>
		<textarea name="meta-box-fr-forms-etitle-<?php echo $id;?>" rows="4"><?php echo get_post_meta($object->ID, "meta-box-fr-forms-etitle-".$id, true); ?></textarea>
		<br>
		<label for="meta-box-fr-forms-email-<?php echo $id;?>">Form to email</label>
		<input name="meta-box-fr-forms-email-<?php echo $id;?>" type="text" value="<?php echo get_post_meta($object->ID, "meta-box-fr-forms-email-".$id, true); ?>">
		<br>
		<br>
		<label for="meta-box-fr-forms-btext-<?php echo $id;?>">Button Text</label>
		<input name="meta-box-fr-forms-btext-<?php echo $id;?>" type="text" value="<?php echo get_post_meta($object->ID, "meta-box-fr-forms-btext-".$id, true); ?>">
		<br>
	</div>
	<?php
}

function fr_shortcode($object){
	?>
		<input type="hidden" name="meta-box-fire-form-sc-<?php echo $object->ID; ?>" value="[pc_form fire_id=<?php echo $object->ID; ?>]">
		Shortcode<br>
		<?php echo "[pc_form fire_id=".$object->ID."]" ?>
	<?php
}
function fr_button_setter($name,$type,$id,$i,$full = 0){
	?>
	<button type="button" class="btn btn-primary <?php echo ($full != 0)? 'btn-r-setting' : ''; ?>" data-toggle="modal" data-target="#exampleModal<?php echo $type.$id.$i; ?>">
  Button Setting
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $type.$id.$i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel<?php echo $type.$id.$i; ?>" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel<?php echo $type.$id.$i; ?>">(Module : <?php echo $type; ?>)Button Setting</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <table class="table w-100">
		<thead>
			<tr>
				<th>text color</th>
				<th>text hover color</th>
				<th>background color</th>
				<th>border color</th>
				<th>background hover color</th>
				<th>hover border color</th>
			</tr>
			<tr>
			<td>  	
				<input type="color" id="primarytextcolor-<?php echo $type.$id.$i; ?>" name="primarytextcolor-<?php echo $type.$id.$i; ?>" value="<?php echo get_post_meta( $id, "primarytextcolor-".$type.$id.$i, true ); ?>"><br><br>
				</td>
				<td>
				<input type="color" id="hovertextcolor-<?php echo $type.$id.$i; ?>" name="hovertextcolor-<?php echo $type.$id.$i; ?>" value="<?php echo get_post_meta( $id,'hovertextcolor-'.$type.$id.$i, true ); ?>"><br><br>
				</td>
				<td>  	
				<input type="color" id="primarycolor-<?php echo $type.$id.$i; ?>" name="primarycolor-<?php echo $type.$id.$i; ?>" value="<?php echo get_post_meta( $id, "primarycolor-".$type.$id.$i, true ); ?>"><br><br>
				</td>
				<td>
				<input type="color" id="primarybordercolor-<?php echo $type.$id.$i; ?>" name="primarybordercolor-<?php echo $type.$id.$i; ?>" value="<?php echo get_post_meta( $id,'primarybordercolor-'.$type.$id.$i, true ); ?>"><br><br>
				</td>
				<td>
				<input type="color" id="hovercolor-<?php echo $type.$id.$i; ?>" name="hovercolor-<?php echo $type.$id.$i; ?>" value="<?php echo get_post_meta( $id,'hovercolor-'.$type.$id.$i, true ); ?>"><br><br>
				</td>
				<td>
				<input type="color" id="hoverbordercolor-<?php echo $type.$id.$i; ?>" name="hoverbordercolor-<?php echo $type.$id.$i; ?>" value="<?php echo get_post_meta( $id,'hoverbordercolor-'.$type.$id.$i, true ); ?>"><br><br>
				</td>
			</tr>
			<tr>
				<td>
					<?php $btn_trans = get_post_meta($id,"button-transition-".$type.$id.$i,true); ?>
					<select name="button-transition-<?php echo $type.$id.$i; ?>">
						<option value="yes" <?php echo ($btn_trans == "yes")? "selected" : " "; ?>>Transition</option>
						<option value="no"  <?php echo ($btn_trans == "no")? "selected" : " "; ?>>No transition</option>
					</select>
				</td>
				<td>
					<?php $btn_background = get_post_meta($id,"button-background-".$type.$id.$i,true); ?>
					<select name="button-background-<?php echo $type.$id.$i; ?>">
						<option value="yes" <?php echo ($btn_background == "yes")? "selected" : " "; ?>>Background</option>
						<option value="no" <?php echo ($btn_background == "no")? "selected" : " "; ?>>No background</option>
					</select>
				</td>
				<td>
				<select class="fire_button_selector_attr" 
				data-fire-color-type="<?php echo $type; ?>"
				data-id="<?php echo $id; ?>"
				data-i="<?php echo $i; ?>">
				<option value=" " >Select one</option>
				<?php
										$args = array('post_type' => 'fire_color','posts_per_page' => -1,'order'=>'DESC');
										//$optin_query = new WP_Query($args);
										$post_list = get_posts( $args);
										
										foreach ( $post_list as $post ) {
											$t_c  = get_post_meta($post->ID,'meta-box-fr-color-textcolor-'.$post->ID,true);
											$th_c  = get_post_meta($post->ID,'meta-box-fr-color-texthovercolor-'.$post->ID,true);
											$b_c  = get_post_meta($post->ID,'meta-box-fr-color-backgroundcolor-'.$post->ID,true);
											$bh_c  = get_post_meta($post->ID,'meta-box-fr-color-backgroundhovercolor-'.$post->ID,true);
											$bo_c  = get_post_meta($post->ID,'meta-box-fr-color-bordercolor-'.$post->ID,true);
											$boh_c  = get_post_meta($post->ID,'meta-box-fr-color-borderhovercolor-'.$post->ID,true);

										?>
										<option 
										value="<?php echo $t_c.','.$th_c.','.$b_c.','.$bh_c.','.$bo_c.','.$boh_c; ?>" ><?php echo $post->post_title; ?></option>
										<?php
										}
										?>
				</select>
				</td>
			</tr>
		</thead>
	</table>
      </div>
      <div class="modal-footer">
        Update to save your settings
      </div>
    </div>
  </div>
</div>
<?php
if($full == 0){
$primary = esc_html(get_post_meta( $id, 'primarycolor-'.$type.$id.$i, true ));
$primaryborder = esc_html(get_post_meta( $id, 'primarybordercolor-'.$type.$id.$i, true ));
$color = esc_html(get_post_meta( $id, 'primarytextcolor-'.$type.$id.$i, true ));
$hovercolor = esc_html(get_post_meta( $id, 'hovertextcolor-'.$type.$id.$i, true ));
$hover = esc_html(get_post_meta( $id, 'hovercolor-'.$type.$id.$i, true ));
$hoverborder = esc_html(get_post_meta( $id, 'hoverbordercolor-'.$type.$id.$i,true ));
$transition = esc_html(get_post_meta( $id, 'button-transition-'.$type.$id.$i, true ));
$background = esc_html(get_post_meta( $id, 'button-background-'.$type.$id.$i, true ));?>
	<a class="fr-button-link-global" 
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
	<input type="text" name="<?php echo $name; ?>"  value="<?php echo get_post_meta( $id, $name, true ); ?>">
	<svg xmlns="http://www.w3.org/2000/svg" style="fill:<?php echo $color; ?>;" viewBox="0 0 122.53 43.64"><title>arr</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M122.45,22.61l-.09.29a3.31,3.31,0,0,1-.12.42,3.06,3.06,0,0,1-.23.45l-.13.26a4.31,4.31,0,0,1-.49.62l-17,17.81a3.76,3.76,0,0,1-2.71,1.18A3.72,3.72,0,0,1,99,42.46a4.14,4.14,0,0,1,0-5.66l10.47-11H4A3.89,3.89,0,0,1,.21,23.16a4,4,0,0,1,3.61-5.35H109.45L99,6.84a4.16,4.16,0,0,1-.29-5.33v0L99,1.16a3.7,3.7,0,0,1,5.41,0l17,17.81a3.51,3.51,0,0,1,.48.6l.15.28c.07.11.13.25.19.37a3.53,3.53,0,0,1,.15.49,1.2,1.2,0,0,1,.1.51A3.31,3.31,0,0,1,122.45,22.61Z"/></g></g></svg>
	</a>
<?php
}
}
//
//
//globals variables starts 
//
//

function set_fr_image($id,$i,$type,$character = "image",$btn_class = ' '){
	echo '<fieldset>
		<div>
			<input type="hidden" class="large-text" name="meta-box-'.$type.'-'.$character.'-'.$id.$i.'" id="myplugin_media-'.$id.$type.$i.$character.'" value="'.esc_attr( get_post_meta( $id,"meta-box-".$type."-".$character."-".$id.$i, true ) ).'">
			<img src="'.esc_attr( get_post_meta( $id,"meta-box-".$type."-".$character."-".$id.$i, true ) ).'" id="mymedia-'.$id.$type.$i.$character.'"><br>
			<button type="button" class="button '.$btn_class .'" id="imedia-'. $id.$type.$i.$character.'" data-media-images="#mymedia-'. $id.$type.$i.$character.'" data-media-uploader-target="#myplugin_media-'. $id.$type.$i.$character.'">Upload</button>
		</div>
	</fieldset>';
}
function set_fr_content($character,$id,$i,$type){
	?>
		<textarea contenteditable="true" id="metabox<?php echo $type.$character.$id.$i; ?>" name='meta-box-<?php echo $type; ?>-<?php echo $character?>-<?php echo $id.$i; ?>' ><?php echo get_post_meta( $id, 'meta-box-'.$type.'-'.$character.'-'.$id.$i, true ); ?></textarea>
		<?php fire_ck_input('metabox'.$type.$character.$id.$i); ?>
	<?php
}
function set_fr_input($character,$id,$i,$type,$place=""){
	?>
	<input type="text" name="meta-box-<?php echo $type; ?>-<?php echo $character; ?>-<?php echo $id.$i; ?>" placeholder="<?php echo $place;?>" value="<?php echo get_post_meta( $id, 'meta-box-'.$type.'-'.$character.'-'.$id.$i, true ); ?>">
	<?php
}
function set_fr_drop($character,$id,$i,$type){
	?>
	<label for="meta-box-<?php echo $type; ?>-<?php echo $character; ?>-<?php echo $id.$i; ?>">Select a link for the page</label> 
	<?php wp_dropdown_pages( array(
									'name' => 'meta-box-'.$type.'-'.$character.'-'.$id.$i ,
									'id' => 'meta-box-'.$type.'-'.$character.'-'.$id.$i,
									'selected' => get_post_meta( $id, 'meta-box-'.$type.'-'.$character.'-'.$id.$i, true )
								));?>
	<?php
}
function set_del_button($id,$i,$type){
	?>

	<a class="button fr-del-button fr-imp" data-id="<?php echo $id; ?>" data-typess="<?php echo $type; ?>" data-current-counter="<?php echo $i; ?>" data-main-counter="#fire_adder_counter<?php echo $id; ?>" data-sec-deleter="#fr-del<?php echo $id.$type.$i; ?>" id="fr-del<?php echo $id.$type.$i; ?>" data-order="#meta-fire-order<?php echo $id.$i;?>">delete</a>
	<a class="button fr-up-button fr-imp" data-id="<?php echo $id; ?>" data-typess="<?php echo $type; ?>" data-current-counter="<?php echo $i; ?>" data-main-counter="#fire_adder_counter<?php echo $id; ?>" data-order-up="#fr-up<?php echo $id.$type.$i; ?>" data-order="#meta-fire-order<?php echo $id.$i;?>" id="fr-up<?php echo $id.$type.$i; ?>" >Up</a>
	<a class="button fr-down-button fr-imp" data-id="<?php echo $id; ?>" data-typess="<?php echo $type; ?>" data-current-counter="<?php echo $i; ?>" data-main-counter="#fire_adder_counter<?php echo $id; ?>" data-order-down="#fr-down<?php echo $id.$type.$i; ?>" data-order="#meta-fire-order<?php echo $id.$i;?>" id="fr-down<?php echo $id.$type.$i; ?>" >Down</a>
	<ul class='custom-menu'>
		<li data-action="first" class="bg-primary text-white">Save Module</li>
		<?php 
		global $wpdb;
		$table_name = $wpdb->prefix . "fire_module"; 
		$results = $wpdb->get_results( "SELECT * FROM $table_name WHERE module = '$type'"); 
		foreach($results as $r): ?>
		<li data-action="<?php echo $r->id; ?>">
			<?php echo $r->title; ?>
		</li>
		<?php endforeach; ?>
	</ul>
	<?php
}
function get_back_Color($id,$i,$type,$character = "bgcolor"){
	 echo get_post_meta( $id, 'meta-box-'.$type.'-'.$character.'-'.$id.$i, true );
}
function set_back_Color($id,$i,$type,$character = "bgcolor",$btn_class = "fr-stick-right"){
	$sele = get_post_meta( $id, 'meta-box-'.$type.'-'.$character.'-'.$id.$i, true );
	?>
	<select class="<?php echo $btn_class; ?> higher-index" id="metabox<?php echo $type.$character.$id.$i; ?>" name='meta-box-<?php echo $type; ?>-<?php echo $character?>-<?php echo $id.$i; ?>'>

	<option value="#aa8c46" <?php echo ($sele == "#aa8c46") ? 'selected' : ' ';?> >Brown</option>
	<option value="#8ca5aa" <?php echo ($sele == "#8ca5aa") ? 'selected' : ' ';?>>Green</option>
	<option value="#fafafa" <?php echo ($sele == "#fafafa") ? 'selected' : ' ';?>>Grey</option>
	<option value="#ffffff" <?php echo ($sele == "#ffffff") ? 'selected' : ' ';?>>White</option>
	<option value="#000000" <?php echo ($sele == "#000000") ? 'selected' : ' ';?>>Black</option>
	<option value="#4464c1" <?php echo ($sele == "#4464c1") ? 'selected' : ' ';?>>Blue</option>
	</select>
<?php
}
function set_test_design($id,$i,$type,$character = "design",$number = 3){
	$sele = get_post_meta( $id, 'meta-box-'.$type.'-'.$character.'-'.$id.$i, true );
	?>
	<select class="fr-stick-right2 higher-index" id="metabox<?php echo $type.$character.$id.$i; ?>" name='meta-box-<?php echo $type; ?>-<?php echo $character?>-<?php echo $id.$i; ?>'>
		<?php for($h = 1; $h <= $number; $h++):?>	
		<option value="design<?php echo $h; ?>" <?php echo ($sele == "design".$h ) ? 'selected' : ' ';?> >Design <?php echo $h; ?></option>
		<?php endfor; ?>
	</select>
<?php
}
function fr_test_count($id,$i,$type,$character = "counts",$number = 3){
	$sele = get_post_meta( $id, 'meta-box-'.$type.'-'.$character.'-'.$id.$i, true );
	?>
	<select class="fr-stick-right3 higher-index" id="metabox<?php echo $type.$character.$id.$i; ?>" name='meta-box-<?php echo $type; ?>-<?php echo $character?>-<?php echo $id.$i; ?>'>
	<option value="all" <?php echo ($sele == "all" ) ? 'selected' : ' ';?>>all</option>
	<?php
	$j = 2;
	for($i = 1; $i <= $number; $i++){	
		$j += 2; ?>
	<option value="<?php echo $j; ?>" <?php echo ($sele == $j ) ? 'selected' : ' ';?> ><?php echo $j; ?></option>
	<?php } ?> 
	</select>
<?php
}
function set_test_type($id,$i,$type,$character = "design",$number = 2){
	$sele = get_post_meta( $id, 'meta-box-'.$type.'-'.$character.'-'.$id.$i, true );
	?>
	<select class="fr-stick-right2 higher-index" id="metabox<?php echo $type.$character.$id.$i; ?>" name='meta-box-<?php echo $type; ?>-<?php echo $character?>-<?php echo $id.$i; ?>'>
	<option value="fire_cases" <?php echo ($sele == "fire_cases" ) ? 'selected' : ' ';?>>Case</option>
	<option value="fire_news" <?php echo ($sele == "fire_news" ) ? 'selected' : ' ';?>>News</option>
	</select>
<?php
}
function set_col_type($id,$i,$type,$character = "col",$number = 2){
	$sele = get_post_meta( $id, 'meta-box-'.$type.'-'.$character.'-'.$id.$i, true );
	?>
	<select class="fr-stick-right2 fr-col-selector higher-index" id="metabox<?php echo $type.$character.$id.$i; ?>" name='meta-box-<?php echo $type; ?>-<?php echo $character?>-<?php echo $id.$i; ?>'>
	<?php for($h = 1; $h <= $number; $h++):?>	
		<option value="design<?php echo $h; ?>" <?php echo ($sele == "design".$h ) ? 'selected' : ' ';?> >Col <?php echo $h; ?></option>
		<?php endfor; ?>
	</select>
<?php
}
function set_fr_initials($type,$id,$i){
	?>
		<h1 class="module-name-fire"><?php echo $type; ?></h1>
		<input type="hidden" id="meta-fire-<?php echo $id.$i; ?>" name="meta-fire-<?php echo $id.$i; ?>" value="<?php echo get_post_meta( $id, 'meta-fire-'.$id.$i, true ); ?>">

		<input type="hidden" id="meta-fire-order<?php echo $id.$i; ?>" name="meta-fire-order<?php echo $id.$i; ?>" value="<?php echo get_post_meta( $id, 'meta-fire-order'.$id.$i, true ); ?>">						
		
	<?php
}
function set_fr_gaps($type,$id,$i,$top,$bot){
		$ptop = (get_post_meta( $id, 'meta-box-'.$type.'-ptop-'.$id.$i, true ) >= 0 )? get_post_meta( $id, 'meta-box-'.$type.'-ptop-'.$id.$i, true ) : $top ;
		$pbot = (get_post_meta( $id, 'meta-box-'.$type.'-pbot-'.$id.$i, true ) >= 0 ) ? get_post_meta( $id, 'meta-box-'.$type.'-pbot-'.$id.$i, true ) : $bot ;
	?>
		<div class="fr-gaps-section">
			<label for="meta-box-<?php echo $type; ?>-ptop-<?php echo $id.$i; ?>">Gap of top</label>
			<input type="number" min="0" step="0.01" id="meta-box-<?php echo $type; ?>-ptop-<?php echo $id.$i; ?>" name="meta-box-<?php echo $type; ?>-ptop-<?php echo $id.$i; ?>" value="<?php echo $ptop; ?>">
			<label for="meta-box-<?php echo $type; ?>-pbot-<?php echo $id.$i; ?>">Gap of bot</label>			
			<input type="number" min="0" step="0.01" id="meta-box-<?php echo $type; ?>-pbot-<?php echo $id.$i; ?>" name="meta-box-<?php echo $type; ?>-pbot-<?php echo $id.$i; ?>" value="<?php echo $pbot; ?>">
		</div>
	<?php
}

//
//
//globals variables ends
//
//

// addd modules start
function adder($object){
	if ( $object->post_type == 'page' || $object->post_type == 'fire_product' || $object->post_type == 'fire_news' || $object->post_type == 'fire_cases' )
	{	
		$id = $object->ID; //id of the post => page
		$name = $object->post_name;	//name of the post type => page 
		//global charcterostics starts

		$type = " "; //type of the section
		$main_counter = get_post_meta($id, "fire_adder_counter".$id, true); // no of the sections in the post => page 
		// $hip_counter = get_post_meta($id, "fire_hip_counter".$id, true);  //no of the sections of the specific sections
		$types = array("hip","floater","ctaB","features","cloud","cta","nyhed","cards","3cards","reference","umbrella","carousel","onlyH","page50","gridInfo","magazine","blogList","sHero","listGrids","products","hero","onlyImg","call","split","accord","contactForm","splitRev","tal","globe","circleSec","bigHeader","splitThree","magCarousel","fiveSplit","magCarouselRev","clicker","twoSec","inspire","infoPriser","productSpec","tabbed","sameInfo","gridShow","html");
		//global characteristics end
		?>
			<!-- global fields starts -->
			<!-- main counter thats hold the number of sections -->
			<input type="hidden" id="fire_adder_counter<?php echo $id; ?>" name="fire_adder_counter<?php echo $id; ?>" value="<?php echo ($main_counter == null || $main_counter == '' )? 0 : $main_counter; ?>"/>
			<input type="hidden" id="meta-fr-type-<?php echo $id; ?>" name="meta-fr-type-<?php echo $id; ?>" value=" ">
			<div class="fr-imp-buttons">
			<!-- <a href="<?php echo get_site_url().'/'.$object->post_name; ?>/?preview=true" target="wp-preview-489" class="fr-prev-button">preview</a> -->
		</div>
			<!-- global fields ends -->
			<div class="fire_customs" id="fire-home">
			<?php // for($c = 0 ; $c < $main_counter ; $c++):?>
				<?php // if($hip_counter > 0):?> 
					<?php for($i = 0 ; $i < $main_counter ; $i++):?>
						<?php if(!empty(get_post_meta($id,'meta-fire-'.$id.$i,true))): ?>

							<?php $type= get_post_meta($id,'meta-fire-'.$id.$i,true); 
									$order = get_post_meta($id,'meta-fire-order'.$id.$i,true);
									?>
									<input type="hidden" id="meta-fire-<?php echo $type.$id.$i; ?>" name="meta-fire-<?php echo $type.$id.$i; ?>" value="true">
							<?php if($type == "hip"): ?>
								<section id="home" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
								<div class="hip" style="background:<?php echo get_post_meta( $id, 'meta-box-'.$type.'-bgcolor-'.$id.$i, true ); ?>; ?>">
									<?php set_fr_initials($type,$id,$i); ?>
									<!-- button for the section -->
									<?php set_del_button($id,$i,$type); ?>
									<?php set_back_Color($id,$i,$type); ?>
									<!-- buttton for the sections ends -->
									<?php set_fr_content("title",$id,$i,$type); ?>
									<!-- <textarea contenteditable="true" data-alive="true" id="metaboxhiptitle<?php echo $id.$i; ?>" name='meta-box-hip-title<?php echo $id.$i; ?>' ><?php echo get_post_meta( $id, 'meta-box-hip-title'.$id.$i, true ); ?></textarea>
									<?php //fire_ck_input('metaboxhiptitle'.$id.$i); ?> -->
									<fieldset>
										<div>
											<input type="hidden" class="large-text" name="meta-box-hip-image-<?php echo $id.$i; ?>" id="myplugin_media-<?php echo $id.$type.$i; ?>" value="<?php echo esc_attr( get_post_meta( $id, 'meta-box-hip-image-'.$id.$i, true ) ); ?>">
											<img src="<?php echo esc_attr( get_post_meta( $id, 'meta-box-hip-image-'.$id.$i, true ) ); ?>" id="mymedia-<?php echo $id.$type.$i; ?>"><br>
											<button type="button" class="button" id=" " data-media-images="#mymedia-<?php echo $id.$type.$i; ?>" data-media-uploader-target="#myplugin_media-<?php echo $id.$type.$i; ?>">Upload</button>
										</div>
									</fieldset>
									<?php set_fr_content("title2",$id,$i,$type); ?>
								</div>
								</section>

								<?php elseif($type == "floater"): ?>
								<section id="home" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
								<div class="floater" style="background:<?php echo get_post_meta( $id, 'meta-box-'.$type.'-bgcolor-'.$id.$i, true ); ?>; ?>">
									<?php set_fr_initials($type,$id,$i); ?>
									<!-- button for the section -->
									<?php set_del_button($id,$i,$type); ?>
									<?php set_back_Color($id,$i,$type); ?>
									<!-- buttton for the sections ends -->
									<?php set_fr_content("title",$id,$i,$type); ?>
									<?php set_fr_input("placeholder1",$id,$i,$type); ?>
									<?php set_fr_input("placeholder2",$id,$i,$type); ?>
									<?php set_fr_input("email",$id,$i,$type); ?>
									<?php set_fr_input("button",$id,$i,$type); ?>
									<!-- <textarea contenteditable="true" data-alive="true" id="metaboxhiptitle<?php echo $id.$i; ?>" name='meta-box-hip-title<?php echo $id.$i; ?>' ><?php echo get_post_meta( $id, 'meta-box-hip-title'.$id.$i, true ); ?></textarea>
									<?php //fire_ck_input('metaboxhiptitle'.$id.$i); ?> -->
								</div>
								</section>

								<?php elseif($type == "html"): ?>
								<section id="home" style="order:<?php echo $order; ?>">
								<div class="html">
									<?php set_fr_initials($type,$id,$i); ?>
									<!-- button for the section -->
									<?php set_del_button($id,$i,$type); ?>
									<!-- buttton for the sections ends -->
									<?php $character = "title"; ?>
									<textarea id="metabox<?php echo $type.$character.$id.$i; ?>" name='meta-box-<?php echo $type; ?>-<?php echo $character?>-<?php echo $id.$i; ?>' ><?php echo get_post_meta( $id, 'meta-box-'.$type.'-'.$character.'-'.$id.$i, true ); ?></textarea>
								</div>
								</section>
							<?php elseif($type == "ctaB"): ?>
								<section id="home" class="myctaB-<?php echo $id.$type.$i; ?> fr-sections" data-type="<?php echo $type; ?>" style="order:<?php echo $order; ?>">
								<div class="big-cta" id="mymedia-<?php echo $id.$type.$i; ?>" style="background:url(<?php echo esc_attr( get_post_meta( $id, 'meta-box-ctaB-image-'.$id.$i, true ) ); ?>);background-size:cover;background-position:center;">
									<?php set_fr_initials($type,$id,$i) ?>
									<?php set_del_button($id,$i,$type); 
									if( get_post_meta($id, "meta-box-ctaB-dropdown-".$id.$i, true) == "overlay-v"){
										$button = "fr-button-link-brown-white";
									}
									else{
									$button = "fr-button-link-black";
										}?>
										<div class="<?php echo get_post_meta($id, "meta-box-ctaB-dropdown-".$id.$i, true); ?>">
										</div>
										<div class="wrapper higher-index" >
											<div class="text-wraps higher-index">
												<h1 class="display-0">
													<textarea id="metabox<?php echo $type;?>title<?php echo $id.$i; ?>" name="meta-box-ctaB-title-<?php echo $id.$i;?>" type="text"><?php echo get_post_meta($id, "meta-box-ctaB-title-".$id.$i, true); ?></textarea>
													<?php fire_ck_input('metabox'.$type.'title'.$id.$i); ?>
												</h1>
													<p class="display-2 work-sans fg-white m-80">
													<textarea id="metabox<?php echo $type;?>content<?php echo $id.$i; ?>" name="meta-box-ctaB-content-<?php echo $id.$i;?>" ><?php echo get_post_meta($id, "meta-box-ctaB-content-".$id.$i, true); ?></textarea>
													<?php fire_ck_input('metabox'.$type.'content'.$id.$i); ?>
													</p>
													<!-- <button class="button-v bg-black fg-white">Få et tilbud</button> -->
													<select class="fr-stick-right2" name="meta-box-ctaB-dropdown-<?php echo $id.$i;?>">
													<?php
														$option_values = array('overlay-v-brown','overlay-v','overlay-v-green');
														foreach($option_values as $key => $value) 
														{
															if($value == get_post_meta($id, "meta-box-ctaB-dropdown-".$id.$i, true))
															{
														?>
																<option value="<?php echo $value; ?>" selected><?php echo $value; ?></option>
														<?php } else { ?>
																<option value="<?php echo $value; ?>"><?php echo $value;?></option>
														<?php }
															}
														?>
													</select>
													<?php 
													fr_button_setter('meta-box-ctaB-Blink-'.$id.$i,$type,$id,$i); ?>
													<!-- <a class="<?php echo $button;?>"><input type="text" name="meta-box-ctaB-Blink-<?php echo $id.$i; ?>" value="<?php echo get_post_meta( $id, 'meta-box-ctaB-Blink-'.$id.$i, true ); ?>"></a> -->
													<label for="meta-box-ctaB-link-<?php echo $id ?>">Select a link for the page</label> 
													<?php wp_dropdown_pages( array(
																					'name' => 'meta-box-ctaB-link-'.$id.$i ,
																					'id' => 'meta-box-ctaB-link-'.$id.$i,
																					'selected' => get_post_meta( $id, 'meta-box-ctaB-link-'.$id.$i, true )
																				));?>
													<br>
													<br>
													<?php
													$saved = get_post_meta( $id, 'meta-box-ctaB-image-'.$id.$i, true );
													?>
														<fieldset>
															<div>
																<input type="hidden" class="large-text" name="meta-box-<?php echo $type; ?>-image-<?php echo $id.$i; ?>" id="myplugin_media-<?php echo $id.$type.$i; ?>" value="<?php echo esc_attr( get_post_meta( $id, 'meta-box-ctaB-image-'.$id.$i, true ) ); ?>">
																<button type="button" class="button" id="mymed-<?php echo $id.$type.$i?>" data-media-images="#mymedia-<?php echo $id.$type.$i; ?>" data-media-uploader-target="#myplugin_media-<?php echo $id.$type.$i; ?>" data-show="true">Change Background</button>
															</div>
														</fieldset>
												</div>
										</div>
									</div>
								</section>
							<?php elseif($type == "features"): ?>
								<section id="home" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
								<div class="features">
									<?php set_fr_initials($type,$id,$i) ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="pos-abs2 text-white">
									Add or edit Shows <br><br>
									<a class="btn btn-primary" target="_blank" href="<?php echo site_url();?>/wp-admin/edit.php?post_type=fire_show">Edit</a>
									</div>
									<div class="big-wrapper" style="position:absolute;">
									<div class="row pandora-box hide-after-9">
									<?php
										$args = array('post_type' => 'fire_show','posts_per_page' => 4,'order'=>'ASC','orderby'=>'menu_order');
										//$optin_query = new WP_Query($args);
										$post_list = get_posts( $args);
										
										foreach ( $post_list as $post ) {
										?>
										
										<div class="col-md-3 pandora-item" style="position:relative;">
										<img src="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>">
										<h1 class="display-0 pandora-title p-main"><?php echo $post->post_title; ?></h1>
										<div class="pandora-content">
											<h2 class="display-0 m-30 text-white"><?php echo $post->post_title; ?></h2>
											<h2 class="display-4 m-55 text-white"><?php echo $post->post_content; ?></h2>
											<a class="fr-button-link-brown-white">Se mere</a>
										</div>
										</div>
										<?php
										}
										?>

										</div>
									</div>
								</div>
								</section>
							<?php elseif($type == "cloud"): ?>
								<section id="home"  data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
								<div class="cloud mb-0">
									<?php set_fr_initials($type,$id,$i) ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="big-wrapper" id="mymedia-<?php echo $id.$type.$i; ?>" style="background:url(<?php echo esc_attr( get_post_meta( $id, 'meta-box-cloud-image-'.$id.$i, true ) ); ?>);background-size:cover;">
										<div class="row">
											<div class="col-md-6" style="position:relative">
												<div class="overlay-v-green"></div>
												<div style="position:relative">
												<?php set_fr_content("title",$id,$i,$type); ?>
												<p class="display-4 m-65 position-relative"><?php set_fr_content("content",$id,$i,$type); ?>
												</p>
                                                <?php fr_button_setter('meta-box-cloud-Btext-'.$id.$i,$type,$id,$i); ?>
												<!-- <a class="fr-button-link-black"><input type="text" name="meta-box-cloud-Btext-<?php //echo $id.$i; ?>" value="<?php //echo get_post_meta( $id, 'meta-box-cloud-Btext-'.$id.$i, true ); ?>"></a> -->
												<label for="meta-box-cloud-link-<?php echo $id ?>">Select a link for the page</label> 
													<?php wp_dropdown_pages( array(
																					'name' => 'meta-box-cloud-link-'.$id.$i ,
																					'id' => 'meta-box-cloud-link-'.$id.$i,
																					'selected' => get_post_meta( $id, 'meta-box-cloud-link-'.$id.$i, true )
																				));?>
																								<?php
													$saved = get_post_meta( $id, 'meta-box-cloud-image-'.$id.$i, true );
													?>
														<fieldset>
															<div>
																<input type="hidden" class="large-text" name="meta-box-<?php echo $type; ?>-image-<?php echo $id.$i; ?>" id="myplugin_media-<?php echo $id.$type.$i; ?>" value="<?php echo esc_attr( get_post_meta( $id, 'meta-box-cloud-image-'.$id.$i, true ) ); ?>">
																<button type="button" class="button" id=" " data-media-images="#mymedia-<?php echo $id.$type.$i; ?>" data-media-uploader-target="#myplugin_media-<?php echo $id.$type.$i; ?>" data-show="true">Change</button>
															</div>
														</fieldset>
												</div>
											</div>
											<div class="col-md-6">
								
											</div>
										</div>
									</div>
									</div>
								</section>
							<?php elseif($type =="cta") :
								$design = get_post_meta($id,"meta-box-cta-design-".$id.$i,true);
								$bgcolor = get_post_meta($id,"meta-box-cta-bgcolor-".$id.$i,true);
								$fgcolor = get_post_meta($id,"meta-box-cta-fgcolor-".$id.$i,true);
								if($design == 'design3')
									$ied = 'case-large-page';
								elseif($design == 'design4')
									$ied = 'case-page';
								else
									$ied = 'home';?>
								<section id="<?php echo $ied; ?>" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>;">
								<div class="<?php echo ($design == 'design4')? 'testimon' : 'cta' ;	?>" style="background:<?php echo $bgcolor; ?>">
									<?php set_fr_initials($type,$id,$i) ?>
									<?php set_del_button($id,$i,$type);
									set_test_design($id,$i,$type,"design",4);
									set_back_color($id,$i,$type); 
									set_back_Color($id,$i,$type,"fgcolor","fr-stick-right3");
									?>

									<div class="pos-absmid text-white">
									Edit Testimonials <br><br>
									<a class="btn btn-primary" target="_blank" href="<?php echo site_url();?>/wp-admin/edit.php?post_type=fire_testimonial">Edit</a>
									</div>
									<div class="pos-absleft text-white">
									<label for="meta-box-cta-link-<?php echo $id ?>">Select a category fom testimonial</label> 
									<?php wp_dropdown_categories( array(
																	'name' => 'meta-box-cta-link-'.$id.$i ,
																	'id' => 'meta-box-cta-link-'.$id.$i,
																	'taxonomy' => 'testimonial_categories',
																	'selected' => get_post_meta( $id, 'meta-box-cta-link-'.$id.$i, true )
																));?>
									</div>
									<?php if($design == 'design4'): ?>
									<h1 class="display-6"><?php set_fr_content("title",$id,$i,$type); ?></h1>
									<?php endif; ?>
										<div id="carouselControls" class="<?php echo ($design != 'design3')? 'carousel' : ' ';?> slide" data-ride="carousel">
											<div class="carousel-inner">
											<?php
											$c = '';
											$category = get_post_meta( $id, 'meta-box-cta-link-'.$id.$i, true );
											$taxonomy = 'testimonial_categories';
											$terms = get_terms($taxonomy); // Get all terms of a taxonomy
													foreach ( $terms as $term ) { ?>
														<?php if($term->term_id == $category) {
																	$c = $term->slug; 
																break;}
																?>
													<?php } ?>
											<?php 
												$args = array('post_type' => 'fire_testimonial',
												'tax_query' => array(
												array(
													'taxonomy' => 'testimonial_categories',
													'field'    => 'slug',
													'terms'    => $c,
												),)
											);
												$the_query = new WP_Query($args);
												$count = 0;
												$post_list = get_posts( $args);
												foreach ( $post_list as $post ) {
													$idd = $post->ID;
												?>
													<?php if($design == 'design4'): ?>
														<?php if($count%2 == 0):?>
														<div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
														<div class="row">
																			<div class="col-md-6 hide-after-9">
																				<p class="display-5 l-10 fg-brown text-center">”<?php echo strip_tags(get_post_meta($idd,"meta-box-testimonial-content-".$idd,true)); ?>”</p>
																				<p class="display-1 "><?php echo get_post_meta($idd,"meta-box-testimonial-name-".$idd,true); ?></p>
																				<p class="display-1 work-sans"><?php echo get_post_meta($idd,"meta-box-testimonial-desg-".$idd,true); ?></p>
																			</div>
																		<?php else:?>
																			<div class="col-md-6 hide-after-9">
																				<p class="display-5 l-10 fg-blue text-center">”<?php echo strip_tags(get_post_meta($idd,"meta-box-testimonial-content-".$idd,true)); ?>”</p>
																				<p class="display-1 "><?php echo get_post_meta($idd,"meta-box-testimonial-name-".$idd,true); ?></p>
																				<p class="display-1 work-sans"><?php echo get_post_meta($idd,"meta-box-testimonial-desg-".$idd,true); ?></p>
																			</div>
																			</div>
																			</div>
														<?php endif; ?>

													<?php else: ?>
													<div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
																<?php if($design != 'design3'): ?>
																	<div class="text-center hero-left position-relative" >
																			<p class="display-5 work-sans m-30" style="text-align:center;color:<?php echo $fgcolor; ?> ;">
																				"<?php echo strip_tags(get_post_meta($idd,"meta-box-testimonial-content-".$idd,true)); ?>"
																			</p>
																			<h5 class="display-1"><?php echo get_post_meta($idd,"meta-box-testimonial-name-".$idd,true); ?></h5>
																			<h5 class="display-1 work-sans"><?php echo get_post_meta($idd,"meta-box-testimonial-desg-".$idd,true); ?></h5>
																	</div>

																<?php else: ?>
																	<div class="mid-text text-center">
																		<h1 class="display-11 l-10 " style="color:<?php echo $fgcolor; ?>;">"<?php echo strip_tags(get_post_meta($idd,"meta-box-testimonial-content-".$idd,true)); ?>”</h1>
																		<h4 class="display-1"><?php echo get_post_meta($idd,"meta-box-testimonial-name-".$idd,true); ?></h4>
																		<p class="display-1 work-sans"><?php echo get_post_meta($idd,"meta-box-testimonial-desg-".$idd,true); ?></p>
																</div>
																<?php endif; ?>
													</div>
											<?php endif;$count++; } ?>
											</div>
											<!-- <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
												<i class="fas fa-chevron-left " aria-hidden="true"></i>
											</a>
											<a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
												<i class="fas fa-chevron-right " aria-hidden="true"></i> -->
											</a>
										</div>

								</div>
								</section>
							<?php elseif($type == "nyhed"):
                                    $case = $object->post_type;
                                    ?>
								<section id="home" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
								<div class="nyhed">
								<?php set_fr_initials($type,$id,$i) ?>
                                <?php set_del_button($id,$i,$type); 
                                $btext = get_post_meta($id,'meta-box-nyhed-btext-'.$id.$i,true);?>
								<div class="pos-absmid text-white">
									Add or Edit News <br><br>
									<a class="btn btn-primary" target="_blank" href="<?php echo site_url();?>/wp-admin/edit.php?post_type=fire_news">Edit</a>
									</div>
								<div class="pos-absleft text-white">
								<label for="meta-box-nyhed-link-<?php echo $id.$i ?>">Select a category News</label> 
									<?php wp_dropdown_categories( array(
																	'name' => 'meta-box-nyhed-link-'.$id.$i ,
																	'id' => 'meta-box-nyhed-link-'.$id.$i,
																	'taxonomy' => 'news_categories',
																	'selected' => (get_post_meta( $id, 'meta-box-nyhed-link-'.$id.$i, true ) != "Place Your link") ? get_post_meta( $id, 'meta-box-nyhed-link-'.$id.$i, true ) : ' '
																));?>
								</div>
									<div class="wrapper">
										<div class="row">
											<h1 class="display-6 m-40 w-100">
											<?php set_fr_content("title",$id,$i,$type); ?>
                                            </h1>
                                            <?php 	fr_button_setter('meta-box-ctaB-Blink-'.$id.$i,$type,$id,$i,2); ?>
                                            <?php
                                                 $primary = esc_html(get_post_meta( $id, 'primarycolor-'.$type.$id.$i, true ));
                                                 $primaryborder = esc_html(get_post_meta( $id, 'primarybordercolor-'.$type.$id.$i, true ));
                                                 $color = esc_html(get_post_meta( $id, 'primarytextcolor-'.$type.$id.$i, true ));
                                                 $hovercolor = esc_html(get_post_meta( $id, 'hovertextcolor-'.$type.$id.$i, true ));
                                                 $hover = esc_html(get_post_meta( $id, 'hovercolor-'.$type.$id.$i, true ));
                                                 $hoverborder = esc_html(get_post_meta( $id, 'hoverbordercolor-'.$type.$id.$i,true ));
                                                 $transition = esc_html(get_post_meta( $id, 'button-transition-'.$type.$id.$i, true ));
                                                 $background = esc_html(get_post_meta( $id, 'button-background-'.$type.$id.$i, true ));
															$category = get_post_meta( $id, 'meta-box-nyhed-link-'.$id.$i,true);
															$taxonomy = 'news_categories';
															$c = '';
															$terms = get_terms($taxonomy); // Get all terms of a taxonomy
																	foreach ( $terms as $term ) { ?>
																		<?php if($term->term_id == $category) 
																					$c = $term->slug; ?>
																	<?php } 
											$args = array('post_type' => 'fire_news', 'posts_per_page' => 1,'order' => 'DESC', 
											'tax_query' => array(
											array(
												'taxonomy' => 'news_categories',
												'field'    => 'slug',
												'terms'    => $c,
											),
										));
											$post_list = get_posts( $args);
												
											foreach ( $post_list as $post ) {
												$idd = $post->ID;
											?>
													<div class="col-md-6 nyhed-wrapper">
														<img src="<?php echo get_the_post_thumbnail_url($idd); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($idd) , '_wp_attachment_image_alt', true);?>">
													</div>
													<div class="col-md-6 f-right">
														<h5 class="display-2 work-sans m-30 fg-grey"><?php echo get_the_date('j. F Y'); ?></h5>
														<h1 class="display-6 m-40"><?php echo get_the_title($idd); ?></h1>
														<p class="display-2 work-sans m-65"><?php echo get_the_excerpt($idd); ?>
                                                        </p>
                                                        <a class="fr-button-link-global" 
                                                            style=" background:<?php echo ($background == "no")? 'transparent' : $primary; ?> !important;
                                                                                        border-color:<?php echo $primaryborder; ?> !important;
                                                                                        color:<?php echo $color; ?> !important;" 
                                                                                onMouseOver="this.style.backgroundColor='<?php echo ($background == "no")? 'transparent' : $hover; ?> ';
                                                                                            this.style.borderColor='<?php echo $hoverborder; ?>';
                                                                                            <?php if($transition == "no"){  echo "this.style.padding='0.9375rem 6.75rem 0.9375rem 1.25rem';";} ?>
                                                                                            this.style.color='<?php echo $hovercolor; ?>';
                                                                                            this.children[0].style.fill='<?php echo $hovercolor; ?>'" 
                                                                                onMouseOut="this.style.backgroundColor='<?php echo ($background == "no")? 'transparent' : $primary; ?> ';
                                                                                            this.style.borderColor='<?php echo $primaryborder; ?>';
                                                                                            this.style.color='<?php echo $color; ?>';
                                                                                            this.children[0].style.fill='<?php echo $color; ?>'">
                                                                                            <?php echo $btext; ?>
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="<?php echo $primary; ?>" viewBox="0 0 122.53 43.64"><title>arr</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M122.45,22.61l-.09.29a3.31,3.31,0,0,1-.12.42,3.06,3.06,0,0,1-.23.45l-.13.26a4.31,4.31,0,0,1-.49.62l-17,17.81a3.76,3.76,0,0,1-2.71,1.18A3.72,3.72,0,0,1,99,42.46a4.14,4.14,0,0,1,0-5.66l10.47-11H4A3.89,3.89,0,0,1,.21,23.16a4,4,0,0,1,3.61-5.35H109.45L99,6.84a4.16,4.16,0,0,1-.29-5.33v0L99,1.16a3.7,3.7,0,0,1,5.41,0l17,17.81a3.51,3.51,0,0,1,.48.6l.15.28c.07.11.13.25.19.37a3.53,3.53,0,0,1,.15.49,1.2,1.2,0,0,1,.1.51A3.31,3.31,0,0,1,122.45,22.61Z"/></g></g></svg>
                                                            </a>
													</div>
											<?php } ?>
										</div>
                                    </div>
                                    <input type="text" class="fr-stick-right-5" name="meta-box-nyhed-btext-<?php echo $id.$i; ?>" value="<?php echo ($btext != null ) ? $btext : 'Enter Button text'; ?>">
								</div>
								</section>
							<?php elseif($type == "cards"): ?>
								<section id="home" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<!-- <label for="meta-box-cards-link-<?php echo $id.$i; ?>">Select a category</label> 
									<?php //wp_dropdown_categories( array(
															// 	'name' => 'meta-box-cards-link-'.$id.$i ,
															// 	'id' => 'meta-box-cards-link-'.$id.$i,
															// 	'taxonomy' => ($case == 'fire_cases') ? 'cases_categories' : 'news_categories',
															// 	'selected' => //get_post_meta( $id, 'meta-box-cards-link-'.$id.$i, true )
															// ));?> -->
									<div class="vision">
									<?php set_fr_initials($type,$id,$i) ?>
									<?php set_test_type($id,$i,$type); ?>
                                    <?php set_del_button($id,$i,$type); ?>
                                    <?php 	fr_button_setter('meta-box-ctaB-Blink-'.$id.$i,$type,$id,$i,2); ?>
									<?php $cat = (get_post_meta($id,'meta-box-cards-design-'.$id.$i,true) == "fire_news") ? 'news_categories' : 'cases_categories'; ?>
												<div class="wrapper m-55">
													<h1 class="display-6">
													<?php set_fr_content("title",$id,$i,$type); ?>
													</h1>
												</div>
												<div class="pos-absmid text-white">
													Edit <?php echo $cat;?> <br><br>
													<a class="btn btn-primary" target="_blank" href="<?php echo site_url();?>/wp-admin/edit.php?post_type=".$cat>Edit</a>
													</div>
													<div class="pos-absleft text-white">
													<label for="meta-box-cards-link-<?php echo $id ?>">Select a category from News</label> 
													<?php wp_dropdown_categories( array(
																					'name' => 'meta-box-cards-link-'.$id.$i ,
																					'id' => 'meta-box-cards-link-'.$id.$i,
																					'taxonomy' => $cat,
																					'selected' => get_post_meta( $id, 'meta-box-cards-link-'.$id.$i, true )
																				));?>
													</div>
												<div class="big-wrapper">
													<div class="row">
													<?php
                                                        $primary = esc_html(get_post_meta( $id, 'primarycolor-'.$type.$id.$i, true ));
                                                        $primaryborder = esc_html(get_post_meta( $id, 'primarybordercolor-'.$type.$id.$i, true ));
                                                        $color = esc_html(get_post_meta( $id, 'primarytextcolor-'.$type.$id.$i, true ));
                                                        $hovercolor = esc_html(get_post_meta( $id, 'hovertextcolor-'.$type.$id.$i, true ));
                                                        $hover = esc_html(get_post_meta( $id, 'hovercolor-'.$type.$id.$i, true ));
                                                        $hoverborder = esc_html(get_post_meta( $id, 'hoverbordercolor-'.$type.$id.$i,true ));
                                                        $transition = esc_html(get_post_meta( $id, 'button-transition-'.$type.$id.$i, true ));
                                                        $background = esc_html(get_post_meta( $id, 'button-background-'.$type.$id.$i, true ));
													$category = get_post_meta( $id, 'meta-box-cards-link-'.$id.$i,true);  
														$type = get_post_meta($id,'meta-box-cards-design-'.$id.$i,true);
														$c = '';
                                                        $btext = get_post_meta($id,'meta-box-cards-btext-'.$id.$i,true);


														$terms = get_terms($cat); // Get all terms of a taxonomy
														foreach ( $terms as $term ) { ?>
															<?php if($term->term_id == $category) 
																		$c = $term->slug; 
														}

														$args = array('post_type' => $type,'posts_per_page' => 4,'order' => 'DESC', 
														'tax_query' => array(
														array(
															'taxonomy' => $cat,
															'field'    => 'slug',
															'terms'    => $c,
														),
													));
														$the_query = new WP_Query($args);
														$post_list = get_posts( $args);
												
														foreach ( $post_list as $post ) {
															$idd = $post->ID;
														?>
																<div class="col-md-12 col-lg-3">
																	<div class="card-v">
																		<img src="<?php echo get_the_post_thumbnail_url($idd); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($idd) , '_wp_attachment_image_alt', true);?>">
																		<div class="card-v-content">
																			<h1 class="m-30 display-4"><?php echo get_the_title($idd); ?></h1>
																			<p class="display-2 work-sans m-40">
																				“<?php echo strip_tags(get_excerpt($idd,80)); ?>”
                                                                            </p>
                                                            <a class="fr-button-link-global" 
                                                            style=" background:<?php echo ($background == "no")? 'transparent' : $primary; ?> !important;
                                                                                        border-color:<?php echo $primaryborder; ?> !important;
                                                                                        color:<?php echo $color; ?> !important;" 
                                                                                onMouseOver="this.style.backgroundColor='<?php echo ($background == "no")? 'transparent' : $hover; ?> ';
                                                                                            this.style.borderColor='<?php echo $hoverborder; ?>';
                                                                                            <?php if($transition == "no"){  echo "this.style.padding='0.9375rem 6.75rem 0.9375rem 1.25rem';";} ?>
                                                                                            this.style.color='<?php echo $hovercolor; ?>';
                                                                                            this.children[0].style.fill='<?php echo $hovercolor; ?>'" 
                                                                                onMouseOut="this.style.backgroundColor='<?php echo ($background == "no")? 'transparent' : $primary; ?> ';
                                                                                            this.style.borderColor='<?php echo $primaryborder; ?>';
                                                                                            this.style.color='<?php echo $color; ?>';
                                                                                            this.children[0].style.fill='<?php echo $color; ?>'">
                                                                                            <?php echo $btext; ?>
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="<?php echo $primary; ?>" viewBox="0 0 122.53 43.64"><title>arr</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M122.45,22.61l-.09.29a3.31,3.31,0,0,1-.12.42,3.06,3.06,0,0,1-.23.45l-.13.26a4.31,4.31,0,0,1-.49.62l-17,17.81a3.76,3.76,0,0,1-2.71,1.18A3.72,3.72,0,0,1,99,42.46a4.14,4.14,0,0,1,0-5.66l10.47-11H4A3.89,3.89,0,0,1,.21,23.16a4,4,0,0,1,3.61-5.35H109.45L99,6.84a4.16,4.16,0,0,1-.29-5.33v0L99,1.16a3.7,3.7,0,0,1,5.41,0l17,17.81a3.51,3.51,0,0,1,.48.6l.15.28c.07.11.13.25.19.37a3.53,3.53,0,0,1,.15.49,1.2,1.2,0,0,1,.1.51A3.31,3.31,0,0,1,122.45,22.61Z"/></g></g></svg>
                                                            </a>
																		</div>
																	</div>
																</div>
														<?php } ?>
													</div>
												</div>
												<input type="text" class="fr-stick-right-5" name="meta-box-cards-btext-<?php echo $id.$i; ?>" value="<?php echo ($btext != null ) ? $btext : 'Enter Button text'; ?>">
									</div>
								</section>
							<?php elseif($type == "3cards"): ?>
								<section id="home" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>"> 
									<div class="kunde">
									<?php set_fr_initials($type,$id,$i) ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="pos-absmid text-white">
													Edit Cases <br><br>
													<a class="btn btn-primary" target="_blank" href="<?php echo site_url();?>/wp-admin/edit.php?post_type=fire_cases">Edit</a>
													</div>
													<div class="pos-absleft text-white">
													<label for="meta-box-3cards-link-<?php echo $id ?>">Select a category from Cases</label> 
													<?php wp_dropdown_categories( array(
																					'name' => 'meta-box-3cards-link-'.$id.$i ,
																					'id' => 'meta-box-3cards-link-'.$id.$i,
																					'taxonomy' => 'cases_categories',
																					'selected' => get_post_meta( $id, 'meta-box-3cards-link-'.$id.$i, true )
																				));?>
													</div>
										<div class="wrapper">
											<div class="row">
												<h1 class="display-6 m-40 w-100"><?php set_fr_content("title",$id,$i,$type); ?></h1>
											</div>
										</div>
										<div class="big-wrapper">
											<div class="row">
												<div class="col-md-8">
												<?php
																					$category = get_post_meta( $id, 'meta-box-3cards-link-'.$id.$i,true);
																					$taxonomy = 'cases_categories';
																					$c = '';
																					$terms = get_terms($taxonomy); // Get all terms of a taxonomy
																							foreach ( $terms as $term ) { ?>
																								<?php if($term->term_id == $category) 
																											$c = $term->slug; ?>
																							<?php } 
												$args = array('post_type' => 'fire_cases','posts_per_page' => 2,'order'=>'DESC',
												'tax_query' => array(
												array(
													'taxonomy' => $taxonomy,
													'field'    => 'slug',
													'terms'    => $c,
												),
											));
												$the_query = new WP_Query($args);
												$count = 0;
												$post_list = get_posts( $args);
												
												foreach ( $post_list as $post ) { $idd = $post->ID;?>
														<?php if($count == 0) {?>
															<div class="card-lg-v m-30">
														<?php }else {?>
															<div class="card-lg-v float-right">
														<?php } ?>
															<img src="<?php echo get_the_post_thumbnail_url($idd); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($idd) , '_wp_attachment_image_alt', true);?>">
																<div class="card-v-content">
																	<h1 class="display-1"><?php echo get_the_title($idd); ?></h1>
																</div>
															</div>
													<?php $count++; }?>
												</div>
												<div class="col-md-4">
												<?php
													$args = array('post_type' => 'fire_cases','posts_per_page' => 1, 'offset' => 2, 'order'=>'ASC',
													'tax_query' => array(
													array(
														'taxonomy' => 'cases_categories',
														'field'    => 'slug',
														'terms'    => $c,
													),
												));
												$post_list = get_posts( $args);
													foreach ( $post_list as $post ) { $idd = $post->ID;?>
															<div class="card-lg-v">
															<img src="<?php echo get_the_post_thumbnail_url($idd); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($idd) , '_wp_attachment_image_alt', true);?>">
																<div class="card-v-content">
																	<h1 class="display-1"><?php echo get_the_title($idd); ?></h1>
																</div>
															</div>
														<?php } ?>
												</div>
											</div>
										</div>
									</div>
								</section>
							<?php elseif($type == "reference"): ?>
								<section id="home" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
								<div class="reference" >
								<?php set_fr_initials($type,$id,$i) ?>
								<?php set_del_button($id,$i,$type); ?>
								<div class="pos-absmid text-white">
													Edit Reference <br><br>
													<a class="btn btn-primary" target="_blank" href="<?php echo site_url();?>/wp-admin/edit.php?post_type=fire_reference">Edit</a>
													</div>
									<div class="wrapper">
										<h1 class="display-6 m-55"><?php set_fr_content("title",$id,$i,$type); ?>	</h1>
										<div class="row m-40">
										<?php
											$args = array('post_type' => 'fire_reference', 'order'=>'ASC', 'posts_per_page' => 6 );
											$post_list = get_posts( $args);
												
											foreach ( $post_list as $post ) {
												$idd = $post->ID;
											?>
													<div class="col-sm-2">
														<img src="<?php echo get_the_post_thumbnail_url($idd); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($idd) , '_wp_attachment_image_alt', true);?>">
													</div>
											<?php } ?>
										</div>
										<div class="row m-80">
										<?php
											$args = array('post_type' => 'fire_reference','order'=>'ASC','offset' => 6);
											$post_list = get_posts( $args);
												
											foreach ( $post_list as $post ) {
												$idd = $post->ID;
											?>
													<div class="col-sm-2">
														<img src="<?php echo get_the_post_thumbnail_url($idd); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($idd) , '_wp_attachment_image_alt', true);?>">
													</div>
											<?php } ?>
										</div>
										<div class="row button-center">
										<a class="fr-button-link-brown-border"><input type="text" name="meta-box-reference-Blink-<?php echo $id.$i; ?>" value="<?php echo get_post_meta( $id, 'meta-box-reference-Blink-'.$id.$i, true ); ?>"></a>
										<label for="meta-box-reference-link-<?php echo $id ?>">Select a link for the page</label>
													<?php wp_dropdown_pages( array(
																					'name' => 'meta-box-reference-link-'.$id.$i ,
																					'id' => 'meta-box-reference-link-'.$id.$i,
																					'selected' => get_post_meta( $id, 'meta-box-reference-link-'.$id.$i, true )
																				));?>
										</div>
									</div>
											</div>
								</section>
							<?php elseif($type == "umbrella"): ?>
								<section id="home" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>"> 
								<div class="umbrella">
									<?php set_fr_initials($type,$id,$i) ?>
									<?php set_del_button($id,$i,$type); ?>
									<fieldset>
													<div>
														<input type="hidden" class="large-text" name="meta-box-umbrella-image-<?php echo $id.$i; ?>" id="myplugin_media2-<?php echo $id.$type.$i; ?>" value="<?php echo esc_attr( get_post_meta( $id, 'meta-box-umbrella-image-'.$id.$i, true ) ); ?>">
														<img class="d-image" src="<?php echo esc_attr( get_post_meta( $id, 'meta-box-umbrella-image-'.$id.$i, true ) ); ?>" id="mymedia2-<?php echo $id.$type.$i; ?>"><br>
														<button type="button" class="button fr-esp-bot" id="imedia2-<?php echo $id.$type.$i; ?>" data-media-images="#mymedia2-<?php echo $id.$type.$i; ?>" data-media-uploader-target="#myplugin_media2-<?php echo $id.$type.$i; ?>">Change Image</button>
													</div>
												</fieldset>
									<div class="wrapper">
										<div class="row">
											<div class="col-sm-12 col-md-6 f-left">
												<h1 class="display-3"><?php set_fr_content("title",$id,$i,$type); ?></h1>

											</div>
											<div class="col-sm-12 col-md-6 f-right">
												<div>
												<fieldset>
													<div>
														<input type="hidden" class="large-text" name="meta-box-umbrella-image2-<?php echo $id.$i; ?>" id="myplugin_media-<?php echo $id.$type.$i; ?>" value="<?php echo esc_attr( get_post_meta( $id, 'meta-box-umbrella-image2-'.$id.$i, true ) ); ?>">
														<img src="<?php echo esc_attr( get_post_meta( $id, 'meta-box-umbrella-image2-'.$id.$i, true ) ); ?>" id="mymedia-<?php echo $id.$type.$i; ?>"><br>
														<button type="button" class="button fr-esp-left" id="imedia-<?php echo $id.$type.$i; ?>" data-media-images="#mymedia-<?php echo $id.$type.$i; ?>" data-media-uploader-target="#myplugin_media-<?php echo $id.$type.$i; ?>">Change Image</button>
													</div>
												</fieldset>
												<p class="display-2 m-65">
												<?php set_fr_content("content",$id,$i,$type); ?>
												</p>
												<label for="meta-box-umbrella-link-<?php echo $id.$i; ?>">Select a link for the page</label> 
											<?php wp_dropdown_pages( array(
																	'name' => 'meta-box-umbrella-link-'.$id .$i,
																	'id' => 'meta-box-umbrella-link-'.$id.$i,
																	'selected' => get_post_meta( $id, 'meta-box-umbrella-link-'.$id.$i, true )
																));?>
																<?php set_fr_input("link-anchor",$id,$i,$type,"Enter anchor if available");?>
                                                <?php fr_button_setter('meta-box-umbrella-Blink-'.$id.$i,$type,$id,$i); ?>

												</div>
											</div>
										</div>
									</div>
								</div>
								</section>
							<?php elseif($type == "carousel"): ?>
								<section id="home" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>" >
									<div class="carousel">
								<?php set_fr_initials($type,$id,$i) ?>
								<?php set_del_button($id,$i,$type); ?>

									<div class="pos-absmid text-white">
									Edit Carousel <br><br>
									<a class="btn btn-primary" target="_blank" href="<?php echo site_url();?>/wp-admin/edit.php?post_type=fire_carousel">Edit</a>
									</div>
									<div class="pos-absleft text-white">
									<label for="meta-box-carousel-link-<?php echo $id.$i ?>">Select a category Carousel</label> 
									<?php wp_dropdown_categories( array(
																	'name' => 'meta-box-carousel-link-'.$id.$i ,
																	'id' => 'meta-box-carousel-link-'.$id.$i,
																	'taxonomy' => 'carousel_categories',
																	'selected' => get_post_meta( $id, 'meta-box-carousel-link-'.$id.$i, true )
																));?>
									</div>
									<div id="carouselControls" class="carousel slide">
										<div class="carousel-inner">
										<?php
										$category = get_post_meta( $id,'meta-box-carousel-link-'.$id.$i,true);
												$taxonomy = 'carousel_categories';
												$c = '';
												$terms = get_terms($taxonomy); // Get all terms of a taxonomy
														foreach ( $terms as $term ) { ?>
															<?php if($term->term_id == $category) 
																		$c = $term->slug; ?>
														<?php } 
													$args = array('post_type' => 'fire_carousel','posts_per_page' => -1, 'order' => 'DESC',
													'tax_query' => array(
													array(
														'taxonomy' => $taxonomy,
														'field'    => 'slug',
														'terms'    => $c,
													),)
												);
												$post_list = get_posts( $args);
												$count = 0;
												foreach ( $post_list as $post ) {
													$idd = $post->ID;
													
														if(get_post_meta($idd,"meta-carousel-fire-selector-".$idd,true) == "split"):
														?>

															<div class="carousel-item <?php echo ($count == 0) ? 'active' : ' ';?> n-h">
																<div class="wrapper carousel-caption ">
																	<div class="row">
																		<div class="col-md-6 d-flex hero-left position-relative" >
																			<div class="display-0 m-40 text-dark">
																			<?php $title = get_post_meta($idd,"meta-box-carousel-title-".$idd,true);
																					$content = get_post_meta($idd,"meta-box-carousel-content-".$idd,true); ?>
																		<div class="display-0 m-40"><?php echo $title; ?></div>
																		<p class="display-1 work-sans text-dark"><?php echo $content; ?></p>
																		</div>
																		</div>
																		<div class="col-md-6 hero-right">
																		<img src="<?php echo  (get_post_meta( $idd,"meta-box-carousel-fire-".$idd, true ) != null)? esc_attr( get_post_meta( $idd,"meta-box-carousel-fire-".$idd, true ) ) : get_template_directory_uri().'/assets/img/images.png'; ?>" id="mymedia-carousel-<?php echo $idd;?>"><br>
																		</div>
																	</div>
															
																</div>
															</div>
												<?php 
												elseif(get_post_meta($idd,"meta-carousel-fire-selector-".$idd,true) == "single"):?>
													<div class="carousel-item <?php echo ($count == 0)? 'active' : ' ';?>">
														<img src="<?php echo  (get_post_meta( $idd,"meta-box-carousel-fire-".$idd, true ) != null)? esc_attr( get_post_meta( $idd,"meta-box-carousel-fire-".$idd, true ) ) : get_template_directory_uri().'/assets/img/images.png'; ?>" id="mymedia-carousel-<?php echo $idd;?>" alt="Los Angeles">
													</div>
												<?php elseif(get_post_meta($idd,"meta-carousel-fire-selector-".$idd,true) == "bg"):
													 $bgcolor = get_post_meta($idd,"meta-box-carousel-bgcolor-".$idd."1",true); ?>
													<div class="carousel-item <?php echo ($count == 0) ? 'active' : ' ';?> w-h">
													<div class="<?php echo $bgcolor; ?>"></div>
                    											<img class="d-block w-100" src="<?php echo esc_url(get_post_meta($idd,"meta-box-carousel-fire-".$idd,true)); ?>" alt="First slide">
                   
																<div class="wrapper carousel-caption ">
																	<div class="row">
																		<div class="col-md-5 d-flex hero-left position-relative" >
																			<div class="display-0 m-40 text-dark">
																			<?php $title = get_post_meta($idd,"meta-box-carousel-title-".$idd,true);
																					$content = get_post_meta($idd,"meta-box-carousel-content-".$idd,true); ?>
																		<div class="display-0 m-40"><?php echo $title; ?></div>
																		<p class="display-1 work-sans text-dark"><?php echo $content; ?></p>
																		</div>
																		</div>
																		<div class="col-md-7 hero-right">
																		</div>
																	</div>
															
																</div>
															</div>
												<?php endif;
												$count++;?>
											<?php } ?>
								
										</div>
										<a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
										<i class="fas fa-chevron-left " aria-hidden="true"></i>
										</a>
										<a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
										<i class="fas fa-chevron-right " aria-hidden="true"></i>
										</a>
									</div> 
									</div>
								</section>
							<?php elseif($type == "onlyH"): ?>
								<section id="service-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>"> 
								<div class="only-header" id="mymedia-<?php echo $id.$type.$i; ?>" style="background:url(<?php echo esc_attr( get_post_meta( $id, 'meta-box-onlyH-image-'.$id.$i, true ) ); ?>);background-size: cover;" >
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="overlay-v-brown">
									</div>
									<div class="wrapper position-relative">
										<h1 class="display-6"><?php set_fr_content("title",$id,$i,$type); ?></h1>
										<p class="display-4"><?php set_fr_content("content",$id,$i,$type); ?>
										</p>
										<?php
									$saved = get_post_meta( $id, 'meta-box-onlyH-image-'.$id.$i, true );
									?>
										<fieldset>
											<div>
												<input type="hidden" class="large-text" name="meta-box-<?php echo $type; ?>-image-<?php echo $id.$i; ?>" id="myplugin_media-<?php echo $id.$type.$i; ?>" value="<?php echo esc_attr( get_post_meta( $id, 'meta-box-onlyH-image-'.$id.$i, true ) ); ?>">
												<button type="button" class="button" id="mymed-<?php echo $id.$type.$i?>" data-media-images="#mymedia-<?php echo $id.$type.$i; ?>" data-media-uploader-target="#myplugin_media-<?php echo $id.$type.$i; ?>" data-show="true">Upload</button>
											</div>
										</fieldset>
									</div>
								</div>
								</section>
							
							<?php elseif($type == "page50"): ?>
								<section id="service-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>" >
								<div class="page-50">
									<?php set_fr_initials($type,$id,$i) ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="wrapper">
										<div class="row">
											<div class="col-md-6 page-pic">
											<fieldset>
													<div>
														<input type="hidden" class="large-text" name="meta-box-<?php echo $type; ?>-image-<?php echo $id.$i; ?>" id="myplugin_media-<?php echo $id.$type.$i; ?>" value="<?php echo esc_attr( get_post_meta( $id,"meta-box-".$type."-image-".$id.$i, true ) ); ?>">
														<img src="<?php echo esc_attr( get_post_meta( $id,"meta-box-".$type."-image-".$id.$i, true ) ); ?>'" id="mymedia-<?php echo $id.$type.$i; ?>"><br>
														<button type="button" class="button fr-esp-top" id="imedia-<?php echo $id.$type.$i; ?>" data-media-images="#mymedia-<?php echo $id.$type.$i; ?>" data-media-uploader-target="#myplugin_media-<?php echo $id.$type.$i; ?>">Change</button>
													</div>
												</fieldset>
											</div>
											<div class="col-md-6 page-desc">
												<ul>
												<?php for($j = 1; $j < 7; $j++) { ?>
													<li>
														<span class="img-wrapper">
														<fieldset>
																<div>
																	<input type="hidden" class="large-text" name="meta-box-<?php echo $type; ?>-image-<?php echo $id.$i.$j; ?>" id="myplugin_media-<?php echo $id.$type.$i.$j; ?>" value="<?php echo esc_attr( get_post_meta( $id,"meta-box-".$type."-image-".$id.$i.$j, true ) ); ?>">
																	<img src="<?php echo esc_attr( get_post_meta( $id,"meta-box-".$type."-image-".$id.$i.$j, true ) ); ?>'" id="mymedia-<?php echo $id.$type.$i.$j; ?>"><br>
																	<button type="button" class="button fr-esp-right" id="imedia-<?php echo $id.$type.$i.$j; ?>" data-media-images="#mymedia-<?php echo $id.$type.$i.$j; ?>" data-media-uploader-target="#myplugin_media-<?php echo $id.$type.$i.$j; ?>">Change</button>
																</div>
															</fieldset>
														</span>
														<p class="display-2 work-sans"><a href="#sec<?php echo $j; ?>" >
														<?php set_fr_content("title",$id,$i.$j,$type); ?>
													</a></p>
													</li>
												<?php } ?>
												</ul>
											</div>
										</div>
									</div>
								</div>
								</section>
							<?php elseif($type == "gridInfo"): ?>
								<section id="service-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>" >
								<section class="grid-info" id="sec1">
									<?php set_fr_initials($type,$id,$i) ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="wrapper">
										<div class="row top">
											<div class="col-md-8 px-0">
												<h1 class="display-6 l-10"><?php set_fr_content("title",$id,$i,$type); ?></h1>
												<p class="display-9 l-10"><?php set_fr_content("content",$id,$i,$type); ?>
												</p>
											</div>
										</div>
										<div class="row bot">
											<div class="wrap">
											<?php for($ii = 0; $ii <4; $ii++){ ?>
												<div class="block">
													<h3 class="my-accordion display-1 l-10"><?php set_fr_content("title",$id,$i.$ii,$type); ?></h3>
												<div class="links">
													<div class="display-2 work-sans l-10"><?php set_fr_content("content",$id,$i.$ii,$type); ?>
													</div>
												</div>
												</div>
											<?php } ?>
											
											</div>
										</div>
									</div>
								</section>
											</section>
							<?php elseif($type == "magazine"): ?>
								<section id="service-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
								<div class="magazine" id="sec2">
									<?php set_fr_initials($type,$id,$i) ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="wrapper">
										<div class="row">
											<div class="col-md-6 left">
												<?php set_fr_image($id,$i,$type); ?>
												<?php set_fr_image($id,$i,$type,"image2"); ?>
											</div>
											<div class="col-md-6 right">
												<div class="mag-wrap ml-auto">
													<h1 class="display-6"><?php set_fr_content("title",$id,$i,$type); ?></h1>
													<h4 class="display-4"><?php set_fr_content("content",$id,$i,$type); ?></h4>
													<div class="row bot">
														<div class="wrap wr-cols">
															<?php for($ii = 0; $ii < 4; $ii++) {?>
															<div class="block">
																<h5 class="my-accordion display-1 l-10"><?php set_fr_content("title",$id,$i.$ii,$type); ?><span class="close">+</span></h5>
																<div class="links">
																	<p class="display-2 work-sans l-10"><?php set_fr_content("content",$id,$i.$ii,$type); ?></p>
															</div>
															</div>
															<?php } ?>

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									</div>
								</section>
							<?php elseif($type == "blogList"):?>
								<section id="service-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="blog-list">
									<?php set_fr_initials($type,$id,$i) ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="wrapper">
										<?php for( $j =0 ; $j < 4; $j ++) {?>
										<div class="row" id="sec<?php echo ($j + 3); ?>">
											<div class="col-md-6 desc-wrap">
												<div class="blog-desc mx-auto">
												<h1 class="display-6 l-10"><?php set_fr_content("title",$id,$i.$j,$type); ?></h1>
												<p class="display-2 work-sans l-10"><?php set_fr_content("content",$id,$i.$j,$type); ?></p>
												</div>
											</div>
											<div class="col-md-6 blog-img">
												<?php set_fr_image($id,$i.$j,$type); ?>
											</div>
										</div>
										<?php } ?>
									</div>
										</div>
								</section>
							<?php elseif($type == "sHero"): ?>
								<?php $design = get_post_meta($id,'meta-box-sHero-design-'.$id.$i,true); ?>
								<section id="<?php echo ($design == 'design1') ? 'backline-page' : 'backline-inner-page';?>" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="small-hero" id="mymedia-<?php echo $id.$type.$i; ?>" style="background: url(<?php echo esc_attr( get_post_meta( $id, 'meta-box-sHero-image-'.$id.$i, true ) ); ?>);background-size:cover;background-position:center;">
									<?php set_fr_initials($type,$id,$i) ?>
									<?php set_del_button($id,$i,$type); ?>	
									<?php set_test_design($id,$i,$type,"design",2); ?>
											
									<div class="wrapper">
										<div class="row <?php echo ($design == 'design1') ? 'top' : 'text-in';?>">
											<div class="col-md-6 px-0">
													<h1 class="display-6 l-10 text-white"><?php set_fr_content("title",$id,$i,$type); ?></h1>
													<p class="display-4 fg-white-w"><?php set_fr_content("content",$id,$i,$type); ?></p>
											</div>
										</div>
										<?php
										$saved = get_post_meta( $id, 'meta-box-sHero-image-'.$id.$i, true );
										?>
											<fieldset>
												<div>
													<input type="hidden" class="large-text" name="meta-box-<?php echo $type; ?>-image-<?php echo $id.$i; ?>" id="myplugin_media-<?php echo $id.$type.$i; ?>" value="<?php echo esc_attr( get_post_meta( $id, 'meta-box-sHero-image-'.$id.$i, true ) ); ?>">
													<button type="button" class="button" id="mymed-<?php echo $id.$type.$i?>" data-media-images="#mymedia-<?php echo $id.$type.$i; ?>" data-media-uploader-target="#myplugin_media-<?php echo $id.$type.$i; ?>" data-show="true">Upload</button>
												</div>
											</fieldset>
									</div>
								</section>
							<?php elseif($type == "listGrids"):?>
								<section id="backline-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="list-grids">
									<?php set_fr_initials($type,$id,$i) ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="wrapper">
										<div class="row">
											<div class="col-md-12 col-lg-7">
												<h1 class="display-4 fg-brown"><?php set_fr_content("title",$id,$i,$type); ?></h1>
												<div class="display-4 work-sans fg-white-w"><?php set_fr_content("content",$id,$i,$type); ?>
											</div>
										</div>
									</div>
								</section>
							<?php elseif($type == "products"): ?>
								<section id="backline-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="grid-info" >
									<?php set_fr_initials($type,$id,$i) ?>
									<?php set_del_button($id,$i,$type); ?>
									<?php set_fr_gaps($type,$id,$i,3.75,0); ?>
									<div class="pos-absmid text-white">
									Add or Edit Products <br><br>
									<a class="btn btn-primary" target="_blank" href="<?php echo site_url();?>/wp-admin/edit.php?post_type=fire_product">Edit</a>
									</div>
								<div class="pos-absleft text-white">
								<label for="meta-box-nyhed-link-<?php echo $id.$i ?>">Select a category product</label> 
								<?php wp_dropdown_categories( array(
											'name' => 'meta-box-products-link-'.$id.$i ,
											'id' => 'meta-box-products-link-'.$id.$i,
											'taxonomy' => 'product_categories',
											'selected' => get_post_meta( $id, 'meta-box-products-link-'.$id.$i, true )
										));?>
								</div>
									<div class="wrapper g-top">
										<h2 class="topics display-4 fg-brown"><?php set_fr_content("title",$id,$i,$type); ?></h2>
										<div class="row bot pandora-grid-box fire-flex-wrap">
										<?php
											$category = get_post_meta( $id, 'meta-box-products-link-'.$id.$i,true);
											$taxonomy = 'product_categories';$c= '';
											$terms = get_terms($taxonomy); // Get all terms of a taxonomy
											foreach ( $terms as $term ) { ?>
												<?php if($term->term_id == $category) 
														$c = $term->slug; ?>
												<?php } 
											$args = array('post_type' => 'fire_product','posts_per_page' => 6,'order'=>'ASC',
											'tax_query' => array(
											array(
												'taxonomy' => $taxonomy,
												'field'    => 'slug',
												'terms'    => $c,
											),
										));
										$post_list = get_posts( $args);
										$count = 0;	
										foreach ( $post_list as $post ) {
											$idd = $post->ID;

											?>
												<?php $categoryy = get_the_terms( $idd, $taxonomy );    
														foreach ( $categoryy as $cat){
															if(term_is_ancestor_of($category,$cat->term_id,$taxonomy))
																$ch = $cat->name;
														} 
														?>
											<div class="col-sm-12 col-md-4 pandora-grid-box-item">
												<a href="<?php echo get_the_permalink(); ?>">
												<img src="<?php echo get_the_post_thumbnail_url(); ?>">
												<h5 class="display-1 fg-white l-10"><?php echo get_the_title(); ?><span class="fg-brown"><?php  echo " ".$ch; ?></span></h5></a>
											</div>
													<?php } ?>
										</div>
									</div>
									</div>
								</section>
							<?php elseif($type == "hero"):?>
								<section id="case-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="hero" >
													<?php set_fr_initials($type,$id,$i); ?>
													<?php set_del_button($id,$i,$type); ?>
													<div class="wrapper">
														<h1 class="display-6"><?php set_fr_content("title",$id,$i,$type); ?></h1>
														<p class="display-9"><?php set_fr_content("content",$id,$i,$type); ?></p>
													</div>
													</div>
												</section>
							<?php elseif($type == "onlyImg"): 
															$design = get_post_meta($id,'meta-box-onlyImg-design-'.$id.$i,true);
															if($design == "design1")
																$ied = "case-large-page";
															else
																$ied = "cloud-page";?>
												<section id="<?php echo $ied;?>" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
												<div class="header-image">
													<?php set_fr_initials($type,$id,$i) ?>
													<?php set_del_button($id,$i,$type); ?>
													<?php set_test_design($id,$i,$type,"design",2); ?>
													<?php if($design == "design1"):?>
													<div class="big-wrapper">
														<?php set_fr_image($id,$i,$type); ?>
													</div>
													<?php else: ?>
														<?php set_fr_image($id,$i,$type); ?>
													<?php endif; ?>
													</div>
												</section>
							<?php elseif($type == "call"):?>
								<section id="support-page" data-type="<?php echo $type; ?>" class="fr-sections position-relative" style="order:<?php echo $order; ?>">
									<div class="call">
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
								<div class="wrapper">
									<div class="row">
										<div class="col-md-5 left">
											<h1 class="display-6 l-10"><?php set_fr_content("title",$id,$i,$type); ?></h1>
											<div class="combo display-4">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/support/call.png">
												<span>+45 3915 3321</span>
											</div>
											<p class="display-2 work-sans l-10"><?php set_fr_content("content",$id,$i,$type); ?></p>
										</div>
										<div class="col-md-9 content">
							
												<div class="forms" >
												<h2 class="display-4 form-titles bs-main">
												<?php set_fr_content("formtitle",$id,$i,$type); ?>
												</h2>
												<div class="bs-callout bs-callout-info hidden">
													<h1 class="display-1 fg-brown">Tak for din henvendelse. 
													Vores Supportteam vender tilbage hurtigst muligt.</h1>
													<a class="fr-button-link-brown-black" href="">Opret ny sag</a>
													</div>
													<?php set_fr_content("shortcode",$id,$i,$type); ?>
											</div>
										</div>
									</div>
								</div>
								</div>
								</section>
							<?php elseif($type == "split"):?>
								<section id="support-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="two-sec2" >
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="wrapper">
										<div class="row">
											<div class="col-md-4 page-desc">
												<div class="mag-wrap ">
													<h1 class="display-6"><?php set_fr_content("title",$id,$i,$type); ?>
													</h1>
														<p class="display-2 work-sans l-10"><?php set_fr_content("content",$id,$i,$type); ?>
												</div>
											</div>
											<div class="col-md-8 page-pic">
												<?php set_fr_image($id,$i,$type); ?>
											</div>
										</div>
									</div>
									</div>
								</section>
							<?php elseif($type == "accord"):?>
								<section id="support-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="accord">
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<?php $c = get_post_meta( $id, "meta-count-accord".$id.$i,true ); ?>
									<div class="wrapper">
										<div class="row">
											<div class="col-md-6">
												<h1 class="display-6"><?php set_fr_content("title",$id,$i,$type); ?></h1>
												<div class="accordion" id="accordionExample">
												<input type="hidden" id="meta-count-accord<?php echo $id.$i; ?>" name="meta-count-accord<?php echo $id.$i; ?>" value="<?php echo $c; ?>">
												<a class="button fr-down-button" data-id="<?php echo $id; ?>" data-typess="<?php echo $type; ?>" data-current-counter="<?php echo $i; ?>" data-spec="#meta-count-accord<?php echo $id.$i; ?>"  >ADD</a>

												<?php for($ii = 0; $ii < $c; $ii++): 
													
													if(get_post_meta($id,"fr-clicker-accord-deleter".$i."-".$id.$ii,true) == "true"):
													?>
													<input type="hidden" class="clicker-deleter" id = "fr-clicker-accord-deleter<?php echo $i;?>-<?php echo $id.$ii; ?>" name="fr-clicker-accord-deleter<?php echo $i;?>-<?php echo $id.$ii; ?>" value="<?php echo get_post_meta($id,"fr-clicker-accord-deleter".$i."-".$id.$ii,true); ?>">
													<div class="card">
                									<i class="fas fa-times close-click"></i>
													<div class="card-header" id="heading<?php echo $ii; ?>">
														<h2 class="mb-0 ">
														<button class="btn btn-link display-1 l-10 collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo $ii; ?>" aria-expanded="false" aria-controls="collapse<?php echo $ii; ?>">
														<?php set_fr_content("title",$id,$i.$ii,$type); ?>													</button>
														</h2>
													</div>
												
													<div id="collapse<?php echo $ii; ?>" aria-labelledby="heading<?php echo $ii;?>" data-parent="#accordionExample">
														<div class="card-body">
														<?php set_fr_content("content",$id,$i.$ii,$type); ?>
														</div>
													</div>
													</div>
													<?php endif;endfor; ?>
												</div>
												
											</div>
											<div class="col-md-6 pics">
												<?php set_fr_image($id,$i,$type); ?>
											</div>
										</div>
									</div>
									</div>
								</section>
							<?php elseif($type == "contactForm"): 
								$design = get_post_meta($id,"meta-box-contactForm-design-".$id.$i,true);
								if($design == "design1"){
									$ide = "priser-page";}
								elseif($design == "design2"){
									$ide = "contact-page";}
								else{
									$ide = "priser-page";
								}?>
								<section id="<?php echo $ide; ?>" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div id="mymedia-<?php echo $id.$type.$i; ?>" class="contact-form position-relative" style="background:url(<?php echo esc_url(get_post_meta($id,"meta-box-contactForm-image-".$id.$i,true)); ?>);background-size:cover;background-position:center;">
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<?php set_test_design($id,$i,$type); ?>
									<div class="overlay-v"></div>
									<div class="wrapper position-relative">

										<?php if($design == "design1"){ ?>
											<div class="row">
											<div class="col-md-8 content">
												<h2 class="display-6 l-10 fg-brown">
												<?php set_fr_content("title",$id,$i,$type); ?>	
												</h2>
												<div class="row">
													<div class="col-md-6 iconss">
														<img src="<?php echo get_template_directory_uri();?>/assets/img/priser/phone.png">
													</div>
													<div class="col-md-6 icon-desc">
														<h3 class="display-4 text-white"><?php set_fr_content("content",$id,$i,$type); ?></h3>
													</div>
												</div>
											</div>
											<div class="col-md-4 forms" >
												<h2 class="display-6 l-10 fg-brown">
												<?php set_fr_content("formtitle",$id,$i,$type); ?>	
												</h2>

												<div class="bs-callout bs-callout-info hidden">
													<h2 class="display-6 l-10 fg-brown form-titles">Success!</h2>
												</div>
												<?php set_fr_content("shortcode",$id,$i,$type); ?>
											</div>
											</div>
											<?php }elseif($design == "design2"){?>
												<h2 class="display-6 l-10 fg-brown position-relative">
												<?php set_fr_content("title",$id,$i,$type); ?>
													<span class="fg-white display-4"><?php set_fr_content("subtitle",$id,$i,$type,"Enter subtitle"); ?></span>
												</h2>
												<div class="row">
												<div class="col-md-8 content">
											<DIV class="row f-content">
												<div class="col-md-6 iconss">
												<img src="<?php echo get_template_directory_uri();?>/assets/img/priser/phone.png">
												</div>
												<div class="col-md-6 icon-desc">
												<h3 class="display-4 text-white"><?php set_fr_content("content",$id,$i,$type); ?></h3>
												</div>
											</DIV>
											<div class="row grid-contain">
												<?php for ($ii = 0; $ii < 3; $ii++ ): ?>
													<div class="grid-item">
														<a >
														<label for="meta-box-contactForm-link-<?php echo $id.$i.$ii ?>">Select a page</label> 
														<?php wp_dropdown_pages( array(
																	'name' => 'meta-box-contactForm-link-'.$id.$i.$ii ,
																	'id' => 'meta-box-contactForm-link-'.$id.$i.$ii,
																	'selected' => get_post_meta( $id, 'meta-box-contactForm-link-'.$id.$i.$ii, true )
																));?>
														<h3 class="display-4 fg-white">
															<input type = "text" name="meta-box-contactForm-title-<?php echo $id.$i.$ii;?>" value="<?php echo esc_html(get_post_meta($id, "meta-box-contactForm-title-".$id.$i.$ii,true));?>" ></h3>
															<?php set_fr_image($id,$i.$ii,$type,"image"); ?>
														</a>
													</div>
												<?php endfor; ?>
											</div>
											</div>
										</div>
										<?php }else{ ?>
											<div class="row">
												<div class="col-md-6 content">
									
													<div class="row">
														<div class="col-md-6 iconss">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/img/priser/phone.png">

														</div>
														<div class="col-md- icon-desc">
														<?php set_fr_content("content",$id,$i,$type); ?>
														</div>
													</div>
												</div>
												<div class="col-md-6 forms">
													<h2 class="display-6 l-10 fg-brown bs-main form-tap">
													<?php set_fr_content("formtitle",$id,$i,$type); ?>
													</h2>
													<div class="bs-callout bs-callout-info hidden">
														<h2 class="display-6 l-10 fg-brown form-titles">Sucess!</h2>
													</div>
													<h3 class="display-1 fg-white"><?php set_fr_content("formcontent",$id,$i,$type); ?></h3>
														<?php 
													set_fr_content("shortcode",$id,$i,$type); ?></div>
											</div>

										<?php } ?>
										
										<?php
										$saved = get_post_meta( $id, 'meta-box-contactForm-image-'.$id.$i, true );
										?>
											<fieldset>
												<div>
													<input type="hidden" class="large-text" name="meta-box-<?php echo $type; ?>-image-<?php echo $id.$i; ?>" id="myplugin_media-<?php echo $id.$type.$i; ?>" value="<?php echo esc_attr( get_post_meta( $id, 'meta-box-contactForm-image-'.$id.$i, true ) ); ?>">
													<button type="button" class="button" id="mymed-<?php echo $id.$type.$i?>" data-media-images="#mymedia-<?php echo $id.$type.$i; ?>" data-media-uploader-target="#myplugin_media-<?php echo $id.$type.$i; ?>" data-show="true">Upload</button>
												</div>
											</fieldset>
									</div>
									</div>
								</section>
							<?php elseif($type == "splitRev"):
									$design = get_post_meta($id,'meta-box-splitRev-design-'.$id.$i,true);
									if($design == "design1")
										$ied = "aboutus-page";
									elseif($design == "design2")
										$ied = "case-large-page";
									else
										$ied = "case-small-page";?>
								<section id="<?php echo $ied; ?>" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="two-sec-rev">
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<?php set_test_design($id,$i,$type); ?>
										<div class="wrapper">
											<div class="row">
											<?php if($design == "design1"): ?>
												<div class="col-md-6 page-pic">
													<?php set_fr_image($id,$i,$type); ?>
												</div>
												<div class="col-md-6 page-desc">
													<div class="mag-wrap">
															<h1 class="display-6"><?php set_fr_content("title",$id,$i,$type); ?></h1>
															<p class="display-2 work-sans l-10">
															<?php set_fr_content("content",$id,$i,$type); ?>
															</p>
															<label for="meta-box-splitRev-Blink-<?php echo $id.$i; ?>">Select a link for the page</label> 
															<?php wp_dropdown_pages( array(
																					'name' => 'meta-box-splitRev-Blink-'.$id.$i ,
																					'id' => 'meta-box-splitRev-Blink-'.$id.$i,
																					'selected' => get_post_meta( $id, 'meta-box-splitRev-Blink-'.$id.$i, true )
																				));?>	
															<?php fr_button_setter('meta-box-splitRev-Btext-'.$id.$i,$type,$id,$i); ?>				
															<!-- <a class="fr-button-link-normal-brown-border"><?php //set_fr_input("Btext",$id,$i,$type); ?></a> -->
															<?php set_fr_drop("Blink1",$id,$i,$type);?>	
															<?php fr_button_setter('meta-box-splitRev-Btext1-'.$id.$i,$type,$id,$i.'1'); ?>				
															<!-- <a class="fr-button-link-normal-brown-border"><?php //set_fr_input("Btext1",$id,$i,$type); ?></a> -->
													</div>
												</div>
											<?php else: ?>
												<div class="col-md-8 page-pic">
													<?php set_fr_image($id,$i,$type); ?>
												</div>
												<div class="col-md-4 page-desc">
													<div class="mag-wrap">
														<?php if($design != "design2"): ?>
														<h4 class="display-4 l-10"><?php set_fr_content("title",$id,$i,$type); ?>
														<?php endif; ?>      
														<?php set_fr_content("content",$id,$i,$type); ?>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div>
										<?php if($design == "design1"){?>
										<div class="back-image">
											<?php set_fr_image($id,$i,$type,"bImage","fr-sp-but"); ?>
										</div>
										<?php } ?>
								</div>
							</section>
							<?php elseif($type == "tal"):?>
								<section id="aboutus-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="tal" >
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="wrapper">
										<div class="row">
											<div class="col-md-6 prices">
											<?php for($ii = 0; $ii < 4; $ii++){?>
												<div>
													<h3 class="fg-brown l-10"><?php set_fr_content("number",$id,$i.$ii,$type); ?></h3>
													<div class="display-10 work-sans l-10">
													<?php set_fr_content("title",$id,$i.$ii,$type); ?>
													<?php set_fr_image($id,$i.$ii,$type,"image","fr-esp-right"); ?>
													</div>
												</div>
											<?php } ?>
											</div>
											<dic class="col-md-6 info">
												<h1 class="display-6"><?php set_fr_content("title",$id,$i,$type); ?></h1>
												<p class="display-2 work-sans l-10"><?php set_fr_content("content",$id,$i,$type); ?></p>
											</dic>
										</div>
									</div>
									</div>
								</section>
							<?php elseif($type == "globe"):?>
								<section id="aboutus-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="globe">
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="c-wrap">
										<h1 class="display-6 l-10"><?php set_fr_content("title",$id,$i,$type); ?></h1>
										<h2 class="display-4"><?php set_fr_content("content",$id,$i,$type); ?></h2>
										<?php 
										for($ii = 0; $ii < 4; $ii++){?>
										<div class="row g-step">
											<div class="col-md-4">
											<?php set_fr_image($id,$i.$ii,$type); ?>
											</div>
											<div class="col-md-8">
												<h3 class="display-4"><?php set_fr_content("content",$id,$i.$ii,$type); ?></h3>
											</div>
										</div>
										<?php }?>
									</div>
									</div>
								</section>
							<?php elseif($type == "circleSec"): ?>
								<section id="aboutus-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="circle-sec" >
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="wrapper">
										<div class="row">
											<div class="col-sm-12 col-md-5 fg-white">
												<h1 class="display-4"><?php set_fr_content("title",$id,$i,$type); ?></h1>
												<p class="display-2 work-sans l-10"><?php set_fr_content("content",$id,$i,$type); ?></p>
											</div>
											<div class="col-sm-12 col-md-7">
												<div class="same-place position-relative">
												<ul class='circle-container'>
												<?php for($ii = 0 ; $ii < 7 ; $ii++){?>
													<li><span class="img-wrapper hide-until-5">
														<i class="fas fa-home fg-brown display-6"></i>
													</span><p class="work-sans display-2 l-10"><?php set_fr_content("title",$id,$i.$ii,$type); ?></p></li>
												<?php } ?>
												</ul>
												<ul class='circle-containers'>
												<?php for($ii = 0 ; $ii < 7 ; $ii++){?>
													<li>                  <svg height="5vw" width="40">
														<path id="lineAB" d="M 20 20 l 1 100" stroke="#aa8c46" stroke-width="3" fill="none" />
														
														<!-- Mark relevant points -->
														<g stroke="#aa8c46" stroke-width="3" fill="#aa8c46">
															<circle id="pointA" cx="20" cy="20" r=".75vw" />
														</g>
														</svg></li>
												<?php } ?>
												</ul>
												</div>
											</div>
										</div>
										</div>
									</div>
								</section>
							<?php elseif($type == "bigHeader"): ?>
								<section id="info-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="top-header">
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="wrapper">
										<div class="row">
											<div class="col-md-7 left">
												<h1 class="display-6 fg-white">
													<?php set_fr_content("title",$id,$i,$type); ?>
												</h1>
												<p class="display-9 fg-white">
													<?php set_fr_content("content",$id,$i,$type); ?>
												</p>
												<div class="text-white">
												<?php set_fr_drop("Blink",$id,$i,$type);?>
												<?php set_fr_input("Blink-anchor",$id,$i,$type,"Enter anchor if available");?>	</div>	

                                                <?php fr_button_setter('meta-box-bigHeader-Btext-'.$id.$i,$type,$id,$i); ?>	
												<br><br><br><br><br><div class="text-white">
												<?php set_fr_drop("Blink1",$id,$i,$type);?>	
												<?php set_fr_input("Blink1-anchor",$id,$i,$type,"Enter anchor if available");?></div>
                                                <?php fr_button_setter('meta-box-bigHeader-Btext1-'.$id.$i,$type,$id,$i.'1'); ?>
											</div>
											<div class="col-md-5 right">
											<?php set_fr_image($id,$i,$type,"image","fr-top-right"); ?>
											</div>
										</div>
									</div>
									</div>
								</section>
							<?php elseif($type == "splitThree"): ?>
								<section id="info-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="blackline">
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="big-wrapper">
										<div class="wrapper">
										<div class="row">
											<div class="col-md-6 left px-0">
												<h1 class="display-6"><?php set_fr_content("title",$id,$i,$type); ?></h1>
												<p class="display-2 work-sans l-10"><?php set_fr_content("content",$id,$i,$type); ?></p>
											</div>
											<div class="col-md-6 right">
												<div class="row">
													<div class="col-xs-4 col-sm-4 col-md-4">
														<?php set_fr_image($id,$i,$type,"image","fr-o-top"); ?>
													</div>
													<div class="col-xs-4 col-sm-4 col-md-4">
													<?php set_fr_image($id,$i,$type,"image1","fr-o-top"); ?>
													</div>
													<div class="col-xs-4 col-sm-4 col-md-4">
													<?php set_fr_image($id,$i,$type,"image2","fr-o-top"); ?>
													</div>
												</div>
												<p class="display-2 work-sans l-10"><?php set_fr_content("tagLine",$id,$i,$type); ?></p>
											</div>
										</div>
										</div>
									</div>
									</div>
								</section>
							<?php elseif($type == "magCarousel"):?>
								<section id="info-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="magazine" >
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="pos-absleft text-white">
											<label for="meta-box-magCarousel-link-<?php echo $id.$i ?>">Select a category carousel</label> 
											<?php wp_dropdown_categories( array(
														'name' => 'meta-box-magCarousel-link-'.$id.$i ,
														'id' => 'meta-box-magCarousel-link-'.$id.$i,
														'taxonomy' => 'carousel_categories',
														'selected' => get_post_meta( $id, 'meta-box-magCarousel-link-'.$id.$i, true )
													));?>
											</div>
											<div class="pos-absmid text-white">
												Add or Edit Carousel <br><br>
												<a class="btn btn-primary" target="_blank" href="<?php echo site_url();?>/wp-admin/edit.php?post_type=fire_carousel">Edit</a>
												</div>
									<div class="wrapper">
										<div class="row">
											<div class="col-md-6 left">


											<div id="magizineCarousel<?php echo $i; ?>" class="carousel slide" data-ride="carousel">
												<div class="carousel-inner">
												<?php
												$category = get_post_meta( $id,'meta-box-magCarousel-link-'.$id.$i,true);
														$taxonomy = 'carousel_categories';
														$c = '';
														$terms = get_terms($taxonomy); // Get all terms of a taxonomy
																foreach ( $terms as $term ) { ?>
																	<?php if($term->term_id == $category) 
																				$c = $term->slug; ?>
																<?php } 
																
															$args = array('post_type' => 'fire_carousel','posts_per_page' => -1, 'order' => 'ASC',
															'tax_query' => array(
															array(
																'taxonomy' => $taxonomy,
																'field'    => 'slug',
																'terms'    => $c,
															),)
														);
		
															$post_list = get_posts( $args);
															$count = 0;	
															foreach ( $post_list as $post ) { ?>
																<?php $idd = $post->ID;?>
															<div class="carousel-item <?php echo ($count == 0) ? "active" : " "; ?>">
																<img src="<?php echo get_post_meta($idd,"meta-box-carousel-fire1-".$idd,true); ?>" alt="">
																<img src="<?php echo get_post_meta($idd,"meta-box-carousel-fire2-".$idd,true); ?>" alt="">
															</div>
													<?php $count++;} ?>
													</div>
													<a class="carousel-control-prev" href="#magizineCarousel<?php echo $i;?>" role="button" data-slide="prev">
													<i class="fas fa-chevron-left " aria-hidden="true"></i>
													</a>
													<a class="carousel-control-next" href="#magizineCarousel<?php echo $i;?>" role="button" data-slide="next">
													<i class="fas fa-chevron-right " aria-hidden="true"></i>
													</a>
												</div>
											</div>
											<div class="col-md-6 right">
												<div class="mag-wrap ml-auto">
													<h1 class="display-6"><?php set_fr_content("title",$id,$i,$type); ?></h1>
													<div class="display-2 work-sans l-10">
														<?php set_fr_content("content",$id,$i,$type); ?>
                                                        <?php set_fr_drop("blink",$id,$i,$type); ?>
                                                        <?php 	fr_button_setter('meta-box-magCarousel-btext-'.$id.$i,$type,$id,$i); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
									</div>
								</section>
							<?php elseif($type == "fiveSplit"): ?>
								<section id="info-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="fem bg-lightwhite">
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="wrapper">
										<h4 class="col-6 display-4"><?php set_fr_content("title",$id,$i,$type); ?></h1>
										<div class="row-v w-100 fire-flex-wrap">
											<?php for($ii = 0; $ii < 5 ; $ii++ ): ?>
											<div class="col-v">
											<?php set_fr_image($id,$i.$ii,$type); ?>
												<h3 class="display-10 work-sans fg-brown l-10"><?php set_fr_content("title",$id,$i.$ii,$type); ?></h3>
												<p class="display-2 work-sans l-10"><?php set_fr_content("content",$id,$i.$ii,$type); ?></p>
											</div>
											<?php endfor; ?>
										</div>
									</div>
								</section>
							<?php elseif($type == "magCarouselRev"):?>
								<section id="info-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="magazine-rev bg-lightwhite" >
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="pos-absleft text-white">
											<label for="meta-box-magCarouselRev-link-<?php echo $id.$i ?>">Select a category carousel</label> 
											<?php wp_dropdown_categories( array(
														'name' => 'meta-box-magCarouselRev-link-'.$id.$i ,
														'id' => 'meta-box-magCarouselRev-link-'.$id.$i,
														'taxonomy' => 'carousel_categories',
														'selected' => get_post_meta( $id, 'meta-box-magCarouselRev-link-'.$id.$i, true )
													));?>
											</div>
											<div class="pos-absmid text-white">
												Add or Edit Carousel <br><br>
												<a class="btn btn-primary" target="_blank" href="<?php echo site_url();?>/wp-admin/edit.php?post_type=fire_carousel">Edit</a>
												</div>
									<div class="wrapper">
										<div class="row">

											<div class="col-md-6 right">
												<div class="mag-wrap ml-auto">
													<h1 class="display-6"><?php set_fr_content("title",$id,$i,$type); ?></h1>
													<div class="display-2 work-sans l-10">
														<?php set_fr_content("content",$id,$i,$type); ?>
                                                        <?php set_fr_drop("blink",$id,$i,$type); ?>
                                                        <?php 	fr_button_setter('meta-box-magCarouselRev-btext-'.$id.$i,$type,$id,$i); ?>
													</div>
												</div>
											</div>
											<div class="col-md-6 left">
											<div id="magizineCarouselRev<?php echo $i; ?>" class="carousel slide" data-ride="carousel">
												<div class="carousel-inner">
												<?php
												$category = get_post_meta( $id,'meta-box-magCarouselRev-link-'.$id.$i,true);
														$taxonomy = 'carousel_categories';
														$c = '';
														$terms = get_terms($taxonomy); // Get all terms of a taxonomy
																foreach ( $terms as $term ) { ?>
																	<?php if($term->term_id == $category) 
																				$c = $term->slug; ?>
																<?php } 
															$args = array('post_type' => 'fire_carousel','posts_per_page' => -1, 'order' => 'DESC',
															'tax_query' => array(
															array(
																'taxonomy' => $taxonomy,
																'field'    => 'slug',
																'terms'    => $c,
															),)
														);
															$post_list = get_posts( $args);
															$count = 0;	
															foreach ( $post_list as $post ) { $idd = $post->ID;?>
															<div class="carousel-item <?php echo ($count == 0) ? "active" : " "; ?>">
																<img src="<?php echo get_post_meta($idd,"meta-box-carousel-fire1-".$idd,true); ?>" alt="">
																<img src="<?php echo get_post_meta($idd,"meta-box-carousel-fire2-".$idd,true); ?>" alt="">
															</div>
													<?php $count++;} ?>
													</div>
													<a class="carousel-control-prev" href="#magizineCarouselRev<?php echo $i;?>" role="button" data-slide="prev">
													<i class="fas fa-chevron-left " aria-hidden="true"></i>
													</a>
													<a class="carousel-control-next" href="#magizineCarouselRev<?php echo $i;?>" role="button" data-slide="next">
													<i class="fas fa-chevron-right " aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									</div>
								</section>
							<?php elseif($type == "clicker"): 
									$savedI = get_post_meta( $id, 'meta-box-clicker-image-'.$id.$i, true );
									$c = $type;?>						

									
								<section id="cloud-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
								<div class="cloud-clicker" data-sample="2" >
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="click-wraps">
										<fieldset>
											<div>
												<input type="hidden" class="large-text" name="meta-box-clicker-image-<?php echo $id.$i;?>"  id="myplugin_media-<?php echo $id.$c.'1'.$i;?>" value="<?php echo esc_attr( $savedI ); ?>"><br>
												<button type="button" class="button" id="events_video_upload_btn" data-show="back" data-media-images="#mymedia-<?php echo $id.$c.'1'.$i;?>" data-media-uploader-target="#myplugin_media-<?php echo $id.$c.'1'.$i;?>"><?php _e( 'Upload Media', 'myplugin' )?></button>
											</div>
										</fieldset>
										<div class="click-on" id="mymedia-<?php echo $id.$c.'1'.$i;?>" style="background:url(<?php echo esc_attr( $savedI ); ?>);background-size:100%;">
												<?php 
													$count = (get_post_meta($id,"meta-box-clicker-count-".$id,true) > 0) ? get_post_meta($id,"meta-box-clicker-count-".$id,true) : 0;
													for($ii = 0; $ii < get_post_meta($id,"meta-box-clicker-count-".$id,true); $ii++ ){
														if( get_post_meta($id,"fr-clicker-item-top".$ii."-".$id,true) != null &&  get_post_meta($id,"fr-clicker-item-left".$ii."-".$id,true) != null){?>
													<div class="clicker c<?php echo $ii; ?>" style="top:<?php echo get_post_meta($id,"fr-clicker-item-top".$ii."-".$id,true); ?>vw;left:<?php echo get_post_meta($id,"fr-clicker-item-left".$ii."-".$id,true); ?>vw">
														<input type="hidden" class="clicker-top-v" id="fr-clicker-item-top<?php echo $ii; ?>-<?php echo $id; ?>" name="fr-clicker-item-top<?php echo $ii; ?>-<?php echo $id; ?>" value="<?php echo get_post_meta($id,"fr-clicker-item-top".$ii."-".$id,true);?>">
														<input type="hidden" class="clicker-left-v" id="fr-clicker-item-left<?php echo $ii; ?>-<?php echo $id; ?>" name="fr-clicker-item-left<?php echo $ii; ?>-<?php echo $id; ?>" value="<?php echo get_post_meta($id,"fr-clicker-item-left".$ii."-".$id,true);?>">
														<input type="hidden" class="clicker-left-v" id="fr-clicker-item-pos<?php echo $ii; ?>-<?php echo $id; ?>" name="fr-clicker-item-pos<?php echo $ii; ?>-<?php echo $id; ?>" value="<?php echo get_post_meta($id,"fr-clicker-item-pos".$ii."-".$id,true);?>">
														<input type="hidden" class="clicker-deleter" id = "fr-clicker-item-deleter<?php echo $ii; ?>-<?php echo $id; ?>" name="fr-clicker-item-deleter<?php echo $ii; ?>-<?php echo $id; ?>" value="true">
														<?php $featured = get_post_meta($id,"fr-clicker-item-marker".$ii."-".$id,true);?>
														<input type="hidden" class="clicker-marker" id = "fr-clicker-item-marker<?php echo $ii; ?>-<?php echo $id; ?>" name="fr-clicker-item-marker<?php echo $ii; ?>-<?php echo $id; ?>" value="<?php echo $featured;?>">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cloud/clicker.png">
													<div class="c-info  <?php echo ($featured == "true")? 'active' : ' '; ?>" id="testte" style="<?php echo (get_post_meta($id,"fr-clicker-item-left".$ii."-".$id,true) > 70)? "margin-left:-25em" : " ";?>">
														<?php $savedI = get_post_meta( $id, 'fr-clicker-item-image'.$ii.'-'.$id, true ); ?>
														<fieldset>
															<div>
																<input type="hidden" class="large-text" name="fr-clicker-item-image<?php echo $ii; ?>-<?php echo $id; ?>"  id="myplugin_media-<?php echo $id.$c.$ii;?>" value="<?php echo esc_attr( $savedI ); ?>"><br>
																<img src="<?php echo esc_attr( $savedI ); ?>" id="mymedia-<?php echo $id.$c.$ii;?>">
																<button type="button" class="button" id="events_video_upload_btn<?php echo $c; ?>_<?php echo $ii; ?>_<?php echo $id; ?>" data-media-images="#mymedia-<?php echo $id.$c.$ii;?>" data-media-uploader-target="#myplugin_media-<?php echo $id.$c.$ii;?>"><?php _e( 'Upload Media', 'myplugin' )?></button>
															</div>
														</fieldset>
														<i class="fas fa-times close-clicker"></i>
														<i class="fas fa-bookmark book-clicker <?php echo ($featured == "true")? 'gren-col' : ' ';?>"></i>
														<div class="mix-max">
															<textarea  id="fire<?php echo $ii; ?>" class="display-1"  name="fr-clicker-item-title<?php echo $ii; ?>-<?php echo $id; ?>" contenteditable="true"><?php echo (get_post_meta($id,"fr-clicker-item-title".$ii."-".$id,true) != " ") ? get_post_meta($id,"fr-clicker-item-title".$ii."-".$id,true) : "<span class='display-1'>Skærmvæg</span><br><span class='display-12 fg-brown'>Indretnings-serien</span>"; ?></textarea>
															<?php fire_ck_input("fire".$ii); ?>
															<textarea id ="frclickeritemsubtitle<?php echo $ii; ?>_<?php echo $id; ?>" class="display-12 fg-brown" name="fr-clicker-item-subtitle<?php echo $ii; ?>-<?php echo $id; ?>"><?php echo get_post_meta($id,"fr-clicker-item-subtitle".$ii."-".$id,true); ?></textarea>
															<?php fire_ck_input("frclickeritemsubtitle".$ii."_".$id); ?>
														</div>
														<textarea id="fireEditor<?php echo $ii;?>"  class="work-sans l-10 display-13" rows="8" name="fr-clicker-item-conten<?php echo $ii; ?>-<?php echo $id; ?>"><?php echo (get_post_meta($id,"fr-clicker-item-conten".$ii."-".$id,true) != " ") ? get_post_meta($id,"fr-clicker-item-conten".$ii."-".$id,true) : "content"; ?></textarea>
														<?php fire_ck_input("fireEditor".$ii); ?>
													</div>
													</div>	
												<?php 
														}
													} 
												?>
												<input type="hidden" id="meta-box-clicker-count-<?php echo $id;?>" name="meta-box-clicker-count-<?php echo $id;?>" value="<?php echo $count;?>">
												<button type="button" class="button btn btn-primary fr-nav-leftter" id="1" img-path="<?php echo get_template_directory_uri(); ?>/assets/img/cloud/clicker.png" data-counter = "#meta-box-clicker-count-<?php echo $id;?>" data-form="<?php echo $id;?>" data-count="<?php echo $count; ?>" clicker-type="global-list">Add items</button><br>

											</div>
												</div>
												</div>
										</section>
							<?php elseif($type == "twoSec"):?>
								<section id="cloud-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="two-sec">
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="wrapper">
										<div class="row">
											<div class="col-md-5 page-desc">
												<div class="mag-wrap ">
													<h1 class="display-6"><?php set_fr_content("title",$id,$i,$type); ?></h1>
													<p class="display-2 work-sans l-10"><?php set_fr_content("content",$id,$i,$type); ?></p>
												</div>
											</div>
											<div class="col-md-7 page-pic">
												<?php
												$saved = get_post_meta( $id, 'meta-box-twoSec-video-'.$id.$i, true );
												$savedI = get_post_meta( $id, 'meta-box-twoSec-image-'.$id.$i, true );
												?>
												<fieldset>
													<div>
														<input type="hidden" class="large-text" name="meta-box-twoSec-video-<?php echo $id.$i;?>"  id="myplugin_media-<?php echo $id.$type.$i;?>" value="<?php echo esc_attr( $saved ); ?>"><br>
														<video controls >
															<source src="<?php echo esc_attr( $saved ); ?>" type="video/mp4" id="mymedia-<?php echo $id.$type.$i;?>">
															Your browser does not support the video tag.
														</video><br>
														<button type="button" class="button" id="events_video_place_btn<?php echo $id.$type.$i;?>" data-media-images="#mymedia-<?php echo $id.$type.$i;?>" data-media-uploader-target="#myplugin_media-<?php echo $id.$type.$i;?>"><?php _e( 'Upload Video', 'myplugin' )?></button>
													</div>
												</fieldset>
												<fieldset>
													<div>
													<label for="meta-box-twoSec-image-<?php echo $id;?>">Poster of Video</label>
														<input type="hidden" class="large-text" name="meta-box-twoSec-image-<?php echo $id.$i;?>"  id="myplugin_mediap-<?php echo $id.$type.$i;?>" value="<?php echo esc_attr( $savedI ); ?>"><br>
														<img src="<?php echo esc_attr( $savedI ); ?>" height="200" id="mymediap-<?php echo $id.$type.$i;?>"><br>
														<button type="button" class="button" id="events_video_poster_btn<?php echo $id.$type.$i;?>" data-media-images="#mymediap-<?php echo $id.$type.$i;?>" data-media-uploader-target="#myplugin_mediap-<?php echo $id.$type.$i;?>"><?php _e( 'Upload Media', 'myplugin' )?></button>
													</div>
												</fieldset>
											</div>
										</div>
									</div>
								</section>
							<?php elseif($type == "inspire"):?>

								<section id="solution-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="inspire">
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="wrapper">
										<div class="row">
											<div class="col-md-6 left">
												<h1 class="display-6"><?php set_fr_content("title",$id,$i,$type); ?></h1>
												<h2 class="display-1"><?php set_fr_content("subcontent",$id,$i,$type); ?></h2>
                                                <p class="display-2 l-10"><?php set_fr_content("content",$id,$i,$type); ?></p>
                                                <?php 	fr_button_setter('meta-box-inspire-text-'.$id.$i,$type,$id,$i); ?>
													<label for="meta-box-inspire-link-<?php echo $id ?>">Select a link for the page</label> 
													<?php wp_dropdown_pages( array(
																					'name' => 'meta-box-inspire-link-'.$id.$i ,
																					'id' => 'meta-box-inspire-link-'.$id.$i,
																					'selected' => get_post_meta( $id, 'meta-box-inspire-link-'.$id.$i, true )
																				));?>										</div>
											<div class="col-md-6 right">
												<svg height="100%" width="450" viewBox="0 0 450 860">
													<path d="M 10 10 l 0 840" stroke="#ccc" stroke-width="2" fill="none" />
													
													<!-- Mark relevant points -->
													<g  fill="#ccc">
														<circle id="pointA" cx="10" cy="10" r="6" />
														<circle id="pointB" cx="10" cy="130" r="6" />
														<circle id="pointC" cx="10" cy="250" r="6" />
														<circle id="pointC" cx="10" cy="370" r="6" />
														<circle id="pointC" cx="10" cy="490" r="6" />
														<circle id="pointC" cx="10" cy="610" r="6" />
														<circle id="pointC" cx="10" cy="730" r="6" />
														<circle id="pointC" cx="10" cy="850" r="6" />
													</g>
													
													</svg>
												<ul>
													<?php for($j = 0; $j < 8; $j++): ?>
													<li>
														<span class="img-wrapper">
														<fieldset>
															<div>
																<input type="hidden" class="large-text" name="meta-box-inspire-image-<?php echo $id.$i.$j; ?>" id="myplugin_media-<?php echo $id.$type.$i.$j; ?>" value="<?php echo esc_attr( get_post_meta( $id, 'meta-box-inspire-image-'.$id.$i.$j, true ) ); ?>">
																<img src="<?php echo esc_attr( get_post_meta( $id, 'meta-box-inspire-image-'.$id.$i.$j, true ) ); ?>" id="mymedia-<?php echo $id.$type.$i.$j; ?>"><br>
																<button type="button" class="button" id=" " data-media-images="#mymedia-<?php echo $id.$type.$i.$j; ?>" data-media-uploader-target="#myplugin_media-<?php echo $id.$type.$i.$j; ?>">Upload</button>
															</div>
														</fieldset>
														</span>
														<p class="display-2 work-sans"><?php set_fr_content("title",$id,$i.$j,$type); ?></p>
													</li>
													<?php endfor; ?>
												</ul>
											</div>
										</div>
										</div>
									</div>
								</section>
							<?php elseif($type == 'infoPriser'):?>
								<section id="priser-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="info-priser">
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<?php set_fr_gaps($type,$id,$i,10,5); ?>
									<div class="wrapper">
									<?php set_test_design($id,$i,$type,"design",2); 
										$rev = (get_post_meta($id,"meta-box-infoPriser-design-".$id.$i, true ) == "design2")? true : false; ?>
										<div class="row">
											<?php if($rev): ?>
												<div class="col-md-6 pic c-rev">
												<fieldset>
													<div>
														<input type="hidden" class="large-text" name="meta-box-infoPriser-image-<?php echo $id.$i; ?>" id="myplugin_media-<?php echo $id.$type.$i; ?>" value="<?php echo esc_attr( get_post_meta( $id, 'meta-box-infoPriser-image-'.$id.$i, true ) ); ?>">
														<img src="<?php echo esc_attr( get_post_meta( $id, 'meta-box-infoPriser-image-'.$id.$i, true ) ); ?>" id="mymedia-<?php echo $id.$type.$i; ?>"><br>
														<button type="button" class="button" id="infoPriser-<?php echo $id.$type.$i; ?>" data-media-images="#mymedia-<?php echo $id.$type.$i; ?>" data-media-uploader-target="#myplugin_media-<?php echo $id.$type.$i; ?>">Upload</button>
													</div>
												</fieldset>
											</div>
											<div class="col-md-6 rev-c">
												<h1 class="display-6"><?php set_fr_content("title",$id,$i,$type); ?></h1>
												<p class="display-2"><?php set_fr_content("content",$id,$i,$type); ?></p>
											</div>
											<?php else: ?>
											<div class="col-md-6">
												<h1 class="display-6"><?php set_fr_content("title",$id,$i,$type); ?></h1>
												<p class="display-2"><?php set_fr_content("content",$id,$i,$type); ?></p>
											</div>
											<div class="col-md-6 pic">
												<fieldset>
													<div>
														<input type="hidden" class="large-text" name="meta-box-infoPriser-image-<?php echo $id.$i; ?>" id="myplugin_media-<?php echo $id.$type.$i; ?>" value="<?php echo esc_attr( get_post_meta( $id, 'meta-box-infoPriser-image-'.$id.$i, true ) ); ?>">
														<img src="<?php echo esc_attr( get_post_meta( $id, 'meta-box-infoPriser-image-'.$id.$i, true ) ); ?>" id="mymedia-<?php echo $id.$type.$i; ?>"><br>
														<button type="button" class="button" id="infoPriser-<?php echo $id.$type.$i; ?>" data-media-images="#mymedia-<?php echo $id.$type.$i; ?>" data-media-uploader-target="#myplugin_media-<?php echo $id.$type.$i; ?>">Upload</button>
													</div>
												</fieldset>
											</div>
											<?php endif; ?>
										</div>
									</div>
									</div>
								</section>
							<?php elseif($type == 'productSpec'): ?>
								<section id="backline-inner-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="magazine-rev">
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<?php $cols = get_post_meta( $id, 'meta-box-productSpec-col-'.$id.$i, true ); ?>
									<div class="big-wrapper position-relative">
										<div class="wrapper">
											<div class="row">
												<div class="col-md-6 right px-0">
													<div class="mag-wrap mr-auto">
														<h3 class="display-10 l-10 work-sans fg-white"><?php set_fr_content("varnumber",$id,$i,$type); ?></h3>
														<h1 class="display-6 fg-white"><?php set_fr_content("content",$id,$i,$type); ?></h1>
													</div>
								
												</div>
												<div class="col-md-6 left px-0 fg-white offset">
													<div class="row">
														<div class="col-md-6 pl-0">
															<?php set_fr_image($id,$i,$type,"image"); ?>
														</div>
														<div class="col-md-6 pr-0">
														<?php set_fr_image($id,$i,$type,"image2"); ?>
														</div>
													</div>
													<h3 class="mark-regular display-4"><?php set_fr_content("stitle",$id,$i,$type); ?></h3>
													<div class="row work-sans display-10">
													<?php set_col_type($id,$i,$type); ?>
													<?php if($cols == "design1"): ?>
														<div class="col-sm-12 pl-0">
															<div class="grid-containe">
																<?php set_fr_content("scontent",$id,$i,$type); ?>
															</div>
														</div>
													<?php else: ?>
														<div class="col-sm-6 pl-0">
															<div class="grid-containe">
																<?php set_fr_content("scontent",$id,$i,$type); ?>
															</div>
														</div>
														<div class="col-sm-6 pr-0">
															<div class="grid-containe">
																<?php set_fr_content("scontent1",$id,$i,$type); ?>
															</div>
														</div>
													<?php endif;?>
													</div>
												</div>
											</div>
										</div>
									</div>
									</div>
								</section>

							<?php elseif($type == "tabbed"):?>
								<section id="cloud-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="tabbed">
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<div class="wrapper">
										<h1 class="display-6 l-10"><?php set_fr_content("title",$id,$i,$type); ?></h1>
										<h5 class="display-4"><?php set_fr_content("content",$id,$i,$type); ?></h5>
								
										<ul class="nav nav-tabs tabbed-fn">
										<?php 
												$args = array('post_type' => 'fire_function','numberposts' => 16, 'order' => 'DESC');
												$count = 1;
												$post_list = get_posts( $args);
												foreach ( $post_list as $post ) {
													$idd = $post->ID;
												?>
											<li <?php echo ($count == 1)? 'class="active"' : ' '; ?>><a data-toggle="tab" href="#menu<?php echo $count; ?>" class="active">
												<img src="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>">
												<span><?php echo $post->post_title; ?></span>
											</a>
											</li>
												<?php $count++;} ?>
										</ul>
										
										<div class="tab-content">
										<?php 
										$count = 1;
										foreach ( $post_list as $post ) {
													$idd = $post->ID; ?>
											<div id="menu<?php echo $count;?>" class="tab-pane fade <?php echo ($count == 1)? 'active show': '';?>">
												<i class="fas fa-times tabe-hider hide-until-7"></i>
												<div class="row">
													<div class="col-md-3">
														<img src="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>">
													</div>
													<div class="col-md-9">
														<h3 class="display-6"><?php echo $post->post_title; ?></h3>
														<p class="display-4"><?php echo $post->post_content; ?></p>
													</div>
												</div>
												<div class="row fr-tabbed-hidden hide-until-7">
													<p class="display-4"><?php echo $post->post_content; ?></p>
												</div>
											</div>
										<?php $count++;} ?>
									</div>
								</section>
							<?php elseif($type == "sameInfo"):?>
								<section id="cloud-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="some-info">
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
											<h2 class="display-6 l-10"><?php set_fr_content("title",$id,$i,$type); ?></h2>
											<div class="row">
												<div class="col-md-6 l-10">
													<p class="display-2"><?php set_fr_content("content",$id,$i,$type); ?></div>
												<div class="col-md-6 l-10">
													<p class="display-2"><?php set_fr_content("content1",$id,$i,$type); ?>
													</p></div>
											</div>
										</div>
									</section>
							<?php elseif($type == "gridShow"): ?>
								<section id="case-page" data-type="<?php echo $type; ?>" class="fr-sections" style="order:<?php echo $order; ?>">
									<div class="news-row">
									<?php set_fr_initials($type,$id,$i); ?>
									<?php set_del_button($id,$i,$type); ?>
									<?php set_test_type($id,$i,$type); ?>
									<?php fr_test_count($id,$i,$type,"counts",5); ?>
									<?php
									$num = get_post_meta($id,"meta-box-gridShow-counts-".$id.$i,true); 
									$design = get_post_meta($id,"meta-box-gridShow-design-".$id.$i,true);
											?>
									<div class="wrapper">
									<?php 
										$num = ($num == "all") ? -1 : $num;
										$args = array('post_type' => $design,'posts_per_page' => $num, 'order' => 'ASC', 'orderby' => 'menu_order');
										$the_query = new WP_Query($args);
										$post_list = get_posts( $args);
										$count = 0; $min_count = 1;$rev = false;
										foreach ( $post_list as $post ) {
											$idd = $post->ID;
										?>
										<?php 
										
											if($count%2 === 0): 
											?>
											<div class="row <?php echo ($rev) ? 'r-rev' : ''; ?>">
												<div class="single-news-left"><a>
													<img src="<?php echo get_the_post_thumbnail_url($idd); ?>" alt="">
													<h1 class="display-1 l-10 fg-black"><?php echo $post->post_title; ?></h1></a>             
												</div>
										<?php 
												else: ?>

												<div class="single-news-right"><a>
													<img src="<?php echo get_the_post_thumbnail_url($idd); ?>" alt="">
													<h1 class="display-1 l-10 fg-black"><?php echo $post->post_title; ?></h1></a>            
												</div>	
											</div>
										<?php 	
												endif; ?>
										<?php
										if($min_count === 4){
											$min_count = 1; $rev = true;
										}
										elseif($min_count === 2 && $count === 1 ){
											$rev = true;$min_count = 1;
										}
										 else 
										 { $min_count++; $rev = false; }
										$count++;
									} ?>
									</div>
								</section>
							<?php endif; ?>


						<?php endif; ?>
					
					<?php endfor; ?>
				<?php // endif; ?>

			</div>
			<div class="model-container" id="fire-model-container">
			<?php foreach($types as $val): ?>
			<button type="button" class="button fr-models" id="id-<?php echo $val; ?>" data-id="#fire-home" data-media-type="<?php echo $val; ?>" data-media-id="<?php echo $id; ?>" data-media-adder="#fire_adder_counter<?php echo $id;?>" ><?php echo $val; ?></button>
			<?php endforeach; ?>	
			</div>
	<?php
	}
	elseif( $object->post_type == 'fire_carousel'){
		$id = $object->ID;
		$design = esc_html(get_post_meta($id,'meta-carousel-fire-selector-'.$id,true));
		?>
		<label for="carouselSelector">Select a design</label>
		<select name="meta-carousel-fire-selector-<?php echo $id; ?>" id="carouselSelector">
			<option value=" ">Select a design</option>
			<option value="split" <?php echo ($design == 'split')?'selected':'';?>>Content and Image</option>
			<option value="single" <?php echo ($design == 'single')?'selected':'';?>>Big Image</option>
			<!-- <option value="back" <?php// echo ($design == 'back')?'selected':'';?>>Content with bg</option> -->
			<option value="double" <?php echo ($design == 'double')?'selected':'';?>>Two Images</option>
			<option value="bg" <?php echo ($design == 'bg')?'selected':'';?>>Content with BG</option>
		</select>
		<?php
		switch($design){

			case 'single':
				?>
				<section id="case-large-page">
					<div class="only-img">
						<div class="big-wrapper">
							<fieldset>
								<div>
									<input type="hidden" class="large-text" name="meta-box-carousel-fire-<?php echo $id; ?>" id="myplugin_media-carousel-<?php echo $id;?>" value="<?php echo esc_attr( get_post_meta( $id,"meta-box-carousel-fire-".$id, true ) ); ?>">
									<img src="<?php echo  (get_post_meta( $id,"meta-box-carousel-fire-".$id, true ) != null)? esc_attr( get_post_meta( $id,"meta-box-carousel-fire-".$id, true ) ) : get_template_directory_uri().'/assets/img/images.png'; ?>" id="mymedia-carousel-<?php echo $id;?>"><br>
									<button type="button" class="button" id="imedia-carousel-<?php echo $id;?>" data-media-images="#mymedia-carousel-<?php echo $id;?>" data-media-uploader-target="#myplugin_media-carousel-<?php echo $id;?>">Change Image</button>
								</div>
							</fieldset>
						</div>
					</div>
				</section>
				<?php
				break;
			case 'split':
				?>
				<section id="home">
				<div class="hero">
				<div id="carouselControls" class="carousel slide">
					<div class="carousel-inner">
						<div class="carousel-item active n-h">
							<div class="wrapper carousel-caption ">
								<div class="row">
									<div class="col-md-6 d-flex hero-left position-relative" >
										<div class="display-0 m-40 text-dark">
											<?php $title = get_post_meta($id,"meta-box-carousel-title-".$id,true);
												$content = get_post_meta($id,"meta-box-carousel-content-".$id,true); ?>
										<textarea contenteditable="true" id="metaboxcarousel<?php echo $id; ?>" name='meta-box-carousel-title-<?php echo $id; ?>' ><?php echo ($title != null)? $title : '<span class="display-0">Kommunikation på tværs af organisationen.<br><span class="fg-brown">Gjort simpelt</span></span>'; ?></textarea>
										<?php fire_ck_input('metaboxcarousel'.$id); ?>	
										<p class="display-1 work-sans text-dark">
										<textarea contenteditable="true" id="metaboxcarouselcont<?php echo $id; ?>" name='meta-box-carousel-content-<?php echo $id; ?>' ><?php echo ($content != null)? $content : '<span class="display-1 work-sans">VisioSign tilbyder et stort udbud af skærmløsninger. Skærmene kan kombineres på alle tænkelige måder, lige fra en enkelt skærm til en løsning med flere hundrede skærme, i det vi kalder det digitale hus.<br><br>Alle skærme kobles til VisioSign Cloud, hvorfra de kan tilgås og administreres af de brugere, der har adgang til hele eller dele af løsningen.</span>'; ?></textarea>
										<?php fire_ck_input('metaboxcarouselcont'.$id); ?>
										</p>
									</div>
									</div>
									<div class="col-md-6 hero-right">
									<fieldset>
								<div>
									<input type="hidden" class="large-text" name="meta-box-carousel-fire-<?php echo $id; ?>" id="myplugin_media-carousel-<?php echo $id;?>" value="<?php echo esc_attr( get_post_meta( $id,"meta-box-carousel-fire-".$id, true ) ); ?>">
									<img src="<?php echo  (get_post_meta( $id,"meta-box-carousel-fire-".$id, true ) != null)? esc_attr( get_post_meta( $id,"meta-box-carousel-fire-".$id, true ) ) : get_template_directory_uri().'/assets/img/images.png'; ?>" id="mymedia-carousel-<?php echo $id;?>"><br>
									<button type="button" class="button" id="imedia-carousel-<?php echo $id;?>" data-media-images="#mymedia-carousel-<?php echo $id;?>" data-media-uploader-target="#myplugin_media-carousel-<?php echo $id;?>">Change Image</button>
								</div>
							</fieldset>
									</div>
								</div>
						
							</div>
						</div>
					</div>
				</div>
				</div>		
				</section>
				<?php
				break;
				case 'bg':
					?>
					<section id="home">
					<div class="hero">
					
					<div id="carouselControls" class="carousel slide">
						<div class="carousel-inner">
						<select class="fr-stick-right3" name="meta-box-carousel-bgcolor-<?php echo $id?>1">
													<?php
														$option_values = array('overlay-v-brown','overlay-v','overlay-v-green','no-overlay');
														foreach($option_values as $key => $value) 
														{
															if($value == get_post_meta($id, "meta-box-carousel-bgcolor-".$id."1", true))
															{
														?>
																<option value="<?php echo $value; ?>" selected><?php echo $value; ?></option>
														<?php } else { ?>
																<option value="<?php echo $value; ?>"><?php echo $value;?></option>
														<?php }
															}
														?>
													</select>
						<?php 
								$bgcolor = get_post_meta($id,"meta-box-carousel-bgcolor-".$id."1",true); ?>
							<div class="carousel-item active w-h">
							<div class="<?php echo $bgcolor; ?>" style=""></div>
							<fieldset>
									<div>
										<input type="hidden" class="large-text" name="meta-box-carousel-fire-<?php echo $id; ?>" id="myplugin_media-carousel-<?php echo $id;?>" value="<?php echo esc_attr( get_post_meta( $id,"meta-box-carousel-fire-".$id, true ) ); ?>">
										<img class="d-block w-100"  src="<?php echo  (get_post_meta( $id,"meta-box-carousel-fire-".$id, true ) != null)? esc_attr( get_post_meta( $id,"meta-box-carousel-fire-".$id, true ) ) : get_template_directory_uri().'/assets/img/images.png'; ?>" id="mymedia-carousel-<?php echo $id;?>"><br>
										<button type="button" class="button fr-stick-right2" id="imedia-carousel-<?php echo $id;?>" data-media-images="#mymedia-carousel-<?php echo $id;?>" data-media-uploader-target="#myplugin_media-carousel-<?php echo $id;?>">Change Image</button>
									</div>
							</fieldset>
								<div class="wrapper carousel-caption ">
									<div class="row">
										<div class="col-md-5 d-flex hero-left position-relative" >
											<div class="display-0 m-40 text-dark">
												<?php $title = get_post_meta($id,"meta-box-carousel-title-".$id,true);
													$content = get_post_meta($id,"meta-box-carousel-content-".$id,true); ?>
											<textarea contenteditable="true" id="metaboxcarousel<?php echo $id; ?>" name='meta-box-carousel-title-<?php echo $id; ?>' ><?php echo ($title != null)? $title : '<span class="display-0">Kommunikation på tværs af organisationen.<br><span class="fg-brown">Gjort simpelt</span></span>'; ?></textarea>
											<?php fire_ck_input('metaboxcarousel'.$id); ?>	
											<p class="display-1 work-sans text-dark">
											<textarea contenteditable="true" id="metaboxcarouselcont<?php echo $id; ?>" name='meta-box-carousel-content-<?php echo $id; ?>' ><?php echo ($content != null)? $content : '<span class="display-1 work-sans">VisioSign tilbyder et stort udbud af skærmløsninger. Skærmene kan kombineres på alle tænkelige måder, lige fra en enkelt skærm til en løsning med flere hundrede skærme, i det vi kalder det digitale hus.<br><br>Alle skærme kobles til VisioSign Cloud, hvorfra de kan tilgås og administreres af de brugere, der har adgang til hele eller dele af løsningen.</span>'; ?></textarea>
											<?php fire_ck_input('metaboxcarouselcont'.$id); ?>
											</p>
										</div>
										</div>
										<div class="col-md-7 hero-right">

										</div>
									</div>
							
								</div>
							</div>
						</div>
					</div>
					</div>		
					</section>
					<?php
					break;
			case 'double':
				?>
				<section id="service-page">
				<div class="magazine" id="sec2">
							<div class="wrapper">
								<div class="row">
									<div class="col-md-6 left">
									<fieldset>
										<div>
											<input type="hidden" class="large-text" name="meta-box-carousel-fire1-<?php echo $id; ?>" id="myplugin_media-carousel-<?php echo $id;?>" value="<?php echo esc_attr( get_post_meta( $id,"meta-box-carousel-fire1-".$id, true ) ); ?>">
											<img src="<?php echo  (get_post_meta( $id,"meta-box-carousel-fire1-".$id, true ) != null)? esc_attr( get_post_meta( $id,"meta-box-carousel-fire1-".$id, true ) ) : get_template_directory_uri().'/assets/img/images.png'; ?>" id="mymedia-carousel-<?php echo $id;?>"><br>
											<button type="button" class="button" id="imedia-carousel-<?php echo $id;?>" data-media-images="#mymedia-carousel-<?php echo $id;?>" data-media-uploader-target="#myplugin_media-carousel-<?php echo $id;?>">Change Image</button>
										</div>
									</fieldset>
									<br>
									<fieldset>
										<div>
											<input type="hidden" class="large-text" name="meta-box-carousel-fire2-<?php echo $id; ?>" id="myplugin_media-carousel2-<?php echo $id;?>" value="<?php echo esc_attr( get_post_meta( $id,"meta-box-carousel-fire2-".$id, true ) ); ?>">
											<img src="<?php echo  (get_post_meta( $id,"meta-box-carousel-fire2-".$id, true ) != null)? esc_attr( get_post_meta( $id,"meta-box-carousel-fire2-".$id, true ) ) : get_template_directory_uri().'/assets/img/images.png'; ?>" id="mymedia-carousel2-<?php echo $id;?>"><br>
											<button type="button" class="button" id="imedia-carousel2-<?php echo $id;?>" data-media-images="#mymedia-carousel2-<?php echo $id;?>" data-media-uploader-target="#myplugin_media-carousel2-<?php echo $id;?>">Change Image</button>
										</div>
									</fieldset>
									</div>
								</div>
							</div>
				</div>
				</section>
				<?php
				break;
			default:
			?>
				<h1 class="text-center">Select a design and save</h1>
			<?php
				break;

		}
	}
	elseif( $object->post_type == 'fire_show'){
		$id = $object->ID;
		$content = get_post_meta($id,"meta-box-shows-content-".$id,true);
		?>
		<div class="fire_fr_shows">
			<br><br>
		<p class="display-1 work-sans text-dark">
				<textarea contenteditable="true" id="metaboxshowscont<?php echo $id; ?>" name='meta-box-shows-content-<?php echo $id; ?>' ><?php echo ($content != null)? $content : '<span class="display-4 ">Tydelig kommunikation med infoskærme fra VisioSign</span>'; ?></textarea>
				<?php fire_ck_input('metaboxshowscont'.$id); ?>
				<label for="meta-box-shows-blink-<?php echo $id ?>">Select a link for the page</label> 
				<br><br>
				<?php wp_dropdown_pages( array(
							'name' => 'meta-box-shows-blink-'.$id ,
							'id' => 'meta-box-shows-blink-'.$id,
							'selected' => get_post_meta( $id, 'meta-box-shows-blink-'.$id, true )
						));?>
						<br><br>
				<a class="fr-button-link-brown-white"><input type="text" name="meta-box-shows-btext-<?php echo $id; ?>" value="<?php echo get_post_meta( $id, 'meta-box-shows-btext-'.$id, true ); ?>"></a>
		</p>
		</div>
		<?php
	}
	elseif( $object->post_type == 'fire_testimonial'){
		$id = $object->ID;
		$content = get_post_meta($id,"meta-box-testimonial-content-".$id,true);
		?>
		<div class="fire_fr_shows">
			<br><br>
		<p class="display-1 work-sans text-dark">
				<textarea contenteditable="true" id="metaboxtestimonialcont<?php echo $id; ?>" name='meta-box-testimonial-content-<?php echo $id; ?>' ><?php echo ($content != null)? $content : '<span class="display-4 ">Tydelig kommunikation med infoskærme fra VisioSign</span>'; ?></textarea>
				<?php fire_ck_input('metaboxtestimonialcont'.$id); ?>
				<br><br>
				<label for="meta-box-testimonial-name-<?php echo $id; ?>">Enter Name</label>
				<input type="text" class="widefat" id="meta-box-testimonial-name-<?php echo $id; ?>" name="meta-box-testimonial-name-<?php echo $id; ?>" value="<?php echo (get_post_meta($id,"meta-box-testimonial-name-".$id,true) != null) ?  get_post_meta($id,"meta-box-testimonial-name-".$id,true) : ''; ?>">
				<br><br>
				<label for="meta-box-testimonial-desg-<?php echo $id; ?>">Enter Designation</label>
				<input type="text" class="widefat"  id="meta-box-testimonial-desg-<?php echo $id; ?>" name="meta-box-testimonial-desg-<?php echo $id; ?>" value="<?php echo (get_post_meta($id,"meta-box-testimonial-desg-".$id,true) != null) ?  get_post_meta($id,"meta-box-testimonial-desg-".$id,true) : ''; ?>">
			</p>
		</div>
		<?php
	}
	else
	return;

	wp_nonce_field(basename(__FILE__), "meta-box-nonce");
}
add_action( 'edit_form_after_title', 'adder', 10, 2 );

//add modules ends

function add_custom_meta_box($post_type, $post)
{
		//fire forms
		add_meta_box("fr-forms","Form Details","forms","fire_forms","normal","high",null);
		add_meta_box("fr-from-shortcode","ShortCode","fr_shortcode","fire_forms","side","high",null);
}

add_action("add_meta_boxes", "add_custom_meta_box",10,2);

function add_custom_meta_color(){
	add_meta_box("fr-colors","Button Color","color_module","fire_color","normal","high",null);
} 
add_action( "add_meta_boxes", "add_custom_meta_color", 10 );

function save_custom_color_box($post_id, $post, $update)
{
	if (!isset($_POST["meta-box-color-nonce"]) || !wp_verify_nonce($_POST["meta-box-color-nonce"], basename(__FILE__)))
		return $post_id;

	if (!current_user_can("edit_post", $post_id))
		return $post_id;

	if (defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
		return $post_id;

	//Verifying post slug
	$slug = "fire_color";
	
	if ($slug != $post->post_type)
		return $post_id;
	
	update_fire_data_modules($post_id);

	//circleSec
	if (isset($_POST["meta-box-fr-color-textcolor-".$post_id])) {
		update_post_meta($post_id, "meta-box-fr-color-textcolor-".$post_id, $_POST["meta-box-fr-color-textcolor-".$post_id] );
	}
	if (isset($_POST["meta-box-fr-color-texthovercolor-".$post_id])) {
		update_post_meta($post_id, "meta-box-fr-color-texthovercolor-".$post_id, $_POST["meta-box-fr-color-texthovercolor-".$post_id] );
	}
	if (isset($_POST["meta-box-fr-color-backgroundcolor-".$post_id])) {
		update_post_meta($post_id, "meta-box-fr-color-backgroundcolor-".$post_id, $_POST["meta-box-fr-color-backgroundcolor-".$post_id] );
	}
	if (isset($_POST["meta-box-fr-color-backgroundhovercolor-".$post_id])) {
		update_post_meta($post_id, "meta-box-fr-color-backgroundhovercolor-".$post_id, $_POST["meta-box-fr-color-backgroundhovercolor-".$post_id] );
	}
	if (isset($_POST["meta-box-fr-color-bordercolor-".$post_id])) {
		update_post_meta($post_id, "meta-box-fr-color-bordercolor-".$post_id, $_POST["meta-box-fr-color-bordercolor-".$post_id] );
	}
	if (isset($_POST["meta-box-fr-color-borderhovercolor-".$post_id])) {
		update_post_meta($post_id, "meta-box-fr-color-borderhovercolor-".$post_id, $_POST["meta-box-fr-color-borderhovercolor-".$post_id] );
	}	
}

add_action("save_post_fire_color", "save_custom_color_box", 10, 3);

function update_fire_data_modules($post_id){
// 
	// 
	// 
	// 
	// Fire Main starts
	// Visio Sign
	// 
	// 
    function update_button_setting($post_id,$type,$i){
        update_fire_data($post_id,"primarycolor-".$type.$post_id.$i);
        update_fire_data($post_id,"primarytextcolor-".$type.$post_id.$i);
        update_fire_data($post_id,"primarybordercolor-".$type.$post_id.$i);
        update_fire_data($post_id,"button-transition-".$type.$post_id.$i);
        update_fire_data($post_id,"button-background-".$type.$post_id.$i);
        update_fire_data($post_id,"hovercolor-".$type.$post_id.$i);
        update_fire_data($post_id,"hovertextcolor-".$type.$post_id.$i);
        update_fire_data($post_id,"hoverbordercolor-".$type.$post_id.$i);
    }
    function delete_button_setting($post_id,$type,$i){
        delete_post_meta($post_id, "primarycolor-".$type.$post_id.$i, $_POST["primarycolor-".$type.$post_id.$i]);
        delete_post_meta($post_id, "primarytextcolor-".$type.$post_id.$i, $_POST["primarytextcolor-".$type.$post_id.$i]);
        delete_post_meta($post_id, "primarybordercolor-".$type.$post_id.$i, $_POST["primarybordercolor-".$type.$post_id.$i]);
        delete_post_meta($post_id, "button-transition-".$type.$post_id.$i, $_POST["button-transition-".$type.$post_id.$i]);
        delete_post_meta($post_id, "button-background-".$type.$post_id.$i, $_POST["button-background-".$type.$post_id.$i]);
        delete_post_meta($post_id, "hovercolor-".$type.$post_id.$i, $_POST["hovercolor-".$type.$post_id.$i]);
        delete_post_meta($post_id, "hovertextcolor-".$type.$post_id.$i, $_POST["hovertextcolor-".$type.$post_id.$i]);
        delete_post_meta($post_id, "hoverbordercolor-".$type.$post_id.$i, $_POST["hoverbordercolor-".$type.$post_id.$i]);
    }
	function update_fire_data($id,$data)
	{
		if (isset($_POST[$data])) {
			update_post_meta($id, $data, $_POST[$data]);
		}
	}
		$main_counter = 0;$fire_hip_counter = 0;

		if (isset($_POST["fire_adder_counter".$post_id])) {
			update_post_meta($post_id, "fire_adder_counter".$post_id, $_POST["fire_adder_counter".$post_id]);
			$main_counter = $_POST["fire_adder_counter".$post_id];
		}
		// if (isset($_POST["meta-fire-order".$post_id])) {
		// 	update_post_meta($post_id, "meta-fire-order".$post_id, $_POST["meta-fire-order".$post_id] );
		// 	$fire_order = $_POST["meta-fire-order".$post_id];
		// }

			for($i = 0; $i < $main_counter ; $i++){
				//  
				// 
				// Fire hip starts
				// Visio Sign
				// 
				// 

				if (!empty($_POST["meta-fire-hip".$post_id.$i])){
					if($_POST["meta-fire-hip".$post_id.$i] == "true") {
							update_fire_data($post_id,"meta-fire-order".$post_id.$i);
							if (isset($_POST["meta-fire-".$post_id.$i])) {
								update_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);
							}
							if (!empty($_POST["meta-box-hip-title-".$post_id.$i])) {
								update_post_meta($post_id, "meta-box-hip-title-".$post_id.$i, $_POST["meta-box-hip-title-".$post_id.$i] );
							}
							update_fire_data($post_id,"meta-box-hip-title2-".$post_id.$i);
							if (isset($_POST["meta-box-hip-image-".$post_id.$i])) {
								update_post_meta($post_id, "meta-box-hip-image-".$post_id.$i, $_POST["meta-box-hip-image-".$post_id.$i]);
							}
							update_fire_data($post_id,"meta-box-hip-bgcolor-".$post_id.$i);
					}	
					else
					{
						delete_post_meta($post_id, "meta-box-hip-title-".$post_id.$i,$_POST["meta-box-hip-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-hip-title2-".$post_id.$i,$_POST["meta-box-hip-title2-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-hip-bgcolor-".$post_id.$i,$_POST["meta-box-hip-bgcolor-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-hip-image-".$post_id.$i, $_POST["meta-box-hip-image-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);

					}	
				}
				//  
				// 
				// floater starts
				// Visio Sign
				// 
				// 

				if (!empty($_POST["meta-fire-floater".$post_id.$i])){
					if($_POST["meta-fire-floater".$post_id.$i] == "true") {
							update_fire_data($post_id,"meta-fire-order".$post_id.$i);
							if (isset($_POST["meta-fire-".$post_id.$i])) {
								update_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);
							}
							if (!empty($_POST["meta-box-floater-title-".$post_id.$i])) {
								update_post_meta($post_id, "meta-box-floater-title-".$post_id.$i, $_POST["meta-box-floater-title-".$post_id.$i] );
							}
							if (!empty($_POST["meta-box-floater-placeholder1-".$post_id.$i])) {
								update_post_meta($post_id, "meta-box-floater-placeholder1-".$post_id.$i, $_POST["meta-box-floater-placeholder1-".$post_id.$i] );
							}
							if (!empty($_POST["meta-box-floater-placeholder2-".$post_id.$i])) {
								update_post_meta($post_id, "meta-box-floater-placeholder2-".$post_id.$i, $_POST["meta-box-floater-placeholder2-".$post_id.$i] );
							}
							if (!empty($_POST["meta-box-floater-button-".$post_id.$i])) {
								update_post_meta($post_id, "meta-box-floater-button-".$post_id.$i, $_POST["meta-box-floater-button-".$post_id.$i] );
							}
							if (!empty($_POST["meta-box-floater-email-".$post_id.$i])) {
								update_post_meta($post_id, "meta-box-floater-email-".$post_id.$i, $_POST["meta-box-floater-email-".$post_id.$i] );
							}
							update_fire_data($post_id,"meta-box-floater-bgcolor-".$post_id.$i);
					}	
					else
					{
						delete_post_meta($post_id, "meta-box-floater-title-".$post_id.$i,$_POST["meta-box-floater-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-floater-placeholder1-".$post_id.$i,$_POST["meta-box-floater-placeholder1-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-floater-placeholder2-".$post_id.$i,$_POST["meta-box-floater-placeholder2-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-floater-button-".$post_id.$i,$_POST["meta-box-floater-button-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-floater-email-".$post_id.$i,$_POST["meta-box-floater-email-".$post_id.$i]);

						delete_post_meta($post_id, "meta-box-floater-bgcolor-".$post_id.$i,$_POST["meta-box-floater-bgcolor-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);

					}	
				}
								//  
				// 
				// Fire html starts
				// Visio Sign
				// 
				// 

				if (!empty($_POST["meta-fire-html".$post_id.$i])){
					if($_POST["meta-fire-html".$post_id.$i] == "true") {
							update_fire_data($post_id,"meta-fire-order".$post_id.$i);
							if (isset($_POST["meta-fire-".$post_id.$i])) {
								update_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);
							}
							if (!empty($_POST["meta-box-html-title-".$post_id.$i])) {
								update_post_meta($post_id, "meta-box-html-title-".$post_id.$i, $_POST["meta-box-html-title-".$post_id.$i] );
							}
					}
					else
					{
						delete_post_meta($post_id, "meta-box-html-title-".$post_id.$i,$_POST["meta-box-html-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-html-bgcolor-".$post_id.$i,$_POST["meta-box-html-bgcolor-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);

					}	
				}
				//  
				// 
				// Fire hip starts
				// Visio Sign
				// 
				// Fire Ctab starts
				// 
				//  
				if (!empty($_POST["meta-fire-ctaB".$post_id.$i])){
					if ($_POST["meta-fire-ctaB".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-box-ctaB-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-ctaB-content-".$post_id.$i);
						update_fire_data($post_id,"meta-box-ctaB-image-".$post_id.$i);
						update_fire_data($post_id,"meta-box-ctaB-dropdown-".$post_id.$i);
						update_fire_data($post_id,"primarycolor-ctaB".$post_id.$i);
						update_fire_data($post_id,"primarytextcolor-ctaB".$post_id.$i);
						update_fire_data($post_id,"primarybordercolor-ctaB".$post_id.$i);
						update_fire_data($post_id,"button-transition-ctaB".$post_id.$i);
						update_fire_data($post_id,"button-background-ctaB".$post_id.$i);
						update_fire_data($post_id,"hovercolor-ctaB".$post_id.$i);
						update_fire_data($post_id,"hovertextcolor-ctaB".$post_id.$i);
						update_fire_data($post_id,"hoverbordercolor-ctaB".$post_id.$i);
						update_fire_data($post_id,"meta-box-ctaB-link-".$post_id.$i);
						update_fire_data($post_id,"meta-box-ctaB-Blink-".$post_id.$i);
					}else
					{
						delete_post_meta($post_id, "meta-box-ctaB-title-".$post_id.$i,$_POST["meta-box-ctaB-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-ctaB-content-".$post_id.$i, $_POST["meta-box-ctaB-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-ctaB-image-".$post_id.$i, $_POST["meta-box-ctaB-image-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-ctaB-dropdown-".$post_id.$i,$_POST["meta-box-ctaB-dropdown-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-ctaB-link-".$post_id.$i, $_POST["meta-box-ctaB-link-".$post_id.$i]);
						delete_post_meta($post_id, "primarycolor-ctaB".$post_id.$i, $_POST["primarycolor-ctaB".$post_id.$i]);
						delete_post_meta($post_id, "primarytextcolor-ctaB".$post_id.$i, $_POST["primarytextcolor-ctaB".$post_id.$i]);
						delete_post_meta($post_id, "primarybordercolor-ctaB".$post_id.$i, $_POST["primarybordercolor-ctaB".$post_id.$i]);
						delete_post_meta($post_id, "button-transition-ctaB".$post_id.$i, $_POST["button-transition-ctaB".$post_id.$i]);
						delete_post_meta($post_id, "button-background-ctaB".$post_id.$i, $_POST["button-background-ctaB".$post_id.$i]);
						delete_post_meta($post_id, "hovercolor-ctaB".$post_id.$i, $_POST["hovercolor-ctaB".$post_id.$i]);
						delete_post_meta($post_id, "hovertextcolor-ctaB".$post_id.$i, $_POST["hovertextcolor-ctaB".$post_id.$i]);
						delete_post_meta($post_id, "hoverbordercolor-ctaB".$post_id.$i, $_POST["hoverbordercolor-ctaB".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-ctaB-Blink-".$post_id.$i, $_POST["meta-box-ctaB-Blink-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}

				// Visio Sign
				// 
				// Fire Ctab endss
				// 
				// feature starts
				// 
				// 
				if (!empty($_POST["meta-fire-features".$post_id.$i])){
					if ($_POST["meta-fire-features".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
					}else
					{
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// Fire feature endss
				// 
				// cloud starts
				// 
				// 
				if (!empty($_POST["meta-fire-cloud".$post_id.$i])){
					if ($_POST["meta-fire-cloud".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
						update_fire_data($post_id,"meta-box-cloud-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-cloud-content-".$post_id.$i);
						update_fire_data($post_id,"meta-box-cloud-link-".$post_id.$i);
						update_fire_data($post_id,"meta-box-cloud-Btext-".$post_id.$i);
                        update_fire_data($post_id,"meta-box-cloud-image-".$post_id.$i);
                        update_button_setting($post_id,'cloud',$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
					}
					else
					{
						delete_post_meta($post_id, "meta-box-cloud-title-".$post_id.$i, $_POST["meta-box-cloud-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-cloud-content-".$post_id.$i, $_POST["meta-box-cloud-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-cloud-link-".$post_id.$i, $_POST["meta-box-cloud-link-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-cloud-Btext-".$post_id.$i, $_POST["meta-box-cloud-Btext-".$post_id.$i]);
                        delete_post_meta($post_id, "meta-box-cloud-image-".$post_id.$i, $_POST["meta-box-cloud-image-".$post_id.$i]);
                        delete_button_setting($post_id,'cloud',$i);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);

					}
				}
				// Visio Sign
				// 
				// Fire cloud endss
				// 
				// cta starts
				// 
				// 
				if (!empty($_POST["meta-fire-cta".$post_id.$i])){
					if ($_POST["meta-fire-cta".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
						update_fire_data($post_id,"meta-box-cta-link-".$post_id.$i);
						update_fire_data($post_id,"meta-box-cta-bgcolor-".$post_id.$i);
						update_fire_data($post_id,"meta-box-cta-fgcolor-".$post_id.$i);
						update_fire_data($post_id,"meta-box-cta-design-".$post_id.$i);
						update_fire_data($post_id,"meta-box-cta-title-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
					}
					else{
						delete_post_meta($post_id, "meta-box-cta-design-".$post_id.$i, $_POST["meta-box-cta-design-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-cta-title-".$post_id.$i, $_POST["meta-box-cta-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-cta-bgcolor-".$post_id.$i, $_POST["meta-box-cta-bgcolor-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-cta-fgcolor-".$post_id.$i, $_POST["meta-box-cta-fgcolor-".$post_id.$i]);

						delete_post_meta($post_id, "meta-box-cta-link-".$post_id.$i, $_POST["meta-box-cta-link-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);

					}
				}
				// Visio Sign
				// 
				// Fire cta endss
				// 
				// nyhed starts
				// 
				// 
				if (!empty($_POST["meta-fire-nyhed".$post_id.$i])){
					if ($_POST["meta-fire-nyhed".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-nyhed-title-".$post_id.$i);
                        update_fire_data($post_id,"meta-box-nyhed-link-".$post_id.$i);
                        update_fire_data($post_id,"meta-box-nyhed-btext-".$post_id.$i);
                        update_button_setting($post_id,'nyhed',$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);

					}
					else{
						delete_post_meta($post_id, "meta-box-cta-title-".$post_id.$i, $_POST["meta-box-cta-title-".$post_id.$i]);
                        delete_post_meta($post_id, "meta-box-cta-link-".$post_id.$i, $_POST["meta-box-cta-link-".$post_id.$i]);
                        delete_post_meta($post_id, "meta-box-nyhed-btext-".$post_id.$i, $_POST["meta-box-nyhed-btext-".$post_id.$i]);
                        delete_button_setting($post_id,'nyhed',$i);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);

					}
				}
				// Visio Sign
				// 
				// Fire nyhed endss
				// 
				// cards starts
				// 
				// 
				if (!empty($_POST["meta-fire-cards".$post_id.$i])){
					if ($_POST["meta-fire-cards".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-cards-btext-".$post_id.$i);
						update_fire_data($post_id,"meta-box-cards-title-".$post_id.$i);
                        update_fire_data($post_id,"meta-box-cards-link-".$post_id.$i);
                        update_button_setting($post_id,'cards',$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
						update_fire_data($post_id,"meta-box-cards-design-".$post_id.$i);
					}
					else{
						delete_post_meta($post_id, "meta-box-cards-btext-".$post_id.$i, $_POST["meta-box-cards-btext-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-cards-design-".$post_id.$i, $_POST["meta-box-cards-design-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-cards-title-".$post_id.$i, $_POST["meta-box-cards-title-".$post_id.$i]);
                        delete_post_meta($post_id, "meta-box-cards-link-".$post_id.$i, $_POST["meta-box-cards-link-".$post_id.$i]);  
                        delete_button_setting($post_id,'cards',$i);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);

					}
				}
				// Visio Sign
				// 
				// Fire nyhed endss
				// 
				// 3 cards starts
				// 
				// 
				if (!empty($_POST["meta-fire-3cards".$post_id.$i])){
					if ($_POST["meta-fire-3cards".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);

						update_fire_data($post_id,"meta-box-3cards-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-3cards-link-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
					}
					else{
						delete_post_meta($post_id, "meta-box-3cards-title-".$post_id.$i, $_POST["meta-box-3cards-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-3cards-link-".$post_id.$i, $_POST["meta-box-3cards-link-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);

					}
				}
				// Visio Sign
				// 
				// Fire 3 cards endss
				// 
				// reference starts
				// 
				// 
				if (!empty($_POST["meta-fire-reference".$post_id.$i])){
					if ($_POST["meta-fire-reference".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-reference-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-reference-Blink-".$post_id.$i);
						update_fire_data($post_id,"meta-box-reference-link-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);

					}
					else{
						delete_post_meta($post_id, "meta-box-reference-title-".$post_id.$i, $_POST["meta-box-reference-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-reference-Blink-".$post_id.$i, $_POST["meta-box-reference-Blink-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-reference-link-".$post_id.$i, $_POST["meta-box-reference-link-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);

					}
				}
				// Visio Sign
				// 
				// Fire reference endss
				// 
				// umbrella starts
				// 
				// 
				if (!empty($_POST["meta-fire-umbrella".$post_id.$i])){
					if ($_POST["meta-fire-umbrella".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-umbrella-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-umbrella-image-".$post_id.$i);
						update_fire_data($post_id,"meta-box-umbrella-image2-".$post_id.$i);
						update_fire_data($post_id,"meta-box-umbrella-content-".$post_id.$i);
						update_fire_data($post_id,"meta-box-umbrella-link-".$post_id.$i);
						update_fire_data($post_id,"meta-box-umbrella-link-anchor-".$post_id.$i);
						update_fire_data($post_id,"meta-box-umbrella-Blink-".$post_id.$i);
                        update_button_setting($post_id,'umbrella',$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);

					}
					else{
						delete_post_meta($post_id, "meta-box-umbrella-title-".$post_id.$i, $_POST["meta-box-umbrella-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-umbrella-image-".$post_id.$i, $_POST["meta-box-umbrella-image-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-umbrella-image2-".$post_id.$i, $_POST["meta-box-umbrella-image2-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-umbrella-link-".$post_id.$i, $_POST["meta-box-umbrella-link-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-umbrella-link-anchor-".$post_id.$i, $_POST["meta-box-umbrella-link-anchor-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-umbrella-Blink-".$post_id.$i, $_POST["meta-box-umbrella-Blink-".$post_id.$i]);
                        delete_post_meta($post_id, "meta-box-umbrella-content-".$post_id.$i, $_POST["meta-box-umbrella-content-".$post_id.$i]);
                        delete_button_setting($post_id,'umbrella',$i);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);

					}
				}
				// Visio Sign
				// 
				// Fire umbrella endss
				// 
				// carousel starts
				// 
				// 
				if (!empty($_POST["meta-fire-carousel".$post_id.$i])){
					if ($_POST["meta-fire-carousel".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-carousel-link-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-carousel-link-".$post_id.$i, $_POST["meta-box-carousel-link-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// Fire carousel endss
				// 
				// only header starts
				// 
				// 
				if (!empty($_POST["meta-fire-onlyH".$post_id.$i])){
					if ($_POST["meta-fire-onlyH".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-onlyH-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-onlyH-content-".$post_id.$i);
						update_fire_data($post_id,"meta-box-onlyH-image-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-onlyH-title-".$post_id.$i, $_POST["meta-box-onlyH-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-onlyH-content-".$post_id.$i, $_POST["meta-box-onlyH-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-onlyH-image-".$post_id.$i, $_POST["meta-box-onlyH-image-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}	
				// Visio Sign
				// 
				// only header endss
				// 
				// page50 starts
				// 
				// 
				if (!empty($_POST["meta-fire-page50".$post_id.$i])){
					if ($_POST["meta-fire-page50".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-page50-image-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
						for($ii = 1; $ii < 7; $ii++){
							update_fire_data($post_id,"meta-box-page50-title-".$post_id.$i.$ii);
							update_fire_data($post_id,"meta-box-page50-image-".$post_id.$i.$ii);
						}
					}else{
						delete_post_meta($post_id, "meta-box-page50-image-".$post_id.$i, $_POST["meta-box-page50-image-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);	
						for($ii = 1; $ii < 7; $ii++){
							delete_post_meta($post_id, "meta-box-page50-title-".$post_id.$i, $_POST["meta-box-page50-title-".$post_id.$i]);
							delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
							delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
						}
					}
				}
				// Visio Sign
				// 
				// only page50 endss
				// 
				// gridInfo starts
				// 
				// 
				if (!empty($_POST["meta-fire-gridInfo".$post_id.$i])){
					if ($_POST["meta-fire-gridInfo".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-gridInfo-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-gridInfo-content-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
						for($ii = 0; $ii < 4; $ii++){
							update_fire_data($post_id,"meta-box-gridInfo-title-".$post_id.$i.$ii);
							update_fire_data($post_id,"meta-box-gridInfo-content-".$post_id.$i.$ii);
						}
					}else{
						delete_post_meta($post_id, "meta-box-gridInfo-title-".$post_id.$i, $_POST["meta-box-gridInfo-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-gridInfo-content-".$post_id.$i, $_POST["meta-box-gridInfo-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);	
						for($ii = 0; $ii < 4; $ii++){
							delete_post_meta($post_id, "meta-box-gridInfo-title-".$post_id.$ii, $_POST["meta-box-gridInfo-title-".$post_id.$ii]);
							delete_post_meta($post_id, "meta-box-gridInfo-content-".$post_id.$ii, $_POST["meta-box-gridInfo-content-".$post_id.$ii]);
						}	
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);					
					}
				}
				// Visio Sign
				// 
				// only gridInfo endss
				// 
				// magazine starts
				// 
				// 
				if (!empty($_POST["meta-fire-magazine".$post_id.$i])){
					if ($_POST["meta-fire-magazine".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-magazine-image-".$post_id.$i);
						update_fire_data($post_id,"meta-box-magazine-image2-".$post_id.$i);
						update_fire_data($post_id,"meta-box-magazine-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-magazine-content-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
						for($ii = 0; $ii < 4; $ii++){
							update_fire_data($post_id,"meta-box-magazine-title-".$post_id.$i.$ii);
							update_fire_data($post_id,"meta-box-magazine-content-".$post_id.$i.$ii);
						}
					}else{
						delete_post_meta($post_id, "meta-box-magazine-image-".$post_id.$i, $_POST["meta-box-magazine-image-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-magazine-image2-".$post_id.$i, $_POST["meta-box-magazine-image2-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-magazine-title-".$post_id.$i, $_POST["meta-box-magazine-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-magazine-content-".$post_id.$i, $_POST["meta-box-magazine-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
						for($ii = 0; $ii < 4; $ii++){
							delete_post_meta($post_id, "meta-box-magazine-title-".$post_id.$ii, $_POST["meta-box-magazine-title-".$post_id.$ii]);
							delete_post_meta($post_id, "meta-box-magazine-content-".$post_id.$ii, $_POST["meta-box-magazine-content-".$post_id.$ii]);
						}
					}
				}
				// Visio Sign
				// 
				// only gridInfo endss
				// 
				// magazine starts
				// 
				// 
				if (!empty($_POST["meta-fire-blogList".$post_id.$i])){
					if ($_POST["meta-fire-blogList".$post_id.$i] == "true") {
						for($ii = 0; $ii < 4; $ii++){
							update_fire_data($post_id,"meta-box-blogList-title-".$post_id.$i.$ii);
							update_fire_data($post_id,"meta-box-blogList-content-".$post_id.$i.$ii);
							update_fire_data($post_id,"meta-box-blogList-image-".$post_id.$i.$ii);
						}
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						for($ii = 0; $ii < 4; $ii++){
							delete_post_meta($post_id, "meta-box-blogList-title-".$post_id.$ii, $_POST["meta-box-blogList-title-".$post_id.$ii]);
							delete_post_meta($post_id, "meta-box-blogList-content-".$post_id.$ii, $_POST["meta-box-blogList-content-".$post_id.$ii]);
							delete_post_meta($post_id, "meta-box-blogList-image-".$post_id.$ii, $_POST["meta-box-blogList-image-".$post_id.$ii]);
						}
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// only gridInfo endss
				// 
				// magazine starts
				// 
				// 
				if (!empty($_POST["meta-fire-sHero".$post_id.$i])){
					if ($_POST["meta-fire-sHero".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-sHero-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-sHero-content-".$post_id.$i);
						update_fire_data($post_id,"meta-box-sHero-design-".$post_id.$i);
						update_fire_data($post_id,"meta-box-sHero-image-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-sHero-title-".$post_id.$i, $_POST["meta-box-sHero-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-sHero-content-".$post_id.$i, $_POST["meta-box-sHero-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-sHero-design-".$post_id.$i, $_POST["meta-box-sHero-design-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-sHero-image-".$post_id.$i, $_POST["meta-box-sHero-image-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// only magazine endss
				// 
				// listGrids starts
				// 
				// 
				if (!empty($_POST["meta-fire-listGrids".$post_id.$i])){
					if ($_POST["meta-fire-listGrids".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-listGrids-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-listGrids-content-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-listGrids-title-".$post_id.$i, $_POST["meta-box-listGrids-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-listGrids-content-".$post_id.$i, $_POST["meta-box-listGrids-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// listGrids endss
				// 
				// product starts
				// 
				// 
				if (!empty($_POST["meta-fire-products".$post_id.$i])){
					if ($_POST["meta-fire-products".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-products-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-products-link-".$post_id.$i);
						update_fire_data($post_id,"meta-box-products-ptop-".$post_id.$i);
						update_fire_data($post_id,"meta-box-products-pbot-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-products-title-".$post_id.$i, $_POST["meta-box-products-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-products-link-".$post_id.$i, $_POST["meta-box-products-link-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-products-ptop-".$post_id.$i, $_POST["meta-box-products-ptop-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-products-pbot-".$post_id.$i, $_POST["meta-box-products-pbot-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);	
					}
				}
				// Visio Sign
				// 
				// listGrids endss
				// 
				// hero starts
				// 
				// 
				if (!empty($_POST["meta-fire-hero".$post_id.$i])){
					if ($_POST["meta-fire-hero".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-hero-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-hero-content-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-hero-title-".$post_id.$i, $_POST["meta-box-hero-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-hero-content-".$post_id.$i, $_POST["meta-box-hero-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);	
					}
				}
				// Visio Sign
				// 
				// hero endss
				// 
				// onlyImg starts
				// 
				// 
				if (!empty($_POST["meta-fire-onlyImg".$post_id.$i])){
					if ($_POST["meta-fire-onlyImg".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-onlyImg-image-".$post_id.$i);
						update_fire_data($post_id,"meta-box-onlyImg-design-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}
					else{
						delete_post_meta($post_id, "meta-box-onlyImg-design-".$post_id.$i, $_POST["meta-box-onlyImg-design-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-onlyImg-image-".$post_id.$i, $_POST["meta-box-onlyImg-image-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);	
					}
				}
					// Visio Sign
				// 
				// inlyImg endss
				// 
				// call starts
				// 
				// 
				if (!empty($_POST["meta-fire-call".$post_id.$i])){
					if ($_POST["meta-fire-call".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-call-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-call-content-".$post_id.$i);
						update_fire_data($post_id,"meta-box-call-formtitle-".$post_id.$i);
						update_fire_data($post_id,"meta-box-call-shortcode-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}
					else{
						delete_post_meta($post_id, "meta-box-call-title-".$post_id.$i, $_POST["meta-box-call-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-call-content-".$post_id.$i, $_POST["meta-box-call-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-call-formtitle-".$post_id.$i, $_POST["meta-box-call-formtitle-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-call-shortcode-".$post_id.$i, $_POST["meta-box-call-shortcode-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);	
					}
				}
				// Visio Sign
				// 
				// callendss
				// 
				// 2sec starts
				// 
				// 
				if (!empty($_POST["meta-fire-split".$post_id.$i])){
					if ($_POST["meta-fire-split".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-split-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-split-content-".$post_id.$i);
						update_fire_data($post_id,"meta-box-split-image-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}
					else{
						delete_post_meta($post_id, "meta-box-split-title-".$post_id.$i, $_POST["meta-box-split-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-split-content-".$post_id.$i, $_POST["meta-box-split-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-split-image-".$post_id.$i, $_POST["meta-box-split-image-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);	
					}
				}
				// Visio Sign
				// 
				// only gridInfo endss
				// 
				// accord starts
				// 
				// 
				if (!empty($_POST["meta-fire-accord".$post_id.$i])){
					if ($_POST["meta-fire-accord".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-accord-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-accord-image-".$post_id.$i);
						update_fire_data($post_id,"meta-count-accord".$post_id.$i);

						for($ii = 0; $ii < $_POST["meta-count-accord".$post_id.$i] ; $ii++){
							if($_POST["fr-clicker-accord-deleter".$i."-".$post_id.$ii] == "true"){
							update_fire_data($post_id,"meta-box-accord-title-".$post_id.$i.$ii);
							update_fire_data($post_id,"meta-box-accord-content-".$post_id.$i.$ii);

							}
							else{
								delete_post_meta($post_id, "meta-box-accord-title-".$post_id.$i.$ii, $_POST["meta-box-accord-title-".$post_id.$i.$ii]);
								delete_post_meta($post_id, "meta-box-accord-content-".$post_id.$i.$ii, $_POST["meta-box-accord-content-".$post_id.$i.$ii]);	
							}
							update_fire_data($post_id,"fr-clicker-accord-deleter".$i."-".$post_id.$ii);
						}
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-accord-title-".$post_id.$i, $_POST["meta-box-accord-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-accord-image-".$post_id.$i, $_POST["meta-box-accord-image-".$post_id.$i]);
						for($ii = 0; $ii < $_POST["meta-count-accord".$post_id.$i]; $ii++){
							delete_post_meta($post_id, "meta-box-accord-title-".$post_id.$i.$ii, $_POST["meta-box-accord-title-".$post_id.$i.$ii]);
							delete_post_meta($post_id, "meta-box-accord-content-".$post_id.$i.$ii, $_POST["meta-box-accord-content-".$post_id.$i.$ii]);
							delete_post_meta($post_id, "fr-clicker-accord-deleter".$i."-".$post_id.$ii, $_POST["fr-clicker-accord-deleter".$i."-".$post_id.$ii]);
						}
						delete_post_meta($post_id, "meta-count-accord".$post_id.$i, $_POST["meta-count-accord".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// only gridInfo endss
				// 
				// accord starts
				// 
				// 
				if (!empty($_POST["meta-fire-contactForm".$post_id.$i])){
					if ($_POST["meta-fire-contactForm".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-contactForm-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-contactForm-subtitle-".$post_id.$i);
						update_fire_data($post_id,"meta-box-contactForm-image-".$post_id.$i);
						update_fire_data($post_id,"meta-box-contactForm-content-".$post_id.$i);
						update_fire_data($post_id,"meta-box-contactForm-formtitle-".$post_id.$i);
						update_fire_data($post_id,"meta-box-contactForm-formcontent-".$post_id.$i);
						update_fire_data($post_id,"meta-box-contactForm-shortcode-".$post_id.$i);
						update_fire_data($post_id,"meta-box-contactForm-design-".$post_id.$i);
						for($ii = 0; $ii < 3;$ii++){
							update_fire_data($post_id,"meta-box-contactForm-title-".$post_id.$i.$ii);
							update_fire_data($post_id,"meta-box-contactForm-link-".$post_id.$i.$ii);
							update_fire_data($post_id,"meta-box-contactForm-image-".$post_id.$i.$ii);
						}
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-contactForm-design-".$post_id.$i, $_POST["meta-box-contactForm-design-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-contactForm-formcontent-".$post_id.$i, $_POST["meta-box-contactForm-formcontent-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-contactForm-subtitle-".$post_id.$i.$ii, $_POST["meta-box-contactForm-subtitle-".$post_id.$i.$ii]);
						for($ii = 0; $ii < 3;$ii++){
							delete_post_meta($post_id, "meta-box-contactForm-title-".$post_id.$i.$ii, $_POST["meta-box-contactForm-title-".$post_id.$i.$ii]);
							delete_post_meta($post_id, "meta-box-contactForm-image-".$post_id.$i.$ii, $_POST["meta-box-contactForm-image-".$post_id.$i.$ii]);
							delete_post_meta($post_id, "meta-box-contactForm-link-".$post_id.$i.$ii, $_POST["meta-box-contactForm-link-".$post_id.$i.$ii]);
						}
						delete_post_meta($post_id, "meta-box-contactForm-title-".$post_id.$i, $_POST["meta-box-contactForm-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-contactForm-image-".$post_id.$i, $_POST["meta-box-contactForm-image-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-contactForm-content-".$post_id.$i, $_POST["meta-box-contactForm-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-contactForm-formtitle-".$post_id.$i, $_POST["meta-box-contactForm-formtitle-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-contactForm-shortcode-".$post_id.$i, $_POST["meta-box-contactForm-shortcode-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// only accord endss
				// 
				// splitRev starts
				// 
				// 
				if (!empty($_POST["meta-fire-splitRev".$post_id.$i])){
					if ($_POST["meta-fire-splitRev".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-splitRev-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-splitRev-image-".$post_id.$i);
						update_fire_data($post_id,"meta-box-splitRev-bImage-".$post_id.$i);
						update_fire_data($post_id,"meta-box-splitRev-content-".$post_id.$i);
						update_fire_data($post_id,"meta-box-splitRev-Blink-".$post_id.$i);
						update_fire_data($post_id,"meta-box-splitRev-Blink1-".$post_id.$i);
						update_fire_data($post_id,"meta-box-splitRev-Btext-".$post_id.$i);
						update_fire_data($post_id,"meta-box-splitRev-Btext1-".$post_id.$i);
						update_fire_data($post_id,"meta-box-splitRev-design-".$post_id.$i);
						update_fire_data($post_id,"primarycolor-splitRev".$post_id.$i);
						update_fire_data($post_id,"primarytextcolor-splitRev".$post_id.$i);
						update_fire_data($post_id,"primarybordercolor-splitRev".$post_id.$i);
						update_fire_data($post_id,"button-transition-splitRev".$post_id.$i);
						update_fire_data($post_id,"button-background-splitRev".$post_id.$i);
						update_fire_data($post_id,"hovercolor-splitRev".$post_id.$i);
						update_fire_data($post_id,"hovertextcolor-splitRev".$post_id.$i);
						update_fire_data($post_id,"hoverbordercolor-splitRev".$post_id.$i);
						update_fire_data($post_id,"primarycolor-splitRev".$post_id.$i.'1');
						update_fire_data($post_id,"primarytextcolor-splitRev".$post_id.$i.'1');
						update_fire_data($post_id,"primarybordercolor-splitRev".$post_id.$i.'1');
						update_fire_data($post_id,"button-transition-splitRev".$post_id.$i.'1');
						update_fire_data($post_id,"button-background-splitRev".$post_id.$i.'1');
						update_fire_data($post_id,"hovercolor-splitRev".$post_id.$i.'1');
						update_fire_data($post_id,"hovertextcolor-splitRev".$post_id.$i.'1');
						update_fire_data($post_id,"hoverbordercolor-splitRev".$post_id.$i.'1');
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "primarycolor-splitRev".$post_id.$i, $_POST["primarycolor-splitRev".$post_id.$i]);
						delete_post_meta($post_id, "primarytextcolor-splitRev".$post_id.$i, $_POST["primarytextcolor-splitRev".$post_id.$i]);
						delete_post_meta($post_id, "primarybordercolor-splitRev".$post_id.$i, $_POST["primarybordercolor-splitRev".$post_id.$i]);
						delete_post_meta($post_id, "button-transition-splitRev".$post_id.$i, $_POST["button-transition-splitRev".$post_id.$i]);
						delete_post_meta($post_id, "button-background-splitRev".$post_id.$i, $_POST["button-background-splitRev".$post_id.$i]);
						delete_post_meta($post_id, "hovercolor-splitRev".$post_id.$i, $_POST["hovercolor-splitRev".$post_id.$i]);
						delete_post_meta($post_id, "hovertextcolor-splitRev".$post_id.$i, $_POST["hovertextcolor-splitRev".$post_id.$i]);
						delete_post_meta($post_id, "hoverbordercolor-splitRev".$post_id.$i, $_POST["hoverbordercolor-splitRev".$post_id.$i]);
						delete_post_meta($post_id, "primarycolor-splitRev".$post_id.$i.'1', $_POST["primarycolor-splitRev".$post_id.$i.'1']);
						delete_post_meta($post_id, "primarytextcolor-splitRev".$post_id.$i.'1', $_POST["primarytextcolor-splitRev".$post_id.$i.'1']);
						delete_post_meta($post_id, "primarybordercolor-splitRev".$post_id.$i.'1', $_POST["primarybordercolor-splitRev".$post_id.$i.'1']);
						delete_post_meta($post_id, "button-transition-splitRev".$post_id.$i.'1', $_POST["button-transition-splitRev".$post_id.$i.'1']);
						delete_post_meta($post_id, "button-background-splitRev".$post_id.$i.'1', $_POST["button-background-splitRev".$post_id.$i.'1']);
						delete_post_meta($post_id, "hovercolor-splitRev".$post_id.$i.'1', $_POST["hovercolor-splitRev".$post_id.$i.'1']);
						delete_post_meta($post_id, "hovertextcolor-splitRev".$post_id.$i.'1', $_POST["hovertextcolor-splitRev".$post_id.$i.'1']);
						delete_post_meta($post_id, "hoverbordercolor-splitRev".$post_id.$i.'1', $_POST["hoverbordercolor-splitRev".$post_id.$i.'1']);
						delete_post_meta($post_id, "meta-box-splitRev-design-".$post_id.$i, $_POST["meta-box-splitRev-design-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-splitRev-title-".$post_id.$i, $_POST["meta-box-splitRev-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-splitRev-image-".$post_id.$i, $_POST["meta-box-splitRev-image-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-splitRev-bImage-".$post_id.$i, $_POST["meta-box-splitRev-bImage-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-splitRev-content-".$post_id.$i, $_POST["meta-box-splitRev-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-splitRev-Blink-".$post_id.$i, $_POST["meta-box-splitRev-Blink-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-splitRev-Blink1-".$post_id.$i, $_POST["meta-box-splitRev-Blink1-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-splitRev-Btext-".$post_id.$i, $_POST["meta-box-splitRev-Btext-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-splitRev-Btext1-".$post_id.$i, $_POST["meta-box-splitRev-Btext1-".$post_id.$i]);
						
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// only gridInfo endss
				// 
				// tal starts
				// 
				// 
				if (!empty($_POST["meta-fire-tal".$post_id.$i])){
					if ($_POST["meta-fire-tal".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-tal-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-tal-content-".$post_id.$i);
						for($ii = 0; $ii < 4; $ii++){
							update_fire_data($post_id,"meta-box-tal-number-".$post_id.$i.$ii);
							update_fire_data($post_id,"meta-box-tal-title-".$post_id.$i.$ii);
							update_fire_data($post_id,"meta-box-tal-image-".$post_id.$i.$ii);
						}
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-tal-title-".$post_id.$i, $_POST["meta-box-tal-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-tal-content-".$post_id.$i, $_POST["meta-box-tal-content-".$post_id.$i]);
						for($ii = 0; $ii < 4; $ii++){
							delete_post_meta($post_id, "meta-box-tal-number-".$post_id.$i.$ii, $_POST["meta-box-tal-number-".$post_id.$i.$ii]);
							delete_post_meta($post_id, "meta-box-tal-title-".$post_id.$i.$ii, $_POST["meta-box-tal-title-".$post_id.$i.$ii]);
							delete_post_meta($post_id, "meta-box-tal-image-".$post_id.$i.$ii, $_POST["meta-box-tal-image-".$post_id.$i.$ii]);
						}
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// tal endss
				// 
				// globe starts
				// 
				// 
				if (!empty($_POST["meta-fire-globe".$post_id.$i])){
					if ($_POST["meta-fire-globe".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-globe-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-globe-content-".$post_id.$i);
						for($ii = 0; $ii < 4; $ii++){
							update_fire_data($post_id,"meta-box-globe-content-".$post_id.$i.$ii);
							update_fire_data($post_id,"meta-box-globe-image-".$post_id.$i.$ii);
						}
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-globe-title-".$post_id.$i, $_POST["meta-box-globe-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-globe-content-".$post_id.$i, $_POST["meta-box-globe-content-".$post_id.$i]);
						for($ii = 0; $ii < 4; $ii++){
							delete_post_meta($post_id, "meta-box-globe-content-".$post_id.$i.$ii, $_POST["meta-box-globe-content-".$post_id.$i.$ii]);
							delete_post_meta($post_id, "meta-box-globe-image-".$post_id.$i.$ii, $_POST["meta-box-globe-image-".$post_id.$i.$ii]);
						}
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// globe endss
				// 
				// circleSec starts
				// 
				// 
				if (!empty($_POST["meta-fire-circleSec".$post_id.$i])){
					if ($_POST["meta-fire-circleSec".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-circleSec-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-circleSec-content-".$post_id.$i);
						for($ii = 0; $ii < 7; $ii++){
							update_fire_data($post_id,"meta-box-circleSec-title-".$post_id.$i.$ii);
						}
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-circleSec-title-".$post_id.$i, $_POST["meta-box-circleSec-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-circleSec-content-".$post_id.$i, $_POST["meta-box-circleSec-content-".$post_id.$i]);
						for($ii = 0; $ii < 4; $ii++){
							delete_post_meta($post_id, "meta-box-circleSec-title-".$post_id.$i.$ii, $_POST["meta-box-circleSec-title-".$post_id.$i.$ii]);
						}
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// only accord endss
				// 
				// splitRev starts
				// 
				// 
				if (!empty($_POST["meta-fire-bigHeader".$post_id.$i])){
					if ($_POST["meta-fire-bigHeader".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-bigHeader-content-".$post_id.$i);
						update_fire_data($post_id,"meta-box-bigHeader-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-bigHeader-image-".$post_id.$i);
						update_fire_data($post_id,"meta-box-bigHeader-Blink-".$post_id.$i);
						update_fire_data($post_id,"meta-box-bigHeader-Blink-anchor-".$post_id.$i);
						update_fire_data($post_id,"meta-box-bigHeader-Blink1-anchor-".$post_id.$i);
						update_fire_data($post_id,"meta-box-bigHeader-Blink1-".$post_id.$i);
						update_fire_data($post_id,"meta-box-bigHeader-Btext-".$post_id.$i);
                        update_fire_data($post_id,"meta-box-bigHeader-Btext1-".$post_id.$i);
                        update_button_setting($post_id,'bigHeader',$i);
                        update_button_setting($post_id,'bigHeader',$i.'1');
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-bigHeader-title-".$post_id.$i, $_POST["meta-box-bigHeader-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-bigHeader-content-".$post_id.$i, $_POST["meta-box-bigHeader-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-bigHeader-image-".$post_id.$i, $_POST["meta-box-bigHeader-image-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-bigHeader-Blink-".$post_id.$i, $_POST["meta-box-bigHeader-Blink-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-bigHeader-Blink-anchor-".$post_id.$i, $_POST["meta-box-bigHeader-Blink-anchor-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-bigHeader-Blink1-anchor-".$post_id.$i, $_POST["meta-box-bigHeader-Blink1-anchor-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-bigHeader-Blink1-".$post_id.$i, $_POST["meta-box-bigHeader-Blink1-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-bigHeader-Btext-".$post_id.$i, $_POST["meta-box-bigHeader-Btext-".$post_id.$i]);
                        delete_post_meta($post_id, "meta-box-bigHeader-Btext1-".$post_id.$i, $_POST["meta-box-bigHeader-Btext1-".$post_id.$i]);
                        delete_button_setting($post_id,'bigHeader',$i);
                        delete_button_setting($post_id,'bigHeader',$i.'1');
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// bigheader endss
				// 
				// splitThree starts
				// 
				// 
				if (!empty($_POST["meta-fire-splitThree".$post_id.$i])){
					if ($_POST["meta-fire-splitThree".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-splitThree-content-".$post_id.$i);
						update_fire_data($post_id,"meta-box-splitThree-image-".$post_id.$i);
						update_fire_data($post_id,"meta-box-splitThree-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-splitThree-image1-".$post_id.$i);
						update_fire_data($post_id,"meta-box-splitThree-tagLine-".$post_id.$i);
						update_fire_data($post_id,"meta-box-splitThree-image2-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-splitThree-content-".$post_id.$i, $_POST["meta-box-splitThree-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-splitThree-image-".$post_id.$i, $_POST["meta-box-splitThree-image-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-splitThree-title-".$post_id.$i, $_POST["meta-box-splitThree-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-splitThree-image1-".$post_id.$i, $_POST["meta-box-splitThree-image1-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-splitThree-tagLine-".$post_id.$i, $_POST["meta-box-splitThree-tagLine-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-splitThree-image2-".$post_id.$i, $_POST["meta-box-splitThree-image2-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// splitthreemagCarousel// 
				// carousel magazine starts
				// 
				// 
				if (!empty($_POST["meta-fire-magCarousel".$post_id.$i])){
					if ($_POST["meta-fire-magCarousel".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-magCarousel-content-".$post_id.$i);
						update_fire_data($post_id,"meta-box-magCarousel-link-".$post_id.$i);
						update_fire_data($post_id,"meta-box-magCarousel-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-magCarousel-blink-".$post_id.$i);
                        update_fire_data($post_id,"meta-box-magCarousel-btext-".$post_id.$i);
                        update_button_setting($post_id,'magCarousel',$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-magCarousel-content-".$post_id.$i, $_POST["meta-box-magCarousel-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-magCarousel-link-".$post_id.$i, $_POST["meta-box-magCarousel-link-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-magCarousel-title-".$post_id.$i, $_POST["meta-box-magCarousel-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-magCarousel-blink-".$post_id.$i, $_POST["meta-box-magCarousel-blink-".$post_id.$i]);
                        delete_post_meta($post_id, "meta-box-magCarousel-btext-".$post_id.$i, $_POST["meta-box-magCarousel-btext-".$post_id.$i]);
                        delete_button_setting($post_id,'magCarousel',$i);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// mag endss
				// 
				// fiveSplit starts
				// 
				// 
				if (!empty($_POST["meta-fire-fiveSplit".$post_id.$i])){
					if ($_POST["meta-fire-fiveSplit".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-fiveSplit-title-".$post_id.$i);
						for($ii = 0; $ii < 7; $ii++){
							update_fire_data($post_id,"meta-box-fiveSplit-title-".$post_id.$i.$ii);
							update_fire_data($post_id,"meta-box-fiveSplit-content-".$post_id.$i.$ii);
							update_fire_data($post_id,"meta-box-fiveSplit-image-".$post_id.$i.$ii);
						}
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-fiveSplit-title-".$post_id.$i, $_POST["meta-box-fiveSplit-title-".$post_id.$i]);
						for($ii = 0; $ii < 4; $ii++){
							delete_post_meta($post_id, "meta-box-fiveSplit-title-".$post_id.$i.$ii, $_POST["meta-box-fiveSplit-title-".$post_id.$i.$ii]);
							delete_post_meta($post_id, "meta-box-fiveSplit-content-".$post_id.$i.$ii, $_POST["meta-box-fiveSplit-content-".$post_id.$i.$ii]);
							delete_post_meta($post_id, "meta-box-fiveSplit-image-".$post_id.$i.$ii, $_POST["meta-box-fiveSplit-image-".$post_id.$i.$ii]);

						}
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// 
				// carousel magazine reverse starts
				// 
				// 
				if (!empty($_POST["meta-fire-magCarouselRev".$post_id.$i])){
					if ($_POST["meta-fire-magCarouselRev".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-magCarouselRev-content-".$post_id.$i);
						update_fire_data($post_id,"meta-box-magCarouselRev-link-".$post_id.$i);
						update_fire_data($post_id,"meta-box-magCarouselRev-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-magCarouselRev-blink-".$post_id.$i);
                        update_fire_data($post_id,"meta-box-magCarouselRev-btext-".$post_id.$i);                        
                        update_button_setting($post_id,'magCarouselRev',$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-magCarouselRev-content-".$post_id.$i, $_POST["meta-box-magCarouselRev-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-magCarouselRev-link-".$post_id.$i, $_POST["meta-box-magCarouselRev-link-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-magCarouselRev-title-".$post_id.$i, $_POST["meta-box-magCarouselRev-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-magCarouselRev-blink-".$post_id.$i, $_POST["meta-box-magCarouselRev-blink-".$post_id.$i]);
                        delete_post_meta($post_id, "meta-box-magCarouselRev-btext-".$post_id.$i, $_POST["meta-box-magCarouselRev-btext-".$post_id.$i]);
                        delete_button_setting($post_id,'magCarouselRev',$i);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// 
				// clouds starts
				// 
				// 
				if (!empty($_POST["meta-fire-clicker".$post_id.$i])){
					if ($_POST["meta-fire-clicker".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-clicker-image-".$post_id.$i);
						if(!empty($_POST["meta-box-clicker-count-".$post_id])){

							$c_c = $_POST["meta-box-clicker-count-".$post_id];
							update_post_meta($post_id, "meta-box-clicker-count-".$post_id, $c_c);
							for($ii = 0; $ii < $c_c ; $ii++){
								if( $_POST["fr-clicker-item-deleter".$ii."-".$post_id] == "true"){
									update_fire_data($post_id,"fr-clicker-item-marker".$ii."-".$post_id);
									if (isset($_POST["fr-clicker-item-top".$ii."-".$post_id])) {
										update_post_meta($post_id, "fr-clicker-item-top".$ii."-".$post_id, $_POST["fr-clicker-item-top".$ii."-".$post_id]);
									}
									if (isset($_POST["fr-clicker-item-left".$ii."-".$post_id])) {
										update_post_meta($post_id, "fr-clicker-item-left".$ii."-".$post_id, $_POST["fr-clicker-item-left".$ii."-".$post_id]);
									}
									if (isset($_POST["fr-clicker-item-title".$ii."-".$post_id])) {
										update_post_meta($post_id, "fr-clicker-item-title".$ii."-".$post_id, $_POST["fr-clicker-item-title".$ii."-".$post_id]);
									}
									if (isset($_POST["fr-clicker-item-subtitle".$ii."-".$post_id])) {
										update_post_meta($post_id, "fr-clicker-item-subtitle".$ii."-".$post_id, $_POST["fr-clicker-item-subtitle".$ii."-".$post_id]);
									}
									if (isset($_POST["fr-clicker-item-conten".$ii."-".$post_id])) {
										update_post_meta($post_id, "fr-clicker-item-conten".$ii."-".$post_id, $_POST["fr-clicker-item-conten".$ii."-".$post_id]);
									}
									if (isset($_POST["fr-clicker-item-image".$ii."-".$post_id])) {
										update_post_meta($post_id, "fr-clicker-item-image".$ii."-".$post_id, $_POST["fr-clicker-item-image".$ii."-".$post_id]);
									}
								}else{
									delete_post_meta($post_id, "fr-clicker-item-top".$ii."-".$post_id, $_POST["fr-clicker-item-top".$ii."-".$post_id]);
									delete_post_meta($post_id, "fr-clicker-item-left".$ii."-".$post_id, $_POST["fr-clicker-item-left".$ii."-".$post_id]);
									delete_post_meta($post_id, "fr-clicker-item-title".$ii."-".$post_id, $_POST["fr-clicker-item-title".$ii."-".$post_id]);
									delete_post_meta($post_id, "fr-clicker-item-subtitle".$ii."-".$post_id, $_POST["fr-clicker-item-subtitle".$ii."-".$post_id]);
									delete_post_meta($post_id, "fr-clicker-item-conten".$ii."-".$post_id, $_POST["fr-clicker-item-conten".$ii."-".$post_id]);
									delete_post_meta($post_id, "fr-clicker-item-image".$ii."-".$post_id, $_POST["fr-clicker-item-image".$ii."-".$post_id]);
								}
							}
						}
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						$c_c = get_post_meta($post_id, "meta-box-clicker-count-".$post_id,true );
						for($ii = 0; $ii < $c_c ; $ii++){
								delete_post_meta($post_id, "fr-clicker-item-top".$ii."-".$post_id, $_POST["fr-clicker-item-top".$ii."-".$post_id]);
								delete_post_meta($post_id, "fr-clicker-item-left".$ii."-".$post_id, $_POST["fr-clicker-item-left".$ii."-".$post_id]);
								delete_post_meta($post_id, "fr-clicker-item-title".$ii."-".$post_id, $_POST["fr-clicker-item-title".$ii."-".$post_id]);
								delete_post_meta($post_id, "fr-clicker-item-subtitle".$ii."-".$post_id, $_POST["fr-clicker-item-subtitle".$ii."-".$post_id]);
								delete_post_meta($post_id, "fr-clicker-item-conten".$ii."-".$post_id, $_POST["fr-clicker-item-conten".$ii."-".$post_id]);
								delete_post_meta($post_id, "fr-clicker-item-image".$ii."-".$post_id, $_POST["fr-clicker-item-image".$ii."-".$post_id]);
						}	
						delete_post_meta($post_id, "fr-clicker-item-marker".$i.'-'.$post_id, $_POST["meta-box-clicker-count-".$i.'-'.$post_id]);	
						delete_post_meta($post_id, "meta-box-clicker-count-".$post_id, $_POST["meta-box-clicker-count-".$post_id]);	
						delete_post_meta($post_id, "meta-box-clicker-image-".$post_id.$i, $_POST["meta-box-clicker-image-".$post_id.$i]);									
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// 
				// twoSec starts
				// 
				// 
				if (!empty($_POST["meta-fire-twoSec".$post_id.$i])){
					if ($_POST["meta-fire-twoSec".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-twoSec-content-".$post_id.$i);
						update_fire_data($post_id,"meta-box-twoSec-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-twoSec-image-".$post_id.$i);
						update_fire_data($post_id,"meta-box-twoSec-video-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-twoSec-content-".$post_id.$i, $_POST["meta-box-twoSec-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-twoSec-title-".$post_id.$i, $_POST["meta-box-twoSec-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-twoSec-image-".$post_id.$i, $_POST["meta-box-twoSec-image-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-twoSec-video-".$post_id.$i, $_POST["meta-box-twoSec-video-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// 
				// inspire starts
				// 
				// 
				if (!empty($_POST["meta-fire-inspire".$post_id.$i])){
					if ($_POST["meta-fire-inspire".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-inspire-content-".$post_id.$i);
						update_fire_data($post_id,"meta-box-inspire-subcontent-".$post_id.$i);
						update_fire_data($post_id,"meta-box-inspire-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-inspire-text-".$post_id.$i);
						update_fire_data($post_id,"meta-box-inspire-link-".$post_id.$i);
						for($ii = 0; $ii < 8; $ii++){
							update_fire_data($post_id,"meta-box-inspire-title-".$post_id.$i.$ii);
							update_fire_data($post_id,"meta-box-inspire-image-".$post_id.$i.$ii);
                        }
                        update_button_setting($post_id,'inspire',$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-inspire-subcontent-".$post_id.$i, $_POST["meta-box-inspire-subcontent-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-inspire-content-".$post_id.$i, $_POST["meta-box-inspire-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-inspire-title-".$post_id.$i, $_POST["meta-box-inspire-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-inspire-text-".$post_id.$i, $_POST["meta-box-inspire-text-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-inspire-link-".$post_id.$i, $_POST["meta-box-inspire-link-".$post_id.$i]);
						for($ii = 0; $ii < 8; $ii++){
							delete_post_meta($post_id, "meta-box-inspire-title-".$post_id.$i.$ii, $_POST["meta-box-inspire-title-".$post_id.$i.$ii]);
							delete_post_meta($post_id, "meta-box-twoSec-image-".$post_id.$i.$ii, $_POST["meta-box-twoSec-image-".$post_id.$i.$ii]);
                        }
                        delete_button_setting($post_id,'inspire',$i);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// 
				// inspire starts
				// 
				// 
				if (!empty($_POST["meta-fire-infoPriser".$post_id.$i])){
					if ($_POST["meta-fire-infoPriser".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-infoPriser-content-".$post_id.$i);
						update_fire_data($post_id,"meta-box-infoPriser-title-".$post_id.$i);
						update_fire_data($post_id,"meta-box-infoPriser-image-".$post_id.$i);
						update_fire_data($post_id,"meta-box-infoPriser-design-".$post_id.$i);
						update_fire_data($post_id,"meta-box-infoPriser-ptop-".$post_id.$i);
						update_fire_data($post_id,"meta-box-infoPriser-pbot-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-infoPriser-content-".$post_id.$i, $_POST["meta-box-infoPriser-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-infoPriser-title-".$post_id.$i, $_POST["meta-box-infoPriser-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-infoPriser-image-".$post_id.$i, $_POST["meta-box-infoPriser-image-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-infoPriser-design-".$post_id.$i, $_POST["meta-box-infoPriser-design-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-infoPriser-ptop-".$post_id.$i, $_POST["meta-box-infoPriser-ptop-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-infoPriser-pbot-".$post_id.$i, $_POST["meta-box-infoPriser-pbot-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// 
				// tabbed starts
				// 
				// 
				if (!empty($_POST["meta-fire-tabbed".$post_id.$i])){
					if ($_POST["meta-fire-tabbed".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-tabbed-content-".$post_id.$i);
						update_fire_data($post_id,"meta-box-tabbed-title-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-tabbed-content-".$post_id.$i, $_POST["meta-box-tabbed-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-tabbed-title-".$post_id.$i, $_POST["meta-box-tabbed-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				// Visio Sign
				// 
				// 
				// sameinfo starts
				// 
				// 
				if (!empty($_POST["meta-fire-sameInfo".$post_id.$i])){
					if ($_POST["meta-fire-sameInfo".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-sameInfo-content-".$post_id.$i);
						update_fire_data($post_id,"meta-box-sameInfo-content1-".$post_id.$i);
						update_fire_data($post_id,"meta-box-sameInfo-title-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-sameInfo-content-".$post_id.$i, $_POST["meta-box-sameInfo-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-sameInfo-content1-".$post_id.$i, $_POST["meta-box-sameInfo-content1-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-sameInfo-title-".$post_id.$i, $_POST["meta-box-sameInfo-title-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
				if (!empty($_POST["meta-fire-productSpec".$post_id.$i])){
					if ($_POST["meta-fire-productSpec".$post_id.$i] == "true") {
						update_fire_data($post_id,"meta-box-productSpec-varnumber-".$post_id.$i);
						update_fire_data($post_id,"meta-box-productSpec-content-".$post_id.$i);
						update_fire_data($post_id,"meta-box-productSpec-image-".$post_id.$i);
						update_fire_data($post_id,"meta-box-productSpec-col-".$post_id.$i);
						update_fire_data($post_id,"meta-box-productSpec-stitle-".$post_id.$i);
						update_fire_data($post_id,"meta-box-productSpec-scontent1-".$post_id.$i);
						update_fire_data($post_id,"meta-box-productSpec-scontent-".$post_id.$i);
						update_fire_data($post_id,"meta-box-productSpec-image2-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-productSpec-content-".$post_id.$i, $_POST["meta-box-productSpec-content-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-productSpec-varnumber-".$post_id.$i, $_POST["meta-box-productSpec-varnumber-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-productSpec-scontent-".$post_id.$i, $_POST["meta-box-productSpec-scontent-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-productSpec-scontent1-".$post_id.$i, $_POST["meta-box-productSpec-scontent1-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-productSpec-stitle-".$post_id.$i, $_POST["meta-box-productSpec-stitle-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-productSpec-col-".$post_id.$i, $_POST["meta-box-productSpec-col-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-productSpec-image-".$post_id.$i, $_POST["meta-box-productSpec-image-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-productSpec-image2-".$post_id.$i, $_POST["meta-box-productSpec-image2-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}

				// Visio Sign
				// 
				// product spec endss
				// 
				// gridRow starts
				// 
				// 
				if (!empty($_POST["meta-fire-gridShow".$post_id.$i])){
					if ($_POST["meta-fire-gridShow".$post_id.$i] == "true") {

						update_fire_data($post_id,"meta-box-gridShow-design-".$post_id.$i);
						update_fire_data($post_id,"meta-box-gridShow-counts-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-".$post_id.$i);
						update_fire_data($post_id,"meta-fire-order".$post_id.$i);
					}else{
						delete_post_meta($post_id, "meta-box-gridShow-design-".$post_id.$i, $_POST["meta-box-gridShow-design-".$post_id.$i]);
						delete_post_meta($post_id, "meta-box-gridShow-counts-".$post_id.$i, $_POST["meta-box-gridShow-counts-".$post_id.$i]);
						delete_post_meta($post_id, "meta-fire-".$post_id.$i, $_POST["meta-fire-".$post_id.$i]);	
						delete_post_meta($post_id, "meta-fire-order".$post_id.$i, $_POST["meta-fire-order".$post_id.$i]);
					}
				}
			}
	// 
	// 
	// Fire Main endstagLineio Sign
	// 
	// 
}


function save_custom_meta_box($post_id, $post, $update)
{
	if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
		return $post_id;

	if (!current_user_can("edit_post", $post_id))
		return $post_id;

	if (defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
		return $post_id;

	//Verifying post slug
	$slug = "page";
	
	if ($slug != $post->post_type)
		return $post_id;
	
	update_fire_data_modules($post_id);

	//circleSec
	if (isset($_POST["meta-box-circle-title-".$post_id])) {
		update_post_meta($post_id, "meta-box-circle-title-".$post_id, $_POST["meta-box-circle-title-".$post_id] );
	}
	if (isset($_POST["meta-box-circle-subtitle-".$post_id])) {
		update_post_meta($post_id, "meta-box-circle-subtitle-".$post_id, $_POST["meta-box-circle-subtitle-".$post_id] );
	}
	if (isset($_POST["meta-box-circle-content-".$post_id])) {
		update_post_meta($post_id, "meta-box-circle-content-".$post_id, $_POST["meta-box-circle-content-".$post_id] );
	}
	for($i = 0 ; $i < 7 ; $i++){
		if (isset($_POST["meta-box-circle-item".$i."-".$post_id])) {
			update_post_meta($post_id, "meta-box-circle-item".$i."-".$post_id, $_POST["meta-box-circle-item".$i."-".$post_id] );
		} 
	}

}

add_action("save_post", "save_custom_meta_box", 10, 3);


//case large
function save_custom_meta($post_id, $post, $update)
{
	if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
		return $post_id;

	if (!current_user_can("edit_post", $post_id))
		return $post_id;

	if (defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
		return $post_id;

	update_fire_data_modules($post_id);
}
add_action("save_post_fire_cases", "save_custom_meta", 10, 3);



function save_custom_fire_news($post_id, $post, $update)
{
	if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
		return $post_id;

	if (!current_user_can("edit_post", $post_id))
		return $post_id;

	if (defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
		return $post_id;

		update_fire_data_modules($post_id);

}
add_action("save_post_fire_news","save_custom_fire_news",10,3);

function custom_fire_product($post_id, $post, $update)
{
	if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
		return $post_id;

	if (!current_user_can("edit_post", $post_id))
		return $post_id;

	if (defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
		return $post_id;

		update_fire_data_modules($post_id);
}
add_action("save_post_fire_product","custom_fire_product",10,3);

function custom_fire_carousel($post_id, $post, $update)
{
	if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
		return $post_id;

	if (!current_user_can("edit_post", $post_id))
		return $post_id;

	if (defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
		return $post_id;

		if (isset($_POST["meta-carousel-fire-selector-".$post_id])) {
			update_post_meta($post_id, "meta-carousel-fire-selector-".$post_id, $_POST["meta-carousel-fire-selector-".$post_id]);
		}
		if (isset($_POST["meta-box-carousel-bgcolor-".$post_id."1"])) {
			update_post_meta($post_id, "meta-box-carousel-bgcolor-".$post_id."1", $_POST["meta-box-carousel-bgcolor-".$post_id."1"]);
		}
		if (isset($_POST["meta-box-carousel-fire-".$post_id])) {
			update_post_meta($post_id, "meta-box-carousel-fire-".$post_id, $_POST["meta-box-carousel-fire-".$post_id]);
		}
		if (isset($_POST["meta-box-carousel-fire1-".$post_id])) {
			update_post_meta($post_id, "meta-box-carousel-fire1-".$post_id, $_POST["meta-box-carousel-fire1-".$post_id]);
		}
		if (isset($_POST["meta-box-carousel-fire2-".$post_id])) {
			update_post_meta($post_id, "meta-box-carousel-fire2-".$post_id, $_POST["meta-box-carousel-fire2-".$post_id]);
		}
		if (isset($_POST["meta-box-carousel-title-".$post_id])) {
			update_post_meta($post_id, "meta-box-carousel-title-".$post_id, $_POST["meta-box-carousel-title-".$post_id]);
		}
		if (isset($_POST["meta-box-carousel-content-".$post_id])) {
			update_post_meta($post_id, "meta-box-carousel-content-".$post_id, $_POST["meta-box-carousel-content-".$post_id]);
		}
		if (isset($_POST["meta-box-car-title-".$post_id])) {
			update_post_meta($post_id, "meta-box-car-title-".$post_id, $_POST["meta-box-car-title-".$post_id]);
		}
		if (isset($_POST["meta-box-car-content-".$post_id])) {
			update_post_meta($post_id, "meta-box-car-content-".$post_id, $_POST["meta-box-car-content-".$post_id]);
		}
		if (isset($_POST["meta-box-car-image-".$post_id])) {
			update_post_meta($post_id, "meta-box-car-image-".$post_id, $_POST["meta-box-car-image-".$post_id]);
		}

		
}
add_action("save_post_fire_carousel","custom_fire_carousel",10,3);
//fire_forms

function save_custom_forms($post_id, $post, $update){
	if (!isset($_POST["meta-box-form-nonce"]) || !wp_verify_nonce($_POST["meta-box-form-nonce"], basename(__FILE__)))
	return $post_id;

	if (!current_user_can("edit_post", $post_id))
		return $post_id;

	if (defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
		return $post_id;



		if (isset($_POST["meta-box-fr-forms-title-".$post_id])) {
			update_post_meta($post_id, "meta-box-fr-forms-title-".$post_id, $_POST["meta-box-fr-forms-title-".$post_id]);
		}
		if (isset($_POST["meta-box-fr-forms-embed-".$post_id])) {
			update_post_meta($post_id, "meta-box-fr-forms-embed-".$post_id, $_POST["meta-box-fr-forms-embed-".$post_id]);
		}
				if (isset($_POST["meta-box-fr-forms-action-".$post_id])) {
			update_post_meta($post_id, "meta-box-fr-forms-action-".$post_id, $_POST["meta-box-fr-forms-action-".$post_id]);
		}
						if (isset($_POST["meta-box-fr-forms-captcha-".$post_id])) {
			update_post_meta($post_id, "meta-box-fr-forms-captcha-".$post_id, $_POST["meta-box-fr-forms-captcha-".$post_id]);
		}
				if (isset($_POST["meta-box-fr-forms-siteKey-".$post_id])) {
			update_post_meta($post_id, "meta-box-fr-forms-siteKey-".$post_id, $_POST["meta-box-fr-forms-siteKey-".$post_id]);
		}
		if (isset($_POST["meta-box-fr-forms-btext-".$post_id])) {
			update_post_meta($post_id, "meta-box-fr-forms-btext-".$post_id, $_POST["meta-box-fr-forms-btext-".$post_id]);
		}
		if (isset($_POST["meta-box-fr-forms-design-".$post_id])) {
			update_post_meta($post_id, "meta-box-fr-forms-design-".$post_id, $_POST["meta-box-fr-forms-design-".$post_id]);
		}
		if (isset($_POST["meta-box-fr-forms-atitle-".$post_id])) {
			update_post_meta($post_id, "meta-box-fr-forms-atitle-".$post_id, $_POST["meta-box-fr-forms-atitle-".$post_id]);
		}
		if (isset($_POST["meta-box-fr-forms-stitle-".$post_id])) {
			update_post_meta($post_id, "meta-box-fr-forms-stitle-".$post_id, $_POST["meta-box-fr-forms-stitle-".$post_id]);
		}
		if (isset($_POST["meta-box-fr-forms-oid-".$post_id])) {
			update_post_meta($post_id, "meta-box-fr-forms-oid-".$post_id, $_POST["meta-box-fr-forms-oid-".$post_id]);
		}
		if (isset($_POST["meta-box-fr-forms-return-".$post_id])) {
			update_post_meta($post_id, "meta-box-fr-forms-return-".$post_id, $_POST["meta-box-fr-forms-return-".$post_id]);
		}
		if (isset($_POST["meta-box-fr-form-list-count-".$post_id])) {
			update_post_meta($post_id, "meta-box-fr-form-list-count-".$post_id, $_POST["meta-box-fr-form-list-count-".$post_id]);
			for($i = 0; $i < $_POST["meta-box-fr-form-list-count-".$post_id] ; $i++):
				if (isset($_POST["meta-box-fr-forms-type".$i."-".$post_id])) {
					update_post_meta($post_id, "meta-box-fr-forms-type".$i."-".$post_id, $_POST["meta-box-fr-forms-type".$i."-".$post_id]);
				}
				if (isset($_POST["meta-box-fr-forms-placeholder".$i."-".$post_id])) {
					update_post_meta($post_id, "meta-box-fr-forms-placeholder".$i."-".$post_id, $_POST["meta-box-fr-forms-placeholder".$i."-".$post_id]);
				}
				if (isset($_POST["meta-box-fr-forms-name".$i."-".$post_id])) {
					update_post_meta($post_id, "meta-box-fr-forms-name".$i."-".$post_id, $_POST["meta-box-fr-forms-name".$i."-".$post_id]);
				}
				if (isset($_POST["meta-box-fr-forms-id".$i."-".$post_id])) {
					update_post_meta($post_id, "meta-box-fr-forms-id".$i."-".$post_id, $_POST["meta-box-fr-forms-id".$i."-".$post_id]);
				}
				if (isset($_POST["meta-box-fr-forms-max".$i."-".$post_id])) {
					update_post_meta($post_id, "meta-box-fr-forms-max".$i."-".$post_id, $_POST["meta-box-fr-forms-max".$i."-".$post_id]);
				}
				if (isset($_POST["meta-box-fr-forms-options".$i."-".$post_id])) {
					update_post_meta($post_id, "meta-box-fr-forms-options".$i."-".$post_id, $_POST["meta-box-fr-forms-options".$i."-".$post_id]);
				}
								if (isset($_POST["meta-box-fr-forms-tabbed".$i."-".$post_id])) {
					update_post_meta($post_id, "meta-box-fr-forms-tabbed".$i."-".$post_id, $_POST["meta-box-fr-forms-tabbed".$i."-".$post_id]);
				}
				if (isset($_POST["meta-box-fr-forms-required".$i."-".$post_id])) {
					update_post_meta($post_id, "meta-box-fr-forms-required".$i."-".$post_id, $_POST["meta-box-fr-forms-required".$i."-".$post_id]);
				}
			endfor;
		}
		if (isset($_POST["meta-box-fr-forms-etitle-".$post_id])) {
			update_post_meta($post_id, "meta-box-fr-forms-etitle-".$post_id, $_POST["meta-box-fr-forms-etitle-".$post_id]);
		}
		if (isset($_POST["meta-box-fr-forms-email-".$post_id])) {
			update_post_meta($post_id, "meta-box-fr-forms-email-".$post_id, $_POST["meta-box-fr-forms-email-".$post_id]);
		}
		if(isset($_POST["meta-box-fire-form-sc-".$post_id])){
			update_post_meta($post_id, "meta-box-fire-form-sc-".$post_id, $_POST["meta-box-fire-form-sc-".$post_id]);
		}
		
		
		
}
add_action('save_post_fire_forms','save_custom_forms',10,3);
function save_custom_show($post_id, $post, $update){
	if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
	return $post_id;

	if (!current_user_can("edit_post", $post_id))
		return $post_id;

	if (defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
		return $post_id;
		
	
		if(isset($_POST["meta-box-shows-content-".$post_id])){
			update_post_meta($post_id, "meta-box-shows-content-".$post_id, $_POST["meta-box-shows-content-".$post_id]);
		}
		if(isset($_POST["meta-box-shows-blink-".$post_id])){
			update_post_meta($post_id, "meta-box-shows-blink-".$post_id, $_POST["meta-box-shows-blink-".$post_id]);
		}
		if(isset($_POST["meta-box-shows-btext-".$post_id])){
			update_post_meta($post_id, "meta-box-shows-btext-".$post_id, $_POST["meta-box-shows-btext-".$post_id]);
		}
}
add_action('save_post_fire_show','save_custom_show',10,3);

function save_custom_test($post_id, $post, $update){
	if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
	return $post_id;

	if (!current_user_can("edit_post", $post_id))
		return $post_id;

	if (defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
		return $post_id;
		
	
		if(isset($_POST["meta-box-testimonial-content-".$post_id])){
			update_post_meta($post_id, "meta-box-testimonial-content-".$post_id, $_POST["meta-box-testimonial-content-".$post_id]);
		}
		if(isset($_POST["meta-box-testimonial-name-".$post_id])){
			update_post_meta($post_id, "meta-box-testimonial-name-".$post_id, $_POST["meta-box-testimonial-name-".$post_id]);
		}
		if(isset($_POST["meta-box-testimonial-desg-".$post_id])){
			update_post_meta($post_id, "meta-box-testimonial-desg-".$post_id, $_POST["meta-box-testimonial-desg-".$post_id]);
		}
}
add_action('save_post_fire_testimonial','save_custom_test',10,3);