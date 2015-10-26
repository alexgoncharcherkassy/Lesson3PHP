<?php
/**
 * Created by PhpStorm.
 * User: device
 * Date: 21.10.15
 * Time: 19:14
 */

namespace Car;

use Auto\Auto;
use Auto\PriceInterface;

class Car extends Auto implements CarInterface, PriceInterface
{
    protected $numberOfDoors;
    protected $speed;
    protected $price;

    public function __toString()
    {
        $message = parent::__toString();
        $message .= 'Doors: '.$this->getDoor().'<br/>';
        $message .= 'Speed: '.$this->getSpeed().'<br/>';
        $message .= 'Price: '.$this->getPrice().'<br/>';

        return $message;
    }

    /**
     * @return mixed
     */
    public function getDoor()
    {
        return $this->numberOfDoors;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param $value
     */
    public function setDoor($value)
    {
        $this->numberOfDoors = $value;
    }

    /**
     * @param $value
     */
    public function setSpeed($value)
    {
        $this->speed = $value;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

}
