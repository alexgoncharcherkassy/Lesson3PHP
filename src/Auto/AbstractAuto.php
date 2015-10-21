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

    /**
     * @return string
     */
    public function __toString()
    {
        $message ='';
        $message.='Model: '.$this->getModel().'<br/>';
        $message.='Color: '.$this->getColor().'<br/>';

        return $message;
    }

    /**
     * @param $variable
     * @return mixed
     */
    public function __get($variable)
    {
        return $this->$variable;
    }

    /**
     * @param $variable
     * @param $value
     */
    public function __set($variable, $value)
    {
        if (is_string($value)) {
            $value = htmlspecialchars($value);
        }
        $this->$variable = $value;
    }

}