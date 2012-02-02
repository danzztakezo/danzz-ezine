<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Common_model extends CI_Model{
  
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
  
  public function save_or_update($data = array()){
    if(isset($data["id"])){
      $this->db->where("id", $data["id"]);
      $this->db->update($this->table_name, $data);
    }
    else{
      $this->db->insert($this->table_name, $data);
    }
  }
  
  public function save($data = array()){
    $this->db->insert($this->table_name, $data);
  }
  
  public function update($data = array()){
    $this->db->where("id", $data["id"]);
    $this->db->update($this->table_name, $data);
  }
  
  public function count($where = array()){
    $this->db->where($where);
    $this->db->from($this->table_name);
    return $this->db->count_all_results();
  }
}
?>