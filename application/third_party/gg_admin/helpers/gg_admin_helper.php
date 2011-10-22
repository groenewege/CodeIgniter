<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * GG Admin Helpers
 * 
 */

/**
 * Translates and escapes with htmlentities
 * @param	string
 * @return	string
 */
if ( ! function_exists('__'))
{
	function __($key)
	{
		$CI =& get_instance();
		$CI->lang->load('gg_admin');
		return htmlentities($CI->lang->line($key), ENT_QUOTES, 'utf-8');
	}
}
