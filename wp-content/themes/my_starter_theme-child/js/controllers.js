
/* Controllers */

var appControllers = angular.module('appControllers', []);

appControllers.controller('MenuController', ['$scope','$http',function($scope, $http){

	$http.get('wp-json/menus/2').success(function(data){
		$scope.menu = data.items;
	});

}]);

appControllers.controller('Main', ['$scope','$http','$interval',function($scope, $http, $interval){
	var myInterval = 5000;
	$scope.slides = [];
	$scope.gallery = [];
	$http.get('wp-json/pages/5').success(function(data){
		$scope.slides = data.acf.slider;
		$scope.gallery = data.acf.gallery;
	});
	
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

}]);

appControllers.controller('Portfolio', ['$scope','$http',function($scope, $http){
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
}]);


