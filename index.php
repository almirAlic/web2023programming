<?php
require_once 'db.php';

$servername = "localhost";
 $username = "root";
 $password = "12345678";
 $schema = "travel";

 try{
  $conn = new PDO("mysql:host=$servername;dbname=$username",$password,$schema);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";

  $stmt = $conn->prepare("SELECT * FROM students");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

 }catch(PDOException $e){
  echo "Connection failed: " . $e->getMessage(); 
 }
?>
