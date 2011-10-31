<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	require_once(APPPATH.'third_party/gg_admin/controllers/backend.php');

	Class Images extends Backend {
	
		public function __construct()
    	{
        	parent::__construct();
        	$this->load->model('Page_image', 'crud_model');   
            $this->set_option('per_page', 3);
        	$this->set_option('list', array('image'));
        	$this->set_option('accessors', array('image' => 'get_thumb'));
        	$this->set_option('object_actions', array(	'up' => array(   'label'   => 'gg_up', 
        															     'url'     => 'up' ),
        												'down' => array( 'label'   => 'gg_down', 
        																 'url'     => 'down' )));
        	$this->set_option('edit',   
                array(  'page_id'       => array( 'rule' => '', 'type' => 'hidden'),
                        'title'         => array( 'rule' => '', 'type' => 'text'),
                        'image'         => array( 'rule' => 'required', 'type' => 'image', 'show' => 'small_path')
                ));   

            $this->load->model('Page_image', 'crud_model');

            $this->set_option('rank_field', 'rank');
            $this->set_default_sort('rank');
            $this->set_parent_info('page');
    	}

        public function post_delete($deleted_object)
        {
            $deleted_object->clean_up();
        }

        public function handle_image($fileInfo = array())
        {
            $this->load->library('image_lib');

            // Resizing
            $config['source_image'] = $fileInfo['full_path'];
            $config['maintain_ratio'] = TRUE;
            $config['master_dim'] = 'auto';
            
            // Resizing LARGE
            if ($fileInfo['image_width'] > 800 || $fileInfo['image_height'] > 600) {
                $config['width'] = 800;
                $config['height'] = 600;
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
            }
            
            // Resizing SMALL
            $config['new_image'] = $fileInfo['file_path'] . 'thumbs/';
            $config['width'] = 150;
            $config['height'] = 150;
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
        }

	}	