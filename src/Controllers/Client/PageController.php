<?php

namespace Assignment\Php2News\Controllers\Client;

use Assignment\Php2News\Commons\Controller;

class PageController extends Controller
{
    public function thoiSu()
    {
        $data = [
            'title' => 'Thời sự',
            // 'cate_name'=>'Thời sự'
        ];

        $this->renderViewClient('pages.thoisu', $data);
    }


    public function theThao()
    {
        $data = ['title' => 'Thể thao'];
        $this->renderViewClient('pages.thethao', $data);
    }


    public function congNghe()
    {
        $data = ['title' => 'Công nghệ'];
        $this->renderViewClient('pages.congnghe', $data);
    }
}
