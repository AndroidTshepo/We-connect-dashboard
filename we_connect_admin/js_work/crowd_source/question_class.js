


   //initializing crowd source constructor
function question(questionDescription,questionType,questionNumber) {
	this.questionDescription = questionDescription;
	this.questionType = questionType;
	this.questionNumber = questionNumber;
	//crowd_source.call(this,getNumberOfWords,isEmpty);
}


//Inherit the methods of crowd source
question.prototype = new crowd_source();


question.prototype.getQuestionDetails = function(){
	
	validatedString = new question().validateCrowdSourceName(this.questionDescription.trim());
	//isEmpty         = new question().isEmpty(this.questionDescription.trim());
	
	if(validatedString){
		
	     console.log("validation  " + validatedString  + "  the type is  "+ this.questionType + " crowd name is  " +crowdSourceName); 
	}
	//console.log("number of words for quest" + this.questionNumber + " is " + totalNumberOfWords); 
	//console.log("is empty?  " + isEmpty); 
}




question.prototype.checkIfQuestionExist = function() {
	
	  //alert (this.questionNumber);
	  validatedString = new question().validateCrowdSourceName(this.questionDescription.trim());
	 //if validation i successfull then make the ajax call to the database to see if it exists
     if (validatedString){
		   console.log("tring validated");
		   parameters= [validatedString,this.questionType, cachedCrowdSourceNAme];
		   this.questionAjaxCall("param="+ parameters,"checkIfQuestionExist", validatedString, this.questionNumber);
		   
		   
		  
	 }else{
		 console.log("tring not validated");
	 }
	 console.log(questionExist);
};

question.prototype.registerQuestion = function() {
	validatedString = new question().validateCrowdSourceName(this.questionDescription.trim());     
	for (var key in questionExist) {
                     if (questionExist.hasOwnProperty(key)) {
							  if (key == this.questionNumber){
								   var getquestion_exist_status= questionExist[key];
								   getquestion_exist_status  = getquestion_exist_status.substr(getquestion_exist_status.indexOf(",") + 1); 
 
                                      if(getquestion_exist_status.trim() == "true") {
										  question_exist_status = true;
										  
									  }else if (getquestion_exist_status.trim() == "false"){
										  question_exist_status = false;
										  
									  }
								}
                      }
          }	  
	
		  
    if (validatedString){ 
		 if (question_exist_status == false ){
			   cachedCrowdSourceNAme = cachedCrowdSourceNAme.trim();
			   parameters= [validatedString, this.questionType, cachedCrowdSourceNAme,this.questionNumber];
			   this.questionAjaxCall("param="+ parameters,"registerQuestion", this.questionDescription, this.questionNumber);
				  console.log(questionExist);
		          console.log(parameters);
		          console.log("Question exist status :" + question_exist_status);        
	     }else{
			  console.log("status not working!!" + "  reall " + question_exist_status);
		 }
		 
	}else{
		
	}
		 
};
question.prototype.modifyQuestionDescription = function() {
	       
		  for (var key in questionsInserted) {
                    if (questionsInserted.hasOwnProperty(key)) {
							 if (key == this.questionNumber){
								     
									 //get the details of the currennt question
									 questionDetails= questionsInserted[key].split(",");
									 
									 for (var i = 0; i < questionDetails.length; i++) {
                                            //get the Bquestion description  value before the comma
										  	 cachedQuestionDescription = questionDetails[0];
									 
                                    }
									      
								}
                      }
                     }
			console.log("the cached question "+ cachedQuestionDescription);	
			console.log("the cached question "+ this.questionDescription);
		   hasChanged = new question().hasChanged(cachedQuestionDescription,this.questionDescription.trim());
		   
		   if(hasChanged == true){
			    console.log("changed!!");
		    }else{
			    console.log("you did not make any modification!!");
		    }
};


//our ajax call for crowd source
question.prototype.questionAjaxCall = function(parameter,action,questionDescription,questionNumber) {
	//alert("data sent!!!!!!!!");
	$.ajax({
		type: "POST", 
		url: "php_work/main.php", 
		data : parameter+"&action="+action,
		dataType: "json",
		success: function(data){
			//alert("data sent!!!!!!!!");
		  
		   if (data){
				
				//alert(data.response);   
                 if (data.response == "question_exist"){
					  
					  questionExist[questionNumber]= questionDescription + "," + true;
					  questionsInserted[questionNumber]= questionDescription + "," + true;
				 }else if (data.response == "question_not_exist"){
					  questionExist[questionNumber]= questionDescription + "," + false;
					  questionsInserted[questionNumber]= questionDescription + "," + false;
				 }else if (data.response == "question_inserted"){
					  questionExist[questionNumber]= questionDescription + "," + true;
					  questionsInserted[questionNumber]= questionDescription + "," + true;
				 }else{
					 questionExist[questionNumber]= questionDescription + "," + false;
					  questionsInserted[questionNumber]= questionDescription + "," + false;
				 }
					  
					  //cache this succeded inserted question into this object -> questionsInserted and change its status to true
					  //questionsInserted[questionNumber]= questionDescription + "," + true;
					  
					console.log(questionExist); 
                    console.log(questionsInserted);					
				 }		
			
		  },
		
		error: function(){
			alert("Unexpected error, Please try again");
		}
	});

}



//for (var key in questionsInserted) {
                         //if (questionsInserted.hasOwnProperty(key)) {
							  //if (key == this.questionNumber){
								     
									 //get the details of the currennt question
									 //questionDetails= questionsInserted[key].split(",");
									 
									 //for (var i = 0; i < questionDetails.length; i++) {
                                             //get the Bquestion description  value before the comma
										  	 //cachedQuestionDescription = questionDetails[0];
									 
                                    //}
									         //get the Boolean value after the comma
									          //question_Inserted_status= questionsInserted[key];
									          //question_Inserted_status  = question_Inserted_status.substr(question_Inserted_status.indexOf(",") + 1);
									 
                                             //console.log("quest " + validatedString + " key " + key + "  inserted?? " + question_Inserted_status + "  Description is " + cachedQuestionDescription);
							  
								//}
                      //}
                     //}