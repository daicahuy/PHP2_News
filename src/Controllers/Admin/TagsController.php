<?php

namespace Assignment\Php2News\Controllers\Admin;

use Assignment\Php2News\Common\Controller;

class TagsController extends Controller
{
    private string $folder = 'pages.tags.';

    // Categories List
    public function list()
    {
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

    // Categories Edit
    public function edit()
    {
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

    // Categories Hiden
    public function hide()
    {
        // HIDE code...
    }

    // Categories Show
    public function show()
    {
        // SHOW code...
    }

    // Categories Delete
    public function delete()
    {
        // DELETE code...
    }

    // Categories List Hiden
    public function listHide()
    {
        return $this->renderViewAdmin($this->folder . 'list-hide');
    }
    
}
