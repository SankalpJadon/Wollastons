var myApp = angular.module('myApp', [
  'ngRoute',
  'cakeControllers'
]);

myApp.config(['$routeProvider', function($routeProvider) {
  $routeProvider.
  when('/shape/:shape', {
    templateUrl: 'partials/select-size.html',
	controller: 'ShapeController'
  }).
  when('/size/:size', {
    templateUrl: 'partials/select-type.html',
	controller: 'SizeController'
  }).
  when('/type/:type', {
    templateUrl: 'partials/select-flavour.html',
	controller: 'TypeController'
  }).
  when('/flavour/:flavour', {
    templateUrl: 'partials/select-side.html',
	controller: 'FlavourController'
  }).
  when('/side/:side', {
	templateUrl: 'partials/final-page.html',
	controller: 'SideController'
  }).
  otherwise({
    templateUrl: 'partials/select-shape.html'
  });
}]);