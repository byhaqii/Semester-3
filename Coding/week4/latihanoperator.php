<?php
$totalSeats = 60;

$occupiedSeats = 45;

$emptySeats = $totalSeats - $occupiedSeats;

$percentageEmpty = ($emptySeats / $totalSeats) * 100;

echo "The percentage of seats that are still empty is: " . $percentageEmpty . "%";
?>