(function(){

var app = angular.module('app', [
	'ngRoute'
]);


app.filter('explode',function() {
	return function(input) {
		var current_tags = ""
		if(input) {
			for (var i = 0; i < input.length; i++) {
				if (i < input.length-1) {
					current_tags += input[i].tag + " ";
				}
				else {
					current_tags += input[i].tag;
				}
			};
			return current_tags;
		}
	};
});

app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/', {
        templateUrl: myLocalized.partials + 'front-page.html',
        controller: 'Main'
      }).
      when('/Portfolio', {
        templateUrl: myLocalized.partials + 'portfolio.html',
        controller: 'Portfolio'
      }).
      otherwise({
        redirectTo: '/'
      });
  }
]);

	// Fetching data from WP-API

	app.controller('MenuController', function($scope, $http){

		$http.get('wp-json/menus/2').success(function(data){
			$scope.menu = data.items;
		});

	});

	app.controller('Main', function($scope, $http, $interval){
		var myInterval = 5000;
		$scope.slides = [];
		$scope.gallery = [];
		$http.get('wp-json/pages/5').success(function(data){
			$scope.slides = data.acf.slider;
			$scope.gallery = data.acf.gallery;
		});
		
		// ------------ This function can be used when ng-if is replaced with ng-show ----------------
		//
		// $scope.currentSlide = function(index) {
		// 	if (index ===	 $scope.selected) {
		// 		$scope.show = true;
		// 	}
		// 	else {
		// 		$scope.show = false;
		// 	}
		// 	return $scope.show;
		// }
		//---------------------------------------------------------------------------------------------
		
		$scope.selected = 0;
		var i = 0;
		var promise;
  	$scope.select = function(index) {	
      $scope.selected = index;
      var slideLength = 1349;
			var trans = -(index * slideLength) + "px";
			var translate = "translate3d("+trans+", 0px, 0px)";
    	$scope.transformStyle = {transform: translate};
    	return $scope.transformStyle;
    };

    promise = $interval( function(){ 
    	$scope.select(i);
    	if (i==$scope.slides.length-1) {
    		i = 0;
    	}
    	else {
    		i++
    	}
    	 
    }, myInterval);

    $scope.stop = function() {
     $interval.cancel(promise);
    };

    $scope.bind = function(index){
    	$scope.select(index);
    	$scope.stop();
    };

	});

	app.controller('Portfolio', function($scope, $http){
		$scope.portfolios = [];
		$scope.tagsArray = [];
		$scope.tagFilter = "";
		

		$scope.applyFilter = function(tag){		
			$scope.tagFilter = tag;
		};
		$scope.clearFilters = function(){
			$scope.tagFilter = "";
		};

		$http.get('wp-json/pages/27').success(function(data){
			$scope.portfolios = data.acf['portfolio-element'];
			for (var i = 0; i < $scope.portfolios.length;i++) {
				var tags = $scope.portfolios[i].tags;	
				for (var j = 0; j < tags.length; j++) {
					var singleTag = tags[j].tag;
					if ($scope.tagsArray.indexOf(singleTag) == -1) {
						$scope.tagsArray.push(singleTag);
					};							
				}
			}
		});
		
		

	});


})();