<?php

namespace Assignment\Php2News\Controllers\Client;

use Assignment\Php2News\Commons\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = ['title'=>'Trang chủ'];
        $this->renderViewClient('home',$data);
        
    }
}
