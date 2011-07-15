<?php
	$image_path = WP_PLUGIN_URL . '/' . str_replace(basename(__FILE__), "", plugin_basename(__FILE__)) . 'images/';
	$wpmailup = unserialize(get_option('wpmailup'));
?>
<div class="wrap">
    <h2><?php _e('WP-MailUp Settings'); ?></h2>
    <!--<div class="updated below-h2" id="message">
    	<?php _e('Message sows here.'); ?>
    </div>-->
    <div class="wrap-content">
        <form name="mailUpSettingForm" id="mailUpSettingForm" action="" method="post" onsubmit="return false;">
            <div id="firstpane" class="menu_list">
                <h3>
					<span style="vertical-align:middle;display:inline-block;float:left;">Setup<br />
                    <span class="about-mailup">
        	<?php
				echo '<a href="#" title="'._('About MailUp.').'" onclick=\'window.open("'.$mailup_path.'help/mailup.html'.'", "_blank", "height=700,width=700,location=0,left=10,top=10,resizable=0,scrollbars=yes,toolbar=0", true);\'>'._('About MailUp.').'</a>';
			?>		
            		</span>
                    
                    </span>
					<img border="0" style="vertical-align:middle;display:inline-block;float:right;" src="<?php echo $image_path; ?>Logo_transparent.png" />
					<br class="clear"/>
				</h3>
                
                
                
            
                
                <p class="menu_head">
					<?php _e('General data'); ?>
                    <img class="help_icon" src="<?php echo $image_path; ?>HelpIcon.gif" />
                    <img class="toggle_icon" src="<?php echo $image_path; ?>bullet_toggle_plus.png" />
                    <br class="clear"/>
                </p>
                <div class="menu_body">
                    <table class="setting-table setting-general">
                    	<tbody>
                            <tr>
                                <td class="setting-label"><label for="console-host"><?php _e('MailUp console host'); ?> : </label></td>
                                <td class="setting-target"><input name="console-host" id="console-host" class="setting-text general-data" type="text" maxlength="<?php echo $text_field_maxlength; ?>" /></td>
                            </tr>
                            <tr>
                                <td class="setting-label"><label for="subscribe-path"><?php _e('Subscribe path'); ?> : </label></td>
                                <td class="setting-target"><input name="subscribe-path" id="subscribe-path" class="setting-text  general-data" type="text" maxlength="<?php echo $text_field_maxlength; ?>" /></td>
                            </tr>
                            <tr>
                                <td class="setting-label"><label for="plugin-title"><?php _e('Plugin title'); ?> : </label></td>
                                <td class="setting-target"><input name="plugin-title" id="plugin-title" class="setting-text  general-data" type="text" maxlength="<?php echo $text_field_maxlength; ?>" /></td>
                            </tr>
                            <tr>
                                <td class="setting-label"><label for="plugin-description"><?php _e('Description'); ?> : </label></td>
                                <td class="setting-target"><input name="plugin-description" id="plugin-description" class="setting-text  general-data" type="text" maxlength="<?php echo $text_field_maxlength; ?>" /></td>
                            </tr>
                            <tr>
                                <td class="setting-label"><label for="css-combination"><?php _e('Select preloaded CSS for widget'); ?> : </label></td>
                                <td class="setting-target">
                                <select name="css-combination" id="css-combination" class="select-box">
                                    <option value="style1">Style - 1</option>
                                    <option value="style2">Style - 2</option>
                                    <option value="style3">Style - 3</option>
                                    <option value="style4">Style - 4</option>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="setting-label"><label><?php _e('Submit button'); ?> : </label></td>
                                <td class="setting-target"><input name="submit-button" id="submit-button" class="setting-text  general-data" type="text" maxlength="<?php echo $text_field_maxlength; ?>" /></td>
                            </tr>
                            <tr>
                                <td colspan="2"><label for="request-confirm"><?php _e('Request confirmation by email'); ?> : </label><input name="request-confirm" id="request-confirm" value="yes" class="setting-checkbox" type="checkbox" /></td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="clear:both;"></div>
                </div>
                <p class="menu_head">
					<?php _e('User lists'); ?>
                    <img class="help_icon" src="<?php echo $image_path; ?>HelpIcon.gif" />
                    <img class="toggle_icon" src="<?php echo $image_path; ?>bullet_toggle_plus.png" />
                    <br class="clear"/>
                </p>
                <div class="menu_body">
                    <table class="setting-table setting-userlists">
                        <tbody>
                            <tr>
                                <th colspan="2"><?php _e('Subscribers will be saved in'); ?></th>
                            </tr>
                            <tr>
                                <td class="setting-label"><label for="list-id"><?php _e('List ID'); ?> : </label></td>
                                <td class="setting-target"><input name="list-id" id="list-id" class="setting-text" type="text" maxlength="<?php echo $text_field_maxlength; ?>" size="<?php echo $text_field_size; ?>" /></td>
                            </tr>
                            <tr>
                                <td class="setting-label"><label for="list-displayed-name"><?php _e('List displayed Name'); ?> : </label></td>
                                <td class="setting-target"><input name="list-displayed-name" id="list-displayed-name" class="setting-text" type="text" maxlength="<?php echo $text_field_maxlength; ?>" size="<?php echo $text_field_size; ?>" /></td>
                            </tr>
                            <tr>
                                <td class="setting-label"><label><?php _e('Group ID'); ?> : </label></td>
                                <td class="setting-target"><input name="group-id" id="group-id" class="setting-text" type="text" maxlength="<?php echo $text_field_maxlength; ?>" size="<?php echo $text_field_size; ?>" /></td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="clear:both;"></div>
                </div>
                <p class="menu_head">
					<?php _e('User fields'); ?>
                    <img class="help_icon" src="<?php echo $image_path; ?>HelpIcon.gif" />
                    <img class="toggle_icon" src="<?php echo $image_path; ?>bullet_toggle_plus.png" />
                    <br class="clear"/>
                </p>
                <div class="menu_body">
                    <table class="setting-table setting-userfields">
                        <tbody>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Show</th>
                                <th>Req.</th>
                                <th>Field code</th>
                                <th>Displayed Name</th>
                            </tr>
                            <tr>
                                <td class="setting-target"><label>E-mail : </label></td>
                                <td class="setting-target"><input name="email-show" id="email-show" class="setting-checkbox" type="checkbox" value="yes" /></td>
                                <td class="setting-target"><input name="email-required" id="email-required" class="setting-checkbox" type="checkbox" value="yes" /></td>
                                <td class="setting-target"><input readonly="readonly" name="email-fieldcode" id="email-fieldcode" class="setting-text" type="text" maxlength="<?php echo $text_field_maxlength; ?>" size="<?php echo $text_field_size; ?>" value="Email" /></td>
                                <td class="setting-target"><input name="email-displayed-name" id="email-displayed-name" class="setting-text" type="text" maxlength="<?php echo $text_field_maxlength; ?>" size="<?php echo $text_field_size; ?>" /></td>
                            </tr>
                            <tr>
                                <td class="setting-target"><label>Ext. 1 : </label></td>
                                <td class="setting-target"><input name="extfield1-show" id="extfield1-show" class="setting-checkbox" type="checkbox" value="yes" /></td>
                                <td class="setting-target"><input name="extfield1-required" id="extfield1-required" class="setting-checkbox" type="checkbox" value="yes" /></td>
                                <td class="setting-target"><input name="extfield1-fieldcode" id="extfield1-fieldcode" class="setting-text" type="text" maxlength="<?php echo $text_field_maxlength; ?>" size="<?php echo $text_field_size; ?>" /></td>
                                <td class="setting-target"><input name="extfield1-displayed-name" id="extfield1-displayed-name" class="setting-text" type="text" maxlength="<?php echo $text_field_maxlength; ?>" size="<?php echo $text_field_size; ?>" /></td>
                            </tr>
                            <tr>
                                <td class="setting-target"><label>Ext. 2 : </label></td>
                                <td class="setting-target"><input name="extfield2-show" id="extfield2-show" class="setting-checkbox" type="checkbox" value="yes" /></td>
                                <td class="setting-target"><input name="extfield2-required" id="extfield2-required" class="setting-checkbox" type="checkbox" value="yes" /></td>
                                <td class="setting-target"><input name="extfield2-fieldcode" id="extfield2-fieldcode" class="setting-text" type="text" maxlength="<?php echo $text_field_maxlength; ?>" size="<?php echo $text_field_size; ?>" /></td>
                                <td class="setting-target"><input name="extfield2-displayed-name" id="extfield2-displayed-name" class="setting-text" type="text" maxlength="<?php echo $text_field_maxlength; ?>" size="<?php echo $text_field_size; ?>" /></td>
                            </tr>
                            <tr>
                                <td class="setting-target"><label>Mobile : </label></td>
                                <td class="setting-target"><input name="mobile-show" id="mobile-show" class="setting-checkbox" type="checkbox" value="yes" /></td>
                                <td class="setting-target"><input name="mobile-required" id="mobile-required" class="setting-checkbox" type="checkbox" value="yes" /></td>
                                <td class="setting-target"><input readonly="readonly" name="mobile-fieldcode" id="mobile-fieldcode" class="setting-text" type="text" maxlength="<?php echo $text_field_maxlength; ?>" size="<?php echo $text_field_size; ?>" value="sms" /></td>
                                <td class="setting-target"><input name="mobile-displayed-name" id="mobile-displayed-name" class="setting-text" type="text" maxlength="<?php echo $text_field_maxlength; ?>" size="<?php echo $text_field_size; ?>" /></td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="clear:both;"></div>
                </div>
                <p class="menu_head">
					<?php _e('Errors'); ?>
                    <img class="help_icon" src="<?php echo $image_path; ?>HelpIcon.gif" />
                    <img class="toggle_icon" src="<?php echo $image_path; ?>bullet_toggle_plus.png" />
                    <br class="clear"/>
                </p>
                <div class="menu_body">
                    <table class="setting-table setting-userlists">
                        <tbody>
                            <tr>
                                <td class="setting-label"><label>Success : </label></td>
                                <td class="setting-target"><input name="success-message" id="success-message" class="setting-text" type="text" maxlength="<?php echo $text_field_maxlength; ?>" size="<?php echo $text_field_size; ?>" /></td>
                            </tr>
                            <tr>
                                <td class="setting-label"><label>Generic error : </label></td>
                                <td class="setting-target"><input name="generic-error" id="generic-error" class="setting-text" type="text" maxlength="<?php echo $text_field_maxlength; ?>" size="<?php echo $text_field_size; ?>" /></td>
                            </tr>
                            <tr>
                                <td class="setting-label"><label>Invalid address : </label></td>
                                <td class="setting-target"><input name="invalid-address" id="invalid-address" class="setting-text" type="text" maxlength="<?php echo $text_field_maxlength; ?>" size="<?php echo $text_field_size; ?>" /></td>
                            </tr>
                            <tr>
                                <td class="setting-label"><label>Already present : </label></td>
                                <td class="setting-target"><input name="already-present" id="already-present" class="setting-text" type="text" maxlength="<?php echo $text_field_maxlength; ?>" size="<?php echo $text_field_size; ?>" /></td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="clear:both;"></div>
                </div>
                <p class="menu_head">
					<?php _e('Terms and conditions'); ?>
                    <img class="help_icon" src="<?php echo $image_path; ?>HelpIcon.gif" />
                    <img class="toggle_icon" src="<?php echo $image_path; ?>bullet_toggle_plus.png" />
                    <br class="clear"/>
                </p>
                <div class="menu_body">
                    <table class="setting-table setting-userlists">
                        <tbody>
                            <tr>
                                <td colspan="2" class=""><label>Include acceptance of terms and conditions</label>&nbsp;<input name="terms-confirm" id="terms-confirm" class="setting-checkbox" type="checkbox" value="yes" /></td>
                            </tr>
                            <tr>
                                <td class="setting-label"><label>Terms and condition : </label></td>
                                <td class="setting-target"><textarea name="terms-n-con" id="terms-n-con" cols="25" rows="5"></textarea></td>
                            </tr>
                            <tr>
                                <td class="setting-label"><label>Acceptance : </label></td>
                                <td class="setting-target"><input name="acceptance-msg" id="acceptance-msg" class="setting-text" type="text" maxlength="<?php echo $text_field_maxlength; ?>" size="<?php echo $text_field_size; ?>" /></td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="clear:both;"></div>
                </div>
                <div class="setting-save-container">
                	<input id="setting-reset-btn" type="button" value="Reset" />&nbsp;<input id="setting-save-btn" type="submit" value="Save" />
                </div>
                <div style="clear:both;"></div>
            </div>
        </form>
        <img id="loading-img" style="visibility:hidden;vertical-align:middle;padding:4px;background:none;" src="<?php echo get_bloginfo('wpurl').'/wp-content/plugins/wp-mailup/images/indicator.white.gif'; ?>" border="0" />
        <span id="save-message"><noscript style="color:#F00;"><?php _e('** Please enable javascript to work with this form.'); ?></noscript></span>
    </div>
    <div class="wrap-right postbox" style="display:none">
    	<h3>
		<?php _e('About MailUp.'); ?>
        </h3>
        <div class="inside">
        	<?php
				echo '<a href="#" title="'._('About MailUp.').'" onclick=\'window.open("'.$mailup_path.'help/mailup.html'.'", "_blank", "height=700,width=700,location=0,left=10,top=10,resizable=0,scrollbars=yes,toolbar=0", true);\'>'._('About MailUp.').'</a>';
			?>
        </div>
    </div>
    <div style="clear:both;"></div>
