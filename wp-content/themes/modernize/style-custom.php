<?php
	/*	
	*	Goodlayers Custom Style File (style-custom.php)
	*	---------------------------------------------------------------------
	*	This file fetch all style options in admin panel to generate the css
	*	to attach to header.php file
	*	---------------------------------------------------------------------
	*/

	header("Content-type: text/css;");
	
	$current_url = dirname(__FILE__);
	$wp_content_pos = strpos($current_url, 'wp-content');
	$wp_content = substr($current_url, 0, $wp_content_pos);

	require_once($wp_content . 'wp-load.php');
	
?>
/* Background
   ================================= */
<?php 
	$background_style = get_option(THEME_SHORT_NAME.'_background_style', 'Pattern');
	if($background_style == 'Pattern'){
		$background_pattern = get_option(THEME_SHORT_NAME.'_background_pattern', '1');
		?>
		
		html{ 
			background-image: url('<?php echo GOODLAYERS_PATH; ?>/images/pattern/pattern-<?php echo $background_pattern; ?>.png');
			background-repeat: repeat; 
		}
		
		<?php
	}
?>
   
/* Logo
   ================================= */
.logo-wrapper{ 
	margin-top: <?php echo get_option(THEME_SHORT_NAME . "_logo_top_margin", '35'); ?>px;
	margin-left: <?php echo get_option(THEME_SHORT_NAME . "_logo_left_margin", '0'); ?>px;
	margin-bottom: <?php echo get_option(THEME_SHORT_NAME . "_logo_bottom_margin", '26'); ?>px;
}  
  
/* Social Network
   ================================= */
.social-wrapper{
	margin-top: <?php echo get_option(THEME_SHORT_NAME . "_social_wrapper_margin", '33'); ?>px;
}  
   
/* Font Size
   ================================= */
h1{
	font-size: <?php echo get_option(THEME_SHORT_NAME . "_h1_size", '30'); ?>px;
}
h2{
	font-size: <?php echo get_option(THEME_SHORT_NAME . "_h2_size", '25'); ?>px;
}
h3{
	font-size: <?php echo get_option(THEME_SHORT_NAME . "_h3_size", '20'); ?>px;
}
h4{
	font-size: <?php echo get_option(THEME_SHORT_NAME . "_h4_size", '18'); ?>px;
}
h5{
	font-size: <?php echo get_option(THEME_SHORT_NAME . "_h5_size", '16'); ?>px;
}
h6{
	font-size: <?php echo get_option(THEME_SHORT_NAME . "_h6_size", '15'); ?>px;
}

/* Element Color
   ================================= */
   
html{
	background-color: <?php echo get_option(THEME_SHORT_NAME . "_body_background", '#dddddd'); ?>;
}
div.social-icon, /* to fix IE problem */
div.container{
	background: <?php echo get_option(THEME_SHORT_NAME . "_container_background", '#ffffff'); ?>;
}
div.container{
	<?php $gdl_container_shadow = get_option(THEME_SHORT_NAME . "_container_shadow", '#bbbbbb'); ?>
	-moz-box-shadow: 0px 0px 8px <?php echo $gdl_container_shadow; ?>;
	-webkit-box-shadow: 0px 0px 8px <?php echo $gdl_container_shadow; ?>;
	box-shadow: 0px 0px 8px <?php echo $gdl_container_shadow; ?>;
}
div.divider{
	border-bottom: 1px solid <?php echo get_option(THEME_SHORT_NAME . "_divider_line", '#ececec'); ?>;
}

/* Font Family 
  ================================= */
body{
	font-family: <?php echo substr(get_option(THEME_SHORT_NAME . "_content_font"), 2); ?>;
}
h1, h2, h3, h4, h5, h6, .gdl-title{
	font-family: <?php echo substr(get_option(THEME_SHORT_NAME . "_header_font"), 2); ?>;
}
.stunning-text-wrapper{
	background-color: <?php echo get_option(THEME_SHORT_NAME . "_stunning_text_background_color", '#ffffff'); ?> !important;
}
h1.stunning-text-title{
	font-family: <?php echo substr(get_option(THEME_SHORT_NAME . "_stunning_text_font"), 2); ?>;
	color: <?php echo get_option(THEME_SHORT_NAME . "_stunning_text_title_color", '#333333'); ?>;
}
.stunning-text-caption{
	color: <?php echo get_option(THEME_SHORT_NAME . "_stunning_text_caption_color", '#666666'); ?>;
}
  
