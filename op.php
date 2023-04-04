<?php

require_once("rest/dao/book_formDao.class.php");
$book_form_dao = new book_formDao();

$type = $_REQUEST['type'];

switch($type) {

  case 'add':
    $name = $_REQUEST['name001'];
    $email = $_REQUEST['email001'];
    $book_form_dao->add($name, $email);
    break;

  case 'delete':
    $id = $_REQUEST['id'];
    $book_form_dao->delete($id);
    break;

  case 'update':
    $name = $_REQUEST['name001'];
    $email = $_REQUEST['email001'];
    $id  = $_REQUEST['id'];
    $book_form_dao->update($name, $email, $id);
    break;

  case 'get':
  default:
    $results = $book_form_dao->get_all();
    print_r($results);
    break;

}

?>