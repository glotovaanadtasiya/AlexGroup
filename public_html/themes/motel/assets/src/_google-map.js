/* eslint-disable no-undef */
$(function() {	

	// Run Google Map Init
	if ($(".js-gmap").length) {
		initMap();
	}  
  
});





// INIT GOOGLE MAP 
function initMap() {
	// eslint-disable-next-line no-unused-vars
	let map;
	
	const center = {lat: 59.9376466, lng: 30.3552034};
	map = new google.maps.Map(document.querySelector('.js-gmap'), {
		center: center,
		scrollwheel: false,
		clickable: false,
        zoom: 10,
        zoomControl: true,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        rotateControl: false,
        fullscreenControl: false,
		//style
		styles: gMapStyles,

	});

	setMarkers(map);
}



var mobBreakpoint = 768;
function setMarkers(map) {
	// Adds markers to the map.
	
	// Marker sizes are expressed as a Size of X,Y where the origin of the image
	// (0,0) is located in the top left of the image.
	
	// Origins, anchor positions and coordinates of the marker increase in the X
	// direction to the right and in the Y direction down.
	// var image = {
	// 	url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
	// 	// This marker is 20 pixels wide by 32 pixels high.
	// 	size: new google.maps.Size(20, 32),
	// 	// The origin for this image is (0, 0).
	// 	origin: new google.maps.Point(0, 0),
	// 	// The anchor for this image is the base of the flagpole at (0, 32).
	// 	anchor: new google.maps.Point(0, 32)
	// };
	// // Shapes define the clickable region of the icon. The type defines an HTML
	// // <area> element 'poly' which traces out a polygon as a series of X,Y points.
	// // The final coordinate closes the poly by connecting to the first coordinate.
	// var shape = {
	// 	coords: [1, 1, 1, 20, 18, 20, 18, 1],
	// 	type: 'poly'
	// };
	var normalIcon = {
		url: "../img/map-crystal.svg", // url
		scaledSize: new google.maps.Size(29, 21), // scaled size
		origin: new google.maps.Point(0,0), // origin
		anchor: new google.maps.Point(0, 0) // anchor
	};

	

	var activeIcon = {
		url: "../img/map-crystal-filled.svg", // url
		scaledSize: new google.maps.Size(53, 38), // scaled size
		origin: new google.maps.Point(0,0), // origin
		anchor: new google.maps.Point(11, 9) // anchor
	};

	// adjust sizes on mobile
	if (window.outerWidth < mobBreakpoint) {
		normalIcon.scaledSize =  new google.maps.Size(29, 21);
		activeIcon.scaledSize =  new google.maps.Size(45, 32);
		activeIcon.anchor =  new google.maps.Point(8, 6);
	}

	var markers = [];
	var zIndexMarker = 1;

	for (var i = 0; i < gMapHotels.length; i++) {
		var hotel = gMapHotels[i];
		var marker = new google.maps.Marker({
			position: {lat: hotel[2], lng: hotel[3]},
			map: map,
			// shape: shape,
			title: hotel[1],
			zIndex: hotel[4],
			icon: normalIcon,
			hotelName: hotel[0],
			state: hotel[5],
			// must use optimized false for CSS
			optimized: false,
		});
		markers.push(marker);
		google.maps.event.addListener(marker, 'click', function(marker, i) {
			var curMarker = this;
			var hotelName = this.hotelName;
			// console.log('Marker ' + hotelName + ' has been clicked');
			activateMarker(hotelName);
			for (var j = 0; j < markers.length; j++) {
				markers[j].setIcon(normalIcon);
				markers[j].setAnimation(null);
			}
			this.setIcon(activeIcon);
			this.setAnimation(google.maps.Animation.BOUNCE);
			setTimeout(function(){ curMarker.setAnimation(null); }, 1000);
				
			// change zIndex of active marker 
			zIndexMarker++
			this.setZIndex(zIndexMarker);
		});
		if (marker.state === "active") {
			google.maps.event.trigger(marker, 'click');
		}
	}
}



