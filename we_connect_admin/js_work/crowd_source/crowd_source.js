

    // init variables
     var trcopy;
     var editing = 0;
     var tdediting = 0;
     var editingtrid = 0;
     var editingtdcol = 0;
     var inputs = ':checked,:selected,:text,textarea';

	 $("#dialog").dialog({
      resizable: true,
      modal: true,
      title: "My Awesome Title",
      buttons: {
        "Do Something": function() {
          //alert("Do something if I was clicked.");
        },
        Cancel: function() {
         // alert("Dialog Canceled");
          $(this).dialog("close");
        }
      }
    });
	
$("#button").click(function() {
             $("#dialog").dialog({
				title: "Activation date ",
				content:"Activation date ", 	                                 
               
				  closeBack:function(){
					$.dialog.message({
					  content: "The id is "+ id
					});
				  },
				  buttons:[
					{
					  text:"Click mekkkkkkkk"
					}
				  ]
			});
  });

  	
  
   // view crowd source datails
	$(document).on("click","."+viewdetailspendingbtn,function(){	
		var id = $(this).attr("id");
		//alert("viewbtn clic" + id  );
		 	 
		if(id){
			$.post("crowd_s_pending_details.php?crowd_source_id="+ id,function (){
							 $.dialog.open({
							  title:"Admin Details",
							  inFrame:true,
							  size:{
								width:1024,
								height:768
							  },
							  url:"crowd_s_pending_details.php?crowd_source_id="+ id
						});
						});
		}
	});
	
	
	// save crowd source
	$(document).on("click","."+savebtn,function(){
		var id = $(this).attr("id");
		
			$.dialog({
				title: "Activation date ",
				  content:"Activation date ", 	                                 
               create: function() {
                  $("#inputBox").val();
                },
				  closeBack:function(){
					$.dialog.message({
					  content: "The id is "+ id
					});
				  },
				  buttons:[
					{
					  text:"Click me"
					}
				  ]
			});
	});
	
	// delete crowd source
	$(document).on("click","."+deletebtn,function(){
		var id = $(this).attr("id");
		//alert("deletebtn clicked" + id  );
		if(id){	
			if(confirm("Do you really want to activte this?")){
			     ajax("admin_id="+id,"delete");
			}else{
				
			}
		}
	});
	
	// activate crowd source
	$(document).on("click","."+activatebtn,function(){
		var id = $(this).attr("id");
		//alert("activatebtn clicked" + id  );	
		if(id){
			if(confirm("Do you really want to activte this?")){
			     ajax("admin_id="+id,"activate");
			}else{
				
			}
				
		}
		
		
	});
	
	// td lost focus event
	
	
	
	// td doubleclick event
	$(document).on("dblclick","."+table +" td",function(e){
		// check if any other TD is in editing mode ? If so then dont show editing box
		//alert(tdediting+"==="+editing);
		//alert("oooo");
		
		var isEditingform = $(this).closest("tr").attr("class");
		if(tdediting == 0 && editing == 0 && isEditingform != "inputform"){
			  
			  editingtrid = $(this).closest('tr').attr("id");
			  editingtdcol = $(this).attr("class");
			  //alert("this is working!!" + editingtdcol);
			  
			  if(editingtdcol != undefined){
				var text = $(this).html();
				var tr = $(this).parent();
				var tbody = tr.parent();
				
				for (var i = 0; i < tr.children().length; i++) {
					if (tr.children().get(i) == this) {
						var column = i;
						//alert("collum :" + column);
						break;
					}
				}	
					column--; 
					//alert(column);
					//alert(columns.length);
					if(column <= columns.length){
						
						var text = $(this).html();
					//alert(text);
					   input = createInput(column,text);
					   $(this).html(input);
					   $(this).find(inputs).focus();
					   tdediting = 1;
					
					
				   }else{
					   //alert("crap");
				   }
				}
			}	
	});
	
	$(document).on("blur","."+table+" td",function(e){
		if(tdediting == 1){
	
				var newval = $("."+table+" tr[id='"+editingtrid+"'] td[class='"+editingtdcol+"']").find(inputs).val();
			
				$("."+table+" tr[id='"+editingtrid+"'] td[class='"+editingtdcol+"']").html(newval);

				tdediting = 0;
				$("."+table+" tr[id='"+editingtrid+"'] td[class='"+editingtdcol+"']");
				
				var paramArr = [editingtrid, editingtdcol, newval];
			
			     //alert(paramArr);
				ajax("param= "+paramArr ,"col_update");
		}
	});
	
	
	var createInput = function(i,str){
		str = typeof str !== 'undefined' ? str : null;
			if(inputType[i] == "text"){
				input = '<input type='+inputType[i]+' name='+columns[i]+' placeholder="'+placeholder[i]+'" value='+str+' >';
			}else if(inputType[i] == "textarea"){
				input = '<textarea name='+columns[i]+' placeholder="'+placeholder[i]+'">'+str+'</textarea>';
			}
			
		return input;
   };

		var ajax = function (params,action){
			//alert("data sent!!!!!!!!");
			$.ajax({
				type: "POST", 
				url: "php_work/main.php", 
				data : params+"&action="+action,
				dataType: "json",
				success: function(data){
					//alert("data sent!!!!!!!!");
					//alert(data.error);
				  
				  },
				
				error: function(){
					//alert("Unexpected error, Please try again");
				}
			});
		}

