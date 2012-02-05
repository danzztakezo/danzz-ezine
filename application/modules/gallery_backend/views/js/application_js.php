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
      $("#gallery_upload_tbody").append("<tr id='tr_"+pisah[0]+"'><td>"+fileObj['name']+"</td><td>"+fileObj['size']+"</td><td>"+fileObj['type']+"</td><td></td><td><a  id='"+pisah[0]+"' class='"+fileObj['name']+"'>del</a> </td></tr>");
      
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
});
</script>