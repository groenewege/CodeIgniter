<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'controllers/frontend.php');

Class Home extends Frontend {

	public function index()
    {
        $this->load->library('formbuilder');
        $this->update_meta('Home');
    }
}