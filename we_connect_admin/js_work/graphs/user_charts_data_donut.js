


 $('#UsrFilterSelection').on('change', function(){
      var filterSelected  =$("#UsrFilterSelection option:selected").text();
	  //alert(filterSelected + " Clicked");
	  
	
    $.ajax({

        url: 'http://localhost/bs-binary-admin/php_work/charts/user_charts_data.php',
        type: 'POST',
		data : "param="+ filterSelected,
		dataType: "json",
        success: function(data) {
            console.log("sent !!!");
			console.log(data);
			  
			     
							FusionCharts.ready(function () {
								console.log(data);
								var revenueChart = new FusionCharts({
									type: 'doughnut2d',
									renderAt: 'user-chart-container',
									width: '500',
									height: '400',
									dataFormat: 'json',
									dataSource: { "chart": {
												"caption": "Crowd source question info",
												"subCaption": "jsjsjsjsjsj",               
												"startingAngle": "310",
												"decimals": "0",                
												"defaultCenterLabel": "okokok",
												"centerLabel": "okokoo",                
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
	
	
  });
