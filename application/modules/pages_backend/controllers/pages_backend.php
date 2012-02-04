<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pages_backend extends Backend_Controller {

  public function __construct(){
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

  public function add(){
    $request = $this->input->post();
    if(empty($request)){
      $this->load->view("add");
    }else{
      $save=$this->p->save($request);
      if($save){
        echo 0;
      }else{
        echo 1;
      }
    }
  }

  public function edit($id=null){
    $request = $this->input->post();
   
    
    if(empty($request)){
      $rows['row']=$this->p->find_entity_by_id($id);
      $rows['id']=$id;
      $this->load->view("edit",$rows);
    }else{
      $id=array('id'=> $id);
      $response=$this->p->update_attribute($id,$request);
      if($response){
        echo 0;
      }else{
        echo 1;
      }

    }
  }

  public function del(){
    $request=$this->input->get();
    $del=$this->p->destroy($request);

  }

}