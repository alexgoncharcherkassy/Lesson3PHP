<?php
/**
 * Created by PhpStorm.
 * User: device
 * Date: 21.10.15
 * Time: 20:31
 */

require 'vendor/autoload.php';

use Auto\Auto;
use Car\Car;
use Track\Track;

$auto = new Auto('red', 'bmw');

print($auto);
echo '<br/>';

$car = new Car('black', 'audi');
$car->setDoor('4');
$car->setSpeed('200');
$car->setPrice('300');

print($car);
echo '<br/>';

$track = new Track('white', 'man');
$track->setCapacity('25t');
$track->setTire('8');
$track->setPrice('1000');

print($track);
echo '<br/>';

$arr = array($auto, $car, $track);
foreach ($arr as $mobile) {
    Auto::toUpper($mobile);
    echo $mobile;
    echo '<hr/>';
}

$track->fork = '<a href="index.php">INDEX</a>';

print($track->fork);

