


$(function() {
    $.ajax({

        url: 'http://localhost/bs-binary-admin/php_work/chart_data.php',
        type: 'GET',
        success: function(data) {
            
			var label ="";
			var totalActive =0;
			var totalInactive =0;
			//console.log(data[0].label);
			for (var i=0; i < data.length; ++i){
			  console.log(data[i].label);	
			  
				  if (data[i].label =="active"){
					  totalActive = totalActive +1;
				  }else{
					  totalInactive = totalInactive +1;
				  }
				
			}
			console.log(totalActive);
			chartData = [
				           {"label": "active", "value": totalActive },
					       {"label": "inactive", "value": totalInactive },
						  
			           ];
            var chartProperties = {
                "caption": "Admin activities",
                "xAxisName": "Admins",
                "yAxisName": "vertical",
                "rotatevalues": "0",
                "theme": "zune"
            };

            apiChart = new FusionCharts({
                type: 'column2d',
                renderAt: 'chart-container',
                width: '550',
                height: '350',
                dataFormat: 'json',
                dataSource: {
                    "chart": chartProperties,
                    "data": chartData
                }
            });
            apiChart.render();
        }
    });
});