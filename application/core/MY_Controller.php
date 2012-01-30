<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* The MX_Controller class is autoloaded as required */

class MY_Controller extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $logged=$this->session->userdata('user_login');
    $segment=$this->uri->segment(1);
    if($logged==0 and $segment != 'login_form'){
    	//redirect('backend/index');
    }
      
    //model loader
    
  }
}