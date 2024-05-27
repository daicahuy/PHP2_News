<?php

namespace Assignment\Php2News\Controllers\Client;

use Assignment\Php2News\Commons\Controller;

class ChiTietController extends Controller
{
    public function dangKy()
    {
        $data = ['title'=>'Đăng ký'];
        $this->renderViewClient('login.dangky', $data);
    }
    public function chiTiet()
    {
        $data = ['title'=>'Chi tiết'];
        $this->renderViewClient('pages.chitiet', $data);
    }
}
