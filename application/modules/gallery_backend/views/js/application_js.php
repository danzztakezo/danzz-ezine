<script type="text/javascript">
$(document).ready(function(){
  $('#file_upload').uploadify({
    'uploader'  : '<?php echo base_url();?>js/uploadify-v2.1.4/uploadify.swf',
    'script'    : '<?php echo base_url();?>js/uploadify-v2.1.4/uploadify.php',
    'cancelImg' : '<?php echo base_url();?>js/uploadify-v2.1.4/cancel.png',
    'folder'    : '<?php echo $path; ?>images/albums',
    'auto'      : false,
    'onComplete'  : function(event, ID, fileObj, response, data) {
      $("#picture").val(fileObj['name']);
      $("#thumb").val(fileObj['name']);
      $("#display_picture").html("<img src='<?php echo $path; ?>images/albums/Thumbs/"+fileObj['name']+"' height='52px' weight='50px'/>");
      
    }
  });
  $('#gallery_upload').uploadify({
    'uploader'  : '<?php echo base_url();?>js/uploadify-v2.1.4/uploadify.swf',
    'script'    : '<?php echo base_url();?>js/uploadify-v2.1.4/uploadify.php',
    'cancelImg' : '<?php echo base_url();?>js/uploadify-v2.1.4/cancel.png',
    'folder'    : '<?php echo $path; ?>images/galleries',
    'auto'      : false,
    'multi'     : true,
    'onComplete'  : function(event, ID, fileObj, response, data) {
      $("#gallery_picture").val(fileObj['name']);
      $("#gallery_thumb").val(fileObj['name']);
      var pisah=fileObj['name'].split(".");
      var tbody="<tr id='tr_"+pisah[0]+"'><td><img src='<?php echo base_url();?>images/galleries/Thumbs/"+fileObj['name']+"' height='52px' weight='50px'/><input type='hidden' name='gallery_picture[]' id='gallery_picture[]' value='"+fileObj['name']+"'><input type='hidden' name='gallery_thumb[]' id='gallery_thumb[]' value='"+fileObj['name']+"'></td><td><input type='text' name='gallery_name[]' id='gallery_name[]'></td><td><input type='text' name='gallery_title[]' id='gallery_title[]'></td><td><textarea type='text' name='gallery_deskripsi[]' id='gallery_deskripsi[]'></textarea></td><td><a  id='"+pisah[0]+"' class='"+fileObj['name']+"'>hapus</a> </td></tr>";
      $("#gallery_upload_tbody").append(tbody);
      
    }
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

    $("#btnEdit").click(function(){
      var id=$("#ul_list").find(".ui-selected").attr("id");
      if(id == "" || id == "undefine") {

      }else{
        var nextid=id.split("_");
        var href="<?php echo base_url();?>/gallery_backend/edit/"+nextid[1];
        $(this).attr("href",href);
      }
    });

  $(".del_gallery").click(function(){
    var attr_id=$(this).attr("id");
    var id=attr_id.split("_");
    $.ajax({
      url:"<?php echo base_url();?>gallery_backend/delete_gallery",
      data:'id='+id[1],
      success:function(response){
        if(response=="success"){
          $("#tr_"+id[1]).hide("slow");
        }
      }
    });
    return false;
  });

  $("#btnDel").click(function(){
    var id=$("#ul_list").find(".ui-selected").attr("id");
    if(id!=""){
      var nextid=id.split("_");
      $.ajax({
        url: "<?php echo base_url();?>gallery_backend/del",
        data:"id="+nextid[1],
        success: function(response){
          if(response=="success"){
            $("#"+id).hide("slow");  
          }
          
        }
      });
    }
  }); 

  $("#btnDet").click(function(){
        var id=$("#ul_list").find(".ui-selected").attr("id");
        if(id == "" || id == "undefine") {

        }else{
          var nextid=id.split("_");
          var href="<?php echo base_url();?>/gallery_backend/detail/"+nextid[1];
          $(this).attr("href",href);
        }
      });
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