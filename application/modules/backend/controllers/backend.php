<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends MY_Controller {
	function __construct()
    {
        parent::__construct();
    }

  public function index(){
    $data = array();
    $this->load->view("login", $data);    
  }
  
  public function home(){
    $this->load->view('default', $data);
  }
}
