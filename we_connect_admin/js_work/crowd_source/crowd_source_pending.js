


$(document).on("click","."+removeQuestionBtn,function(){	
		var id = $(this).attr("id");
		//alert("edit button clicked" + id);
		
		questionAjaxCall("param="+id,"disable_question",id);
	});	
		
		
//our ajax call for crowd source
var questionAjaxCall = function(parameter,action,id) {
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
                       if(data.response =="question_disabled"){
						   $(".panel-heading"+id).append("<br/><label style='color:red'>This question was disabled </label>");
						   $("#"+id).remove();
					   }					
				 }		
			
		  },
		
		error: function(){
			alert("Unexpected error, Please try again");
		}
	});

}