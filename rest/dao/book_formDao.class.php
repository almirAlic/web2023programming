<?php

require_once "BaseDao.class.php";

class book_formDao extends BaseDao{

  public function __construct(){
     parent::__construct("book_form");
  }

}
?>

/*class book_formDao{

  private $conn;

  /*constructor of Dao*/
  /*class construtor used to establish connection to db*/
  /*public function __construct(){
  try{
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $schema = "travel";

   $this->conn = new PDO("mysql:host=$servername;dbname=$schema",$username,$password);
 
   $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected successfully";
   
  }catch(PDOException $e){
   echo "Connection failed: " . $e->getMessage(); 
  }
 }*/

  /*method used to get all info from db*/
  /*public function get_all(){
    $stmt = $this->conn->prepare("SELECT * FROM book_form");
    $stmt->execute();
    return  $stmt->fetchAll(PDO::FETCH_ASSOC);

  }

    /*method used to add all info to db*/
  /*public function add($book_form){
    $stmt = $this->conn->prepare("INSERT INTO book_form (name, email) VALUES ('name', 'email')");
    $stmt->execute($book_form);
    $book_form['id'] = $this->conn->lastInsertId();
    return $book_form;
  
  }*/

  /*method used to update all info to db*/
  /*public function update($book_form, $id){
    $book_form['id'] = $id;
    $stmt = $this->conn->prepare("UPDATE book_form SET name = :name, email = :email WHERE id=:id");
    $stmt->execute($book_form);
    return $book_form;
    
  }

  /*method used to delete*/
  /*public function delete($id){
    $stmt = $this->conn->prepare("DELETE FROM book_form  WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
  }

    /*method used to get by id from db*/
  /*public function get_by_id($id){
    $stmt = $this->conn->prepare("SELECT * FROM book_form WHERE id = :id");
    $stmt->execute(['id' => $id]);
    return  $stmt->fetchAll();

  }


}*/
