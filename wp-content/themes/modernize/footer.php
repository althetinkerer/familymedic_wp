		<div class="footer-wrapper">
			<?php $gdl_show_footer = get_option(THEME_SHORT_NAME.'_show_footer','enable'); ?>
			
			<?php if( $gdl_show_footer == 'enable' ){ ?>
				<div class="footer-wrapper-gimmick"></div>
			<?php } ?>
			
			
			<!-- Get Footer Widget -->
			<?php if( $gdl_show_footer == 'enable' ){ ?>
				<div class="container mt0">
					<div class="footer-widget-wrapper">
						<?php
							$gdl_footer_class = array(
								'footer-style1'=>array('1'=>'four columns', '2'=>'four columns', '3'=>'four columns', '4'=>'four columns'),
								'footer-style2'=>array('1'=>'eight columns', '2'=>'four columns', '3'=>'four columns', '4'=>'display-none'),
								'footer-style3'=>array('1'=>'four columns', '2'=>'four columns', '3'=>'eight columns', '4'=>'display-none'),
								'footer-style4'=>array('1'=>'one-third column', '2'=>'one-third column', '3'=>'one-third column', '4'=>'display-none'),
								'footer-style5'=>array('1'=>'two-thirds column', '2'=>'one-third column', '3'=>'display-none', '4'=>'display-none'),
								'footer-style6'=>array('1'=>'one-third column', '2'=>'two-thirds column', '3'=>'display-none', '4'=>'display-none'),
								);
							$gdl_footer_style = get_option(THEME_SHORT_NAME.'_footer_style', 'footer-style1');
						 
							for( $i=1 ; $i<=4; $i++ ){
								echo '<div class="' . $gdl_footer_class[$gdl_footer_style][$i] . ' mt0">';
								dynamic_sidebar('Footer ' . $i);
								echo '</div>';
							}
						?>
						<br class="clear">
					</div>
				</div> 
			<?php } ?>
			
			<?php $gdl_show_copyright = get_option(THEME_SHORT_NAME.'_show_copyright','enable'); ?>
			
			<!-- Get Copyright Text -->
			<?php if( $gdl_show_copyright == 'enable' ){ ?>
				<div class="copyright-wrapper">
					<div class="copyright-left">
						<?php echo get_option(THEME_SHORT_NAME.'_copyright_left_area') ?>
					</div> 
					<div class="copyright-right">
						<?php echo get_option(THEME_SHORT_NAME.'_copyright_right_area') ?>
					</div> 
					<div class="clear"></div>
				</div>
			<?php } ?>
		</div><!-- footer-wrapper -->
	</div> <!-- container -->
</div> <!-- body-wrapper -->
	
<?php wp_footer(); ?>

<script type="text/javascript"> 	
	<?php include ( TEMPLATEPATH."/javascript/cufon-replace.php" ); ?>
</script>
  <div class="clear"></div>
 </div><!-- container -->

<!-- Start AliveChat Tracking Code -->
<script type="text/javascript">
function wsa_include_js(){
	var wsa_host = (("https:" == document.location.protocol) ? "https://" : "http://");
	var js = document.createElement('script');
	js.setAttribute('language', 'javascript');
	js.setAttribute('type', 'text/javascript');
	js.setAttribute('src',wsa_host + 'www.websitealive3.com/11600/Visitor/vTracker_v2.asp?websiteid=0&groupid=11600');
	document.getElementsByTagName('head').item(0).appendChild(js);
}
if (window.attachEvent) {window.attachEvent('onload', wsa_include_js);}
else if (window.addEventListener) {window.addEventListener('load', wsa_include_js, false);}
else {document.addEventListener('load', wsa_include_js, false);}
</script>
<!-- End AliveChat Tracking Code -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25637629-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
                        
</body>
</html>