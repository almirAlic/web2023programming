<?php

require_once("rest/dao/book_formDao.class.php");
$book_form_dao = new book_formDao();

$type = $_REQUEST['type'];

switch($type) {

  case 'add':
    $name = $_REQUEST['name001'];
    $email = $_REQUEST['email001'];
    $results = $book_form_dao->add($name, $email);
    print_r($results);
    break;

  case 'delete':

      break;

  case 'update':

      break;

  case 'get':
  default:
      $results = $book_form_dao->get_all();
      print_r($results);
      break;

}

?>