<?php

require_once("rest/dao/book_formDao.class.php");
$book_form_dao = new book_formDao();

$results = $book_form_dao->get_all();
print_r($results);

 /*$servername = "localhost";
 $username = "root";
 $password = "12345678";
 $schema = "travel1";

 try{
  $conn = new PDO("mysql:host=$servername;dbname=$schema",$username,$password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";

  //will give us key value pers to see the list from database
  $stmt = $conn->prepare("SELECT * FROM book_form");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  print_R($result);

 }catch(PDOException $e){
  echo "Connection failed: " . $e->getMessage(); 
 }*/

 


?>