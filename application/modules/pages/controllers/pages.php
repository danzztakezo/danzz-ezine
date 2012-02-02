<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once ('application/modules/frontend/controllers/frontend.php');

class Pages extends Frontend {

  public function __construct(){
    parent::__construct();
  }
  
  public function index(){
    
  }
  
  /**
   * BOF FRONTEND METHOD
   * ----------------------------------------------------------------------------------------------------
   */
  
  public function organization_profile(){
    $this->load->model("page_model");
    $entity = $this->page_model->find_entity_by_id(1);
    
    $content = array(
      array(
      	"view" => "pages/f/common",
      	"data" => array(
      		"page_title" => $entity->intitle,
      		"page_content" => $entity->incontent)
      )
    );
    $this->display_pages($content);
  }
  
  public function vission_mission(){
    $this->load->model("page_model");
    $entity = $this->page_model->find_entity_by_id(4);
    
    $content = array(
    array(
          	"view" => "pages/f/common",
          	"data" => array(
          		"page_title" => $entity->intitle,
          		"page_content" => $entity->incontent)
    )
    );
    $this->display_pages($content);  
  }
  
  public function history(){
    $this->load->model("page_model");
    $entity = $this->page_model->find_entity_by_id(3);
    
    $content = array(
    array(
          	"view" => "pages/f/common",
          	"data" => array(
          		"page_title" => $entity->intitle,
          		"page_content" => $entity->incontent)
        )
    );
    $this->display_pages($content);  
  }
  
  public function contact(){
    $this->load->model("page_model");
    $entity = $this->page_model->find_entity_by_id(5);
    
    $content = array(
    array(
      	"view" => "pages/f/contact",
      	"data" => array(
      		"page_title" => $entity->intitle,
      		"page_content" => $entity->incontent)
      )
    );
    $this->display_pages($content);
  }
  
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
