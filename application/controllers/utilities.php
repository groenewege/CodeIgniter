<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utilities extends CI_Controller {

	public function migrate()
	{
		$this->load->library('migration');

		if ( ! $this->migration->current())
		{
			show_error($this->migration->error_string());
		}
	}

}