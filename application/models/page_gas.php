<?php if (! defined('BASEPATH')) exit('No direct script access');

class Page extends Gas {
	
	function _init()
    {
        $this->_fields = array(
          'id'              => Gas::field('auto'),
          'title'           => Gas::field('char[250]'),
          'content'         => Gas::field('char'),
          'created_at'      => Gas::field('char'),
          'status'          => Gas::field('int[1]'),
        );
    }

    public function get_date()
    {
        return date('F d Y', strtotime($this->created_at));
    }

}