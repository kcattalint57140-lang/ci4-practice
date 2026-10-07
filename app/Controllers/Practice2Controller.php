<?php

namespace App\Controllers;

use App\Libraries\Practice2\FullTimeEmployee;
use App\Libraries\Practice2\PartTimeEmployee;

class Practice2Controller extends BaseController
{
    public function index()
    {
        $data = [
            'empName' => '',
            'empType' => '',
        ];

        if ($this->request->is('post')) {
            $name = $this->request->getPost('name');
            $type = $this->request->getPost('type');
            $amount = (float)$this->request->getPost('amount');

            if ($type === 'fulltime') {
                $emp = new FullTimeEmployee($name, $amount);
            } else {
                $emp = new PartTimeEmployee($name, $amount, 160); 
            }

            $data['empName'] = $emp->getName();
            $data['empType'] = ($type === 'fulltime') ? 'พนักงานประจำ (รวมโบนัส 10%)' : 'พนักงาน Part-time (คิดที่ 160 ชม.)';
            $data['totalSalary'] = number_format($emp->calculateSalary(), 2);
        }

        return view('practice2/payroll_view', $data);
    }
}