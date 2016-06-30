


   //initializing crowd source constructor
function crowd_source() {
	
}


//validatin admin email
crowd_source.prototype.getCrowdSourceName = function(crowdSourceName){ 
	   return crowdSourceName;
};

//validatin admin email
crowd_source.prototype.getCrowdSourceDescription = function(crowdSourceDescription){ 
	   return crowdSourceDescription;
};	

crowd_source.prototype.getNumberOfWords = function(stringValue){ 
     
	   for (var i = 0; i < stringValue.length; i++)
            if (stringValue[i] === " ") { // if a space is found in str
             totalNumberOfWords = totalNumberOfWords +1; // add 1 to total so far
     }
	   return totalNumberOfWords;
};	

crowd_source.prototype.isEmpty = function(stringValue){ 
     
	   if (stringValue == ""){
		     return true;
	   }else{
		     return false;
	   }
};

   //creating validate method to validate the name and description of the crowd source
crowd_source.prototype.validateCrowdSourceName = function(crowdSourceName) {
	
	//take out space and specia characters on crowd source name
	crowdSourceName = crowdSourceName.replace(/[^\w\s]/gi, '');
	crowdSourceName= crowdSourceName.trim(crowdSourceName);
	
	//checking of crowdsource name is empty
	if (this.isEmpty(crowdSourceName) == true){
		alert("This field can not be empty");
		return false;
	}else{
		//checking if crowd source name has at least 2 words
		if(this.getNumberOfWords(crowdSourceName) < 2 ){
			 //if yes throw error message
			 alert("at least 2 words required here!!");
			return false;
		}else{
			//if no checkif it already exist in the database
			return crowdSourceName;
		}
		
	}
    
	
};


   //creating validate method to validate the name and description of the crowd source
crowd_source.prototype.validateCrowdSourceDescription = function(crowdSourceDescription) {
	
	//take out space and crowdSourceName characters on crowd source name
	crowdSourceDescription = crowdSourceDescription.replace(/[^\w\s]/gi, '');
	crowdSourceDescription= crowdSourceDescription.trim(crowdSourceDescription);
	
	//checking of crowdsource name is empty
	if (this.isEmpty(crowdSourceDescription) == true){
		alert("This field can not be empty");
		return false;
	}else{
		//checking if crowd source name has at least 2 words
		if(this.getNumberOfWords(crowdSourceDescription) < 10 ){
			 //if yes throw error message
			 alert("at least 10 words required here!!");
			return false;
		}else{
			//if no checkif it already exist in the database
			return crowdSourceDescription;
		}
		
	}
    
	
};


    //checking ig the crowd source name exist
crowd_source.prototype.check_Crowd_name_exist = function(crowdSourceName,crowd_source_inserted_status,cachedCrowdSourceNAme) {
	
	 //if validation i successfull then make the ajax call to the database to see if it exists
     if (this.validateCrowdSourceName(crowdSourceName) !== false ){
		   if(crowd_source_inserted_status == false){
			    //alert (this.validateCrowdSourceName(crowdSourceName) + crowd_source_inserted_status);
		        this.crowdSourceAjaxCall("param=" + this.validateCrowdSourceName(crowdSourceName) ,"checkCrowdSourceExist");  
		   }else{
		         alert("The crowd Source " + cachedCrowdSourceNAme + "  already inserted");
		   
	        }
	 }
};

crowd_source.prototype.registerCrowdSource = function(crowdSourceName,crowdSourcedesc,crowd_source_inserted_status,cachedCrowdSourceName,cachedCrowdSourceDescription) {
	       if (this.validateCrowdSourceDescription(crowdSourcedesc) !== false  && this.validateCrowdSourceName(crowdSourceName) !== false ){
		           var  parameters= [crowdSourceName,crowdSourcedesc];
				   
				   this.crowdSourceAjaxCall("param="+ parameters,"registerCrowdSource",crowdSourceName,crowdSourcedesc);
				   //alert("description "+ cachedCrowdSourceDescription);
	      } 
};

