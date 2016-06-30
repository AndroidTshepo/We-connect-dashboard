
    $.ajax({

        url: 'http://localhost/bs-binary-admin/php_work/charts/crowd_source_data_chart.php',
        type: 'GET',
		dataType: "json",
        success: function(data) {
            console.log("sent !!!");
			console.log(data);
			chartData = data;
			
			 var chartProperties = {
                "caption": "NUMBER OF USERs",
                "xAxisName": "USERS",
                "yAxisName": "vertical",
                "rotatevalues": "0",
                "theme": "zune"
            };

            FusionCharts.ready(function () {
								console.log(data);
								var revenueChart = new FusionCharts({
									type: 'doughnut2d',
									renderAt: 'crowd-source-index-chart-container',
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