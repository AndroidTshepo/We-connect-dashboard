<?php

include('connection.php');

class dash_user_data{

        private $db;
         public function __construct(){
            $this->db = new connection();
             $this->db = $this->db->dbConnect();
         }
        public function users(){ 

            $dash_data=$this->db->prepare("SELECT DISTINCT * FROM user_tbl");
            $dash_data->execute();  
       // while($row = $dash_data->fetch()){
      
            $user_count = $dash_data -> rowCount();
//             $cs_desc = $row['crow_src_desc'];
//             $cs_num_question = "1";
//             $cs_start_date = $row['crow_src_start_date'];
//             $cs_end_date = $row['crow_src_end_date'];
             //$res  = array($cs_name);
        echo $user_count;
        //}//return ($ser_name);
        }
    
      public function crowdsources(){ 

            $dash_data_crowdsource=$this->db->prepare("SELECT  * FROM crowd_source_tbl");
            $dash_data_crowdsource->execute();  
          
            $crowd_source_count = $dash_data_crowdsource -> rowCount();
            echo $crowd_source_count;
        }

    

}
      

    

?>