/* Font Color
   ================================= */
body{
	color: <?php echo get_option(THEME_SHORT_NAME . "_content_color", '#666666'); ?> !important;
}
a{
	color: <?php echo get_option(THEME_SHORT_NAME . "_link_color", '#ef7f2c'); ?>;
}
.footer-wrapper a{
	color: <?php echo get_option(THEME_SHORT_NAME . "_footer_link_color", '#ef7f2c'); ?>;
}
.gdl-link-title{
	color: <?php echo get_option(THEME_SHORT_NAME . "_link_color", '#ef7f2c'); ?> !important;
}
a:hover{
	color: <?php echo get_option(THEME_SHORT_NAME . "_link_hover_color", '#ef7f2c'); ?>;
}
.footer-wrapper a:hover{
	color: <?php echo get_option(THEME_SHORT_NAME . "_footer_link_hover_color", '#ef7f2c'); ?>;
}
.gdl-slider-title{
	color: <?php echo get_option(THEME_SHORT_NAME . "_slider_title_color", '#ef7f2c'); ?> !important;
}  
.gdl-slider-caption{
	color: <?php echo get_option(THEME_SHORT_NAME . "_slider_title_color", '#ffffff'); ?> !important;
}  
div.slider-bottom-gimmick{ 
	background-color: <?php echo get_option(THEME_SHORT_NAME.'_full_slider_bottom_line', '#ebebeb'); ?>; 
}
h1, h2, h3, h4, h5, h6, .title-color{
	color: <?php echo get_option(THEME_SHORT_NAME.'_title_color', '#494949'); ?>;
}
.sidebar-title-color{
	color: <?php echo get_option(THEME_SHORT_NAME.'_sidebar_title_color', '#494949'); ?> !important;
}

/* Post/Port Color
   ================================= */
   
.port-title-color{
	color: <?php echo get_option(THEME_SHORT_NAME.'_port_title_color', '#ef7f2c'); ?> !important;
}
.port-title-color a:hover{
	color: <?php echo get_option(THEME_SHORT_NAME.'_port_title_hover_color', '#ef7f2c'); ?> !important;
}
div.portfolio-thumbnail-image, div.portfolio-thumbnail-video, div.portfolio-thumbnail-slider,
div.blog-thumbnail-image, div.blog-thumbnail-video, div.blog-thumbnail-slider, .gdl-image-frame{
	background-color: <?php echo get_option(THEME_SHORT_NAME.'_post_port_frame_color', '#f0f0f0'); ?> !important;
	border: 1px solid <?php echo get_option(THEME_SHORT_NAME.'_post_port_frame_border', '#ffffff'); ?> !important;;
}
.post-title-color{
	color: <?php echo get_option(THEME_SHORT_NAME.'_post_title_color', '#646464'); ?> !important;
}
.post-title-color a:hover{
	color: <?php echo get_option(THEME_SHORT_NAME.'_post_title_hover_color', '#646464'); ?> !important;
}
.post-widget-title-color{
	color: <?php echo get_option(THEME_SHORT_NAME.'_post_widget_title_color', '#ef7f2c'); ?> !important;
}
.post-info-color, div.custom-sidebar #twitter_update_list{
	color: <?php echo get_option(THEME_SHORT_NAME.'_post_info_color', '#797979'); ?> !important;
}
div.pagination a{ background-color: <?php echo get_option(THEME_SHORT_NAME.'_pagination_normal_state', '#f5f5f5'); ?>; }

.about-author-wrapper{
	background-color: <?php echo get_option(THEME_SHORT_NAME.'_post_about_author_color', '#f9f9f9'); ?> !important;
}

/* Column Service
   ================================= */
h2.column-service-title{
	color: <?php echo get_option(THEME_SHORT_NAME.'_column_service_title_color', '#ef7f2c'); ?> !important;
}

/* Stunning Text
   ================================= */
.stunning-text-button{
	color: <?php echo get_option(THEME_SHORT_NAME.'_stunning_text_button_color', '#ffffff'); ?> !important;
	<?php $stunning_text_button_color = get_option(THEME_SHORT_NAME.'_stunning_text_button_background', '#ef7f2c'); ?> 
	background-color: <?php echo $stunning_text_button_color ?> !important;
	border: 1px solid <?php echo $stunning_text_button_color ?> !important;
}

/* Footer Color
   ================================= */
