<?php

$height = 3;
$width = 10;
// $volume = $height * $width * $length;


function volume($length, $height, $width) {

	return $height * $width * $length;

}

function trucks($volume, $truck_size) {

	return ceil($volume / $truck_size);
}

function price($trucks, $truck_size) {

	return ($truck_size * 0.75 + 50) * $trucks;
}