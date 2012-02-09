<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auction_items_backend extends Backend_Controller {

  public function __construct(){
    $this->load->model('auction_items_model_backend','ai');
    $this->load->model('picture_items_model_backend','pi');
    $this->load->model('warehouse_model_backend','w'); 
    $this->load->library('pagination');
  
  }

  public function index(){
    $config['base_url'] = base_url().'auction_items_backend/index/';
    $config['total_rows'] = $this->db->count_all_results('rbitems');
    $config['per_page'] = 9;
    $this->pagination->initialize($config); 
    $data['rows']=$this->ai->find(array(),$this->uri->segment(3),$config['per_page'],'id desc');
    $data['title_page']="Barang Lelang";
    $this->load->view('index',$data);
  }

  public function add(){
    $request = $this->input->post();
    $path=parse_url(base_url());
    $data['path']=$path['path'];
    if(empty($request)){
      $data['title_page']="Tambah Barang Lelang";
      $data['warehouse']=$this->w->find(array(),0,-1);
      $this->load->view("add",$data);
    }else{
      $this->ai->save_auction_items($request); 
    }
  }

  public function edit($id = null){
    $request = $this->input->post();
    $path=parse_url(base_url());
    $data['path']=$path['path'];
    if(empty($request)){
      $data['title_page']="Edit Barang Lelang";
      $data['warehouse']=$this->w->find(array(),0,-1);
      $data['rows_a']=$this->ai->find(array('id'=>$id),0,1,'id asc');
      $data['rows_g']=$this->pi->find(array('itemid'=>$id),0,-1,'id asc');
      $data['id']=$id;
      $this->load->view("edit",$data);
    }else{
      $response=$this->ai->update_auction_items($id,$request);
      if($response){
        echo 0;
      }else{
        echo 1;
      }
    }
    
  }

  public function delete_picture(){
    $request = $this->input->get();
    $img = $this->pi->find($request,0,1,'id asc');
    if($this->pi->destroy($request)){
      // $path=parse_url(base_url());
      // $dpath=$path['path'];
      // $image_tumb="".$dpath."images/galleries/Thums/".$img[0]->picture."";
      // $image="".$dpath."images/galleries/".$img[0]->picture."";
      // unlink('images/galleries/Thums/alg_chris_staniforth_video_games.jpg');
      // unlink("$image");
      echo "success";  
    }else{
      echo "gagal";
    }
  }

  public function del(){
    $request=$this->input->get();
    $del=$this->ai->destroy_all($request['id']);
    if($del){
      echo "success";
    }else{
      echo "gagal";  
    }
  }

  public function detail($id){
    if(!empty($id)){
      $data['title_page']="Detail Gallery";
      $this->load->view('detail',$data);
    }else{
      
    }
  }

}