div.footer-wrapper-gimmick{
	background: <?php echo get_option(THEME_SHORT_NAME . "_footer_top_bar", '#cfcfcf'); ?>;
}
.footer-widget-wrapper .custom-sidebar-title{ 
	color: <?php echo get_option(THEME_SHORT_NAME.'_footer_title_color', '#ececec'); ?> !important;
}
.footer-wrapper{ 
	background-color: <?php echo get_option(THEME_SHORT_NAME.'_footer_background', '#313131'); ?> !important;
}
.footer-wrapper .gdl-divider{
	border-color: <?php echo get_option(THEME_SHORT_NAME.'_footer_divider_color', '#3b3b3b'); ?> !important;
}
.footer-wrapper, .footer-wrapper table th{
	color: <?php echo get_option(THEME_SHORT_NAME.'_footer_content_color', '#999999'); ?> !important;
}
.footer-wrapper .post-info-color, div.custom-sidebar #twitter_update_list{
	color: <?php echo get_option(THEME_SHORT_NAME.'_footer_content_info_color', '#b1b1b1'); ?> !important;
}
div.footer-wrapper div.contact-form-wrapper input[type="text"], 
div.footer-wrapper div.contact-form-wrapper input[type="password"], 
div.footer-wrapper div.contact-form-wrapper textarea, 
div.footer-wrapper div.custom-sidebar #search-text input[type="text"], 
div.footer-wrapper div.custom-sidebar .contact-widget-whole input, 
div.footer-wrapper div.custom-sidebar .contact-widget-whole textarea {
	color: <?php echo get_option(THEME_SHORT_NAME.'_footer_input_text', '#888888'); ?> !important; 
	background-color: <?php echo get_option(THEME_SHORT_NAME.'_footer_input_background', '#383838'); ?> !important;
	border: 1px solid <?php echo get_option(THEME_SHORT_NAME.'_footer_input_border', '#434343'); ?> !important;
}
div.footer-wrapper a.button, div.footer-wrapper button, div.footer-wrapper button:hover {
	color: <?php echo get_option(THEME_SHORT_NAME.'_footer_button_text', '#7a7a7a'); ?> !important; 
	background-color: <?php echo get_option(THEME_SHORT_NAME.'_footer_button_color', '#222222'); ?> !important;
}
div.copyright-wrapper{ 
	background-color: <?php echo get_option(THEME_SHORT_NAME.'_copyright_background', '#202020'); ?> !important; 
	color: <?php echo get_option(THEME_SHORT_NAME.'_copyright_text', '#808080'); ?> !important;
}
div.copyright-wrapper{
	<?php $gdl_copyright_shadow = get_option(THEME_SHORT_NAME.'_copyright_shadow','#111111'); ?>
	-moz-box-shadow:inset 0px 3px 6px -3px <?php echo $gdl_copyright_shadow; ?>;
	-webkit-box-shadow:inset 0px 3px 6px -3px <?php echo $gdl_copyright_shadow; ?>;
	box-shadow:inset 0px 3px 6px -3px <?php echo $gdl_copyright_shadow; ?>; 
}
div.footer-wrapper div.custom-sidebar .recent-post-widget-thumbnail {  
	background-color: <?php echo get_option(THEME_SHORT_NAME.'_footer_frame_background', '#292929'); ?>; 
	border-color: <?php echo get_option(THEME_SHORT_NAME.'_footer_frame_border', '#3b3b3b'); ?>;
}

/* Divider Color
   ================================= */
.scroll-top{ 
	color: <?php echo get_option(THEME_SHORT_NAME.'_back_to_top_text_color', '#7c7c7c'); ?> !important;
}
.gdl-divider{
	border-color: <?php echo get_option(THEME_SHORT_NAME . "_divider_line", '#ececec'); ?> !important;
}
table th{
	color: <?php echo get_option(THEME_SHORT_NAME.'_table_text_title', '#666666'); ?>;
	background-color: <?php echo get_option(THEME_SHORT_NAME.'_table_title_background', '#f7f7f7'); ?>;
}
table, table tr, table tr td, table tr th{
	border-color: <?php echo get_option(THEME_SHORT_NAME . "_table_border", '#e5e5e5'); ?>;
}

/* Testimonial Color
   ================================= */
