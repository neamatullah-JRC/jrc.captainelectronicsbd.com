<?php
//error: Google Maps JavaScript API error: ApiNotActivatedMapError
//solution: click "APIs and services" Link
//			click "Enable APIs and services" button
//			Select "Maps JavaScript API" then click on enable

require 'config.php';

$sql = "SELECT * FROM jrc001 WHERE 1";
$result = $db->query($sql);
if (!$result) {
  { echo "Error: " . $sql . "<br>" . $db->error; }
}

$rows = $result -> fetch_all(MYSQLI_ASSOC);

//print_r($row);

//header('Content-Type: application/json');
//echo json_encode($rows);


?>
<html>
<head>
<title>Add Markers to Show Locations in Google Maps</title>
</head>
<style>
body {
	font-family: Arial;
}

#map-layer {
	margin: 20px 0px;
	max-width: 700px;
	min-height: 400;
}
</style>
<body>
	<h1>Add Markers to Show Locations in Google Maps</h1>
	<div id="map-layer"></div>

	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVTTtNJ3mWN0GXQTFfOVH3dt81CJjenGI&callback=initMap"
		async defer></script>
		
        <script>
      var map;
      function initMap() {
        
        var mapLayer = document.getElementById("map-layer");
		var centerCoordinates = new google.maps.LatLng(22.809830, 89.548683);
		var defaultOptions = { center: centerCoordinates, zoom: 10 }

		map = new google.maps.Map(mapLayer, defaultOptions);
        map.setMapTypeId('terrain');

 const svgMarker = {
    path: "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
    fillColor: "blue",
    fillOpacity: 0.6,
    strokeWeight: 0,
    rotation: 0,
    scale: 2,
    anchor: new google.maps.Point(15, 30),
  };
    const lineSymbol = {
    path: "M 0,-1 0,1",
    strokeOpacity: 1,
    scale: 4,
  };

<?php foreach($rows as $location){ ?>
        var location = new google.maps.LatLng(<?php echo $location['lat']; ?>, <?php echo $location['lng']; ?>);
        var marker = new google.maps.Marker({
            position: location,
            icon: lineSymbol,
            map: map
        });
    <?php } ?>
        
      }
    </script>
</body>
</html>