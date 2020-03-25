<?php

$synved_form_options = array(
'settings' => array(
	'label' => 'Better Forms',
	'title' => 'Better Forms',
	'tip' => synved_option_callback('synved_form_page_settings_tip'),
	'link-target' => plugin_basename(synved_plugout_module_path_get('synved-form', 'provider')),
	'sections' => array(
		'section_general' => array(
			'label' => __('General Settings', 'synved-form'), 
			'tip' => __('Settings affecting the general behaviour of the plugin', 'synved-form'),
			'settings' => array(
				'form_skin' => array(
					'default' => 'formal',
					'set' => 'normal=Normal,formal=Formal',
					'label' => __('Form Style', 'synved-form'), 
					'tip' => __('Select the style/skin for the form elements display', 'synved-form')
				),
				'custom_style' => array(
					'type' => 'style',
					'label' => __('Extra Styles', 'synved-shortcode'), 
					'tip' => __('Any CSS styling code you type in here will be loaded after all of the plugin styles.', 'synved-shortcode')
				),
			)
		),
	)
)
);


synved_option_register('synved_form', $synved_form_options);

synved_option_include_module_addon_list('synved-form');


function synved_form_page_settings_tip($tip, $item)
{
	if (!function_exists('synved_shortcode_version'))
	{
		$tip .= ' <div style="background:#f2f2f2;font-size:110%;color:#444;padding:10px 15px;"><b>' . __('Note', 'synved-form') . '</b>: ' . __('The Better Forms plugin is fully compatible with our free <a target="_blank" href="http://synved.com/wordpress-shortcodes/">WordPress Shortcodes</a> plugin!</span>', 'synved-form') . '</div>';
	}
	
	if (!function_exists('synved_social_version'))
	{
		$tip .= ' <div style="background:#f2f2f2;font-size:110%;color:#444;padding:10px 15px;"><b>' . __('Note', 'synved-shortcode') . '</b>: ' . __('The Better Forms plugin is fully compatible with our free <a target="_blank" href="http://synved.com/wordpress-social-media-feather/">Social Media Feather</a> plugin!</span>', 'synved-form') . '</div>';
	}
	
	if (function_exists('synved_connect_support_social_follow_render'))
	{
		$tip .= synved_connect_support_social_follow_render();
	}
	
	return $tip;
}

function synved_form_path($path = null)
{
	$root = dirname(__FILE__);
	
	if ($root != null)
	{
		if (substr($root, -1) != '/' && $path[0] != '/')
		{
			$root .= '/';
		}
		
		$root .= $path;
	}
	
	$root = str_replace(array('\\', '/'), DIRECTORY_SEPARATOR, $root);
	
	return $root;
}

function synved_form_path_uri($path = null)
{
	$uri = plugins_url('/better-forms') . '/synved-form';
	
	if (function_exists('synved_plugout_module_uri_get'))
	{
		$mod_uri = synved_plugout_module_uri_get('synved-form');
		
		if ($mod_uri != null)
		{
			$uri = $mod_uri;
		}
	}
	
	if ($path != null)
	{
		if (substr($uri, -1) != '/' && $path[0] != '/')
		{
			$uri .= '/';
		}
		
		$uri .= $path;
	}
	
	return $uri;
}

function synved_form_wp_register_common_scripts()
{
	$uri = synved_form_path_uri();
}

function synved_form_enqueue_scripts()
{
	$uri = synved_form_path_uri();
	
	synved_form_wp_register_common_scripts();
	
	wp_register_style('synved-form-formalize', $uri . '/formalize/formalize.css', false, '1.0');
	
	wp_register_script('synved-form-formalize', $uri . '/formalize/jquery.formalize.min.js', array('jquery'), '1.0.0');
	
	if (synved_option_get('synved_form', 'form_skin') == 'formal')
	{
		wp_enqueue_style('synved-form-formalize');
		wp_enqueue_script('synved-form-formalize');
	}
}

function synved_form_print_styles()
{
}

function synved_form_admin_enqueue_scripts()
{
	$uri = synved_form_path_uri();
	
	synved_form_wp_register_common_scripts();
}

function synved_form_admin_print_styles()
{
}

function synved_form_init()
{	
  //add_action('wp_ajax_synved_form', 'synved_form_ajax_callback');
  //add_action('wp_ajax_nopriv_synved_form', 'synved_form_ajax_callback');

	if (!is_admin())
	{
		add_action('wp_enqueue_scripts', 'synved_form_enqueue_scripts');
		//add_action('wp_print_styles', 'synved_form_print_styles');
	}
}

add_action('init', 'synved_form_init');
//add_action('admin_enqueue_scripts', 'synved_form_admin_enqueue_scripts');
//add_action('admin_print_styles', 'synved_form_admin_print_styles', 1);

