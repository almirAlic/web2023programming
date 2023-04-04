<?php

require_once 'BaseServices.php';
require_once __DIR__."/../dao/book_formDao.class.php";

class Book_FormServices extends BaseService{
  
  public function __construct(){
    parent::__construct(new book_formDao);
  }



}
?>