


// declaring and initializing global variables 
     var crowdSourceName = "";
     var crowdSourcedesc  = "";
	 var crowd_s_id;
     var questionDescription = "";
	 var questionType = "";  //these are the categories of questions: true/false , mupltiple_choice, rate , choose_one
	 var totalNumberOfWords = 1 ;
     var isEmpty = true; 
     var hasChanged= false;	 
	 var cachedCrowdSourceNAme ="" ;
	 var cachedCrowdSourceDescription = "";
	 var cachedQuestionDescription = "";
	 var questionsInserted= {};
	 var questionExist ={};
	 var optionRemovedStatus ={};
	 var validatedString = "";
	 var parameters =[];
       
	   

	 
	 
	//declaring the variable count
    var addSectionCount;
	var crowd_source_inserted_status = false;
	var question_Inserted_status = false;
	var question_exist_status = false;

	
	function addTrueFalseQuest(){
	
	   // alert (" true all fine"); 
	    $("#questionRow").show();
	   questionType = "true_false_question";
	   
	   addSectionCount=$("#addSectionCount").val();	
	   addSectionCount++;
	   $("#addSectionCount").val(addSectionCount);
	
	
	   $("#questionRow").append('<div class="true_false" >');
       $("#questionRow").append('<div class="panel panel-default pe">');
       $("#questionRow").append('<div class="panel-heading">');
       $("#questionRow").append('<h3 class="panel-title"> Question '+addSectionCount+'</br> </br>');
	   $("#questionRow").append('<textarea rows="4" cols="50" id="true_false_question'+addSectionCount+'" onfocusout= "onfocusouTrueFalseQuestion('+addSectionCount+')"></textarea></br>');
       $("#questionRow").append('<input type="button" class="btn btn-default" id="saveQuestion" value="Save Question" onclick= "onClickSaveTrueFalseQuestion('+addSectionCount+')">');
	   $("#questionRow").append('</div>'); 
	   $("#questionRow").append('<div id="edit-multi" class="panel_for_multiple">');    
       $("#questionRow").append('<input type="text" class="text" name="tf_op" placeholder="true" ><br>'); 
       $("#questionRow").append('<input type="text" class="text" name="tf_op2" placeholder="false" >'); 
       $("#questionRow").append('<div class="panel-footer clearfix">'); 
        $("#questionRow").append(' <div class="pull-right'+addSectionCount+'">'); 
       $("#questionRow").append('<input type="hidden" id="addQuestionSectionCount'+addSectionCount+'" value="0" name="addSectionCount"> </div>'); 
       $("#questionRow").append('</div>'); 
       $("#questionRow").append('</div>');   
       $("#questionRow").append('</div>'); 
       $("#questionRow").append('</div> '); 
	
	}
	
	function multileChoiceQuestOne(){
	
	    // alert (" multiple all fine");
		questionType = "multileChoiceQuestOne";
		
		 addSectionCount=$("#addSectionCount").val();	
	     addSectionCount++;
	     $("#addSectionCount").val(addSectionCount);
		 					 
            $("#questionRow").append('<div id="questionbox'+addSectionCount+'">'); 
            $("#questionRow").append('<div class="panel panel-default pe">'); 
            $("#questionRow").append('<div class="panel-heading">'); 
            $("#questionRow").append('<h3 class="panel-title"> Question '+addSectionCount+'</br> </br>');
			
			$("#questionRow").append('<textarea rows="4" cols="50" id="multiple_choice_question_description'+addSectionCount+'" onfocusout= "onfocusoutQuestionDescription('+addSectionCount+')"></textarea></br>');
			$("#questionRow").append('<input type="button" class="btn btn-default" id="saveQuestion" value="Save Question" onclick= "onClickSaveQuestion('+addSectionCount+')">');
	        $("#questionRow").append('<input type="button" class="btn btn-default" id="modifyQuestion" value="Modify Question" onclick= "onClickModifyQuetion('+addSectionCount+')"></br>');
			$("#questionRow").append('<input type="text" id="multiple_choice_question_option'+addSectionCount+'" style="width: 300px;"  class="text" placeholder="Please enter your option" ><input type="button" class="btn btn-default" id="save option" value="Save option" onclick= "onClickSaveOption('+addSectionCount+')"></h3>');
            $("#questionRow").append('</div>'); 
            $("#questionRow").append(' <div id="edit-multi" class="panel_for_multiple">');     
            $("#questionRow").append('<div ng-app="myApp" ng-controller="MainCtrl" class="section">'); 
            $("#questionRow").append('<addbuttonsbutton></addbuttonsbutton>'); 
            $("#questionRow").append(' <div id="space-for-buttons"></div>'); 
            $("#questionRow").append('</div>'); 
            $("#questionRow").append('<div class="panel-footer clearfix">'); 
            $("#questionRow").append(' <div class="pull-right'+addSectionCount+'">'); 
            $("#questionRow").append('<input type="button" class="btn btn-default" id="remove_question" onclick="removeQuestionSection('+addSectionCount+')" value="Remove this Question">'); 
			$("#questionRow").append('<input type="hidden" id="addQuestionSectionCount'+addSectionCount+'" value="0" name="addSectionCount"> '); 
            $("#questionRow").append('</div>'); 
            $("#questionRow").append('</div>'); 
            $("#questionRow").append('</div>');     
            $("#questionRow").append('</div>'); 
            $("#questionRow").append('</div>');   
	
	
	}
	
	
	function multileChoiceQuestmultiple(){
	
	    // alert (" multiple all fine");
		questionType = "multileChoiceQuestMutiple";
		
		 addSectionCount=$("#addSectionCount").val();	
	     addSectionCount++;
	     $("#addSectionCount").val(addSectionCount);
		 					 
            $("#questionRow").append('<div id="questionbox'+addSectionCount+'">'); 
            $("#questionRow").append('<div class="panel panel-default pe">'); 
            $("#questionRow").append('<div class="panel-heading">'); 
            $("#questionRow").append('<h3 class="panel-title"> Question '+addSectionCount+'</br> </br>');
			
			$("#questionRow").append('<textarea rows="4" cols="50" id="multiple_choice_question_description'+addSectionCount+'" onfocusout= "onfocusoutQuestionDescription('+addSectionCount+')"></textarea></br>');
			$("#questionRow").append('<input type="button" class="btn btn-default" id="saveQuestion" value="Save Question" onclick= "onClickSaveQuestion('+addSectionCount+')">');
	        $("#questionRow").append('<input type="button" class="btn btn-default" id="modifyQuestion" value="Modify Question" onclick= "onClickModifyQuetion('+addSectionCount+')"></br>');
			$("#questionRow").append('<input type="text" id="multiple_choice_question_option'+addSectionCount+'" style="width: 300px;"  class="text" placeholder="Please enter your option" ><input type="button" class="btn btn-default" id="save option" value="Save option" onclick= "onClickSaveOption('+addSectionCount+')"></h3>');
            $("#questionRow").append('</div>'); 
            $("#questionRow").append(' <div id="edit-multi" class="panel_for_multiple">');     
            $("#questionRow").append('<div ng-app="myApp" ng-controller="MainCtrl" class="section">'); 
            $("#questionRow").append('<addbuttonsbutton></addbuttonsbutton>'); 
            $("#questionRow").append(' <div id="space-for-buttons"></div>'); 
            $("#questionRow").append('</div>'); 
            $("#questionRow").append('<div class="panel-footer clearfix">'); 
             $("#questionRow").append('<div class="pull-right'+addSectionCount+'">'); 
            $("#questionRow").append('<input type="button" class="btn btn-default" id="remove_question" onclick="removeQuestionSection('+addSectionCount+')" value="Remove this Question">'); 
			$("#questionRow").append('<input type="hidden" id="addQuestionSectionCount'+addSectionCount+'" value="0" name="addSectionCount"> '); 
            $("#questionRow").append('</div>'); 
            $("#questionRow").append('</div>'); 
            $("#questionRow").append('</div>');     
            $("#questionRow").append('</div>'); 
            $("#questionRow").append('</div>');   
	
	
	}
	function rateQuestText(){
	   
	   questionType = "rate_question_text";
	  // alert (" rateQuest all fine");
	  addSectionCount=$("#addSectionCount").val();	
	     addSectionCount++;
	     $("#addSectionCount").val(addSectionCount);
	
	$("#questionRow").append('<div class="rate_question clearfix" >');
    $("#questionRow").append('<div class="panel panel-default pe clearfix">');
    $("#questionRow").append('<div class="panel-heading clearfix">');
    $("#questionRow").append('<h3 class="panel-title"> Question '+addSectionCount+'</br> </br>');
    $("#questionRow").append('<textarea rows="4" cols="50" id="rate_question_text_description'+addSectionCount+'" onfocusout= "rateQuestionTextDescription('+addSectionCount+')"></textarea></h3>');
    $("#questionRow").append('</div>');
    $("#questionRow").append('<div id="edit-multi" class="panel_for_multiple clearfix">'); 
    $("#questionRow").append('<div class=""><input type="file" name="photo" id="fileToUploadrate"></div>');
    $("#questionRow").append('<div>');
    
    $("#questionRow").append('<div class="panel-footer clearfix">');
    $("#questionRow").append('<div class="pull-right">');
	$("#questionRow").append('</div>');
	$("#questionRow").append('<input type="button" class="btn btn-default" id="saveQuestion" value="Save Question" onclick= "onClickSaveQuestionRateText('+addSectionCount+')">');
	$("#questionRow").append('<input type="button" class="btn btn-default" id="modifyQuestion" value="Modify Question" onclick= "onClickModifyQuestionRateText('+addSectionCount+')"></br>');
    $("#questionRow").append('<input type="hidden" id="addQuestionSectionCount'+addSectionCount+'" value="0" name="addSectionCount"> </div>');
    $("#questionRow").append('</div>');
    $("#questionRow").append('</div>');    
    $("#questionRow").append('</div>');
    $("#questionRow").append('</div>');
	}

	
	function chooseOnePictureQuest(){
	
	     //alert ("chooseQuest  all fine");
		 questionType = "choose_One_picture_question";
		 
		 addSectionCount=$("#addSectionCount").val();	
	     addSectionCount++;
	     $("#addSectionCount").val(addSectionCount);
		 
		 $("#questionRow").append('<div class="choose_holder" id="questionbox'+addSectionCount+'" clearfix>');
		 $("#questionRow").append('<h3 class="panel-title"> Question '+addSectionCount+'</br> </br>');
		 $("#questionRow").append('<textarea rows="4" cols="50" id="choose_one_picture_question_description'+addSectionCount+'" onfocusout= "choose_one_picture_question('+addSectionCount+')"></textarea></br>'); 
         $("#questionRow").append('<form method="post" name="multiple_upload_form'+addSectionCount+'" id="multiple_upload_form'+addSectionCount+'" enctype="multipart/form-data" action="php_work/test.php"><input type="hidden" name="image_form_submit" value="'+addSectionCount+'"/><input type="file"  name="images[]" id="images"  onchange= "chooseImageQuest('+addSectionCount+')" multiple > ');
         $("#questionRow").append('<div class="panel panel-default pe">');
        
         
         $("#questionRow").append('<div class="picture_preview" id="images_preview'+addSectionCount+'"></div>');
         $("#questionRow").append('<div class="panel-footer clearfix">');
         $("#questionRow").append('<div class="pull-right">');
         $("#questionRow").append('<input type="button" class="btn btn-default" id="saveChoosePictureQuestion" onclick= "onClickSaveChooseOnePictureQuestion('+addSectionCount+')" value="Save"><input type="button" class="btn btn-default" id="saveChoosePictureQuestion" onclick= "getPic('+addSectionCount+')" value="Save">');
         $("#questionRow").append('<input type="hidden" id="addQuestionSectionCount'+addSectionCount+'" value="0" name="addSectionCount"> </div>');
         $("#questionRow").append('</div>');
         $("#questionRow").append('</div>');    
     
         $("#questionRow").append(' </form>');
         $("#questionRow").append('</div> ');	
	}
	
	function chooseManyPictureQuest(){
	
	     //alert ("chooseQuest  all fine");
		 questionType = "choose_Multiple_picture_question";
		 
		 addSectionCount=$("#addSectionCount").val();	
	     addSectionCount++;
	     $("#addSectionCount").val(addSectionCount);
		 
		 $("#questionRow").append('<div class="choose_holder" id="questionbox'+addSectionCount+'" clearfix>');
		 $("#questionRow").append('<h3 class="panel-title"> Question '+addSectionCount+'</br> </br>');
		 $("#questionRow").append('<textarea rows="4" cols="50" id="choose_multiple_picture_question_description'+addSectionCount+'" onfocusout= "choose_multiple_picture_question('+addSectionCount+')"></textarea></br>'); 
         $("#questionRow").append('<form method="post" name="multiple_upload_form'+addSectionCount+'" id="multiple_upload_form'+addSectionCount+'" enctype="multipart/form-data" action="php_work/test.php"><input type="hidden" name="image_form_submit" value="'+addSectionCount+'"/><input type="file"  name="images[]" id="images"  onchange= "chooseImageQuest('+addSectionCount+')" multiple > ');
         $("#questionRow").append('<div class="panel panel-default pe">');
        
         
         $("#questionRow").append('<div class="picture_preview" id="images_preview'+addSectionCount+'"></div>');
         $("#questionRow").append('<div class="panel-footer clearfix">');
         $("#questionRow").append('<div class="pull-right">');
         $("#questionRow").append('<input type="button" class="btn btn-default" id="saveChoosePictureQuestion" onclick= "onClickSaveChooseMultiplePictureQuestion('+addSectionCount+')" value="Save"><input type="button" class="btn btn-default" id="saveChoosePictureQuestion" onclick= "getPic('+addSectionCount+')" value="Save">');
         $("#questionRow").append('<input type="hidden" id="addQuestionSectionCount'+addSectionCount+'" value="0" name="addSectionCount"> </div>');
         $("#questionRow").append('</div>');
         $("#questionRow").append('</div>');    
     
         $("#questionRow").append(' </form>');
         $("#questionRow").append('</div> ');	
	}
	
	
	
	function rateQuestImage(){
	
	     //alert ("chooseQuest  all fine");
		 questionType = "rate_question_image";
		 
		 addSectionCount=$("#addSectionCount").val();	
	     addSectionCount++;
	     $("#addSectionCount").val(addSectionCount);
		 
		 $("#questionRow").append('<div class="choose_holder" id="questionbox'+addSectionCount+'" clearfix>');
		 $("#questionRow").append('<h3 class="panel-title"> Question '+addSectionCount+'</br> </br>');
		 $("#questionRow").append('<textarea rows="4" cols="50" id="rate_question_image_description'+addSectionCount+'" onfocusout= "onfocusoutrate_question_image('+addSectionCount+')"></textarea></br>'); 
         $("#questionRow").append('<form method="post" name="multiple_upload_form'+addSectionCount+'" id="multiple_upload_form'+addSectionCount+'" enctype="multipart/form-data" action="php_work/test.php"><input type="hidden" name="image_form_submit" value="'+addSectionCount+'"/><input type="file"  name="images[]" id="images"  onchange= "chooseImageQuest('+addSectionCount+')" multiple > ');
         $("#questionRow").append('<div class="panel panel-default pe">');
        
         
         $("#questionRow").append('<div class="picture_preview" id="images_preview'+addSectionCount+'"></div>');
         $("#questionRow").append('<div class="panel-footer clearfix">');
         $("#questionRow").append('<div class="pull-right">');
         $("#questionRow").append('<input type="button" class="btn btn-default" id="saverateQuestImage" onclick= "onClickSaverateQuestImage('+addSectionCount+')" value="Save"><input type="button" class="btn btn-default" id="saverateQuestImage" onclick= "getPic('+addSectionCount+')" value="Save">');
         $("#questionRow").append('<input type="hidden" id="addQuestionSectionCount'+addSectionCount+'" value="0" name="addSectionCount"> </div>');
         $("#questionRow").append('</div>');
         $("#questionRow").append('</div>');    
     
         $("#questionRow").append(' </form>');
         $("#questionRow").append('</div> ');	
	}
	


