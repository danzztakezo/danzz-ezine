<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Common_Model extends CI_Model{
  
  private $table_name;
  
  public function __construct($table_name){
    parent::__construct();
    $this->table_name = $table_name;
  }
  
  public function find($where = array(), $offset = 0, $limit = -1, $order_by = ""){
    if($order_by != "")
      $this->db->order_by($order_by);
    
    if($limit == -1)
      return $this->db->get_where($this->table_name, $where)->result();
    else
      return $this->db->get_where($this->table_name, $where, $limit, $offset)->result();
  }
  
  public function find_entity_by_id($id = 0){
    return $this->db->get_where($this->table_name, array("id" => $id))->row();
  }
  
  public function find_entity_by_name($name = 0){
    return $this->db->get_where($this->table_name, array("name" => $id))->row();
  }
}
?>