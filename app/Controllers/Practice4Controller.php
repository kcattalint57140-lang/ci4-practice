<?php
namespace App\Controllers;

class Practice4Controller extends BaseController
{
    public function index()
    {
        $data = [];
        if ($this->request->is('post'))
            {
                $priceProduct = $this->request->getPost('price');
                $discountProduct = $this->request->getPost('discount');

                $discount = $priceProduct * ($discountProduct/100);
                $netPrice = $priceProduct - $discount;

                if($netPrice >= 1000) {
                    $shippingFee = "ค่าจัดส่ง: ฟรี";
                } else {
                    $shippingFee = "ค่าจัดส่ง: 100 บาท";
                }
                $data['netprice'] = $netPrice;
                $data['shippingfee'] = $shippingFee;
            }
            return view('practice4/discount_view', $data);
    }
}