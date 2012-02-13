<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class articles_backend extends Backend_Controller {

  public function __construct(){
    $this->load->model('articles/Article_model','a');
    $this->load->model('articles/Article_category_model','ac');
    $this->load->model('articles/Category_model','c');
     $this->load->model('gallery_backend/author_backend_model','au'); 
    //$this->load->library('Datatables');
  }

  public function add(){
    $request = $this->input->post();
    if(empty($request)){
      $data['title_page']="Tambah Artikel";
      $data['authors']=$this->au->find();
      $data['category']=$this->c->find();
      $data['form_action'] = base_url()."articles_backend/add";
      $this->load->view('add',$data);
    }else{
      $save=$this->a->save_data($request);
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
      $data['title_page']="Edit Artikel";
      $data['authors']=$this->au->find();
      $data['category']=$this->c->find();
      $data['row']=$this->a->find(array('id'=>$id),0,1,'id asc');
      $data['form_action'] = base_url()."articles_backend/edit/".$id;
      $this->load->view('edit',$data);
    }else{
      $response=$this->a->update_article($id,$request);
      if($response){
        echo 0;
      }else{
        echo 1;
      }
    }
  }

  public function del(){
    $request = $this->input->get();
    if($this->ac->destroy(array('articleid' => $request['id']))){
      $this->a->destroy($request);
      echo "success";  
    }else{
      echo "gagal";
    }
  }

  public function index(){
  	$data['title_page']="ARTIKEL";
  	$data['rows']=$this->a->articles_all(array(),0,-1,'id desc');
  	$this->load->view("index",$data);
  }

  public function list_data(){
  	$this->datatables
    ->select('id, intitle, incontent, entrytime,author')
    ->from('articles');
   $data['result'] = $this->datatables->generate();
   // echo $this->datatables->generate(); 
    $this->load->view('ajax', $data);
  }



}