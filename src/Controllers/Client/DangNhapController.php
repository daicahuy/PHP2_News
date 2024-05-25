<?php

namespace Assignment\Php2News\Controllers\Client;

use Assignment\Php2News\Commons\Controller;

class DangNhapController extends Controller
{
    public function dangNhap()
    {
        $this->renderViewClient('dangnhap');
    }
}