.testimonial-content{
	color: <?php echo get_option(THEME_SHORT_NAME.'_testimonial_text', '#848484'); ?> !important;;
}
.testimonial-author-name{
	color: <?php echo get_option(THEME_SHORT_NAME.'_testimonial_author', '#494949'); ?> !important;; 
}
.testimonial-author-position{
	color: <?php echo get_option(THEME_SHORT_NAME.'_testimonial_position', '#8d8d8d'); ?> !important;;
}

/* Tabs Color
   ================================= */
ul.tabs li a {
	background-color: <?php echo get_option(THEME_SHORT_NAME.'_tab_background_color', '#f5f5f5'); ?> !important;;
}
ul.tabs li a.active {
	background-color: <?php echo get_option(THEME_SHORT_NAME.'_tab_active_background_color', '#fff'); ?> !important;;
}

/* Navigation Color
   ================================= */
<?php if(get_option(THEME_SHORT_NAME.'_main_navigation_gradient', 'enable') == 'enable'){ ?>
div.navigation-wrapper{
	background: url('<?php echo GOODLAYERS_PATH; ?>/images/gradient-top-gray-40px.png') repeat-x; 
}
<?php } ?>
.top-navigation-wrapper{
	<?php $gdl_top_navigation_text_color = get_option(THEME_SHORT_NAME.'_top_navigation_text', '#e7e7e7'); ?>
	color: <?php echo $gdl_top_navigation_text_color; ?> !important;
	background-color: <?php echo get_option(THEME_SHORT_NAME.'_top_navigation_background', '#494949'); ?> !important;
}
.top-navigation-left li a{ 
	<?php $gdl_top_navigation_text_color = '#' . hexDarker(substr($gdl_top_navigation_text_color, 1)); ?>
	border-right: 1px solid <?php echo $gdl_top_navigation_text_color; ?> !important;
}
.top-navigation-wrapper-gimmick{
	background-color: <?php echo get_option(THEME_SHORT_NAME.'_top_navigation_bottom_bar', '#e77927'); ?> !important;
}
.navigation-wrapper{
	<?php $gdl_border_top_bottom = get_option(THEME_SHORT_NAME.'_main_navigation_border_top_bottom', '#ececec'); ?>
	border-top: 1px solid <?php echo $gdl_border_top_bottom; ?> !important;
	border-bottom: 1px solid <?php echo $gdl_border_top_bottom; ?> !important;
	
	<?php $gdl_nav_buttom_shadow = get_option(THEME_SHORT_NAME.'_main_navigation_bottom_shadow', '#f5f5f5'); ?>
	-moz-box-shadow: 0px 1px 5px -1px <?php echo $gdl_nav_buttom_shadow; ?>;
	-webkit-box-shadow: 0px 1px 5px -1px <?php echo $gdl_nav_buttom_shadow; ?>;
	box-shadow: 0px 1px 5px -1px <?php echo $gdl_nav_buttom_shadow; ?>; 
}
.navigation-wrapper .sf-menu ul{
	border-color: <?php echo $gdl_border_top_bottom; ?> !important;
}
.navigation-wrapper, .sf-menu li li{
	background-color: <?php echo get_option(THEME_SHORT_NAME.'_main_navigation_background', '#f5f5f5'); ?> !important;
}
.navigation-wrapper .sf-menu li a{
	color: <?php echo get_option(THEME_SHORT_NAME.'_main_navigation_text', '#7a7a7a'); ?> !important;
	
	<?php
		$gdl_nav_border_right = get_option(THEME_SHORT_NAME.'_main_navigation_border_right', '#dbdbdb');
		$gdl_nav_border_left = get_option(THEME_SHORT_NAME.'_main_navigation_border_left', '#ffffff');
	?>
	border-right: 1px solid <?php echo $gdl_nav_border_right; ?> !important;
	border-left: 1px solid <?php echo $gdl_nav_border_left; ?> !important;
}
.navigation-wrapper .sf-menu a:focus, .navigation-wrapper .sf-menu a:hover, .navigation-wrapper .sf-menu a:active{
	color: <?php echo get_option(THEME_SHORT_NAME.'_main_navigation_text_hover', '#3d3d3d'); ?> !important;
} 
.navigation-wrapper .sf-menu .current-menu-item a {
	color: <?php echo get_option(THEME_SHORT_NAME.'_main_navigation_text_current', '#3d3d3d'); ?> !important;
 }
