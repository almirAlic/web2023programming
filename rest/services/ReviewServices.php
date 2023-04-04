<?php

require_once 'BaseServices.php';
require_once __DIR__."/../dao/reviewtableDao.class.php";


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