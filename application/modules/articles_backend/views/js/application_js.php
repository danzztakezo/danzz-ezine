
<script type="text/javascript">
$(document).ready(function(){
  $(function() {
    $("#ul_list").sortable({ opacity: 0.6, cursor: 'move', update: function() {
      var order = $(this).sortable("serialize") + '&action=updateRecordsListings'; 
      $.post("pages_backend/updated_order", order, function(theResponse){
        $("#contentRight").html(theResponse);
      });                                
    }                 
    });
  });

  var options = { 
        beforeSubmit:  validate,  
        success:       showResponse,
        clearForm: true        
    }; 

  var optionsEdit = { 
        beforeSubmit:  validate,  
        success:       showResponse
    }; 

  $("#addForm").validate({
     submitHandler: function(form) {
       $("#addForm").submit(function() { 
          $(this).ajaxSubmit(options); 
          return false;  
        });
        return false; 
      }
    });
  
  $("#editForm").validate({
     submitHandler: function(form) {
       $("#editForm").submit(function() { 
          $(this).ajaxSubmit(optionsEdit); 
          return false;  
        });
        return false; 
      }
    });

  $("#ul_list").selectable();

  $("#btnDel").click(function(){
    var id=$("#ul_list").find(".ui-selected").attr("id");
    if(id!=""){
      var nextid=id.split("_");
      $.ajax({
        url: "pages_backend/del",
        data:"id="+nextid[1],
        success: function(data){
          $("#"+id).hide("slow");
        }
      });
    }
  });   
  
  $("#btnEdit").click(function(){
    var id=$("#ul_list").find(".ui-selected").attr("id");
    if(id == "" || id == "undefine") {

    }else{
      var nextid=id.split("_");
      var href="pages_backend/edit/"+nextid[1];
      $(this).attr("href",href);
      console.log(1);
    }
    
  });

  $('#incontent').tinymce({
      script_url : '<?php echo base_url();?>js/tinymce/jscripts/tiny_mce/tiny_mce.js',            
      relative_urls : false,
      theme : "advanced",
      plugins : "jbimages,safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
      theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,cut,copy,paste,pastetext,pasteword,bullist,numlist,blockquote,|,undo,redo,|,link,unlink,anchor,jbimages,image,media,code",
      theme_advanced_buttons2 : "insertdate,inserttime,hr,|,sub,sup,|,charmap,emotions,|,fullscreen,pagebreak,|,fontsizeselect,formatselect,preview,cite",
      theme_advanced_buttons3 : "",
      theme_advanced_toolbar_location : "top",
      theme_advanced_toolbar_align : "left",
      theme_advanced_statusbar_location : "bottom"
  });
  
  $('#example').dataTable();

}); 

function validate(formData, jqForm, options) { 
  $("#btnsimpan").hide("slow",function(){$("#saving_proses").html("Saving ......"); });
  return true;
} 
 
function showResponse(responseText, statusText, xhr, $form){
  if(responseText==0){
    var pesan = "data berhasil disimpan";
     $("#btnsimpan").show("slow",function(){$("#saving_proses").html("Data berhasil Disimpan"); });
  }else{
    var pesan = "data gagal disimpan";
  }
  $("#btnsimpan").show("slow",function(){$("#saving_proses").html(pesan);});
} 
</script>