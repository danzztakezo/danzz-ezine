<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages_Backend extends Backend_Controller {

  function __construct(){
    $this->load->model('page_backend_model','p');
  }

  public function index(){
    $data['rows']=$this->p->find();
    $data['title_page']="PROFILES";
    $this->load->view('index',$data);
  }

  public function updated_order(){
    $data=$this->input->post('recordsArray');
    $this->p->update_order($data);
  }

}