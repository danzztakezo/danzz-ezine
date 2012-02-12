<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class articles_backend extends Backend_Controller {

  public function __construct(){
    $this->load->model('articles/Article_model','a');
    $this->load->model('articles/Article_category_model','ac');
    $this->load->model('articles/Category_model','c');
    //$this->load->library('Datatables');
  }

  public function index(){
  	$data['title_page']="ARTIKEL";
  	
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