<?php
	error_reporting(0);
	$wpmailup = unserialize(get_option('wpmailup'));
	/* exit('<pre>' . print_r($wpmailup, true) . '</pre>'); */
	wp_enqueue_script('jquery-ui-datepicker');
	wp_enqueue_style('jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');
	$text_field_size = 22;
	$text_field_maxlength = 80;
?>
<style type="text/css">

	fieldset#subscribeDataTable label {
		display:block;
		margin-bottom:3px;
	}
	
<?php
	switch($wpmailup['cssCombination']){
		case 'style1':
			require(dirname(__FILE__).'/style1.css');
			break;
		case 'style2':
			require(dirname(__FILE__).'/style2.css');
			break;
		case 'style3':
			require(dirname(__FILE__).'/style3.css');
			break;
		case 'style4':
			require(dirname(__FILE__).'/style4.css');
			break;
		case 'style5':
			require(dirname(__FILE__).'/style5.css');
			break;
		case 'style6':
			require(dirname(__FILE__).'/style6.css');
			break;
		case 'style7':
			require(dirname(__FILE__).'/style7.css');
			break;
		default:
			require(dirname(__FILE__).'/default.css');
			break;
	}
?>

</style>
<?php /* if($wpmailup['externalCss']): ?>
<link rel="stylesheet" href="<?php echo $wpmailup['externalCss']; ?>" />


<?php endif; */ ?>
<form action="" method="get" name="subscribeForm" id="subscribeForm" onsubmit="return false;">
	<input type="hidden" name="wpmailup-subscribe" id="wpmailup-subscribe" value="subscribe" />
    <fieldset id="subscribeDataTable">
                <?php 
                    if ( $wpmailup['pluginTitle'] ) {
                        echo $before_title . $wpmailup['pluginTitle'] . $after_title;
                    }
                ?>
                <p class="muDescription"><?php echo $wpmailup['pluginDescription']; ?></p>
            
            <?php if($wpmailup['emailShow'] == 'yes'): ?>
                <p class="muField">
                	<?php if($wpmailup['textInside'] != 'yes'): ?>
	                	<label>
	                		<?php if($wpmailup['emailRequired'] == 'yes'): ?>
	                	    	<span style="color:#FF0000;">*</span>
	                	    <?php endif; ?>
	                	    <?php echo $wpmailup['emailDisplayedName']; ?>:
	                    </label>
	                	<input type="text" name="sub-email" id="sub-email" />
	                <?php else: ?>
	                	<input type="text" name="sub-email" id="sub-email" placeholder="<?php  if($wpmailup['emailRequired'] == 'yes'): echo '*'; endif; echo $wpmailup['emailDisplayedName']; ?>" />
	                <?php endif; ?>
                </p>
            <?php endif; ?>
            
            <?php if($wpmailup['mobileShow'] == 'yes'): ?>
            	<p class="muField">
            		<?php if($wpmailup['textInside'] != 'yes'): ?>
            			<label>
            				<?php if($wpmailup['mobileRequired'] == 'yes'): ?>
	                	    	<span style="color:#FF0000;">*</span>
	                	    <?php endif; ?>
	                		<?php echo $wpmailup['mobileDisplayedName']; ?>:
	                	</label>
	                	<input type="text" name="sub-phone" id="sub-phone" maxlength="<?php echo $text_field_maxlength; ?>" />
	                <?php else: ?>
	                	<input type="text" name="sub-phone" id="sub-phone" maxlength="<?php echo $text_field_maxlength; ?>" placeholder="<?php if($wpmailup['mobileRequired'] == 'yes'): echo '*'; endif; echo $wpmailup['mobileDisplayedName']; ?>" />
	                <?php endif; ?>
           		</p>
            <?php endif; ?>
            
            
			<?php if($wpmailup['dateShow'] == 'yes'): ?>
            	<p class="muField">
            		<?php if($wpmailup['textInside'] != 'yes'): ?>
            			<label>
            				<?php if($wpmailup['dateRequired'] == 'yes'): ?>
	                	    	<span style="color:#FF0000;">*</span>
	                	    <?php endif; ?>
	                		<?php echo $wpmailup['dateDisplayedName']; ?>:
	                	</label>
						<input  type="text" name="sub-date" id="sub-date" maxlength="<?php echo $text_field_maxlength;?>">
	                <?php else: ?>
	                	<input  type="text" name="sub-date" id="sub-date" maxlength="<?php echo $text_field_maxlength; ?>" placeholder="<?php if($wpmailup['dateRequired'] == 'yes'): echo '*'; endif; echo $wpmailup['dateDisplayedName']; ?>" >
	                <?php endif; ?>
           		</p>
            <?php endif; ?>

            
            
            <?php if($wpmailup['extfield1Show'] == 'yes'): ?>
            	<p class="muField">
            		<?php if($wpmailup['textInside'] != 'yes'): ?>
	            		<label>
	            			<?php if($wpmailup['extfield1Required'] == 'yes'): ?>
	                    		<span style="color:#FF0000;">*</span>
	                    	<?php endif; ?>
	                		<?php echo $wpmailup['extfield1DisplayedName']; ?>:
	                	</label>
	                	<input type="text" name="sub-ext1" id="sub-ext1" maxlength="<?php echo $text_field_maxlength; ?>" />
	                <?php else: ?>
	                	<input type="text" name="sub-ext1" id="sub-ext1" maxlength="<?php echo $text_field_maxlength; ?>" placeholder="<?php if($wpmailup['extfield1Required'] == 'yes'): echo '*'; endif; echo $wpmailup['extfield1DisplayedName']; ?>" />
	                <?php endif; ?>
            	</p>
            <?php endif; ?>
            
            <?php if($wpmailup['extfield2Show'] == 'yes'): ?>
            	<p class="muField">
            		<?php if($wpmailup['textInside'] != 'yes'): ?> 	
            			<label>
                			<?php if($wpmailup['extfield2Required'] == 'yes'): ?>
                   				<span style="color:#FF0000;">*</span>
                    		<?php endif; ?>
                    		<?php echo $wpmailup['extfield2DisplayedName']; ?>:
                    	</label>
                		<input type="text" name="sub-ext2" id="sub-ext2" maxlength="<?php echo $text_field_maxlength; ?>" />
                	<?php else: ?>
	                	<input type="text" name="sub-ext2" id="sub-ext2" maxlength="<?php echo $text_field_maxlength; ?>" placeholder="<?php if($wpmailup['extfield2Required'] == 'yes'): echo '*'; endif; echo $wpmailup['extfield2DisplayedName']; ?>" />
	                <?php endif; ?>
            	</p>
            <?php endif; ?>
            
            <?php if($wpmailup['extfield3Show'] == 'yes'): ?>
            	<p class="muField">
            		<?php if($wpmailup['textInside'] != 'yes'): ?> 	
            			<label>
                			<?php if($wpmailup['extfield3Required'] == 'yes'): ?>
                   				<span style="color:#FF0000;">*</span>
                    		<?php endif; ?>
                    		<?php echo $wpmailup['extfield3DisplayedName']; ?>:
                    	</label>
                		<input type="text" name="sub-ext3" id="sub-ext3" maxlength="<?php echo $text_field_maxlength; ?>" />
                	<?php else: ?>
	                	<input type="text" name="sub-ext3" id="sub-ext3" maxlength="<?php echo $text_field_maxlength; ?>" placeholder="<?php if($wpmailup['extfield3Required'] == 'yes'): echo '*'; endif; echo $wpmailup['extfield3DisplayedName']; ?>" />
	                <?php endif; ?>

            	</p>
            <?php endif; ?>
            
            <?php if($wpmailup['extfield4Show'] == 'yes'): ?>
            	<p class="muField">
            		<?php if($wpmailup['textInside'] != 'yes'): ?> 	
            			<label>
                			<?php if($wpmailup['extfield4Required'] == 'yes'): ?>
                   				<span style="color:#FF0000;">*</span>
                    		<?php endif; ?>
                    		<?php echo $wpmailup['extfield4DisplayedName']; ?>:
                    	</label>
                		<input type="text" name="sub-ext4" id="sub-ext4" maxlength="<?php echo $text_field_maxlength; ?>" />
                	<?php else: ?>
	                	<input type="text" name="sub-ext4" id="sub-ext4" maxlength="<?php echo $text_field_maxlength; ?>" placeholder="<?php  if($wpmailup['extfield4Required'] == 'yes'): echo '*'; endif; echo $wpmailup['extfield4DisplayedName']; ?>" />
	                <?php endif; ?>
            	</p>
            <?php endif; ?>

            <?php if($wpmailup['extfield5Show'] == 'yes'): ?>
            	<p class="muField">
            		<?php if($wpmailup['textInside'] != 'yes'): ?> 	
            			<label>
                			<?php if($wpmailup['extfield5Required'] == 'yes'): ?>
                   				<span style="color:#FF0000;">*</span>
                    		<?php endif; ?>
                    		<?php echo $wpmailup['extfield5DisplayedName']; ?>:
                    	</label>
                		<input type="text" name="sub-ext5" id="sub-ext5" maxlength="<?php echo $text_field_maxlength; ?>" />
                	<?php else: ?>
	                	<input type="text" name="sub-ext5" id="sub-ext5" maxlength="<?php echo $text_field_maxlength; ?>" placeholder="<?php if($wpmailup['extfield5Required'] == 'yes'): echo '*'; endif; echo $wpmailup['extfield5DisplayedName'];  ?>" />
	                <?php endif; ?>
            	</p>
            <?php endif; ?>
            
            <?php if($wpmailup['termsConfirm'] == 'yes'): ?>
            	<p class="muTerms">
            		<?php echo stripslashes($wpmailup['termsNcon']); ?>
            	<p>
            	<p class="muTermsCheckbox">
            		<label><input name="terms-confirm" id="terms-confirm" type="checkbox" value="yes" /> <?php echo $wpmailup['acceptanceMsg']; ?></label>
            	</p>
            <?php endif; ?>
            	<img id="loading-img" style="display:none;vertical-align:middle;background:none;padding: 5px 3px;" src="<?php echo get_bloginfo('wpurl').'/wp-content/plugins/wp-mailup/images/indicator.white.gif'; ?>" border="0" /><span id="show-response"><noscript><?php _e('Please enable javascript to work with this subscription form.'); ?></noscript></span><p class="muSubmit"><input type="submit" name="submit" value="<?php echo $wpmailup['submitButton']; ?>" /></p>
    </fieldset>
