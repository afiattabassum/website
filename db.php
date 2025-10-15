<?php 
session_start();
define('SITEURL', 'http://localhost/food-order/');

define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('PASSWORD','');
define('DATABASE_NAME','food-order');


$conn = mysqli_connect ( LOCALHOST,DB_USERNAME,PASSWORD) or die (mysqli_error()); //database connect 
$db_select =mysqli_select_db($conn,DATABASE_NAME) or die (mysqli_error()); // database select



?>