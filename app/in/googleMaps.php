<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>var map;
    var egglabs = new google.maps.LatLng(55.7614288, 37.614258);
    var mapCoordinates = new google.maps.LatLng(55.7614288, 37.614258);
    var companyPos = new google.maps.LatLng(55.7614288, 37.614258);


    var markers = [];
    var image = new google.maps.MarkerImage(
        'point.png',
        new google.maps.Size(37, 60),
        new google.maps.Point(0, 0),
        new google.maps.Point(42, 56)
    );

    function addMarker() {
        markers.push(new google.maps.Marker({
            position: egglabs,
            raiseOnDrag: false,
            icon: image,
            map: map,
            draggable: false
        }));

    }
    function initialize() {
        var mapOptions = {
            backgroundColor: "#ffffff",
            zoom: 14,
            scrollwheel: false,
            disableDefaultUI: false,
            navigationControl: true,
            mapTypeControl: true,
            scaleControl: true,
            draggable: true,

            center: mapCoordinates,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [
                {
                    "featureType": "landscape.natural",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {"color": "#OOO"}
                    ]
                },
                {
                    "featureType": "landscape.man_made",
                    "stylers": [
                        {"color": "#F2EEF1"}
                    ]
                },
                {
                    "featureType": "water",
                    "stylers": [
                        {"color": "#d9d9d9"},
                        {"saturation": 0}
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {"color": "#ffffff"}
                    ]
                }
                , {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {"visibility": "off"}
                    ]
                }
                , {
                    "elementType": "labels.text",
                    "stylers": [
                        {"color": "#333333"}
                    ]
                }

                , {
                    "featureType": "road.local",
                    "stylers": [
                        {"color": "#dedede"}
                    ]
                }
                , {
                    "featureType": "road.local",
                    "elementType": "labels.text",
                    "stylers": [
                        {"color": "#666666"}
                    ]
                }
                , {
                    "featureType": "transit.station.bus",
                    "stylers": [
                        {"saturation": -57}
                    ]
                }
                , {
                    "featureType": "road.highway",
                    "stylers": [
                        { "color": "#B6B5B5" }
                    ]
                }, {
                    "featureType": "poi",
                    "stylers": [
                        {"visibility": "off"}
                    ]
                }

            ]

        };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        addMarker();

    }
    google.maps.event.addDomListener(window, 'load', initialize);</script>
<div id="map-canvas" style="height: 500px"></div>