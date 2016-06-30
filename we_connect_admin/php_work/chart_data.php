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


//the SQL query to be executed
$query = mysql_query("SELECT admin_status FROM admin");

//storing the result of the executed query
$queryNumRow =mysql_num_rows($query);

//initialize the array to store the processed data
$jsonArray = array();

$admin_statCountact=0;
$admin_statCountInact=0;
//check if there is any data returned by the SQL Query
if ($queryNumRow  != 0) {
  //Converting the results into an associative array
  $jsonArrayItem = array();
  while($row = mysql_fetch_assoc($query)) {
	  $admin_status= $row['admin_status'];
      
	      if ($admin_status == 1){
			  
              $jsonArrayItem['label'] = "active";
		  }else{
			   $jsonArrayItem['label'] = "inactive";
		  }
    //append the above created object into the main array.
    array_push($jsonArray, $jsonArrayItem);
  }
}



//set the response content type as JSON
header('Content-type: application/json');
//output the return value of json encode using the echo function. 
echo json_encode($jsonArray);
?>
