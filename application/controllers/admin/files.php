<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	require_once(APPPATH.'third_party/gg_admin/controllers/backend.php');

	Class Files extends Backend {
	
		public function __construct()
    	{
        	parent::__construct();
        	$this->load->model('Page_file', 'crud_model');   
        	$this->set_option('list', array('title'));
        	$this->set_option('object_actions', array(	'up' => array(   'label'   => 'gg_up', 
        															     'url'     => 'up' ),
        												'down' => array( 'label'   => 'gg_down', 
        																 'url'     => 'down' )));
        	$this->set_option('edit',   
                array(  'page_id'       => array( 'rule' => '', 'type' => 'hidden'),
                        'title'         => array( 'rule' => 'required', 'type' => 'text'),
                        'file'          => array( 'rule' => 'required', 'type' => 'file', 'show' => 'full_path')
                ));   

            $this->set_option('rank_field', 'rank');
            $this->set_default_sort('rank');
            $this->set_parent_info('page');
    	}

        public function post_delete($deleted_object)
        {
            $deleted_object->clean_up();
        }

	}	