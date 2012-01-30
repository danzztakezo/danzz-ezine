<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once ('application/modules/frontend/controllers/frontend.php');

class Articles extends Frontend {

  public function __construct(){
    parent::__construct();
  }
  
  public function index(){
    
  }
  
  /**
   * BOF FRONTEND METHOD
   * ----------------------------------------------------------------------------------------------------
   */
  
  public function display_pages($content = array(), $header = array(), $footer = array(), $left = array(), $right = array()){
    $this->display($content, $header, $footer, $left, $right);
  }
  
  /**
  * EOF FRONTEND METHOD
  * ----------------------------------------------------------------------------------------------------
  */
  
  /**
   * BOF BACKEND METHOD
   * ----------------------------------------------------------------------------------------------------
   */
  
  
  /**
  * EOF BACKEDN METHOD
  * ----------------------------------------------------------------------------------------------------
  */
}
?>
