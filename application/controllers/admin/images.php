<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	require_once(APPPATH.'third_party/gg_admin/controllers/backend.php');

	Class Images extends Backend {
	
		public function __construct()
    	{
        	parent::__construct();
        	$this->crud_model = new Page_image();
            $this->set_option('per_page', 3);
        	$this->set_option('list', array('image'));
        	$this->set_option('accessors', array('image' => 'get_thumb'));
        	$this->set_option('object_actions', array(	'up' => array(   'label'   => 'gg_up', 
        															     'url'     => 'up' ),
        												'down' => array( 'label'   => 'gg_down', 
        																 'url'     => 'down' )));
        	$this->set_option('edit',   
                array(  'page_id'       => array( 'rule' => '', 'type' => 'hidden'),
                        'title'         => array( 'rule' => 'required', 'type' => 'text'),
                        'image'         => array( 'rule' => '', 'type' => 'image', 'show' => 'small_path')
                ));   

            $this->set_default_sort('rank');
            $this->set_parent_info('page');
    	}

        public function post_delete($deleted_object)
        {
            $deleted_object->clean_up();
        }

	}	