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
    $request=$this->input->post();
    $save=$this->p->save($request);
     if($save){
       $rows=$this->p->find($request,"id desc");
       echo "<li id='recordsArray_".$rows[0]->id."'> ".$rows[0]->name."";
       echo "<div>".$rows[0]->incontent."</div>";
       echo "</li>";
     }
  }

  public function del(){
    $request=$this->input->get();
    $del=$this->p->destroy($request);

  }

}