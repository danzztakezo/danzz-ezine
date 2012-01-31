<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//require_once ('application/modules/commons/models/common_model.php');

class User extends Common_Model{
  function __construct(){
    parent::__construct("users");
  }
}
?>