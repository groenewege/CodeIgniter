<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Frontend extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        if (defined('ENVIRONMENT') && ENVIRONMENT == 'development') {
        	$this->output->enable_profiler(TRUE);
        }
        $this->load->add_package_path(APPPATH.'third_party/gas_orm/');
        $this->load->library('gas');
        $this->layout = "layouts/frontend";
    }

    public function _remap($method, $arguments) {
        $this->_build_meta();
        $this->data['show_js'] = TRUE;
        parent::_remap($method, $arguments);
    }

    public function update_meta($name)
    {
    	$this->data['meta_title'] = $name . ' | ' . $this->data['meta_title'];
    	$this->data['title'] .= ' : ' . $name;
    	$this->data['meta_description'] =  $this->data['title'];
    }

    /**
     * build the meta tags for the layout template
     */
    private function _build_meta()
    {
    	$snippet = new Snippet();
    	$this->data['meta_title'] = $snippet->retrieve_by_key('meta_title');
    	$this->data['meta_description'] = $snippet->retrieve_by_key('meta_description');
    	$this->data['meta_keywords'] = $snippet->retrieve_by_key('meta_keywords');

    	$this->data['title'] = $this->data['meta_title'];
    	$this->data['section'] = strtolower(get_class($this));
    }

    /**
     * set the style of the pagination
     */
    protected function _pagination_config()
    {
        $config = array();
        $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';
        $config['first_link']       = '';
        $config['first_tag_open']   = '';
        $config['first_tag_close']  = '';
        $config['last_link']        = '';
        $config['last_tag_open']    = '';
        $config['last_tag_close']   = '';
        $config['cur_tag_open']     = '<li class="active"><a href="#">';
        $config['cur_tag_close']    = '</a></li>';
        $config['prev_link']        = '&laquo;';
        $config['prev_tag_open']    = '<li class="prev">';
        $config['prev_tag_close']   = '</li>';
        $config['next_link']        = '&raquo;';
        $config['next_tag_open']    = '<li class="next">';
        $config['next_tag_close']   = '</li>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        return $config;
    }
}