<?php if (! defined('BASEPATH')) exit('No direct script access');

class Page extends Gas {
	
	 public $relations = array(
                            'has_one' => array('page_image' => array()),
                        );

    function _init()
    {
        $this->_fields = array(
          'id'              => Gas::field('auto'),
          'title'           => Gas::field('char[250]', array('required')),
          'content'         => Gas::field('char'),
          'created_at'      => Gas::field('char'),
          'status'          => Gas::field('int[1]'),
        );

        $this->status = 1;
    }

    public function get_date()
    {
        return date('F d Y', strtotime($this->created_at));
    }

}