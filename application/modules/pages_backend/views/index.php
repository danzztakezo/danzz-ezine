<?=$this->load->view('backend/layouts/top');?>
<script type="text/javascript">
$(document).ready(function(){
  $("#add_form").hide();
  $(function() {
    $("#contentLeft ul").sortable({ opacity: 0.6, cursor: 'move', update: function() {
      var order = $(this).sortable("serialize") + '&action=updateRecordsListings'; 
      $.post("pages_backend/updated_order", order, function(theResponse){
        $("#contentRight").html(theResponse);
      });                                
    }                 
    });
  });
  $("#btnAdd").toggle(function(){
    $("#index_content").hide("slow",function(){
      $("#add_form").show("slow");
    });
  },function(){
    $("#add_form").hide("slow",function(){
      $("#index_content").show("slow");
    });
  });

}); 
</script>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 16px;
  margin-top: 10px;
}

ul {
  margin: 0;
}

#contentWrap {
  width: 700px;
  margin: 0 auto;
  height: auto;
  overflow: hidden;
}

#contentTop {
  width: 600px;
  padding: 10px;
  margin-left: 30px;
}

#contentLeft {
  float: left;
  width: 800px;
}

#contentLeft li {
  list-style: none;
  margin: 0 0 4px 0;
  padding: 10px;
  background-color:#CCCCCC;
  border: #CCCCCC solid 1px;
  color:#fff;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
}

#contentRight {
  float: right;
  width: 260px;
  padding:10px;
  background-color:#336600;
  color:#FFFFFF;
}

.vlist li{
  list-style : none;
}

.form textarea {
  width:500px;
  height:250px;
}

.form input[type=button]{
  margin:10px 0px 10px 110px;

}

.form span{
  float: left;
  display: block;
  width :100%;
  margin: 5px 0px;
}

.form label{
  width:100px;
  text-align  :right;
  margin-right: 10px;
  float: left;
}

</style>
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
        <ul>
          <?php 
            foreach($rows as $d){
               echo "<li id='recordsArray_".$d->id."'> $d->name ";
               echo "<div>$d->encontent</div>";
               echo "</li>";
            }
          ?>
          </ul>
        </div>
    </div>
    <?php $this->load->view("add");?>
  </div>
  <!-- IE column clearing -->
  <div id="ie_clearing">&nbsp;</div>
  </div>
  <!-- end: #col3 -->
</div>
<!-- end: #main -->

<?=$this->load->view('backend/layouts/bottom');?>
