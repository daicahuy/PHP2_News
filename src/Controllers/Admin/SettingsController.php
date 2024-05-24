<?php

namespace Assignment\Php2News\Controllers\Admin;

use Assignment\Php2News\Common\Controller;

class SettingsController extends Controller
{

    private string $folder = 'pages.settings.';

    // Settings
    public function index() {
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

    // Settings Edit
    public function edit() {
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }
    
}
