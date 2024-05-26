<?php

namespace Assignment\Php2News\Controllers\Admin;

use Assignment\Php2News\Commons\Controller;

class PostsController extends Controller
{
    private string $folder = 'pages.posts.';

    // Posts List
    public function list()
    {
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

    // Posts Add
    public function add()
    {
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

    // Posts Detail
    public function detail()
    {
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

    // Posts Edit
    public function edit()
    {
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

    // Posts Hiden
    public function hide()
    {
        // HIDE code...
    }

    // Posts Show
    public function show()
    {
        // SHOW code...
    }

    // Posts Delete
    public function delete()
    {
        // DELETE code...
    }

    // Posts List Hiden
    public function listHide()
    {
        return $this->renderViewAdmin($this->folder . 'list-hide');
    }
    
}
