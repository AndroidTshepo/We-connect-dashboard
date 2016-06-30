

   //initializing crowd source constructor
function option(optionDescription,questionNumber) {
	this.optionDescription = optionDescription;
    this.questionNumber = questionNumber;	
}

//Inherit the methods of crowd source
option.prototype = new crowd_source();


option.prototype.dispalyInfo= function(){
	
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
					 console.log(this.optionDescription,this.questionNumber);
	                 console.log("question description" + cachedQuestionDescription);
	
	  validatedString = new question().validateCrowdSourceName(this.optionDescription.trim());
	 //if validation i successfull then make the ajax call to the database to see if it exists
     if (validatedString){
		   console.log("tring validated");
		     parameters= [validatedString,cachedQuestionDescription,cachedCrowdSourceNAme];
		     this.optionAjaxCall("param="+ parameters,"registerIfOption", validatedString,cachedQuestionDescription,this.questionNumber);	  
	 }else{
		 console.log("tring not validated");
	 }
}




//our ajax call for crowd source
option.prototype.optionAjaxCall = function(parameter,action,optionDescription, questionDescription,questionNumber) {
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
               		if (data.response == "option_inserted"){
					  $(".pull-right"+ questionNumber).append("<p style='color:white;'>" + optionDescription +"</p>");
				    }else{
						console.log(data.response);
					}		
				 }		
			
		  },
		
		error: function(){
			alert("Unexpected error, Please try again");
		}
	});

}