<?php
include "tinyMCE.func.inc.php";



if(isset($_POST['SUBMIT'])){
$s = fopen("the.txt",'w');
$p = $_POST['test'];
$f = fwrite($s,$p);
fclose($s);
}


tinyeditor();
?>
<form name="cobaup" method="post" action="form.php">
<textarea name="test" id="elm1"></textarea>
<input type="submit" name="SUBMIT" value="POST">
</form>
