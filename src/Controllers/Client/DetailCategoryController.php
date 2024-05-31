<?php

namespace Assignment\Php2News\Controllers\Client;

use Assignment\Php2News\Commons\Controller;

class DetailCategoryController extends Controller
{
    public function index()
    {
        return $this->renderViewClient('pages.detail-category');
    }
}
