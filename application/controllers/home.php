<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'controllers/frontend.php');

Class Home extends Frontend {

	public function index()
    {
        $this->load->library('formbuilder');
        $this->update_meta('Home');

        $this->load->library('pagination');
        $config = $this->_pagination_config();
        $config['base_url'] 	= site_url('home/index');
		$config['total_rows'] 	= 20;
		$config['per_page'] 	= 4;
		$config['uri_segment'] 	= 3;
		$config['num_links'] 	= 5;
		$this->pagination->initialize($config);
		$this->data['pagination'] 	= $this->pagination->create_links();
    }
}