<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class page_backend_model extends Common_Model{
  function __construct(){
    parent::__construct("pages");
  }

  function update_order($data){
    if(count($data)>0){
      foreach($data as $index => $d){
        $up=array('order' => $index );
        $this->db->where('id',$d);
        $this->db->update('pages',$up);
      }
    }
  }
}
?>