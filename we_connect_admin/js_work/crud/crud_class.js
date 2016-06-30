
		
		
   //initializing crowd source constructor
function admin() {
	this.admin_id = 0;
	this.admin_Fname = "";
	this.admin_Lname = "";
	this.admin_Surname = "";
	this.admin_status = 0;
	this.admin_email = "";
	this.admin_emp_no = 0;
	this.admin_date_reg = 0;
	this.admin_last_log_on = 0;
	this.admin_password = "";
	this.admin_level = 0;
	this.admin_failed_log = 0;
	this.admin_lockout = 0;
	this.admin_role = "";
	
}



//validatin admin email
admin.prototype.validateEmail = function(admin_email){ 

	   //remove spaces
	   admin_email= $.trim(admin_email);
	   //check for @
	   email_atpos = admin_email.indexOf("@");
	   //check for dot
       email_dotpos = admin_email.lastIndexOf(".");
	   //che if it contains barclays.com
	   email_contains_status = admin_email.indexOf(email_contains) > -1;
	   
	   //check if everything is ok
	   if (email_atpos < 1 || email_dotpos <  email_atpos+2 || email_dotpos+2>=admin_email.length || email_contains_status == false ) {
            return true;
      } else{
		   //return the email
		    return admin_email;
	  }	 
};


admin.prototype.validatePassword = function(admin_password){ 

	   
	 
};
//checking if email exist
admin.prototype.ckeckIfEmailExist = function(admin_email){ 
       
	   var validEmail = admin_email;  
	   if (this.validateEmail(validEmail) == false){
		   ajaxCall("email= "+validEmail ,"ckeckIfRegemailExist");	 
	   }else{
		   return false;
	   }   	 
};

admin.prototype.getEmployeeNumber = function(employeeNumber){ 

      return employeeNumber;  
};


admin.prototype.getAdmin_password = function(admin_password){ 
       
         this.admin_password = admin_password;

      return this.admin_password;  
};

admin.prototype.deactivateAdmin= function(admin_id){ 
       
         ajaxCall("param= "+admin_id ,"deactivate"); 
};
admin.prototype.getAdminInfo= function(admin_id){ 
       
         ajaxCall("param= "+admin_id ,"get_admin_info"); 
};






admin.prototype.logAdmin = function(admin_email, admin_password){ 
       
         var paramArr = [admin_email, admin_password];

		     ajaxCall("login_param= "+paramArr ,"loginAdmin");
		 
		 //alert(paramArr);
       
};



admin.prototype.getEmployeeClearanceLevel = function(employeeClearanceLevel){ 
       
      this.admin_level = employeeClearanceLevel;

      return this.admin_level;  
};



admin.prototype.registerEmployee = function(admin_email, employeeNumber,employeeClearanceLevel){ 
      var adminEmail = this.validateEmail(admin_email) ;
	  var adminEmployeeNumber = this.getEmployeeNumber(employeeNumber) ;
	  var adminEmployeeClearanceLevel = this.getEmployeeClearanceLevel(employeeClearanceLevel) ;
	  
	  if (adminEmail == false ) {
			console.log("incorrect email format"); 
	  }else if (adminEmployeeNumber == adminEmployeeNumber ){
		   console.log(adminEmail +  " " + adminEmployeeNumber + " " + adminEmployeeClearanceLevel); 
		      var paramArr = [admin_email, adminEmployeeNumber, adminEmployeeClearanceLevel];
              ajaxCall("registration_param= "+paramArr ,"registerAdmin");
		  
	  }
	  
	  
};




var ajaxCall = function (params,action){
	var ajaxResponse;
	//alert("data sent!!!!!!!!");
	$.ajax({
		type: "POST", 
		url: "php_work/class/admin_main.php", 
		data : params+"&action="+action,
		dataType: "json",
		success: function(data){
			
		  
		   if (data){
				
				//alert(data.response);
               var response = data.response;
                   
                   if(response == "emai_exist") {
					       $('#admin_log_email').css('border-color', 'green');
						   
						   ajaxResponse = true;
						   //alert(ajaxResponse);    
				   }else if(response == "email_not_exist"){
					       $('#admin_log_email').css('border-color', 'red');
						   $("#admin_log_email").focus();
						    //alert("nooo");
						   ajaxResponse=  false;			 
				   }else if(response == "loggged_in"){
					   document.cookie ="session=trinite";
					     		 
				   }else if(response == "loggged_error"){
					   
					       $("#admin_log_email").effect("shake", { times:3 }, 75);			 
				   }else{
					   $("#displayPassword").html("New User's Password: "+response);
				   }

                 			   
			}
		  },
		
		error: function(){
			alert("Unexpected error, Please try again");
		}
	});
	
	
	return ajaxResponse;
}

