<?php 
	$b = $this->config->item("base_url") . "/";
	$bjs = $this->config->item("base_url") . "/js/";
	$bcs = $this->config->item("base_url") . "/css/";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>EZine</title>

<link href="<?php echo $bcs . "ezine_login.css" ?>" rel="stylesheet" type="text/css"/>

<!--[if lte IE 7]>
<link href="css/patches/patchlayout.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script type="text/javascript" src="<?php echo $bjs . "jquery.js" ?>"></script>

<!-- Form Validate --> 
<script type="text/javascript" src="<?php echo $bjs ?>jqueryvalidate/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo $bjs ?>jqueryvalidate/jquery.metadata.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	var show = 0;
	$("#lupapassword").click(function(){
		if(show == 0){
			$("#email").show();
			show = 1;
		}
		else{
			$("#email").hide();
			show = 0;
		}
	});

	$("#form").validate({
		messages: {
			email: "Isi email dengan format yang benar!"
		}
	});
});
</script>

</head>
<body>

<div class="page_margins">
  <div class="page">
    <div id="header">
    	<div id="logoindex">
    		<!-- <a href="<?php //echo $b ?>"><img src="<?php //echo $b . "images/logo.png"; ?>" alt="" /></a> -->
    	</div>
    </div>
    <!-- begin: main navigation #nav -->

    <div id="main">
    	<div id="col1">
    		<div id="col1_content" class="clearfix">
    			<div>
    				<form action="<?php echo $b . "accounts/login"?>" method="post" class="yform full" id="form">
    				<h4>Login</h4><br/>
    				<?php
    					if(isset($err_message)){
    						echo "<div class='err_message'>" . $err_message . "</div>";						
    					} 
    				?>
    					<fieldset>
    						<div class="subcl type-text">
    							<label for="username">Username</label>
    							<input type="text" name="tusername" name="tusername"/>
    						</div>
    						
    						<div class="subcl type-text">
    							<label for="password">Password</label>
    							<input type="password" name="tpassword" id="tpassword"/>
    						</div>
    						
    						<div><a href="#" id="lupapassword" style="margin-left: 7px;">Lupa Password Saya</a></div>
    						<div id="email" style="display: none">
    						<div class="subcl type-text">
    							<label for="email">Isi Email Anda dibawah ini, Kami akan mengirimkan Password baru ke Email Anda</label>
    							<input type="email" name="email" id="email" class="required"/>
    							<label for="email" generated="true" style="color: red;" class="error"></label>
    						</div>
    						
    						<div class="type-button">
              		<input type="submit" value=" Kirim Password! " name="kirim" class="submit" />
            		</div>
    						</div>
    					</fieldset>
    		        	<div class="type-button">
              				<input type="submit" value=" Login " class="submit" name="login" />
            			</div>
    				</form>
    			</div>
    		</div>
    	</div>
    	
    	<!-- end: #col1 -->
          
    	<!-- begin: #col2 second float column -->
    	<div id="col2">
    		<div id="col2_content" class="clearfix">
    			
    		</div>
    	</div>
    	<!-- end: #col2 -->
          
    	<div id="col3">
    		<div id="col3_content" class="clearfix">
    			<h1>Halaman Administrasi Website</h1>
    			<hr/>
    		</div>
            <!-- IE column clearing -->
            <div id="ie_clearing">&nbsp;</div>
    	</div>
    	<!-- end: #col3 -->
    </div>
    <!-- end: #main -->
    
    <div id="footer">Copyright &copy; 2011 <a href='http://evolab.web.id'>EvoLab Technologies</a></div>
    <!-- end: #footer -->
  </div>
</div>
<!-- full skiplink functionality in webkit browsers -->
<script src="./yaml/core/js/yaml-focusfix.js" type="text/javascript"></script>
</body>
</html>
