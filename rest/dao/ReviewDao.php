<?php

require_once "BaseDao.class.php";

class reviewtableDao extends BaseDao{

  public function __construct(){
     parent::__construct("reviewtable");
  }

  public function get_all(){
    return parent::get_all();
  }


}
?>