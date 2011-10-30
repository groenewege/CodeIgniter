<?php if (! defined('BASEPATH')) exit('No direct script access');

class Page_file extends Gas {
	
	public $relations = array(
                            'belongs_to' => array('page' => array()),
                        );

    function _init()
    {
        $this->_fields = array(
          'id'              => Gas::field('auto'),
          'page_id'         => Gas::field('int[11]'),
          'title'           => Gas::field('char[250]'),
          'file'            => Gas::field('char'),
          'rank'            => Gas::field('int[11]'),
        );
    }

    public function full_path()
    {
        if ($this->file) {
            return '/uploads/'.$this->file;
        }
        return false;
    }

    public function clean_up()
    {
        if ($this->file) {
            @unlink('.'.$this->full_path());
        }
    }

}