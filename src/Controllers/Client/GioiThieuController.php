<?php

namespace Assignment\Php2News\Controllers\Client;

use Assignment\Php2News\Commons\Controller;

class GioiThieuController extends Controller
{
    public function gioiThieu()
    {
        $data = ['title'=>'Giới thiệu'];
        $this->renderViewClient('pages.gioithieu', $data);
    }
}
