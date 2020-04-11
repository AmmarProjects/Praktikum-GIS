<?php include "connect.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ilmu-detil.blogspot.com">
    <title>Multi Marker Map </title>
    <!-- Bagian css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/ilmudetil.css">

    <!-- Bagian js -->
    <script src='assets/js/jquery-1.10.1.min.js'></script>

    <script src="assets/js/bootstrap.min.js"></script>
    <!-- akhir dari Bagian js -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script>
        function initialize() {

            var infoWindow = new google.maps.InfoWindow();
            var mapOptions = {
                mapTypeId : google.maps.MapTypeId.ROADMAP
            }

            var map = new google.maps.Map(document.getElementById('map-canvas', mapOptions));

            var bounds = new google.maps.LatLngBounds();

            <?php
                $query = mysqli_query($con, "SELECT * FROM data_location");
                while ($data = mysqli_fetch_array($query)){
                    $nama = $data['desc'];
                    $lat = $data['lat'];
                    $lon = $data['lon'];

                    echo ("addMarker($lat, $lon, '<b>$nama</b>');\n");
                }
            ?>

            function addMarker(lat, lng, info){
                var lokasi = new google.maps.LatLng(lat,lng);
                bounds.extend(lokasi);
                var marker = new google.maps.Marker({
                    map : map,
                    position : lokasi
                });

                map.fitBounds(bounds);
                bindInfoWindow(marker, map, infoWindow, info);
            }

            function bindInfoWindow(marker, map, infoWindow, html){
                google.maps.event.addListener(marker, 'click', function(){
                    infoWindow.setContent(html);
                    infoWindow.open(map, marker);
                });
            }
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    </script>

</head>

<body onload="initialize()">
    </br></br></br></br>
    <!--- Bagian Judul-->
    <div class="container" style="margin-top:10px">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Marker Google Maps</div>
                    <div class="panel-body">
                        <div id="map-canvas" style="width: 700px; height: 600px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>