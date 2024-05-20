<?php

namespace Assignment\Php2News\Controllers\Client;

use Assignment\Php2News\Common\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->renderViewClient(__FUNCTION__);
    }
}
