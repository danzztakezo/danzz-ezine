<?php
if(isset($data)){
  for($i = 0; $i < count($data); $i++){
    $this->load->view($data[$i]);
  }
} 
?>
