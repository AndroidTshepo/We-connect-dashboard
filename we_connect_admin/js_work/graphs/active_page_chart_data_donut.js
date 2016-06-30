//alert ("ready to go");

function viewProgress(questionID,crowd_source_id){
	
	console.log("merci JESUS"+ questionID+'-'+ crowd_source_id);
	
	
	 $.ajax({

        url: 'http://localhost/bs-binary-admin/php_work/charts/active_crowd_source_data_chart.php',
        type: 'POST',
		data : "param="+ questionID,
		dataType: "json",
        success: function(data) {
            console.log("sent !!!");
			console.log(data);
			 $("#active_question"+questionID+'-'+crowd_source_id).remove();
			     
							FusionCharts.ready(function () {
								console.log(data);
								var revenueChart = new FusionCharts({
									type: 'doughnut2d',
									renderAt: 'active-page-chart-container-question'+ questionID+'-'+ crowd_source_id,
									width: '500',
									height: '400',
									dataFormat: 'json',
									dataSource: { "chart": {
												"caption": "Crowd source question information",
												"subCaption": "",               
												"startingAngle": "310",
												"decimals": "0",                
												"defaultCenterLabel": "",
												"centerLabel": "",                
												"theme": "fint"                
											     },
											      "data":data
												  }
								}).render();
							});
        },
		error: function(){
			console.log("error occured");
		}
    });
}