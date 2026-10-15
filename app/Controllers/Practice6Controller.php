<?php
namespace App\Controllers;

class Practice6Controller extends BaseController
{
    public function index()
    {
        $data = [];
        $tax = 0 ;
        if ($this->request->is('post')){
            $emp_name = $this->request->getPost('emp_name');
            $salary = $this->request->getPost('salary');
            if ($salary <= 15000) {
                $tax = 0;
            }else if ($salary > 15000 && $salary <= 30000) {
                $tax = 0.03;
            }else if ($salary > 30000 ) {
                $tax = 0.05;
            }
            $data['emp_name'] = $emp_name;
            $data['salary'] = $salary;
            $data['tax_rate'] = $tax;
            $data['tax_amont'] = $salary * $tax;
            $data['net_salary'] = $salary - ($salary * $tax);
        }
        return view('practice6/payroll_view', $data);
    }
}