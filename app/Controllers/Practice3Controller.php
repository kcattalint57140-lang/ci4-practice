<?php
namespace App\Controllers;

class Practice3Controller extends BaseController
{
    public function index()
    {
        $data = [];
        if ($this->request->is('post'))
            {
                $nName = $this->request->getPost('nickname');
                $score = $this->request->getPost('score');

                if($score >= 50) {
                    $status = "ผ่านเกณฑ์";
                } else {
                    $status = "ไม่ผ่านเกณฑ์";
                }


                $data['nickname'] = $nName;
                $data['status'] = $status;
            }     
            return view('practice3/hello_view', $data);
    }
}