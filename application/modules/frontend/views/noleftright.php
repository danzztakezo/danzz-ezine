<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
  $b = $this->config->item("base_url") . "/";
  $bcs = $b . "css/";
  $bjs = $b . "js/";
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>EZine</title>

<link href="<?php echo $bcs ?>ezine_frontend_noleftright.css" rel="stylesheet" type="text/css"/>

<!-- MENU HORIZONTAL -->
<link href="<?php echo $bcs ?>ezine_horizontal_menu.css" rel="stylesheet" type="text/css" />

<!--[if lte IE 7]>
<link href="css/patches/patch_3col_standard.css" rel="stylesheet" type="text/css" />
<![endif]-->

<!-- JQUERY -->
<script type="text/javascript" src="<?php echo $bjs . "jquery.js" ?>"></script>

</head>
<body>

<div id="header">
  <div class="page_margins">
    <div class="page">
			<?php 
			  $header_data = array('data' => $_header);
			  $this->load->view("header", $header_data); 
			?>
    </div>
  </div>
</div>

<!-- begin: main navigation #nav -->
<div id="nav">
  <div class="page_margins">
    <div class="page">
      <div class="hlist">
			<?php 
			  $nav_data = array();
			  $this->load->view("nav", $nav_data); 
			?>
      </div>
    </div>
  </div>
</div>
<!-- end: main navigation -->

<!-- begin: main content area #main -->
<div id="main">
  <div class="page_margins">
    <div class="page">
      
		<?php 
  		$content_data = array('data' => $_content);
  		$this->load->view("content", $content_data);
    ?>    
      
    </div>
  </div>
</div>
<!-- end: #main -->

<!-- FOOTER -->
<div id="footer">
  <div class="page_margins">
    <div class="page">
      		<?php 
			      $footer_data = array('data' => $_footer);
			      $this->load->view("footer", $footer_data); 
			    ?>      
    </div>
  </div>
</div>
</body>
</html>
