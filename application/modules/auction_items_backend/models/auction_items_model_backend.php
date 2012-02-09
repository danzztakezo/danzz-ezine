<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auction_items_model_backend extends Common_Model{
  function __construct(){
    parent::__construct("rbitems");
  }
  public function save_auction_items($data){
     $items=array(
        'name' => $data['name'],
        'intitle' => $data['intitle'],
        'picture' => $data['picture'],
        'thumb' => $data['thumb'],
        'indescription' => $data['incontent'],
        'warehouseid'  => $data['author']
     );
     if($this->db->insert('rbitems', $items)){
      $this->db->order_by("id", "desc"); 
      $this->db->limit(1);
      $alb=$this->db->get('rbitems')->row();
      $count=count($data['gallery_picture']);
      for($i=0;$i<$count;$i++){
        $gallery[]=array(
          'name'  => $data['gallery_name'][$i],
        'intitle'   => $data['gallery_title'][$i],
        'indescription' => $data['gallery_deskripsi'][$i],
        'itemid'  => $alb->id,
        'picture' => $data['gallery_name'][$i],
        'thumb' => $data['gallery_thumb'][$i]       
        );
      }
      $this->db->insert_batch('rbitempictures', $gallery); 
     }
  }

  public function update_auction_items($id,$data){
    $items=array(
        'name' => $data['name'],
        'intitle' => $data['intitle'],
        'picture' => $data['picture'],
        'thumb' => $data['thumb'],
        'indescription' => $data['incontent'],
        'warehouseid'  => $data['author']
    );
     $this->db->where('id',$id);
     $result=$this->db->update('rbitems',$items);
     if($result){
        $this->db->where('itemid',$id);
        $del = $this->db->delete('rbitempictures'); 
        $count=count($data['gallery_picture']);
        for($i=0;$i<$count;$i++){
          $gallery[]=array(
            'name'  => $data['gallery_name'][$i],
            'intitle'   => $data['gallery_title'][$i],
            'indescription' => $data['gallery_deskripsi'][$i],
            'itemid' => $id,
            'picture' => $data['gallery_name'][$i],
            'thumb' => $data['gallery_thumb'][$i]           
          );
        }
      $this->db->insert_batch('rbitempictures', $gallery); 
      return true;
     }
     return false;
  }

  public function destroy_all($data){
    $result=$this->db->delete('rbitempictures',array('itemid' => $data)); 
    if($result){
       $this->db->delete('rbitems',array('id' => $data)); 
      return true;
    }
    return false;
  }

  public function count_all(){
   return $this->db->count_all_results($this->table_name);
  }

  
}
?>