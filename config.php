<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'joma');
   define('DB_PASSWORD', 'joma');
   define('DB_DATABASE', 'pedidos');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   if (!$db) {
		die("Error conexión: " . mysqli_connect_error());
				}
  
?>
