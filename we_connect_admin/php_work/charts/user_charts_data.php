
<?php

  include "user_class.php";

 $userObjt = new usersClass(); 

if(isset($_POST['param']) ){
		$parameter = $_POST['param'];
		
			$response['response'] =$userObjt->getUsersInfo($parameter);
	        echo json_encode($userObjt->getUsersInfo($parameter));
		
}else{
	$response['response']="nothing_posted";
echo json_encode($response);
}

?>