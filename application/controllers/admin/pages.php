<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	require_once(APPPATH.'third_party/gg_admin/controllers/backend.php');

	Class Pages extends Backend {
	
		public function __construct()
    	{
        	parent::__construct();
        	$this->crud_model = new Page();
        	$this->set_option('per_page', 3);
        	$this->set_option('list', array('title', 'created_at'));
        	$this->set_option('labels', array('created_at' => 'Date'));
        	$this->set_option('accessors', array('created_at' => 'get_date'));
        	$this->set_option('object_actions', array(	'images' => array('label'   => 'gg_images_action', 
        																  'url'     => 'images' ),
        												'files' => array('label'   => 'gg_files_action', 
        																 'url'     => 'files' )));
        	$this->set_option('search', 'title');
        	$this->set_option('edit',   
        		array( 	'status'        => array( 'rule' => '', 'type' => 'boolean'),
	        			'title'  		=> array( 'rule' => 'required', 'type' => 'text'),
        				'content'       => array( 'rule' => '', 'type' => 'tinymce'),
                      	'created_at'    => array( 'rule' => '', 'type' => 'date')
                ));
        	$this->set_default_sort('title');
    	}

    	public function images()
    	{
    		$parent_id = $this->uri->segment($this->uri->total_segments());
            $this->clear_url_vals();
    		$this->set_parent_id($parent_id);
    		redirect( list_url( $this->url_vals, 'images/index', FALSE ) );
    	}

        /**
        * Post process the $details array 
        * @param   array   $details    the $details that will be saved
        * @return  array   the modified $details array
        */
        protected function form_proccess($details)
        {
            $details['created_at'] =    $this->input->post('created_at_year').'-'.
                                        $this->input->post('created_at_month').'-'.
                                        $this->input->post('created_at_day');
            return $details;
        }

	}	