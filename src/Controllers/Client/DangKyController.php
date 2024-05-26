<?php

namespace Assignment\Php2News\Controllers\Client;

use Assignment\Php2News\Commons\Controller;

class DangKyController extends Controller
{
    public function dangKy()
    {
        $this->renderViewClient('dangky');
    }
}