<?php

require 'BaseServices.php';

class ReviewServices extends BaseService{
  
  public function __construct(){
    parent::__construct(new reviewtableDao);
  }

  /*exapmle do something else*/
  public function add($entity){
    parent::add($entity);
    /*send an email*/
  }

}
?>