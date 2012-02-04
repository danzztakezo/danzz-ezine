<?php
include "../tinyMCE.conf.inc.php";
	$maxsize = "1000";
	function getExtension($str) {
			 $i = strrpos($str,".");
			 if (!$i) { return ""; }
			 $l = strlen($str) - $i;
			 $ext = substr($str,$i+1,$l);
			 return $ext;
	 }
	$errors=0;
	if(isset($_POST['Submit'])){
	   $image=$_FILES['image']['name'];
	if ($image){
	$filename = stripslashes($_FILES['image']['name']);
	$extension = getExtension($filename);
	$extension = strtolower($extension);
	$tfiletype = $_FILES['image']['type'];
        
        //if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
        //{ Sorry Bro.. Use the FILETYPE is more secure than the name.. What is mean the name hahahaha... bimosaurus
        
        if(($tfiletype!='image/jpeg') && ($tfiletype!='image/gif') && ($tfiletype!='image/png')){
		echo '<h1>Unknown extension!</h1>';
		$errors=1;
	}else{
	$size=filesize($_FILES['image']['tmp_name']);
	if ($size>$maxsize*1024){
		echo '<h1>You have exceeded the size limit!</h1>';
		$errors=1;
	}
	$image_name=time().'.'.$extension;
	$newname=$filedir."/".$image_name;
	$copied = move_uploaded_file($_FILES['image']['tmp_name'], $newname);
	if (!$copied) 
	{
			$errors=1;
	}}}}
	if(isset($_POST['Submit']) && !$errors) 
	{
	 }
	header("Location:bmsupl.php");
?>
