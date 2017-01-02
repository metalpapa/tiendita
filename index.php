<!DOCTYPE html>
<html >
	<head>
		<title>ACME Inc.</title>
		<!-- No usar cache  -->
		<meta http-equiv="Expires" content="0">
	 	<meta http-equiv="Last-Modified" content="0">
	    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	    <meta http-equiv="Pragma" content="no-cache">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="Tiendita">
	    <!--  Responsive -->
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- CSS -->
	    <link rel="stylesheet" href="css/main.css">
	    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	    <!-- Angular -->
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular-route.min.js"></script>
		<!--  Scripts -->
		<script src="js/main.js"></script>
		
	</head>

	<body data-ng-app="TiendaApp">

	<!-- PAGINA -->
	<div data-ng-include="'plantillas/header.html'"></div>
	<div data-ng-view></div>
	<div data-ng-include="'plantillas/footer.html'"></div>

	</body>










</html>