</form>
<script type="text/javascript">
	
	var jQ = jQuery.noConflict();
	
	jQ(document).ready(function(){
		
		<?php if($wpmailup['dateShow'] == 'yes'): ?>
				jQ("#sub-date").datepicker();
		<?php endif; ?>
		
		function viewInfoIcon(status)
		{
			switch(String(status))
			{
				case 'loading':
					jQ('#loading-img').attr('src', '<?php echo get_bloginfo('wpurl').'/wp-content/plugins/wp-mailup/images/indicator.white.gif'; ?>');
					jQ('#loading-img').css('display', '');
					break;
				case 'info':
					jQ('#loading-img').attr('src', '<?php echo get_bloginfo('wpurl').'/wp-content/plugins/wp-mailup/images/question.gif'; ?>');
					jQ('#loading-img').css('display', '');
					break;
				default:
			}
		}
		
		jQ("form#subscribeForm").submit(function(){
			var token = jQ('#wpmailup-subscribe').val();
			var sub_email = jQ('#sub-email').val();
			var sub_phone = jQ('#sub-phone').val();
			
			var sub_date = '';
			<?php if($wpmailup['dateShow'] == 'yes'): ?>
			sub_date = jQ('#sub-date').val();
			<?php endif; ?>

			var sub_ext1 = '';
			<?php if($wpmailup['extfield1Show'] == 'yes'): ?>
			sub_ext1 = jQ('#sub-ext1').val();
			<?php endif; ?>
			
			var sub_ext2 = '';
			<?php if($wpmailup['extfield2Show'] == 'yes'): ?>
			sub_ext2 = jQ('#sub-ext2').val();
			<?php endif; ?>
			
			var sub_ext3 = '';
			<?php if($wpmailup['extfield3Show'] == 'yes'): ?>
			sub_ext3 = jQ('#sub-ext3').val();
			<?php endif; ?>

			var sub_ext4 = '';
			<?php if($wpmailup['extfield4Show'] == 'yes'): ?>
			sub_ext4 = jQ('#sub-ext4').val();
			<?php endif; ?>

			var sub_ext5 = '';
			<?php if($wpmailup['extfield5Show'] == 'yes'): ?>
			sub_ext5 = jQ('#sub-ext5').val();
			<?php endif; ?>
			
			var csvFldValues = '';
			<?php
				if($wpmailup['dateShow']):
					$csvFldNames = $wpmailup['dateFieldcode']; ?>
					csvFldValues = sub_date;
			<?php
				endif;
				if($wpmailup['extfield1Show']):
					if(empty($csvFldNames)):
					$csvFldNames = $wpmailup['extfield1Fieldcode']; ?>
					csvFldValues = sub_ext1;
			<?php 
					else:
					$csvFldNames = $csvFldNames . ";" . $wpmailup['extfield1Fieldcode']; ?>
					csvFldValues = csvFldValues +';' +sub_ext1;
			<?php		
					endif;
				endif;
				if($wpmailup['extfield2Show']):
					if(empty($csvFldNames)):
					$csvFldNames = $wpmailup['extfield2Fieldcode']; ?>
					csvFldValues = sub_ext2;
			<?php 
					else:
					$csvFldNames = $csvFldNames . ";" . $wpmailup['extfield2Fieldcode']; ?>
					csvFldValues = csvFldValues +';' +sub_ext2;
			<?php		
					endif;
				endif;
				if($wpmailup['extfield3Show']):
					if(empty($csvFldNames)):
					$csvFldNames = $wpmailup['extfield3Fieldcode']; ?>
					csvFldValues = sub_ext3;
			<?php
					else:
					$csvFldNames = $csvFldNames . ";" . $wpmailup['extfield3Fieldcode'];  ?>
					csvFldValues = csvFldValues +';' +sub_ext3;
			<?php		
					endif;
				endif;
				if($wpmailup['extfield4Show']):
					if(empty($csvFldNames)):
					$csvFldNames = $wpmailup['extfield4Fieldcode']; ?>
					csvFldValues = sub_ext4;
			<?php		
					else:
					$csvFldNames = $csvFldNames . ";" . $wpmailup['extfield4Fieldcode']; ?>
					csvFldValues = csvFldValues +';' +sub_ext4;
			<?php		
					endif;
				endif;
				if($wpmailup['extfield5Show']):
					if(empty($csvFldNames)):
					$csvFldNames = $wpmailup['extfield5Fieldcode']; ?>
					csvFldValues = sub_ext5;
			<?php		
					else:
					$csvFldNames = $csvFldNames . ";" . $wpmailup['extfield5Fieldcode']; ?>
					csvFldValues = csvFldValues +';' +sub_ext5;
			<?php		
					endif;
				endif;
			?>
			var csvFldNames = '<?php echo $csvFldNames; ?>';
			
			//var csvFldValues = '';
			/*if(sub_ext1 && sub_ext2)
			{*/
				//csvFldValues = sub_ext1 + ';' + sub_ext2 + ';' + sub_ext3 + ';' + sub_ext4 + ';' + sub_ext5;
			/*}
			else if(sub_ext1)
			{
				csvFldValues = sub_ext1;
			}
			else
			{
				csvFldValues = sub_ext2;
			}*/

			
			var listId = '<?php echo $wpmailup['listId']; ?>';
			var groupId = '<?php echo $wpmailup['groupId']; ?>';
			var confirmReq = '<?php echo ($wpmailup['requestConfirm'] == 'yes')?'true':'false'; ?>';
			var subUrl = '<?php echo $wpmailup['consoleHost'] . $wpmailup['subscribePath']; ?>';
			
			/*
				validate form
			*/
			<?php if(($wpmailup['emailRequired'] == 'yes') && ($wpmailup['emailShow'] == 'yes')): ?>
			

  			if(!(sub_email.match(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,63})$/)))
			{
				jQ('#show-response').html('<?php echo addslashes($wpmailup['invalidAddress']); ?>');
				viewInfoIcon('info');
				return false;
			}
			<?php endif; ?>
			<?php if(($wpmailup['mobileRequired'] == 'yes') && ($wpmailup['mobileShow'] == 'yes')): ?>
			//if(jQ.trim(sub_phone) == "")
			if((jQ.trim(sub_phone) == "")||(!(sub_phone.match((/^(\+?\-? *[0-9]+)([,0-9 ]*)([0-9 ]){6,20}$/)))))
			{
				jQ('#show-response').html('<?php echo addslashes($wpmailup['invalidPhone']); ?>');
				viewInfoIcon('info');
				return false;
			}
			else
			{
				// REMOVE '+' AND SPACES, WHICH ARE NOT SUPPORTED BY XmlSubscribe.aspx
				sub_phone = sub_phone.replace("+","00");
				sub_phone = sub_phone.replace(/\s/g, '');
				sub_phone = sub_phone.replace("-","");				
			}
			<?php endif; ?>
			
			<?php if(($wpmailup['dateShow'] == 'yes') && ($wpmailup['dateRequired'] == 'yes')): ?>
			if(jQ.trim(sub_date) == '')
			{
				jQ('#show-response').html('<?php echo addslashes($wpmailup['dateDisplayedName']).' '.addslashes($wpmailup['fieldRequired']); ?>');
				viewInfoIcon('info');
				return false;
			}
			<?php endif; ?>

			
			<?php if(($wpmailup['extfield1Show'] == 'yes') && ($wpmailup['extfield1Required'] == 'yes')): ?>
			if(jQ.trim(sub_ext1) == '')
			{
				jQ('#show-response').html('<?php echo addslashes($wpmailup['extfield1DisplayedName']).' '.addslashes($wpmailup['fieldRequired']); ?>');
				viewInfoIcon('info');
				return false;
			}
			<?php endif; ?>
			
			<?php if(($wpmailup['extfield2Show'] == 'yes') && ($wpmailup['extfield2Required'] == 'yes')): ?>
			if(jQ.trim(sub_ext2) == '')
			{
				jQ('#show-response').html('<?php echo addslashes($wpmailup['extfield2DisplayedName']).' '.addslashes($wpmailup['fieldRequired']); ?>');
				viewInfoIcon('info');
				return false;
			}
			<?php endif; ?>

			<?php if(($wpmailup['extfield3Show'] == 'yes') && ($wpmailup['extfield3Required'] == 'yes')): ?>
			if(jQ.trim(sub_ext3) == '')
			{
				jQ('#show-response').html('<?php echo addslashes($wpmailup['extfield3DisplayedName']).' '.addslashes($wpmailup['fieldRequired']); ?>');
				viewInfoIcon('info');
				return false;
			}
			<?php endif; ?>
			
			<?php if(($wpmailup['extfield4Show'] == 'yes') && ($wpmailup['extfield4Required'] == 'yes')): ?>
			if(jQ.trim(sub_ext4) == '')
			{
				jQ('#show-response').html('<?php echo addslashes($wpmailup['extfield4DisplayedName']).' '.addslashes($wpmailup['fieldRequired']); ?>');
				viewInfoIcon('info');
				return false;
			}
			<?php endif; ?>
			
			<?php if(($wpmailup['extfield5Show'] == 'yes') && ($wpmailup['extfield5Required'] == 'yes')): ?>
			if(jQ.trim(sub_ext5) == '')
			{
				jQ('#show-response').html('<?php echo addslashes($wpmailup['extfield5DisplayedName']).' '.addslashes($wpmailup['fieldRequired']); ?>');
				viewInfoIcon('info');
				return false;
			}
			<?php endif; ?>
			
			/*
				Check terms and conditions have been checked
			*/
			var termsAccept = '';
			<?php if($wpmailup['termsConfirm'] == 'yes'): ?>
			if(jQ('#terms-confirm').is(':checked') == false)
			{
				jQ('#show-response').html('<?php  echo addslashes($wpmailup['termsNotAgreed']); ?>');
				viewInfoIcon('info');
				return false;
			}
			else
			{
				termsAccept = jQ('#terms-confirm').val();
			}
			<?php else: ?>
			termsAccept = 'yes';
			<?php endif; ?>
			
			
			var form_values = {
				"Email":sub_email,
				"List":listId,
				"sms":sub_phone,
				"Group":groupId,
				"Confirm":confirmReq,
				"csvFldNames":csvFldNames,
				"csvFldValues":csvFldValues,
				"retCode":"1",
				"token":token,
				"subsUrl":subUrl,
				"termsAccept":termsAccept
			}
			
			jQ('#loading-img').css('display', '');
			viewInfoIcon('loading');
			jQ('#show-response').html('<?php _e('Sending request...'); ?>');
			jQ.post('<?php echo get_bloginfo('wpurl').'/wp-content/plugins/wp-mailup/subscribe.php'; ?>', form_values, function(returned_data){
				switch(Number(returned_data))
				{
					case 0:
						jQ('#show-response').html('<?php echo addslashes($wpmailup['successMessage']); ?>');
						break;
					case 1:
						jQ('#show-response').html('<?php echo addslashes($wpmailup['genericError']); ?>');
						break;
					case 2:
						jQ('#show-response').html('<?php echo addslashes($wpmailup['invalidAddress']); ?>');
						break;
					case 3:
						jQ('#show-response').html('<?php echo addslashes($wpmailup['alreadyPresent']); ?>');
						break;
					case 10:
						jQ('#show-response').html('<?php echo addslashes($wpmailup['termsNotAgreed']); ?>');
						break;
					case -1011:
						/* here generic message is displayed instead of a detailed message, which can be misleading for subscribers */
						jQ('#show-response').html('<?php echo addslashes($wpmailup['genericError']); ?>'); 
						/*jQ('#show-response').html('<?php echo 'IP address validation is required. Please check this <a href="http://help.mailup.com/display/mailupUserGuide/WordPress#WordPress-authorizing" target="_blank">page</a>'; ?>');*/
						
						break;						
					default:
						break;
				}
				viewInfoIcon('info');
			});
			return false;
		});
	});
	
</script>