//remove  option for specific question when 'Reove' option table is clicked
function removeQuestionSection(removeId){
	
		$("#questionbox"+removeId).remove();
	
}

//function onfocusoutQuestion(focus){
	    
	    //var value = $("textarea#multiple_choice_question_description"+ focus).val();
		//var crowdSourceObj = new crowd_source();
		
		//console.log (crowdSourceObj.getCrowdSourceDescription(value));		 
//} 


//dealing with crowd source name and description

   var crowdSourceObjt = new crowd_source();
   
   
		function onfocusoutCrowdSourceDescription(){
				crowdSourcedesc	= $("textarea#crowdSourceDescription").val();
				//crowdSourceObjt.check_ok(crowdSourcedesc);
				 
		}

		function onfocusoutCrowdSourceName(){
				crowdSourceName  = $("#crowdSourceName").val();	
				crowdSourceObjt.check_Crowd_name_exist(crowdSourceName,crowd_source_inserted_status,cachedCrowdSourceNAme,cachedCrowdSourceDescription);
				 
		}

		function onClickRegisterCrowdSource(){
				crowdSourcedesc	= $("textarea#crowdSourceDescription").val();
				crowdSourceName  = $("#crowdSourceName").val();	
				
				crowdSourceObjt.registerCrowdSource(crowdSourceName,crowdSourcedesc,crowd_source_inserted_status,cachedCrowdSourceNAme,cachedCrowdSourceDescription);
				
		}   

     
		function onClickModifyCrowdSource(){
				crowdSourcedesc	= $("textarea#crowdSourceDescription").val();
				crowdSourceName  = $("#crowdSourceName").val();	
				
				crowdSourceObjt.modifyCrowdSourceDetails(cachedCrowdSourceNAme,crowdSourceName,cachedCrowdSourceDescription,crowdSourcedesc);
				console.log(questionsInserted);
		} 	
	
	
	    function onfocusoutQuestionDescription(count){
			//alert("focus out");
				questionDescription  = $("textarea#multiple_choice_question_description" + count).val();
				var questionObjt = new question(questionDescription,questionType,count);	
                //questionsInserted[count]= questionDescription + "," + true;				   
			    questionObjt.checkIfQuestionExist();		 
		}
		
		
		function onfocusouTrueFalseQuestion(count){
			//alert("focus out");
				questionDescription  = $("textarea#true_false_question" + count).val();
				var questionObjt = new question(questionDescription,questionType,count);	
                //questionsInserted[count]= questionDescription + "," + true;				   
			    questionObjt.checkIfQuestionExist();		 
		}
		
		function rateQuestionTextDescription(count){
			//alert("focus out");
				questionDescription  = $("textarea#rate_question_text_description" + count).val();
				var questionObjt = new question(questionDescription,questionType,count);	
                //questionsInserted[count]= questionDescription + "," + true;				   
			    questionObjt.checkIfQuestionExist();
					 
		}
		
		function onClickSaveQuestion(count){
					totalNumberOfWords = 1 ;
				   questionDescription  = $("textarea#multiple_choice_question_description" + count).val();
				   var questionObjt = new question(questionDescription,questionType,count);	
                    // questionsInserted[count]= questionDescription + "," + true;				   
					console.log(questionObjt.registerQuestion());
					
					
					
					//console.log(questionExist);
					
					//console.log(questionObjt.getQuestionDetails());
					 //questionDescription  = $("textarea#multiple_choice_question_description" + count).val("");
					
	   } 
	   function onClickSaveQuestionRateText(count){
					totalNumberOfWords = 1 ;
				   questionDescription  = $("textarea#rate_question_text_description" + count).val();
				   var questionObjt = new question(questionDescription,questionType,count);	
                    // questionsInserted[count]= questionDescription + "," + true;				   
					console.log(questionObjt.registerQuestion());
					
	   } 
		
		
		 function onClickSaveTrueFalseQuestion(count){
				   totalNumberOfWords = 1 ;
				   questionDescription  = $("textarea#true_false_question" + count).val();
				   var questionObjt = new question(questionDescription,questionType,count);				   
					console.log(questionObjt.registerQuestion());					
	   }
		
		function onClickSaveChooseOnePictureQuestion(count){
				   totalNumberOfWords = 1 ;
				   questionDescription  = $("textarea#choose_one_picture_question_description" + count).val();
				   var questionObjt = new question(questionDescription,questionType,count);	
				   console.log("button clicked  " + questionType);
				   console.log(questionObjt.registerQuestion());
                
		}
 
         function onClickSaveChooseMultiplePictureQuestion(count){
				   totalNumberOfWords = 1 ;
				   questionDescription  = $("textarea#choose_multiple_picture_question_description" + count).val();
				   var questionObjt = new question(questionDescription,questionType,count);	
				   console.log("button clicked" + questionType);
				   console.log(questionObjt.registerQuestion());
                
		}


        function onClickSaverateQuestImage(count){
				   totalNumberOfWords = 1 ;
				   questionDescription  = $("textarea#rate_question_image_description" + count).val();
				   var questionObjt = new question(questionDescription,questionType,count);	
				   console.log("button clicked" + questionType);
				   console.log(questionObjt.registerQuestion());
                
		}
		
		function onClickModifyQuetion(count){
				questionDescription  = $("textarea#multiple_choice_question_description" + count).val();
				
				cachedQuestionDescription = questionDescription;
				
				var questionObjt = new question(questionDescription,questionType,count);
				
				questionObjt.modifyQuestionDescription();
				console.log(questionsInserted);
		} 	
	
		
		
		function onClickSaveOption(count){
				//alert("this is option for question" + count);
				questionDescription  = $("#multiple_choice_question_option" + count).val();
				//alert(questionDescription + count);
				var optionObjt = new option(questionDescription,count);
				optionObjt.dispalyInfo();
		}
		
		function chooseImageQuest(count){
				console.log("on change");
				
				$('#multiple_upload_form' +count).ajaxForm({
			            target:'#images_preview'+count,
					
			            beforeSubmit:function(e){
				        console.log("gud to go");
			     },
			    success:function(data){
					//alert('#images_preview'+count);
					console.log(data);
				        console.log("succeded");
			    },
			    error:function(data){
				        console.log("failde");
			    }
		       }).submit();
		}
		
		
	function getPic(count){
		$.ajax({
		type: "POST", 
		url: "php_work/testgetpic.php", 
		data : "param="+count,
		dataType: "json",
		success: function(data){
			//alert("data sent!!!!!!!!");
		  
		   if (data){
					console.log(data.response);		
				 }		
			
		  },
		
		error: function(){
			alert("Unexpected error, Please try again");
		}
	});
	}
		

		
		