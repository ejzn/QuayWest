<?php
/**
	* sidebar_socialOpt.php
	
	* Displays Social Media icons and links
	* Takes settings from admin theme options
	* Uses CSS image sprites
	
	* LICENSE: 
	
	* @copyright  2012 Themovation
	* @license    http://www.
	* @version    
	* @link       http://www.
*/


function returnSOClinks() {
	global $sa_social_media;
	$counter = 0;
	$template_directory_uri = get_template_directory_uri();
	
	$arrSOC = array("soc_facebook", "soc_twitter", "soc_googleplus", "soc_linkedin", "soc_tumblr", "soc_googlemaps", "soc_foursquare", "soc_youtube", "soc_vimeo", "soc_yelp", "soc_urbanspoon", "soc_tripadvisor", "soc_meetup", "soc_rss", "soc_pinterest", "soc_email", "soc_phone");
	$general_options = get_option('sa_social_media',$sa_social_media);
	
	$SOClinks = "";
	$SOCbefore = '<div class="side-widget below soc"><div class="textwidget">';
	foreach ($arrSOC as $i => $value) {
		$SOClink = $general_options[$value];
		$SOCclass = str_replace("soc_","",$value);
		$SOCspacer = $template_directory_uri . '/css/images/soc_spacer.gif';
		
		if ($SOClink > "") {
			$counter += 1;
			$SOClinks .= "<a href=\"$SOClink\" target=\"_blank\" class=\"$SOCclass\"></a>";
		}
	}
	$SOCafter = '</div><br class="clear" /></div>';
	
	if ($SOClinks > ""){
		return $SOCbefore . $SOClinks . $SOCafter ;
	}
			
}