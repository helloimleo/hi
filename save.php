<?php
$lat = $_GET['lat'] ?? 'undefined';
$lon = $_GET['lon'] ?? 'undefined';
$time = date("Y-m-d H:i:s");

$log = "$time - Latitude: $lat | Longitude: $lon\n";
file_put_contents("haha.txt", $log, FILE_APPEND);

echo "Lokasi disimpan.";
?>
