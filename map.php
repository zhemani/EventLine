<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

$pagetitle = "MapView - EventLine";
include "incs/header.php";

if (isset($_SESSION['locarray'][0])) {
   // echo $_SESSION['locarray'][2];

    foreach($_SESSION['locarray'] as $locat){
        //echo $locat;
        //echo '<br>';
    }
}
else{
    echo "asdaasdasdasd";
}


    //$map_address = "University of Western Ontario, London, ON, Canada";
?>
<!DOCTYPE html>
<html>
<head>
    <script
        src="http://maps.googleapis.com/maps/api/js">
    </script>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.10.1.min.js"></script>

</head>
<body>
<div id="map-canvas" style="height:93%;top:40px"></div>
<script>
    var address = [
        <?php
           foreach($_SESSION['locarray'] as $locat)
           {
               echo '"'.$locat.'",';
           }
        ?>
    ];


    var map = new google.maps.Map(document.getElementById('map-canvas'), {
        zoom: 14,
        center: new google.maps.LatLng(35,0),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var infowindow = new google.maps.InfoWindow();
    var geocoder = new google.maps.Geocoder;

    function makeJSONRequest(location1, x) {
        var latlng;
        $.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address=' + location1 + '&sensor=false', null, function(data) {
            //console.log(location1);
            var p = data.results[0].geometry.location
            latlng = new google.maps.LatLng(p.lat, p.lng);
            console.log(p.lat);
            //console.log(latlng);
            map.setCenter(latlng);
            marker = new google.maps.Marker({
                position: latlng,
                map: map
            });
            google.maps.event.addListener(marker, 'click', (function(marker, location1) {
                return function() {
                    geocoder.geocode({'location':latlng}, function (results, status) {
                        if (status === google.maps.GeocoderStatus.OK){


                            //infowindow.setContent(location1, latlng);
                            infowindow.setContent("<div style='font-weight:bold'>"+address[x]+"</div>"+"<div><br>Co-ordinates: "+marker.getPosition().toUrlValue(3)+"</div>"+"<div>"+results[1].formatted_address+"</div>");
                            //console.log(locations);
                            infowindow.open(map, marker);
                        }
                    });
                }
            })(marker, location1));
        });
    }
    function makeJSONRequest2(location1, x) {
        var latlng;
        var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|018DEF");
        $.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address=' + location1 + '&sensor=false', null, function(data) {
            //console.log(location1);
            var p = data.results[0].geometry.location
            latlng = new google.maps.LatLng(p.lat, p.lng);
            console.log(p.lat);
            //console.log(latlng);
            marker = new google.maps.Marker({
                position: latlng,
                map: map,
                icon: pinImage

            });
            google.maps.event.addListener(marker, 'click', (function(marker, location1) {
                return function() {
                    geocoder.geocode({'location':latlng}, function (results, status) {
                        if (status === google.maps.GeocoderStatus.OK){


                            //infowindow.setContent(location1, latlng);
                            infowindow.setContent("<div style='font-weight:bold'>"+address[x]+"</div>"+"<div><br>Co-ordinates: "+marker.getPosition().toUrlValue(3)+"</div>"+"<div>"+results[1].formatted_address+"</div>");
                            //console.log(locations);
                            infowindow.open(map, marker);
                        }
                    });
                }
            })(marker, location1));
        });
    }


    $(document).ready()
    {
        for (var i = 0; i < address.length; i++) {
           console.log(address[i]);
            makeJSONRequest2(address[0], 1);
            makeJSONRequest(address[2], 3);
            makeJSONRequest(address[4], 5);
            makeJSONRequest(address[6], 7);
            makeJSONRequest(address[8], 9);
            makeJSONRequest(address[10], 11);




        }
    }


</script>
</body>



</html>