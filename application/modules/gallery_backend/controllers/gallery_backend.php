<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gallery_backend extends Backend_Controller {

  public function __construct(){
    $this->load->model('gallery_backend_model','g');
    $this->load->model('album_backend_model','al');
    $this->load->model('author_backend_model','au'); 
    $this->load->library('pagination');
  
  }

  public function index(){
    $config['base_url'] = base_url().'gallery_backend/index/';
    $config['total_rows'] = $this->db->count_all_results('albums');
    $config['per_page'] = 9;

    $this->pagination->initialize($config); 

    $data['rows']=$this->al->find(array(),$this->uri->segment(3),$config['per_page'],'id desc');
    $data['title_page']="Gallery";

    $this->load->view('index',$data);
  }

  public function add(){
    $request = $this->input->post();
    $path=parse_url(base_url());
    $data['path']=$path['path'];
    if(empty($request)){
      $data['title_page']="Tambah Gallery";
      $data['authors']=$this->au->find();
      $this->load->view("add",$data);
    }else{
      $this->g->save_gallery($request); 
    }
  }

  public function edit($id = null){
    $request = $this->input->post();
    $path=parse_url(base_url());
    $data['path']=$path['path'];
    if(empty($request)){
      $data['title_page']="Edit Gallery";
      $data['authors']=$this->au->find();
      $data['rows_a']=$this->al->find(array('id'=>$id),0,1,'id asc');
      $data['rows_g']=$this->g->find(array('albumid'=>$id),0,-1,'id asc');
      $data['id']=$id;
      $this->load->view("edit",$data);
    }else{
      $response=$this->g->update_gallery($id,$request);
      if($response){
        echo 0;
      }else{
        echo 1;
      }
    }
    
  }

  public function delete_gallery(){
    $request = $this->input->get();
    $img = $this->g->find($request,0,1,'id asc');
    if($this->g->destroy($request)){
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
    $del=$this->g->destroy_all($request['id']);
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