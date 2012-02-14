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
            <label for="intitle"> Title *:</label> <input type="text" name="intitle" id="intitle" class="required" value='<?=$row[0]->intitle?>'/> 
            </span>
           <span >
            <label for="incontent"> Deskripsi * :</label> <textarea name="incontent" id="incontent" cols="30" rows="5" class="required"> <?=$row[0]->incontent?> </textarea> 
            </span>
            <span >
              <label for="intitle"> Author *:</label> 
              <select name="author" id="author">
                <option value=''>--pilih Author --</option>
                <?php 
                if(count($authors)>0){
                  foreach($authors as $a){
                    echo "<option value='".$a->id."'>$a->fullname </option>";   
                  }
                }
                 ?>
              </select>
            </span>
             <span >
              <label for="category"> category *:</label> 
              <select name="category[]" id="category[]" multiple>
                <option value=''>--pilih category --</option>
                <?php 
                if(count($category)>0){
                  foreach($category as $a){
                    echo "<option value='".$a->id."'>$a->name </option>";   
                  }
                }
                 ?>
              </select>
            </span>
            <span >
            <label for="name"> </label> <input type="hidden" name="type" id="type" class="required" value="article"/> 
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