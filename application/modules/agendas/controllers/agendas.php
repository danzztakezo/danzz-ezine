<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once ('application/modules/frontend/controllers/frontend.php');

class Agendas extends Frontend {

  public function __construct(){
    parent::__construct();
  }
  
  public function index(){
    
  }
  
  /**
   * BOF FRONTEND METHOD
   * ----------------------------------------------------------------------------------------------------
   */
  
  /**
  * Menampilkan agenda pada satu halaman penuh
  * data di order berdasarkan id DESC yang akan menampilkan
  * agenda yang diisi paling terakhir
  * 
  * @author AgusZulvani
  */
  public function browse(){
    # load model untuk mengambil data guest books
    $this->load->model("agendas/agenda_model");
  
    # load pagination
    $limit = 10;
    $offset = $this->uri->segment(3, 0);
    
    $this->load->library("pagination");
    $config['base_url'] = $this->config->base_url() . "agendas/browse";
    $config['total_rows'] = $this->agenda_model->count();
    $config['per_page'] = $limit;
    $this->pagination->initialize($config);
    $pagination = $this->pagination->create_links();
    
    # ambil data guestbook dari database
    $agendas = $this->agenda_model->find(array(), $offset, $limit, "id desc");
    
    $content = array(
      array(
          		"view" => "agendas/f/browse",
            	"data" => array("messages" => $agendas, "pagination" => $pagination)
        )
    );
  
    $this->display($content);
  }
  
  public function detail($id = 0){
    if($id != 0)
      $id = $this->uri->segment(3, 0);
    
    # load model untuk mengambil data guest books
    $this->load->model("agendas/agenda_model");    
    $agenda = $this->agenda_model->find_entity_by_id($id);
    
    if(count($agenda) > 0){
      $content = array(
          array(
          		"view" => "agendas/f/detail",
            	"data" => array("agenda" => $agenda)
          )
      );
      
      $this->display($content);
    }
    else{
      $data = array(
      			"message_title" => "Maaf, Agenda tidak ditemukan!",
          	"message" => "Maaf Agenda yang ingin Anda baca tidak ditemukan di database kami, 
          								mungkin agenda ini sudah terhapus dari database kami. <br/><br/>Terimakasih"
          	);
      $this->show_common_message($data);
    }
  }
  
  private function show_common_message($data = array()){
    $content = array(
      array("view" => "guestbooks/f/common_message", "data" => $data)
    );
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
