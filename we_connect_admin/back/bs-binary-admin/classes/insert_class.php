<?php

include('connection.php');
 $connection = new connection();

class crowd_source extends connection{
    
    function manipulate(){
    if(isset($_POST['load_cs'])){    
$crowdSourceName = $_POST['crowdSourceName'];
$crowdSourceDesc = $_POST['crowdSourceDesc'];

// insert crowd source details into the data base
    $insert_cs_d = $this->db ->prepare("INSERT INTO `crowd_source`(`crowd_source_name`,`crowd_source_description`)VALUES('$crowdSourceName','$crowdSourceDesc')");
    $insert_cs_d -> execute(); 

    }else{
        // select the id for the currect crowd source
        $select_cs = $this -> db->prepare("SELECT DISTINCT * FROM crowd_source ORDER BY crowd_source_id DESC LIMIT 1");
        $select_cs -> execute();
        
        while($row = $select_cs->fetch()){
            $crowd_source_id = $row['crowd_source_id'];
        }
    }

if(isset($_POST['subfortf'])){
       $tf_question = $_POST['tf_question'];
       $tf_op = $_POST['tf_op'];
       $tf_op2 = $_POST['tf_op2'];
    
//insert question
     $insert_cs_q = $this -> db ->prepare("INSERT INTO `questions`(`question`,`crowd_source_crowd_source_id`)VALUES('$tf_question','$crowd_source_id')");
     $insert_cs_q -> execute(); 

//select current question id
    $select_cs_q = $this -> db->prepare("SELECT DISTINCT * FROM questions ORDER BY question_id DESC LIMIT 1");
    $select_cs_q -> execute();
    while($row = $select_cs_q ->fetch()){
        $question_id = $row['question_id'];
    }
    
//option 1
    $insert_cs_op = $this -> db ->prepare("INSERT INTO `options`(`option`,`questions_question_id`,`crowd_source_crowd_source_id`)VALUES('$tf_op','$question_id','$crowd_source_id')");
     $insert_cs_op -> execute(); 
//option 2
    
    $insert_cs_op2 = $this -> db ->prepare("INSERT INTO `options`(`option`,`questions_question_id`,`crowd_source_crowd_source_id`)VALUES('$tf_op2','$question_id','$crowd_source_id')");
     $insert_cs_op2 -> execute();  
    
}else{
    
    echo "something missing!";
}
    }
}
$form_cred = new crowd_source();
$form_cred->manipulate();
//class dash_user_data extends connection{
//
//        public function insert_crowd_source_details(){ 
//
//            $dash_data=$this->db->prepare("SELECT DISTINCT * FROM users");
//            $dash_data->execute();  
//       
//            $user_count = $dash_data -> rowCount();
//            echo $user_count;
//        }
//}


?>