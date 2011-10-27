<?php if (! defined('BASEPATH')) exit('No direct script access');

class Page_image extends Gas {
	
	public $relations = array(
                            'belongs_to' => array('page' => array()),
                        );

    function _init()
    {
        $this->_fields = array(
          'id'              => Gas::field('auto'),
          'page_id'         => Gas::field('int[11]'),
          'title'           => Gas::field('char[250]'),
          'image'           => Gas::field('char'),
          'rank'            => Gas::field('int[11]'),
        );
    }

    public function get_thumb()
    {
        if ($this->image) {
            return img('uploads/thumbs/'.$this->image);
        }
        return '';
    }

}