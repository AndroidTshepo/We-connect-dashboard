<?php
      include "class/user_class.php";

	  $allUsersobj = new usersClass();
	  $records = $allUsersobj->retrieve_all_users();
?>