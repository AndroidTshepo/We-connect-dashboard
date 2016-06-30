
        //declaring our global variables
        var admin_email;
		var admin_employeeNumber;
		var employeeClearanceLevel ;
		var admin_password;
		var admin_id;
		var adminObj = new admin();
			
			
			
		//variables for validation
        var email_atpos;
        var email_dotpos;
		var email_contains = "barclays.com";
		var special_characters = /^(?=.*[0-9_\W]).+$/;

	
     //Dealing with registration form

			    $("#admin_reg_emp_num").keydown(function (e) {
			 
					// Allow: backspace, delete, tab, escape, enter and .
					if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
						 // Allow: Ctrl+A, Command+A
						(e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
						 // Allow: home, end, left, right, down, up
						(e.keyCode >= 35 && e.keyCode <= 40)) {
							 // let it happen, don't do anything
							 return;
					}
					// Ensure that it is a number and stop the keypress
					if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
						e.preventDefault();
					}		
			   });

		      $( "#admin_reg_emp_num").focusout(function() {
				admin_employeeNumber= $("#admin_reg_emp_num").val();
				 adminObj.getEmployeeNumber(admin_employeeNumber);
				 
			  });
			  
			//register admin	
			$(document).on("click",".registerBtn",function(){
				employeeClearanceLevel = $('#selectClearance option:selected').text();
				admin_employeeNumber= $("#admin_reg_emp_num").val();
				admin_reg_email= $("#admin_reg_email").val();
				
				adminObj.registerEmployee(admin_reg_email, admin_employeeNumber, employeeClearanceLevel);	
			});
			
			
	//Dealing with login form
			$("#admin_log_email").focusout(function() {
				admin_email = $("#admin_log_email").val();
				
				if(adminObj.validateEmail(admin_email) == true ){
					$('#admin_log_email').css('border-color', 'red');
					$("#admin_log_email").focus();
					
				}else{
					adminObj.ckeckIfEmailExist(admin_email) ;
				}
				
				adminObj.ckeckIfEmailExist(admin_email);
				
			});
			
			//register admin	
			$(document).on("click",".loginbtn",function(){
				admin_password = $('#admin_password').val();
				admin_email = $("#admin_log_email").val();
				
				adminObj.logAdmin(admin_email,admin_password);	
			});



			// deactivate a specific adminadmin 
				$(document).on("click","."+DeactivateAdmin,function(){
					var admin_id = $(this).attr("id");
					//alert("okkk  " + admin_id  );
					if(admin_id){
						if(confirm("Do you really want to deactivate this Admin?"))
							adminObj.deactivateAdmin(admin_id);
					}
					
					$.post("admin_deactivate.php?admin_id="+ admin_id,function (){
						 $.dialog.open({
						  title:"Admin Details",
						  inFrame:true,
						  size:{
							width:1024,
							height:768
						  },
						  url:"admin_deactivate.php?admin_id="+ admin_id
					});
					});
				});
	
	            // reset password of a specific adminadmin 
				$(document).on("click","."+resetPass,function(){
					var admin_id = $(this).attr("id");
					//alert("okkk  " + admin_id  );
					if(admin_id){
						if(confirm("Do you really want to deactivate this Admin?"))
							adminObj.deactivateAdmin(admin_id);
					}
					
					$.post("admin_deactivate.php?admin_id="+ admin_id,function (){
						 $.dialog.open({
						  title:"Admin Details",
						  inFrame:true,
						  size:{
							width:1024,
							height:768
						  },
						  url:"admin_reset_password.php?admin_id="+ admin_id
					});
					});
				});
	
	
				// change level of a specific adminadmin 
				$(document).on("click","."+changeLevel,function(){
					var admin_id = $(this).attr("id");
					//alert("okkk  " + admin_id  );
					if(admin_id){
						if(confirm("Do you really want to change level for this Admin?"))
							adminObj.deactivateAdmin(admin_id);
					}
					
					$.post("admin_change_level.php?admin_id="+ admin_id,function (){
						 $.dialog.open({
						  title:"Admin Details",
						  inFrame:true,
						  size:{
							width:1024,
							height:768
						  },
						  url:"admin_change_level.php?admin_id="+ admin_id
					});
					});
				});
				
				// view details of a specific admin
					$(document).on("click","."+viewDetails,function(){
						//get the id of the specific admin
						admin_id = $(this).attr("id");
						
						//alert("okkk  " + admin_id  );
						if(admin_id){
							if(confirm("Want to view this Admin?"))
								adminObj.getAdminInfo(admin_id);
						}			
						$.post("profile.php?admin_id="+ admin_id,function (){
							 $.dialog.open({
							  title:"Admin Details",
							  inFrame:true,
							  size:{
								width:1024,
								height:768
							  },
							  url:"profile.php?admin_id="+ admin_id
						});
						});
					});
	
	        /* function adminChangeLevel(admin_id){
				
				alert("Let s do it");
			} */
$(document).on("click","."+adminChangeLevel,function(){
		//alert("Let s do it");
	
});

