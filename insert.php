<?php

require_once("rest/dao/book_formDao.class.php");
$book_form_dao = new book_formDao();
$name = $_REQUEST['name001'];
$email = $_REQUEST['email001'];
$results = $book_form_dao->add($name, $email);
print_r($results);

 /*$servername = "localhost";
 $username = "root";
 $password = "12345678";
 $schema = "travel";

 try{
  $conn = new PDO("mysql:host=$servername;dbname=$username",$password,$schema);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  
  //this how we insert
  print_r($_REQUEST);
  $name = $_REQUEST['name001'];
  $email = $_REQUEST['email001'];
  $stmt = $conn->prepare("INSERT * INTO book_form (name, email) VALUES ('$name', '$email')");
  $result = $stmt->execute();
  print_r($result);

 }catch(PDOException $e){
  echo "Connection failed: " . $e->getMessage(); 
 }*/

 


?>