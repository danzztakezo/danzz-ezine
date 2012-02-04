
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
      <div id="edit_form" class="form">
        <h2> Edit Profile </h2>
          <div id="contentLeft">
            <form method="post" action="<?=base_url()?>pages_backend/edit/<?=$id?>" id="editForm">
             <span >
              <label for="name"> Nama * :</label> <input type="text" name="name" id="name" class="required" value="<?=$row->name?>"/> 
              <!-- <input type="hidden" name="id" id="id" class="required" value="<?=$row->id?>"/>  -->
             </span>
             <span >
              <label for="intitle"> Title *:</label> <input type="text" name="intitle" id="intitle" class="required" value="<?=$row->intitle?>"/> 
              </span>
             <span >
              <label for="incontent"> Deskripsi * :</label> <textarea name="incontent" id="incontent" cols="5" rows="5" class="required tinymce_content"  style="width:95%;height:400px;"  ><?=$row->incontent?> </textarea>
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