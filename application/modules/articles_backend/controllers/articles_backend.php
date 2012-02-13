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
    $data['title_page']="Tambah ARTIKEL";
    $data['authors']=$this->au->find();
    $data['category']=$this->c->find();
    $this->load->view('add',$data);
  }

  public function index(){
  	$data['title_page']="ARTIKEL";
  	$data['rows']=$this->a->find(array(),0,-1,'id desc');
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