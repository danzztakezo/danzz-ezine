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
        <ul id="ul_list">
          <?php 
            foreach($rows as $i => $d){
              if($i==1){ $active='class="ui-selectable"'; }else{ $active=""; }
              
               echo "<li id='recordsArray_".$d->id."' ".$active."> ".htmlentities(preg_replace("/<img[^>]+\>/i", "(image) ", $d->name))." ";
               echo "<div>".htmlentities(preg_replace("/<img[^>]+\>/i", "(image) ", strip_tags($d->incontent)))."</div>";
               echo "</li>";
            }
          ?>
          </ul>
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
