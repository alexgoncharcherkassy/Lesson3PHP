<?php
/**
 * Created by PhpStorm.
 * User: device
 * Date: 21.10.15
 * Time: 20:26
 */

namespace Track;

use Auto\Auto;

class Track extends Auto implements TrackInterface
{
    protected $numberoftires;
    protected $capasity;

    public function __toString()
    {
        $message = parent::__toString();
        $message .= 'Tires: '.$this->getTire().'<br/>';
        $message .= 'Capasity: '.$this->getCapasity().'<br/>';

        return $message;
    }

    /**
     * @return mixed
     */
    public function getTire()
    {
        return $this->numberoftires;
    }

    /**
     * @return mixed
     */
    public function getCapasity()
    {
        return $this->capasity;
    }

    /**
     * @param $value
     */
    public function setTire($value)
    {
        $this->numberoftires = $value;
    }

    /**
     * @param $value
     */
    public function setCapasity($value)
    {
        $this->capasity = $value;
    }
}