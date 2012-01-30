<?php
if(isset($data)){
  for($i = 0; $i < count($data); $i++){
    $this->load->view($data[$i]["view"], $data[$i]["data"]);
  }
}
?>
Copyright 2011 - <?php echo date("Y") ?> &copy; <a href="http://evolab.web.id" target="_blank">EvoLab Technologies</a><br />
Style and CSS based on <a href="http://www.yaml.de/">YAML</a>