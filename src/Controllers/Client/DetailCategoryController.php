<?php

namespace Assignment\Php2News\Controllers\Client;

use Assignment\Php2News\Commons\Controller;
use Assignment\Php2News\Commons\Helper;

class DetailCategoryController extends Controller
{
    public function index($id)
    {
        debug($id);
        return $this->renderViewClient('pages.detail-category');
    }
}
