<?php
/**
 * Created by PhpStorm.
 * User: device
 * Date: 21.10.15
 * Time: 20:26
 */

namespace Track;

use Auto\Auto;
use Auto\PriceInterface;

class Track extends Auto implements TrackInterface, PriceInterface
{
    protected $numberOfTires;
    protected $capacity;
    protected $price;

    public function __toString()
    {
        $message = parent::__toString();
        $message .= 'Tires: '.$this->getTire().'<br/>';
        $message .= 'Capacity: '.$this->getCapacity().'<br/>';
        $message .= 'Price: '.$this->getPrice().'<br/>';

        return $message;
    }

    /**
     * @return mixed
     */
    public function getTire()
    {
        return $this->numberOfTires;
    }

    /**
     * @return mixed
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param $value
     */
    public function setTire($value)
    {
        $this->numberOfTires = $value;
    }

    /**
     * @param $value
     */
    public function setCapacity($value)
    {
        $this->capacity = $value;
    }

    /**
     * @param $price
     */
    public function setPrice($price)
    {
        $this->price = $price*1.2;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
}
