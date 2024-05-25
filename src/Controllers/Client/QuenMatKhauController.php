<?php

namespace Assignment\Php2News\Controllers\Client;

use Assignment\Php2News\Commons\Controller;

class QuenMatKhauController extends Controller
{
    public function quenMatKhau()
    {
        $this->renderViewClient('quenmatkhau');
    }
}