.search-wrapper{
	border-left: 1px solid <?php echo $gdl_nav_border_right; ?>;
}
.search-wrapper form{
	border-left: 1px solid <?php echo $gdl_nav_border_left; ?>;
}
.search-wrapper #search-text input[type="text"]{
	background-color: <?php echo get_option(THEME_SHORT_NAME.'_search_box_background', '#efefef'); ?> !important;
	color: <?php echo get_option(THEME_SHORT_NAME.'_search_box_text', '#333'); ?> !important;
	
	<?php $gdl_search_shadow = get_option(THEME_SHORT_NAME.'_search_box_shadow', '#ddd'); ?> !important;
	-moz-box-shadow:inset 0px 0px 6px <?php echo $gdl_search_shadow; ?>;
	-webkit-box-shadow:inset 0px 0px 6px <?php echo $gdl_search_shadow; ?>;
	box-shadow:inset 0px 0px 6px <?php echo $gdl_search_shadow; ?>;
}


/* Button Color
   ================================= */
<?php
	$gdl_button_color = get_option(THEME_SHORT_NAME.'_button_background_color', '#f1f1f1');
	$gdl_button_border = get_option(THEME_SHORT_NAME.'_button_border_color', '#dedede');
	$gdl_button_text = get_option(THEME_SHORT_NAME.'_button_text_color', '#7a7a7a');
	$gdl_button_hover = get_option(THEME_SHORT_NAME.'_button_text_hover_color', '#7a7a7a');
?>
a.button, button, input[type="submit"], input[type="reset"], input[type="button"],
a.gdl-button{
	background-color: <?php echo $gdl_button_color; ?>;
	color: <?php echo $gdl_button_text; ?>;
	border: 1px solid <?php echo $gdl_button_border; ?>
}

a.button:hover, button:hover, input[type="submit"]:hover, input[type="reset"]:hover, input[type="button"]:hover
a.gdl-button:hover{
	color: <?php echo $gdl_button_hover; ?>;
}
   
/* Price Item
   ================================= */   
div.gdl-price-item .gdl-divider{ 
	border-color: <?php echo get_option(THEME_SHORT_NAME.'_price_item_border', '#ececec'); ?> !important;
}
div.gdl-price-item .price-title{
	background-color: <?php echo get_option(THEME_SHORT_NAME.'_price_item_price_title_background', '#e9e9e9'); ?> !important;
	color: <?php echo get_option(THEME_SHORT_NAME.'_price_item_price_title_color', '#3a3a3a'); ?> !important;
}
div.gdl-price-item .price-item.active .price-title{ 
	background-color: <?php echo get_option(THEME_SHORT_NAME.'_price_item_best_price_title_background', '#5f5f5f'); ?> !important;
	color: <?php echo get_option(THEME_SHORT_NAME.'_price_item_best_price_title_color', '#ffffff'); ?> !important;
}
div.gdl-price-item .price-tag{
	color: <?php echo get_option(THEME_SHORT_NAME.'_price_item_price_color', '#3a3a3a'); ?> !important;
}
div.gdl-price-item .price-item.active .price-tag{
	<?php $gdl_best_price_color = get_option(THEME_SHORT_NAME.'_price_item_best_price_color', '#ef7f2c'); ?>
	color: <?php echo $gdl_best_price_color; ?> !important;
}
div.gdl-price-item .price-item.active{
	border-top: 1px solid <?php echo $gdl_best_price_color; ?> !important;
}
/* Contact Form
   ================================= */
<?php
	$gdl_contact_form_frame = get_option(THEME_SHORT_NAME.'_contact_form_frame_color', '#f8f8f8');
	$gdl_contact_form_shadow = get_option(THEME_SHORT_NAME.'_contact_form_inner_shadow', '#ececec');
 ?>
