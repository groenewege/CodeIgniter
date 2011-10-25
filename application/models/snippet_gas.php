<?php if (! defined('BASEPATH')) exit('No direct script access');

class Snippet extends Gas {
	
	/**
     * An array of instances to retrieve by key
     */
    protected $collection = array();

    function _init()
    {
        $this->_fields = array(
          'id'       	=> Gas::field('auto'),
          'code'        => Gas::field('char[50]'),
          'value'       => Gas::field('char'),
          'info'        => Gas::field('char'),
          'type'        => Gas::field('char[15]'),
        );
    }

    /**
     * Gets an instance by key after populating the collection
     */
    public function retrieve_by_key($key)
    {
        $this->_populate();
        if ( isset($this->collection[$key]) ) {
            return $this->collection[$key];
        } else {
            return false;
        } 
    }

    private function _populate()
    {
        if (empty($this->collection)) {
            foreach ($this->select('id, code, value')->all() as $snippet) {
                $this->collection[$snippet->code] = $snippet->value;
            }
        }
    }


}