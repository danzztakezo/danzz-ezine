<?php
//YOU DON'T Need CHANGE ANYTHING here!!!

include "tinyMCE.conf.inc.php";

function tinyeditor(){


?>


	<!-- TinyMCE -->
	<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript">
		tinyMCE.init({
			// General options
			file_browser_callback : 'FileBrowser',
			mode : "textareas",
			theme : "advanced",
			plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",
	
			// Theme options
			theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter",
			theme_advanced_buttons1 : "justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
			<!--theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",-->
			<!--theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",-->
			<!--theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",-->
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			theme_advanced_resizing : true,

			// Example content CSS (should be your site CSS)
			content_css : "css/content.css",

			// Drop lists for link/image/media/template dialogs
			template_external_list_url : "lists/template_list.js",
			external_link_list_url : "lists/link_list.js",
			external_image_list_url : "lists/image_list.js",
			media_external_list_url : "lists/media_list.js",
	
			// Style formats
			style_formats : [
				{title : 'Bold text', inline : 'b'},
				{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
				{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
				{title : 'Example 1', inline : 'span', classes : 'example1'},
				{title : 'Example 2', inline : 'span', classes : 'example2'},
				{title : 'Table styles'},
				{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
			],		

			// Replace values for the template plugin
			template_replace_values : {
				username : "Some User",
				staffid : "991234"
			}
		});
	</script>
	
	<script>
	function FileBrowser (field_name, url, type, win) {
         //alert("Field_Name: " + field_name + "\nURL: " + url + "\nType: " + type + "\nWin: " + win); // debug/testing
         /* If you work with sessions in PHP and your client doesn't accept cookies you might need to carry
         the session name and session ID in the request string (can look like this: "?PHPSESSID=88p0n70s9dsknra96qhuk6etm5").
         These lines of code extract the necessary parameters and add them back to the filebrowser URL again. */
         var cmsURL = 'additional/bmsupl.php';
         if (cmsURL.indexOf("?") < 0) {
         //add the type as the only query parameter
         cmsURL = cmsURL + "?type=" + type;
         }else {
         //add the type as an additional query parameter
         // (PHP session ID is now included if there is one at all)
         cmsURL = cmsURL + "&type=" + type;
         }
         tinyMCE.activeEditor.windowManager.open({
         file : cmsURL,
         title : 'Image Browser',
         width : 420,  // Your dimensions may differ - toy around with them!
         height : 400,
         resizable : "yes",
         inline : "yes",  // This parameter only has an effect if you use the inlinepopups plugin!
         close_previous : "no"
         }, {
         window : win,
         input : field_name
         });
         return false;
         }
	</script>
	
	<!-- /TinyMCE -->

<?php
}

?>
