<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Backend extends MY_Controller {

    /**
     * Skip the authentification
     * @var bool
     */
    protected $skip_auth = FALSE;

    public function __construct()
    {
        parent::__construct();

        if (defined('ENVIRONMENT') && ENVIRONMENT == 'development') {
        	$this->output->enable_profiler(TRUE);
        }

        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->add_package_path(APPPATH.'third_party/formbuilder/');
        $this->load->library('formbuilder');
        $this->load->add_package_path(APPPATH.'third_party/ion-auth/');
        $this->load->library('ion_auth');
        $this->load->add_package_path(APPPATH.'third_party/gg_admin/');
        $this->load->library('gg_admin');
        $this->lang->load('gg_admin');
        
        if ($this->skip_auth === FALSE) {
            if (!$this->ion_auth->logged_in())
            {
                //redirect them to the login page
                redirect('admin/user/login', 'refresh');
            }
            elseif (!$this->ion_auth->is_admin())
            {
                //redirect them to the home page because they must be an administrator to view this
                redirect($this->config->item('base_url'), 'refresh');
            }
        }

        $this->layout = "layouts/backend";
    }

    public function _remap($method, $arguments) {
        $this->_build_meta();
        parent::_remap($method, $arguments);
    }

    /**
     * Allows for updating of meta data from child class
     * @param string $name 
     * @return void
     */
    public function update_meta($name)
    {
        $this->data['meta_title'] = $name . ' | ' . $this->data['meta_title'];
    }

    /**
     * build the meta tags for the layout template
     * @return void
     */
    private function _build_meta()
    {
    	$this->data['site_title'] = $this->config->item('site_title', 'gg_admin');
        $this->data['meta_title'] = $this->data['site_title'];
    	$this->data['section'] = strtolower(get_class($this));
        $this->data['is_logged_in'] = $this->ion_auth->logged_in();
    }

    /**
     * sets the style of the pagination
     * @return void
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