<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* GG Admin
*
*/

class Gg_admin
{

	protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
		$this->ci->load->config('gg_admin', TRUE);
		$this->ci->load->helper('gg_admin');
	}

}