<?php

require 'vendor/autoload.php';

Flight::route('/',function(){
  echo 'Hello world Almire';
});

Flight::start();

?>