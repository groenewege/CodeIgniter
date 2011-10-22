<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'third_party/gg_admin/controllers/backend.php');

Class Home extends Backend {

	public function index()
    {
        $this->update_meta($this->lang->line('gg_administration'));
    }
}