(function(){

	var app = angular.module('map',[]);

	app.directive("myMap", function(){
		return{
			restrict: "E",
			template: "<div></div>",
			replace: true,
			link: function(scope, element, attrs){
				var myLatlng = new google.maps.LatLng(50.842941,-.131312);
				var mapOptions = {
				  zoom: 13,
				  center: myLatlng,
				  mapTypeId: google.maps.MapTypeId.SATELLITE
				};
				var map = new google.maps.Map(document.getElementById("map-canvas"),
				    mapOptions);
				var marker = new google.maps.Marker({
				    position: myLatlng,
				    map: map,
				    title: 'My City'
				  });
				marker.setMap(map);
				checkScreenSize();
				
				// Create the DIV to hold the control and call the CenterControl() constructor
				// passing in this DIV.
				var centerControlDiv = document.createElement('div');
				var centerControl = new CenterControl(centerControlDiv, map);
				
				centerControlDiv.index = 1;
				$(window).on('resize', function(){
					checkScreenSize();
				});
				
				function checkScreenSize(){
					if ($(window).width() < 768) {
						map.controls[google.maps.ControlPosition.TOP_RIGHT].clear();
					   	map.controls[google.maps.ControlPosition.TOP_RIGHT].push(centerControlDiv);
					}
					else {
					   map.controls[google.maps.ControlPosition.TOP_RIGHT].clear();
					}
				};
				
				
				function CenterControl(controlDiv, map) {
					
				// Set CSS for the control border.
				  var controlUI = document.createElement('div');
				  controlUI.style.backgroundColor = '#fff';
				  controlUI.style.border = '2px solid #fff';
				  controlUI.style.borderRadius = '3px';
				  controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
				  controlUI.style.cursor = 'pointer';
				  controlUI.style.marginBottom = '10px';
				  controlUI.style.marginTop = '10px';
				  controlUI.style.marginRight = '10px';
				  controlUI.style.textAlign = 'center';
				  controlUI.title = 'Click to Toggle Menu';
				  controlDiv.appendChild(controlUI);
				
				  // Set CSS for the control interior.
				  var controlText = document.createElement('div');
				  controlText.id = "toggleButton";
				  controlText.style.color = 'rgb(25,25,25)';
				  controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
				  controlText.style.fontSize = '12px';
				  controlText.style.lineHeight = '19px';
				  controlText.style.paddingLeft = '5px';
				  controlText.style.paddingRight = '5px';
				  controlText.innerHTML = 'Center Map';
				  controlUI.appendChild(controlText);
				  
				   
				  // Setup the click event listeners: simply set the map to Chicago.
				  controlUI.addEventListener('click', function(e) {
				  	e.preventDefault();
        			$("#wrapper").toggleClass("toggled");
				  });
				
				}
			}
		};
	});
	
})();