div.contact-form-wrapper input[type="text"], 
div.contact-form-wrapper input[type="password"],
div.contact-form-wrapper textarea,
div.custom-sidebar #search-text input[type="text"],
div.custom-sidebar .contact-widget-whole input, 
div.comment-wrapper input[type="text"], input[type="password"], div.comment-wrapper textarea,
div.custom-sidebar .contact-widget-whole textarea,
span.wpcf7-form-control-wrap input[type="text"], 
span.wpcf7-form-control-wrap input[type="password"], 
span.wpcf7-form-control-wrap textarea{
	color: <?php echo get_option(THEME_SHORT_NAME.'_contact_form_text_color', '#888888'); ?>;
	background-color: <?php echo get_option(THEME_SHORT_NAME.'_contact_form_background_color', '#fff'); ?>;
	border: 1px solid <?php echo get_option(THEME_SHORT_NAME.'_contact_form_border_color', '#cfcfcf'); ?>;

	-webkit-box-shadow: <?php echo $gdl_contact_form_shadow; ?> 0px 1px 4px inset, <?php echo $gdl_contact_form_frame; ?> -5px -5px 0px 0px, <?php echo $gdl_contact_form_frame; ?> 5px 5px 0px 0px, <?php echo $gdl_contact_form_frame; ?> 5px 0px 0px 0px, <?php echo $gdl_contact_form_frame; ?> 0px 5px 0px 0px, <?php echo $gdl_contact_form_frame; ?> 5px -5px 0px 0px, <?php echo $gdl_contact_form_frame; ?> -5px 5px 0px 0px;
	box-shadow: <?php echo $gdl_contact_form_shadow; ?> 0px 1px 4px inset, <?php echo $gdl_contact_form_frame; ?> -5px -5px 0px 0px, <?php echo $gdl_contact_form_frame; ?> 5px 5px 0px 0px, <?php echo $gdl_contact_form_frame; ?> 5px 0px 0px 0px, <?php echo $gdl_contact_form_frame; ?> 0px 5px 0px 0px, <?php echo $gdl_contact_form_frame; ?> 5px -5px 0px 0px, <?php echo $gdl_contact_form_frame; ?> -5px 5px 0px 0px;
}

/* Icon Type (dark/light)
   ================================= */
<?php global $gdl_icon_type; ?>

div.single-port-next-nav .right-arrow{ background: url('<?php echo GOODLAYERS_PATH; ?>/images/icon/<?php echo $gdl_icon_type; ?>/arrow-right.png') no-repeat; }
div.single-port-prev-nav .left-arrow{ background: url('<?php echo GOODLAYERS_PATH; ?>/images/icon/<?php echo $gdl_icon_type; ?>/arrow-left.png') no-repeat; }

div.single-thumbnail-author,
div.archive-wrapper .blog-item .blog-thumbnail-author,
div.blog-item-holder .blog-item2 .blog-thumbnail-author{ background: url('<?php echo GOODLAYERS_PATH; ?>/images/icon/<?php echo $gdl_icon_type; ?>/author.png') no-repeat 0px 1px; }

div.single-thumbnail-date,
div.custom-sidebar .recent-post-widget-date,
div.archive-wrapper .blog-item .blog-thumbnail-date,
div.blog-item-holder .blog-item1 .blog-thumbnail-date,
div.blog-item-holder .blog-item2 .blog-thumbnail-date{ background: url('<?php echo GOODLAYERS_PATH; ?>/images/icon/<?php echo $gdl_icon_type; ?>/calendar.png') no-repeat 0px 1px; }

div.single-thumbnail-comment,
div.archive-wrapper .blog-item .blog-thumbnail-comment,
div.blog-item-holder .blog-item1 .blog-thumbnail-comment,
div.blog-item-holder .blog-item2 .blog-thumbnail-comment,
div.custom-sidebar .recent-post-widget-comment-num{ background: url('<?php echo GOODLAYERS_PATH; ?>/images/icon/<?php echo $gdl_icon_type; ?>/comment.png') no-repeat 0px 1px; }

div.single-thumbnail-tag,
div.archive-wrapper .blog-item .blog-thumbnail-tag,
div.blog-item-holder .blog-item2 .blog-thumbnail-tag{ background: url('<?php echo GOODLAYERS_PATH; ?>/images/icon/<?php echo $gdl_icon_type; ?>/tag.png') no-repeat; }

div.custom-sidebar #searchsubmit,	
div.search-wrapper input[type="submit"]{ background: url('<?php echo GOODLAYERS_PATH; ?>/images/icon/<?php echo $gdl_icon_type; ?>/find-17px.png') no-repeat center; }	

div.single-port-visit-website{ background: url('<?php echo GOODLAYERS_PATH; ?>/images/icon/<?php echo $gdl_icon_type; ?>/link-small.png') no-repeat; }

span.accordion-head-image.active,
span.toggle-box-head-image.active{ background: url('<?php echo GOODLAYERS_PATH; ?>/images/icon/<?php echo $gdl_icon_type; ?>/minus-24px.png'); }
span.accordion-head-image,
span.toggle-box-head-image{ background: url('<?php echo GOODLAYERS_PATH; ?>/images/icon/<?php echo $gdl_icon_type; ?>/plus-24px.png'); }

