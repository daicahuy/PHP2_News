<?php

namespace Assignment\Php2News\Controllers\Admin;

use Assignment\Php2News\Commons\Controller;
use Assignment\Php2News\Commons\Helper;
use Assignment\Php2News\Models\User;

class UsersController extends Controller
{
    private string $folder = 'pages.users.';

    private User $user;

    public function __construct()
    {
        $this->user = new User;
    }

    // Users list
    public function list()
    {

        // Helper::debug($this->user->getAll());

        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

    // Users Restore Password
    public function restorePassword()
    {
        // CODE Restore Password....
    }

    // Users edit
    public function edit()
    {
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

    // Users lock
    public function lock()
    {
        // CODE Lock....
    }

    // Users unlock
    public function unlock()
    {
        // CODE Unlock...
    }

    // Users listLock
    public function listLock()
    {
        return $this->renderViewAdmin($this->folder . 'list-lock');
    }
}
