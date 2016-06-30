<?php
include('connection.php');
 $connection = new connection();

class dash_user_data extends connection{

//        private $db;
//         public function __construct(){
//            $this->db = new connection();
//             $this->db = $this->db->dbConnect();
//         }
        public function users(){ 

            $dash_data=$this->db->prepare("SELECT DISTINCT * FROM users");
            $dash_data->execute();  
       
            $user_count = $dash_data -> rowCount();
            echo $user_count;
        }
    
      public function crowdsources(){ 

            $dash_data_crowdsource=$this->db->prepare("SELECT  * FROM crowd_source");
            $dash_data_crowdsource->execute();  
          
            $crowd_source_count = $dash_data_crowdsource -> rowCount();
            echo $crowd_source_count;
        }
    
    public function livecrowdsource(){ 
            $dash_live_crowdsource=$this->db->prepare("SELECT  * FROM crowd_source WHERE crowd_source_status=1");
            $dash_live_crowdsource->execute();  
          
             while($row = $dash_live_crowdsource->fetch()){
      
//            $user_count = $dash_live_crowdsource -> rowCount();
//             $cs_desc = $row['crow_src_desc'];
//             $cs_num_question = "1";
//             $cs_start_date = $row['crow_src_start_date'];
//             $cs_end_date = $row['crow_src_end_date'];
//             $res  = array($cs_name);
            echo $row['crowd_source_name'];
        
        }
        }
      public function pending_crowdsource(){ 
            $dash_pending_crowdsource=$this->db->prepare("SELECT * FROM crowd_source WHERE crowd_source_status=0");
            $dash_pending_crowdsource->execute();  
          
         $pending_source_count = $dash_pending_crowdsource -> rowCount();
            echo $pending_source_count;
        
        }

    

}
      

    

?>