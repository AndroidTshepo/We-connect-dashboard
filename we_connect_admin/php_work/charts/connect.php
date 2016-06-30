<?php
@session_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="we_connect"; // Database name 
$connection_error= "Sorry could not connect" or die($connection_error);
// Connect to server and select databse.
$dbConnect=mysql_connect("$host", "$username", "$password"); 
if ($dbConnect==TRUE){
$dbsel = mysql_select_db("$db_name")or die($connection_error);
 //echo "Database connected";
 //echo $dbsel;
}
 $errors = array(); 
?>