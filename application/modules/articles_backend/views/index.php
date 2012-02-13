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
        
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
              <thead>
                <tr>
                  <th width="25%">Judul</th>
                  <th width="25%">Deskripsi</th>
                  <th width="15%">author</th>
                  <th width="15%">kategori</th>
                  <th width="15%">tanggal</th>
                  <th width="15%">action</th>
                </tr>
              </thead>
              <tbody ="body_tr">
                <?php 
                foreach($rows as $row){
                  echo " <tr id='recordsArray_".$row['id']."'>
                  <td widtd='15%'>".$row['intitle']."</td>
                  <td widtd='25%'>".word_limiter(htmlentities(preg_replace("/<img[^>]+\>/i", "(image) ", strip_tags($row['incontent']))),10)."</td>
                  <td widtd='15%'>".$row['author']."</td>
                  <td widtd='15%'>".$row['category']."</td>
                  <td widtd='15%'>".$row['entrytime']."</td>
                  <td widtd='15%'><a href='".base_url()."/articles_backend/edit/".$row['id']."'>edit</a> | <a  id='".$row['id']."' class='btndel'>del</a></td>
                </tr>";
              }
                ?>
              </tbody>
            </table>
   
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