var gMapStyles = [
	{
			"featureType": "all",
			"elementType": "all",
			"stylers": [
					{
							"visibility": "simplified"
					},
					{
							"hue": "#bc00ff"
					},
					{
							"saturation": "0"
					}
			]
	},
	{
			"featureType": "administrative",
			"elementType": "all",
			"stylers": [
					{
							"visibility": "simplified"
					}
			]
	},
	{
			"featureType": "administrative",
			"elementType": "labels.text.fill",
			"stylers": [
					{
							"color": "#e8b8f9"
					}
			]
	},
	{
			"featureType": "administrative.country",
			"elementType": "labels",
			"stylers": [
					{
							"color": "#ff0000"
					}
			]
	},
	
	{
    "featureType": "administrative.neighborhood",
    "elementType": "labels",
    "stylers": [
      { "visibility": "off" }
    ]
	},

	// off regions names 
	{
    "featureType": "administrative.locality",
    "elementType": "labels",
    "stylers": [
      { "visibility": "off" }
    ]
  },
	{
			"featureType": "landscape",
			"elementType": "all",
			"stylers": [
					{
							"color": "#AC3D75"

							
					},
					{
							"visibility": "simplified"
					}
			]
	},
	{
			"featureType": "landscape",
			"elementType": "labels",
			"stylers": [
					{
							"visibility": "off"
					},
					{
							"color": "#761F62"
					}
			]
	},
	{
			"featureType": "landscape.natural",
			"elementType": "all",
			"stylers": [
					{
							"visibility": "simplified"
					},
					{
							"color": "#ac3d91"
					}
			]
	},
	{
			"featureType": "landscape.natural",
			"elementType": "labels.text",
			"stylers": [
					{
							"color": "#FBB03B;"
					},
					{
							"visibility": "off"
					}
			]
	},
	{
			"featureType": "landscape.natural",
			"elementType": "labels.text.fill",
			"stylers": [
					{
							"color": "#ff0000"
					}
			]
	},
	{
			"featureType": "landscape.natural.landcover",
			"elementType": "all",
			"stylers": [
					{
							"visibility": "simplified"
					},
					{
							"color": "#761E62"
					}
			]
	},
	{
			"featureType": "landscape.natural.landcover",
			"elementType": "labels.text.fill",
			"stylers": [
					{
							"visibility": "simplified"
					}
			]
	},
	{
			"featureType": "poi",
			"elementType": "all",
			"stylers": [
					{
							"visibility": "off"
					}
			]
	},
	{
			"featureType": "poi.business",
			"elementType": "all",
			"stylers": [
					{
							"visibility": "off"
					}
			]
	},
	{
			"featureType": "road",
			"elementType": "all",
			"stylers": [
					{
							"saturation": -100
					},
					{
							"lightness": 45
					}
			]
	},
	{
			"featureType": "road",
			"elementType": "geometry",
			"stylers": [
					{
							"visibility": "simplified"
					},
					{
							"color": "#761F62"
					}
			]
	},
	{
			"featureType": "road",
			"elementType": "labels",
			"stylers": [
					{
							"visibility": "simplified"
					}
			]
	},
	{
			"featureType": "road",
			"elementType": "labels.text.fill",
			"stylers": [
					{
							"color": "#A7416D"
					}
			]
	},
	{
			"featureType": "road",
			"elementType": "labels.text.stroke",
			"stylers": [
					{
							"visibility": "simplified"
					}
			]
	},
	{
			"featureType": "road.highway",
			"elementType": "all",
			"stylers": [
					{
							"visibility": "simplified"
					}
			]
	},
	{
			"featureType": "road.highway",
			"elementType": "geometry",
			"stylers": [
					{
							"visibility": "simplified"
					},
					{
							"color": "#761F62"
					}
			]
	},
	{
			"featureType": "road.highway",
			"elementType": "labels",
			"stylers": [
					{
							"visibility": "off"
					},
					{
							"color": "#ff0000"
					}
			]
	},
	{
			"featureType": "road.highway",
			"elementType": "labels.text",
			"stylers": [
					{
							"color": "#761F62"
					},
					{
							"visibility": "simplified"
					}
			]
	},
	{
			"featureType": "road.highway",
			"elementType": "labels.text.fill",
			"stylers": [
					{
							"color": "#cc81e7"
					},
					{
							"visibility": "simplified"
					}
			]
	},
	{
			"featureType": "road.highway",
			"elementType": "labels.text.stroke",
			"stylers": [
					{
							"visibility": "simplified"
					},
					{
							"hue": "#bc00ff"
					}
			]
	},
	{
			"featureType": "road.arterial",
			"elementType": "geometry",
			"stylers": [
					{
							"color": "#6d2388"
					}
			]
	},
	{
			"featureType": "road.arterial",
			"elementType": "labels.text.fill",
			"stylers": [
					{
							"color": "#c46ce3"
					}
			]
	},
	{
			"featureType": "road.arterial",
			"elementType": "labels.icon",
			"stylers": [
					{
							"visibility": "off"
					}
			]
	},
	{
			"featureType": "transit",
			"elementType": "all",
			"stylers": [
					{
							"visibility": "off"
					}
			]
	},
	{
			"featureType": "water",
			"elementType": "all",
			"stylers": [
					{
							"color": "#b7918f"
					},
					{
							"visibility": "on"
					}
			]
	},
	{
			"featureType": "water",
			"elementType": "geometry",
			"stylers": [
					{
							"color": "#560952"
					}
			]
	},
	{
			"featureType": "water",
			"elementType": "labels",
			"stylers": [
					{
							"visibility": "simplified"
					},
					{
							"color": "#761F62"
					}
			]
	}
]