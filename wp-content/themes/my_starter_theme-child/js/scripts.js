 'use strict';
 
 /* App Module */

var app = angular.module('app', [
	'ngRoute','iso.directives','appControllers','appFilters','appServices'
]);


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

