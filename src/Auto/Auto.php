<?php
/**
 * Created by PhpStorm.
 * User: device
 * Date: 21.10.15
 * Time: 18:54
 */

namespace Auto;

use Auto\AbstractAuto;

class Auto extends AbstractAuto
{
    protected $color;
    protected $model;

    public function __construct($color, $model)
    {
        $this->color=$color;
        $this->model=$model;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getModel()
    {
        return $this->model;
    }
}