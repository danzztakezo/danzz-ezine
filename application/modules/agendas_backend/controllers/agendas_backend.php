<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class agendas_backend extends Backend_Controller {

  public function __construct(){
    $this->load->model('agendas_model_backend','a');
  }

  public function add(){
    $request = $this->input->post();
    if(empty($request)){
      $data['title_page']="Tambah Agenda";
      $data['form_action'] = base_url()."agendas_backend/add";
      $this->load->view('add',$data);
    }else{
      $new=array(
          "agendastime " => unix_to_human(strtotime($request['agendastime']),true,'us'),
          "indescription " =>$request['indescription'] ,
          "intitle" => $request['intitle'],
          "name  " => $request['name'],
          "venue " => $request['venue']
        );
      $save=$this->a->save($new);
      if($save){
        echo 0;
      }else{
        echo 1;
      }
    }
  }

  public function edit($id){
    $request = $this->input->post();
    if(empty($request)){
      $data['title_page']="Edit Agenda";
      $data['row']=$this->a->find(array('id'=>$id),0,1,'id asc');
      $data['form_action'] = base_url()."agendas_backend/edit/".$id;
      $this->load->view('edit',$data);
    }else{
      $response=$this->a->update_attribute(array('id'=>$id),$request);
      if($response){
        echo 0;
      }else{
        echo 1;
      }
    }
  }

  public function del(){
   $request=$this->input->get();
   if($del=$this->a->destroy($request)){
      echo "success";  
    }else{
      echo "gagal";
    }
  }

  public function index(){
  	$data['title_page']="Agenda";
  	$data['rows']=$this->a->find(array(),0,-1,'agendastime desc');
  	$this->load->view("index",$data);
  }

  
}