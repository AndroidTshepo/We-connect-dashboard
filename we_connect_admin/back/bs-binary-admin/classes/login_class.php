<?php
include('connection.php');    
    
    $connection = new connection();
    //$connection ->select_db();

class admin_login extends connection{
    var $username;
    var $password;
    
    function clean_credintials(){
        
        $this->username = strip_tags(trim($_POST['username']));
        $this->password = $_POST['password'];
        
        if(empty($this->username = strip_tags(trim($_POST['username']))) ||empty($this->password = $_POST['password'])){
            echo "fields are empty";
             header('Location:../login.php?please fill in all fields');
        }else{
            return array($this->username,$this->password);
        }
    }
    
        function check_credintials(){
        $user_email = $this->clean_credintials()[0];
        $pass = $this->clean_credintials()[1];
         // echo $user;  
        $admin = $this->db->prepare("SELECT * FROM administrator WHERE BINARY`admin_email`='$user_email' AND BINARY`admin_password`='$pass'");
        $admin ->execute();
        
           
        while($row = $admin->fetch()){   
            $u_email = $row['admin_email'];
            $u_pass = $row['admin_password'];
            $u_id = $row['admin_id'];
        }

            if(empty($u_email)|| empty($u_pass)){
                header('Location:../login.php?none in the database');
                
            }elseif( $u_email === $user_email || $u_pass === $pass){
                session_start();
                $_SESSION["user_email"] = $u_email;
                $_SESSION["unique_identity"] = $u_id;
                 header('Location:../index.php');
            }
        
        }
}

$form_cred = new admin_login();
$form_cred->clean_credintials();


$admin = new admin_login();
$admin->check_credintials();


//$select_user = new connection();
//$select_user->select_db();



?>