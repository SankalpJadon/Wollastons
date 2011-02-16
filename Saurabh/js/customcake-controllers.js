var cakeControllers = angular.module('cakeControllers', []);

cakeControllers.controller('ShapeController', ['$scope', '$rootScope', '$routeParams',function($scope, $rootScope, $routeParams){
	$rootScope.shape = $routeParams.shape;
}]);

cakeControllers.controller('SizeController', ['$scope', '$rootScope', '$routeParams',function($scope, $rootScope, $routeParams){
	$rootScope.size = $routeParams.size;
}]);

cakeControllers.controller('TypeController', ['$scope', '$rootScope', '$routeParams',function($scope, $rootScope, $routeParams){
	$rootScope.type = $routeParams.type;
}]);

cakeControllers.controller('FlavourController', ['$scope', '$rootScope', '$routeParams',function($scope, $rootScope, $routeParams){
	$rootScope.flavour = $routeParams.flavour;
}]);

cakeControllers.controller('SideController', ['$scope', '$rootScope', '$routeParams',function($scope, $rootScope, $routeParams){
	$rootScope.side = $routeParams.side;
}]);