<?php
// Configs for the database

//Session start
if (!isset($_SESSION)) {
  session_start();
}
// Aktivera felrapportering (ta bort innan sidan laddas upp)
error_reporting(-1);
ini_set("display_errors", 1);

// auto lodes the classes
spl_autoload_register(function ($class_name) {
  include 'classes/' . $class_name . '.class.php';
});

// Database settings
define("DBHOST", 'localhost'); //host
define("DBUSER", ''); //name of user
define("DBPASS", ''); //password 
define("DBDATABASE", ''); //name of database
