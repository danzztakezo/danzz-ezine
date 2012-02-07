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
          <form method="post" action="<?=base_url();?>gallery_backend/edit/<?=$id?>" id="editForm">
            <span >
              <label for="name"> Nama * :</label> 
              <input type="text" name="name" id="name" class="required" value="<?=$rows_a[0]->name?> "/> 
            </span>
            <span >
              <label for="intitle"> Title *:</label> 
              <input type="text" name="intitle" id="intitle" class="required" value="<?=$rows_a[0]->intitle?> "/> 
            </span>
            <span >
              <label for="incontent"> Sampul Album * :</label>
                <div id="display_picture"> 
                  <img src="<?php echo base_url().'images/albums/Thumbs/'.$rows_a[0]->thumb;?>" height='52px' weight='50px'/>
                </div> 
                <input id="picture" type="hidden" name="picture" value="<?=$rows_a[0]->picture?> "/>
                <input id="thumb" type="hidden" name="thumb" value="<?=$rows_a[0]->thumb?> "/>
                <input id="file_upload" type="file" name="file_upload" />
                <a href="javascript:$('#file_upload').uploadifyUpload();">Upload Files</a>
               <span id="loading-question"> </span>
            </span>
            <span >
              <label for="incontent"> Deskripsi * :</label> 
              <textarea name="incontent" id="incontent" cols="5" rows="5" class="required">
              <?=$rows_a[0]->indescription?> </textarea> 
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
              <table width="100%" border='0' class="table" >
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="gallery_upload_tbody">
                <?php
                  foreach($rows_g as $g){
                    // echo "<tr>";
                    // echo "<td> <img src='".base_url()."images/albums/Thumbs/".$rows_a[0]->thumb."' height='52px' weight='50px'/></td>";
                    // echo "<td></td>";
                    echo "<tr id='tr_".$g->id."'>
                          <td><img src='".base_url()."images/galleries/Thumbs/".$g->thumb."' height='52px' weight='50px'/>
                                <input type='hidden' name='gallery_picture[]' id='gallery_picture[]' value='".$g->picture."'/>
                                <input type='hidden' name='gallery_thumb[]' id='gallery_thumb[]' value='".$g->thumb."'/>
                          </td>
                          <td><input type='text' name='gallery_name[]' id='gallery_name[]' value='".$g->name."'></td>
                          <td><input type='text' name='gallery_title[]' id='gallery_title[]' value='".$g->intitle."'></td>
                          <td><textarea type='text' name='gallery_deskripsi[]' id='gallery_deskripsi[]'>".$g->indescription."</textarea></td>
                          <td><a href='#'  id='del_".$g->id."' class='del_gallery'>hapus</a> </td>
                        </tr>";
                  }
                ?>
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