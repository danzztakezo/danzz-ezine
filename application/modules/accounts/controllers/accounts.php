<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accounts extends CI_Controller {

  public function index(){
    
  }
  
  public function login(){
    $this->load->view("backend/default");
  }
}
