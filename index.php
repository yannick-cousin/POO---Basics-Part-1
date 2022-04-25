<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$lisa = new Bicycle('blue');
$homer = new Car('pink',5,'fuel');

var_dump($lisa);
var_dump($homer);

// Moving bike
echo 'Moving Bike of Lisa<br/>';
echo $lisa->forward();
echo '<br> Vitesse du vélo : ' . $lisa->getCurrentSpeed() . ' km/h' . '<br>';
echo $lisa->brake();
echo '<br> Vitesse du vélo : ' . $lisa->getCurrentSpeed() . ' km/h' . '<br>';
echo $lisa->brake();

//Moving Car
echo '<br><br>Moving Car of Homer <br/>';
echo $homer->start();
echo '<br>';
echo $homer->forward();
echo '<br>';
echo $homer->brake();