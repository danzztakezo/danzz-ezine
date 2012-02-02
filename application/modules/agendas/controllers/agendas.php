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
  * Menampilkan buku tamu pada satu halaman penuh
  * data di order berdasarkan id DESC yang akan menampilkan
  * buku tamu yang diisi paling terakhir
  * 
  * @author AgusZulvani
  */
  public function browse(){
    # load model untuk mengambil data guest books
    $this->load->model("guestbooks/guestbook_model");
  
    # load pagination
    $limit = 10;
    $offset = $this->uri->segment(3, 0);
    
    $this->load->library("pagination");
    $config['base_url'] = $this->config->base_url() . "guestbooks/browse";
    $config['total_rows'] = $this->guestbook_model->count(array("approved" => 1));
    $config['per_page'] = $limit;
    $this->pagination->initialize($config);
    $pagination = $this->pagination->create_links();
    
    # ambil data guestbook dari database
    $guestbooks = $this->guestbook_model->find(array("approved" => 1), $offset, $limit, "id desc");
    
    $content = array(
      array(
          		"view" => "guestbooks/f/browse",
            	"data" => array("messages" => $guestbooks, "pagination" => $pagination)
        )
    );
  
    $this->display($content);
  }
  
  /**
  * Menampilkan form untuk mengisi buku tamu
  * 
  * @author AgusZulvani
  */
  public function add(){
    $content = array(
      array(
          		"view" => "guestbooks/f/add",
            	"data" => array()
        )
    );
  
    $this->display($content);
  }
  
  public function save($data = array()){
    $data["name"] = $this->input->post("tnama");
    $data["email"] = $this->input->post("temail");
    $data["url"] = $this->input->post("turl");
    $data["phone"] = $this->input->post("tphone");
    $data["incontent"] = $this->input->post("tpesan");
    $data["entrytime"] = date("Y-m-d");
    
    $this->load->model("guestbook_model");
    $this->guestbook_model->save($data);
    
    $data = array(
    	"message_title" => "Terimakasih telah mengisi buku tamu kami!", 
    	"message" => "Pesan Anda akan diverifikasi terlebih dahulu oleh Administrator kami. <br/><br/>Terimakasih"
    	);
    $this->show_common_message($data);
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
