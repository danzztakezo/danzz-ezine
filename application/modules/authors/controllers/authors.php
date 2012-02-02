<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once ('application/modules/frontend/controllers/frontend.php');

class Authors extends Frontend {

  public function __construct(){
    parent::__construct();
  }
  
  public function index(){
    
  }
  
  /**
   * BOF FRONTEND METHOD
   * ----------------------------------------------------------------------------------------------------
   */
  
  public function organization_chart(){
    $content = array(
    array(
      	"view" => "authors/f/organization_chart",
      	"data" => array()
    ));
    $this->display_pages_noleftright($content);
  }
  
  public function display_pages($content = array(), $header = array(), $footer = array(), $left = array(), $right = array()){
    $this->display($content, $header, $footer, $left, $right);
  }
  
  public function display_pages_noleftright($content = array(), $header = array(), $footer = array()){
    $this->display_noleftright($content, $header, $footer);
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
