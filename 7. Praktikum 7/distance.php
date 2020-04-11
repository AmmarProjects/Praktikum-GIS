<?php

function getDistanceBetween($latitude1, $longitude1, $latitude2, $longitude2, $unit = 'Mi') 
{ 
	$theta = $longitude1 - $longitude2; 
	$distance = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2)))  + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta))); 
	$distance = acos($distance); 
	$distance = rad2deg($distance); 
	$distance = $distance * 60 * 1.1515; 
	switch($unit) 
	{ 
		case 'Mi': break; 
		case 'Km' : $distance = $distance * 1.609344; 
	} 
	return (round($distance,2)); 
}

$mylatitude = -7.621479;
$mylongitude = 111.528370;


echo "Jarak Lokasi Saya dengan Monumen TGP = ".getDistanceBetween($mylatitude, $mylongitude, -7.62232500, 111.52794100, 'Km')." Km <br>";
echo "Jarak Lokasi Saya dengan SMA 2 Madiun = ".getDistanceBetween($mylatitude, $mylongitude, -7.62152000, 111.52575700, 'Km')." Km <br>";
echo "Jarak Lokasi Saya dengan Stasiun = ".getDistanceBetween($mylatitude, $mylongitude, -7.61884000, 111.52407800, 'Km')." Km <br>";
echo "Jarak Lokasi Saya dengan Magetan = ".getDistanceBetween($mylatitude, $mylongitude, -7.65549600, 111.32787800, 'Km')." Km <br>";
echo "Jarak Lokasi Saya dengan X = ".getDistanceBetween($mylatitude, $mylongitude, -7.62089000, 111.52863000, 'Km')." Km <br>";

?>