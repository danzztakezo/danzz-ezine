<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gallery_backend_model extends Common_Model{
  
  function __construct(){
    parent::__construct("galleries");
  }

  public function save_gallery($data){
     $album=array(
        'name' => $data['name'],
        'intitle' => $data['intitle'],
        'picture' => $data['picture'],
        'thumb' => $data['thumb'],
        'indescription' => $data['incontent'],
        'author'  => $data['author']
     );
     if($this->db->insert('albums', $album)){
      $this->db->order_by("id", "desc"); 
      $this->db->limit(1);
      $alb=$this->db->get('albums')->row();
      $count=count($data['gallery_picture']);
      for($i=0;$i<$count;$i++){
        $gallery[]=array(
          'name'  => $data['gallery_name'][$i],
        'intitle'   => $data['gallery_title'][$i],
        'indescription' => $data['gallery_deskripsi'][$i],
        'albumid' => $alb->id,
        'picture' => $data['gallery_name'][$i],
        'thumb' => $data['gallery_thumb'][$i],
        'uploader'  => $data['author']
        );
      }
      $this->db->insert_batch('galleries', $gallery); 
     }
  }

  public function update_gallery($id,$data){
     $album=array(
        'name' => $data['name'],
        'intitle' => $data['intitle'],
        'picture' => $data['picture'],
        'thumb' => $data['thumb'],
        'indescription' => $data['incontent'],
        'author'  => $data['author']
     );
     $this->db->where('id',$id);
     $result=$this->db->update('albums',$album);
     if($result){
        $this->db->where('albumid',$id);
        $del = $this->db->delete('galleries'); 
        $count=count($data['gallery_picture']);
        for($i=0;$i<$count;$i++){
          $gallery[]=array(
            'name'  => $data['gallery_name'][$i],
            'intitle'   => $data['gallery_title'][$i],
            'indescription' => $data['gallery_deskripsi'][$i],
            'albumid' => $id,
            'picture' => $data['gallery_name'][$i],
            'thumb' => $data['gallery_thumb'][$i],
            'uploader'  => $data['author']
          );
        }
      $this->db->insert_batch('galleries', $gallery); 
      return true;
     }
     return false;
  }

  public function destroy_all($data){
    $result=$this->db->delete('galleries',array('albumid' => $data)); 
    if($result){
       $this->db->delete('albums',array('id' => $data)); 
      return true;
    }
    return false;
  }

  public function count_all(){
   return $this->db->count_all_results($this->table_name);
  }

}
?>