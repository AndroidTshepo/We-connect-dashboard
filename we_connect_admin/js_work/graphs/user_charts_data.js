

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
			chartData = data;
			
			 var chartProperties = {
                "caption": "NUMBER OF USERS",
                "xAxisName": "USERS",
                "yAxisName": "vertical",
                "rotatevalues": "0",
                "theme": "zune"
            };

            apiChart = new FusionCharts({
                type: 'column2d',
                renderAt: 'user-chart-container'+1,
                width: '550',
                height: '350',
                dataFormat: 'json',
                dataSource: {
                    "chart": chartProperties,
                    "data": chartData
                }
            });
            apiChart.render();
        },
		error: function(){
			console.log("error occured");
		}
    });
	
	
  });
  