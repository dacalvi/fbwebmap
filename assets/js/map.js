var map;

var Markers_Config = {
    atm_markers: "",
    atm_markers_lenght: "",

    branch_markers: "",
    branch_markers_lenght: "",

    tas_markers: "",
    tas_markers_lenght: ""
}

var pos;
var userMarker = null;
var current_marker;

var directionsDisplay;
var directionsService = new google.maps.DirectionsService();

var markersATMS = [];
var markersBranches = [];
var markersActive = '000';
//Se coloca de
var bundle_prefix = '/assets/';

var atm_image = bundle_prefix + '/img/atm.png';
var branch_image = bundle_prefix + '/img/branch.png';

String.prototype.replaceAt = function(index, character) {
    return this.substr(0, index) + character + this.substr(index + character.length);
}

function initialize() {
    directionsDisplay = new google.maps.DirectionsRenderer({
        suppressMarkers: true
    });
    var mapOptions = {
        scrollwheel: false,
        zoom: 14,
        panControl: true,
        panControlOptions: {
            position: google.maps.ControlPosition.RIGHT_CENTER
        },
        mapTypeControl: true,
        mapTypeControlOptions: {
            position: google.maps.ControlPosition.RIGHT_CENTER
        },
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.LARGE,
            position: google.maps.ControlPosition.RIGHT_CENTER
        }
    };

    map = new google.maps.Map(document.getElementById('map'), mapOptions);
    directionsDisplay.setMap(map);

    google.maps.event.addListener(map, 'click', function(event) {
        var scrollWheelEnabled = map.get('scrollwheel') == true ? false : true;
        map.set('scrollwheel', scrollWheelEnabled);
    });

    addMarkers(atm_image, Markers_Config.atm_markers, Markers_Config.atm_markers_lenght, markersATMS);
    markersActive = markersActive.replaceAt(1, '1');

    $('#atms').trigger("click");

    $('#atms').on('click', function() {
        if (markersActive.charAt(1) == '1') {
            clearOverlays(markersATMS);
            markersActive = markersActive.replaceAt(1, '0');
        } else {
            $("#sky-tab2").trigger("click");
            $("#mAlertB").removeClass("inm");
            $("#mAlertA").addClass("inm");
            addMarkers(atm_image, Markers_Config.atm_markers, Markers_Config.atm_markers_lenght, markersATMS);
            markersActive = markersActive.replaceAt(1, '1');
        }
    });

    addMarkers(branch_image, Markers_Config.branch_markers, Markers_Config.branch_markers_lenght, markersBranches);
    markersActive = markersActive.replaceAt(0, '1');
    
    $('#branches').trigger("click");

    $('#branches').on('click', function() {
        if (markersActive.charAt(0) == '1') {
            clearOverlays(markersBranches);
            markersActive = markersActive.replaceAt(0, '0');
        } else {
            $("#mAlertB").addClass("inm");
            $("#mAlertA").removeClass("inm");
            $("#sky-tab1").trigger("click");
            addMarkers(branch_image, Markers_Config.branch_markers, Markers_Config.branch_markers_lenght, markersBranches);
            markersActive = markersActive.replaceAt(0, '1');
        }
    });

    pos = new google.maps.LatLng(-25.286192, -57.584036);

    ConfigureNavigatorHTML5();

    map.setCenter(pos);

}

function ConfigureNavigatorHTML5() {
    // Try HTML5 geolocation
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            pos = new google.maps.LatLng(position.coords.latitude,
                position.coords.longitude);

            var user_img = bundle_prefix + 'img/user_marker.png';

            userMarker = new google.maps.Marker({
                position: pos,
                icon: user_img,
                animation: google.maps.Animation.BOUNCE,
                map: map
            });

            map.setCenter(pos);
        }, function() {
            handleNoGeolocation(true);
        });
    } else {
        // Browser doesn't support Geolocation
        // handleNoGeolocation(false);
        // alert("Su navegador no soporta compartir su ubicacion");
    }
}

function handleNoGeolocation(errorFlag) {
    if (errorFlag) {
        //var content = 'Sugerencia: Para mayor exactitud permitanos usar su posición';
        // alert("Sugerencia: Para mayor exactitud permitanos usar su posición");
    } else {
        //var content = 'Error: Tu navegador no soporta geolocación.';
    }

    map.setCenter(pos);
}

function addMarkers(image, markers, markers_lenght, persistentMarkers) {
    //var image = 'img/ui/atm.png';
    var myLatLng;
    for (var i = markers_lenght - 1; i >= 0; i--) {
        myLatLng = new google.maps.LatLng(markers[i].latitud, markers[i].longitud);
        var branchMarker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            clickable: true,
            icon: image,
            animation: google.maps.Animation.DROP,
        });
        persistentMarkers[i] = branchMarker;

        branchMarker.info = new google.maps.InfoWindow({
            content: '<h6>' + markers[i].titulo + '</h6>'
        });

        google.maps.event.addListener(branchMarker, 'click', function() {

            this.info.open(map, this);

            if (this.getAnimation() != null)
                this.setAnimation(null);
            else
                this.setAnimation(google.maps.Animation.BOUNCE);

            if (current_marker != null) {
                current_marker.setAnimation(null);
                current_marker.info.close();
            }


            current_marker = this;

            Route(this.getPosition());

        });

        google.maps.event.addListener(branchMarker.info, 'closeclick', function() {
            current_marker.setAnimation(null); //removes marker animation
        });
    }
}

function clearOverlays(markers) {
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(null);
    }
    markers.length = 0;
}

function Route(marker_pos) {

    var start = userMarker.getPosition();
    var end = marker_pos;
    var request = {
        origin: start,
        destination: end,
        travelMode: google.maps.TravelMode.WALKING
    };
    directionsService.route(request, function(result, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(result);
        }
    });
}

// google.maps.event.addDomListener(window, 'load', initialize);

jQuery(document).ready(function($) {
    $("#map").css({
        'height': $(window).height() * 0.85 + 'px'
    });
});

function loadAtm(json) {
    Markers_Config.atm_markers = json.result.atms;
    Markers_Config.atm_markers_lenght = json.result.atms.length;
}

function loadBranch(json) {
    Markers_Config.branch_markers = json.result.branches;
    Markers_Config.branch_markers_lenght = json.result.branches.length;
}
