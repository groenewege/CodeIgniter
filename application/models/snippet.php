<?php if (! defined('BASEPATH')) exit('No direct script access');

class Snippet extends MY_Model {
  
  public $id = '';
  public $code = '';
  public $value = '';
  public $info = '';
  public $type = '';


  /**
   * An array of instances to retrieve by key
   */
  protected $collection = array();

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
      $query = $this->db->select('code, value')->get($this->_table);
      foreach ($query->result(get_class($this)) as $snippet) {
        $this->collection[$snippet->code] = $snippet->value;
      }
    }
  }

}