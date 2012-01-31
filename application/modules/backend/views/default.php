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
<title>EZine Backend</title>

<link href="<?php echo $bcs ?>ezine_backend.css" rel="stylesheet" type="text/css"/>

<!-- MENU HORIZONTAL -->
<link href="<?php echo $bcs ?>ezine_horizontal_menu.css" rel="stylesheet" type="text/css" />

<!--[if lte IE 7]>
<link href="css/patches/patch_3col_standard.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script language="javascript" src="<?php echo $bjs . "jquery.js" ?>"></script>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
  });
</script>

</head>
<body>

<div id="header">
  <div class="page_margins">
    <div class="page">
      <?php 
        $header_data = array();
        $this->load->view("header", $header_data); 
      ?>
      <ul><li><a href="backend/logout">Logout</a></li><ul>
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

<div id="main">
  <div id="col1">
    <div id="col1_content" class="clearfix">
      <h4>Left Panel</h4>
      <hr/>
      <ul class='vlist'>
        <!-- TAMBAHKAN ELEMENT LI DISINI -->
      </ul>
    </div>
  </div>
  <!-- end: #col1 -->
      
  <!-- begin: #col2 second float column -->
  <div id="col2">
    <div id="col2_content" class="clearfix"> </div>
  </div>
  <!-- end: #col2 -->
      
  <div id="col3">
    <div id="col3_content" class="clearfix">
      jjhggg
    </div>
  <!-- IE column clearing -->
  <div id="ie_clearing">&nbsp;</div>
  </div>
  <!-- end: #col3 -->
</div>
<!-- end: #main -->

<!-- FOOTER -->
<div id="footer">
  <div class="page_margins">
    <div class="page">
          <?php 
            $footer_data = array();
            $this->load->view("footer", $footer_data); 
          ?>      
    </div>
  </div>
</div>
</body>
</html>
