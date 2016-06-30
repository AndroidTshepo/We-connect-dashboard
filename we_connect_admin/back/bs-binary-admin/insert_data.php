<?php
//include('classes/dashboard_class.php');

$db = new PDO("mysql:host=localhost;dbname=we_connect","root","");

if(isset($_POST['sub'])){
//$na = $_POST['txt'];
//echo "lol ".$na;
    if(isset($_POST['option'])){
    $quest = $_POST['quest'];
    echo $quest;
    var_dump( $_POST['option'] );
foreach ( $_POST['option'] as $key => $value )
{
    echo $value.',';
    
     $dash =$db->prepare("INSERT INTO option_tbl (`option_id`,`option_desc`,`option_date_added`,`option_removed_status`,`quest_id`) VALUE(null,'$value','2016-03-15 00:00:00','0','1') ");
            $dash -> execute();  
}
    
    
}else{echo "not";}
}


if($_FILES['photo']['name'])
{
	//if no errors...
	if(!$_FILES['photo']['error'])
	{
		//now is the time to modify the future file name and validate the file
		$new_file_name = strtolower($_FILES['photo']['tmp_name']); //rename file
		if($_FILES['photo']['size'] > (1024000)) //can't be larger than 1 MB
		{
			$valid_file = false;
			$message = 'Oops!  Your file\'s size is to large.';
		}
		$dir = 'img/'.basename($_FILES['photo']['name']);
		//if the file has passed the test
		if($new_file_name != false)
		{
            //$n = $_FILES['field_name']['tmp_name'];
			//move it to where we want it to be
			move_uploaded_file($_FILES['photo']['tmp_name'], $dir);
             $dash_test =$db->prepare("INSERT INTO option_tbl (`option_id`,`option_desc`,`option_date_added`,`option_removed_status`,`quest_id`) VALUE(null,'$dir','2016-03-15 00:00:00','0','1') ");
            $dash_test -> execute(); 
			echo 'Congratulations!  Your file was accepted.';
		}
	}
	//if there is an error...
	else
	{
		//set that to be the returned message
		$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['photo']['error'];
	}
}
?>