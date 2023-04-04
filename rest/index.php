<?php
require "../vendor/autoload.php";
require "dao/book_formDao.class.php";
require "dao/ReviewDao.class.php";
require "services/Book_FormServices.php";
require "services/ReviewServices.php";

Flight::register('book_form_services', "Book_FormServices");
Flight::register('review_services', "ReviewServices");

require_once "routes/Book_FormRoutes.php";
require_once "routes/ReviewRoutes.php";

/*Flight::route("/", function(){
  echo "Hello from / route";
});

Flight::route("GET /book_form", function(){
  //$book_form_dao = new book_formDao();
  //$results = Flight::book_form_dao()->get_all();
  Flight::json(Flight::book_form_dao()->get_all());

});

Flight::route("GET /book_form_by_id", function(){
  Flight::json(Flight::book_form_dao()->get_by_id(Flight::request()->query['id']));

});

Flight::route("GET /book_form/@id", function($id){
  //$book_form_dao = new book_formDao();
  //$results = $book_form_dao->get_by_id($id);
  Flight::json(Flight::book_from_dao()->get_by_id($id));

});

Flight::route("POST /book_form", function(){
  //$book_form_dao = new book_formDao();
  $request = Flight::request()->data->getData();
  //$book_form_dao->add($request);
  Flight::json(['message' => "Added successfully",
                'data' => Flight::book_form_dao()->add($request)
              ]);
});

Flight::route("DELETE /book_form/@id", function($id){
  //$book_form_dao = new book_formDao();
  Flight::book_form_dao()->delete($id);
  Flight::json(['message' => "Deleted successfully"]);

});

Flight::route("PUT /book_form/@id", function($id){
  //$book_form_dao = new book_formDao();
  $book_form = Flight::request()->data->getData();
  //$response = $book_form_dao->update($book_form, $id);
  Flight::json(['message' => "Edit successfully",
                'data' => Flight::book_form_dao()->update($book_form, $id)
              ]);
});*/


Flight::start();

?>
