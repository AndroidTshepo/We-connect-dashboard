var myApp = angular.module('myApp', []);

function MainCtrl($scope) {
	$scope.count = 0;
}

//Directive that returns an element which adds buttons on click which show an alert on click
myApp.directive("addbuttonsbutton", function(){
	return {
		restrict: "E",
		template: "<button addbuttons type='button' class='btn'>Click to add Options</button>"
	}
});

//Directive for adding buttons on click that show an alert on click
myApp.directive("addbuttons", function($compile){
	return function(scope, element, attrs){
		element.bind("click", function(){
			scope.count++;
			angular.element(document.getElementById('space-for-buttons')).append($compile("<div class='auto_gen_text text'><input type='text' class='' id='option"+scope.count+"' name='option[]'></div>")(scope));
             
		});
	};
});

//Directive for showing an alert on click
myApp.directive("alert", function(){
	return function(scope, element, attrs){
		element.bind("click", function(){
			console.log(attrs);
			alert("This is alert #"+attrs.alert);
		});
	};
});