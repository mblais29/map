<!DOCTYPE html>
<html ng-app="map" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Map</title>
    <!-- Font Awesome -->
    <link href="components/fontAwesome.4.4/css/font-awesome.min.css" rel="stylesheet">
    
	<!-- Google Fonts -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcVieGnFnEqNe_YE8HSQeFn9cEMWBVif4" type="text/javascript"></script>
    <!-- Bootstrap -->
    <link href="components/bootstrap/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
	  <body>
	  	<div id="wrapper">
		  	<!-- Sidebar -->
	        <div id="sidebar-wrapper">
	            <ul class="sidebar-nav">
	                <li class="sidebar-brand">
	                    <a href="#">
	                        Start Bootstrap
	                    </a>
	                </li>
	                <li>
	                    <a href="#">Dashboard</a>
	                </li>
	                <li>
	                    <a href="#">Shortcuts</a>
	                </li>
	                <li>
	                    <a href="#">Overview</a>
	                </li>
	                <li>
	                    <a href="#">Events</a>
	                </li>
	                <li>
	                    <a href="#">About</a>
	                </li>
	                <li>
	                    <a href="#">Services</a>
	                </li>
	                <li>
	                    <a href="#">Contact</a>
	                </li>
	            </ul>
	        </div>
	        <!-- Page Content -->
	        <div id="page-content-wrapper">
	            <div class="container-fluid">
				  	<my-map id="map-canvas"></my-map>
	            </div>
	        </div>
 		</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="components/jquery/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="components/bootstrap/bootstrap-3.3.5/js/bootstrap.min.js"></script>
    <!-- Include Angular.js -->
    <script src="components/angular/angular.min.js"></script>
    <!-- Include Angular.js -->
    <script src="js/app.js"></script>
    <script src="js/directives/map.js"></script>
    <!-- Include custom jquery -->
    <script src="js/main.js"></script>

  </body>
</html>