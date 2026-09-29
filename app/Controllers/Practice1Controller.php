<?php
namespace App\Controllers;

use App\Libraries\Practice1\TemperatureConverter;

class Practice1Controller extends BaseController
{
    public function  temp() {
        $data = [];

        if ($this->request->getMethod() === 'POST') {
            $celsius = $this->request->getPost('celsius');

            $result = TemperatureConverter::celsiusToFahrenheit($celsius);

            $data['celsius'] = $celsius;
            $data['result'] = $result;
        }
    return view('practice1/temp_view', $data);
    }
}