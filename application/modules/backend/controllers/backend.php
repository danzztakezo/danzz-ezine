<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends Backend_Controller {
	function __construct()
    {
        parent::__construct();
    }

  public function index(){
    
  }
  
  public function login(){
    if((!$this->input->post('temail') =='') && (!$this->input->post('tpassword')=='') ){
      $data['email']=$this->input->post('temail');
      $data['password']=$this->encode($this->input->post('tpassword'));
      $rows=$this->u->find($data);
      if(count($rows)>0){
        $this->session->set_userdata('user_login',$rows[0]->email);
        redirect('backend/dashboard');
      }
    }
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect('backend');
  }

  public function dashboard(){
    $this->load->view('default');
  }

}
