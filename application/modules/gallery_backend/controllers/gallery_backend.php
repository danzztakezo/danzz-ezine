<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gallery_backend extends Backend_Controller {

  public function __construct(){
    $this->load->model('gallery_backend_model','g');
    $this->load->model('album_backend_model','al');
    $this->load->model('author_backend_model','au');   
  }

  public function index(){
    $data['rows']=$this->al->find(array(),0,6,'id desc');
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
      
    }
  }

}