<?php

$lat = $_GET["lat"];
$long = $_GET["long"];

$myfile = fopen("location.txt", "w");

$txt = "lat: $lat\nlong: $long";

fwrite($myfile, $txt);
fclose($myfile);

echo "saved";

?>
