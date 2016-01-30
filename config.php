<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'ShoppingApplication');
// Create connection
//$db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD);
$conn = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
//echo 'Connected successfully<br />';
$sql = "CREATE TABLE IF NOT EXISTS Users( ".
       "id INT NOT NULL AUTO_INCREMENT, ".
       "username VARCHAR(100) NOT NULL, ".
       "password VARCHAR(40) NOT NULL, ".
       "createdAr DATE, ".
       "PRIMARY KEY ( id )); ";
mysql_select_db(DB_DATABASE);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
//echo "Table created successfully\n";
$conn->close();
?>