<?php

namespace Assignment\Php2News\Controllers\Admin;

use Assignment\Php2News\Commons\Controller;

class ProfileController extends Controller
{
    private string $folder = 'pages.profile.';

    // Profile
    public function index() {
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

    // Profile Edit
    public function edit() {
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

}
