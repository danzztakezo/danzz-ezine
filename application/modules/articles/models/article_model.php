<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//require_once ('application/modules/commons/models/common_model.php');

class Article_model extends Common_Model{
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

  public function save_data($data){
    //insert article
    $article=array(
        'type' => $data['type'],
        'intitle' => $data['intitle'],
        'incontent' => $data['incontent'],
        'author'  => $data['author'],
        'entrytime' => date('Y-m-d h:m:s')
     );
     if($this->db->insert('articles', $article)){
      $this->db->order_by("id", "desc"); 
      $this->db->limit(1);
      $alb=$this->db->get('articles')->row();
      $count=count($data['category']);
      for($i=0;$i<$count;$i++){
        $cat[]=array(
          'articleid' => $alb->id,
          'categoryid'  => $data['category'][$i]
        );
      }
      $this->db->insert_batch('articlecategories', $cat); 
      return true;
     }
     return false;
    // insert category article
  }

  public function articles_all($where){
    $this->db->select(' a.id,a.incontent,a.intitle,b.fullname,a.entrytime');
    $this->db->from('articles a ');
    $this->db->join('authors b', 'b.id = a.author');
    $this->db->where($where);
    $query = $this->db->get();

    foreach ($query->result() as $row)
    {
      $data[]= array(
          'id' => $row->id,
          'incontent' => $row->incontent,
          'intitle' => $row->intitle,
          'author'  => $row->fullname,
          'category'  => $this->category_article($row->id) ,
          'entrytime' => $row->entrytime

      );
    }
    return $data;
  }

  public function category_article($id){
    $this->db->select(' b.name');
    $this->db->from('articlecategories a ');
    $this->db->join('categories b', 'b.id = a.categoryid');
    $this->db->where('a.articleid',$id);
    $query = $this->db->get()->result_array();
    if(count($query) > 0){
      foreach($query as $d){
        $data[]=$d['name'];
      }
    $implode = implode(' , ',$data);
    return $implode;
    }
   
  }

  public function update_article($id,$data){
    $article=array(
        'type' => $data['type'],
        'intitle' => $data['intitle'],
        'incontent' => $data['incontent'],
        'author'  => $data['author'],
        'entrytime' => date('Y-m-d h:m:s')
     );
     $this->db->where('id',$id);
     $result=$this->db->update('articles',$article);
     if($result){
        $this->db->where('articleid',$id);
        $del = $this->db->delete('articlecategories'); 
        $count=count($data['category']);
        for($i=0;$i<$count;$i++){
         $cat[]=array(
          'articleid' => $id,
          'categoryid'  => $data['category'][$i]
        );
        }
      $this->db->insert_batch('articlecategories', $cat); 
      return true;
     }
     return false;
  }
}
?>