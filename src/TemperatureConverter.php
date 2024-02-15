<?php

namespace MattTour\MyDigitalSchoolPlugin;

use Exception;

class TemperatureConverter 
{
    public function convert($temperature, $unite) {
        if ($unite === 'C') {
            $temperature = ($temperature * 9 / 5) + 32;
        } elseif ($unite === 'F') {
            $temperature = ($temperature - 32) * 5 / 9;
        } else {
            throw new Exception("Error Processing Request", 1);
        }

        return $temperature;
    }
}
