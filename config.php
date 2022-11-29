<?php 
session_start();
// error_reporting(E_ERROR|E_PARSE|E_NOTICE|E_USER_ERROR);

// base url 
define("URL","http://127.0.0.1/php/oop/simple-project-oop/");

// root path
define("ROOT_PATH",__DIR__. DIRECTORY_SEPARATOR);
define("CORE_PATH",__DIR__. DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR);

define("DB_CONNECTION",["dbhost"=>"localhost","dbuser"=>"root","dbpassword"=>"","dbname"=>"simple_oop_project"]);

require_once CORE_PATH."DB.php";
require_once CORE_PATH."Session.php";
require_once CORE_PATH."Request.php";
require_once CORE_PATH."Validation.php";
require_once CORE_PATH."Response.php";
require_once CORE_PATH."Provider.php";

