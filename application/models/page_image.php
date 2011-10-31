<?php if (! defined('BASEPATH')) exit('No direct script access');

class Page_image extends MY_Model {
	
	public $id = '';
    public $page_id = '';
    public $title = '';
    public $image = '';
    public $rank = '';

    public $relations = array(
                            'belongs_to' => array('page' => array()),
                        );

    public function full_path()
    {
        if ($this->image) {
            return '/uploads/'.$this->image;
        }
        return false;
    }

    public function small_path()
    {
        if ($this->image) {
            return '/uploads/thumbs/'.$this->image;
        }
        return false;
    }

    public function get_thumb()
    {
        if ($this->image) {
            return img('uploads/thumbs/'.$this->image);
        }
        return '';
    }

    public function clean_up()
    {
        if ($this->image) {
            @unlink('.'.$this->full_path());
            @unlink('.'.$this->small_path());
        }
    }

}