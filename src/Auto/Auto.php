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

    /**
     * @param $color
     * @param $model
     */
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param Auto $obj
     */
    public static function toUpper(Auto $obj)
    {
        foreach ($obj as $key => &$value) {
            $value = strtoupper($value);
        }
    }
}
