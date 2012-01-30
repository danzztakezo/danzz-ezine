<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once ('application/modules/commons/models/common_model.php');

class Partner_model extends Common_model{
  function __construct(){
    parent::__construct("partners");
  }
}
?>