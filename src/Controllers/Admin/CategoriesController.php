<?php

namespace Assignment\Php2News\Controllers\Admin;

use Assignment\Php2News\Commons\Controller;
use Assignment\Php2News\Commons\Helper;
use Assignment\Php2News\Models\Categories;

class CategoriesController extends Controller
{
    private string $folder = 'pages.categories.';
    private $folderInstance;
    private $cate;

    public function __construct()
    {
        $this->folderInstance = new Categories();
    }
    // Categories List
    public function list()
    {
        $cate = $this->folderInstance->getAll();
        Helper::debug($cate);
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

    // Categories Edit
    public function edit()
    {
        $cate = $this->folderInstance->updateCategories();
        
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
        
    }

    // Categories List Hiden
    public function listHide()
    {
        return $this->renderViewAdmin($this->folder . 'list-hide');
    }
    
}
