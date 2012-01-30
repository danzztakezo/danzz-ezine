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
  
  public function profile_organisasi(){
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
  
  public function visi_misi(){
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
  
  public function sejarah(){
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
  
  public function display_pages($content = array()){
    $this->display($content);
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
