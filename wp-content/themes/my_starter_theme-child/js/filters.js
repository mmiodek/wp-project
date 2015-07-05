 'use strict';

angular.module('appFilters',[]).filter('explode', function() {
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