</div>
<script type="text/javascript">
	var jQ = jQuery.noConflict();
	jQ(document).ready(function(){
		/*
			collapse and expand box
		*/
		jQ(".toggle_icon").click(function(){
			jQ(this).parent('.menu_head').siblings('.menu_head').children('.toggle_icon').attr("src", "<?php echo $image_path; ?>bullet_toggle_plus.png");
			var state = jQ(this).attr("src");
			state = state.split('/');
			state = state.pop();
			if(state == 'bullet_toggle_plus.png')
			{
				jQ(this).attr("src", "<?php echo $image_path; ?>bullet_toggle_minus.png");
			}
			else
			{
				jQ(this).attr("src", "<?php echo $image_path; ?>bullet_toggle_plus.png");
			}
			jQ(this).parent('.menu_head').next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
		});
		
		/*
			show status if input changes
		*/
		jQ("input,textarea,select").change(function(){
			jQ("#save-message").css("color", "#F00").html("<?php _e('** Settings have changed. Click <b>Save</b> to save the configuration.'); ?>");
		});
		
		/*
			show help pages
		*/
		jQ('.help_icon').click(function(){
			//alert(jQ.trim(jQ(this).parent().text()));
			var section = jQ.trim(jQ(this).parent().text());
			switch(section)
			{
				case 'General data':
					window.open("<?php echo $mailup_path; ?>/help/general.html", "_blank", "height=375,width=1100,location=0,left=10,top=10,resizable=0,scrollbars=yes,toolbar=0", true);
				break;
				case 'User lists':
					window.open("<?php echo $mailup_path; ?>/help/user.html", "_blank", "height=250,width=950,location=0,left=10,top=10,resizable=0,scrollbars=yes,toolbar=0", true);
				break;
				case 'User fields':
					window.open("<?php echo $mailup_path; ?>/help/fields.html", "_blank", "height=350,width=1100,location=0,left=10,top=10,resizable=0,scrollbars=yes,toolbar=0", true);
				break;
				case 'Errors':
					window.open("<?php echo $mailup_path; ?>/help/error.html", "_blank", "height=200,width=650,location=0,left=10,top=10,resizable=0,scrollbars=yes,toolbar=0", true);
				break;
				case 'Terms and conditions':
					window.open("<?php echo $mailup_path; ?>/help/terms.html", "_blank", "height=200,width=1000,location=0,left=10,top=10,resizable=0,scrollbars=yes,toolbar=0", true);
				break;
				default:
			}
		});
		
		/*
			Settings form submit
		*/
		jQ("form#mailUpSettingForm").submit(function(){
			
			viewInfoIcon('loading');
			
			/*
				validation starts
			*/
			
			if(jQ.trim(jQ('#list-id').val()) == "") // List ID can not be empty
			{
				jQ("#save-message").css("color", "#F00").html("<?php _e('** <b>List ID</b> field is mandatory'); ?>");
				jQ('#list-id').css("borderColor", "#F00");
				return false;
			}
			if(!jQ('#email-required').is(':checked') && !jQ('#mobile-required').is(':checked')) // Either email or sms field is required for the xmlSubscribe.aspx API
			{
				jQ("#save-message").css("color", "#F00").html("<?php _e('** Either <b>E-mail</b> or <b>Mobile</b> field is mandatory'); ?>");
				return false;
			}
			if(jQ('#email-required').is(':checked') && !jQ('#email-show').is(':checked')) // If email field is required, must be 'check' show also
			{
				jQ("#save-message").css("color", "#F00").html("<?php _e('** <b>E-mail</b> field need to shown on form as it is required'); ?>");
				return false;
			}
			
			if(jQ('#mobile-required').is(':checked') && !jQ('#mobile-show').is(':checked')) // If sms field is required, must be 'check' show also
			{
				jQ("#save-message").css("color", "#F00").html("<?php _e('** <b>Mobile</b> field need to shown on form as it is required'); ?>");
				return false;
			}
			
			if(jQ('#extfield1-required').is(':checked') && !jQ('#extfield1-show').is(':checked')) // If additional field 1 is required, must be 'check' show also
			{
				jQ("#save-message").css("color", "#F00").html("<?php _e('** <b>Ext. 1</b> field need to shown on form as it is required'); ?>");
				return false;
			}
			
			if(jQ('#extfield2-required').is(':checked') && !jQ('#extfield2-show').is(':checked')) // If additional field 2 is required, must be 'check' show also
			{
				jQ("#save-message").css("color", "#F00").html("<?php _e('** <b>Ext. 2</b> field need to shown on form as it is required'); ?>");
				return false;
			}
			
			
			/*
				validation ends
			*/
			
			
			/*
				Process form input and save through Ajax
			*/
			form_values = jQuery(this).serialize();
			jQ.post('<?php echo $_SERVER['PHP_SELF']; ?>?formData=save', form_values, function(returned_data){
				jQ("#save-message").css("color", "#00F").html("<?php _e('* Configuration saved successfully.'); ?>");
				fillFormData();
			});
			jQ('.setting-text').css("borderColor", "#DFDFDF");
			return false;
		});
		
		function fillFormData()
		{
			jQ.post('<?php echo $_SERVER['PHP_SELF']; ?>', {"formData":"load"}, function(data){
				//console.log(data);
				
				/*
					Fill the form data
				*/
				jQ('#console-host').val(data.consoleHost);
				jQ('#subscribe-path').val(data.subscribePath);
				jQ('#plugin-title').val(data.pluginTitle);
				jQ('#plugin-description').val(data.pluginDescription);
				/* jQ('#external-css').val(data.externalCss); */
				jQ('#css-combination').val(data.cssCombination);
				jQ('#submit-button').val(data.submitButton);
				if(data.requestConfirm == 'yes')
					jQ('#request-confirm').attr("checked", true);
				jQ('#list-id').val(data.listId);
				jQ('#list-displayed-name').val(data.listDisplayedName);
				jQ('#group-id').val(data.groupId);
				if(data.emailShow == 'yes')
					jQ('#email-show').attr("checked", true);
				if(data.emailRequired == 'yes')
					jQ('#email-required').attr("checked", true);
				//jQ('#email-fieldcode').val(data.emailFieldcode);
				jQ('#email-displayed-name').val(data.emailDisplayedName);
				if(data.extfield1Show == 'yes')
					jQ('#extfield1-show').attr("checked", true);
				if(data.extfield1Required == 'yes')
					jQ('#extfield1-required').attr("checked", true);
				jQ('#extfield1-fieldcode').val(data.extfield1Fieldcode);
				jQ('#extfield1-displayed-name').val(data.extfield1DisplayedName);
				if(data.extfield2Show == 'yes')
					jQ('#extfield2-show').attr("checked", true);
				if(data.extfield2Required == 'yes')
					jQ('#extfield2-required').attr("checked", true);
				jQ('#extfield2-fieldcode').val(data.extfield2Fieldcode);
				jQ('#extfield2-displayed-name').val(data.extfield2DisplayedName);
				if(data.mobileShow == 'yes')
					jQ('#mobile-show').attr("checked", true);
				if(data.mobileRequired == 'yes')
					jQ('#mobile-required').attr("checked", true);
				//jQ('#mobile-fieldcode').val(data.mobileFieldcode);
				jQ('#mobile-displayed-name').val(data.mobileDisplayedName);
				jQ('#success-message').val(data.successMessage);
				jQ('#generic-error').val(data.genericError);
				jQ('#invalid-address').val(data.invalidAddress);
				jQ('#already-present').val(data.alreadyPresent);
				if(data.termsConfirm == 'yes')
					jQ('#terms-confirm').attr("checked", true);
				jQ('#terms-n-con').val(data.termsNcon);
				jQ('#acceptance-msg').val(data.acceptanceMsg);
				
				viewInfoIcon('stop');
			}, "json");
		}
		
		/*
			Fill the form with saved data during page load
		*/
		fillFormData();
		
		/*
			Reset the previous opptions
		*/
		jQ('#setting-reset-btn').click(function(){
			if(confirm('<?php _e('Do you want to reset the settings?'); ?>'))
			{
				fillFormData();
				jQ("#save-message").css("color", "#00F").html("<?php _e('* Settings reset.'); ?>");
			}
		});
		
		function viewInfoIcon(status)
		{
			switch(String(status))
			{
				case 'loading':
					jQ('#loading-img').attr('src', '<?php echo get_bloginfo('wpurl').'/wp-content/plugins/wp-mailup/images/indicator.white.gif'; ?>');
					jQ('#loading-img').css('visibility', 'visible');
					break;
				case 'info':
					jQ('#loading-img').attr('src', '<?php echo get_bloginfo('wpurl').'/wp-content/plugins/wp-mailup/images/question.gif'; ?>');
					jQ('#loading-img').css('visibility', 'visible');
					break;
				case 'stop':
					jQ('#loading-img').css('visibility', 'hidden');
				default:
			}
		}
	});
</script>