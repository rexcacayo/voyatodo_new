/******* Maps of Google *********/

$(document).ready(function() {
	//********** actualiza el mapa si esta en modo edicion
	var ltd = $(".text-lat").val();
	var lng = $(".text-log").val()
	if(ltd!="" && lng!="")
	{
		refreshMapNuevo();
	}
	else
	{
		load_map();
	}
});
 
var map;
 
function load_map() {
    var myLatlng = new google.maps.LatLng(20.68009, -101.35403);
    var myOptions = {
        zoom: 1,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    };
    map = new google.maps.Map($(".map_canvas").get(0), myOptions);
    map1 = new google.maps.Map($(".map_canvas1").get(0), myOptions);
}
 
$('#search').on('click', function() {
    // Obtenemos la dirección y la asignamos a una variable
    var address = $('.text-address').val();
    // Creamos el Objeto Geocoder
    var geocoder = new google.maps.Geocoder();
    // Hacemos la petición indicando la dirección e invocamos la función
    // geocodeResult enviando todo el resultado obtenido
    geocoder.geocode({ 'address': address}, geocodeResult);
});

$('#searchupd').on('click', function() {
   refreshMap();
});

function refreshMapNuevo(){
    var myLatlng = new google.maps.LatLng($(".event_lat").val(), $(".event_log").val());
    var myOptions = {
        zoom: 15,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    };
    map = new google.maps.Map($(".map_canvas").get(0), myOptions);
    map1 = new google.maps.Map($(".map_canvas1").get(0), myOptions);
    //marker.setMap(map);
    //marker.setMap(map1);
}

function refreshMap(){
    var myLatlng = new google.maps.LatLng($(".event_lat").val(), $(".event_log").val());
    var myOptions = {
        zoom: 4,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    };
    map = new google.maps.Map($(".map_canvas").get(0), myOptions);
    map1 = new google.maps.Map($(".map_canvas1").get(0), myOptions);
    //marker.setMap(map);
}
 
function geocodeResult(results, status) {
    if (status == 'OK') {
        $(".event_lat").val(results[0].geometry.location.lat());
        $(".event_log").val(results[0].geometry.location.lng());
        // Si hay resultados encontrados, centramos y repintamos el mapa
        // esto para eliminar cualquier pin antes puesto
        var mapOptions = {
            center: results[0].geometry.location,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map($(".map_canvas").get(0), mapOptions);
        map1 = new google.maps.Map($(".map_canvas1").get(0), mapOptions);
        // fitBounds acercará el mapa con el zoom adecuado de acuerdo a lo buscado
        map.fitBounds(results[0].geometry.viewport);
        map1.fitBounds(results[0].geometry.viewport);
        // Dibujamos un marcador con la ubicación del primer resultado obtenido
        var markerOptions = { position: results[0].geometry.location }
        var marker = new google.maps.Marker(markerOptions);
        var marker1 = new google.maps.Marker(markerOptions);
        marker.setMap(map);
        marker1.setMap(map1);
        google.maps.event.addListener(map, "click", function (event) {
            var latitude = event.latLng.lat();
            var longitude = event.latLng.lng();
            marker.setMap(null);
            marker1.setMap(null);

            $(".event_lat").val(latitude);
            $(".event_log").val(longitude);

            markerOptions = { position: event.latLng }
            marker = new google.maps.Marker(markerOptions);
            marker.setMap(map);
            marker1 = new google.maps.Marker(markerOptions);
            marker1.setMap(map1);

            // Center of map
            map.panTo(new google.maps.LatLng(latitude,longitude));
            map1.panTo(new google.maps.LatLng(latitude,longitude));
        });
        google.maps.event.addListener(map1, "click", function (event) {
            var latitude = event.latLng.lat();
            var longitude = event.latLng.lng();
            marker1.setMap(null);
            marker.setMap(null);

            $(".event_lat").val(latitude);
            $(".event_log").val(longitude);

            markerOptions = { position: event.latLng }
            marker1 = new google.maps.Marker(markerOptions);
            marker1.setMap(map1);
            marker = new google.maps.Marker(markerOptions);
            marker.setMap(map);
            // Center of map
            map1.panTo(new google.maps.LatLng(latitude,longitude));
            map.panTo(new google.maps.LatLng(latitude,longitude));

        });

    } else {
        swal({
        	title: "",
           	text: "Ingresa una dirección válida",
           	type: "warning"
           }
        );
    }
}

$(document).on('click',"#btn-cal",function() {
	$.ajax({
    	type: 'post',
        data: {
        	id: $("#pkevent").val(),
        },
		url: window.location.protocol +"//" + window.location.host + '/voyatodo/web/evento/generatecalendar',
    	success: function(data){
    		if(data != ''){
    			downloadFile(generateData(data), 'calendario.ics');
    		}
    		else{
    			swal({
		          title: "",
		          text: "No se pudo procesar tu requerimiento.",
		          type: "error"
		        });
	    	}
    	}
	});
});