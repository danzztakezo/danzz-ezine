<?php
include "../tinyMCE.conf.inc.php";
?>
<script language="javascript" type="text/javascript" src="../tinymce/jscripts/tiny_mce/tiny_mce_popup.js"></script>
<script language="javascript" type="text/javascript" src="../tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
	
var FileBrowserDialogue = {
    init : function () {
    },
    mySubmit : function (src) {
        var URL = src;
        var win = tinyMCEPopup.getWindowArg("window");
        win.document.getElementById(tinyMCEPopup.getWindowArg("input")).value = URL;
        win.document.getElementById(tinyMCEPopup.getWindowArg("input")).value = URL;
        win.document.getElementById(tinyMCEPopup.getWindowArg("input")).value = URL;
        if (typeof(win.ImageDialog) != "undefined")
        {
            if (win.ImageDialog.getImageData) win.ImageDialog.getImageData();
            if (win.ImageDialog.showPreviewImage) win.ImageDialog.showPreviewImage(URL);
        }
        tinyMCEPopup.close();
    }
}

tinyMCEPopup.onInit.add(FileBrowserDialogue.init, FileBrowserDialogue);
</script>
<form name="BmsForm" method="post" action='bms_upl.php' enctype="multipart/form-data">
<input type="file" name="image" id="bms_file_input"/>
<input type="submit" name="Submit" value="Upload">
</form>
<hr/>



<?php
$dir = opendir ($filedir);
	while (false !== ($file = readdir($dir))) {
		if (strpos($file, '.gif',1)||strpos($file, '.jpg',1) ) {
			echo "<img onclick='FileBrowserDialogue.mySubmit(this.src);' style={margin:5px;} width='150' src='$basetiny_image_url/$file'/> <br />";
		}
	}
?>

