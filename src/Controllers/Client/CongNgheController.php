<?php

namespace Assignment\Php2News\Controllers\Client;

use Assignment\Php2News\Commons\Controller;

class CongNgheController extends Controller
{
    public function congNghe()
    {
        $this->renderViewClient('congnghe');
    }
}
