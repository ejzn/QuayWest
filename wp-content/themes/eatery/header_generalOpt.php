<?php

global $sa_general;

/* GENERAL OPTIONS */
$general_options = get_option('sa_general',$sa_general); 
$custom_CSS = $general_options['custom_css'];
$copyright_footer_text = $general_options['footer_copyright'];
$google_analytics = $general_options['google_analytics'];

/* CUSTOM CSS */
if ($custom_CSS > ""){
		echo "<!-- Custom CSS -->\n";
		echo "<style type=\"text/css\">\n";
		echo $custom_CSS;
		echo "\n</style>\n";
		echo "<!-- End Custom CSS -->\n";		
	}
/* Google Analytics Tracking */
if ($google_analytics > ""){ ?>
<!-- Google Analytics --> 
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo $google_analytics;?>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- End Google Analytics --> 
<?php } ?>