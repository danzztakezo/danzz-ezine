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
                  <th width="20%">id</th>
                  <th width="25%">Judul</th>
                  <th width="25%">Deskripsi</th>
                  <th width="15%">tanggal</th>
                  <th width="15%">author</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                foreach($rows as $row){
                  echo " <tr>
                  <td widtd='20%'>$row->id</td>
                  <td widtd='25%'>$row->intitle</td>
                  <td widtd='25%'>$row->incontent</td>
                  <td widtd='15%'>$row->entrytime</td>
                  <td widtd='15%'>$row->author</td>
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
