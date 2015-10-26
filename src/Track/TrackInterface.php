<?php
/**
 * Created by PhpStorm.
 * User: device
 * Date: 21.10.15
 * Time: 20:27
 */

namespace Track;

interface TrackInterface
{
    public function getCapacity();
    public function getTire();
    public function setCapacity($value);
    public function setTire($value);
}
