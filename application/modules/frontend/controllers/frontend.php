<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend extends CI_Controller {

  public function __construct(){
    parent::__construct();
  }
  
  public function index(){
    $this->home();
  }
  
  public function home(){
    $this->display();
  }
  
  public function display($content = array(), $header = array(), $footer = array(), $left = array(), $right = array()){
    
    # PREPARE HEADER
    $data['_header'] = $this->get_default_header();
    if(count($header) > 0) $data['_header'] = $header;
    
    # PREPARE FOOTER
    $data['_footer'] = $this->get_default_footer();
    if(count($footer) > 0) $data['_footer'] = $footer;
    
    # PREPARE LEFT
    $data['_left'] = $this->get_default_left();
    if(count($left) > 0) $data['_left'] = $left;
    
    # PREPARE RIGHT
    $data['_right'] = $this->get_default_right();
    if(count($right) > 0) $data['_right'] = $right;

    # PREPARE CONTENT
    $data['_content'] = $this->get_default_content();
    if(count($content) > 0) $data['_content'] = $content;
    
    # LOAD DEFAULT VIEW
    $this->load->view('frontend/default', $data);
  }
  
  public function get_default_left(){
    
    # load model untuk mengambil data guest books
    $this->load->model("guestbooks/guestbook_model");
    $guestbooks = $this->guestbook_model->find(array("approved" => 1), 0, 5, "id desc");
    
    # load model untuk mengambil data partner
    $this->load->model("partners/partner_model");
    $partners = $this->partner_model->find();
    
    return array(
      array(
    		"view" => "rupbasanitems/f/form_search_item",
    		"data" => array()
      ),
    	array(
    		"view" => "partners/f/show_partners",
    		"data" => array("partners" => $partners)
      ),
    	array(
    		"view" => "guestbooks/f/show_messages",
    		"data" => array("messages" => $guestbooks)
    	)
     );
  }
  
  public function get_default_right(){
    return array();
  }
  
  public function get_default_header(){
    return array();
  }
  
  public function get_default_footer(){
    return array();
  }
  
  public function get_default_content(){
    # load model untuk mengambil data agenda
    $this->load->model("agendas/agenda_model");
    $agendas = $this->agenda_model->find();
    
    # load model untuk mengambil data artikel
    $this->load->model("articles/article_model");
    $articles = $this->article_model->find(array("type" => "article"), 0, 5, "articles.id desc");
    
    return array(
      array(
      		"view" => "articles/f/show_lastest_news",
      		"data" => array("articles" => $articles)
      ),
      array(
      		"view" => "frontend/content_agendas_articles",
      		"data" => array("agendas" => $agendas)
      )
    );
  }
}
