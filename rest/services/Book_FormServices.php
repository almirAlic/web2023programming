<?php

class Book_FormServices {
  private $book_from_dao;
  
  public function __construct(){
    $book_from_dao = new book_formDao();
  }
  public function get_all(){
    return $this->book_from_dao->get_all();
  }
  public function get_by_id($id){
    return $this->book_from_dao->get_by_id($id);
  }
  public function add($book_form){
    return $this->book_from_dao->add($book_form);
  }
  public function update($book_form, $id){
    return $this->book_from_dao->update($book_form, $id);
  }
  public function delete($id){
    return $this->book_from_dao->delete($id);
  }



}
?>