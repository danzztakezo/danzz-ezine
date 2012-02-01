<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* The MX_Controller class is autoloaded as required */

class Backend_Controller extends MX_Controller
{
  function __construct()
  {
     parent::__construct();
     $this->load->model('backend/user','u');
     $logged=$this->session->userdata('user_login');
     $segment=$this->uri->segment(2);
     echo $this->cek_email($logged);
     if(empty($logged) and ($this->cek_email($logged))==false){
    	 $this->load->view('backend/login');
     }
    
  }

  private function cek_email($email){
    if(!empty($email)){
      $where['email']=$this->encode($email);
      $rows=$this->u->find($where);
      if(count($rows)>0){
        $data=true;
      }else{
        $data=false;
      }
    }else{
      $data=false;
    }
    return $data;
  }

  public function encode($pass){
    $salt=$this->config->item('encryption_key');
     if (!empty($salt) ||!empty($pass) ){
          $data = md5($pass."".$salt);
      }
      return $data;
  }

}