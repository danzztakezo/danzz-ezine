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
      <div id="add_form" class="form">
      <h2> <?php echo $title_page; ?></h2>
        <div id="contentLeft">
          <form method="post" action="<?=$form_action;?>" id="editForm">
           <span >
            <label for="intitle"> Nama *:</label> <input type="text" name="name" id="name" class="required" value="<?php echo $row[0]->name; ?>"/> 
            </span>
           <span >
            <label for="intitle"> Title *:</label> <input type="text" name="intitle" id="intitle" class="required" value="<?php echo $row[0]->name; ?>"/> 
            </span>
           <span >
            <label for="incontent"> Deskripsi * :</label> <textarea name="indescription" id="indescription" cols="30" rows="5" class="required"><?php echo $row[0]->indescription; ?> </textarea> 
            </span>
            <span >
              <label for="agendastime"> Tanggal / Waktu *:</label> <input type="text" name="agendastime" id="agendastime" class="required" value="<?php echo $row[0]->agendastime; ?>"/> 
            </span>
            <span >
              <label for="venue"> Tempat *:</label> <input type="text" name="venue" id="venue" class="required" value="<?php echo $row[0]->venue; ?>"/> 
            </span>
           <input type="submit" id="btnsimpan" value="Simpan"/> 
           <span id="saving_proses"></span>
          </form>
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