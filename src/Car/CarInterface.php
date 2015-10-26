<?php
/**
 * Created by PhpStorm.
 * User: device
 * Date: 21.10.15
 * Time: 19:19
 */
namespace Car;

interface CarInterface
{
    public function getDoor();
    public function getSpeed();
    public function setDoor($value);
    public function setSpeed($value);
}
