<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	require_once(APPPATH.'third_party/gg_admin/controllers/backend.php');

	Class Configurations extends Backend {
	
		public function __construct()
    	{
        	parent::__construct();
        	$this->crud_model = new Snippet();
        	$this->set_option('list', array('info'));
            $this->set_option('add', FALSE);
            $this->set_option('delete', FALSE);
        	$this->set_option('edit',   
        		array( 	'info'          => array( 'rule' => '', 'type' => 'plaintext'),
	        			'value'         => array( 'rule' => '', 'type' => 'dynamic')
                ));
        	$this->set_default_sort('id');
    	}
	}	