div.jcarousellite-nav .prev, 
div.jcarousellite-nav .next{ background-image: url('<?php echo GOODLAYERS_PATH; ?>/images/icon/<?php echo $gdl_icon_type; ?>/navigation-20px.png'); } 

div.testimonial-icon{ background: url("<?php echo GOODLAYERS_PATH; ?>/images/icon/<?php echo $gdl_icon_type; ?>/quotes-18px.png"); }

div.custom-sidebar ul li{ background: url('<?php echo GOODLAYERS_PATH; ?>/images/icon/<?php echo $gdl_icon_type; ?>/arrow4.png') no-repeat 0px 14px; }

div.stunning-text-wrapper{ 
	background: url('<?php echo GOODLAYERS_PATH; ?>/images/icon/<?php echo $gdl_icon_type; ?>/left-cross-5px.png'); 
}

/* Footer Icon Type
   ================================= */
<?php global $gdl_footer_icon_type; ?>
div.footer-wrapper div.custom-sidebar ul li { background: url('<?php echo GOODLAYERS_PATH; ?>/images/icon/<?php echo $gdl_footer_icon_type; ?>/arrow4.png') no-repeat 0px 14px; }
div.footer-wrapper div.custom-sidebar #searchsubmit { background: url('<?php echo GOODLAYERS_PATH; ?>/images/icon/<?php echo $gdl_footer_icon_type; ?>/find-17px.png') no-repeat center; }
div.footer-wrapper div.custom-sidebar .recent-post-widget-comment-num { background: url('<?php echo GOODLAYERS_PATH; ?>/images/icon/<?php echo $gdl_footer_icon_type; ?>/comment.png') no-repeat 0px 1px; }
div.footer-wrapper div.custom-sidebar .recent-post-widget-date{ background: url('<?php echo GOODLAYERS_PATH; ?>/images/icon/<?php echo $gdl_footer_icon_type; ?>/calendar.png') no-repeat 0px 1px; }

/* Elements Shadow
   ================================= */
<?php $gdl_element_shadow = get_option(THEME_SHORT_NAME.'_elements_shadow','#ececec'); ?>

a.button, button, input[type="submit"], input[type="reset"], input[type="button"], 
a.gdl-button{
	-moz-box-shadow: 1px 1px 3px <?php echo $gdl_element_shadow; ?>;
	-webkit-box-shadow: 1px 1px 3px <?php echo $gdl_element_shadow; ?>;
	box-shadow: 1px 1px 3px <?php echo $gdl_element_shadow; ?>; 
}

div.portfolio-thumbnail-image, div.portfolio-thumbnail-video, div.portfolio-thumbnail-slider,
div.single-port-thumbnail-image, div.single-port-thumbnail-video, div.single-port-thumbnail-slider,
div.blog-thumbnail-image, div.blog-thumbnail-slider, div.blog-thumbnail-video,
div.custom-sidebar .recent-post-widget-thumbnail, .gdl-image-frame{
	-moz-box-shadow: 0px 0px 4px 1px <?php echo $gdl_element_shadow; ?>;
	-webkit-box-shadow: 0px 0px 4px 1px <?php echo $gdl_element_shadow; ?>;
	box-shadow: 0px 0px 4px 1px <?php echo $gdl_element_shadow; ?>;
}

div.right-sidebar-wrapper{ 
	-moz-box-shadow:inset 3px 0px 3px -3px <?php echo $gdl_element_shadow; ?>;
	-webkit-box-shadow:inset 3px 0px 3px -3px <?php echo $gdl_element_shadow; ?>;
	box-shadow:inset 3px 0px 3px -3px <?php echo $gdl_element_shadow; ?>; 
}
div.left-sidebar-wrapper{
	-moz-box-shadow:inset -3px 0px 3px -3px <?php echo $gdl_element_shadow; ?>;
	-webkit-box-shadow:inset -3px 0px 3px -3px <?php echo $gdl_element_shadow; ?>;
	box-shadow:inset -3px 0px 3px -3px <?php echo $gdl_element_shadow; ?>;
}

div.gdl-price-item .price-item.active{ 
	-moz-box-shadow: 0px 0px 3px <?php echo $gdl_element_shadow; ?>;
	-webkit-box-shadow: 0px 0px 3px <?php echo $gdl_element_shadow; ?>;
	box-shadow: 0px 0px 3px <?php echo $gdl_element_shadow; ?>;
}