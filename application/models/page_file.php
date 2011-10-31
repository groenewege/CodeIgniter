<?php if (! defined('BASEPATH')) exit('No direct script access');

class Page_file extends MY_Model {
	
	public $id = '';
    public $page_id = '';
    public $title = '';
    public $file = '';
    public $rank = '';


    public $relations = array(
                            'belongs_to' => array('page' => array()),
                        );

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