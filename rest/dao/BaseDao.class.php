<?php
require_once __DIR__."/../Config.class.php";
  class BaseDao{
    private $conn;

    private $table_name;

    /*constructor of Dao*/
    /*class construtor used to establish connection to db*/
    public function __construct($table_name){
      try{
        $this->table_name = $table_name;
        $servername = Config::DB_HOST();
        $username = Config::DB_USERNAME();
        $password = Config::DB_PASSWORD();
        $schema = Config::DB_SCHEMA();
    
       $this->conn = new PDO("mysql:host=$servername;dbname=$schema",$username,$password);
     
       $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       echo "Connected successfully";
       
      }catch(PDOException $e){
       echo "Connection failed: " . $e->getMessage(); 
      }
     }

    /*method used to get all entities from db*/
    public function get_all(){
      $stmt = $this->conn->prepare("SELECT * FROM " . $this->table_name);
      $stmt->execute();
      return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /*method used to get by id from db*/
    public function get_by_id($id){
      $stmt = $this->conn->prepare("SELECT * FROM " . $this->table_name . " WHERE id = : id");
      $stmt->execute(['id' => $id]);
      return  $stmt->fetchAll();
    }

    /*method used to delete*/
    public function delete($id){
      $stmt = $this->conn->prepare("DELETE FROM " . $this->table_name . " WHERE id = :id");
      $stmt->bindParam(':id', $id);
      $stmt->execute();
    }

    /*method used to add entity info to db*/
    public function add($entity){
      $query = "INSERT INTO " . $this->table_name . " (";
      foreach($entity as $column=> $value){
        $query.= $column . ', ';
      }
      $query = substr($query, 0, -2);
      $query.= ") VALUES (";
      foreach($entity as $column=> $value){
        $query.= ":" . $column . ', ';
      }
      $query = substr($query, 0, -2);
      $query.= ")";

      $stmt = $this->conn->prepare($query);
      $stmt->execute($entity);
      $entity['id'] = $this->conn->lastInsertId();
      return $entity;
    }

    /*method used to update entity info to db*/
    public function update($entity, $id, $id_column = "id"){
      $query = "UPDATE " . $this->table_name . " SET";
      foreach($entity as $column => $value){
        $query.= $column . "=:" .$column . ", ";
      }
      $query = substr($query, 0, -2);
      $query.= " WHERE ${id_column} = :id";
      $stmt = $this->conn->prepare($query);
      $entity['id'] = $id;
      $stmt->execute($entity);
      return $entity;
    }




  }
?>