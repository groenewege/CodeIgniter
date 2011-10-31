<?php if (! defined('BASEPATH')) exit('No direct script access');

class Page extends MY_Model {
	
    public $id = '';
    public $title = '';
    public $content = '';
    public $created_at = '';
    public $status = '1';

    public $relations = array(
                            'has_many' => array(  'page_image' => array(),
                                                  'page_file' => array() ),
                        );

    public function get_date()
    {
        return date('F d Y', strtotime($this->created_at));
    }

}