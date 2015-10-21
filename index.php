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

$auto=new Auto('red','bmw');

print($auto);
echo '<br/>';

$car=new Car('black','audi');
$car->setDoor('4');
$car->setSpeed('200');

print($car);
echo '<br/>';

$track=new Track('white','man');
$track->setCapasity('25t');
$track->setTire('8');

print($track);
echo '<br/>';

$arr=array($auto, $car, $track);
foreach ($arr as $mobile) {
    echo $mobile;
    echo '<hr/>';
}