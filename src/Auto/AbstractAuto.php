<?php
/**
 * Created by PhpStorm.
 * User: device
 * Date: 21.10.15
 * Time: 18:42
 */

namespace Auto;

abstract class AbstractAuto
{
    public abstract function getColor();
    public abstract function getModel();

    public function __toString()
    {
        $message='';
        $message.='Model: '.$this->getModel().'<br/>';
        $message.='Color: '.$this->getColor().'<br/>';

        return $message;
    }

    public function __get($variable)
    {
        return $this->$variable;
    }

    public function __set($variable, $value)
    {
        $this->$variable=$value;
    }

}