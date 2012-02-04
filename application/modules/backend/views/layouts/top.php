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

<script language="javascript" src="<?php echo $bjs."jquery.js";?>"></script>
<script language="javascript" src="<?php echo $bjs."jqueryui/jquery-ui-1.8.13.custom.min.js";?>"></script>
<script language="javascript" src="<?php echo $bjs."jform/jquery.form.js";?>"></script>
<script language="javascript" src="<?php echo $bjs."jqueryvalidate/jquery.validate.min.js";?>"></script>
<script type="text/javascript" src="<?php echo $bjs."tinymce/jscripts/tiny_mce/jquery.tinymce.js";?>"></script>
<script type="text/javascript" src="<?php echo $bjs."datatables/jquery.dataTables.js";?>"></script>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
  });
</script>

</head>
<body>
<?=$this->load->view('backend/layouts/header');?>
<?=$this->load->view('backend/layouts/nav');?>