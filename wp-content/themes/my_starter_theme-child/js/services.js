var appServices = angular.module('appServices', ['ngResource']);

appServices.factory('pages', ['$resource',
  function($resource){
    return $resource('wp-json/pages/:pageId.json', {}, {
      query: {method:'GET', params:{ID:'pageId'}, isArray:true}
    });
  }]);