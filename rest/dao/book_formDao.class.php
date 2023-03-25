<?php

class book_formDao{

  private $conn;

  /*constructor of Dao*/
  /*class construtor used to establish connection to db*/
  public function __construct(){
  try{
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $schema = "travel";

   $this->conn = new PDO("mysql:host=$servername;dbname=$username",$password,$schema);
 
   $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected successfully";
   
  }catch(PDOException $e){
   echo "Connection failed: " . $e->getMessage(); 
  }
 }

  /*method used to get all info from db*/
  public function get_all(){
    $stmt = $this->conn->prepare("SELECT * FROM book_form");
    $stmt->execute();
    return  $stmt->fetchAll(PDO::FETCH_ASSOC);

  }

    /*method used to add all info to db*/
  public function add($name, $email){
    $stmt = $this->conn->prepare("INSERT INTO book_form (name, email) VALUES ('?', '?')");
    $result = $stmt->execute([$name, $email]);
  
  }

  /*method used to update all info to db*/
  public function update($name, $email, $id){
    $stmt = $this->conn->prepare("UPDATE book_form SET name = ':name', email = ':email' WHERE id=:id");
    $stmt->execute(['name'=>$name, 'email'=>$email, 'id'=>$id]);
    
  }

  /*method used to delete*/
  public function delete($id){
    $stmt = $this->conn->prepare("DELETE FROM book_form  WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
  }

  




}
?>