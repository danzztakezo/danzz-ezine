<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once ('application/modules/commons/models/common_model.php');

class Article_model extends Common_model{
  private $table_articles = "articles";
  private $table_article_categories = "articlecategories";
  private $table_categories = "categories";
  private $table_authors = "authors";
  
  function __construct(){
    parent::__construct($this->table_articles);
  }
  
  public function find_join($where = array(), $offset = 0, $limit = -1, $order_by = ""){
    if($order_by != "")
      $this->db->order_by($order_by);
    
    $this->db->select("*");
    $this->db->from($this->table_articles);
    $this->db->join($this->table_authors, $this->table_authors . ".id = " . $this->table_articles . ".author");
    $this->db->where($where);
    
    if($limit > -1)
      $this->db->limit($limit, $offset);
      
      
    return $this->db->get();
  }
}
?>