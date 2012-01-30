<?php
if(isset($data)){
  for($i = 0; $i < count($data); $i++){
    $this->load->view($data[$i]);
  }
} 
?>
Copyright &copy; <a href="http://evolab.web.id" target="_blank">EvoLab Technologies</a><br />
Layout based on <a href="http://www.yaml.de/">YAML</a>