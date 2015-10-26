<?php
/**
 * Created by PhpStorm.
 * User: device
 * Date: 26.10.15
 * Time: 19:01
 */
namespace Auto;

interface PriceInterface
{
    public function setPrice($price);
    public function getPrice();
}