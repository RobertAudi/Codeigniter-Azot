<?php defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('css_link_tag'))
{
    /**
     * Creates a css link tag
     *
     * @param string $uri The URI to the css file inside the assets folder
     * @return string The css link tag ready to be echo-ed
     * @author Aziz Light
     */
	function css_link_tag($uri = '')
	{
		$ci = get_instance();
        $ci->load->helper('url');
		$ci->config->load('azot');
		$assets_folder = $ci->config->item('assets_folder');
		$css_folder = $ci->config->item('css_folder');
		
		if (empty($assets_folder) || empty($uri))
		{
			return '';
		}
		
		return '<link rel="stylesheet" href="' . base_url() . $assets_folder . '/' . $css_folder . '/' . $uri . '">';
	}
}

if (!function_exists('jquery_include_tag'))
{
    /**
     * Creates a javascript include tag that points to the Google CDN's
     * version of jQuery. Takes a version as parameter.
     *
     * @param string $version The version of jQuery to include
     * @return string The javascript link tag
     * @author Aziz Light
     */
	function jquery_include_tag($version = '1.8.1')
	{
		return '<script src="//ajax.googleapis.com/ajax/libs/jquery/' . $version . '/jquery.min.js"></script>';
	}
}

if (!function_exists('jqueryui_include_tag'))
{
    /**
     * Creates a javascript include tag that points to the Google CDN's
     * version of jQuery UI. Takes a version as parameter
     *
     * @param string $version The version of jQuery UI.
     * @return string The javascript include tag
     * @author Aziz Light
     */
	function jqueryui_include_tag($version = '1.8.23')
	{
		return '<script src="//ajax.googleapis.com/ajax/libs/jqueryui/' . $version . '/jquery-ui.min.js"></script>';
	}
}

if (!function_exists('javascript_include_tag'))
{
    /**
     * Creates a javascript include tag that points to the specified URI.
     *
     * @param string $uri The URI to the javascript file inside the assets folder.
     * @return string The javascript include tag
     * @author Aziz Light
     */
	function javascript_include_tag($uri = '')
	{
		$ci = get_instance();
        $ci->load->helper('url');
		$ci->config->load('azot');
		$assets_folder = $ci->config->item('assets_folder');
		$js_folder = $ci->config->item('js_folder');
		
		if (empty($assets_folder) || empty($uri))
		{
			return '';
		}
		
		return '<script src="' . base_url() . $assets_folder . '/' . $js_folder . '/' . $uri . '"></script>';
	}
}

/* End of file azot_helper.php */
/* Location: ./application/helpers/azot_helper.php */