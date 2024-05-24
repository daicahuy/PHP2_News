<?php

namespace Assignment\Php2News\Controllers\Admin;

use Assignment\Php2News\Common\Controller;

class UsersController extends Controller
{
    private string $folder = 'pages.users.';

    // Users list
    public function list()
    {
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
