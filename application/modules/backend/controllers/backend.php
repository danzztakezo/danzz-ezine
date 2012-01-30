<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {

  public function index(){
    $data = array();
    $this->load->view("login", $data);    
  }
  
  public function home(){
    $this->load->view('default', $data);
  }
}
