<?php

namespace Assignment\Php2News\Controllers\Admin;

use Assignment\Php2News\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard() {
        $this->renderViewAdmin(__FUNCTION__);
    }
}
