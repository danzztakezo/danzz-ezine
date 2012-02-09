<?=$this->load->view('backend/layouts/top');?>
<?=$this->load->view('js/application_js');?>
<?=$this->load->view('css/application_css');?>

<div id="main">
<?=$this->load->view('left_panel');?>  
  <!-- begin: #col2 second float column -->
  <div id="col2">
    <div id="col2_content" class="clearfix"> </div>
  </div>
  <!-- end: #col2 -->
      
  <div id="col3">
    <div id="col3_content" class="clearfix">
      <div id="index_content">
        <h2> <?php echo $title_page;?> </h2>
        <div id="contentLeft">
          <div id="gallery_list">
            <ul id="ul_list">
              <?php
              foreach($rows as $al){
                echo "
                  <li id='recordsArray_".$al->id."'> 
                    <label class='album_name'><a href='".base_url()."auction_items_backend/detail/".$al->id."'>$al->name</a></label>
                    <div class='tumb_album_image'><img src='".base_url()."images/items/Thumbs/".$al->thumb."' width='200px' height='151px'/></div>
                    <div class='deskripsi_album'>".word_limiter($al->indescription,5)."</div>
                  </li>
                  ";
              }?>
            </ul>
            <?php echo $this->pagination->create_links();?>
          </div>
        </div>
    </div>
   
  </div>
  <!-- IE column clearing -->
  <div id="ie_clearing">&nbsp;</div>
  </div>
  <!-- end: #col3 -->
</div>
<!-- end: #main -->

<?=$this->load->view('backend/layouts/bottom');?>