crowd_source.prototype.hasChanged = function(cachedCrowdSourceName,newCrowdSourceName) {
	       if( newCrowdSourceName.trim() == cachedCrowdSourceName.trim()){
			    return false;
		   }else{
			    return true;
		   }
		   
};

crowd_source.prototype.modifyCrowdSourceDetails = function(cachedCrowdSourceName,newCrowdSourceName,cachedCrowdSourceDescription,newCrowdSourceDescription) {
	       
		   if(this.hasChanged(cachedCrowdSourceName,newCrowdSourceName) == true && this.hasChanged(cachedCrowdSourceDescription,newCrowdSourceDescription) == true){
			     //alert("caheched name " + cachedCrowdSourceName + " cached description " + cachedCrowdSourceDescription );
				 //alert("new name " + newCrowdSourceName + " new description " + newCrowdSourceDescription );
				 var  parameters= [newCrowdSourceName,newCrowdSourceDescription,cachedCrowdSourceName];
			    this.crowdSourceAjaxCall("param="+ parameters,"updateCrowdSoureNameAndDescription",newCrowdSourceName,newCrowdSourceDescription);
			    
		    }else if(this.hasChanged(cachedCrowdSourceName,newCrowdSourceName) == false && this.hasChanged(cachedCrowdSourceDescription,newCrowdSourceDescription) == true){
			    alert("only description has changed changed!!");
				//alert("cached description " + cachedCrowdSourceDescription );
				 //alert( " new description " + newCrowdSourceDescription );
				var  parameters= [newCrowdSourceDescription,cachedCrowdSourceName];
			    this.crowdSourceAjaxCall("param="+ parameters,"updateCrowdSoureDescription",newCrowdSourceName,newCrowdSourceDescription);
			    
		    }else if(this.hasChanged(cachedCrowdSourceName,newCrowdSourceName) == true && this.hasChanged(cachedCrowdSourceDescription,newCrowdSourceDescription) == false){
			    alert("only name has changed changed!!");
				var  parameters= [newCrowdSourceName,cachedCrowdSourceName];
			    this.crowdSourceAjaxCall("param="+ parameters,"updateCrowdSoureName",newCrowdSourceName,newCrowdSourceDescription);
		    }else{
			    //alert("you did not make any modification!!");
		    }
};


//our ajax call for crowd source
crowd_source.prototype.crowdSourceAjaxCall = function(parameter,action,crowdSourceName,crowdSourceDescription) {
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
                 if (data.response == "crowd_source_exist"){
					  
				 }else if(data.response == "crowd_source_inserted"){
						  crowd_source_inserted_status = true;
						  cachedCrowdSourceNAme = crowdSourceName;
						  cachedCrowdSourceDescription = crowdSourceDescription;
						  
						  $("#modifyCrowdSource").show();
						  $("#saveCrowdSource").hide();
						  $(".selectquestions").show();
						  
						  //alert(cachedCrowdSourceNAme, cachedCrowdSourceDescription );
					 
				 }else if(data.response == "crowd_source_all_updated"){
						  crowd_source_inserted_status = true;
						  cachedCrowdSourceNAme = crowdSourceName;
						  cachedCrowdSourceDescription = crowdSourceDescription;
						  //alert(cachedCrowdSourceNAme, cachedCrowdSourceDescription );
					 
				 }else if(data.response == "updateCrowdSoureDescription"){
						  crowd_source_inserted_status = true;
						  cachedCrowdSourceDescription = crowdSourceDescription;
						  //alert(cachedCrowdSourceDescription );
					 
				 }else if(data.response == "crowd_source_name_updated"){
						  crowd_source_inserted_status = true;
						  cachedCrowdSourceDescription = crowdSourceDescription;
						  //alert(cachedCrowdSourceDescription );
					 
				 }

				 
			}
		  },
		
		error: function(){
			alert("Unexpected error, Please try again");
		}
	});

}