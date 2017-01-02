var app = angular.module('TiendaApp', [
  'ngRoute'
]);

app.config(['$routeProvider', function ($routeProvider) {
	  $routeProvider
	    // Home
	    .when("/", {templateUrl: "Paginas/home.html", controller: "PageCtrl"}) 
	    .otherwise("/404", {templateUrl: "Paginas/404.html", controller: "PageCtrl"});
	}]);