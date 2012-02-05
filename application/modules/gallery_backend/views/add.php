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
      <h2> <?=$title_page;?></h2>
        <div id="contentLeft">
          <form method="post" action="<?=base_url();?>gallery_backend/add" id="addForm">
            <span >
              <label for="name"> Nama * :</label> <input type="text" name="name" id="name" class="required"/> 
            </span>
            <span >
              <label for="intitle"> Title *:</label> <input type="text" name="intitle" id="intitle" class="required"/> 
            </span>
            <span >
              <label for="incontent"> Sampul Album * :</label>
                <div id="display_picture"></div> 
                <input id="picture" type="hidden" name="picture" />
                <input id="thumb" type="hidden" name="thumb" />
                <input id="file_upload" type="file" name="file_upload" />
                <a href="javascript:$('#file_upload').uploadifyUpload();">Upload Files</a>
               <span id="loading-question"> </span>
            </span>
            <span >
              <label for="incontent"> Deskripsi * :</label> <textarea name="incontent" id="incontent" cols="5" rows="5" class="required"> </textarea> 
            </span>
            <span >
              <label for="intitle"> Author *:</label> 
              <select name="author" id="author">
                <?php 
                if(count($authors)>0){
                  foreach($authors as $au){
                    echo "<option value='".$au->id."'>$au->fullname</option>";   
                  }
                }
                 ?>
              </select>
            </span>
            
               <input id="gallery_picture" type="hidden" name="gallery_picture" />
                      <input id="gallery_thumb" type="hidden" name="tgallery_humb" />
                      <input id="gallery_upload" type="file" name="gallery_upload" />
                      <a href="javascript:$('#gallery_upload').uploadifyUpload();">Upload Files</a>
                      <span id="loading-gallery"> </span>
               <br/>       
              <table width="100%" border='1' class="table" >
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Deskripsi</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="gallery_upload_tbody">
                  <tr>
                    <td>No</td>
                    <td><input type='text' name='gallery_name[]' id='gallery_name[]'></td>
                    <td><textarea type='text' name='gallery_name[]' id='gallery_name[]'></textarea></td>
                    <td>               </td>
                    <td>Action</td>
                  </tr>
                </tbody>
              </table>
            
           <input type="submit" id="btnsimpan" value="Simpan"/> 
           <span id="saving_proses"></span>
          </form>
          <table id="files"></table>
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