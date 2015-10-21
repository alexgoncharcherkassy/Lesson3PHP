<?php
/**
 * Created by PhpStorm.
 * User: device
 * Date: 21.10.15
 * Time: 19:14
 */

namespace Car;

use Auto\Auto;

class Car extends Auto implements CarInterface
{
    protected $numberofdoors;
    protected $speed;

    public function __toString()
    {
        $message=parent::__toString();
        $message.='Doors: '.$this->getDoor().'<br/>';
        $message.='Speed: '.$this->getSpeed().'<br/>';

        return $message;
    }

    public function getDoor()
    {
        return $this->numberofdoors;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setDoor($value)
    {
        $this->numberofdoors=$value;
    }

    public function setSpeed($value)
    {
        $this->speed=$value;
    }

}