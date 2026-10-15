<?php
namespace App\Controllers;
class Practice7Controller extends BaseController
{
    public function index()
    {
        $data = [];

        if ($this->request->is('post')) {
                $totalPrice = $this->request->getPost('total_price');
                $tipPercent = $this->request->getPost('tip_percent');
                $pCount = $this->request->getPost('people_count');

                $tipAmount = $totalPrice * ($tipPercent / 100);
                $grandTotal = $totalPrice + $tipAmount;
                $perPerson = $grandTotal / $pCount;


                $data['tip_amount'] = $tipAmount;
                $data['grand_total'] = $grandTotal;
                $data['per_person'] = $perPerson;
        }
    return view('practice7/bill_view' , $data);
    }
}