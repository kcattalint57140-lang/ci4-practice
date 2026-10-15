<?php
namespace App\Controllers;

class Practice5Controller extends BaseController
{
    public function index()
    {
        $data = [];
        if ($this->request->is('post'))
            {
                $weight = $this->request->getPost('weight');
                $height = $this->request->getPost('height');

                $heightMeter = $height / 100;
                $bmi = $weight / ($heightMeter * $heightMeter);

                if($bmi < 18.5) {
                    $status = "น้ำหนักน้อย / ผอม";
                } else {
                    if($bmi >= 18.5 && $bmi <= 22.9) {
                        $status = "น้ำหนักปกติ / สมส่วน";
                    } else {
                        if($bmi >= 23 && $bmi <= 24.9) {
                            $status = "น้ำหนักเกิน / โรคอ้วนระดับ 1";
                        } else {
                            if($bmi >= 25 && $bmi <= 29.9) {
                                $status = "โรคอ้วนระดับ 2";
                            } else {
                                $status = "โรคอ้วนระดับ 3";
                            }
                        }
                    }
                }
                $data['bmi'] = $bmi;
                $data['status'] = $status;
            }
            return view('practice5/bmi_view', $data);
    }
}