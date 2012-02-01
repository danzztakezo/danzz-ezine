<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// require_once ('application/modules/commons/models/common_model.php');

class Page_Backend_model extends Common_model{
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