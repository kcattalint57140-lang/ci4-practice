<?php
namespace App\Libraries\Practice1;

class TemperatureConverter
{
    public static function celsiusToFahrenheit($celsius){
        return ($celsius * 9/5) + 32;
    }
}